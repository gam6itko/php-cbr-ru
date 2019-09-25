<?php

namespace Gam6itko\Cbrf\Model;

use Gam6itko\Cbrf\Model\F134DATAOLAP\FoAType;

/**
 * Class representing F134DATAOLAP.
 */
class F134DATAOLAP
{
    /**
     * @var FoAType[]
     */
    protected $fo = [];

    /**
     * Adds as fo.
     *
     * @param FoAType $fo
     *
     * @return self
     */
    public function addToFo(FoAType $fo)
    {
        $this->fo[] = $fo;

        return $this;
    }

    /**
     * isset fo.
     *
     * @param int|string $index
     *
     * @return bool
     */
    public function issetFo($index)
    {
        return isset($this->fo[$index]);
    }

    /**
     * unset fo.
     *
     * @param int|string $index
     */
    public function unsetFo($index)
    {
        unset($this->fo[$index]);
    }

    /**
     * Gets as fo.
     *
     * @return FoAType[]
     */
    public function getFo()
    {
        return $this->fo;
    }

    /**
     * Sets a new fo.
     *
     * @param FoAType[] $fo
     *
     * @return self
     */
    public function setFo(array $fo)
    {
        $this->fo = $fo;

        return $this;
    }
}
