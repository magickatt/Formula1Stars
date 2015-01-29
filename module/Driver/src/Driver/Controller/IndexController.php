<?php

namespace Driver\Controller;

use Zend\Mvc\Controller\AbstractActionController;
use Zend\View\Model\ViewModel;

class IndexController extends AbstractActionController
{
    private $repository;

    public function __construct(\Driver\Repository\Driver $repository)
    {
        $this->repository = $repository;
    }

    public function indexAction()
    {
        return new ViewModel();
    }
}