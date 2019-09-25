@extends('layouts.site')

@section('title', 'Area 17 :: Front End :: Home')

@section('aside')
    @include('partials.ad-spot')
    @include('buckets.articles.trending')
@endsection

@section('main')
    @include('buckets.articles.featured')
@endsection