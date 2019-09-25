<?php

namespace Gam6itko\Cbrf\Model\F135DATA;

/**
 * Class representing F1356AType
 */
class F1356AType
{
    /**
     * @var float $v61
     */
    protected $v61 = null;

    /**
     * @var float $v62
     */
    protected $v62 = null;

    /**
     * Gets as v61
     *
     * @return float
     */
    public function getV61()
    {
        return $this->v61;
    }

    /**
     * Sets a new v61
     *
     * @param float $v61
     * @return self
     */
    public function setV61($v61)
    {
        $this->v61 = $v61;
        return $this;
    }

    /**
     * Gets as v62
     *
     * @return float
     */
    public function getV62()
    {
        return $this->v62;
    }

    /**
     * Sets a new v62
     *
     * @param float $v62
     * @return self
     */
    public function setV62($v62)
    {
        $this->v62 = $v62;
        return $this;
    }
}
