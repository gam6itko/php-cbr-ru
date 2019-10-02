<?php

namespace Gam6itko\Cbrf\Model\F101DATA;

/**
 * Class representing FDAType.
 */
class FDAType
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
     * @var string
     */
    protected $ap;

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
     * Gets as ap.
     *
     * @return string
     */
    public function getAP()
    {
        return $this->ap;
    }

    /**
     * Sets a new ap.
     *
     * @param string $ap
     *
     * @return self
     */
    public function setAP($ap)
    {
        $this->ap = $ap;

        return $this;
    }
}
