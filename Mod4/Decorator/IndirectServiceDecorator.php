<?php

/**
 * A Indirect Service Decorator Class
 *
 * Filename: IndirectServiceDecorator.php
 * Created for: zf2fmyexamples.
 * Engineer: Daryl Wood <daryl@datashuttle.net>
 */

class IndirectServiceDecorator extends AbstractConstructionServiceDecorator
{
    protected $serviceType;
    protected $indirectTypes = ['Architectural Design', 'Structural Engineering', 'Landscape Design'];
    public $cost;

    public function __construct(ConstructionService $constructionService)
    {
        parent::__construct($constructionService);
    }

    /**
     * @return mixed
     */
    public function getServiceType()
    {
        return $this->serviceType;
    }

    /**
     * @param mixed $serviceType
     * @return $this
     */
    public function setServiceType($serviceType)
    {
        if (in_array($serviceType, $this->indirectTypes)) {
            $this->serviceType = $serviceType;
        }
    }

    /**
     * @return mixed
     */
    public function getCost()
    {
        return parent::getCost() + $this->cost;
    }
}