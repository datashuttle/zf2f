<?php
/**
 * Example of a custom plugin
 *
 * Note: Remember to register the plugin in the 'controller-plugins' key of the module config.
 * Filename: Welcome.php
 * Created for: zf2fmyexamples.
 * Engineer: Daryl Wood <daryl@datashuttle.net>
 */

namespace Plugin;

use Zend\Mvc\Controller\Plugin\AbstractPlugin;

class Welcome extends AbstractPlugin{

    public function __invoke(){
        return 'Welcome to ZF2 everyone!';
    }

    public function sayWelcome(){
        return 'Welcome to ZF2 everyone!';
    }
}