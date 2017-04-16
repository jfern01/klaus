<?php
namespace Ci\Klaus\Objects;

use Ci\Klaus\Object;
use JMS\Serializer\Annotation\AccessType;
use JMS\Serializer\Annotation\SerializedName;
use JMS\Serializer\Annotation\Type;
use JMS\Serializer\Annotation\XmlElement;
use JMS\Serializer\Annotation\XmlRoot;

/** 
 * @XmlRoot("Account")
 * @AccessType("public_method")
 */
class Account extends Object
{
    /**
     * @SerializedName("Name")
     * @Type("string")
     * @XmlElement(cdata=false)
     */
    protected $name;

    /**
     * @SerializedName("AccountingID")
     * @Type("string")
     * @XmlElement(cdata=false)
     */
    protected $accountingId;

    /**
     * @SerializedName("AccountType")
     * @Type("integer")
     */
    protected $accountType;

    /**
     * @SerializedName("Balance")
     * @Type("string")
     * @XmlElement(cdata=false)
     */
    protected $balance;

    public function getName()
    {
        return $this->name;
    }

    public function setName($name)
    {
        $this->name = $name;
    }

    public function getAccountingId()
    {
        return $this->accountingId;
    }

    public function setAccountingId($accountingId)
    {
        $this->accountingId = $accountingId;
    }

    public function getAccountType()
    {
        return $this->accountType;
    }

    public function setAccountType($accountType)
    {
        $this->accountType = $accountType;
    }

    public function getBalance()
    {
        return $this->balance;
    }

    public function setBalance($balance)
    {
        $this->balance = $balance;
    }
}