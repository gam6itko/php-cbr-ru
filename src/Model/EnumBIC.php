<?php

namespace Gam6itko\Cbrf\Model;

/**
 * Class representing EnumBIC
 */
class EnumBIC
{

    /**
     * @var \Gam6itko\Cbrf\Model\EnumBIC\BICAType[] $bIC
     */
    private $bIC = [
        
    ];

    /**
     * Adds as bIC
     *
     * @param \Gam6itko\Cbrf\Model\EnumBIC\BICAType $bIC
     *@return self
     */
    public function addToBIC(\Gam6itko\Cbrf\Model\EnumBIC\BICAType $bIC)
    {
        $this->bIC[] = $bIC;
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
        return isset($this->bIC[$index]);
    }

    /**
     * unset bIC
     *
     * @param int|string $index
     * @return void
     */
    public function unsetBIC($index)
    {
        unset($this->bIC[$index]);
    }

    /**
     * Gets as bIC
     *
     * @return \Gam6itko\Cbrf\Model\EnumBIC\BICAType[]
     */
    public function getBIC()
    {
        return $this->bIC;
    }

    /**
     * Sets a new bIC
     *
     * @param \Gam6itko\Cbrf\Model\EnumBIC\BICAType[] $bIC
     * @return self
     */
    public function setBIC(array $bIC)
    {
        $this->bIC = $bIC;
        return $this;
    }


}

