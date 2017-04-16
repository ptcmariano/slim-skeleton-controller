<?php

$app->get('/hello[/{name}]', '\App\Controller\MyController:hello');

$app->get('/insert', '\App\Controller\MyController:insert');
