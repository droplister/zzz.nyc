@extends('layouts.site')

@section('title', $article->translate($locale)->title)

@section('aside')
<a href="{{ route('articles.show', ['locale' => 'en', 'slug' => $article->slug]) }}">EN</a> |
<a href="{{ route('articles.show', ['locale' => 'es', 'slug' => $article->slug]) }}">ES</a>
@endsection

@section('main')
<div class="asset-box">
  <div class="asset-image">
    <a href="{{ url('/') }}" target="_self" style="background-image: url({{ $article->image('cover') }})" title=""></a>
  </div>
  <div class="asset-content">
    <header>
      <h1><a href="{{ route('articles.show', ['locale' => $locale, 'slug' => $article->slug]) }}">{{ $article->translate($locale)->title }}</a></h1>
      @include('partials.share-button')
    </header>
  </div>
</div>
{!! $article->renderBlocks(false) !!}
@endsection