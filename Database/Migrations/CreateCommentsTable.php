<?php

namespace Database\Migrations;

use Database\Connection;


final class CreateCommentsTable extends Connection
{
    public function handle() {

        $queries = [
            "CREATE TABLE comments (
            id INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
            content TEXT NOT NULL,
            author VARCHAR (255) NOT NULL,
            likes INT NOT NULL,
            dislikes INT NOT NULL
            )"
        ]; 

        $pdo = $this->connection;
        $query = $pdo->prepare($queries[0]);
        $query->execute();
    }
}