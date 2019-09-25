<?php

namespace App\Http\Controllers\Site;

use App\Models\Article;
use App\Http\Controllers\Controller;

class ArticleController extends Controller
{
    /**
     * Homepage with 7 featured articles
     *
     * @return \Illuminate\Http\Response
     */
    public function show($locale, $slug)
    {
        $article = Article::forSlug($slug)->first();

        return view('site.articles.show', compact('locale', 'article'));
    }
}
