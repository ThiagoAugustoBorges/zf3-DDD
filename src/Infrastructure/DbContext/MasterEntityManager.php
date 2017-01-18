<?php

namespace App\Infrastructure\DbContext;

use Doctrine\ORM\Tools\Setup;
use Doctrine\ORM\EntityManager;

class MasterEntityManager
{

    public function getEntityManager()
	{
        $paths = array("src/Domain");
        $isDevMode = false;

        $dbParams = array(
            'driver'   => 'pdo_mysql',
            'user'     => 'root',
            'password' => '3156350',
            'dbname'   => 'allsige_master',
        );

        $config = Setup::createAnnotationMetadataConfiguration($paths, $isDevMode);
        $em = EntityManager::create($dbParams, $config);
        $em->getConnection()->connect();
        return $em;
	}
	
}
