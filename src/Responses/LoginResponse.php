<?php
namespace Ci\Klaus\Responses;

use Ci\Klaus\Response;
use JMS\Serializer\Annotation\AccessType;
use JMS\Serializer\Annotation\SerializedName;
use JMS\Serializer\Annotation\Type;
use JMS\Serializer\Annotation\XmlElement;
use JMS\Serializer\Annotation\XmlList;
use JMS\Serializer\Annotation\XmlRoot;

/** 
 * @XmlRoot("LoginRs")
 */
class LoginResponse extends Response
{   
    /**
     * @var string
     *
     * @SerializedName("UserFullName")
     * @Type("string")
     */
    protected $userFullName;

    /**
     * @var array
     *
     * 
     * @XmlList(inline = true, entry = "Module")
     * @Type("array<string>")
     */
    protected $moduleAccess = [];

    /**
     * @var string
     *
     * @SerializedName("ServerVersion")
     * @Type("string")
     */
    protected $serverVersion;
}