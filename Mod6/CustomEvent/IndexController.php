<?php
/**
 * Example Index Controller with Custom Event Trigger
 *
 * Filename: IndexController.php
 * Created for: zf2fmyexamples.
 * Engineer: Daryl Wood <daryl@datashuttle.net>
 */

namespace Market\Controller;

use Zend\Mvc\Controller\AbstractActionController;
use Zend\View\Model\ViewModel;

class IndexController extends AbstractActionController
{
    public function indexAction()
    {
        $em = $this->getEventManager();
        $em->setIdentifiers('Custom');

        /*
         * Example triggering an event within a controller
         *
         * TestEvent: The event to trigger
         * $this: The class to pass as the triggering object, in this case this controller class
         * ['x' => 'something']: Parameters to pass to the callback
         */
        $em->trigger('TestEvent', $this, ['x' => 'something']);
        return new viewModel;
    }

}
