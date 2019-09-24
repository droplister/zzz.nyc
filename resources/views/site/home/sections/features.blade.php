<div class="row">
@if($featured_bucket)
  <div class="col-6">
    @include('partials.asset-box', ['asset' => $featured_article, 'tall' => true])
  </div>
@endif
@if($features_bucket)
  @foreach($features_articles_chunk as $features_articles)
  @include('partials.new-row', ['insert' => ! $loop->last && $loop->index & 1])
  <div class="col-6">
    @foreach($features_articles as $features_article)
      @include('partials.asset-box', ['asset' => $features_article])
    @endforeach
  </div>
  @endforeach
@endif
@if(! $featured_bucket && ! $features_bucket)
  <div class="col-12">
    No Content
  </div>
@endif
</div>