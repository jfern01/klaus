<?php
namespace Ci\Klaus\Objects\Address;

use Ci\Klaus\Object;
use JMS\Serializer\Annotation\AccessType;
use JMS\Serializer\Annotation\SerializedName;
use JMS\Serializer\Annotation\Type;
use JMS\Serializer\Annotation\XmlElement;
use JMS\Serializer\Annotation\XmlRoot;
 
/** 
 * @XmlRoot("AddressInformation")
 * @AccessType("public_method")
 */
class AddressInformation extends Object
{
    /**
     * @SerializedName("ID")
     * @Type("integer")
     * @XmlElement(cdata=false)
     */
    protected $id;

    /**
     * @SerializedName("Name")
     * @Type("string")
     * @XmlElement(cdata=false)
     */
    protected $name;

    /**
     * @SerializedName("Data")
     * @Type("string")
     * @XmlElement(cdata=false)
     */
    protected $data;

    /**
     * @SerializedName("Default")
     * @Type("boolean")
     * @XmlElement(cdata=false)
     */
    protected $default;

    /**
     * @SerializedName("Type")
     * @Type("string")
     * @XmlElement(cdata=false)
     */
    protected $type;

    public function getId()
    {
        return $this->id;
    }

    public function setId($id)
    {
        $this->id = $id;
    }

    public function getName()
    {
        return $this->name;
    }

    public function setName($name)
    {
        $this->name = $name;
    }

    public function getData()
    {
        return $this->data;
    }

    public function setData($data)
    {
        $this->data = $data;
    }

    public function getDefault()
    {
        return $this->default;
    }

    public function setDefault($default)
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
} 
