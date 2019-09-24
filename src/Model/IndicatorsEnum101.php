<?php

namespace Gam6itko\Cbrf\Model;

/**
 * Class representing IndicatorsEnum101
 */
class IndicatorsEnum101
{

    /**
     * @var \Gam6itko\Cbrf\Model\IndicatorsEnum101\EINDAType[] $eIND
     */
    protected $eIND = [
        
    ];

    /**
     * Adds as eIND
     *
     * @param \Gam6itko\Cbrf\Model\IndicatorsEnum101\EINDAType $eIND
     *@return self
     */
    public function addToEIND(\Gam6itko\Cbrf\Model\IndicatorsEnum101\EINDAType $eIND)
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
     * @return \Gam6itko\Cbrf\Model\IndicatorsEnum101\EINDAType[]
     */
    public function getEIND()
    {
        return $this->eIND;
    }

    /**
     * Sets a new eIND
     *
     * @param \Gam6itko\Cbrf\Model\IndicatorsEnum101\EINDAType[] $eIND
     * @return self
     */
    public function setEIND(array $eIND)
    {
        $this->eIND = $eIND;
        return $this;
    }


}

