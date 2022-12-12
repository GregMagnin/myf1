<?php

namespace Database;

abstract class Connection 
{
    protected $connection;
    public function __construct()
    {
        $this->connection = new \PDO(
            'mysql:host=' . CONFIG['database']['host'] . ';dbname=' . CONFIG['database']['dbname'] . ';charset=utf8',
            CONFIG['database']['user'],
            CONFIG['database']['password']
        );
    }
}

 

