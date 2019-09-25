<?php

namespace Gam6itko\Cbrf\Model\IndicatorsEnum102;

/**
 * Class representing SINDAType.
 */
class SINDAType
{
    /**
     * @var int
     */
    protected $symId = null;

    /**
     * @var int
     */
    protected $symSort = null;

    /**
     * @var string
     */
    protected $symbol = null;

    /**
     * @var int
     */
    protected $symType = null;

    /**
     * @var string
     */
    protected $name = null;

    /**
     * @var int
     */
    protected $symSet = null;

    /**
     * Gets as symid.
     *
     * @return int
     */
    public function getSymId()
    {
        return $this->symId;
    }

    /**
     * Sets a new symid.
     *
     * @param int $symId
     *
     * @return self
     */
    public function setSymId($symId)
    {
        $this->symId = $symId;

        return $this;
    }

    /**
     * Gets as symSort.
     *
     * @return int
     */
    public function getSymsort()
    {
        return $this->symSort;
    }

    /**
     * Sets a new symSort.
     *
     * @param int $symSort
     *
     * @return self
     */
    public function setSymsort($symSort)
    {
        $this->symSort = $symSort;

        return $this;
    }

    /**
     * Gets as symbol.
     *
     * @return string
     */
    public function getSymbol()
    {
        return $this->symbol;
    }

    /**
     * Sets a new symbol.
     *
     * @param string $symbol
     *
     * @return self
     */
    public function setSymbol($symbol)
    {
        $this->symbol = $symbol;

        return $this;
    }

    /**
     * Gets as symType.
     *
     * @return int
     */
    public function getSymtype()
    {
        return $this->symType;
    }

    /**
     * Sets a new symType.
     *
     * @param int $symType
     *
     * @return self
     */
    public function setSymtype($symType)
    {
        $this->symType = $symType;

        return $this;
    }

    /**
     * Gets as name.
     *
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Sets a new name.
     *
     * @param string $name
     *
     * @return self
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Gets as symSet.
     *
     * @return int
     */
    public function getSymset()
    {
        return $this->symSet;
    }

    /**
     * Sets a new symSet.
     *
     * @param int $symSet
     *
     * @return self
     */
    public function setSymset($symSet)
    {
        $this->symSet = $symSet;

        return $this;
    }
}
