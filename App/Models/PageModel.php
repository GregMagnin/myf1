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

    public function updateViews(int $id): void {
        $pdo = $this->connection;
        $sql = 'UPDATE articles SET views = views + 1 WHERE id = :id';
        $statement = $pdo->prepare($sql);
        $statement->bindValue('id', $id, \PDO::PARAM_INT);
        
        $statement->execute();
    }

    public function sortArticlesByViews() : array {
        $pdo = $this->connection;
        $sql = 'SELECT * FROM articles ORDER BY views DESC';
        return $pdo->query($sql)->fetchAll();
    }

    public function uploadAnArticle(string $title, string $content, string $image, string $author, string $date) : int {
        $sql = "INSERT INTO articles (title, content, image, author, publish_date) VALUES (:title, :content, :image, :author, :publish_date)";
        $query=$this->connection->prepare($sql); 
        $query->bindParam(":title", $title, \PDO::PARAM_STR);
        $query->bindParam(":content", $content, \PDO::PARAM_STR);
        $query->bindParam(":image", $image, \PDO::PARAM_STR);
        $query->bindParam(":author", $author, \PDO::PARAM_STR);
        $query->bindParam(":publish_date", $date, \PDO::PARAM_STR);
        $query->execute();

        return (int) $this->connection->lastInsertId();
    }
    public function bindArticleUser(int $articleId, int $userId) : void {
        $sql = "INSERT INTO article_user (article_id, user_id) VALUES (:articleId, :userId)"; 
        $query=$this->connection->prepare($sql); 
        $query->bindParam(":articleId", $articleId, \PDO::PARAM_INT);
        $query->bindParam(":userId", $userId, \PDO::PARAM_INT);
        $query->execute();
    }

}

