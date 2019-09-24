<?php

namespace App\Http\Controllers\Site;

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
        return view('site.home.index');
    }
}
