<?php

namespace Gam6itko\Cbrf\Model;

use Gam6itko\Cbrf\Model\F123DATA\F123AType;

/**
 * Class representing F123DATA.
 */
class F123DATA
{
    /**
     * @var F123AType[]
     */
    protected $f123 = [];

    /**
     * Adds as f123.
     *
     * @param F123AType $f123
     *
     * @return self
     */
    public function addToF123(F123AType $f123)
    {
        $this->f123[] = $f123;

        return $this;
    }

    /**
     * isset f123.
     *
     * @param int|string $index
     *
     * @return bool
     */
    public function issetF123($index)
    {
        return isset($this->f123[$index]);
    }

    /**
     * unset f123.
     *
     * @param int|string $index
     */
    public function unsetF123($index)
    {
        unset($this->f123[$index]);
    }

    /**
     * Gets as f123.
     *
     * @return F123AType[]
     */
    public function getF123()
    {
        return $this->f123;
    }

    /**
     * Sets a new f123.
     *
     * @param F123AType[] $f123
     *
     * @return self
     */
    public function setF123(array $f123)
    {
        $this->f123 = $f123;

        return $this;
    }
}
