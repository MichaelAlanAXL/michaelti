<?php if(!class_exists('Rain\Tpl')){exit;}?><!DOCTYPE htm>
<html xmlns="http://www.w3.org/1999/xhtml" dir="ltr" lang="en-US" xml:lang="en">
<head>
    <!--
    
    Base template (without user's data) checked by http://validator.w3.org : "This page is valid XHTML 1.0 Transitional"
    -->
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=EmulateIE7" />
    <link rel="stylesheet" href="/res/site/css/style.css" type="text/css" media="screen" />
    <script src="https://kit.fontawesome.com/7dfaa94841.js" crossorigin="anonymous"></script>
    <title>Michael TI</title>

   
    <!--[if IE 6]><link rel="stylesheet" href="style.ie6.css" type="text/css" media="screen" /><![endif]-->
    <!--[if IE 7]><link rel="stylesheet" href="style.ie7.css" type="text/css" media="screen" /><![endif]-->
<style>
li a, .dropbtn {
  display: inline-block;
  color: white;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
}

li a:hover, .dropdown:hover .dropbtn {
  background-color: red;
}

li.dropdown {
  display: inline-block;
}

.dropdown-content {
  display: none;
  position: absolute;
  background-color: #f9f9f9;
  min-width: 160px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
}

.dropdown-content a {
  color: black;
  padding: 12px 16px;
  text-decoration: none;
  display: block;
  text-align: left;
}

.dropdown-content a:hover {background-color: #f1f1f1;}

.dropdown:hover .dropdown-content {
  display: block;
}
</style>
    
</head>
<body>
    <div class="art-header">
        <div class="art-header-png"></div>
        <div class="art-header-jpeg"></div>
        <div class="art-logo">
            <h1 id="name-text" class="art-logo-name"><a href="#">Michael TI</a></h1>
            <div id="slogan-text" class="art-logo-text">Montagem e manutenção de PC's gamers</div>
        </div>
    </div>
    <nav>
        <ul>
            <li>
                <a href="#" class="active"><i class="fa-solid fa-house"></i> Início</a>
            </li>
            <li>
                <a href="#"><i class="fa-solid fa-circle-info"></i> Dicas</a>                           
            </li>       
            <li>
                <a href="#"><i class="fa-solid fa-circle-question"></i> Sobre</a>
            </li>
            <li class="dropdown">
                <a href="javascript:void(0)" class="dropbtn"> Produtos</a>
                <div class="dropdown-content">
                    <ul>
                        <?php require $this->checkTemplate("categories-menu");?>
                    </ul>
                </div>
            </li>
        </ul>
    </nav>            