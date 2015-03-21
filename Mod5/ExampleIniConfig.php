<?php

//Example of using a ini file for config

$iniFile = 'config.ini';
$reader = new Zend\Config\Reader\Ini();

//Returns an array
$config = $reader->fromFile($iniFile);

return ['service_manager' => ['services' => $config]];