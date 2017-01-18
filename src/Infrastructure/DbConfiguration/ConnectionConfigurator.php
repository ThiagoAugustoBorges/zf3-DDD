<?php

namespace App\Infrastructure\DbConfiguration;

use App\Infrastructure\DbConfiguration\AppInterface as AppInterface;

class ConnectionConfigurator implements AppInterface\IConnectionConfigurator
{
    public function getConnectionParams() : array
	{
		return ["novo"];
	}
}
