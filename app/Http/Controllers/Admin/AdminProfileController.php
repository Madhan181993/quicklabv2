<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Models\Admin\AdminProfile;
use App\Http\Controllers\Controller;

class AdminProfileController extends Controller
{
    public function index()
    {

        $profile = AdminProfile::all();

$Id = session('userid');

        $profile = AdminProfile::whereId($Id)->first();
        
        return view('admin.profile.index', compact('profile'));
    }
}
