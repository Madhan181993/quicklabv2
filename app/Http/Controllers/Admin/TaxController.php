<?php

namespace App\Http\Controllers\Admin;

use App\Models\Tax;
use App\Models\Category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class TaxController extends Controller
{
    public function index()
    {
        $tax = Tax::all();

        return view('admin.tax.index', compact('tax'));
    }

    public function edit($id)
    {
        $tax = Tax::find($id);
        // return view('admin.category.edit', compact('category'));
        return response()->json([
            'status' => 200,
            'category' => $tax,
        ]);
    }
}
