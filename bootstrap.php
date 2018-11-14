<?php
/**
 * Created by PhpStorm.
 * User: vdavid2
 * Date: 14/11/2018
 * Time: 11:29
 */

use Doctrine\ORM\Tools\Setup;
use Doctrine\ORM\EntityManager;

// Include Composer Autoload (relative to project root).
require_once "vendor/autoload.php";

// Create a simple "default" Doctrine ORM configuration for Annotations
$isDevMode = true;
$config = Setup::createAnnotationMetadataConfiguration(array(__DIR__."/src"), $isDevMode);

//$config = new \Doctrine\DBAL\Configuration();

$connectionParams = array(
    'dbname' => 'demo2',
    'user' => 'root',
    'password' => '',
    'host' => 'localhost',
    'driver' => 'pdo_mysql',
);
$conn = \Doctrine\DBAL\DriverManager::getConnection($connectionParams, $config);

// obtaining the entity manager
$entityManager = EntityManager::create($conn, $config);