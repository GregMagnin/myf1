<?php

use App\Controllers\AuthController;
use App\Controllers\PageController;

session_start();
require_once './vendor/autoload.php';

$auth = new AuthController();
$page = new PageController();

switch (getUri()) {
    case '/':
        $page->homepage();
        break;    
    case '/login':
         $auth->login();
        break;
    case '/register':
        $auth->register();
        break;
    case '/homepage': 
        $page->homepage();
        break;
    case '/registerUser':
        $auth->registerUser();
        break;
    case '/logUser':
         $auth->logUser();
        break;
    case '/errorMessage':
         $page->errorMessage();
        break;
    

}

?>