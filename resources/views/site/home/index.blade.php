<?php
    $trending_articles = ['article', 'article', 'article', 'article'];
    $primary_featured_article = ['article'];
    $secondary_featured_articles = [
        ['article', 'article'],
        ['article', 'article'],
        ['article', 'article'],
    ];
?>

@extends('layouts.site')

@section('title', 'Area 17 :: Front End :: Home')

@section('aside')
    @include('partials.ad-spot')
    @include('buckets.trending_articles')
@endsection

@section('main')
    @include('buckets.featured_articles')
@endsection