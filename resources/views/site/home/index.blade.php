@extends('layouts.site')

@section('title', 'Area 17 :: Front End :: Home')

@section('aside')
@include('partials.ad-spot')
@include('site.home.partials.trending')
@endsection

@section('main')
@include('site.home.partials.features')
@endsection