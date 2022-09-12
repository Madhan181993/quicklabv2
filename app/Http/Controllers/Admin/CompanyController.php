<?php

namespace App\Http\Controllers\Admin;

use App\Models\Companydetail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\File;



class CompanyController extends Controller
{
    public function index()
    {
        $companySettingVals = Companydetail::where('id', '1')->first();

        //echo "<pre>";print_r($companySettingVals);die;

        return view('admin.companydetails.index', compact('companySettingVals'));
    }

    public function editCompany(Request $request)
    {
        $companyId = $request->input('company_id');
        $company = Companydetail::find($companyId);
        // return view('admin.category.edit', compact('category'));
        return response()->json([
            'status' => 200,
            'company' => $company,
        ]);
    }

    public function updateCompany(Request $request)
    {
        $companyId = $request->input('company_id');
        $company = Companydetail::find($companyId);

        $company->companyname = $request->input('company_name');
        $company->companyaddress1 = $request->input('company_address1');
        $company->companyaddress2 = $request->input('company_address1');
        $company->companycity = $request->input('company_city');
        $company->companystate = $request->input('company_state');
        $company->companypincode = $request->input('company_pincode');
        $company->companyphone = $request->input('company_phone');
        $company->companymobile1 = $request->input('company_mobile1');
        $company->companymobile2 = $request->input('company_mobile2');
        $company->companyemail1 = $request->input('company_email1');
        $company->companyemail2 = $request->input('company_email2');
        $company->companywebsite = $request->input('company_website');
        $company->companygstin = $request->input('company_gstin');
        $company->companyiecno = $request->input('company_iecno');
        $company->update();

        return redirect()->back()->with('status','Company Updated Successfully');

    }
}
