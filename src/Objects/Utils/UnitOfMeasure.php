<?php
namespace Ci\Klaus\Objects\Utils;

use Ci\Klaus\Objects\Uom;
use JMS\Serializer\Annotation\SerializedName;
use JMS\Serializer\Annotation\Type;

trait UnitOfMeasure
{
    /**
     * @var Uom
     *
     * @SerializedName("UOM")
     * @Type("Ci\Klaus\Objects\Uom")
     */
    protected $uom;

    /**
     * Gets the value of uom.
     *
     * @return Uom
     */
    public function getUom()
    {
        return $this->uom;
    }

    /**
     * Sets the value of uom.
     *
     * @param Uom $uom the uom
     *
     * @return self
     */
    public function setUom(Uom $uom)
    {
        $this->uom = $uom;

        return $this;
    }
}