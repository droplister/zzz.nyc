@extends('twill::layouts.form')

@section('contentFields')
    @formField('wysiwyg', [
        'name' => 'content',
        'label' => 'Article',
        'translated' => true,
        'toolbarOptions' => [ 
            ['header' => [2, 3, 4, 5, 6, false]],
            'bold',
            'italic',
            'underline',
            'strike',
            ["script" => "super"],
            ["script" => "sub"],
            "blockquote",
            "code-block",
            ['list' => 'ordered'],
            ['list' => 'bullet'],
            ['indent' => '-1'],
            ['indent' => '+1'],
            'link',
            'image',
            'video',
            "clean",
        ],
        'editSource' => true
    ])
    @formField('medias', [
        'name' => 'cover',
        'label' => 'Featured Image'
    ])
@stop