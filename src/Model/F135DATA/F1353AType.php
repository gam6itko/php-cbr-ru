<?php

namespace Gam6itko\Cbrf\Model\F135DATA;

/**
 * Class representing F1353AType.
 */
class F1353AType
{
    /**
     * @var string
     */
    protected $c3 = null;

    /**
     * @var float
     */
    protected $v3 = null;

    /**
     * @var float
     */
    protected $v32 = null;

    /**
     * @var string
     */
    protected $v33 = null;

    /**
     * Gets as c3.
     *
     * @return string
     */
    public function getC3()
    {
        return $this->c3;
    }

    /**
     * Sets a new c3.
     *
     * @param string $c3
     *
     * @return self
     */
    public function setC3($c3)
    {
        $this->c3 = $c3;

        return $this;
    }

    /**
     * Gets as v3.
     *
     * @return float
     */
    public function getV3()
    {
        return $this->v3;
    }

    /**
     * Sets a new v3.
     *
     * @param float $v3
     *
     * @return self
     */
    public function setV3($v3)
    {
        $this->v3 = $v3;

        return $this;
    }

    /**
     * Gets as v32.
     *
     * @return float
     */
    public function getV32()
    {
        return $this->v32;
    }

    /**
     * Sets a new v32.
     *
     * @param float $v32
     *
     * @return self
     */
    public function setV32($v32)
    {
        $this->v32 = $v32;

        return $this;
    }

    /**
     * Gets as v33.
     *
     * @return string
     */
    public function getV33()
    {
        return $this->v33;
    }

    /**
     * Sets a new v33.
     *
     * @param string $v33
     *
     * @return self
     */
    public function setV33($v33)
    {
        $this->v33 = $v33;

        return $this;
    }
}
