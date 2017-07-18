<?php
namespace Ci\Klaus\Requests;

use Ci\Klaus\Request;
use JMS\Serializer\Annotation\AccessType;
use JMS\Serializer\Annotation\SerializedName;
use JMS\Serializer\Annotation\Type;
use JMS\Serializer\Annotation\XmlElement;
use JMS\Serializer\Annotation\XmlRoot;

/** 
 * @XmlRoot("ExecuteQueryRq")
 * @AccessType("public_method")
 */
class ExecuteQueryRequest extends Request
{
    const XML_RESPONSE_NODE = 'ExecuteQueryRs';

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
     * @SerializedName("Query")
     * @Type("string")
     * @XmlElement(cdata=false)
     */
    protected $query;

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
     * @param int $appId the app id
     *
     * @return self
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Gets the value of query.
     *
     * @return string
     */
    public function getQuery()
    {
        return $this->query;
    }

    /**
     * Sets the value of query.
     *
     * @param string $query the app name
     *
     * @return self
     */
    public function setQuery($query)
    {
        $this->query = $query;

        return $this;
    }
}