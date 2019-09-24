@extends('layouts.site')

@section('title', 'Area 17 :: Front End :: Home')

<?php
    $trending_articles = ['article', 'article', 'article', 'article'];
    $featured_bucket = true;
    $featured_article = ['article'];
    $features_bucket = true;
    $features_articles_chunk = [
        ['article', 'article'],
        ['article', 'article'],
        ['article', 'article'],
    ];
?>

@section('aside')
    @include('partials.ad-spot')
    @include('site.home.sections.trending')
@endsection

@section('main')
    @include('site.home.sections.features')
@endsection