<div class="row">
@if($primary_featured_article)
  <div class="col-6">
    @include('partials.asset-box', ['asset' => $primary_featured_article, 'tall' => true])
  </div>
@endif
@if($secondary_featured_articles)
  @foreach($secondary_featured_articles as $featured_articles)
  @include('partials.new-row', ['insert' => ! $loop->last && $loop->index & 1])
  <div class="col-6">
    @foreach($featured_articles as $featured_article)
      @include('partials.asset-box', ['asset' => $featured_article])
    @endforeach
  </div>
  @endforeach
@endif
@if(! $primary_featured_article && ! $secondary_featured_articles)
  <div class="col-12">
    No Content
  </div>
@endif
</div>