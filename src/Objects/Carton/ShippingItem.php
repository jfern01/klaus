<?php
namespace Ci\Klaus\Objects\Carton;

use Ci\Klaus\Object;
use Ci\Klaus\Objects\Carton\ShippingItem\DisplayWeightUom;
use Ci\Klaus\Objects\Utils\UnitOfMeasure;
use Ci\Klaus\Objects\WeightUom;
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
     * @var int
     *
     * @SerializedName("ShipItemID")
     * @Type("integer")
     * @XmlElement(cdata=false)
     */
    protected $shipItemId;

    /**
     * @var string
     *
     * @SerializedName("ProductNumber")
     * @Type("string")
     * @XmlElement(cdata=false)
     */
    protected $productNumber;

    /**
     * @var string
     *
     * @SerializedName("ProductDescription")
     * @Type("string")
     * @XmlElement(cdata=false)
     */
    protected $productDescription;

    /**
     * @var int
     *
     * @SerializedName("QtyShipped")
     * @Type("integer")
     * @XmlElement(cdata=false)
     */
    protected $qtyShipped;

    /**
     * @var float
     *
     * @SerializedName("Cost")
     * @Type("float")
     * @XmlElement(cdata=false)
     */
    protected $cost;

    /**
     * @var string
     *
     * @SerializedName("SKU")
     * @Type("string")
     * @XmlElement(cdata=false)
     */
    protected $sku;

    /**
     * @var string
     *
     * @SerializedName("UPC")
     * @Type("string")
     * @XmlElement(cdata=false)
     */
    protected $upc;

    /**
     * @var int
     *
     * @SerializedName("OrderItemID")
     * @Type("integer")
     * @XmlElement(cdata=false)
     */
    protected $orderItemId;

    /**
     * @var int
     *
     * @SerializedName("OrderLineItem")
     * @Type("integer")
     * @XmlElement(cdata=false)
     */
    protected $orderLineItem;

    /**
     * @var string
     *
     * @SerializedName("CartonName")
     * @Type("string")
     * @XmlElement(cdata=false)
     */
    protected $cartonName;

    /**
     * @var int
     *
     * @SerializedName("CartonID")
     * @Type("integer")
     * @XmlElement(cdata=false)
     */
    protected $cartonId;

    /**
     * @var int
     *
     * @SerializedName("TagNum")
     * @Type("integer")
     * @XmlElement(cdata=false)
     */
    protected $tagNum;

    /**
     * @var float
     *
     * @SerializedName("Weight")
     * @Type("float")
     * @XmlElement(cdata=false)
     */
    protected $weight;

    /**
     * @var WeightUom
     *
     * @SerializedName("WeightUOM")
     * @Type("Ci\Klaus\Objects\WeightUom")
     */
    protected $weightUom;

    /**
     * @var float
     *
     * @SerializedName("DisplayWeight")
     * @Type("float")
     */
    protected $displayWeight;

    /**
     * @var DisplayWeightUom
     *
     * @SerializedName("DisplayWeightUOM")
     * @Type("Ci\Klaus\Objects\Carton\ShippingItem\DisplayWeightUom")
     */
    protected $displayWeightUom;

    /**
     * @SerializedName("Tracking")
     * @Type("string")
     * @XmlElement(cdata=false)
     */
    protected $tracking;

    /**
     * Gets the value of shipItemId.
     *
     * @return int
     */
    public function getShipItemId()
    {
        return $this->shipItemId;
    }

    /**
     * Sets the value of shipItemId.
     *
     * @param int $shipItemId the ship item id
     *
     * @return self
     */
    public function setShipItemId($shipItemId)
    {
        $this->shipItemId = $shipItemId;

        return $this;
    }

    /**
     * Gets the value of productNumber.
     *
     * @return string
     */
    public function getProductNumber()
    {
        return $this->productNumber;
    }

    /**
     * Sets the value of productNumber.
     *
     * @param string $productNumber the product number
     *
     * @return self
     */
    public function setProductNumber($productNumber)
    {
        $this->productNumber = $productNumber;

        return $this;
    }

    /**
     * Gets the value of productDescription.
     *
     * @return string
     */
    public function getProductDescription()
    {
        return $this->productDescription;
    }

    /**
     * Sets the value of productDescription.
     *
     * @param string $productDescription the product description
     *
     * @return self
     */
    public function setProductDescription($productDescription)
    {
        $this->productDescription = $productDescription;

        return $this;
    }

    /**
     * Gets the value of qtyShipped.
     *
     * @return int
     */
    public function getQtyShipped()
    {
        return $this->qtyShipped;
    }

    /**
     * Sets the value of qtyShipped.
     *
     * @param int $qtyShipped the qty shipped
     *
     * @return self
     */
    public function setQtyShipped($qtyShipped)
    {
        $this->qtyShipped = $qtyShipped;

        return $this;
    }

    /**
     * Gets the value of cost.
     *
     * @return float
     */
    public function getCost()
    {
        return $this->cost;
    }

    /**
     * Sets the value of cost.
     *
     * @param float $cost the cost
     *
     * @return self
     */
    public function setCost($cost)
    {
        $this->cost = $cost;

        return $this;
    }

    /**
     * Gets the value of sku.
     *
     * @return string
     */
    public function getSku()
    {
        return $this->sku;
    }

    /**
     * Sets the value of sku.
     *
     * @param string $sku the sku
     *
     * @return self
     */
    public function setSku($sku)
    {
        $this->sku = $sku;

        return $this;
    }

    /**
     * Gets the value of upc.
     *
     * @return string
     */
    public function getUpc()
    {
        return $this->upc;
    }

    /**
     * Sets the value of upc.
     *
     * @param string $upc the upc
     *
     * @return self
     */
    public function setUpc($upc)
    {
        $this->upc = $upc;

        return $this;
    }

    /**
     * Gets the value of orderItemId.
     *
     * @return int
     */
    public function getOrderItemId()
    {
        return $this->orderItemId;
    }

    /**
     * Sets the value of orderItemId.
     *
     * @param int $orderItemId the order item id
     *
     * @return self
     */
    public function setOrderItemId($orderItemId)
    {
        $this->orderItemId = $orderItemId;

        return $this;
    }

    /**
     * Gets the value of orderLineItem.
     *
     * @return int
     */
    public function getOrderLineItem()
    {
        return $this->orderLineItem;
    }

    /**
     * Sets the value of orderLineItem.
     *
     * @param int $orderLineItem the order line item
     *
     * @return self
     */
    public function setOrderLineItem($orderLineItem)
    {
        $this->orderLineItem = $orderLineItem;

        return $this;
    }

    /**
     * Gets the value of cartonName.
     *
     * @return string
     */
    public function getCartonName()
    {
        return $this->cartonName;
    }

    /**
     * Sets the value of cartonName.
     *
     * @param string $cartonName the carton name
     *
     * @return self
     */
    public function setCartonName($cartonName)
    {
        $this->cartonName = $cartonName;

        return $this;
    }

    /**
     * Gets the value of cartonId.
     *
     * @return int
     */
    public function getCartonId()
    {
        return $this->cartonId;
    }

    /**
     * Sets the value of cartonId.
     *
     * @param int $cartonId the carton id
     *
     * @return self
     */
    public function setCartonId($cartonId)
    {
        $this->cartonId = $cartonId;

        return $this;
    }

    /**
     * Gets the value of tagNum.
     *
     * @return int
     */
    public function getTagNum()
    {
        return $this->tagNum;
    }

    /**
     * Sets the value of tagNum.
     *
     * @param int $tagNum the tag num
     *
     * @return self
     */
    public function setTagNum($tagNum)
    {
        $this->tagNum = $tagNum;

        return $this;
    }

    /**
     * Gets the value of weight.
     *
     * @return float
     */
    public function getWeight()
    {
        return $this->weight;
    }

    /**
     * Sets the value of weight.
     *
     * @param float $weight the weight
     *
     * @return self
     */
    public function setWeight($weight)
    {
        $this->weight = $weight;

        return $this;
    }

    /**
     * Gets the value of weightUom.
     *
     * @return WeightUom
     */
    public function getWeightUom()
    {
        return $this->weightUom;
    }

    /**
     * Sets the value of weightUom.
     *
     * @param WeightUom $weightUom the weight uom
     *
     * @return self
     */
    public function setWeightUom(WeightUom $weightUom)
    {
        $this->weightUom = $weightUom;

        return $this;
    }

    /**
     * Gets the value of displayWeight.
     *
     * @return float
     */
    public function getDisplayWeight()
    {
        return $this->displayWeight;
    }

    /**
     * Sets the value of displayWeight.
     *
     * @param float $displayWeight the display weight
     *
     * @return self
     */
    public function setDisplayWeight($displayWeight)
    {
        $this->displayWeight = $displayWeight;

        return $this;
    }

    /**
     * Gets the value of displayWeightUom.
     *
     * @return DisplayWeightUom
     */
    public function getDisplayWeightUom()
    {
        return $this->displayWeightUom;
    }

    /**
     * Sets the value of displayWeightUom.
     *
     * @param DisplayWeightUom $displayWeightUom the display weight uom
     *
     * @return self
     */
    public function setDisplayWeightUom(DisplayWeightUom $displayWeightUom)
    {
        $this->displayWeightUom = $displayWeightUom;

        return $this;
    }

    /**
     * Gets the value of tracking.
     *
     * @return mixed
     */
    public function getTracking()
    {
        return $this->tracking;
    }

    /**
     * Sets the value of tracking.
     *
     * @param mixed $tracking the tracking
     *
     * @return self
     */
    public function setTracking($tracking)
    {
        $this->tracking = $tracking;

        return $this;
    }
}