<?php
namespace Ci\Klaus\Objects\Address;

use Ci\Klaus\Object;
use JMS\Serializer\Annotation\AccessType;
use JMS\Serializer\Annotation\SerializedName;
use JMS\Serializer\Annotation\Type;
use JMS\Serializer\Annotation\XmlElement;
use JMS\Serializer\Annotation\XmlRoot;
 
/** 
 * @XmlRoot("State")
 * @AccessType("public_method")
 */
class State extends Object
{ 
    /**
     * @SerializedName("ID")
     * @Type("integer")
     * @XmlElement(cdata=false)
     */
    protected $id;

    /**
     * @SerializedName("Code")
     * @Type("string")
     * @XmlElement(cdata=false)
     */
    protected $code;

    /**
     * @SerializedName("Name")
     * @Type("string")
     * @XmlElement(cdata=false)
     */
    protected $name;

    /**
     * @SerializedName("CountryID")
     * @Type("integer")
     * @XmlElement(cdata=false)
     */
    protected $countryId;

    public function getId()
    {
        return $this->id;
    }

    public function setId($id)
    {
        $this->id = $id;
    }

    public function getCode()
    {
        return $this->code;
    }

    public function setCode($code)
    {
        $this->code = $code;
    }

    public function getName()
    {
        return $this->name;
    }

    public function setName($name)
    {
        $this->name = $name;
    }

    public function getCountryId()
    {
        return $this->countryId;
    }

    public function setCountryId($countryId)
    {
        $this->countryId = $countryId;
    }
}