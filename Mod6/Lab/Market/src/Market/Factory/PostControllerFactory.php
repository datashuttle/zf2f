<?php
/**
 * A Factory for the Post Controller
 *
 * Filename: PostControllerFactory.php
 * Created for: zf2fmyexamples.
 * Engineer: Daryl Wood <daryl@datashuttle.net>
 */

namespace Market\Factory;

use Market\Controller\PostController;
use Zend\ServiceManager\FactoryInterface;
use Zend\ServiceManager\ServiceLocatorInterface;

class PostControllerFactory implements FactoryInterface
{
    /**
     * @param ServiceLocatorInterface $cm This is the controller manager rather then the service manager for security reasons.
     * @return PostController
     */
    public function createService(ServiceLocatorInterface $cm)
    {
        //Optionally run for the students to show we are getting the controller manager instance
        //echo get_class($cm);exit;

        //Note the service manager is available from the controller manager in this manner.
        //$sm = $cm->getServiceLocator();

        //This is basically an invokable because we are not adding anything or running any logic here.
        //return new PostController();

        $sm = $cm->getServiceLocator();
        $controller = new PostController();
        $controller->setCategories($sm->get('application-categories')); //This defines a dependency for the controller
        return $controller;
    }
}