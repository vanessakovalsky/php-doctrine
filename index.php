<?php
/**
 * Created by PhpStorm.
 * User: vdavid2
 * Date: 14/11/2018
 * Time: 11:12
 */
require_once('bootstrap.php');
require('src/Autoloader.php');
Autoloader::register();


$router = new Controller\RouterController();
$content = $router->route($_SERVER['REQUEST_METHOD'],$_GET['actions'], $entityManager);

include_once('src/View/template.php');
