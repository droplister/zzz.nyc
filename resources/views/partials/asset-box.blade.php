<div class="asset-box{{ isset($primary) && $primary === true ? ' tall' : '' }}">
  <div class="asset-image">
    <a href="#" target="_self" style="background-image: url({{ $asset->image('cover') }})" title=""></a>
  </div>
  <div class="asset-content">
    <header>
      <h1><a href="#">{{ $asset->title }}</a></h1>
      @unless(isset($primary) && $primary === true)
        @include('partials.share-button')
      @endunless
    </header>
    <footer>
      <a href="#" class="button" style="background-image:url(images/sanders.jpg)"></a>
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
