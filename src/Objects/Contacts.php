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
 * @XmlRoot("Contacts")
 * @AccessType("public_method")
 */
class Contacts extends Object
{
    /**
     * @SerializedName("ContactInformation")
     * @Type("array<Ci\Klaus\Objects\Contacts\ContactInformation>")
     * @XmlList(inline = true, entry="ContactInformation")
     */
    protected $contacts = [];

    public function getContacts()
    {
        return $this->contacts;
    }

    public function setContacts($contacts)
    {
        $this->contacts = $contacts;
    }
} 
