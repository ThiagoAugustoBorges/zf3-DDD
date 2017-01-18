<?php

namespace App\Infrastructure\DbConfiguration\AppInterface;

interface IConnectionConfigurator
{
    function getConnectionParams(): array;
}
