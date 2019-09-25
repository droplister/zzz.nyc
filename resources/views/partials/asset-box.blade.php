<div class="asset-box{{ isset($primary) ? ' tall' : '' }}">
  <div class="asset-image">
    <a href="{{ route('articles.show', ['locale' => 'en', 'article' => $item->slug]) }}" target="_self" style="background-image: url({{ $item->image('cover') }})" title=""></a>
  </div>
  <div class="asset-content">
    <header>
      <h1><a href="{{ route('articles.show', ['locale' => 'en', 'article' => $item->slug]) }}">{{ $item->title }}</a></h1>
      @include('partials.share-button', ['show' => ! isset($primary)])
    </header>
    <footer>
      <a href="{{ route('articles.show', ['locale' => 'en', 'article' => $item->slug]) }}" class="button" style="background-image:url({{ $item->authors->first()->image('profile') }})"></a>
      <ul>
        <li>{{ $item->authors->first()->title }}</li>
        <li>{{ $item->authors->first()->description }}</li>
      </ul>
      @include('partials.share-button', ['show' => isset($primary)])
    </footer>
  </div>
</div>
