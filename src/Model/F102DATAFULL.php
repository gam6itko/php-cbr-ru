<?php

namespace Gam6itko\Cbrf\Model;

use Gam6itko\Cbrf\Model\F102DATAFULL\FDFAType;

/**
 * Class representing F102DATAFULL
 */
class F102DATAFULL
{

    /**
     * @var FDFAType[] $fDF
     */
    protected $fDF = [
        
    ];

    /**
     * Adds as fDF
     *
     * @param FDFAType $fDF
     *@return self
     */
    public function addToFDF(FDFAType $fDF)
    {
        $this->fDF[] = $fDF;
        return $this;
    }

    /**
     * isset fDF
     *
     * @param int|string $index
     * @return bool
     */
    public function issetFDF($index)
    {
        return isset($this->fDF[$index]);
    }

    /**
     * unset fDF
     *
     * @param int|string $index
     * @return void
     */
    public function unsetFDF($index)
    {
        unset($this->fDF[$index]);
    }

    /**
     * Gets as fDF
     *
     * @return FDFAType[]
     */
    public function getFDF()
    {
        return $this->fDF;
    }

    /**
     * Sets a new fDF
     *
     * @param FDFAType[] $fDF
     * @return self
     */
    public function setFDF(array $fDF)
    {
        $this->fDF = $fDF;
        return $this;
    }


}

