@extends('twill::layouts.form')

@section('contentFields')
    @formField('input', [
        'name' => 'description',
        'label' => 'BIO',
        'type' => 'textarea',
        'translated' => true,
        'maxlength' => 100
    ])
    @formField('medias',[
        'name' => 'profile',
        'label' => 'Profile picture',
    ])
@stop