<?php

namespace Gam6itko\Cbrf\Model\F135DATA;

/**
 * Class representing F1354AType.
 */
class F1354AType
{
    /**
     * @var int
     */
    protected $num;

    /**
     * @var string
     */
    protected $nn;

    /**
     * @var float
     */
    protected $nnd;

    /**
     * @var \DateTime
     */
    protected $dt;

    /**
     * Gets as num.
     *
     * @return int
     */
    public function getNum()
    {
        return $this->num;
    }

    /**
     * Sets a new num.
     *
     * @param int $num
     *
     * @return self
     */
    public function setNum($num)
    {
        $this->num = $num;

        return $this;
    }

    /**
     * Gets as nn.
     *
     * @return string
     */
    public function getNn()
    {
        return $this->nn;
    }

    /**
     * Sets a new nn.
     *
     * @param string $nn
     *
     * @return self
     */
    public function setNn($nn)
    {
        $this->nn = $nn;

        return $this;
    }

    /**
     * Gets as nnd.
     *
     * @return float
     */
    public function getNnd()
    {
        return $this->nnd;
    }

    /**
     * Sets a new nnd.
     *
     * @param float $nnd
     *
     * @return self
     */
    public function setNnd($nnd)
    {
        $this->nnd = $nnd;

        return $this;
    }

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
}
