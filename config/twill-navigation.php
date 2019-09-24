<?php

return [
    'articles' => [
        'title' => 'Articles',
        'module' => true
    ],
    'featured' => [
        'title' => 'Features',
        'route' => 'admin.featured.homepage',
        'primary_navigation' => [
            'homepage' => [
               'title' => 'Homepage',
               'route' => 'admin.featured.homepage',
            ],
        ],
    ],
];
