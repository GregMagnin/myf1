<?php

namespace App\Models;
use Database\Connection;

class AuthModel extends Connection {
    public function createUser(string $email, string $password): void {
        $sql = "INSERT INTO users (email, password) VALUES (:email, :password)";
        $query=$this->connection->prepare($sql);
        $param_username = $email;
        $param_password = password_hash($password, PASSWORD_DEFAULT); 
        $query->bindParam(":email", $param_username, \PDO::PARAM_STR);
        $query->bindParam(":password", $param_password, \PDO::PARAM_STR);
        $query->execute();
    }

    public function getUserByMail(string $email): ?array {
        $sql = "SELECT id, email, password FROM users WHERE email = :email"; 
        $query = $this->connection->prepare($sql);
        $query->bindParam(":email", $email, \PDO::PARAM_STR);
        $query->execute();
        $row = $query->fetch();
            
        if (!$row) {
            return null;
        }
    
        return $row;    
    }
}