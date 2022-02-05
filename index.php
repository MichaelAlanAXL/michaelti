<?php 

require_once("vendor/autoload.php");

use \Slim\Slim;
use \Dev\Page;

$app = new Slim();

$app->config('debug', true);

$app->get('/', function(){

    $page = new Page();

    $page->setTpl("index");


    /*$sql = new Dev\DB\Sql();

    $results = $sql->select("SELECT * FROM tb_usuarios");

    echo json_encode($results);
    //$page = new Page;*/

    //$page->setTpl("index");
});

$app->get('/hello/:name', function ($name) {
    echo "Hello, " . $name;
});

$app->run();

 ?>