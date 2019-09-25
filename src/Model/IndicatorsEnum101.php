<?php

namespace Gam6itko\Cbrf\Model;

use Gam6itko\Cbrf\Model\IndicatorsEnum101\EINDAType;

/**
 * Class representing IndicatorsEnum101
 */
class IndicatorsEnum101
{
    /**
     * @var EINDAType[] $eind
     */
    protected $eind = [];

    /**
     * Adds as eIND
     *
     * @param EINDAType $eind
     * @return self
     */
    public function addToEIND(EINDAType $eind)
    {
        $this->eind[] = $eind;
        return $this;
    }

    /**
     * isset eIND
     *
     * @param int|string $index
     * @return bool
     */
    public function issetEIND($index)
    {
        return isset($this->eind[$index]);
    }

    /**
     * unset eIND
     *
     * @param int|string $index
     * @return void
     */
    public function unsetEIND($index)
    {
        unset($this->eind[$index]);
    }

    /**
     * Gets as eIND
     *
     * @return EINDAType[]
     */
    public function getEIND()
    {
        return $this->eind;
    }

    /**
     * Sets a new eIND
     *
     * @param EINDAType[] $eind
     * @return self
     */
    public function setEIND(array $eind)
    {
        $this->eind = $eind;
        return $this;
    }
}
