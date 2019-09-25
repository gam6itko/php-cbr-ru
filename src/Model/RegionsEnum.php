<?php

namespace Gam6itko\Cbrf\Model;

use Gam6itko\Cbrf\Model\RegionsEnum\RGIDAType;

/**
 * Class representing RegionsEnum.
 */
class RegionsEnum
{
    /**
     * @var RGIDAType[]
     */
    protected $rgid = [];

    /**
     * Adds as rGID.
     *
     * @param RGIDAType $rgid
     *
     * @return self
     */
    public function addToRGID(RGIDAType $rgid)
    {
        $this->rgid[] = $rgid;

        return $this;
    }

    /**
     * isset rGID.
     *
     * @param int|string $index
     *
     * @return bool
     */
    public function issetRGID($index)
    {
        return isset($this->rgid[$index]);
    }

    /**
     * unset rGID.
     *
     * @param int|string $index
     */
    public function unsetRGID($index)
    {
        unset($this->rgid[$index]);
    }

    /**
     * Gets as rGID.
     *
     * @return RGIDAType[]
     */
    public function getRGID()
    {
        return $this->rgid;
    }

    /**
     * Sets a new rGID.
     *
     * @param RGIDAType[] $rgid
     *
     * @return self
     */
    public function setRGID(array $rgid)
    {
        $this->rgid = $rgid;

        return $this;
    }
}
