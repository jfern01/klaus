<?php
namespace Ci\Klaus\Objects;

use Ci\Klaus\Object;
use Ci\Klaus\Objects\Uom\UomConversion;
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
     * @var int
     *
     * @SerializedName("UOMID")
     * @Type("integer")
     * @XmlElement(cdata=false)
     */
    protected $uomId;

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
     * @SerializedName("Code")
     * @Type("string")
     * @XmlElement(cdata=false)
     */
    protected $code;

    /**
     * @var bool
     *
     * @SerializedName("Integral")
     * @Type("boolean")
     * @XmlElement(cdata=false)
     */
    protected $integral;

    /**
     * @var bool
     *
     * @SerializedName("Active")
     * @Type("boolean")
     * @XmlElement(cdata=false)
     */
    protected $active;

    /**
     * @var string
     *
     * @SerializedName("Type")
     * @Type("string")
     * @XmlElement(cdata=false)
     */
    protected $type;

    /**
     * @var UomConversion[]
     *
     * @SerializedName("UOMConversions")
     * @Type("array<Ci\Klaus\Objects\Uom\UomConversion>")
     * @XmlList(entry="UOMConversion")
     */
    protected $uomConversions;

    /**
     * Gets the value of uomId.
     *
     * @return int
     */
    public function getUomId()
    {
        return $this->uomId;
    }

    /**
     * Sets the value of uomId.
     *
     * @param int $uomId the uom id
     *
     * @return self
     */
    protected function setUomId($uomId)
    {
        $this->uomId = $uomId;

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
     * Gets the value of code.
     *
     * @return string
     */
    public function getCode()
    {
        return $this->code;
    }

    /**
     * Sets the value of code.
     *
     * @param string $code the code
     *
     * @return self
     */
    protected function setCode($code)
    {
        $this->code = $code;

        return $this;
    }

    /**
     * Gets the value of integral.
     *
     * @return bool
     */
    public function getIntegral()
    {
        return $this->integral;
    }

    /**
     * Sets the value of integral.
     *
     * @param bool $integral the integral
     *
     * @return self
     */
    protected function setIntegral($integral)
    {
        $this->integral = $integral;

        return $this;
    }

    /**
     * Gets the value of active.
     *
     * @return bool
     */
    public function getActive()
    {
        return $this->active;
    }

    /**
     * Sets the value of active.
     *
     * @param bool $active the active
     *
     * @return self
     */
    protected function setActive($active)
    {
        $this->active = $active;

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
     * Gets the value of uomConversions.
     *
     * @return UomConversion[]
     */
    public function getUomConversions()
    {
        return $this->uomConversions;
    }

    /**
     * Sets the value of uomConversions.
     *
     * @param UomConversion[] $uomConversions the uom conversions
     *
     * @return self
     */
    protected function setUomConversions(array $uomConversions)
    {
        $this->uomConversions = $uomConversions;

        return $this;
    }
}