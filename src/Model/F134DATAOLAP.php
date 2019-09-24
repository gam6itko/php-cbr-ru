<?php

namespace Gam6itko\Cbrf\Model;

/**
 * Class representing F134DATAOLAP
 */
class F134DATAOLAP
{

    /**
     * @property \Gam6itko\Cbrf\Model\F134DATAOLAP\FoAType[] $fo
     */
    private $fo = [
        
    ];

    /**
     * Adds as fo
     *
     * @param \Gam6itko\Cbrf\Model\F134DATAOLAP\FoAType $fo
     *@return self
     */
    public function addToFo(\Gam6itko\Cbrf\Model\F134DATAOLAP\FoAType $fo)
    {
        $this->fo[] = $fo;
        return $this;
    }

    /**
     * isset fo
     *
     * @param int|string $index
     * @return bool
     */
    public function issetFo($index)
    {
        return isset($this->fo[$index]);
    }

    /**
     * unset fo
     *
     * @param int|string $index
     * @return void
     */
    public function unsetFo($index)
    {
        unset($this->fo[$index]);
    }

    /**
     * Gets as fo
     *
     * @return \Gam6itko\Cbrf\Model\F134DATAOLAP\FoAType[]
     */
    public function getFo()
    {
        return $this->fo;
    }

    /**
     * Sets a new fo
     *
     * @param \Gam6itko\Cbrf\Model\F134DATAOLAP\FoAType[] $fo
     * @return self
     */
    public function setFo(array $fo)
    {
        $this->fo = $fo;
        return $this;
    }


}

