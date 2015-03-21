<?php

/**
 * An Abstract Service Class
 *
 * Filename: AbstractService.php
 * Created for: zf2fmyexamples.
 * Engineer: Daryl Wood <daryl@datashuttle.net>
 */


Abstract class AbstractService implements
    ServiceInterface
{
    protected $serviceName;
    protected $cost;

    public function __construct(array $params = null)
    {
        $this->serviceName = $params['serviceName'];
        $this->cost = $params['cost'];
    }

    /**
     * @return mixed
     */
    public function getCost()
    {
        return $this->cost;
    }

    /**
     * @param mixed $cost
     * @return $this
     */
    public function setCost($cost)
    {
        $this->cost = $cost;
        return $this;
    }
}