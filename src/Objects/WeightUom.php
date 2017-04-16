<?php
namespace Ci\Klaus\Objects;

use Ci\Klaus\Object;
use Ci\Klaus\Objects\Utils\UnitOfMeasure;
use JMS\Serializer\Annotation\AccessType;
use JMS\Serializer\Annotation\XmlRoot;

/** 
 * @XmlRoot("WeightUOM")
 * @AccessType("public_method")
 */
class WeightUom extends Object
{
    use UnitOfMeasure;
}