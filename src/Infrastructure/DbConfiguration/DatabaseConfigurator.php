<?php

namespace App\Infrastructure\DbConfiguration;

use App\Infrastructure\DbConfiguration\AppInterface as AppInterface;

class DatabaseConfigurator implements AppInterface\IDatabaseConfigurator
{
    public function hasDatabase()
	{
		return "sd";
	}
}
