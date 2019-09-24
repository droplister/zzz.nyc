@extends('twill::layouts.settings', [
    'contentFieldsetLabel' => 'Ad Spot',
])

@section('contentFields')
    @formField('input', [
        'label' => 'Link URL',
        'name' => 'link_url',
    ])
    @formField('input', [
        'label' => 'Creative',
        'name' => 'creative',
    ])
@stop