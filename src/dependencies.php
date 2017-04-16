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
    $capsule->bootEloquent();
    return $capsule;
};

// Bootstrap Eloquent ORM
$dbconfig = $container->get('settings')['database'];
$connFactory = new \Illuminate\Database\Connectors\ConnectionFactory(new Illuminate\Container\Container);
$conn = $connFactory->make($dbconfig);
$resolver = new \Illuminate\Database\ConnectionResolver();
$resolver->addConnection('default', $conn);
$resolver->setDefaultConnection('default');
\Illuminate\Database\Eloquent\Model::setConnectionResolver($resolver);
