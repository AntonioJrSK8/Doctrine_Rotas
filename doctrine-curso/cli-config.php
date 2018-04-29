<?php
use Doctrine\ORM\Tools\Console\ConsoleRunner;

// caminho para o doctrine.php
require_once __DIR__.'/src/doctrine.php';

// replace with mechanism to retrieve EntityManager in your app
$entityManager = getEntityManager();

return ConsoleRunner::createHelperSet($entityManager);