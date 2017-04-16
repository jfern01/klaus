<?php
namespace Ci\Klaus\Objects\Contacts;

use Ci\Klaus\Object;
use JMS\Serializer\Annotation\AccessType;
use JMS\Serializer\Annotation\SerializedName;
use JMS\Serializer\Annotation\Type;
use JMS\Serializer\Annotation\XmlElement;
use JMS\Serializer\Annotation\XmlRoot;
use JMS\Serializer\Annotation\XmlList;

/** 
 * @XmlRoot("ContactInformation")
 * @AccessType("public_method")
 */
class ContactInformation extends Object
{ 
    /**
     * @SerializedName("ContactName")
     * @Type("string")
     * @XmlElement(cdata=false)
     */
    protected $contactName;

    /**
     * @SerializedName("ContactID")
     * @Type("integer")
     * @XmlElement(cdata=false)
     */
    protected $contactId;

    /**
     * @SerializedName("Type")
     * @Type("string")
     * @XmlElement(cdata=false)
     */
    protected $type;

    /**
     * @SerializedName("Data")
     * @Type("string")
     * @XmlElement(cdata=false)
     */
    protected $data;

    /**
     * @SerializedName("Default")
     * @Type("boolean")
     * @XmlElement(cdata=false)
     */
    protected $default = false;

    public function getContactName()
    {
        return $this->contactName;
    }

    public function setContactName($contactName)
    {
        $this->contactName = $contactName;
    }

    public function getContactId()
    {
        return $this->contactId;
    }

    public function setContactId($contactId)
    {
        $this->contactId = $contactId;
    }

    public function getType()
    {
        return $this->type;
    }

    public function setType($type)
    {
        $this->type = $type;
    }

    public function getData()
    {
        return $this->data;
    }

    public function setData($data)
    {
        $this->data = $data;
    }

    public function getDefault()
    {
        return $this->default;
    }

    public function setDefault($default)
    {
        $this->default = $default;
    }
}