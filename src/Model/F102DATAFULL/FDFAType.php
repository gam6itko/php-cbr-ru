<?php

namespace Gam6itko\Cbrf\Model\F102DATAFULL;

/**
 * Class representing FDFAType.
 */
class FDFAType
{
    /**
     * @var \DateTime
     */
    protected $dt;

    /**
     * @var float
     */
    protected $val;

    /**
     * @var float
     */
    protected $r;

    /**
     * @var float
     */
    protected $v;

    /**
     * Gets as dt.
     *
     * @return \DateTime
     */
    public function getDT()
    {
        return $this->dt;
    }

    /**
     * Sets a new dt.
     *
     * @param \DateTime $dt
     *
     * @return self
     */
    public function setDT(\DateTime $dt)
    {
        $this->dt = $dt;

        return $this;
    }

    /**
     * Gets as val.
     *
     * @return float
     */
    public function getVal()
    {
        return $this->val;
    }

    /**
     * Sets a new val.
     *
     * @param float $val
     *
     * @return self
     */
    public function setVal($val)
    {
        $this->val = $val;

        return $this;
    }

    /**
     * Gets as r.
     *
     * @return float
     */
    public function getR()
    {
        return $this->r;
    }

    /**
     * Sets a new r.
     *
     * @param float $r
     *
     * @return self
     */
    public function setR($r)
    {
        $this->r = $r;

        return $this;
    }

    /**
     * Gets as v.
     *
     * @return float
     */
    public function getV()
    {
        return $this->v;
    }

    /**
     * Sets a new v.
     *
     * @param float $v
     *
     * @return self
     */
    public function setV($v)
    {
        $this->v = $v;

        return $this;
    }
}
