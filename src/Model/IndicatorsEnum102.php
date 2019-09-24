<?php

namespace Gam6itko\Cbrf\Model;

use Gam6itko\Cbrf\Model\IndicatorsEnum102\SINDAType;

/**
 * Class representing IndicatorsEnum102
 */
class IndicatorsEnum102
{

    /**
     * @var SINDAType[] $sIND
     */
    protected $sIND = [
        
    ];

    /**
     * Adds as sIND
     *
     * @param SINDAType $sIND
     *@return self
     */
    public function addToSIND(SINDAType $sIND)
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
     * @return SINDAType[]
     */
    public function getSIND()
    {
        return $this->sIND;
    }

    /**
     * Sets a new sIND
     *
     * @param SINDAType[] $sIND
     * @return self
     */
    public function setSIND(array $sIND)
    {
        $this->sIND = $sIND;
        return $this;
    }


}

