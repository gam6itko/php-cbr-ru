<?php

namespace Gam6itko\Cbrf\Model\F102DATAFULL;

/**
 * Class representing FDFAType
 */
class FDFAType
{

    /**
     * @property \DateTime $dT
     */
    private $dT = null;

    /**
     * @property float $val
     */
    private $val = null;

    /**
     * @property float $r
     */
    private $r = null;

    /**
     * @property float $v
     */
    private $v = null;

    /**
     * Gets as dT
     *
     * @return \DateTime
     */
    public function getDT()
    {
        return $this->dT;
    }

    /**
     * Sets a new dT
     *
     * @param \DateTime $dT
     * @return self
     */
    public function setDT(\DateTime $dT)
    {
        $this->dT = $dT;
        return $this;
    }

    /**
     * Gets as val
     *
     * @return float
     */
    public function getVal()
    {
        return $this->val;
    }

    /**
     * Sets a new val
     *
     * @param float $val
     * @return self
     */
    public function setVal($val)
    {
        $this->val = $val;
        return $this;
    }

    /**
     * Gets as r
     *
     * @return float
     */
    public function getR()
    {
        return $this->r;
    }

    /**
     * Sets a new r
     *
     * @param float $r
     * @return self
     */
    public function setR($r)
    {
        $this->r = $r;
        return $this;
    }

    /**
     * Gets as v
     *
     * @return float
     */
    public function getV()
    {
        return $this->v;
    }

    /**
     * Sets a new v
     *
     * @param float $v
     * @return self
     */
    public function setV($v)
    {
        $this->v = $v;
        return $this;
    }


}

