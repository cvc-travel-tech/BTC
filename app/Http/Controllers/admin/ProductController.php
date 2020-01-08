<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Product;
use DataTables;
use App\Http\Controllers\Controller;

class ProductController extends Controller
{
    public function datatable()
    {
        return view('admin.products.datatable');
    }

    public function productsList()
    {
        return DataTables::of(Product::query())->make(true);
    }
}
