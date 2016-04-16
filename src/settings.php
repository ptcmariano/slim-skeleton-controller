<?php

$dbconfig = [
    'driver'    => 'mysql',
    'host'      => 'host',
    'database'  => 'database',
    'username'  => 'user',
    'password'  => 'pass'
];

if (isset($_SERVER["HTTP_HOST"]) && $_SERVER["HTTP_HOST"] == 'localhost') {
    $dbconfig = [
        'driver'    => 'mysql',
        'host'      => 'localhost',
        'database'  => 'database',
        'username'  => 'user',
        'password'  => 'pass'
    ];
}

return [
    'settings' => [
        'displayErrorDetails' => true, // set to false in production
        // Renderer settings
        'renderer' => [
            'template_path' => __DIR__ . '/../templates/',
        ],
        'database' => $dbconfig
    ]
];
