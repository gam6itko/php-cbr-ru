<?php

namespace Gam6itko\Cbrf\Model;

/**
 * Class representing F101DATA
 */
class F101DATA
{

    /**
     * @property \Gam6itko\Cbrf\Model\F101DATA\FDAType[] $fD
     */
    private $fD = [
        
    ];

    /**
     * @property \Gam6itko\Cbrf\Model\F101DATA\FDFAType[] $fDF
     */
    private $fDF = [
        
    ];

    /**
     * Adds as fD
     *
     * @param \Gam6itko\Cbrf\Model\F101DATA\FDAType $fD
     *@return self
     */
    public function addToFD(\Gam6itko\Cbrf\Model\F101DATA\FDAType $fD)
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
     * @return \Gam6itko\Cbrf\Model\F101DATA\FDAType[]
     */
    public function getFD()
    {
        return $this->fD;
    }

    /**
     * Sets a new fD
     *
     * @param \Gam6itko\Cbrf\Model\F101DATA\FDAType[] $fD
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
     * @param \Gam6itko\Cbrf\Model\F101DATA\FDFAType $fDF
     *@return self
     */
    public function addToFDF(\Gam6itko\Cbrf\Model\F101DATA\FDFAType $fDF)
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
     * @return \Gam6itko\Cbrf\Model\F101DATA\FDFAType[]
     */
    public function getFDF()
    {
        return $this->fDF;
    }

    /**
     * Sets a new fDF
     *
     * @param \Gam6itko\Cbrf\Model\F101DATA\FDFAType[] $fDF
     * @return self
     */
    public function setFDF(array $fDF)
    {
        $this->fDF = $fDF;
        return $this;
    }


}

