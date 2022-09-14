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
        // $category = Category::all();

        // $category = DB::table('categories')
        //     ->join('categories', 'categories.id', '=', 'categories.categoriesparentid')
        //     ->get();

        $query ="SELECT * FROM categories ORDER BY CASE WHEN categoriesparentid = 0 THEN id ELSE categoriesparentid END, id";
        $category = DB::select($query);

        return view('admin.category.index', compact('category'));
    }


    public function add()
    {
        return view('admin.category.add');
    }

    public function insert(Request $request)
    {

    //  Validate fields
        $this->validate($request, [
            'name'=> 'required'
        ]);

        if ($this->fails())
        {
            return response()->json(['errors'=>$this->errors()->all]);
        }





        $category = new Category();
        // Log::info("test1 passed");


        // if ($request->hasFile('image')) {

        //     $file = $request->file('image');
        //     $ext = $file->getClientOriginalExtension();
        //     $filename = time() . '.' . $ext;

        //     $file->move('assets/uploads/category', $filename);
        //     $category->image = $filename;
        //     Log::info($filename);
        // }

        $category->name = $request->input('name');
        $category->slug = $request->input('slug');
        $category->description = $request->input('description');
        $category->status = $request->input('status') == TRUE ? '1' : '0';
        $category->popular = $request->input('popular') == TRUE ? '1' : '0';
        $category->meta_title = $request->input('meta_title');
        $category->meta_keywords = $request->input('meta_keywords');
        $category->meta_description = $request->input('meta_description');
        $category->save();

        return redirect('/dashboard')->with('status', 'Category Added Successfully');
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
            $filename = time().'.'.$ext;

            $file->move('assets/uploads/category',$filename);
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

        return redirect()->back()->with('status','Category Updated Successfully');

    }
}
