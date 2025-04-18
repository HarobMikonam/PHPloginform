<?php

namespace Loader\Core;

use PDO;

class Database
{
    public $connection;
    public function __construct($config)
    {
        $dsn = 'mysql:host=' . $config['host'] . ';dbname=' . $config['database'];

        $this->connection = new PDO($dsn, $config['username'], $config['password'],
            [PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC]);
    }
    public function Insert()
    {

    }
    public function Select()
    {

    }
    public function Remove()
    {

    }
    private function executeStatement( ){

    }

}