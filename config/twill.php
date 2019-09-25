<?php

return [
    'enabled' => [
        'search' => false,
        'settings' => true,
    ],
    'dashboard' => [
        'modules' => [
            'articles' => [
                'name' => 'articles',
                'count' => true,
                'create' => true,
                'activity' => true,
            ],
            'authors' => [
                'name' => 'authors',
                'count' => true,
                'create' => true,
                'activity' => true,
            ],
        ],
    ],
    'block_editor' => [
        'blocks' => [
            'quote' => [
                'title' => 'Quote',
                'icon' => 'text',
                'component' => 'a17-block-quote',
            ],
        ]
    ],
    'buckets' => [
        'home' => [
            'name' => 'Home',
            'buckets' => [
                'home_primary_feature' => [
                    'name' => 'Featured (grid)',
                    'bucketables' => [
                        [
                            'module' => 'articles',
                            'name' => 'Articles',
                            'scopes' => ['published' => true],
                        ],
                    ],
                    'max_items' => 1,
                ],
                'home_secondary_features' => [
                    'name' => 'Features (grid)',
                    'bucketables' => [
                        [
                            'module' => 'articles',
                            'name' => 'Articles',
                            'scopes' => ['published' => true],
                        ],
                    ],
                    'max_items' => 6,
                ],
                'home_trending_features' => [
                    'name' => 'Trending (list)',
                    'bucketables' => [
                        [
                            'module' => 'articles',
                            'name' => 'Articles',
                            'scopes' => ['published' => true],
                        ],
                    ],
                    'max_items' => 4,
                ],
            ],
        ],
    ],
];