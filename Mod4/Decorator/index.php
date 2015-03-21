<?php
/**
 * Simple Decorator Implementation
 *
 * Calculates the total project costs
 * as services are added.
 *
 * Filename: index.php
 * Created for: zf2fmyexamples.
 * Engineer: Daryl Wood <daryl@datashuttle.net>
 */

require 'ServiceInterface.php';
require 'AbstractService.php';
require 'AbstractConstructionServiceDecorator.php';
require 'DirectServiceDecorator.php';
require 'IndirectServiceDecorator.php';

$constructionService = new ConstructionService();
$constructionService->setCost(10000);
$indirectService = new IndirectServiceDecorator($constructionService);
$indirectService->setCost(5000);
$directService = new DirectServiceDecorator($indirectService);
$directService->setCost(3000);

echo 'Construction management fee: ' . $constructionService->getCost() . PHP_EOL;
echo 'Construction indirect cost: ' . $indirectService->cost . PHP_EOL;
echo 'Construction costs with indirect services: ' . $indirectService->getCost(). PHP_EOL;
echo 'Construction direct cost: ' . $directService->cost . PHP_EOL;
echo 'Construction total: ' . $directService->getCost();