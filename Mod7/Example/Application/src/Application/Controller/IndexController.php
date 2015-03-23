<?php
/**
 * The Index Controller
 *
 * Filename: IndexController.php
 * Created for: zf2fmyexamples.
 * Engineer: Daryl Wood <daryl@datashuttle.net>
 */

namespace Application\Controller;


use Zend\Mvc\Controller\AbstractActionController;
use Zend\View\Model\ViewModel;

class IndexController extends AbstractActionController
{
    public function indexAction()
    {
        //An example from a query parameter
        //$name = $this->params()->fromQuery('name');

        //An example from a route
        $name = $this->params()->fromRoute('name');

        return new ViewModel(['name' => $name]);
    }
}