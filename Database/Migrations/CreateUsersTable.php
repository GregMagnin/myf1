<?php

namespace Database\Migrations;

use Database\Connection;


final class CreateUsersTable extends Connection
{
    public function handle() {

        $queries = [
            "CREATE TABLE users (
            id INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
            username VARCHAR(255) NOT NULL,
            email VARCHAR(80) NOT NULL,
            password VARCHAR(255) NOT NULL
            )"
        ]; 

        $pdo = $this->connection;
        $query = $pdo->prepare($queries[0]);
        $query->execute();
    }
}