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
        $emailValidator = v::email();
       $usernameValidator = v::alnum();
       $passwordValidator = v::stringType()->length(6, null);
        if (isset($_POST['username']) && !empty($_POST['username']) && isset($_POST['email']) && !empty($_POST['email']) && isset($_POST['password']) && !empty($_POST['password'])) {
            $username = $_POST['username'];
            $email = $_POST['email'];
            $password = $_POST['password'];
            if (!$emailValidator->validate($email)) {
                $errorMessageMail = true;
                    $_SESSION["errorMessageMail"] = $errorMessageMail;                        
                    header ("location: /errorMessageMail");
             } elseif (!$usernameValidator->validate($username)) {
              $errorMessageUsername = true;
              $_SESSION["errorMessageUsername"] = $errorMessageUsername;                        
              header ("location: /errorMessageUsername");
             } elseif (!$passwordValidator->validate($password)) {
              $errorMessagePassword = true;
              $_SESSION["errorMessagePassword"] = $errorMessagePassword;                        
              header ("location: /errorMessagePassword");
            } else {
            $task = new AuthModel();
            $task->createUser($username, $email, $password);
            header ('Location:/login');
          }  }}

        public function logUser(): void {
          if (isset($_POST['username']) && !empty($_POST['username']) && isset($_POST['password']) && !empty($_POST['password'])) {
              $errorMessage = false;
              $username = $_POST['username'];
              $password = $_POST['password'];
              $task = new AuthModel();
              $user = $task->getUserByName($username);
              $id = $user["id"];
              $username = $user["username"];
              $hashed_password = $user["password"]; 
              if (password_verify($password, $hashed_password)) {
                $_SESSION["loggedin"] = true;
                $_SESSION["id"] = $id;
                $_SESSION["user"] = $username;
                header("location: /homepage");
                exit();
              } else {
                $errorMessage = true;
                $_SESSION["errorMessage"] = $errorMessage;                        
                header ("location: /errorMessage");
              }
            } 

        }
        public function logout(): void {
            session_start();
            session_unset();
            session_destroy();
            $_SESSION["loggedin"] = false;
            header("location: /login");
        }
    }