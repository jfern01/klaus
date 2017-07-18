<?php
namespace Ci\Klaus;

abstract class Request
{
    public function getResponseNode()
    {
        return static::XML_RESPONSE_NODE;
    }
}