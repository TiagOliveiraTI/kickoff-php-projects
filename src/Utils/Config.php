<?php

namespace Tiagoliveirati\KickoffPhpProjects\Utils;

use Symfony\Component\Dotenv\Dotenv;

class Config
{
    private readonly string $host;
    private readonly string $user;
    private readonly string $pass;
    private readonly string $database;
    private Dotenv $dotenv;

    public function __construct()
    {
        $this->dotenv = new Dotenv();
        $this->dotenv->usePutenv()->bootEnv(BASEPATH . '/.env');

        $this->host = getenv('MYSQL_HOST');
        $this->user = getenv('MYSQL_USER');
        $this->pass = getenv('MYSQL_PASSWORD');
        $this->database = getenv('MYSQL_DATABASE');
    }

    /**
     * Get the value of host
     */
    public function getHost()
    {
        return $this->host;
    }

    /**
     * Get the value of user
     */
    public function getUser()
    {
        return $this->user;
    }

    /**
     * Get the value of pass
     */
    public function getPass()
    {
        return $this->pass;
    }

    /**
     * Get the value of database
     */
    public function getDatabase()
    {
        return $this->database;
    }
}
