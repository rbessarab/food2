<?php

//this is my controller file

ini_set('display_errors', 1);
error_reporting(E_ALL);

require_once('vendor/autoload.php');

//create an instance of the base class
$f3 = Base::instance();
$f3->set('DEBUG', 3);

//define a default route(home page)
$f3->route('GET /', function () {
    $view = new Template();
    echo $view->render('views/home.html');
});

$f3->route('GET /order', function () {
    $view = new Template();
    echo $view->render('views/form1.html');
});

$f3->route('GET /order2', function () {
    $view = new Template();
    echo $view->render('views/form2.html');
});

$f3->route('GET /summary', function () {
    $view = new Template();
    echo $view->render('views/summary.html');
});

//run fat free (need to be the last)
$f3->run();