<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use App\DataTables;
class ProductController extends Controller
{
    public function datatable(){
        return view('products.datatable');
    }

    public function productsList(){
        return DataTables::of(Product::query())->make(true);

    }
}
