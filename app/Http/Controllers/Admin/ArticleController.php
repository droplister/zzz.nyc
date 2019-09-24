<?php

namespace App\Http\Controllers\Admin;

use A17\Twill\Http\Controllers\Admin\ModuleController;

class ArticleController extends ModuleController
{
    protected $moduleName = 'articles';

    /*
     * Available columns of the index view
     */
    protected $indexColumns = [
        'image' => [
            'thumb' => true, // image column
            'variant' => [
                'role' => 'cover',
                'crop' => 'default',
            ],
        ],
        'title' => [ // field column
            'title' => 'Title',
            'field' => 'title',
        ],
    ];
}
