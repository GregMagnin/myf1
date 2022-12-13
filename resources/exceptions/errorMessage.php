<?php 

if ($_SESSION["errorMessage"] = true) {
    $viewErrorMessage = "Le nom d'utilisateur ou le mot de passe est incorrect";
    $_SESSION["viewErrorMessage"] = $viewErrorMessage;
    header("location: /login");
}