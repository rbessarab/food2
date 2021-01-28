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
    echo "home page";
    //$view = new Template();
    //echo $view->render('views/home.html');
});

$f3->route('GET /order', function () {
    echo "order";
});

$f3->route('GET /order2', function () {
    echo "order 2";
});

$f3->route('GET /summary', function () {
    echo "summary";
});

//run fat free (need to be the last)
$f3->run();