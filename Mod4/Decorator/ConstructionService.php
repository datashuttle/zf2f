<?php

/**
 * A Concrete Construction Service Class
 *
 * Created for: zf2fmyexamples.
 * Engineer: Daryl Wood <daryl@datashuttle.net>
 */

class ConstructionService extends AbstractService
{
    protected $cost = 10000;

    /**
     * @return mixed
     */
    public function getCost()
    {
        return $this->cost;
    }

    /**
     * @param mixed $fee
     * @return $this
     */
    public function setCost($fee)
    {
        $this->cost = $fee;
        return $this;
    }
}