<?php

namespace Gam6itko\Cbrf\Model;

use Gam6itko\Cbrf\Model\IndicatorsEnum101\EINDAType;

/**
 * Class representing IndicatorsEnum101
 */
class IndicatorsEnum101
{

    /**
     * @var EINDAType[] $eIND
     */
    protected $eIND = [
        
    ];

    /**
     * Adds as eIND
     *
     * @param EINDAType $eIND
     *@return self
     */
    public function addToEIND(EINDAType $eIND)
    {
        $this->eIND[] = $eIND;
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
        return isset($this->eIND[$index]);
    }

    /**
     * unset eIND
     *
     * @param int|string $index
     * @return void
     */
    public function unsetEIND($index)
    {
        unset($this->eIND[$index]);
    }

    /**
     * Gets as eIND
     *
     * @return EINDAType[]
     */
    public function getEIND()
    {
        return $this->eIND;
    }

    /**
     * Sets a new eIND
     *
     * @param EINDAType[] $eIND
     * @return self
     */
    public function setEIND(array $eIND)
    {
        $this->eIND = $eIND;
        return $this;
    }


}

