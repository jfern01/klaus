<?php
namespace Ci\Klaus;

use JMS\Serializer\Annotation\AccessType;
use JMS\Serializer\Annotation\SerializedName;
use JMS\Serializer\Annotation\Type;
use JMS\Serializer\Annotation\XmlAttribute;
use JMS\Serializer\Annotation\XmlElement;
use JMS\Serializer\Annotation\XmlRoot;

abstract class Response
{
    /**
     * @var int
     *
     * @SerializedName("statusCode")
     * @Type("integer")
     * @XmlAttribute
     */
    protected $statusCode;
} 
