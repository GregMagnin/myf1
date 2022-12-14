<?php 

if (isset($_SESSION["errorMessageMail"])) {
    $viewErrorMessageMail = "L'adresse e-mail n'est pas valide.";
    $_SESSION["viewErrorMessageMail"] = $viewErrorMessageMail;
    header("location: /register");
}
