<?php
namespace Ci\Klaus\Objects\Utils;

use JMS\Serializer\Annotation\SerializedName;
use JMS\Serializer\Annotation\Type;

trait UnitOfMeasure
{
    /**
     * @SerializedName("UOM")
     * @Type("Ci\Klaus\Objects\Uom")
     */
    protected $uom;

    public function getUom()
    {
        return $this->uom;
    }

    public function setUom($uom)
    {
        $this->uom = $uom;
    }    
}