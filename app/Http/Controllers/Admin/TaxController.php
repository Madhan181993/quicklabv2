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
        $taxes = Tax::all();
        return view('admin.tax.index', compact('taxes'));
    }

    public function insert(Request $request)
    {
        $this->validate($request, [
            'taxcode' => 'required',
            'taxname' => 'required'
        ]);

        if ($request->taxstatus == true) {
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
    }


    public function edit($id)
    {
        $tax = Tax::find($id);

        // dd($tax);
        if ($tax) {
            return response()->json([
                'status' => '200',
                'tax' => $tax,
            ]);
        } else {
            return response()->json([
                'status' => '404',
            ]);
        }
    }

    public function update(Request $request)
    {

        // $taxId = $request->input('id');
        $taxId = $request->id;
        $TaxModel = Tax::find($taxId);

        if(!empty($taxId)){

            $TaxModel->taxcode = $request->taxcode;
            $TaxModel->taxname = $request->taxname;
            $TaxModel->taxvalue = $request->taxvalue;
            $TaxModel->taxpercentage = $request->taxpercentage;
            $TaxModel->taxdescription = $request->taxdescription;
            $TaxModel->taxstatus = ($request->taxstatus == "on") ? "1" : "0";

            $TaxModel->update();

            return response()->json([
                'status' => '200',
            ]);
        }else{
            return response()->json([
                'status' => '404',
            ]);
        }

        
    }
}
