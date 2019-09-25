<?php

namespace App\Models;

use A17\Twill\Models\Behaviors\HasTranslation;
use A17\Twill\Models\Behaviors\HasSlug;
use A17\Twill\Models\Behaviors\HasMedias;
use A17\Twill\Models\Model;

class Author extends Model 
{
    use HasTranslation, HasSlug, HasMedias;

    protected $fillable = [
        'published',
    ];

    public $translatedAttributes = [
        'title',
        'description',
        'active',
    ];
    
    public $slugAttributes = [
        'title',
    ];

    public $checkboxes = [
        'published'
    ];

    public $mediasParams = [
        'profile' => [
            'default' => [
                [
                    'name' => 'landscape',
                    'ratio' => 1 / 1,
                ],
            ],
        ],
    ];
}
