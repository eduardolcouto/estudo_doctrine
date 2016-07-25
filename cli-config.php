<?php

use Doctrine\ORM\Tools\Console\ConsoleRunner;

require_once __DIR__.'/src/doctrine.php';

$entityManager = getEntityManager();

return ConsoleRunner::createHelperSet($entityManager);