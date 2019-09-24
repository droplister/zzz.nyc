<?php

return [
    'featured' => [
        'title' => 'Home',
        'route' => 'admin.featured.home',
        'primary_navigation' => [
            'homepage' => [
               'title' => 'Home',
               'route' => 'admin.featured.home',
            ],
        ],
    ],
    'articles' => [
        'title' => 'Articles',
        'module' => true
    ],
    'settings' => [
        'title' => 'Settings',
        'route' => 'admin.settings',
        'params' => ['section' => 'sidebar'],
        'primary_navigation' => [
            'sidebar' => [
                'title' => 'Sidebar',
                'route' => 'admin.settings',
                'params' => ['section' => 'sidebar']
            ],
        ]
    ],
];
