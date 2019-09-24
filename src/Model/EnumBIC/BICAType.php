<?php

namespace Gam6itko\Cbrf\Model\EnumBIC;

/**
 * Class representing BICAType
 */
class BICAType
{

    /**
     * @var string $bic
     */
    protected $bic = null;

    /**
     * @var \DateTime $rc
     */
    protected $rc = null;

    /**
     * @var string $nm
     */
    protected $nm = null;

    /**
     * @var string $rb
     */
    protected $rb = null;

    /**
     * @var float $rn
     */
    protected $rn = null;

    /**
     * @var float $intCode
     */
    protected $intCode = null;

    /**
     * Gets as bIC
     *
     * @return string
     */
    public function getBIC()
    {
        return $this->bic;
    }

    /**
     * Sets a new bIC
     *
     * @param string $bic
     * @return self
     */
    public function setBIC($bic)
    {
        $this->bic = $bic;
        return $this;
    }

    /**
     * Gets as rC
     *
     * @return \DateTime
     */
    public function getRC()
    {
        return $this->rc;
    }

    /**
     * Sets a new rC
     *
     * @param \DateTime $rc
     * @return self
     */
    public function setRC(\DateTime $rc)
    {
        $this->rc = $rc;
        return $this;
    }

    /**
     * Gets as nM
     *
     * @return string
     */
    public function getNM()
    {
        return $this->nm;
    }

    /**
     * Sets a new nM
     *
     * @param string $nM
     * @return self
     */
    public function setNM($nM)
    {
        $this->nm = $nM;
        return $this;
    }

    /**
     * Gets as rB
     *
     * @return string
     */
    public function getRB()
    {
        return $this->rb;
    }

    /**
     * Sets a new rB
     *
     * @param string $rb
     * @return self
     */
    public function setRB($rb)
    {
        $this->rb = $rb;
        return $this;
    }

    /**
     * Gets as rn
     *
     * @return float
     */
    public function getRN()
    {
        return $this->rn;
    }

    /**
     * Sets a new rn
     *
     * @param float $rn
     * @return self
     */
    public function setRN($rn)
    {
        $this->rn = $rn;
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

