<?php

namespace Gam6itko\Cbrf\Model\F134DATAOLAP;

/**
 * Class representing FoAType
 */
class FoAType
{

    /**
     * @var \DateTime $dT
     */
    private $dT = null;

    /**
     * @var float $v1
     */
    private $v1 = null;

    /**
     * Gets as dT
     *
     * @return \DateTime
     */
    public function getDT()
    {
        return $this->dT;
    }

    /**
     * Sets a new dT
     *
     * @param \DateTime $dT
     * @return self
     */
    public function setDT(\DateTime $dT)
    {
        $this->dT = $dT;
        return $this;
    }

    /**
     * Gets as v1
     *
     * @return float
     */
    public function getV1()
    {
        return $this->v1;
    }

    /**
     * Sets a new v1
     *
     * @param float $v1
     * @return self
     */
    public function setV1($v1)
    {
        $this->v1 = $v1;
        return $this;
    }


}

