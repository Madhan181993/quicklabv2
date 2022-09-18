<?php

namespace App\Http\Controllers\Admin;

use App\Models\Category;
use Illuminate\Http\Request;
use App\Models\Admin\Product;
use App\Http\Controllers\Controller;

//TODO : Try Catch to be implemented to prevent raw errors.

class ProductController extends Controller
{
    public function index()
    {
        $products = Product::where('deleted_status','=',0)->get();
        return view('admin.product.index', compact('products'));
    }

    //Get add product details
    public function addProduct(Request $request)
    {
        //TODO : Check whether Top level categories should be filtered.
        $categories = Category::where('category_id', '=', NULL)->get();

        return view('admin.product.add', ['categories' => $categories]);
    }

    //Insert new products
    public function insert(Request $request)
    {

        //TODO : Check whether to do this validation.
        //Validate fields
        $this->validate($request, [
            'name' => 'required',
            'slug' => 'required',
            'short_description' => 'nullable',
            'description' => 'nullable',
            'regular_price' => 'required',
            'sale_price' => 'required',
            'SKU' => 'required',
            'stock_status' => 'required',
            'quantity' => 'required',
            'image' => 'nullable|mimes:jpg,png,jpeg,gif',
        ]);

        $data = array(
            'name' => $request->name,
            'slug' => $request->slug,
            'short_description' => $request->short_description,
            'description' => $request->description,
            'regular_price' => $request->regular_price,
            'sale_price' => $request->sale_price,
            'regular_price_USD' => $request->regular_price_USD,
            'sale_price_USD' => $request->sale_price_USD,
            'QL_points' => $request->QL_points,
            'SKU' => $request->SKU,
            'stock_status' => $request->stock_status,
            'featured' => $request->featured,
            'quantity' => $request->quantity,
            'category_id' => $request->category_id,

        );
        if($request->hasFile('image')){
            $image = $request->file('image');
            $filename = date('dmY').time().'.'.$image->getClientOriginalExtension();

            $image->move(public_path('/assets/images/products'), $filename);

            $data['image'] = $filename;
        }

        $create = Product::create($data);
        return redirect()->route('admin.products');
    }

    //Get edit product details
    public function edit(Product $product, Request $request) 
    {
        $id = $request->id;
        $product = Product::findOrFail($id);
        $categories = Category::where('category_id', '=', NULL)->get();
        return view('admin.product.edit',compact('product','categories'));
    }

    //Update Product
    public function update(Request $request)
    {
        //TODO : Check whether to do this validatoni.
        //Validate fields
        $this->validate($request, [
            'name' => 'required',
            'slug' => 'required',
            'short_description' => 'nullable',
            'description' => 'nullable',
            'regular_price' => 'required',
            'sale_price' => 'required',
            'SKU' => 'required',
            'stock_status' => 'required',
            'quantity' => 'required',
            'image' => 'nullable|mimes:jpg,png,jpeg,gif',
        ]);


        $productId = $request->input('product_id');
        $productModel = Product::find($productId);
        
        $productModel->name = $request->name;
        $productModel->slug = $request->slug;
        $productModel->short_description = $request->short_description;
        $productModel->description = $request->description;
        $productModel->regular_price = $request->regular_price;
        $productModel->sale_price = $request->sale_price;
        $productModel->regular_price_USD = $request->regular_price_USD;
        $productModel->sale_price_USD = $request->sale_price_USD;
        $productModel->QL_points = $request->QL_points;
        $productModel->SKU = $request->SKU;
        $productModel->stock_status = $request->stock_status;
        $productModel->featured = $request->featured;
        $productModel->quantity = $request->quantity;
        $productModel->category_id = $request->category_id;

        //Product Image Upload
        if($request->hasFile('image')){

            $image = $request->file('image');
            $filename = date('dmY').time().'.'.$image->getClientOriginalExtension();

            $image->move(public_path('/assets/images/products'), $filename);

            $productModel['image'] = $filename;
        }

        $productModel->update();
       
        return redirect('admin/products')->with('status','Product Updated Successfully');
        
    }

    //Delete Product
    public function delete($id){
        $productModel = Product::find($id);
        $productModel->deleted_status = 1;
        $productModel->update();

        return redirect('admin/products')->with('status','Product Deleted Successfully');
    }
}
