<?php

use Tiagoliveirati\KickoffPhpProjects\Utils\Config;

require __DIR__ . DIRECTORY_SEPARATOR . 'vendor' . DIRECTORY_SEPARATOR . 'autoload.php';

require __DIR__ . '/src/Utils/Constants.php';

use Tiagoliveirati\KickoffPhpProjects\Infra\Database\Connect;
$pdo = (new Connect())->getInstance();
