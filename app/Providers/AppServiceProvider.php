<?php

namespace App\Providers;

use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;
use A17\Twill\Repositories\SettingRepository;
use Illuminate\Database\Eloquent\Relations\Relation;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        Relation::morphMap([
            'articles' => 'App\Models\Article',
        ]);

        View::composer('partials.ad-spot', function ($view) {
            $view->with('link_url', app(SettingRepository::class)->byKey('link_url', 'sidebar'));
            $view->with('creative', app(SettingRepository::class)->byKey('creative', 'sidebar'));
        });
    }
}
