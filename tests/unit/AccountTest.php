<?php

class AccountTest extends \PHPUnit_Framework_TestCase
{
    protected function setUp()
    {
        Doctrine\Common\Annotations\AnnotationRegistry::registerLoader('class_exists');

        $this->serializer = JMS\Serializer\SerializerBuilder::create()->setDebug(true)->build();
    }

    protected function tearDown()
    {
        $this->serializer = null;
    }

    // tests
    public function testSerialize()
    {
        $account = new Ci\Klaus\Objects\Account();
        $account
            ->setName('Cost Variance')
            ->setAccountingId('8000001B-1310422643')
            ->setAccountType(12)
            ->setBalance('0');

        $this->assertXmlStringEqualsXmlFile(__DIR__ . '/xml/Account.xml', $this->serializer->serialize($account, 'xml'));
    }

    public function testDeserialize()
    {
        $account = $this->serializer->deserialize(file_get_contents(__DIR__ . '/xml/Account.xml'), 'Ci\Klaus\Objects\Account', 'xml');

        $this->assertEquals('Cost Variance', $account->getName());
        $this->assertEquals('8000001B-1310422643', $account->getAccountingId());
        $this->assertEquals(12, $account->getAccountType());
        $this->assertEquals('0', $account->getBalance());
    }
}
