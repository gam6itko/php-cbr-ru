<?php

namespace Gam6itko\Cbrf\Model\F134DATA;

/**
 * Class representing FDAType.
 */
class FDAType
{
    /**
     * @var string
     */
    protected $ns;

    /**
     * @var string
     */
    protected $pn;

    /**
     * @var float
     */
    protected $value;

    /**
     * Gets as ns.
     *
     * @return string
     */
    public function getNS()
    {
        return $this->ns;
    }

    /**
     * Sets a new ns.
     *
     * @param string $ns
     *
     * @return self
     */
    public function setNS($ns)
    {
        $this->ns = $ns;

        return $this;
    }

    /**
     * Gets as pn.
     *
     * @return string
     */
    public function getPN()
    {
        return $this->pn;
    }

    /**
     * Sets a new pn.
     *
     * @param string $pn
     *
     * @return self
     */
    public function setPN($pn)
    {
        $this->pn = $pn;

        return $this;
    }

    /**
     * Gets as value.
     *
     * @return float
     */
    public function getValue()
    {
        return $this->value;
    }

    /**
     * Sets a new value.
     *
     * @param float $value
     *
     * @return self
     */
    public function setValue($value)
    {
        $this->value = $value;

        return $this;
    }
}
