<?php 

if (isset($_SESSION["errorMessageUsername"])) {
    $viewErrorMessageUsername = "Le nom d'utilisateur n'est pas valide.";
    $_SESSION["viewErrorMessageUsername"] = $viewErrorMessageUsername;
    header("location: /register");
}
