<?php

namespace Gam6itko\Cbrf\Model\CreditOrg;

/**
 * Class representing EnumCreditsAType.
 */
class EnumCreditsAType
{
    /**
     * @var float
     */
    protected $intCode;

    /**
     * @var string
     */
    protected $orgName;

    /**
     * @var string
     */
    protected $bic;

    /**
     * @var float
     */
    protected $regNumber;

    /**
     * Gets as intCode.
     *
     * @return float
     */
    public function getIntCode()
    {
        return $this->intCode;
    }

    /**
     * Sets a new intCode.
     *
     * @param float $intCode
     *
     * @return self
     */
    public function setIntCode($intCode)
    {
        $this->intCode = $intCode;

        return $this;
    }

    /**
     * Gets as orgName.
     *
     * @return string
     */
    public function getOrgName()
    {
        return $this->orgName;
    }

    /**
     * Sets a new orgName.
     *
     * @param string $orgName
     *
     * @return self
     */
    public function setOrgName($orgName)
    {
        $this->orgName = $orgName;

        return $this;
    }

    /**
     * Gets as bic.
     *
     * @return string
     */
    public function getBic()
    {
        return $this->bic;
    }

    /**
     * Sets a new bic.
     *
     * @param string $bic
     *
     * @return self
     */
    public function setBic($bic)
    {
        $this->bic = $bic;

        return $this;
    }

    /**
     * Gets as cregnum.
     *
     * @return float
     */
    public function getRegNumber()
    {
        return $this->regNumber;
    }

    /**
     * Sets a new cregnum.
     *
     * @param float $regNumber
     *
     * @return self
     */
    public function setRegNumber($regNumber)
    {
        $this->regNumber = $regNumber;

        return $this;
    }
}
