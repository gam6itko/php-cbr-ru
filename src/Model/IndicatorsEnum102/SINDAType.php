<?php

namespace Gam6itko\Cbrf\Model\IndicatorsEnum102;

/**
 * Class representing SINDAType
 */
class SINDAType
{

    /**
     * @var int $symid
     */
    private $symid = null;

    /**
     * @var int $symsort
     */
    private $symsort = null;

    /**
     * @var string $symbol
     */
    private $symbol = null;

    /**
     * @var int $symtype
     */
    private $symtype = null;

    /**
     * @var string $name
     */
    private $name = null;

    /**
     * @var int $symset
     */
    private $symset = null;

    /**
     * Gets as symid
     *
     * @return int
     */
    public function getSymid()
    {
        return $this->symid;
    }

    /**
     * Sets a new symid
     *
     * @param int $symid
     * @return self
     */
    public function setSymid($symid)
    {
        $this->symid = $symid;
        return $this;
    }

    /**
     * Gets as symsort
     *
     * @return int
     */
    public function getSymsort()
    {
        return $this->symsort;
    }

    /**
     * Sets a new symsort
     *
     * @param int $symsort
     * @return self
     */
    public function setSymsort($symsort)
    {
        $this->symsort = $symsort;
        return $this;
    }

    /**
     * Gets as symbol
     *
     * @return string
     */
    public function getSymbol()
    {
        return $this->symbol;
    }

    /**
     * Sets a new symbol
     *
     * @param string $symbol
     * @return self
     */
    public function setSymbol($symbol)
    {
        $this->symbol = $symbol;
        return $this;
    }

    /**
     * Gets as symtype
     *
     * @return int
     */
    public function getSymtype()
    {
        return $this->symtype;
    }

    /**
     * Sets a new symtype
     *
     * @param int $symtype
     * @return self
     */
    public function setSymtype($symtype)
    {
        $this->symtype = $symtype;
        return $this;
    }

    /**
     * Gets as name
     *
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Sets a new name
     *
     * @param string $name
     * @return self
     */
    public function setName($name)
    {
        $this->name = $name;
        return $this;
    }

    /**
     * Gets as symset
     *
     * @return int
     */
    public function getSymset()
    {
        return $this->symset;
    }

    /**
     * Sets a new symset
     *
     * @param int $symset
     * @return self
     */
    public function setSymset($symset)
    {
        $this->symset = $symset;
        return $this;
    }


}

