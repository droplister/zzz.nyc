@extends('twill::layouts.settings')

@section('contentFields')
    @formField('input', [
        'label' => 'Sidebar Ad',
        'name' => 'ad_html',
        'rows' => 3,
    ])
@stop