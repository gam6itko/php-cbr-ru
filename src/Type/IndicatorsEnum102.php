<?php

namespace Gam6itko\CbrRu\Type;

/**
 * Class representing IndicatorsEnum102
 */
class IndicatorsEnum102
{

    /**
     * @property \Gam6itko\CbrRu\Type\IndicatorsEnum102\SINDAType[] $sIND
     */
    private $sIND = [
        
    ];

    /**
     * Adds as sIND
     *
     * @return self
     * @param \Gam6itko\CbrRu\Type\IndicatorsEnum102\SINDAType $sIND
     */
    public function addToSIND(\Gam6itko\CbrRu\Type\IndicatorsEnum102\SINDAType $sIND)
    {
        $this->sIND[] = $sIND;
        return $this;
    }

    /**
     * isset sIND
     *
     * @param int|string $index
     * @return bool
     */
    public function issetSIND($index)
    {
        return isset($this->sIND[$index]);
    }

    /**
     * unset sIND
     *
     * @param int|string $index
     * @return void
     */
    public function unsetSIND($index)
    {
        unset($this->sIND[$index]);
    }

    /**
     * Gets as sIND
     *
     * @return \Gam6itko\CbrRu\Type\IndicatorsEnum102\SINDAType[]
     */
    public function getSIND()
    {
        return $this->sIND;
    }

    /**
     * Sets a new sIND
     *
     * @param \Gam6itko\CbrRu\Type\IndicatorsEnum102\SINDAType[] $sIND
     * @return self
     */
    public function setSIND(array $sIND)
    {
        $this->sIND = $sIND;
        return $this;
    }


}

