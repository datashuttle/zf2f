<?php

/**
 * A Direct Service Decorator Class
 *
 * Filename: DirectServiceDecorator.php
 * Created for: zf2fmyexamples.
 * Engineer: Daryl Wood <daryl@datashuttle.net>
 */

class DirectServiceDecorator extends AbstractConstructionServiceDecorator
{
    protected $servicePhase;
    protected $servicePhases = ['foundation', 'frame', 'dry-in', 'mechanical', 'finish'];
    public $cost;

    public function __construct(ConstructionService $constructionService)
    {
        parent::__construct($constructionService);
    }

    /**
     * @return mixed
     */
    public function getServicePhase()
    {
        return $this->servicePhase;
    }

    /**
     * @param mixed $servicePhase
     */
    public function setServicePhase($servicePhase)
    {
        if (in_array($servicePhase, $this->servicePhases)) {
            $this->servicePhase = $servicePhase;
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