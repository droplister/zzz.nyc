@extends('layouts.site')

@section('title', 'Area 17 :: Front End :: Home')

@section('aside')
@include('partials.ad-spot')
@include('site.home.sections.trending')
@endsection

@section('main')
@include('site.home.sections.features')
@endsection