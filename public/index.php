<?php

use Symfony\Component\Dotenv\Dotenv;
use Tiagoliveirati\KickoffPhpProjects\Infra\Database\DbConnection;
use Tiagoliveirati\KickoffPhpProjects\Infra\Database\Instance;

require dirname(__DIR__) . DIRECTORY_SEPARATOR . "bootstrap.php";

try {
    $pdo = (new DbConnection())->connect()->query("SELECT * FROM users limit 3");

    echo "<pre>";
    var_dump($pdo->fetchAll()) . PHP_EOL;
} catch (PDOException $exception) {
    echo "<pre>";
    var_dump($exception);
}
