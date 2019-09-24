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
    private $regNumber = null;

    /**
     * @var string $bIC
     */
    private $bIC = null;

    /**
     * @var string $orgName
     */
    private $orgName = null;

    /**
     * @var string $orgFullName
     */
    private $orgFullName = null;

    /**
     * @var string $phones
     */
    private $phones = null;

    /**
     * @var \DateTime $dateKGRRegistration
     */
    private $dateKGRRegistration = null;

    /**
     * @var string $mainRegNumber
     */
    private $mainRegNumber = null;

    /**
     * @var \DateTime $mainDateReg
     */
    private $mainDateReg = null;

    /**
     * @var string $ustavAdr
     */
    private $ustavAdr = null;

    /**
     * @var string $factAdr
     */
    private $factAdr = null;

    /**
     * @var string $director
     */
    private $director = null;

    /**
     * @var float $ustMoney
     */
    private $ustMoney = null;

    /**
     * @var string $orgStatus
     */
    private $orgStatus = null;

    /**
     * @var int $regCode
     */
    private $regCode = null;

    /**
     * @var \DateTime $sSVDate
     */
    private $sSVDate = null;

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
    public function getRegCode()
    {
        return $this->regCode;
    }

    /**
     * Sets a new regCode
     *
     * @param int $regCode
     * @return self
     */
    public function setRegCode($regCode)
    {
        $this->regCode = $regCode;
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

