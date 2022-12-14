<?php 

if (isset($_SESSION["errorMessagePassword"])) {
    $viewErrorMessagePassword = "Le mot de passe n'est pas vailde.";
    $_SESSION["viewErrorMessagePassword"] = $viewErrorMessagePassword;
    header("location: /register");
}
