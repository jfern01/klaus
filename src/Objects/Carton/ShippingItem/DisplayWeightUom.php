<?php
namespace Ci\Klaus\Objects\Carton\ShippingItem;

use Ci\Klaus\Object;
use Ci\Klaus\Objects\Utils\UnitOfMeasure;
use JMS\Serializer\Annotation\AccessType;
use JMS\Serializer\Annotation\XmlRoot;

/** 
 * @XmlRoot("DisplayWeightUOM")
 * @AccessType("public_method")
 */
class DisplayWeightUom extends Object
{
    use UnitOfMeasure;
} 
