<?php
namespace Ci\Klaus\Requests;

use Ci\Klaus\Request;
use JMS\Serializer\Annotation\AccessType;
use JMS\Serializer\Annotation\SerializedName;
use JMS\Serializer\Annotation\Type;
use JMS\Serializer\Annotation\XmlElement;
use JMS\Serializer\Annotation\XmlRoot;

/** 
 * @XmlRoot("LocationListRq")
 * @AccessType("public_method")
 */
class LocationListRequest extends Request
{
    const XML_RESPONSE_NODE = 'LocationListRs';
}