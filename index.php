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
    case '/errorMessageMail':
        $page->errorMessageMail();
        break;
    case '/errorMessageUsername':
        $page->errorMessageUsername();
        break;
    case '/errorMessagePassword':
        $page->errorMessagePassword();
        break;
    case '/logout':
        $auth->logout();
        break;
    case '/error':
        $page->error();
        break;
    case '/article':
        $page->updateViews($_GET['id']);
        $page->article($_GET['id']);
        break;
    case '/publish':
        $page->publishArticlePage();
        break;
    case '/publishArticles':
        $page->uploadArticle();
        break;
    case '/lastArticles':
        $page->lastArticles();
        break;
    case '/trendingsArticles':
        $page->trendingsArticles();
        break;
    case '/rankings':
        $page->rankings();
        break;
    case '/myAccount':
        $page->account();
        break;
case '/modifyAccount':
            $page->modifyAccount();
            break;  
        case '/modifyUsername':
            $page->modifyUsername();
            break;    
    case '/modifyPassword':
        $page->modifyPassword();
        break;
    case '/modifyEmail':
        $page->modifyEmail();
        break;
    case '/deleteAccount':
        $page->deleteAccount();
        break;    
}

?>