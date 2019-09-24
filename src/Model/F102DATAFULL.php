<?php

namespace Gam6itko\Cbrf\Model;

/**
 * Class representing F102DATAFULL
 */
class F102DATAFULL
{

    /**
     * @var \Gam6itko\Cbrf\Model\F102DATAFULL\FDFAType[] $fDF
     */
    private $fDF = [
        
    ];

    /**
     * Adds as fDF
     *
     * @param \Gam6itko\Cbrf\Model\F102DATAFULL\FDFAType $fDF
     *@return self
     */
    public function addToFDF(\Gam6itko\Cbrf\Model\F102DATAFULL\FDFAType $fDF)
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
     * @return \Gam6itko\Cbrf\Model\F102DATAFULL\FDFAType[]
     */
    public function getFDF()
    {
        return $this->fDF;
    }

    /**
     * Sets a new fDF
     *
     * @param \Gam6itko\Cbrf\Model\F102DATAFULL\FDFAType[] $fDF
     * @return self
     */
    public function setFDF(array $fDF)
    {
        $this->fDF = $fDF;
        return $this;
    }


}

