<?php

namespace Gam6itko\Cbrf\Model;

use Gam6itko\Cbrf\Model\F101DATA\FDAType;
use Gam6itko\Cbrf\Model\F101DATA\FDFAType;

/**
 * Class representing F101DATA
 */
class F101DATA
{

    /**
     * @var FDAType[] $fD
     */
    protected $fD = [
        
    ];

    /**
     * @var FDFAType[] $fDF
     */
    protected $fDF = [
        
    ];

    /**
     * Adds as fD
     *
     * @param FDAType $fD
     *@return self
     */
    public function addToFD(FDAType $fD)
    {
        $this->fD[] = $fD;
        return $this;
    }

    /**
     * isset fD
     *
     * @param int|string $index
     * @return bool
     */
    public function issetFD($index)
    {
        return isset($this->fD[$index]);
    }

    /**
     * unset fD
     *
     * @param int|string $index
     * @return void
     */
    public function unsetFD($index)
    {
        unset($this->fD[$index]);
    }

    /**
     * Gets as fD
     *
     * @return FDAType[]
     */
    public function getFD()
    {
        return $this->fD;
    }

    /**
     * Sets a new fD
     *
     * @param FDAType[] $fD
     * @return self
     */
    public function setFD(array $fD)
    {
        $this->fD = $fD;
        return $this;
    }

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

