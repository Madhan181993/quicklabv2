<?php

namespace App\Http\Controllers\Admin;

use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

use Illuminate\Support\Facades\Log;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Validator;



class CategoryController extends Controller
{
    public function index()
    {
        $parent = Category::where('category_id', '=', NULL)->get();
        $category = Category::all();

        return view('admin.category.index')
            ->with(compact('category'))
            ->with(compact('parent'));
    }

    public function add()
    {
        return view('admin.category.add');
    }

    public function insert(Request $request)
    {

        //  Validate fields
        $this->validate($request, [
            'name' => 'required'
        ]);


        Category::insert([
            'name' =>  $request->name,
            'category_id' => $request->category_id
        ]);


        return redirect('/admin/categories');
    }

    public function edit($id)
    {
        $category = Category::find($id);


        if ($category) {
            return response()->json([
                'status' => '200',
                'category' => $category,
            ]);
        } else {
            return response()->json([
                'status' => '404',
            ]);
        }
    }

    public function update(Request $request)
    {

        $validator = Validator::make($request->all(), [
            'name' => 'required',
            'categorystatus' => 'required',
        ]);


        if ($validator->fails()) {
            return response()->json([
                'status' => '400',
            ]);
        } else {

            $id = $request->input('id');

            $category = Category::find($id);

            if ($category) {
                
                $category->name = $request->input('name');
                $category->category_id = $request->input('category_id');
                $category->categorystatus = $request->input('categorystatus');
                $category->update();

                return response()->json([
                    'status' => '200',
                ]);
            } else {
                return response()->json([
                    'status' => '404',
                ]);
            }
         }


    }
}
