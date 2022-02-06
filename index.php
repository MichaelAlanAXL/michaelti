<?php 

require_once("vendor/autoload.php");

use \Slim\Slim;
use \Dev\Page;
use \Dev\PageAdmin;

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

$app->get('/admin', function(){

    $page = new PageAdmin();

    $page->setTpl("index");

});

$app->get('/fotos', function(){

    $page = new Page();

    $page->setTpl("fotos");

});

$app->get('/hello/:name', function ($name) {
    echo "Hello, " . $name;
});

$app->run();

 ?>