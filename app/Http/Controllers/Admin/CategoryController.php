<?php

namespace App\Http\Controllers\Admin;

use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

use Illuminate\Support\Facades\Log;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\File;



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


        // return redirect('/dashboard')->with('status', 'Category Added Successfully');
    }

    public function edit($id)
    {
        $category = Category::find($id);
        // return view('admin.category.edit', compact('category'));
        return response()->json([
            'status' => 200,
            'category' => $category,
        ]);
    }

    public function update(Request $request)
    {

        $studentId = $request->input('category_id');
        $category = Category::find($studentId);

        // TODO : Check whether image is required for Category. If not, remove the commented code below.
        if ($request->hasFile('image')) {
            $path = 'assets/uploads/category/' . $category->image;

            if (File::exists($path)) {
                File::delete($path);
            }

            $file = $request->file('image');
            $ext = $file->getClientOriginalExtension();
            $filename = time() . '.' . $ext;

            $file->move('assets/uploads/category', $filename);
            $category->image = $filename;
            Log::info($filename);
        }

        $category->name = $request->input('name');
        $category->slug = $request->input('slug');
        $category->description = $request->input('description');
        $category->status = $request->input('status') == TRUE ? '1' : '0';
        $category->popular = $request->input('popular') == TRUE ? '1' : '0';
        $category->meta_title = $request->input('meta_title');
        $category->meta_keywords = $request->input('meta_keywords');
        $category->meta_description = $request->input('meta_description');
        $category->update();

        return redirect()->back()->with('status', 'Category Updated Successfully');
    }
}
