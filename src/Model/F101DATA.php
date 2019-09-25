<?php

namespace Gam6itko\Cbrf\Model;

use Gam6itko\Cbrf\Model\F101DATA\FDAType;
use Gam6itko\Cbrf\Model\F101DATA\FDFAType;

/**
 * Class representing F101DATA
 */
class F101DATA
{
    /**
     * @var FDAType[] $fd
     */
    protected $fd = [];

    /**
     * @var FDFAType[] $fdf
     */
    protected $fdf = [];

    /**
     * Adds as fd
     *
     * @param FDAType $fd
     * @return self
     */
    public function addToFD(FDAType $fd)
    {
        $this->fd[] = $fd;
        return $this;
    }

    /**
     * isset fd
     *
     * @param int|string $index
     * @return bool
     */
    public function issetFD($index)
    {
        return isset($this->fd[$index]);
    }

    /**
     * unset fd
     *
     * @param int|string $index
     * @return void
     */
    public function unsetFD($index)
    {
        unset($this->fd[$index]);
    }

    /**
     * Gets as fd
     *
     * @return FDAType[]
     */
    public function getFD()
    {
        return $this->fd;
    }

    /**
     * Sets a new fd
     *
     * @param FDAType[] $fd
     * @return self
     */
    public function setFD(array $fd)
    {
        $this->fd = $fd;
        return $this;
    }

    /**
     * Adds as fdf
     *
     * @param FDFAType $fdf
     * @return self
     */
    public function addToFDF(FDFAType $fdf)
    {
        $this->fdf[] = $fdf;
        return $this;
    }

    /**
     * isset fdf
     *
     * @param int|string $index
     * @return bool
     */
    public function issetFDF($index)
    {
        return isset($this->fdf[$index]);
    }

    /**
     * unset fdf
     *
     * @param int|string $index
     * @return void
     */
    public function unsetFDF($index)
    {
        unset($this->fdf[$index]);
    }

    /**
     * Gets as fdf
     *
     * @return FDFAType[]
     */
    public function getFDF()
    {
        return $this->fdf;
    }

    /**
     * Sets a new fdf
     *
     * @param FDFAType[] $fdf
     * @return self
     */
    public function setFDF(array $fdf)
    {
        $this->fdf = $fdf;
        return $this;
    }
}
