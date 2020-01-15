<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class HomeController extends Controller
{
    private $data;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->data = [
            // 'module' => 'Home',
            // 'module-url' => route('admin.destination.index'),
            // 'create-url' => route('admin.destination.create'),
        ];
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $data = $this->data;
        // $data['page-doc'] = "index";
        return view('admin.home', compact('data'));
    }
}
