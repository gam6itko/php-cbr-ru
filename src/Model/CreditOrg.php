<?php

namespace Gam6itko\Cbrf\Model;

use Gam6itko\Cbrf\Model\CreditOrg\EnumCreditsAType;

/**
 * Class representing CreditOrg
 */
class CreditOrg
{

    /**
     * @var EnumCreditsAType[] $enumCredits
     */
    protected $enumCredits = [
        
    ];

    /**
     * Adds as enumCredits
     *
     * @param EnumCreditsAType $enumCredits
     *@return self
     */
    public function addToEnumCredits(EnumCreditsAType $enumCredits)
    {
        $this->enumCredits[] = $enumCredits;
        return $this;
    }

    /**
     * isset enumCredits
     *
     * @param int|string $index
     * @return bool
     */
    public function issetEnumCredits($index)
    {
        return isset($this->enumCredits[$index]);
    }

    /**
     * unset enumCredits
     *
     * @param int|string $index
     * @return void
     */
    public function unsetEnumCredits($index)
    {
        unset($this->enumCredits[$index]);
    }

    /**
     * Gets as enumCredits
     *
     * @return EnumCreditsAType[]
     */
    public function getEnumCredits()
    {
        return $this->enumCredits;
    }

    /**
     * Sets a new enumCredits
     *
     * @param EnumCreditsAType[] $enumCredits
     * @return self
     */
    public function setEnumCredits(array $enumCredits)
    {
        $this->enumCredits = $enumCredits;
        return $this;
    }


}

