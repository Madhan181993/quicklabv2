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
        $taxId = $request->editTaxId;
        $TaxModel = Tax::find($taxId);

        $TaxModel->taxcode = $request->edittaxcode;
        $TaxModel->taxname = $request->edittaxname;
        $TaxModel->taxvalue = $request->edittaxvalue;
        $TaxModel->taxpercentage = $request->edittaxpercentage;
        $TaxModel->taxdescription = $request->edittaxdescription;
        $TaxModel->taxstatus = $request->edittaxstatus;

        $TaxModel->update();

        return redirect('admin/tax')->with('status', 'Product Updated Successfully');
    }
}
