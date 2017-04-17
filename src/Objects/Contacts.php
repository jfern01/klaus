<?php
namespace Ci\Klaus\Objects;

use Ci\Klaus\Object;
use Ci\Klaus\Objects\Contacts\ContactInformation;
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
     * @var ContactInformation[]
     *
     * @SerializedName("ContactInformation")
     * @Type("array<Ci\Klaus\Objects\Contacts\ContactInformation>")
     * @XmlList(inline = true, entry="ContactInformation")
     */
    protected $contacts = [];

    /**
     * Gets the value of contacts.
     *
     * @return ContactInformation[]
     */
    public function getContacts()
    {
        return $this->contacts;
    }

    /**
     * Sets the value of contacts.
     *
     * @param ContactInformation[] $contacts the contacts
     *
     * @return self
     */
    protected function setContacts(array $contacts)
    {
        $this->contacts = $contacts;

        return $this;
    }
} 
