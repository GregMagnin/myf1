<?php

require_once 'vendor/autoload.php';

$userTable = new \Database\Migrations\CreateUsersTable();
$userTable->handle();