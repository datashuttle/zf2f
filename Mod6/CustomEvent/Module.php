<?php
/**
 * A Module Example Class
 * 
 * Filename: Module.php
 * Created for: zf2fmyexamples.
 * Engineer: Daryl Wood <daryl@datashuttle.net>
 */

class Module {

    /**
     * @param \Zend\Mvc\MvcEvent $e
     */
    public function onBootstrap(\Zend\Mvc\MvcEvent $e){
        $eventManager = $e->getApplication()->getEventManager();
        $shared = $eventManager->getSharedManager();

        /*
         * Example attaching a listener during the Mvc stage
         * Custom: The channel identifier
         * TestEvent: The event name being attached
         * $this: The callback class
         * onTest: The callback method
         */
        $shared->attach('Custom', 'TestEvent', [$this, 'onTest']);
    }

    /**
     * The onTest listener callback
     * @param $e The event instance
     */
    public function onTest($e){
        $eName = $e->getName();
        $controller = $e->getTrigger();
        $x = $e->getParam('x');

        //Getting the service manager from the past controller. Provides all controller functionality, injected classes, methods, etc.
        $sm = $controller->getServiceLocator();

        echo $eName . ':' . get_class($controller) . ':' . $x;
    }

}