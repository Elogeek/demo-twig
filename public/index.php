<?php

ini_set('error_reporting', E_ALL);
ini_set('display_errors', 1);

require '../vendor/autoload.php';
require '../Config/Config.php';

use Elodie\DemoTwig\Controller\UserController;


$id = 1;

$controller = new UserController();
$controller->profile($id);