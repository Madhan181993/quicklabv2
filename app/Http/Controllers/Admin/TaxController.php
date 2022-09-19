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

public function insert(Request $request)
{
// return "Insert Tax page";
    // dd($request);
          //  Validate fields
          $this->validate($request, [
            'taxcode' => 'required',
            'taxname' => 'required'
        ]);

if($request->taxstatus == true)
{
$taxstatus = 1;
}
        $data = array(
            'taxcode' =>  $request->taxcode,
            'taxname' => $request->taxname,
            'taxvalue' => $request->taxvalue,
            'taxpercentage' => $request->taxpercentage,
            'taxdescription' => $request->taxdescription,
            'taxstatus' => $taxstatus

        );
        $create = Tax::create($data);
        return redirect()->route('admin.tax');


        // return redirect('/admin/tax');

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
