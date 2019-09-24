<?php

namespace Gam6itko\Cbrf\Model\RegionsEnum;

/**
 * Class representing RGIDAType
 */
class RGIDAType
{

    /**
     * @var float $regCode
     */
    protected $regCode = null;

    /**
     * @var string $cNAME
     */
    protected $cNAME = null;

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

