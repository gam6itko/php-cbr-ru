<?php

namespace Gam6itko\Cbrf\Model;

/**
 * Class representing CoOffices
 */
class CoOffices
{

    /**
     * @property \Gam6itko\Cbrf\Model\CoOffices\OfficesAType[] $offices
     */
    private $offices = [
        
    ];

    /**
     * Adds as offices
     *
     * @param \Gam6itko\Cbrf\Model\CoOffices\OfficesAType $offices
     *@return self
     */
    public function addToOffices(\Gam6itko\Cbrf\Model\CoOffices\OfficesAType $offices)
    {
        $this->offices[] = $offices;
        return $this;
    }

    /**
     * isset offices
     *
     * @param int|string $index
     * @return bool
     */
    public function issetOffices($index)
    {
        return isset($this->offices[$index]);
    }

    /**
     * unset offices
     *
     * @param int|string $index
     * @return void
     */
    public function unsetOffices($index)
    {
        unset($this->offices[$index]);
    }

    /**
     * Gets as offices
     *
     * @return \Gam6itko\Cbrf\Model\CoOffices\OfficesAType[]
     */
    public function getOffices()
    {
        return $this->offices;
    }

    /**
     * Sets a new offices
     *
     * @param \Gam6itko\Cbrf\Model\CoOffices\OfficesAType[] $offices
     * @return self
     */
    public function setOffices(array $offices)
    {
        $this->offices = $offices;
        return $this;
    }


}

