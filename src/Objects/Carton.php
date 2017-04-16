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
 * @XmlRoot("Carton")
 * @AccessType("public_method")
 */
class Carton extends Object
{
    /**
     * @SerializedName("ID")
     * @Type("integer")
     * @XmlElement(cdata=false)
     */
    protected $id;

    /**
     * @SerializedName("ShipID")
     * @Type("integer")
     * @XmlElement(cdata=false)
     */
    protected $shipId;

    /**
     * @SerializedName("CartonNum")
     * @Type("integer")
     * @XmlElement(cdata=false)
     */
    protected $cartonNum;

    /**
     * @SerializedName("TrackingNum")
     * @Type("string")
     * @XmlElement(cdata=false)
     */
    protected $trackingNum;

    /**
     * @SerializedName("FreightWeight")
     * @Type("float")
     * @XmlElement(cdata=false)
     */
    protected $freightWeight;

    /**
     * @SerializedName("FreightAmount")
     * @Type("float")
     * @XmlElement(cdata=false)
     */
    protected $freightAmount;

    /**
     * @SerializedName("ShippingItems")
     * @Type("array<Ci\Klaus\Objects\Carton\ShippingItem>")
     * @XmlList(entry="ShippingItem")
     */
    protected $shippingItems;

    public function getId()
    {
        return $this->id;
    }

    public function setId($id)
    {
        $this->id = $id;
    }

    public function getShipId()
    {
        return $this->shipId;
    }

    public function setShipId($shipId)
    {
        $this->shipId = $shipId;
    }

    public function getCartonNum()
    {
        return $this->cartonNum;
    }

    public function setCartonNum($cartonNum)
    {
        $this->cartonNum = $cartonNum;
    }

    public function getTrackingNum()
    {
        return $this->trackingNum;
    }

    public function setTrackingNum($trackingNum)
    {
        $this->trackingNum = $trackingNum;
    }

    public function getFreightWeight()
    {
        return $this->freightWeight;
    }

    public function setFreightWeight($freightWeight)
    {
        $this->freightWeight = $freightWeight;
    }

    public function getFreightAmount()
    {
        return $this->freightAmount;
    }

    public function setFreightAmount($freightAmount)
    {
        $this->freightAmount = $freightAmount;
    }

    public function getShippingItems()
    {
        return $this->shippingItems;
    }

    public function setShippingItems($shippingItems)
    {
        $this->shippingItems = $shippingItems;
    }
}