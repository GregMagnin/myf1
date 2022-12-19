<?php

require_once 'vendor/autoload.php';

$userTable = new \Database\Seeders\SeedArticles();
$userTable->handle();