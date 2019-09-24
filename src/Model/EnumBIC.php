<?php

namespace Gam6itko\Cbrf\Model;

use Gam6itko\Cbrf\Model\EnumBIC\BICAType;

/**
 * Class representing EnumBIC
 */
class EnumBIC
{

    /**
     * @var BICAType[] $bic
     */
    private $bic = [];

    /**
     * Adds as bIC
     *
     * @param BICAType $bic
     *@return self
     */
    public function addToBIC(BICAType $bic)
    {
        $this->bic[] = $bic;
        return $this;
    }

    /**
     * isset bIC
     *
     * @param int|string $index
     * @return bool
     */
    public function issetBIC($index)
    {
        return isset($this->bic[$index]);
    }

    /**
     * unset bIC
     *
     * @param int|string $index
     * @return void
     */
    public function unsetBIC($index)
    {
        unset($this->bic[$index]);
    }

    /**
     * Gets as bIC
     *
     * @return BICAType[]
     */
    public function getBIC()
    {
        return $this->bic;
    }

    /**
     * Sets a new bIC
     *
     * @param BICAType[] $bic
     * @return self
     */
    public function setBIC(array $bic)
    {
        $this->bic = $bic;
        return $this;
    }
}

