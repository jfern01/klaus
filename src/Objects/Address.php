<?php
namespace Ci\Klaus\Objects;

use Ci\Klaus\Object;
use JMS\Serializer\Annotation\AccessType;
use JMS\Serializer\Annotation\SerializedName;
use JMS\Serializer\Annotation\Type;
use JMS\Serializer\Annotation\XmlElement;
use JMS\Serializer\Annotation\XmlRoot;
use JMS\Serializer\Annotation\XmlList;

/** 
 * @XmlRoot("Address")
 * @AccessType("public_method")
 */
class Address extends Object
{
    /**
     * @SerializedName("ID")
     * @Type("integer")
     * @XmlElement(cdata=false)
     */
    protected $id;

    /**
     * @SerializedName("Temp-Account")
     * @Type("Ci\Klaus\Objects\Address\TempAccount")
     */
    protected $tempAccount;

    /**
     * @SerializedName("Name")
     * @Type("string")
     * @XmlElement(cdata=false)
     */
    protected $name;

    /**
     * @SerializedName("Attn")
     * @Type("string")
     * @XmlElement(cdata=false)
     */
    protected $attn;

    /**
     * @SerializedName("Street")
     * @Type("string")
     * @XmlElement(cdata=false)
     */
    protected $street;

    /**
     * @SerializedName("City")
     * @Type("string")
     * @XmlElement(cdata=false)
     */
    protected $city;

    /**
     * @SerializedName("Zip")
     * @Type("string")
     * @XmlElement(cdata=false)
     */
    protected $zip;

    /**
     * @SerializedName("LocationGroupID")
     * @Type("integer")
     * @XmlElement(cdata=false)
     */
    protected $locationGroupId;

    /**
     * @SerializedName("Default")
     * @Type("boolean")
     * @XmlElement(cdata=false)
     */
    protected $default;

    /**
     * @SerializedName("Residential")
     * @Type("boolean")
     * @XmlElement(cdata=false)
     */
    protected $residential;

    /**
     * @SerializedName("Type")
     * @Type("string")
     * @XmlElement(cdata=false)
     */
    protected $type;

    /**
     * @SerializedName("State")
     * @Type("Ci\Klaus\Objects\Address\State")
     */
    protected $state;

    /**
     * @SerializedName("Country")
     * @Type("Ci\Klaus\Objects\Address\Country")
     */
    protected $country;

    /**
     * @SerializedName("AddressInformationList")
     * @Type("array<Ci\Klaus\Objects\Address\AddressInformation>")
     * @XmlList(entry="AddressInformation")
     */
    protected $addressInformationList;

    public function getId()
    {
        return $this->id;
    }

    public function setId($id)
    {
        $this->id = $id;
    }

    public function getTempAccount()
    {
        return $this->tempAccount;
    }

    public function setTempAccount(Address\TempAccount $tempAccount)
    {
        $this->tempAccount = $tempAccount;
    }

    public function getName()
    {
        return $this->name;
    }

    public function setName($name)
    {
        $this->name = $name;
    }

    public function getAttn()
    {
        return $this->attn;
    }

    public function setAttn($attn)
    {
        $this->attn = $attn;
    }

    public function getStreet()
    {
        return $this->street;
    }

    public function setStreet($street)
    {
        $this->street = $street;
    }

    public function getCity()
    {
        return $this->city;
    }

    public function setCity($city)
    {
        $this->city = $city;
    }

    public function getZip()
    {
        return $this->zip;
    }

    public function setZip($zip)
    {
        $this->zip = $zip;
    }

    public function getLocationGroupId()
    {
        return $this->locationGroupId;
    }

    public function setLocationGroupId($locationGroupId)
    {
        $this->locationGroupId = $locationGroupId;
    }

    public function getDefault()
    {
        return $this->default;
    }

    public function setDefault($default)
    {
        $this->default = $default;
    }

    public function getResidential()
    {
        return $this->default;
    }

    public function setResidential($default)
    {
        $this->default = $default;
    }

    public function getType()
    {
        return $this->type;
    }

    public function setType($type)
    {
        $this->type = $type;
    }

    public function getState()
    {
        return $this->state;
    }

    public function setState($state)
    {
        $this->state = $state;
    }

    public function getCountry()
    {
        return $this->country;
    }

    public function setCountry($country)
    {
        $this->country = $country;
    }

    public function getAddressInformationList()
    {
        return $this->addressInformationList;
    }

    public function setAddressInformationList($addressInformationList)
    {
        $this->addressInformationList = $addressInformationList;
    }
}