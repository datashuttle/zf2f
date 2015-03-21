<?php

/**
 * An Abstract Construction Service Decorator Class
 *
 * Filename: AbstractService.php
 * Created for: zf2fmyexamples.
 * Engineer: Daryl Wood <daryl@datashuttle.net>
 */

require 'ConstructionService.php';

Abstract class AbstractConstructionServiceDecorator extends ConstructionService
{
    public $cost;
    protected $serviceName;
    protected $constructionServiceObj;

    /**
     * @param AbstractService $ConstructionService
     */
    public function __construct(AbstractService $ConstructionService){
        $this->constructionServiceObj = $ConstructionService;
    }

    /**
     * @return mixed
     */
    public function getCost()
    {
        return $this->constructionServiceObj->getCost();
    }
}