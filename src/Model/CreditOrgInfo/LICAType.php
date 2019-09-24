<?php

namespace Gam6itko\Cbrf\Model\CreditOrgInfo;

/**
 * Class representing LICAType
 */
class LICAType
{

    /**
     * @var int $lCode
     */
    private $lCode = null;

    /**
     * @var string $lT
     */
    private $lt = null;

    /**
     * @var \DateTime $lDate
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
     * Gets as lt
     *
     * @return string
     */
    public function getLT()
    {
        return $this->lt;
    }

    /**
     * Sets a new lt
     *
     * @param string $lt
     * @return self
     */
    public function setLT($lt)
    {
        $this->lt = $lt;
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

