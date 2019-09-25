<?php

namespace Gam6itko\Cbrf\Model\RegionsEnum;

/**
 * Class representing RGIDAType.
 */
class RGIDAType
{
    /**
     * @var float
     */
    protected $regCode = null;

    /**
     * @var string
     */
    protected $cname = null;

    /**
     * Gets as regCode.
     *
     * @return float
     */
    public function getRegCode()
    {
        return $this->regCode;
    }

    /**
     * Sets a new regCode.
     *
     * @param float $regCode
     *
     * @return self
     */
    public function setRegCode($regCode)
    {
        $this->regCode = $regCode;

        return $this;
    }

    /**
     * Gets as cname.
     *
     * @return string
     */
    public function getCNAME()
    {
        return $this->cname;
    }

    /**
     * Sets a new cname.
     *
     * @param string $cname
     *
     * @return self
     */
    public function setCNAME($cname)
    {
        $this->cname = $cname;

        return $this;
    }
}
