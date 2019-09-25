<div class="row">
  <div class="col-6">
    <span class="image-wrap">
      <a href="{{ route('articles.show', ['locale' => 'en', 'article' => $item->slug]) }}" class="image"><img src="{{ $item->image('cover') }}"/></a>
      <a href="#" class="button" style="background-image:url(images/sanders.jpg)"></a>
    </span>
  </div>
  <div class="col-6">
    <h4><a href="{{ route('articles.show', ['locale' => 'en', 'article' => $item->slug]) }}">{{ $item->title }}</a></h4>
    <footer>
      <a href="#" class="button" style="background-image:url(images/sanders.jpg)"></a>
      <ul>
        <li>By Joshua Kennon</li>
        <li>Investing for Geninners...</li>
      </ul>
      @include('partials.share-button')
    </footer>
  </div>
</div>
