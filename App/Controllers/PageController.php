<?php

namespace App\Controllers;
use App\Models\PageModel;
require_once './vendor/autoload.php';

class PageController {
    public function homepage(): string {
        return require './resources/views/homepage.php';
    }
    public function error(): string {
        return require './resources/views/error.html';
    }

}