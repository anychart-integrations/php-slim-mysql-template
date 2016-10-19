<?php

require __DIR__ . '/../vendor/autoload.php';

spl_autoload_register(function ($classname) {
    require ("../src/classes/" . $classname . ".php");
});

$settings = require __DIR__ . '/../src/settings.php';
$app = new \Slim\App($settings);
$container = $app->getContainer();

// Set up html templates
$container['view'] = new \Slim\Views\PhpRenderer("../templates/");

// Set up dependencies
require __DIR__ . '/../src/dependencies.php';

// Register routes
require __DIR__ . '/../src/routes.php';

$app->run();