<?php

namespace Gam6itko\Cbrf\Model;

use Gam6itko\Cbrf\Model\F102DATAFULL\FDFAType;

/**
 * Class representing F102DATAFULL.
 */
class F102DATAFULL
{
    /**
     * @var FDFAType[]
     */
    protected $fdf = [];

    /**
     * Adds as fDF.
     *
     * @param FDFAType $fdf
     *
     * @return self
     */
    public function addToFDF(FDFAType $fdf)
    {
        $this->fdf[] = $fdf;

        return $this;
    }

    /**
     * isset fDF.
     *
     * @param int|string $index
     *
     * @return bool
     */
    public function issetFDF($index)
    {
        return isset($this->fdf[$index]);
    }

    /**
     * unset fDF.
     *
     * @param int|string $index
     */
    public function unsetFDF($index)
    {
        unset($this->fdf[$index]);
    }

    /**
     * Gets as fDF.
     *
     * @return FDFAType[]
     */
    public function getFDF()
    {
        return $this->fdf;
    }

    /**
     * Sets a new fDF.
     *
     * @param FDFAType[] $fdf
     *
     * @return self
     */
    public function setFDF(array $fdf)
    {
        $this->fdf = $fdf;

        return $this;
    }
}
