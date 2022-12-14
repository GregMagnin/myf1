<?php 

if (isset($_SESSION["errorMessage"])) {
    $viewErrorMessage = "Le nom d'utilisateur ou le mot de passe est incorrect";
    $_SESSION["viewErrorMessage"] = $viewErrorMessage;
    header("location: /login");
}