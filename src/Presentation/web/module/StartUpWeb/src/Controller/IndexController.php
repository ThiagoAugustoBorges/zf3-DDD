<?php

namespace StartUpWeb\Controller;

use Zend\Mvc\Controller\AbstractActionController;
use Zend\View\Model\ViewModel;
use App\Infrastructure\DbContext as DbContext;

class IndexController extends AbstractActionController
{
    public function indexAction()
    {
		$em = new DbContext\MasterEntityManager();
		var_dump($em->getEntityManager()); die;
        return new ViewModel();
    }
}
