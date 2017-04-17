<?php
namespace Ci\Klaus\Objects;

use Ci\Klaus\Object;
use Ci\Klaus\Objects\Carton\ShippingItem;
use JMS\Serializer\Annotation\AccessType;
use JMS\Serializer\Annotation\SerializedName;
use JMS\Serializer\Annotation\Type;
use JMS\Serializer\Annotation\XmlElement;
use JMS\Serializer\Annotation\XmlRoot;
use JMS\Serializer\Annotation\XmlList;

/** 
 * @XmlRoot("Carton")
 * @AccessType("public_method")
 */
class Carton extends Object
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
     * @var int
     *
     * @SerializedName("ShipID")
     * @Type("integer")
     * @XmlElement(cdata=false)
     */
    protected $shipId;

    /**
     * @var int
     *
     * @SerializedName("CartonNum")
     * @Type("integer")
     * @XmlElement(cdata=false)
     */
    protected $cartonNum;

    /**
     * @var string
     *
     * @SerializedName("TrackingNum")
     * @Type("string")
     * @XmlElement(cdata=false)
     */
    protected $trackingNum;

    /**
     * @var float
     *
     * @SerializedName("FreightWeight")
     * @Type("float")
     * @XmlElement(cdata=false)
     */
    protected $freightWeight;

    /**
     * @var float
     *
     * @SerializedName("FreightAmount")
     * @Type("float")
     * @XmlElement(cdata=false)
     */
    protected $freightAmount;

    /**
     * @var ShippingItem[]
     *
     * @SerializedName("ShippingItems")
     * @Type("array<Ci\Klaus\Objects\Carton\ShippingItem>")
     * @XmlList(entry="ShippingItem")
     */
    protected $shippingItems;

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
     * Gets the value of shipId.
     *
     * @return int
     */
    public function getShipId()
    {
        return $this->shipId;
    }

    /**
     * Sets the value of shipId.
     *
     * @param int $shipId the ship id
     *
     * @return self
     */
    protected function setShipId($shipId)
    {
        $this->shipId = $shipId;

        return $this;
    }

    /**
     * Gets the value of cartonNum.
     *
     * @return int
     */
    public function getCartonNum()
    {
        return $this->cartonNum;
    }

    /**
     * Sets the value of cartonNum.
     *
     * @param int $cartonNum the carton num
     *
     * @return self
     */
    protected function setCartonNum($cartonNum)
    {
        $this->cartonNum = $cartonNum;

        return $this;
    }

    /**
     * Gets the value of trackingNum.
     *
     * @return string
     */
    public function getTrackingNum()
    {
        return $this->trackingNum;
    }

    /**
     * Sets the value of trackingNum.
     *
     * @param string $trackingNum the tracking num
     *
     * @return self
     */
    protected function setTrackingNum($trackingNum)
    {
        $this->trackingNum = $trackingNum;

        return $this;
    }

    /**
     * Gets the value of freightWeight.
     *
     * @return float
     */
    public function getFreightWeight()
    {
        return $this->freightWeight;
    }

    /**
     * Sets the value of freightWeight.
     *
     * @param float $freightWeight the freight weight
     *
     * @return self
     */
    protected function setFreightWeight($freightWeight)
    {
        $this->freightWeight = $freightWeight;

        return $this;
    }

    /**
     * Gets the value of freightAmount.
     *
     * @return float
     */
    public function getFreightAmount()
    {
        return $this->freightAmount;
    }

    /**
     * Sets the value of freightAmount.
     *
     * @param float $freightAmount the freight amount
     *
     * @return self
     */
    protected function setFreightAmount($freightAmount)
    {
        $this->freightAmount = $freightAmount;

        return $this;
    }

    /**
     * Gets the value of shippingItems.
     *
     * @return ShippingItem[]
     */
    public function getShippingItems()
    {
        return $this->shippingItems;
    }

    /**
     * Sets the value of shippingItems.
     *
     * @param ShippingItem[] $shippingItems the shipping items
     *
     * @return self
     */
    protected function setShippingItems(array $shippingItems)
    {
        $this->shippingItems = $shippingItems;

        return $this;
    }
}