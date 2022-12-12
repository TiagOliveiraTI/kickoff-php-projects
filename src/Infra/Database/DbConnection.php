<?php

declare(strict_types=1);

namespace Tiagoliveirati\KickoffPhpProjects\Infra\Database;

use Tiagoliveirati\KickoffPhpProjects\Utils\Config;

class DbConnection
{
    private Config $config;

    public function __construct()
    {
        $this->config = new Config();
    }

    public function connect()
    {
        return (new Instance($this->config))->getInstance();
    }
}
