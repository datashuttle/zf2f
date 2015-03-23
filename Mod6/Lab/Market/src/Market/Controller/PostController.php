<?php
/**
 * Example Post Controller
 *
 * Filename: PostController.php
 * Created for: zf2fmyexamples.
 * Engineer: Daryl Wood <daryl@datashuttle.net>
 */

namespace Market\Controller;

use Zend\View\Model\ViewModel;

class PostController
{
    protected $categories;

    public function indexAction()
    {
        return new viewModel(['categories' => $this->categories]);
    }

    /**
     * @return mixed
     */
    public function getCategories()
    {
        return $this->categories;
    }

    /**
     * @param mixed $categories
     */
    public function setCategories($categories)
    {
        $this->categories = $categories;
    }
}