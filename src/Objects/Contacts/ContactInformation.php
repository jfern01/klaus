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
     * @var string
     *
     * @SerializedName("ContactName")
     * @Type("string")
     * @XmlElement(cdata=false)
     */
    protected $contactName;

    /**
     * @var int
     *
     * @SerializedName("ContactID")
     * @Type("integer")
     * @XmlElement(cdata=false)
     */
    protected $contactId;

    /**
     * @var string
     *
     * @SerializedName("Type")
     * @Type("string")
     * @XmlElement(cdata=false)
     */
    protected $type;

    /**
     * @var string
     *
     * @SerializedName("Data")
     * @Type("string")
     * @XmlElement(cdata=false)
     */
    protected $data;

    /**
     * @var bool
     *
     * @SerializedName("Default")
     * @Type("boolean")
     * @XmlElement(cdata=false)
     */
    protected $default = false;

    /**
     * Gets the value of contactName.
     *
     * @return string
     */
    public function getContactName()
    {
        return $this->contactName;
    }

    /**
     * Sets the value of contactName.
     *
     * @param string $contactName the contact name
     *
     * @return self
     */
    protected function setContactName($contactName)
    {
        $this->contactName = $contactName;

        return $this;
    }

    /**
     * Gets the value of contactId.
     *
     * @return int
     */
    public function getContactId()
    {
        return $this->contactId;
    }

    /**
     * Sets the value of contactId.
     *
     * @param int $contactId the contact id
     *
     * @return self
     */
    protected function setContactId($contactId)
    {
        $this->contactId = $contactId;

        return $this;
    }

    /**
     * Gets the value of type.
     *
     * @return string
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Sets the value of type.
     *
     * @param string $type the type
     *
     * @return self
     */
    protected function setType($type)
    {
        $this->type = $type;

        return $this;
    }

    /**
     * Gets the value of data.
     *
     * @return string
     */
    public function getData()
    {
        return $this->data;
    }

    /**
     * Sets the value of data.
     *
     * @param string $data the data
     *
     * @return self
     */
    protected function setData($data)
    {
        $this->data = $data;

        return $this;
    }

    /**
     * Gets the value of default.
     *
     * @return bool
     */
    public function getDefault()
    {
        return $this->default;
    }

    /**
     * Sets the value of default.
     *
     * @param bool $default the default
     *
     * @return self
     */
    protected function setDefault($default)
    {
        $this->default = $default;

        return $this;
    }
}