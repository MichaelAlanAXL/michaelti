<?php 

require_once("config.php");

$cad = new Cadastro();

$cad->setNome("Michael Alan");
$cad->setEmail("michael.dtna@gmail.com");
$cad->setSenha("384749");

echo $cad;


?>