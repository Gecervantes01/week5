<?php
/*
 * January 26th, 2024
 * https://gecervantes.greenriverdev.com/328/Teamz/
 * This is the controller for the Teamz web app.
 */

// Displays Errors
ini_set('display_errors', 1);
error_reporting(E_ALL);

require_once('vendor/autoload.php');

$f3 = Base::instance();

// Default route
$f3->route('GET /', function () {
    $view = new Template();
    echo $view->render('views/home.html');
});

// Template for creating new route
//$f3->route('GET /route-name', function () {
//    $view = new Template();
//    echo $view->render('views/file-name.html');
//});

// Runs Fat-Free
$f3->run();