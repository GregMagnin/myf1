<?php


namespace App\Controllers;
use App\Models\AuthModel;
use Respect\Validation\Validator as v;
require_once './vendor/autoload.php';

class AuthController {

    public function login(): string
    {
        return require './resources/views/login.php';
    }

    public function register(): string
    {
        return require './resources/views/register.php';
    }

    public function registerUser(): void {
        if (isset($_POST['username']) && !empty($_POST['username']) && isset($_POST['email']) && !empty($_POST['email']) && isset($_POST['password']) && !empty($_POST['password'])) {
            $username = $_POST['username'];
            $email = $_POST['email'];
            $password = $_POST['password'];
            $task = new AuthModel();
            $task->createUser($username, $email, $password);
            header ('Location:/login');
        } else {
            header('Location:/error');
        }}

        public function logUser(): void {
          if (isset($_POST['username']) && !empty($_POST['username']) && isset($_POST['email']) && !empty($_POST['email']) && isset($_POST['password']) && !empty($_POST['password'])) {
              $errorMessage = false;
              $username = $_POST['username'];
              $email = $_POST['email'];
              $password = $_POST['password'];
              $task = new AuthModel();
              $user = $task->getUserByMail($email);
              $id = $user["id"];
              $email = $user["email"];
              $hashed_password = $user["password"]; 
              if (password_verify($password, $hashed_password)) {
                $_SESSION["loggedin"] = true;
                $_SESSION["id"] = $id;
                $_SESSION["user"] = $email;
                header("location: /homepage");
                exit();
              } else {
                $errorMessage = true;
                $_SESSION["errorMessage"] = $errorMessage;                        
                header ("location: /errorMessage");
              }
            } 

        }
    }