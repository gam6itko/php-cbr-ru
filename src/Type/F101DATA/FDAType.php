<?php

namespace Gam6itko\CbrRu\Type\F101DATA;

/**
 * Class representing FDAType
 */
class FDAType
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
     * @property string $aP
     */
    private $aP = null;

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
     * Gets as aP
     *
     * @return string
     */
    public function getAP()
    {
        return $this->aP;
    }

    /**
     * Sets a new aP
     *
     * @param string $aP
     * @return self
     */
    public function setAP($aP)
    {
        $this->aP = $aP;
        return $this;
    }


}

