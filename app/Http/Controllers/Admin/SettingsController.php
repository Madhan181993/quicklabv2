<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Models\Admin\Settings;
use App\Http\Controllers\Controller;

class SettingsController extends Controller
{

    public function index()
    {

        $settings = Settings::all();
        return view('admin.settings.settings',compact('settings'));
    }

    public function edit()
    {
        $settings = Settings::all();
        return view('admin.settings.edit',compact('settings'));
    }

    public function update(Request $request)
    {
        // dd($request);

        //loop in the request items, seperate id and insert into table
    }
}
