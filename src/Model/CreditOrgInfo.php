<?php

namespace Gam6itko\Cbrf\Model;

/**
 * Class representing CreditOrgInfo
 */
class CreditOrgInfo
{

    /**
     * @var \Gam6itko\Cbrf\Model\CreditOrgInfo\COAType[] $cO
     */
    protected $cO = [
        
    ];

    /**
     * @var \Gam6itko\Cbrf\Model\CreditOrgInfo\LICAType[] $lIC
     */
    protected $lIC = [
        
    ];

    /**
     * Adds as cO
     *
     * @param \Gam6itko\Cbrf\Model\CreditOrgInfo\COAType $cO
     *@return self
     */
    public function addToCO(\Gam6itko\Cbrf\Model\CreditOrgInfo\COAType $cO)
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
     * @return \Gam6itko\Cbrf\Model\CreditOrgInfo\COAType[]
     */
    public function getCO()
    {
        return $this->cO;
    }

    /**
     * Sets a new cO
     *
     * @param \Gam6itko\Cbrf\Model\CreditOrgInfo\COAType[] $cO
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
     * @param \Gam6itko\Cbrf\Model\CreditOrgInfo\LICAType $lIC
     *@return self
     */
    public function addToLIC(\Gam6itko\Cbrf\Model\CreditOrgInfo\LICAType $lIC)
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
     * @return \Gam6itko\Cbrf\Model\CreditOrgInfo\LICAType[]
     */
    public function getLIC()
    {
        return $this->lIC;
    }

    /**
     * Sets a new lIC
     *
     * @param \Gam6itko\Cbrf\Model\CreditOrgInfo\LICAType[] $lIC
     * @return self
     */
    public function setLIC(array $lIC)
    {
        $this->lIC = $lIC;
        return $this;
    }


}

