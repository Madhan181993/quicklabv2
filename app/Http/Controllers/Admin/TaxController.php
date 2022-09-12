<?php

namespace App\Http\Controllers\Admin;

use App\Models\Category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class TaxController extends Controller
{
    public function index()
    {
        $category = Category::all();

        return view('admin.tax.index', compact('category'));
    }
}
