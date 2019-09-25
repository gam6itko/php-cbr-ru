<?php

namespace Gam6itko\Cbrf\Model\F134DATAOLAP;

/**
 * Class representing FoAType.
 */
class FoAType
{
    /**
     * @var \DateTime
     */
    protected $dt = null;

    /**
     * @var float
     */
    protected $v1 = null;

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
     * Gets as v1.
     *
     * @return float
     */
    public function getV1()
    {
        return $this->v1;
    }

    /**
     * Sets a new v1.
     *
     * @param float $v1
     *
     * @return self
     */
    public function setV1($v1)
    {
        $this->v1 = $v1;

        return $this;
    }
}
