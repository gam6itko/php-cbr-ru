<?php

namespace Gam6itko\CbrRu\Type;

/**
 * Class representing RegionsEnum
 */
class RegionsEnum
{

    /**
     * @property \Gam6itko\CbrRu\Type\RegionsEnum\RGIDAType[] $rGID
     */
    private $rGID = [
        
    ];

    /**
     * Adds as rGID
     *
     * @return self
     * @param \Gam6itko\CbrRu\Type\RegionsEnum\RGIDAType $rGID
     */
    public function addToRGID(\Gam6itko\CbrRu\Type\RegionsEnum\RGIDAType $rGID)
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
     * @return \Gam6itko\CbrRu\Type\RegionsEnum\RGIDAType[]
     */
    public function getRGID()
    {
        return $this->rGID;
    }

    /**
     * Sets a new rGID
     *
     * @param \Gam6itko\CbrRu\Type\RegionsEnum\RGIDAType[] $rGID
     * @return self
     */
    public function setRGID(array $rGID)
    {
        $this->rGID = $rGID;
        return $this;
    }


}

