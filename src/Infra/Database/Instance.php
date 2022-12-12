<?php

declare(strict_types=1);

namespace Tiagoliveirati\KickoffPhpProjects\Infra\Database;

use PDO,

PDOException;

use Tiagoliveirati\KickoffPhpProjects\Utils\Config;

class Instance
{
    private const OPTIONS = [
        PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8",
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_OBJ,
        PDO::ATTR_CASE => PDO::CASE_NATURAL
    ];

    private PDO $instance;

    public function __construct(private Config $config)
    {
    }

    /**
     * Get the value of instance
     *
     * @return PDO|PDOException
     */
    public function getInstance(): PDO|PDOException
    {
        $dsn = "mysql:host=" . $this->config->getHost() . ";dbname=" . $this->config->getDatabase();

        if (empty(self::$instance)) {
            try {
                $this->instance = new PDO(
                    $dsn,
                    $this->config->getUser(),
                    $this->config->getPass(),
                    self::OPTIONS
                );
            } catch (PDOException $exception) {
                return $exception;
            }
        }

        return $this->instance;
    }


    private function __clone()
    {
    }
}
