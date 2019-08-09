<?php

namespace Gam6itko\CbrRu\Type\RegionsEnum;

/**
 * Class representing RGIDAType
 */
class RGIDAType
{

    /**
     * @property float $regCode
     */
    private $regCode = null;

    /**
     * @property string $cNAME
     */
    private $cNAME = null;

    /**
     * Gets as regCode
     *
     * @return float
     */
    public function getRegCode()
    {
        return $this->regCode;
    }

    /**
     * Sets a new regCode
     *
     * @param float $regCode
     * @return self
     */
    public function setRegCode($regCode)
    {
        $this->regCode = $regCode;
        return $this;
    }

    /**
     * Gets as cNAME
     *
     * @return string
     */
    public function getCNAME()
    {
        return $this->cNAME;
    }

    /**
     * Sets a new cNAME
     *
     * @param string $cNAME
     * @return self
     */
    public function setCNAME($cNAME)
    {
        $this->cNAME = $cNAME;
        return $this;
    }


}

