<?php
namespace Ci\Klaus;

use Ci\Klaus\Request;
use Ci\Klaus\Requests\LoginRequest;
use JMS\Serializer\SerializerBuilder;

class Client
{
    protected $key;

    protected $serializer;

    protected $loginRequest;

    protected $resource = null;

    protected $response;

    public function __construct($appId, $appName, $appDescription = '')
    {
        \Doctrine\Common\Annotations\AnnotationRegistry::registerLoader('class_exists');

        $this->serializer = SerializerBuilder::create()->setDebug(true)->build();

        $this->loginRequest = new LoginRequest;
        $this->loginRequest->setAppId($appId);
        $this->loginRequest->setAppName($appName);
        $this->loginRequest->setAppDescription($appDescription);
    }

    public function __destruct()
    {
        $this->disconnect();
    }

    public function connect($host, $port)
    {
        $this->resource = fsockopen($host, $port);
    }

    public function disconnect()
    {
        if ($this->resource) {
            fclose($this->resource);
        }
    }

    public function login($username, $password)
    {
        $this->loginRequest->setUsername($username);
        $this->loginRequest->setPassword($password);
        $this->request($this->loginRequest);
    }

    public function logout()
    {
        if ($this->isLoggedIn()) {
            $this->request($this->loginRequest);
        }
    }

    public function isLoggedIn()
    {
        return !is_null($this->key);
    }

    public function request(Request $request)
    {
        $serializedRequest = $this->serialize($request);
        $wrappedRequest = $this->wrap($serializedRequest);

        $this->send($wrappedRequest);
        $this->receive();
    }

    protected function serialize(Request $request)
    {
        $serializedRequest = $this->serializer->serialize($request, 'xml');
        $serializedRequest = preg_replace('/^.+\n/', '', $serializedRequest);

        return $serializedRequest;
    }

    protected function wrap($serializedRequest)
    {
        $document = new \DOMDocument();

        $document->formatOutput = true;

        $root = $document->createElement('FbiXml');
        $ticket = $document->createElement('Ticket');
        $key = $document->createElement('Key', $this->key);
        $payload = $document->createElement('FbiMsgsRq');

        $request = $document->createDocumentFragment();
        $request->appendXML($serializedRequest);
        $payload->appendChild($request);

        $root->appendChild($ticket);
        $ticket->appendChild($key);
        $root->appendChild($payload);
        $document->appendChild($root);

        return $document->saveXML($root, LIBXML_NOXMLDECL);
    }

    protected function send($data)
    {
        var_dump($data);

        //Send packed length
        fwrite($this->resource, pack('N', strlen($data)), 4);

        //Send request
        fwrite($this->resource, $data);

        echo 'request sent' . PHP_EOL;
    }

    protected function receive()
    {
        $packed_length = stream_get_contents($this->resource, 4);
        $response = simplexml_load_string(stream_get_contents($this->resource, unpack('Nlen', $packed_length)['len']));

        var_dump($response->FbiMsgsRs->LoginRs);

        $this->response = $this->serializer->deserialize(
            $response->FbiMsgsRs->LoginRs->asXML(), 
            'Ci\Klaus\Responses\LoginResponse',
            'xml'
        );

        var_dump($this->response);
    }
}