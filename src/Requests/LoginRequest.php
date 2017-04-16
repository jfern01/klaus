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
     * @SerializedName("IAID")
     * @Type("integer")
     */
    protected $appId;

    /**
     * @SerializedName("IAName")
     * @Type("string")
     * @XmlElement(cdata=false)
     */
    protected $appName;

    /**
     * @SerializedName("IADescription")
     * @Type("string")
     * @XmlElement(cdata=false)
     */
    protected $appDescription;

    /**
     * @SerializedName("UserName")
     * @Type("string")
     * @XmlElement(cdata=false)
     */
    protected $username;

    /**
     * @SerializedName("UserPassword")
     * @Type("string")
     * @XmlElement(cdata=false)
     */
    protected $password;

    public function getAppId()
    {
        return $this->appId;
    }

    public function setAppId($appId)
    {
        $this->appId = $appId;
    }

    public function getAppName()
    {
        return $this->appName;
    }

    public function setAppName($appName)
    {
        $this->appName = $appName;
    }

    public function getAppDescription()
    {
        return $this->appDescription;
    }

    public function setAppDescription($appDescription)
    {
        $this->appDescription = $appDescription;
    }

    public function getUsername()
    {
        return $this->username;
    }

    public function setUsername($username)
    {
        $this->username = $username;
    }

    public function getPassword()
    {
        return base64_encode(md5($this->password, true));
    }

    public function setPassword($password)
    {
        $this->password = $password;
    }
} 
