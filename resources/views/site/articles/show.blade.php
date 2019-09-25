@extends('layouts.site')

@section('title', $article->translate($locale)->title)

@section('aside')
<a href="{{ route('articles.show', ['locale' => 'en', 'slug' => $article->slug]) }}">EN</a> |
<a href="{{ route('articles.show', ['locale' => 'es', 'slug' => $article->slug]) }}">ES</a>
@endsection

@section('main')
<a href="{{ url('/') }}">HOME</a>
<div class="asset-box">
  <div class="asset-image">
    <a href="{{ route('articles.show', ['locale' => $locale, 'slug' => $article->slug]) }}" target="_self" style="background-image: url({{ $article->image('cover') }})" title=""></a>
  </div>
  <div class="asset-content">
    <header>
      <h1><a href="{{ route('articles.show', ['locale' => $locale, 'slug' => $article->slug]) }}">{{ $article->translate($locale)->title }}</a></h1>
      @include('partials.share-button')
    </header>
  </div>
</div>
@endsection