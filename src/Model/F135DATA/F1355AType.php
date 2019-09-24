<?php

namespace Gam6itko\Cbrf\Model\F135DATA;

/**
 * Class representing F1355AType
 */
class F1355AType
{

    /**
     * @var \DateTime $dT
     */
    private $dT = null;

    /**
     * Gets as dT
     *
     * @return \DateTime
     */
    public function getDT()
    {
        return $this->dT;
    }

    /**
     * Sets a new dT
     *
     * @param \DateTime $dT
     * @return self
     */
    public function setDT(\DateTime $dT)
    {
        $this->dT = $dT;
        return $this;
    }


}

