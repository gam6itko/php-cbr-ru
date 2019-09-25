<?php

namespace Gam6itko\Cbrf\Model\F135DATA;

/**
 * Class representing F1355AType
 */
class F1355AType
{
    /**
     * @var \DateTime $dt
     */
    protected $dt = null;

    /**
     * Gets as dt
     *
     * @return \DateTime
     */
    public function getDT()
    {
        return $this->dt;
    }

    /**
     * Sets a new dt
     *
     * @param \DateTime $dt
     * @return self
     */
    public function setDT(\DateTime $dt)
    {
        $this->dt = $dt;
        return $this;
    }
}
