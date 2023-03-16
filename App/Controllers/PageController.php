<?php

namespace App\Controllers;
use App\Models\PageModel;
use Respect\Validation\Validator as v;

require_once './vendor/autoload.php';

class PageController {
    public function homepage(): string {
        $pageModel = new PageModel();
        $articles = $pageModel->all();
        return require './resources/views/homepage.php';
    }


    public function article(string $id): int {
        $pageModel = new PageModel();
        $article = $pageModel->article($id);
        $trendingArticles = $this->sortArticlesByViews();

        return require './resources/views/article.php';
    }

    public function updateViews($id) {
        $pageModel = new PageModel();
        $views = $pageModel->updateViews($id);
        return $views;
    }

    public function sortArticlesByViews(): array {
        $pageModel = new PageModel();
        $trendingArticles = $pageModel->sortArticlesByViews();
        return $trendingArticles;
    }

    public function publishComments(): void {
        $pageModel = new PageModel();
        $publishComms = $pageModel->publishComments();
    }

    public function uploadArticle() : void {
        if(isset($_FILES['imageArticle'])) {
            $errors= array();
            $file_name = $_FILES['imageArticle']['name'];
            $file_size =$_FILES['imageArticle']['size'];
            $file_tmp =$_FILES['imageArticle']['tmp_name'];
            $file_type=$_FILES['imageArticle']['type'];
            $file_parts = explode('.',$_FILES['imageArticle']['name']);
            $file_ext=strtolower(end($file_parts));
            $deleteSpaceFileName = str_replace(' ', '', $file_name);
            $target_dir = $_SERVER['DOCUMENT_ROOT'] . '/public/images/';
            
            $extensions= array("jpeg","jpg","png");
            
            if(in_array($file_ext,$extensions)=== false){
                $errors[]="Extension non prise en charge, veuillez choisir un fichier JPEG ou PNG.";
            }
            
            if($file_size > 10097152){
                $errors[]='La taille du fichier doit être inférieure à 10 Mo';
            }
            
            if(empty($errors)==true){
               move_uploaded_file($file_tmp,$target_dir.$deleteSpaceFileName);
                $titleValidator = v::stringType()->length(20, null);
            $contentValidator = v::stringType()->length(70, null);
            if (isset($_POST['articleTitle']) && !empty($_POST['articleTitle']) && isset($_POST['articleContent']) && !empty($_POST['articleContent'])) {
            $title = $_POST['articleTitle'];
            $content = $_POST['articleContent'];
            $image = '/public/images/' . $deleteSpaceFileName;
            $date = date('Y-m-d-H-i-s');
            $author = $_SESSION["user"];
            if (!$titleValidator->validate($title)) {
                header("location: /error");    
            }  elseif (!$contentValidator->validate($content)) {
                header("location: /error");
            } else {
               
                $pageModel = new PageModel();
                $articleUpload = $pageModel->uploadAnArticle($title, $content, $image, $author, $date);
                $articleId = $articleUpload;
                $userId = $_SESSION["id"];
                $bindArticleUser = $pageModel->bindArticleUser($articleId, $userId);
                
                header ('Location:/homepage');
                } 

            
            } 
            
            }
        } 
        

    }

    public function partial() : string {
        return require './resources/partials';
    }

    public function lastArticles() : string {
        $pageModel = new PageModel();
        $lastArticles = $pageModel->all();
        return require './resources/views/lastArticlePage.php';
    }

    public function trendingsArticles() : string {
        $pageModel = new PageModel();
        $popularArticles = $this->sortArticlesByViews();
        return require './resources/views/trendingArticlePage.php';
    }
    public function publishArticlePage(): string {
        return require './resources/views/publish.php';
    }

    public function rankings(): string {
        return require './resources/views/rankings.php';
    }

    public function account(): string {
        return require './resources/views/account.php';
    }

    public function modifyAccount(): string {
        $id = $_SESSION['id'];
        $pageModel = new PageModel();
    
        if (isset($_POST['newUsername']) && !empty($_POST['newUsername'])) { 
            $newUsername = $_POST['newUsername'];
            $modifyUsername = $pageModel->modifyUsername($newUsername, $id);
            $_SESSION["user"] = $newUsername;
        }
    
        if (isset($_POST['newEmail']) && !empty($_POST['newEmail'])) {
            $newEmail = $_POST['newEmail'];
            $modifyEmail = $pageModel->modifyEmail($newEmail, $id);
        }

        if (isset($_POST['newPassword']) && !empty($_POST['newPassword'])) {
            $newPassword = $_POST['newPassword'];
            $modifyPassword = $pageModel->modifyPassword($newPassword, $id);
        }
    
        return require './resources/views/account.php';
    }

    public function errorMessage(): string {
        return require './resources/exceptions/errorMessage.php';
    }
    public function errorMessageMail(): string {
        return require './resources/exceptions/errorMessageMail.php';
    }
    public function errorMessageUsername(): string {
        return require './resources/exceptions/errorMessageUsername.php';
    }
    public function errorMessagePassword(): string {
        return require './resources/exceptions/errorMessagePassword.php';
    }
    public function errorMessageTitle(): string {
        return require './resources/exceptions/errorMessageTitle.php';
    }
    public function errorMessageContent(): string {
        return require './resources/exceptions/errorMessageContent.php';
    }
    public function error(): string {
        return require './resources/views/error.html';
    }

}