<?php
namespace Ci\Klaus\Requests;

use Ci\Klaus\Request;
use JMS\Serializer\Annotation\AccessType;
use JMS\Serializer\Annotation\SerializedName;
use JMS\Serializer\Annotation\Type;
use JMS\Serializer\Annotation\XmlElement;
use JMS\Serializer\Annotation\XmlRoot;

/** 
 * @XmlRoot("GetAccountListRq")
 * @AccessType("public_method")
 */
class GetAccountListRequest extends Request
{
    const XML_RESPONSE_NODE = 'GetAccountListRs';
}