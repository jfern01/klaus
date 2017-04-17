<?php
namespace Ci\Klaus\Requests;

use Ci\Klaus\Request;
use JMS\Serializer\Annotation\AccessType;
use JMS\Serializer\Annotation\SerializedName;
use JMS\Serializer\Annotation\Type;
use JMS\Serializer\Annotation\XmlElement;
use JMS\Serializer\Annotation\XmlRoot;

/** 
 * @XmlRoot("LoginRq")
 * @AccessType("public_method")
 */
class LoginRequest extends Request
{
    /**
     * @var int
     *
     * @SerializedName("IAID")
     * @Type("integer")
     */
    protected $appId;

    /**
     * @var string
     *
     * @SerializedName("IAName")
     * @Type("string")
     * @XmlElement(cdata=false)
     */
    protected $appName;

    /**
     * @var string
     *
     * @SerializedName("IADescription")
     * @Type("string")
     * @XmlElement(cdata=false)
     */
    protected $appDescription;

    /**
     * @var string
     *
     * @SerializedName("UserName")
     * @Type("string")
     * @XmlElement(cdata=false)
     */
    protected $username;

    /**
     * @var string
     *
     * @SerializedName("UserPassword")
     * @Type("string")
     * @XmlElement(cdata=false)
     */
    protected $password;

    /**
     * Gets the value of appId.
     *
     * @return int
     */
    public function getAppId()
    {
        return $this->appId;
    }

    /**
     * Sets the value of appId.
     *
     * @param int $appId the app id
     *
     * @return self
     */
    public function setAppId($appId)
    {
        $this->appId = $appId;

        return $this;
    }

    /**
     * Gets the value of appName.
     *
     * @return string
     */
    public function getAppName()
    {
        return $this->appName;
    }

    /**
     * Sets the value of appName.
     *
     * @param string $appName the app name
     *
     * @return self
     */
    public function setAppName($appName)
    {
        $this->appName = $appName;

        return $this;
    }

    /**
     * Gets the value of appDescription.
     *
     * @return string
     */
    public function getAppDescription()
    {
        return $this->appDescription;
    }

    /**
     * Sets the value of appDescription.
     *
     * @param string $appDescription the app description
     *
     * @return self
     */
    public function setAppDescription($appDescription)
    {
        $this->appDescription = $appDescription;

        return $this;
    }

    /**
     * Gets the value of username.
     *
     * @return string
     */
    public function getUsername()
    {
        return $this->username;
    }

    /**
     * Sets the value of username.
     *
     * @param string $username the username
     *
     * @return self
     */
    public function setUsername($username)
    {
        $this->username = $username;

        return $this;
    }

    /**
     * Gets the value of password.
     *
     * @return string
     */
    public function getPassword()
    {
        return base64_encode(md5($this->password, true));
    }

    /**
     * Sets the value of password.
     *
     * @param string $password the password
     *
     * @return self
     */
    public function setPassword($password)
    {
        $this->password = $password;

        return $this;
    }
} 
