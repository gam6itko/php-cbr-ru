<?php

namespace Gam6itko\Cbrf\Model;

use Gam6itko\Cbrf\Model\CreditOrgInfo\COAType;
use Gam6itko\Cbrf\Model\CreditOrgInfo\LICAType;

/**
 * Class representing CreditOrgInfo.
 */
class CreditOrgInfo
{
    /**
     * @var COAType[]
     */
    protected $co = [];

    /**
     * @var LICAType[]
     */
    protected $lic = [];

    /**
     * Adds as co.
     *
     * @param COAType $co
     *
     * @return self
     */
    public function addToCO(COAType $co)
    {
        $this->co[] = $co;

        return $this;
    }

    /**
     * isset co.
     *
     * @param int|string $index
     *
     * @return bool
     */
    public function issetCO($index)
    {
        return isset($this->co[$index]);
    }

    /**
     * unset co.
     *
     * @param int|string $index
     */
    public function unsetCO($index)
    {
        unset($this->co[$index]);
    }

    /**
     * Gets as co.
     *
     * @return COAType[]
     */
    public function getCO()
    {
        return $this->co;
    }

    /**
     * Sets a new co.
     *
     * @param COAType[] $co
     *
     * @return self
     */
    public function setCO(array $co)
    {
        $this->co = $co;

        return $this;
    }

    /**
     * Adds as lic.
     *
     * @param LICAType $lic
     *
     * @return self
     */
    public function addToLIC(LICAType $lic)
    {
        $this->lic[] = $lic;

        return $this;
    }

    /**
     * isset lic.
     *
     * @param int|string $index
     *
     * @return bool
     */
    public function issetLIC($index)
    {
        return isset($this->lic[$index]);
    }

    /**
     * unset lic.
     *
     * @param int|string $index
     */
    public function unsetLIC($index)
    {
        unset($this->lic[$index]);
    }

    /**
     * Gets as lic.
     *
     * @return LICAType[]
     */
    public function getLIC()
    {
        return $this->lic;
    }

    /**
     * Sets a new lic.
     *
     * @param LICAType[] $lic
     *
     * @return self
     */
    public function setLIC(array $lic)
    {
        $this->lic = $lic;

        return $this;
    }
}
