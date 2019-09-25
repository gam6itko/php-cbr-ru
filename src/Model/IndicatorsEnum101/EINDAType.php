<?php

namespace Gam6itko\Cbrf\Model\IndicatorsEnum101;

/**
 * Class representing EINDAType
 */
class EINDAType
{
    /**
     * @var int $indID
     */
    protected $indID = null;

    /**
     * @var string $indCode
     */
    protected $indCode = null;

    /**
     * @var string $name
     */
    protected $name = null;

    /**
     * @var string $indType
     */
    protected $indType = null;

    /**
     * @var string $indChapter
     */
    protected $indChapter = null;

    /**
     * Gets as indID
     *
     * @return int
     */
    public function getIndID()
    {
        return $this->indID;
    }

    /**
     * Sets a new indID
     *
     * @param int $indID
     * @return self
     */
    public function setIndID($indID)
    {
        $this->indID = $indID;
        return $this;
    }

    /**
     * Gets as indCode
     *
     * @return string
     */
    public function getIndCode()
    {
        return $this->indCode;
    }

    /**
     * Sets a new indCode
     *
     * @param string $indCode
     * @return self
     */
    public function setIndCode($indCode)
    {
        $this->indCode = $indCode;
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
     * Gets as indType
     *
     * @return string
     */
    public function getIndType()
    {
        return $this->indType;
    }

    /**
     * Sets a new indType
     *
     * @param string $indType
     * @return self
     */
    public function setIndType($indType)
    {
        $this->indType = $indType;
        return $this;
    }

    /**
     * Gets as indChapter
     *
     * @return string
     */
    public function getIndChapter()
    {
        return $this->indChapter;
    }

    /**
     * Sets a new indChapter
     *
     * @param string $indChapter
     * @return self
     */
    public function setIndChapter($indChapter)
    {
        $this->indChapter = $indChapter;
        return $this;
    }
}
