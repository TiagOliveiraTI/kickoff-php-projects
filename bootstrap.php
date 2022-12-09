<?php

require __DIR__ . DIRECTORY_SEPARATOR . 'vendor' . DIRECTORY_SEPARATOR . 'autoload.php';

use Symfony\Component\Dotenv\Dotenv;
use Tiagoliveirati\KickoffPhpProjects\Infra\Database\Connect;

$pdo = Connect::getInstance();
