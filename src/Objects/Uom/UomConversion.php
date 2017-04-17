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
     * @var int
     *
     * @SerializedName("MainUOMID")
     * @Type("integer")
     * @XmlElement(cdata=false)
     */
    protected $mainUomId;

    /**
     * @var int
     *
     * @SerializedName("ToUOMID")
     * @Type("integer")
     * @XmlElement(cdata=false)
     */
    protected $toUomId;

    /**
     * @var string
     *
     * @SerializedName("ToUOMCode")
     * @Type("string")
     * @XmlElement(cdata=false)
     */
    protected $toUomCode;

    /**
     * @var float
     *
     * @SerializedName("ConversionMultiply")
     * @Type("double")
     * @XmlElement(cdata=false)
     */
    protected $conversionMultiply;

    /**
     * @var float
     *
     * @SerializedName("ConversionFactor")
     * @Type("double")
     * @XmlElement(cdata=false)
     */
    protected $conversionFactor;

    /**
     * @var bool
     *
     * @SerializedName("ToUOMIsIntegral")
     * @Type("boolean")
     * @XmlElement(cdata=false)
     */
    protected $toUomIsIntegral;

    /**
     * Gets the value of mainUomId.
     *
     * @return int
     */
    public function getMainUomId()
    {
        return $this->mainUomId;
    }

    /**
     * Sets the value of mainUomId.
     *
     * @param int $mainUomId the main uom id
     *
     * @return self
     */
    protected function setMainUomId($mainUomId)
    {
        $this->mainUomId = $mainUomId;

        return $this;
    }

    /**
     * Gets the value of toUomId.
     *
     * @return int
     */
    public function getToUomId()
    {
        return $this->toUomId;
    }

    /**
     * Sets the value of toUomId.
     *
     * @param int $toUomId the to uom id
     *
     * @return self
     */
    protected function setToUomId($toUomId)
    {
        $this->toUomId = $toUomId;

        return $this;
    }

    /**
     * Gets the value of toUomCode.
     *
     * @return string
     */
    public function getToUomCode()
    {
        return $this->toUomCode;
    }

    /**
     * Sets the value of toUomCode.
     *
     * @param string $toUomCode the to uom code
     *
     * @return self
     */
    protected function setToUomCode($toUomCode)
    {
        $this->toUomCode = $toUomCode;

        return $this;
    }

    /**
     * Gets the value of conversionMultiply.
     *
     * @return float
     */
    public function getConversionMultiply()
    {
        return $this->conversionMultiply;
    }

    /**
     * Sets the value of conversionMultiply.
     *
     * @param float $conversionMultiply the conversion multiply
     *
     * @return self
     */
    protected function setConversionMultiply($conversionMultiply)
    {
        $this->conversionMultiply = $conversionMultiply;

        return $this;
    }

    /**
     * Gets the value of conversionFactor.
     *
     * @return float
     */
    public function getConversionFactor()
    {
        return $this->conversionFactor;
    }

    /**
     * Sets the value of conversionFactor.
     *
     * @param float $conversionFactor the conversion factor
     *
     * @return self
     */
    protected function setConversionFactor($conversionFactor)
    {
        $this->conversionFactor = $conversionFactor;

        return $this;
    }

    /**
     * Gets the value of toUomIsIntegral.
     *
     * @return bool
     */
    public function getToUomIsIntegral()
    {
        return $this->toUomIsIntegral;
    }

    /**
     * Sets the value of toUomIsIntegral.
     *
     * @param bool $toUomIsIntegral the to uom is integral
     *
     * @return self
     */
    protected function setToUomIsIntegral($toUomIsIntegral)
    {
        $this->toUomIsIntegral = $toUomIsIntegral;

        return $this;
    }
}