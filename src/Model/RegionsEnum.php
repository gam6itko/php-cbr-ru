<?php

namespace Gam6itko\Cbrf\Model;

use Gam6itko\Cbrf\Model\RegionsEnum\RGIDAType;

/**
 * Class representing RegionsEnum
 */
class RegionsEnum
{

    /**
     * @var RGIDAType[] $rGID
     */
    protected $rGID = [
        
    ];

    /**
     * Adds as rGID
     *
     * @param RGIDAType $rGID
     *@return self
     */
    public function addToRGID(RGIDAType $rGID)
    {
        $this->rGID[] = $rGID;
        return $this;
    }

    /**
     * isset rGID
     *
     * @param int|string $index
     * @return bool
     */
    public function issetRGID($index)
    {
        return isset($this->rGID[$index]);
    }

    /**
     * unset rGID
     *
     * @param int|string $index
     * @return void
     */
    public function unsetRGID($index)
    {
        unset($this->rGID[$index]);
    }

    /**
     * Gets as rGID
     *
     * @return RGIDAType[]
     */
    public function getRGID()
    {
        return $this->rGID;
    }

    /**
     * Sets a new rGID
     *
     * @param RGIDAType[] $rGID
     * @return self
     */
    public function setRGID(array $rGID)
    {
        $this->rGID = $rGID;
        return $this;
    }


}

