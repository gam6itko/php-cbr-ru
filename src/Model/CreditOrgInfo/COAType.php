<?php

namespace Gam6itko\Cbrf\Model\CreditOrgInfo;

/**
 * Class representing COAType
 */
class COAType
{
    /**
     * @var int $regNumber
     */
    protected $regNumber = null;

    /**
     * @var string $bic
     */
    protected $bic = null;

    /**
     * @var string $orgName
     */
    protected $orgName = null;

    /**
     * @var string $orgFullName
     */
    protected $orgFullName = null;

    /**
     * @var string $phones
     */
    protected $phones = null;

    /**
     * @var \DateTime $dateKGRRegistration
     */
    protected $dateKGRRegistration = null;

    /**
     * @var string $mainRegNumber
     */
    protected $mainRegNumber = null;

    /**
     * @var \DateTime $mainDateReg
     */
    protected $mainDateReg = null;

    /**
     * @var string $ustavAdr
     */
    protected $ustavAdr = null;

    /**
     * @var string $factAdr
     */
    protected $factAdr = null;

    /**
     * @var string $director
     */
    protected $director = null;

    /**
     * @var float $ustMoney
     */
    protected $ustMoney = null;

    /**
     * @var string $orgStatus
     */
    protected $orgStatus = null;

    /**
     * @var int $regionCode
     */
    protected $regionCode = null;

    /**
     * @var \DateTime $sSVDate
     */
    protected $sSVDate = null;

    /**
     * Gets as regNumber
     *
     * @return int
     */
    public function getRegNumber()
    {
        return $this->regNumber;
    }

    /**
     * Sets a new regNumber
     *
     * @param int $regNumber
     * @return self
     */
    public function setRegNumber($regNumber)
    {
        $this->regNumber = $regNumber;
        return $this;
    }

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
     * Gets as orgFullName
     *
     * @return string
     */
    public function getOrgFullName()
    {
        return $this->orgFullName;
    }

    /**
     * Sets a new orgFullName
     *
     * @param string $orgFullName
     * @return self
     */
    public function setOrgFullName($orgFullName)
    {
        $this->orgFullName = $orgFullName;
        return $this;
    }

    /**
     * Gets as phones
     *
     * @return string
     */
    public function getPhones()
    {
        return $this->phones;
    }

    /**
     * Sets a new phones
     *
     * @param string $phones
     * @return self
     */
    public function setPhones($phones)
    {
        $this->phones = $phones;
        return $this;
    }

    /**
     * Gets as dateKGRRegistration
     *
     * @return \DateTime
     */
    public function getDateKGRRegistration()
    {
        return $this->dateKGRRegistration;
    }

    /**
     * Sets a new dateKGRRegistration
     *
     * @param \DateTime $dateKGRRegistration
     * @return self
     */
    public function setDateKGRRegistration(\DateTime $dateKGRRegistration)
    {
        $this->dateKGRRegistration = $dateKGRRegistration;
        return $this;
    }

    /**
     * Gets as mainRegNumber
     *
     * @return string
     */
    public function getMainRegNumber()
    {
        return $this->mainRegNumber;
    }

    /**
     * Sets a new mainRegNumber
     *
     * @param string $mainRegNumber
     * @return self
     */
    public function setMainRegNumber($mainRegNumber)
    {
        $this->mainRegNumber = $mainRegNumber;
        return $this;
    }

    /**
     * Gets as mainDateReg
     *
     * @return \DateTime
     */
    public function getMainDateReg()
    {
        return $this->mainDateReg;
    }

    /**
     * Sets a new mainDateReg
     *
     * @param \DateTime $mainDateReg
     * @return self
     */
    public function setMainDateReg(\DateTime $mainDateReg)
    {
        $this->mainDateReg = $mainDateReg;
        return $this;
    }

    /**
     * Gets as ustavAdr
     *
     * @return string
     */
    public function getUstavAdr()
    {
        return $this->ustavAdr;
    }

    /**
     * Sets a new ustavAdr
     *
     * @param string $ustavAdr
     * @return self
     */
    public function setUstavAdr($ustavAdr)
    {
        $this->ustavAdr = $ustavAdr;
        return $this;
    }

    /**
     * Gets as factAdr
     *
     * @return string
     */
    public function getFactAdr()
    {
        return $this->factAdr;
    }

    /**
     * Sets a new factAdr
     *
     * @param string $factAdr
     * @return self
     */
    public function setFactAdr($factAdr)
    {
        $this->factAdr = $factAdr;
        return $this;
    }

    /**
     * Gets as director
     *
     * @return string
     */
    public function getDirector()
    {
        return $this->director;
    }

    /**
     * Sets a new director
     *
     * @param string $director
     * @return self
     */
    public function setDirector($director)
    {
        $this->director = $director;
        return $this;
    }

    /**
     * Gets as ustMoney
     *
     * @return float
     */
    public function getUstMoney()
    {
        return $this->ustMoney;
    }

    /**
     * Sets a new ustMoney
     *
     * @param float $ustMoney
     * @return self
     */
    public function setUstMoney($ustMoney)
    {
        $this->ustMoney = $ustMoney;
        return $this;
    }

    /**
     * Gets as orgStatus
     *
     * @return string
     */
    public function getOrgStatus()
    {
        return $this->orgStatus;
    }

    /**
     * Sets a new orgStatus
     *
     * @param string $orgStatus
     * @return self
     */
    public function setOrgStatus($orgStatus)
    {
        $this->orgStatus = $orgStatus;
        return $this;
    }

    /**
     * Gets as regCode
     *
     * @return int
     */
    public function getRegionCode()
    {
        return $this->regionCode;
    }

    /**
     * Sets a new regCode
     *
     * @param int $regionCode
     * @return self
     */
    public function setRegionCode($regionCode)
    {
        $this->regionCode = $regionCode;
        return $this;
    }

    /**
     * Gets as sSVDate
     *
     * @return \DateTime
     */
    public function getSSVDate()
    {
        return $this->sSVDate;
    }

    /**
     * Sets a new sSVDate
     *
     * @param \DateTime $sSVDate
     * @return self
     */
    public function setSSVDate(\DateTime $sSVDate)
    {
        $this->sSVDate = $sSVDate;
        return $this;
    }
}
