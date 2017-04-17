<?php
namespace Ci\Klaus\Objects;

use Ci\Klaus\Object;
use JMS\Serializer\Annotation\AccessType;
use JMS\Serializer\Annotation\Type;
use JMS\Serializer\Annotation\XmlRoot;

/**
 * @XmlRoot("CreditCard")
 * @AccessType("public_method")
 */
class CreditCard extends Object
{
    /**
     * @var string
     *
     * @SerializedName("CardNumber")
     * @Type("string")
     * @XmlElement(cdata=false)
     */
    protected $cardNumber;

    /**
     * @var int
     *
     * @SerializedName("CardExpMonth")
     * @Type("string")
     * @XmlElement(cdata=false)
     */
    protected $cardExpMonth;

    /**
     * @var int
     *
     * @SerializedName("CardExpYear")
     * @Type("string")
     * @XmlElement(cdata=false)
     */
    protected $cardExpYear;

    /**
     * @var string
     *
     * @SerializedName("SecurityCode")
     * @Type("string")
     * @XmlElement(cdata=false)
     */
    protected $securityCode;

    /**
     * @var string
     *
     * @SerializedName("NameOnCard")
     * @Type("string")
     * @XmlElement(cdata=false)
     */
    protected $nameOnCard;

    /**
     * @var string
     *
     * @SerializedName("CardAddress")
     * @Type("string")
     * @XmlElement(cdata=false)
     */
    protected $cardAddress;

    /**
     * @var string
     *
     * @SerializedName("CardZipCode")
     * @Type("string")
     * @XmlElement(cdata=false)
     */
    protected $cardZipCode;

    /**
     * @var string
     *
     * @SerializedName("CardCountryCode")
     * @Type("string")
     * @XmlElement(cdata=false)
     */
    protected $cardCountryCode;

    /**
     * Gets the value of cardNumber.
     *
     * @return string
     */
    public function getCardNumber()
    {
        return $this->cardNumber;
    }

    /**
     * Sets the value of cardNumber.
     *
     * @param string $cardNumber the card number
     *
     * @return self
     */
    protected function setCardNumber($cardNumber)
    {
        $this->cardNumber = $cardNumber;

        return $this;
    }

    /**
     * Gets the value of cardExpMonth.
     *
     * @return int
     */
    public function getCardExpMonth()
    {
        return $this->cardExpMonth;
    }

    /**
     * Sets the value of cardExpMonth.
     *
     * @param int $cardExpMonth the card exp month
     *
     * @return self
     */
    protected function setCardExpMonth($cardExpMonth)
    {
        $this->cardExpMonth = $cardExpMonth;

        return $this;
    }

    /**
     * Gets the value of cardExpYear.
     *
     * @return int
     */
    public function getCardExpYear()
    {
        return $this->cardExpYear;
    }

    /**
     * Sets the value of cardExpYear.
     *
     * @param int $cardExpYear the card exp year
     *
     * @return self
     */
    protected function setCardExpYear($cardExpYear)
    {
        $this->cardExpYear = $cardExpYear;

        return $this;
    }

    /**
     * Gets the value of securityCode.
     *
     * @return string
     */
    public function getSecurityCode()
    {
        return $this->securityCode;
    }

    /**
     * Sets the value of securityCode.
     *
     * @param string $securityCode the security code
     *
     * @return self
     */
    protected function setSecurityCode($securityCode)
    {
        $this->securityCode = $securityCode;

        return $this;
    }

    /**
     * Gets the value of nameOnCard.
     *
     * @return string
     */
    public function getNameOnCard()
    {
        return $this->nameOnCard;
    }

    /**
     * Sets the value of nameOnCard.
     *
     * @param string $nameOnCard the name on card
     *
     * @return self
     */
    protected function setNameOnCard($nameOnCard)
    {
        $this->nameOnCard = $nameOnCard;

        return $this;
    }

    /**
     * Gets the value of cardAddress.
     *
     * @return string
     */
    public function getCardAddress()
    {
        return $this->cardAddress;
    }

    /**
     * Sets the value of cardAddress.
     *
     * @param string $cardAddress the card address
     *
     * @return self
     */
    protected function setCardAddress($cardAddress)
    {
        $this->cardAddress = $cardAddress;

        return $this;
    }

    /**
     * Gets the value of cardZipCode.
     *
     * @return string
     */
    public function getCardZipCode()
    {
        return $this->cardZipCode;
    }

    /**
     * Sets the value of cardZipCode.
     *
     * @param string $cardZipCode the card zip code
     *
     * @return self
     */
    protected function setCardZipCode($cardZipCode)
    {
        $this->cardZipCode = $cardZipCode;

        return $this;
    }

    /**
     * Gets the value of cardCountryCode.
     *
     * @return string
     */
    public function getCardCountryCode()
    {
        return $this->cardCountryCode;
    }

    /**
     * Sets the value of cardCountryCode.
     *
     * @param string $cardCountryCode the card country code
     *
     * @return self
     */
    protected function setCardCountryCode($cardCountryCode)
    {
        $this->cardCountryCode = $cardCountryCode;

        return $this;
    }
}