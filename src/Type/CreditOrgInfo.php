<?php

namespace Gam6itko\Cbrf\Type;

/**
 * Class representing CreditOrgInfo
 */
class CreditOrgInfo
{

    /**
     * @property \Gam6itko\Cbrf\Type\CreditOrgInfo\COAType[] $cO
     */
    private $cO = [
        
    ];

    /**
     * @property \Gam6itko\Cbrf\Type\CreditOrgInfo\LICAType[] $lIC
     */
    private $lIC = [
        
    ];

    /**
     * Adds as cO
     *
     * @return self
     * @param \Gam6itko\Cbrf\Type\CreditOrgInfo\COAType $cO
     */
    public function addToCO(\Gam6itko\Cbrf\Type\CreditOrgInfo\COAType $cO)
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
     * @return \Gam6itko\Cbrf\Type\CreditOrgInfo\COAType[]
     */
    public function getCO()
    {
        return $this->cO;
    }

    /**
     * Sets a new cO
     *
     * @param \Gam6itko\Cbrf\Type\CreditOrgInfo\COAType[] $cO
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
     * @return self
     * @param \Gam6itko\Cbrf\Type\CreditOrgInfo\LICAType $lIC
     */
    public function addToLIC(\Gam6itko\Cbrf\Type\CreditOrgInfo\LICAType $lIC)
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
     * @return \Gam6itko\Cbrf\Type\CreditOrgInfo\LICAType[]
     */
    public function getLIC()
    {
        return $this->lIC;
    }

    /**
     * Sets a new lIC
     *
     * @param \Gam6itko\Cbrf\Type\CreditOrgInfo\LICAType[] $lIC
     * @return self
     */
    public function setLIC(array $lIC)
    {
        $this->lIC = $lIC;
        return $this;
    }


}

