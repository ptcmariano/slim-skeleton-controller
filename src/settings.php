<?php

    $dbconfig = [
        'driver'    => 'mysql',
        'host'      => 'localhost',
        'database'  => 'hello',
        'username'  => 'root',
        'password'  => ''
    ];

if (isset($_SERVER["HTTP_HOST"]) && $_SERVER["HTTP_HOST"] == 'localhost') {
    $dbconfig = [
        'driver'    => 'mysql',
        'host'      => 'localhost',
        'database'  => 'hello',
        'username'  => 'root',
        'password'  => ''
    ];
}

return [
    'settings' => [
        'determineRouteBeforeAppMiddleware' => false,
        'displayErrorDetails' => true, // set to false in production
        // Renderer settings
        'renderer' => [
            'template_path' => __DIR__ . '/../templates/',
        ],
        'database' => $dbconfig
    ]
];
