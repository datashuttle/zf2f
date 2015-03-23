<?php
/**
 * Example View Controller
 * 
 * Filename: ViewController.php
 * Created for: zf2fmyexamples.
 * Engineer: Daryl Wood <daryl@datashuttle.net>
 */

namespace Market\Controllers;

use Zend\View\Model\ViewModel;

class ViewController {
    public function indexAction(){
        $viewModel = new ViewModel(['category'=>'List of Categories']);
        return $viewModel;
    }
}