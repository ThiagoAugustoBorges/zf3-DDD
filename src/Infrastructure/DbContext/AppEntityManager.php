<?php

namespace App\Infrastructure\DbContext;

use Doctrine\ORM\Tools\Setup;
use Doctrine\ORM\EntityManager;

class AppEntityManager
{

    public function getEntityManager()
	{
		return "Entity Manager";
	}
	
}
