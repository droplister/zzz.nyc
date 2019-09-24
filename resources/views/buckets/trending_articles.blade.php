<div class="module list">
  <h3>Trending</h3>
  @foreach($trending_articles as $trending_article)
    @include('partials.list-item', ['item' => $trending_article])
  @endforeach
</div>
