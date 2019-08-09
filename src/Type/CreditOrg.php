<?php

namespace Gam6itko\CbrRu\Type;

/**
 * Class representing CreditOrg
 */
class CreditOrg
{

    /**
     * @property \Gam6itko\CbrRu\Type\CreditOrg\EnumCreditsAType[] $enumCredits
     */
    private $enumCredits = [
        
    ];

    /**
     * Adds as enumCredits
     *
     * @return self
     * @param \Gam6itko\CbrRu\Type\CreditOrg\EnumCreditsAType $enumCredits
     */
    public function addToEnumCredits(\Gam6itko\CbrRu\Type\CreditOrg\EnumCreditsAType $enumCredits)
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
     * @return \Gam6itko\CbrRu\Type\CreditOrg\EnumCreditsAType[]
     */
    public function getEnumCredits()
    {
        return $this->enumCredits;
    }

    /**
     * Sets a new enumCredits
     *
     * @param \Gam6itko\CbrRu\Type\CreditOrg\EnumCreditsAType[] $enumCredits
     * @return self
     */
    public function setEnumCredits(array $enumCredits)
    {
        $this->enumCredits = $enumCredits;
        return $this;
    }


}

