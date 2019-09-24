<?php

namespace Gam6itko\Cbrf\Model\EnumBIC;

/**
 * Class representing BICAType
 */
class BICAType
{

    /**
     * @var string $bIC
     */
    private $bIC = null;

    /**
     * @var \DateTime $rC
     */
    private $rC = null;

    /**
     * @var string $nM
     */
    private $nM = null;

    /**
     * @var string $rB
     */
    private $rB = null;

    /**
     * @var float $rN
     */
    private $rN = null;

    /**
     * @var float $intCode
     */
    private $intCode = null;

    /**
     * Gets as bIC
     *
     * @return string
     */
    public function getBIC()
    {
        return $this->bIC;
    }

    /**
     * Sets a new bIC
     *
     * @param string $bIC
     * @return self
     */
    public function setBIC($bIC)
    {
        $this->bIC = $bIC;
        return $this;
    }

    /**
     * Gets as rC
     *
     * @return \DateTime
     */
    public function getRC()
    {
        return $this->rC;
    }

    /**
     * Sets a new rC
     *
     * @param \DateTime $rC
     * @return self
     */
    public function setRC(\DateTime $rC)
    {
        $this->rC = $rC;
        return $this;
    }

    /**
     * Gets as nM
     *
     * @return string
     */
    public function getNM()
    {
        return $this->nM;
    }

    /**
     * Sets a new nM
     *
     * @param string $nM
     * @return self
     */
    public function setNM($nM)
    {
        $this->nM = $nM;
        return $this;
    }

    /**
     * Gets as rB
     *
     * @return string
     */
    public function getRB()
    {
        return $this->rB;
    }

    /**
     * Sets a new rB
     *
     * @param string $rB
     * @return self
     */
    public function setRB($rB)
    {
        $this->rB = $rB;
        return $this;
    }

    /**
     * Gets as rN
     *
     * @return float
     */
    public function getRN()
    {
        return $this->rN;
    }

    /**
     * Sets a new rN
     *
     * @param float $rN
     * @return self
     */
    public function setRN($rN)
    {
        $this->rN = $rN;
        return $this;
    }

    /**
     * Gets as intCode
     *
     * @return float
     */
    public function getIntCode()
    {
        return $this->intCode;
    }

    /**
     * Sets a new intCode
     *
     * @param float $intCode
     * @return self
     */
    public function setIntCode($intCode)
    {
        $this->intCode = $intCode;
        return $this;
    }


}

