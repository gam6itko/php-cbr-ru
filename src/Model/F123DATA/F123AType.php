<?php

namespace Gam6itko\Cbrf\Model\F123DATA;

/**
 * Class representing F123AType
 */
class F123AType
{

    /**
     * @var string $cODE
     */
    protected $cODE = null;

    /**
     * @var string $nAME
     */
    protected $nAME = null;

    /**
     * @var float $vALUE
     */
    protected $vALUE = null;

    /**
     * Gets as cODE
     *
     * @return string
     */
    public function getCODE()
    {
        return $this->cODE;
    }

    /**
     * Sets a new cODE
     *
     * @param string $cODE
     * @return self
     */
    public function setCODE($cODE)
    {
        $this->cODE = $cODE;
        return $this;
    }

    /**
     * Gets as nAME
     *
     * @return string
     */
    public function getNAME()
    {
        return $this->nAME;
    }

    /**
     * Sets a new nAME
     *
     * @param string $nAME
     * @return self
     */
    public function setNAME($nAME)
    {
        $this->nAME = $nAME;
        return $this;
    }

    /**
     * Gets as vALUE
     *
     * @return float
     */
    public function getVALUE()
    {
        return $this->vALUE;
    }

    /**
     * Sets a new vALUE
     *
     * @param float $vALUE
     * @return self
     */
    public function setVALUE($vALUE)
    {
        $this->vALUE = $vALUE;
        return $this;
    }


}

