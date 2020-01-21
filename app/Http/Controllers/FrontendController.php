<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FrontendController extends Controller
{


    public function index()
    {
        $features = setting('site', 'features');
        $titles = json_encode(collect(setting('site', 'titles'))->pluck('tital'));
        return view('index', compact('features', 'titles'));
    }


    public function about()
    {
        return view('about');
    }


    public function blog()
    {
        return view('blog');
    }
}
