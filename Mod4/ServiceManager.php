<?php
/**
 * Simple Service Manager Di Container
 *
 * Filename: AddressEntity.php
 * Created for: zf2fmyexamples.
 * Engineer: Daryl Wood <daryl@datashuttle.net>
 */

class ServiceManager {

    protected $instances;

    /**
     * Retrieve a registered instance
     *
     * @param  string $name
     * @return object
     */
    public function get($name)
    {
        //code to retrieve a registered instance
    }

    /**
     * Register a service with the locator
     * @param $name
     * @param $service
     */
    public function setService($name, $service)
    {
        //code to register service instances
    }
}