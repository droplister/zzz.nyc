<div class="asset-box{{ isset($primary) ? ' tall' : '' }}">
  <div class="asset-image">
    <a href="{{ route('articles.show', ['locale' => 'en', 'article' => $asset->slug]) }}" target="_self" style="background-image: url({{ $asset->image('cover') }})" title=""></a>
  </div>
  <div class="asset-content">
    <header>
      <h1><a href="{{ route('articles.show', ['locale' => 'en', 'article' => $asset->slug]) }}">{{ $asset->title }}</a></h1>
      @include('partials.share-button', ['show' => ! isset($primary)])
    </header>
    <footer>
      <a href="{{ route('articles.show', ['locale' => 'en', 'article' => $asset->slug]) }}" class="button" style="background-image:url(images/sanders.jpg)"></a>
      <ul>
        <li>Marie Iannotti</li>
        <li>Gardening Expert</li>
      </ul>
      @include('partials.share-button', ['show' => isset($primary)])
    </footer>
  </div>
</div>
