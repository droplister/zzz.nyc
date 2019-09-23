<?php

return [
    'buckets' => [
        'homepage' => [
            'name' => 'Home',
            'buckets' => [
                'home_primary_feature' => [
                    'name' => 'Home primary feature',
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
                    'name' => 'Home secondary features',
                    'bucketables' => [
                        [
                            'module' => 'articles',
                            'name' => 'Articles',
                            'scopes' => ['published' => true],
                        ],
                    ],
                    'max_items' => 2,
                ],
            ],
        ],
    ],
];