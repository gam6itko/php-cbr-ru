<?php

namespace Gam6itko\Cbrf\Model\CreditOrg;

/**
 * Class representing EnumCreditsAType
 */
class EnumCreditsAType
{

    /**
     * @property float $intCode
     */
    private $intCode = null;

    /**
     * @property string $orgName
     */
    private $orgName = null;

    /**
     * @property string $bic
     */
    private $bic = null;

    /**
     * @property float $cregnum
     */
    private $cregnum = null;

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

    /**
     * Gets as orgName
     *
     * @return string
     */
    public function getOrgName()
    {
        return $this->orgName;
    }

    /**
     * Sets a new orgName
     *
     * @param string $orgName
     * @return self
     */
    public function setOrgName($orgName)
    {
        $this->orgName = $orgName;
        return $this;
    }

    /**
     * Gets as bic
     *
     * @return string
     */
    public function getBic()
    {
        return $this->bic;
    }

    /**
     * Sets a new bic
     *
     * @param string $bic
     * @return self
     */
    public function setBic($bic)
    {
        $this->bic = $bic;
        return $this;
    }

    /**
     * Gets as cregnum
     *
     * @return float
     */
    public function getCregnum()
    {
        return $this->cregnum;
    }

    /**
     * Sets a new cregnum
     *
     * @param float $cregnum
     * @return self
     */
    public function setCregnum($cregnum)
    {
        $this->cregnum = $cregnum;
        return $this;
    }


}

