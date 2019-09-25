<?php

namespace Gam6itko\Cbrf\Model\F135DATA;

/**
 * Class representing F1352AType.
 */
class F1352AType
{
    /**
     * @var string
     */
    protected $c2 = null;

    /**
     * @var float
     */
    protected $v2 = null;

    /**
     * Gets as c2.
     *
     * @return string
     */
    public function getC2()
    {
        return $this->c2;
    }

    /**
     * Sets a new c2.
     *
     * @param string $c2
     *
     * @return self
     */
    public function setC2($c2)
    {
        $this->c2 = $c2;

        return $this;
    }

    /**
     * Gets as v2.
     *
     * @return float
     */
    public function getV2()
    {
        return $this->v2;
    }

    /**
     * Sets a new v2.
     *
     * @param float $v2
     *
     * @return self
     */
    public function setV2($v2)
    {
        $this->v2 = $v2;

        return $this;
    }
}
