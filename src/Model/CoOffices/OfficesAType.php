<?php

namespace Gam6itko\Cbrf\Model\CoOffices;

/**
 * Class representing OfficesAType.
 */
class OfficesAType
{
    /**
     * @var float
     */
    protected $cmain = null;

    /**
     * @var float
     */
    protected $cregnum = null;

    /**
     * @var string
     */
    protected $cname = null;

    /**
     * @var string
     */
    protected $cndate = null;

    /**
     * @var string
     */
    protected $straddrmn = null;

    /**
     * Gets as cmain.
     *
     * @return float
     */
    public function getCmain()
    {
        return $this->cmain;
    }

    /**
     * Sets a new cmain.
     *
     * @param float $cmain
     *
     * @return self
     */
    public function setCmain($cmain)
    {
        $this->cmain = $cmain;

        return $this;
    }

    /**
     * Gets as cregnum.
     *
     * @return float
     */
    public function getCregnum()
    {
        return $this->cregnum;
    }

    /**
     * Sets a new cregnum.
     *
     * @param float $cregnum
     *
     * @return self
     */
    public function setCregnum($cregnum)
    {
        $this->cregnum = $cregnum;

        return $this;
    }

    /**
     * Gets as cname.
     *
     * @return string
     */
    public function getCname()
    {
        return $this->cname;
    }

    /**
     * Sets a new cname.
     *
     * @param string $cname
     *
     * @return self
     */
    public function setCname($cname)
    {
        $this->cname = $cname;

        return $this;
    }

    /**
     * Gets as cndate.
     *
     * @return string
     */
    public function getCndate()
    {
        return $this->cndate;
    }

    /**
     * Sets a new cndate.
     *
     * @param string $cndate
     *
     * @return self
     */
    public function setCndate($cndate)
    {
        $this->cndate = $cndate;

        return $this;
    }

    /**
     * Gets as straddrmn.
     *
     * @return string
     */
    public function getStraddrmn()
    {
        return $this->straddrmn;
    }

    /**
     * Sets a new straddrmn.
     *
     * @param string $straddrmn
     *
     * @return self
     */
    public function setStraddrmn($straddrmn)
    {
        $this->straddrmn = $straddrmn;

        return $this;
    }
}
