<?php
/**
 * Example IndexController using the Url and Params controller plugins.
 *
 * Filename: IndexController.php
 * Created for: zf2fmyexamples.
 * Engineer: Daryl Wood <daryl@datashuttle.net>
 */

class IndexController extends \Zend\Mvc\Controller\AbstractActionController
{
    public function indexAction()
    {
        $url = $this->url()->fromRoute('city-lookup'); //Returns the route string
        echo $url;

        //and/or

        $param = $this->params()->fromQuery('name'); //Gets a parameter from a GET request
        $param = $this->params()->fromPost('name'); //Gets a parameter from a POST request
        echo $param;

        //Using the Welcome custom controller plugin referencing the registered key
        $value = $this->welcomeString(); // or
        $value = $this->welcomeString()->sayWelcome();

        return new \Zend\View\Model\ViewModel();
    }

    public function getFoo(){
        //Short circuit to return nothing
        return $this->getResponse();

        //or to return something, if desired.

        return $this->getResponse()->setContent('<h1>Hi there</h1>');
    }
}