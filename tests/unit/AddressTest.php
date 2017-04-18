<?php

class AddressTest extends \PHPUnit_Framework_TestCase
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
        $address = new Ci\Klaus\Objects\Address();

        $tempAccount = (new Ci\Klaus\Objects\Address\TempAccount)->setId(123)->setType(10);

        $state = (new Ci\Klaus\Objects\Address\State)->setId(123)->setName('Utah')->setCode('UT')->setCountryId(2);

        $country = (new Ci\Klaus\Objects\Address\Country)->setId(123)->setName('United States')->setCode('US');

        $addressInformationList = [
            (new Ci\Klaus\Objects\Address\AddressInformation)
                ->setId(123)
                ->setName('Main Office')
                ->setData('Address Data')
                ->setDefault(true)
                ->setType('Home')
        ];

        $address
            ->setId(123)
            ->setTempAccount($tempAccount)
            ->setName('Main Office')
            ->setAttn('Attn')
            ->setStreet('123 Neverland dr.')
            ->setCity('Murray')
            ->setZip('84121')
            ->setLocationGroupID(123)
            ->setDefault(true)
            ->setResidential(false)
            ->setType('Main Office')
            ->setState($state)
            ->setCountry($country)
            ->setAddressInformationList($addressInformationList);

        $this->assertXmlStringEqualsXmlFile(__DIR__ . '/xml/Address.xml', $this->serializer->serialize($address, 'xml'));
    }

    public function testDeserialize()
    {
        $address = $this->serializer->deserialize(file_get_contents(__DIR__ . '/xml/Address.xml'), 'Ci\Klaus\Objects\Address', 'xml');

        $this->assertEquals(123, $address->getId());

        $this->assertInstanceOf(Ci\Klaus\Objects\Address\TempAccount::class, $address->getTempAccount());
        $this->assertEquals(123, $address->getTempAccount()->getId());
        $this->assertEquals(10, $address->getTempAccount()->getType());

        $this->assertEquals('Main Office', $address->getName());
        $this->assertEquals('Attn', $address->getAttn());
        $this->assertEquals('123 Neverland dr.', $address->getStreet());
        $this->assertEquals('Murray', $address->getCity());
        $this->assertEquals('84121', $address->getZip());
        $this->assertEquals(true, $address->getDefault());
        $this->assertEquals(false, $address->getResidential());
        $this->assertEquals('Main Office', $address->getType());

        $this->assertInstanceOf(Ci\Klaus\Objects\Address\State::class, $address->getState());
        $this->assertEquals(123, $address->getState()->getId());
        $this->assertEquals('Utah', $address->getState()->getName());
        $this->assertEquals('UT', $address->getState()->getCode());
        $this->assertEquals(2, $address->getState()->getCountryId());

        $this->assertInstanceOf(Ci\Klaus\Objects\Address\Country::class, $address->getCountry());
        $this->assertEquals(123, $address->getCountry()->getId());
        $this->assertEquals('United States', $address->getCountry()->getName());
        $this->assertEquals('US', $address->getCountry()->getCode());

        $this->assertCount(1, $address->getAddressInformationList());
        $this->assertInstanceOf(Ci\Klaus\Objects\Address\AddressInformation::class, $address->getAddressInformationList()[0]);
        $this->assertEquals('Main Office', $address->getAddressInformationList()[0]->getName());
        $this->assertEquals('Address Data', $address->getAddressInformationList()[0]->getData());
        $this->assertEquals(true, $address->getAddressInformationList()[0]->getDefault());
        $this->assertEquals('Home', $address->getAddressInformationList()[0]->getType());
    }
}
