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
        if (isset($_POST['email']) && !empty($_POST['email']) && isset($_POST['password']) && !empty($_POST['password'])) {
            $email = $_POST['email'];
            $password = $_POST['password'];
            $task = new AuthModel();
            $task->createUser($email, $password);
            header ('Location:/login');
        } else {
            header('Location:/error');
        }}

        public function logUser(): void {
            if (!isset($_POST['email']) && empty($_POST['email']) && !isset($_POST['password']) && empty($_POST['password'])) {
          
              $email = $_POST['email'];
              $password = $_POST['password'];
              $task = new AuthModel();
              $user = $task->getUserByMail($email);
              $id = $user["id"];
              $email = $user["email"];
              $hashed_password = $user["password"]; 
              if (!password_verify($password, $hashed_password)) {
                if (!isset($errorMessage)) {
                  $errorMessage = "Le nom d'utilisateur ou le mot de passe est incorrect";
                  $_SESSION["errorMessage"] = $errorMessage;
                }
                header("location: /login");
              } else {
                $_SESSION["loggedin"] = true;
                $_SESSION["id"] = $id;
                $_SESSION["user"] = $email;                        
                header("location: /homepage");
                exit();
              }
            }
        }
    }