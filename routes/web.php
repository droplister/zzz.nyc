<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::namespace('Site')->group(function () {
    Route::get('/', 'HomeController@index');
    Route::get('/{locale}/articles/{slug}', 'ArticleController@show')->name('articles.show');
});
