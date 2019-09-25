<div class="row">
@if($primary_featured_article)
  <div class="col-6">
    @include('partials.asset-box', ['item' => $primary_featured_article, 'primary' => true])
  </div>
@endif
@if($secondary_featured_articles)
  @foreach($secondary_featured_articles->chunk(2) as $chunk)
    @include('partials.new-row', ['insert' => $loop->index & 1 && ! $loop->last])
    <div class="col-6">
      @foreach($chunk as $secondary_featured_article)
        @include('partials.asset-box', ['item' => $secondary_featured_article])
      @endforeach
    </div>
  @endforeach
@endif
</div>