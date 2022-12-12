<?php

use Symfony\Component\Dotenv\Dotenv;
use Tiagoliveirati\KickoffPhpProjects\Infra\Database\Connect;

require dirname(__DIR__) . DIRECTORY_SEPARATOR . "bootstrap.php";

try {
    $pdo = (new Connect())->getInstance()->query("SELECT * FROM users limit 3");

    echo "<pre>";
    var_dump($pdo->fetchAll()) . PHP_EOL;
} catch (PDOException $exception) {
    echo "<pre>";
    var_dump($exception);
}
