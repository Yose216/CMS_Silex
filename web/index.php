<?php

require_once __DIR__.'/../vendor/autoload.php';

$app = new Silex\Application();
$app['upload_folder']=__DIR__ . '/images/Articles';

require __DIR__.'/../app/config/dev.php';
require __DIR__.'/../app/app.php';
require __DIR__.'/../app/routes.php';


$app->run();
