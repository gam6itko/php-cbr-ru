<?php

namespace Gam6itko\Cbrf\Model;

use Gam6itko\Cbrf\Model\IndicatorsEnum102\SINDAType;

/**
 * Class representing IndicatorsEnum102.
 */
class IndicatorsEnum102
{
    /**
     * @var SINDAType[]
     */
    protected $sind = [];

    /**
     * Adds as sind.
     *
     * @param SINDAType $sind
     *
     * @return self
     */
    public function addToSIND(SINDAType $sind)
    {
        $this->sind[] = $sind;

        return $this;
    }

    /**
     * isset sind.
     *
     * @param int|string $index
     *
     * @return bool
     */
    public function issetSIND($index)
    {
        return isset($this->sind[$index]);
    }

    /**
     * unset sind.
     *
     * @param int|string $index
     */
    public function unsetSIND($index)
    {
        unset($this->sind[$index]);
    }

    /**
     * Gets as sind.
     *
     * @return SINDAType[]
     */
    public function getSIND()
    {
        return $this->sind;
    }

    /**
     * Sets a new sind.
     *
     * @param SINDAType[] $sind
     *
     * @return self
     */
    public function setSIND(array $sind)
    {
        $this->sind = $sind;

        return $this;
    }
}
