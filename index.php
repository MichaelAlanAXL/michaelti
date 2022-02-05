<?php 

require_once("vendor/autoload.php");

$app = new \Slim\Slim();

$app->get('/', function(){

    $page = new Page;

    $page->setTpl("index");

});

$app->get('/hello/:name', function ($name) {
    echo "Hello, " . $name;
});

$app->run();

 ?>