<?php
// DIC configuration
$container = $app->getContainer();
// view renderer
$container['renderer'] = function ($c) {
    $settings = $c->get('settings')['renderer'];
    return new Slim\Views\Twig($settings['template_path']);
};
// db
use Illuminate\Database\Capsule\Manager as Capsule;
$container['database'] = function ($c) {
    $settings = $c->get('settings')['database'];
    $capsule = new Capsule;
    $capsule->addConnection($settings);
    $capsule->setAsGlobal();
    return $capsule;
};
