<?php

namespace Gam6itko\Cbrf\Model\CreditOrgInfo;

/**
 * Class representing LICAType
 */
class LICAType
{

    /**
     * @property int $lCode
     */
    private $lCode = null;

    /**
     * @property string $lT
     */
    private $lT = null;

    /**
     * @property \DateTime $lDate
     */
    private $lDate = null;

    /**
     * Gets as lCode
     *
     * @return int
     */
    public function getLCode()
    {
        return $this->lCode;
    }

    /**
     * Sets a new lCode
     *
     * @param int $lCode
     * @return self
     */
    public function setLCode($lCode)
    {
        $this->lCode = $lCode;
        return $this;
    }

    /**
     * Gets as lT
     *
     * @return string
     */
    public function getLT()
    {
        return $this->lT;
    }

    /**
     * Sets a new lT
     *
     * @param string $lT
     * @return self
     */
    public function setLT($lT)
    {
        $this->lT = $lT;
        return $this;
    }

    /**
     * Gets as lDate
     *
     * @return \DateTime
     */
    public function getLDate()
    {
        return $this->lDate;
    }

    /**
     * Sets a new lDate
     *
     * @param \DateTime $lDate
     * @return self
     */
    public function setLDate(\DateTime $lDate)
    {
        $this->lDate = $lDate;
        return $this;
    }


}

