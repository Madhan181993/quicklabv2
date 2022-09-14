<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Models\Admin\Product;
use App\Http\Controllers\Controller;

class ProductController extends Controller
{
    public function index()
    {

        $product = Product::all();
        
        return view('admin.product.index', compact('product'));
    }
}
