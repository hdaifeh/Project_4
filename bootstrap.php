<?php

use Doctrine\ORM\Tools\Setup;
use Doctrine\ORM\EntityManager;

require_once "vendor/autoload.php";

$isDevMode = true;
$config = Setup::createAnnotationMetadataConfiguration(array(__DIR__."/src/Entity"), $isDevMode);

// Database configuration parameters
$conn = array(
    'driver' => 'pdo_mysql',
    'host' => 'localhost',
    'port' => 3306,
    'dbname' => 'your_database_name',
    'user' => 'your_database_user',
    'password' => 'your_database_password'
);

// Obtaining the entity manager
$entityManager = EntityManager::create($conn, $config);
