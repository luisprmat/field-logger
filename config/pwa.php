<?php

return [
    'name' => env('APP_NAME'),
    'short_name' => 'Logger',
    'description' => 'Record and review field meter readings',
    'start_url' => '/',
    'id' => '/',
    'display' => 'standalone',
    'orientation' => 'portrait',
    'background_color' => '#030712',
    'theme_color' => '#030712',

    // --- Icons live in /public
    'icons' => [
        [
            'src' => '/icons/field_logger_192.png',
            'sizes' => '192x192',
            'type' => 'image/png',
            'purpose' => 'any',
        ],
        [
            'src' => '/icons/field_logger_512.png',
            'sizes' => '512x512',
            'type' => 'image/png',
            'purpose' => 'any',
        ],
    ],

    // Screenshots for richer install UI
    'screenshots' => [
        [
            'src' => '/screenshots/mobile.png',
            'type' => 'image/png',
            'sizes' => '714x1280',
        ],
        [
            'src' => '/screenshots/desktop.png',
            'type' => 'image/png',
            'sizes' => '2880x1362',
            'form_factor' => 'wide',
        ],
    ],

    'categories' => ['productivity', 'utilities'],
];
