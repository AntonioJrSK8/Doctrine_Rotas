<?php 
require_once "vendor/autoload.php";

use Doctrine\ORM\Tools\Setup;
use Doctrine\ORM\EntityManager;

// Diretório aonde vou guardar as entidades
$paths = [
    __DIR__.'/Entity'
];

//em modo de desenvolvimento
$isDevMode = false;


// Dados da conexão
$dbParams = array(
    'host'     => '127.0.0.1',
    'driver'   => 'pdo_mysql',
    'user'     => 'root',
    'password' => '',
    'dbname'   => 'db_doctrine',
);

$config = Setup::createAnnotationMetadataConfiguration($paths, $isDevMode);
$entityManager = entityManager::create($dbParams, $config);

function getEntityManager(){
    global $entityManager;
    return $entityManager;
}