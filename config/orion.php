<?php

return [
    'namespaces' => [
        'models' => 'App\\Models\\',
        'controllers' => 'App\\Http\\Controllers\\'
    ],
    'auth' => [
        'guard' => 'api'
    ],
    'specs' => [
        'info' => [
            'title' => env('APP_NAME'),
            'description' => 'Free Todo API',
            'terms_of_service' => null,
            'contact' => [
                'name' => 'Luke Diebold',
                'url' => 'https://quasarcast.com',
                'email' => 'luke@ldiebold.com',
            ],
            'license' => [
                'name' => null,
                'url' => null,
            ],
            'version' => '1.0.0',
        ],
        'servers' => [
            ['url' => env('APP_URL'), 'description' => 'Default Environment'],
        ],
    ],
];
