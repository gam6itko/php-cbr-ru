<?php

namespace Gam6itko\Cbrf\Model;

use Gam6itko\Cbrf\Model\F134DATA\FDAType;

/**
 * Class representing F134DATA.
 */
class F134DATA
{
    /**
     * @var FDAType[]
     */
    protected $fd = [];

    /**
     * Adds as fD.
     *
     * @param FDAType $fd
     *
     * @return self
     */
    public function addToFD(FDAType $fd)
    {
        $this->fd[] = $fd;

        return $this;
    }

    /**
     * isset fD.
     *
     * @param int|string $index
     *
     * @return bool
     */
    public function issetFD($index)
    {
        return isset($this->fd[$index]);
    }

    /**
     * unset fD.
     *
     * @param int|string $index
     */
    public function unsetFD($index)
    {
        unset($this->fd[$index]);
    }

    /**
     * Gets as fD.
     *
     * @return FDAType[]
     */
    public function getFD()
    {
        return $this->fd;
    }

    /**
     * Sets a new fD.
     *
     * @param FDAType[] $fd
     *
     * @return self
     */
    public function setFD(array $fd)
    {
        $this->fd = $fd;

        return $this;
    }
}
