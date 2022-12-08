<?php

require __DIR__ . DIRECTORY_SEPARATOR . 'vendor' . DIRECTORY_SEPARATOR . 'autoload.php';

use Symfony\Component\Dotenv\Dotenv;

$dotenv = new Dotenv();
$dotenv->load(__DIR__ . '/.env');

$database = $_ENV["MYSQL_DATABASE"];
$user = $_ENV["MYSQL_USER"];
$password = $_ENV["MYSQL_PASSWORD"];
$host = $_ENV["MYSQL_HOST"];
