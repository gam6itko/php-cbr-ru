<?php

namespace Gam6itko\Cbrf\Model\F134DATA;

/**
 * Class representing FDAType
 */
class FDAType
{

    /**
     * @var string $nS
     */
    private $nS = null;

    /**
     * @var string $pN
     */
    private $pN = null;

    /**
     * @var float $vAL
     */
    private $vAL = null;

    /**
     * Gets as nS
     *
     * @return string
     */
    public function getNS()
    {
        return $this->nS;
    }

    /**
     * Sets a new nS
     *
     * @param string $nS
     * @return self
     */
    public function setNS($nS)
    {
        $this->nS = $nS;
        return $this;
    }

    /**
     * Gets as pN
     *
     * @return string
     */
    public function getPN()
    {
        return $this->pN;
    }

    /**
     * Sets a new pN
     *
     * @param string $pN
     * @return self
     */
    public function setPN($pN)
    {
        $this->pN = $pN;
        return $this;
    }

    /**
     * Gets as vAL
     *
     * @return float
     */
    public function getVAL()
    {
        return $this->vAL;
    }

    /**
     * Sets a new vAL
     *
     * @param float $vAL
     * @return self
     */
    public function setVAL($vAL)
    {
        $this->vAL = $vAL;
        return $this;
    }


}

