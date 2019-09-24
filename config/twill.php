<?php

return [
    'enabled' => [
        'search' => false,
    ],
    'dashboard' => [
        'modules' => [
            'articles' => [
                'name' => 'articles',
                'count' => true,
                'activity' => true,
            ],
        ],
    ],
    'buckets' => [
        'homepage' => [
            'name' => 'Home',
            'buckets' => [
                'home_primary_feature' => [
                    'name' => 'Home features (grid)',
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
                    'name' => 'Home features (grid)',
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
                    'name' => 'Home trending (list)',
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