<?php

namespace Database\Migrations;

use Database\Connection;


final class CreateArticlesTable extends Connection
{
    public function handle() {

        $queries = [
            "CREATE TABLE articles (
            id INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
            title VARCHAR(255) NOT NULL,
            content TEXT NOT NULL,
            images VARCHAR(255) NOT NULL,
            author VARCHAR (255) NOT NULL,
            publish_date DATETIME NOT NULL
            )"
        ]; 

        $pdo = $this->connection;
        $query = $pdo->prepare($queries[0]);
        $query->execute();
    }
}