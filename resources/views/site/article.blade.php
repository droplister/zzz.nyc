<div class='hero'>
  @if( $item->hasImage('cover'))
    <img src="{{ $item->image('cover', 'default') }}">
  @endif
  <h1>{{ $item->title }}</h1>
  <p>{{ $item->content }}</p>
</div>