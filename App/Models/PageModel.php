<?php

namespace App\Models;
use Database\Connection;

class PageModel extends Connection {

    public function all() : array {
       $pdo = $this->connection;
       $sql = 'SELECT * FROM articles ORDER BY publish_date DESC';
       return $pdo->query($sql)->fetchAll();

    }

    public function article(int $id) : array {
        $pdo = $this->connection;
        $sql = 'SELECT * FROM articles WHERE id = :id';
        $statement = $pdo->prepare($sql);
        $statement->bindValue('id', $id, \PDO::PARAM_INT);
        $statement->execute();
        return $statement->fetch();
    }

    public function updateViews(): array {
        $pdo = $this->connection;
        $sql = 'UPDATE articles SET views = views + 1 WHERE id = ?';
        $statement = $pdo->prepare($sql);
        $statement-bindValue('i', $articleId);
        $statement->execute();
        

    }

}