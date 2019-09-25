<?php

namespace App\Http\Controllers\Admin;

use A17\Twill\Http\Controllers\Admin\ModuleController;

class AuthorController extends ModuleController
{
    protected $moduleName = 'authors';

    /*
     * Available columns of the index view
     */
    protected $indexColumns = [
        'image' => [
            'thumb' => true, // image column
            'variant' => [
                'role' => 'profile',
                'crop' => 'default',
            ],
        ],
        'title' => [ // field column
            'title' => 'Title',
            'field' => 'title',
        ],
        'bio' => [ // field column
            'title' => 'Bio',
            'field' => 'description',
        ],
    ];
}
