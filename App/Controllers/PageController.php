<?php

namespace App\Controllers;
use App\Models\PageModel;
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
    public function error(): string {
        return require './resources/views/error.html';
    }

}