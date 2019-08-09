<?php

namespace Gam6itko\CbrRu\Type\F135DATA;

/**
 * Class representing F1354AType
 */
class F1354AType
{

    /**
     * @property int $num
     */
    private $num = null;

    /**
     * @property string $nn
     */
    private $nn = null;

    /**
     * @property float $nnd
     */
    private $nnd = null;

    /**
     * @property \DateTime $dT
     */
    private $dT = null;

    /**
     * Gets as num
     *
     * @return int
     */
    public function getNum()
    {
        return $this->num;
    }

    /**
     * Sets a new num
     *
     * @param int $num
     * @return self
     */
    public function setNum($num)
    {
        $this->num = $num;
        return $this;
    }

    /**
     * Gets as nn
     *
     * @return string
     */
    public function getNn()
    {
        return $this->nn;
    }

    /**
     * Sets a new nn
     *
     * @param string $nn
     * @return self
     */
    public function setNn($nn)
    {
        $this->nn = $nn;
        return $this;
    }

    /**
     * Gets as nnd
     *
     * @return float
     */
    public function getNnd()
    {
        return $this->nnd;
    }

    /**
     * Sets a new nnd
     *
     * @param float $nnd
     * @return self
     */
    public function setNnd($nnd)
    {
        $this->nnd = $nnd;
        return $this;
    }

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


}

