<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FrontendController extends Controller
{


    public function index()
    {
        $features = setting('site', 'features');
        return view('index', compact('features'));
    }


    public function about()
    {
        return view('about');
    }
}
