<!-- Pagina inicial  -->
<?php
require '../app/controllers/PagesController.php';

$controllerName = $_GET['controller'].'Controller'; //#PagesController como se fosse
//recebeo nome do cantrolador: $_GET['controller']
$actionName = $_GET['action'];//#home

$controller = new $controllerName(); //# new PagesController()
$controller->$actionName(); //# chamando o PagesControl com action home

//usar: http://127.0.0.1/mvc/app/?controller=pages&action=home
//controlador é: pages
//ação é: home