@extends('layouts.site')

@section('title', $article->translate($locale)->title)

@section('aside')
@endsection

@section('main')
<div class="asset-box">
  <div class="asset-image">
    <a href="{{ route('articles.show', ['locale' => $locale, 'slug' => $article->slug]) }}" target="_self" style="background-image: url({{ $asset->image('cover') }})" title=""></a>
  </div>
  <div class="asset-content">
    <header>
      <h1><a href="{{ route('articles.show', ['locale' => $locale, 'slug' => $article->slug]) }}">{{ $article->translate($locale)->title }}</a></h1>
    </header>
    <footer>
      <a href="{{ route('articles.show', ['locale' => $locale, 'slug' => $article->slug]) }}" class="button" style="background-image:url(images/sanders.jpg)"></a>
      <ul>
        <li>Marie Iannotti</li>
        <li>Gardening Expert</li>
      </ul>
      @if(isset($primary) && $primary === true)
        @include('partials.share-button')
      @endif
    </footer>
  </div>
</div>

@endsection