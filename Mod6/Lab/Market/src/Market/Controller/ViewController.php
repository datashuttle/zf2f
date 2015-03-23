<?php
/**
 * Example View Controller
 *
 * Filename: ViewController.php
 * Created for: zf2fmyexamples.
 * Engineer: Daryl Wood <daryl@datashuttle.net>
 */

namespace Market\Controller;

use Zend\View\Model\ViewModel;

class ViewController
{
    public function indexAction()
    {
        //Example hard coding
        //$viewModel = new ViewModel(['category' => 'List of Categories']);

        //Example capturing from a URL query string
        //Browse to: onlinemarket.work/market/market-view-controller/index?category=TEST
        $category = $this->params()->fromQuery('category');

        $viewModel = new ViewModel(['category' => $category]);
        return $viewModel;
    }

    public function itemAction(){
        //Example capturing from a URL query string
        //Browse to: onlinemarket.work/market/market-view-controller/item?itemId=13
        $itemId = $this->params()->fromQuery('itemId');

        $viewModel = new ViewModel(['itemId' => $itemId]);
        return $viewModel;
    }
}