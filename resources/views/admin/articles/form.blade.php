@extends('twill::layouts.form')

@section('contentFields')
    @formField('wysiwyg', [
        'name' => 'content',
        'label' => 'WYSIWYG',
        'note' => 'Lorem Ipsum',
        'placeholder' => 'Lorem Ipsum',
        'translated' => true,
        'toolbarOptions' => [ 
            ['header' => [2, 3, 4, 5, 6, false]],
            ['list' => 'bullet'],
            ['list' => 'ordered'],
            'image',
            'link'
        ]
    ])
    @formField('medias', [
        'name' => 'cover',
        'label' => 'Featured Image'
    ])
    @formField('browser', [
        'moduleName' => 'authors',
        'name' => 'authors',
        'label' => 'Author',
        'max' => 1
    ])
    @formField('block_editor')
@stop