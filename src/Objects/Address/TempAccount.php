<?php
namespace Ci\Klaus\Objects\Address;

use Ci\Klaus\Object;
use JMS\Serializer\Annotation\AccessType;
use JMS\Serializer\Annotation\SerializedName;
use JMS\Serializer\Annotation\Type;
use JMS\Serializer\Annotation\XmlElement;
use JMS\Serializer\Annotation\XmlRoot;
 
/** 
 * @XmlRoot("Temp-Account")
 * @AccessType("public_method")
 */
class TempAccount extends Object
{
    /**
     * @SerializedName("ID")
     * @Type("integer")
     * @XmlElement(cdata=false)
     */
    protected $id;

    /**
     * @SerializedName("Type")
     * @Type("integer")
     * @XmlElement(cdata=false)
     */
    protected $type;

    public function getId()
    {
        return $this->id;
    }

    public function setId($id)
    {
        $this->id = $id;
    }   

    public function getType()
    {
        return $this->type;
    }

    public function setType($type)
    {
        $this->type = $type;
    }
}