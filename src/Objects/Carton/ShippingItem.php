<?php
namespace Ci\Klaus\Objects\Carton;

use Ci\Klaus\Object;
use Ci\Klaus\Objects\Utils\UnitOfMeasure;
use JMS\Serializer\Annotation\AccessType;
use JMS\Serializer\Annotation\SerializedName;
use JMS\Serializer\Annotation\Type;
use JMS\Serializer\Annotation\XmlElement;
use JMS\Serializer\Annotation\XmlRoot;

/** 
 * @XmlRoot("ShippingItem")
 * @AccessType("public_method")
 */
class ShippingItem extends Object
{
    use UnitOfMeasure;

    /**
     * @SerializedName("ShipItemID")
     * @Type("integer")
     * @XmlElement(cdata=false)
     */
    protected $shipItemId;

    /**
     * @SerializedName("ProductNumber")
     * @Type("string")
     * @XmlElement(cdata=false)
     */
    protected $productNumber;

    /**
     * @SerializedName("ProductDescription")
     * @Type("string")
     * @XmlElement(cdata=false)
     */
    protected $productDescription;

    /**
     * @SerializedName("QtyShipped")
     * @Type("integer")
     * @XmlElement(cdata=false)
     */
    protected $qtyShipped;

    /**
     * @SerializedName("Cost")
     * @Type("float")
     * @XmlElement(cdata=false)
     */
    protected $cost;

    /**
     * @SerializedName("SKU")
     * @Type("string")
     * @XmlElement(cdata=false)
     */
    protected $sku;

    /**
     * @SerializedName("UPC")
     * @Type("string")
     * @XmlElement(cdata=false)
     */
    protected $upc;

    /**
     * @SerializedName("OrderItemID")
     * @Type("integer")
     * @XmlElement(cdata=false)
     */
    protected $orderItemId;

    /**
     * @SerializedName("OrderLineItem")
     * @Type("integer")
     * @XmlElement(cdata=false)
     */
    protected $orderLineItem;

    /**
     * @SerializedName("CartonName")
     * @Type("string")
     * @XmlElement(cdata=false)
     */
    protected $cartonName;

    /**
     * @SerializedName("CartonID")
     * @Type("integer")
     * @XmlElement(cdata=false)
     */
    protected $cartonId;

    /**
     * @SerializedName("TagNum")
     * @Type("integer")
     * @XmlElement(cdata=false)
     */
    protected $tagNum;

    /**
     * @SerializedName("Weight")
     * @Type("float")
     * @XmlElement(cdata=false)
     */
    protected $weight;

    /**
     * @SerializedName("WeightUOM")
     * @Type("Ci\Klaus\Objects\WeightUom")
     */
    protected $weightUom;

    /**
     * @SerializedName("DisplayWeight")
     * @Type("float")
     */
    protected $displayWeight;

    /**
     * @SerializedName("DisplayWeightUOM")
     * @Type("Ci\Klaus\Objects\ShippingItem\DisplayWeightUom")
     */
    protected $displayWeightUom;

    /**
     * @SerializedName("Tracking")
     * @Type("string")
     * @XmlElement(cdata=false)
     */
    protected $tracking;

    public function getShipItemId()
    {
        return $this->shipItemId;
    }

    public function setShipItemId($shipItemId)
    {
        $this->shipItemId = $shipItemId;
    }

    public function getProductNumber()
    {
        return $this->productNumber;
    }

    public function setProductNumber($productNumber)
    {
        $this->productNumber = $productNumber;
    }

    public function getProductDescription()
    {
        return $this->productDescription;
    }

    public function setProductDescription($productDescription)
    {
        $this->productDescription = $productDescription;
    }

    public function getQtyShipped()
    {
        return $this->qtyShipped;
    }

    public function setQtyShipped($qtyShipped)
    {
        $this->qtyShipped = $qtyShipped;
    }

    public function getCost()
    {
        return $this->cost;
    }

    public function setCost($cost)
    {
        $this->cost = $cost;
    }

    public function getSku()
    {
        return $this->sku;
    }

    public function setSku($sku)
    {
        $this->sku = $sku;
    }

    public function getUpc()
    {
        return $this->upc;
    }

    public function setUpc($upc)
    {
        $this->upc = $upc;
    }

    public function getOrderItemId()
    {
        return $this->orderItemId;
    }

    public function setOrderItemId($orderItemId)
    {
        $this->orderItemId = $orderItemId;
    }

    public function getOrderLineItem()
    {
        return $this->orderLineItem;
    }

    public function setOrderLineItem($orderLineItem)
    {
        $this->orderLineItem = $orderLineItem;
    }

    public function getCartonName()
    {
        return $this->cartonName;
    }

    public function setCartonName($cartonName)
    {
        $this->cartonName = $cartonName;
    }

    public function getCartonId()
    {
        return $this->cartonId;
    }

    public function setCartonId($cartonId)
    {
        $this->cartonId = $cartonId;
    }

    public function getTagNum()
    {
        return $this->tagNum;
    }

    public function setTagNum($tagNum)
    {
        $this->tagNum = $tagNum;
    }

    public function getWeight()
    {
        return $this->weight;
    }

    public function setWeight($weight)
    {
        $this->weight = $weight;
    }

    public function getWeightUom()
    {
        return $this->weightUom;
    }

    public function setWeightUom($weightUom)
    {
        $this->weightUom = $weightUom;
    }

    public function getDisplayWeight()
    {
        return $this->displayWeight;
    }

    public function setDisplayWeight($displayWeight)
    {
        $this->displayWeight = $displayWeight;
    }

    public function getDisplayWeightUom()
    {
        return $this->displayWeightUom;
    }

    public function setDisplayWeightUom($displayWeightUom)
    {
        $this->displayWeightUom = $displayWeightUom;
    }

    public function getTracking()
    {
        return $this->tracking;
    }

    public function setTracking($tracking)
    {
        $this->tracking = $tracking;
    }
}