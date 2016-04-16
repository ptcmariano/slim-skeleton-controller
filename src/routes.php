<?php
// load classes
spl_autoload_register(function ($class_name) {
    include $class_name . '.php';
});

// Routes
$app->get('/[{name}]', '\App\Controller\MyController:hello');
