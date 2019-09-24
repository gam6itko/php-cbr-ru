<?php

namespace Gam6itko\Cbrf\Model;

/**
 * Class representing F134DATA
 */
class F134DATA
{

    /**
     * @var \Gam6itko\Cbrf\Model\F134DATA\FDAType[] $fD
     */
    private $fD = [
        
    ];

    /**
     * Adds as fD
     *
     * @param \Gam6itko\Cbrf\Model\F134DATA\FDAType $fD
     *@return self
     */
    public function addToFD(\Gam6itko\Cbrf\Model\F134DATA\FDAType $fD)
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
     * @return \Gam6itko\Cbrf\Model\F134DATA\FDAType[]
     */
    public function getFD()
    {
        return $this->fD;
    }

    /**
     * Sets a new fD
     *
     * @param \Gam6itko\Cbrf\Model\F134DATA\FDAType[] $fD
     * @return self
     */
    public function setFD(array $fD)
    {
        $this->fD = $fD;
        return $this;
    }


}

