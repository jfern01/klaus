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
     * @var string
     *
     * @SerializedName("Name")
     * @Type("string")
     * @XmlElement(cdata=false)
     */
    protected $name;

    /**
     * @var string
     *
     * @SerializedName("AccountingID")
     * @Type("string")
     * @XmlElement(cdata=false)
     */
    protected $accountingId;

    /**
     * @var int
     *
     * @SerializedName("AccountType")
     * @Type("integer")
     */
    protected $accountType;

    /**
     * @var string
     *
     * @SerializedName("Balance")
     * @Type("string")
     * @XmlElement(cdata=false)
     */
    protected $balance;

    /**
     * Gets the value of name.
     *
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Sets the value of name.
     *
     * @param string $name the name
     *
     * @return self
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Gets the value of accountingId.
     *
     * @return string
     */
    public function getAccountingId()
    {
        return $this->accountingId;
    }

    /**
     * Sets the value of accountingId.
     *
     * @param string $accountingId the accounting id
     *
     * @return self
     */
    public function setAccountingId($accountingId)
    {
        $this->accountingId = $accountingId;

        return $this;
    }

    /**
     * Gets the value of accountType.
     *
     * @return int
     */
    public function getAccountType()
    {
        return $this->accountType;
    }

    /**
     * Sets the value of accountType.
     *
     * @param int $accountType the account type
     *
     * @return self
     */
    public function setAccountType($accountType)
    {
        $this->accountType = $accountType;

        return $this;
    }

    /**
     * Gets the value of balance.
     *
     * @return string
     */
    public function getBalance()
    {
        return $this->balance;
    }

    /**
     * Sets the value of balance.
     *
     * @param string $balance the balance
     *
     * @return self
     */
    public function setBalance($balance)
    {
        $this->balance = $balance;

        return $this;
    }
}