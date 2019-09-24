<?php

namespace Gam6itko\Cbrf\Model;

use Gam6itko\Cbrf\Model\CreditOrgInfo\COAType;
use Gam6itko\Cbrf\Model\CreditOrgInfo\LICAType;

/**
 * Class representing CreditOrgInfo
 */
class CreditOrgInfo
{

    /**
     * @var COAType[] $cO
     */
    protected $cO = [
        
    ];

    /**
     * @var LICAType[] $lIC
     */
    protected $lIC = [
        
    ];

    /**
     * Adds as cO
     *
     * @param COAType $cO
     *@return self
     */
    public function addToCO(COAType $cO)
    {
        $this->cO[] = $cO;
        return $this;
    }

    /**
     * isset cO
     *
     * @param int|string $index
     * @return bool
     */
    public function issetCO($index)
    {
        return isset($this->cO[$index]);
    }

    /**
     * unset cO
     *
     * @param int|string $index
     * @return void
     */
    public function unsetCO($index)
    {
        unset($this->cO[$index]);
    }

    /**
     * Gets as cO
     *
     * @return COAType[]
     */
    public function getCO()
    {
        return $this->cO;
    }

    /**
     * Sets a new cO
     *
     * @param COAType[] $cO
     * @return self
     */
    public function setCO(array $cO)
    {
        $this->cO = $cO;
        return $this;
    }

    /**
     * Adds as lIC
     *
     * @param LICAType $lIC
     *@return self
     */
    public function addToLIC(LICAType $lIC)
    {
        $this->lIC[] = $lIC;
        return $this;
    }

    /**
     * isset lIC
     *
     * @param int|string $index
     * @return bool
     */
    public function issetLIC($index)
    {
        return isset($this->lIC[$index]);
    }

    /**
     * unset lIC
     *
     * @param int|string $index
     * @return void
     */
    public function unsetLIC($index)
    {
        unset($this->lIC[$index]);
    }

    /**
     * Gets as lIC
     *
     * @return LICAType[]
     */
    public function getLIC()
    {
        return $this->lIC;
    }

    /**
     * Sets a new lIC
     *
     * @param LICAType[] $lIC
     * @return self
     */
    public function setLIC(array $lIC)
    {
        $this->lIC = $lIC;
        return $this;
    }


}

