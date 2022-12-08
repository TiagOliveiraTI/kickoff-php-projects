<?php

require dirname(__DIR__) . DIRECTORY_SEPARATOR . "bootstrap.php";

try {
    $dsn = "mysql:host=$host;dbname=$database";

    $pdo = new PDO(
        $dsn,
        $user,
        $password,
        [
            PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"
        ]
    );

    $stmt = $pdo->query("SELECT * FROM users limit 3");

    echo "<pre>";
    while ($user = $stmt->fetch(PDO::FETCH_ASSOC)) {
        var_dump($user) . PHP_EOL;
    }
} catch (PDOException $exception) {
    echo "<pre>";
    var_dump($exception);
}
