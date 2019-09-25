<?php

namespace Gam6itko\Cbrf\Model;

use Gam6itko\Cbrf\Model\CoOffices\OfficesAType;

/**
 * Class representing CoOffices.
 */
class CoOffices
{
    /**
     * @var OfficesAType[]
     */
    protected $offices = [];

    /**
     * Adds as offices.
     *
     * @param OfficesAType $offices
     *
     * @return self
     */
    public function addToOffices(OfficesAType $offices)
    {
        $this->offices[] = $offices;

        return $this;
    }

    /**
     * isset offices.
     *
     * @param int|string $index
     *
     * @return bool
     */
    public function issetOffices($index)
    {
        return isset($this->offices[$index]);
    }

    /**
     * unset offices.
     *
     * @param int|string $index
     */
    public function unsetOffices($index)
    {
        unset($this->offices[$index]);
    }

    /**
     * Gets as offices.
     *
     * @return OfficesAType[]
     */
    public function getOffices()
    {
        return $this->offices;
    }

    /**
     * Sets a new offices.
     *
     * @param OfficesAType[] $offices
     *
     * @return self
     */
    public function setOffices(array $offices)
    {
        $this->offices = $offices;

        return $this;
    }
}
