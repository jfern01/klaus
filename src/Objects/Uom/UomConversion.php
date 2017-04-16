<?php
namespace Ci\Klaus\Objects\Uom;

use Ci\Klaus\Object;
use JMS\Serializer\Annotation\AccessType;
use JMS\Serializer\Annotation\SerializedName;
use JMS\Serializer\Annotation\Type;
use JMS\Serializer\Annotation\XmlElement;
use JMS\Serializer\Annotation\XmlRoot;
use JMS\Serializer\Annotation\XmlList;

/** 
 * @XmlRoot("UOMConversion")
 * @AccessType("public_method")
 */
class UomConversion extends Object
{
    /**
     * @SerializedName("MainUOMID")
     * @Type("integer")
     * @XmlElement(cdata=false)
     */
    protected $mainUomId;

    /**
     * @SerializedName("ToUOMID")
     * @Type("integer")
     * @XmlElement(cdata=false)
     */
    protected $toUomId;

    /**
     * @SerializedName("ToUOMCode")
     * @Type("string")
     * @XmlElement(cdata=false)
     */
    protected $toUomCode;

    /**
     * @SerializedName("ConversionMultiply")
     * @Type("double")
     * @XmlElement(cdata=false)
     */
    protected $conversionMultiply;

    /**
     * @SerializedName("ConversionFactor")
     * @Type("double")
     * @XmlElement(cdata=false)
     */
    protected $conversionFactor;

    /**
     * @SerializedName("ToUOMIsIntegral")
     * @Type("boolean")
     * @XmlElement(cdata=false)
     */
    protected $toUomIsIntegral;

    public function getMainUomId()
    {
        return $this->mainUomId;
    }

    public function setMainUomId($mainUomId)
    {
        $this->mainUomId = $mainUomId;
    }

    public function getToUomId()
    {
        return $this->toUomId;
    }

    public function setToUomId($toUomId)
    {
        $this->toUomId = $toUomId;
    }

    public function getToUomCode()
    {
        return $this->toUomCode;
    }

    public function setToUomCode($toUomCode)
    {
        $this->toUomCode = $toUomCode;
    }

    public function getConversionMultiply()
    {
        return $this->conversionMultiply;
    }

    public function setConversionMultiply($conversionMultiply)
    {
        $this->conversionMultiply = $conversionMultiply;
    }

    public function getConversionFactor()
    {
        return $this->conversionFactor;
    }

    public function setConversionFactor($conversionFactor)
    {
        $this->conversionFactor = $conversionFactor;
    }

    public function getToUomIsIntegral()
    {
        return $this->toUomIsIntegral;
    }

    public function setToUomIsIntegral($toUomIsIntegral)
    {
        $this->toUomIsIntegral = $toUomIsIntegral;
    }
}