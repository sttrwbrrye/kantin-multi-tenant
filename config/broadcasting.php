<?php

return [

    'default' => env('BROADCAST_CONNECTION', 'null'),

    'connections' => [

        'reverb' => [
            'driver' => 'reverb',
            'key' => env('REVERB_APP_KEY', 'kantin-local-key'),
            'secret' => env('REVERB_APP_SECRET', 'kantin-local-secret'),
            'app_id' => env('REVERB_APP_ID', 'kantin'),
            'options' => [
                'host' => env('REVERB_HOST', '127.0.0.1'),
                'port' => env('REVERB_PORT', 8080),
                'scheme' => env('REVERB_SCHEME', 'http'),
                'useTLS' => env('REVERB_SCHEME', 'http') === 'https',
            ],
            'client_options' => [
                // Guzzle client options
            ],
        ],

        'pusher' => [
            'driver' => 'pusher',
            'key' => env('REVERB_APP_KEY', 'kantin-local-key'),
            'secret' => env('REVERB_APP_SECRET', 'kantin-local-secret'),
            'app_id' => env('REVERB_APP_ID', 'kantin'),
            'options' => [
                'cluster' => env('PUSHER_APP_CLUSTER'),
                'host' => env('REVERB_HOST', '127.0.0.1'),
                'port' => env('REVERB_PORT', 8080),
                'scheme' => env('REVERB_SCHEME', 'http'),
                'encrypted' => false,
                'useTLS' => false,
            ],
        ],

        'log' => [
            'driver' => 'log',
        ],

        'null' => [
            'driver' => 'null',
        ],

    ],

];
