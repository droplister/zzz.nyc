<?php

namespace App\Http\Controllers\Site;

use A17\Twill\Models\Feature;
use App\Http\Controllers\Controller;

class HomeController extends Controller
{
    /**
     * Homepage with 7 featured articles
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $trending = Feature::forBucket('home_trending_features');
        $primary = Feature::forBucket('home_primary_feature')->first();
        $secondary = Feature::forBucket('home_secondary_features');

        return view('site.home.index', [
            'trending_articles' => $trending,
            'primary_featured_article' => $primary,
            'secondary_featured_articles' => $secondary,
        ]);
    }
}
