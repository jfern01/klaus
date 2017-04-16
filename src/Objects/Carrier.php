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
 * @XmlRoot("Carrier")
 * @AccessType("public_method")
 */
class Carrier extends Object
{
    /**
     * @SerializedName("Name")
     * @Type("Name")
     * @XmlElement(cdata=false)
     */
    protected $name;

    public function getName()
    {
        return $this->name;
    }

    public function setName($name)
    {
        $this->name = $name;
    }
}