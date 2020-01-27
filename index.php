<?php
/*
 * Imelda Medina
 * 1/27/2020
 * 328/templating.index.php
 */
session_start();
//Turn on error reporting
ini_set('display_errors',1);
error_reporting(E_ALL);
//Require autoload file
require("vendor/autoload.php");
//Instantiate F3
$f3 = Base:: instance();

//define a default route
$f3->route('GET /', function($f3){
    $f3->set('title', 'All About Templating');
    $view = new Template();
//    echo "<h1>Welcome!</h1>";
    echo $view->render('views/home.html');
});

//Run F3
$f3->run();
