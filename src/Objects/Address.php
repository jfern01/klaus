<?php
namespace Ci\Klaus\Objects;

use Ci\Klaus\Object;
use Ci\Klaus\Objects\Address\AddressInformation;
use Ci\Klaus\Objects\Address\Country;
use Ci\Klaus\Objects\Address\State;
use Ci\Klaus\Objects\Address\TempAccount;
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
     * @var int
     *
     * @SerializedName("ID")
     * @Type("integer")
     * @XmlElement(cdata=false)
     */
    protected $id;

    /**
     * @var TempAccount
     *
     * @SerializedName("Temp-Account")
     * @Type("Ci\Klaus\Objects\Address\TempAccount")
     */
    protected $tempAccount;

    /**
     * @var string
     *
     * @SerializedName("Name")
     * @Type("string")
     * @XmlElement(cdata=false)
     */
    protected $name;

    /**
     * @var string
     *
     * @SerializedName("Attn")
     * @Type("string")
     * @XmlElement(cdata=false)
     */
    protected $attn;

    /**
     * @var string
     *
     * @SerializedName("Street")
     * @Type("string")
     * @XmlElement(cdata=false)
     */
    protected $street;

    /**
     * @var string
     *
     * @SerializedName("City")
     * @Type("string")
     * @XmlElement(cdata=false)
     */
    protected $city;

    /**
     * @var string
     *
     * @SerializedName("Zip")
     * @Type("string")
     * @XmlElement(cdata=false)
     */
    protected $zip;

    /**
     * @var int
     *
     * @SerializedName("LocationGroupID")
     * @Type("integer")
     * @XmlElement(cdata=false)
     */
    protected $locationGroupId;

    /**
     * @var bool
     *
     * @SerializedName("Default")
     * @Type("boolean")
     * @XmlElement(cdata=false)
     */
    protected $default;

    /**
     * @var bool
     *
     * @SerializedName("Residential")
     * @Type("boolean")
     * @XmlElement(cdata=false)
     */
    protected $residential;

    /**
     * @var string
     *
     * @SerializedName("Type")
     * @Type("string")
     * @XmlElement(cdata=false)
     */
    protected $type;

    /**
     * @var State
     *
     * @SerializedName("State")
     * @Type("Ci\Klaus\Objects\Address\State")
     */
    protected $state;

    /**
     * @var Country
     *
     * @SerializedName("Country")
     * @Type("Ci\Klaus\Objects\Address\Country")
     */
    protected $country;

    /**
     * @var AddressInformation[]
     *
     * @SerializedName("AddressInformationList")
     * @Type("array<Ci\Klaus\Objects\Address\AddressInformation>")
     * @XmlList(entry="AddressInformation")
     */
    protected $addressInformationList;

    /**
     * Gets the value of id.
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Sets the value of id.
     *
     * @param int $id the id
     *
     * @return self
     */
    protected function setId($id)
    {
        $this->id = $id;

        return $this;
    }

    /**
     * Gets the value of tempAccount.
     *
     * @return TempAccount
     */
    public function getTempAccount()
    {
        return $this->tempAccount;
    }

    /**
     * Sets the value of tempAccount.
     *
     * @param TempAccount $tempAccount the temp account
     *
     * @return self
     */
    protected function setTempAccount(TempAccount $tempAccount)
    {
        $this->tempAccount = $tempAccount;

        return $this;
    }

    /**
     * Gets the value of name.
     *
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Sets the value of name.
     *
     * @param string $name the name
     *
     * @return self
     */
    protected function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Gets the value of attn.
     *
     * @return string
     */
    public function getAttn()
    {
        return $this->attn;
    }

    /**
     * Sets the value of attn.
     *
     * @param string $attn the attn
     *
     * @return self
     */
    protected function setAttn($attn)
    {
        $this->attn = $attn;

        return $this;
    }

    /**
     * Gets the value of street.
     *
     * @return string
     */
    public function getStreet()
    {
        return $this->street;
    }

    /**
     * Sets the value of street.
     *
     * @param string $street the street
     *
     * @return self
     */
    protected function setStreet($street)
    {
        $this->street = $street;

        return $this;
    }

    /**
     * Gets the value of city.
     *
     * @return string
     */
    public function getCity()
    {
        return $this->city;
    }

    /**
     * Sets the value of city.
     *
     * @param string $city the city
     *
     * @return self
     */
    protected function setCity($city)
    {
        $this->city = $city;

        return $this;
    }

    /**
     * Gets the value of zip.
     *
     * @return string
     */
    public function getZip()
    {
        return $this->zip;
    }

    /**
     * Sets the value of zip.
     *
     * @param string $zip the zip
     *
     * @return self
     */
    protected function setZip($zip)
    {
        $this->zip = $zip;

        return $this;
    }

    /**
     * Gets the value of locationGroupId.
     *
     * @return int
     */
    public function getLocationGroupId()
    {
        return $this->locationGroupId;
    }

    /**
     * Sets the value of locationGroupId.
     *
     * @param int $locationGroupId the location group id
     *
     * @return self
     */
    protected function setLocationGroupId($locationGroupId)
    {
        $this->locationGroupId = $locationGroupId;

        return $this;
    }

    /**
     * Gets the value of default.
     *
     * @return bool
     */
    public function getDefault()
    {
        return $this->default;
    }

    /**
     * Sets the value of default.
     *
     * @param bool $default the default
     *
     * @return self
     */
    protected function setDefault($default)
    {
        $this->default = $default;

        return $this;
    }

    /**
     * Gets the value of residential.
     *
     * @return bool
     */
    public function getResidential()
    {
        return $this->residential;
    }

    /**
     * Sets the value of residential.
     *
     * @param bool $residential the residential
     *
     * @return self
     */
    protected function setResidential($residential)
    {
        $this->residential = $residential;

        return $this;
    }

    /**
     * Gets the value of type.
     *
     * @return string
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Sets the value of type.
     *
     * @param string $type the type
     *
     * @return self
     */
    protected function setType($type)
    {
        $this->type = $type;

        return $this;
    }

    /**
     * Gets the value of state.
     *
     * @return State
     */
    public function getState()
    {
        return $this->state;
    }

    /**
     * Sets the value of state.
     *
     * @param State $state the state
     *
     * @return self
     */
    protected function setState(State $state)
    {
        $this->state = $state;

        return $this;
    }

    /**
     * Gets the value of country.
     *
     * @return Country
     */
    public function getCountry()
    {
        return $this->country;
    }

    /**
     * Sets the value of country.
     *
     * @param Country $country the country
     *
     * @return self
     */
    protected function setCountry(Country $country)
    {
        $this->country = $country;

        return $this;
    }

    /**
     * Gets the value of addressInformationList.
     *
     * @return AddressInformation[]
     */
    public function getAddressInformationList()
    {
        return $this->addressInformationList;
    }

    /**
     * Sets the value of addressInformationList.
     *
     * @param AddressInformation[] $addressInformationList the address information list
     *
     * @return self
     */
    protected function setAddressInformationList(array $addressInformationList)
    {
        $this->addressInformationList = $addressInformationList;

        return $this;
    }
}