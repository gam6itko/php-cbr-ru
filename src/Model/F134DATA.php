<?php

namespace Gam6itko\Cbrf\Model;

use Gam6itko\Cbrf\Model\F134DATA\FDAType;

/**
 * Class representing F134DATA
 */
class F134DATA
{

    /**
     * @var FDAType[] $fD
     */
    protected $fD = [
        
    ];

    /**
     * Adds as fD
     *
     * @param FDAType $fD
     *@return self
     */
    public function addToFD(FDAType $fD)
    {
        $this->fD[] = $fD;
        return $this;
    }

    /**
     * isset fD
     *
     * @param int|string $index
     * @return bool
     */
    public function issetFD($index)
    {
        return isset($this->fD[$index]);
    }

    /**
     * unset fD
     *
     * @param int|string $index
     * @return void
     */
    public function unsetFD($index)
    {
        unset($this->fD[$index]);
    }

    /**
     * Gets as fD
     *
     * @return FDAType[]
     */
    public function getFD()
    {
        return $this->fD;
    }

    /**
     * Sets a new fD
     *
     * @param FDAType[] $fD
     * @return self
     */
    public function setFD(array $fD)
    {
        $this->fD = $fD;
        return $this;
    }


}

