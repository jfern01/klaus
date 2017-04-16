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
 * @XmlRoot("UOM")
 * @AccessType("public_method")
 */
class Uom extends Object
{
    /**
     * @SerializedName("UOMID")
     * @Type("integer")
     * @XmlElement(cdata=false)
     */
    protected $uomId;

    /**
     * @SerializedName("Name")
     * @Type("string")
     * @XmlElement(cdata=false)
     */
    protected $name;

    /**
     * @SerializedName("Code")
     * @Type("string")
     * @XmlElement(cdata=false)
     */
    protected $code;

    /**
     * @SerializedName("Integral")
     * @Type("boolean")
     * @XmlElement(cdata=false)
     */
    protected $integral;

    /**
     * @SerializedName("Active")
     * @Type("boolean")
     * @XmlElement(cdata=false)
     */
    protected $active;

    /**
     * @SerializedName("Type")
     * @Type("string")
     * @XmlElement(cdata=false)
     */
    protected $type;

    /**
     * @SerializedName("UOMConversions")
     * @Type("array<Ci\Klaus\Objects\Uom\UomConversion>")
     * @XmlList(entry="UOMConversion")
     */
    protected $uomConversions;

    public function getUomId()
    {
        return $this->uomId;
    }

    public function setUomId($uomId)
    {
        $this->uomId = $uomId;
    }

    public function getName()
    {
        return $this->name;
    }

    public function setName($name)
    {
        $this->name = $name;
    }

    public function getCode()
    {
        return $this->code;
    }

    public function setCode($code)
    {
        $this->code = $code;
    }

    public function getIntegral()
    {
        return $this->integral;
    }

    public function setIntegral($integral)
    {
        $this->integral = $integral;
    }

    public function getActive()
    {
        return $this->active;
    }

    public function setActive($active)
    {
        $this->active = $active;
    }

    public function getType()
    {
        return $this->type;
    }

    public function setType($type)
    {
        $this->type = $type;
    }

    public function getUomConversions()
    {
        return $this->uomConversions;
    }

    public function setUomConversions($uomConversions)
    {
        $this->uomConversions = $uomConversions;
    }
}