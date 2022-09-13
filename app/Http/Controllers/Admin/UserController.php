<?php

namespace App\Http\Controllers\Admin;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Hash;



class UserController extends Controller
{
    public function login(Request $request){

        $request->validate([
            'email'=>'required|email',
            'password'=>'required|min:8'
        ]);
        $check = $request->only('email', 'password');
        if(Auth::guard('admin')->attempt($check)){
            return redirect('admin/dashboard')->with('status','Welcome to your dashboard');
        }else{
            return redirect()->back()->with('error', 'Login Failed');
        }
    }

    public function logout()
    {
        Auth::guard('admin')->logout();
        return redirect('admin/login')->with('status','Logged out successfully');
    }
    public function index()
    {
        // 1:Admin, 2:Partner, 3:User
        $userIds =[1,2];
        // $usersList = User::where('userrole','=','1')
        $usersList = User::whereIn('userrole',$userIds)
        ->where('deleted_status',0)
        ->get();
        // $usersList = User::where('deleted_status',0)
        // ->get();

        return view('admin.user.index', compact('usersList'));
    }


    // TODO : Remove this function if not used.
    // public function add()
    // {
    //     return view('admin.category.add');
    // }

    public function addUser(Request $request)
    {
        //echo "<pre>";print_r($request->input());die;
        //Validate fields
        $this->validate($request, [
            'usercode' => 'required|max:100',
            'userfirstname' => 'required|max:100',
            'usermiddlename' => 'nullable',
            'userlastname' => 'required|max:100',
            'userphone' => 'required|numeric',
            'usermobile1' => 'nullable|numeric',
            'usermobile2' => 'nullable|numeric',
            'email' => 'required|email',
            'password' => 'required|max:100',
            'useremail1' => 'nullable|email',
            'useraddress1' => 'required',
            'useraddress2' => 'nullable',
            'usercity' => 'required',
            'userstate' => 'required',
            'usercountry' => 'required',
            'userpincode' => 'required',
            'userrole' => 'required|numeric',
        ]);

        try{

           User::insert([
                'usercode' => $request->usercode,
                'userfirstname' => $request->userfirstname,
                'userlastname' => $request->userlastname,
                'usermiddlename' => $request->usermiddlename,
                'useraddress1' => $request->useraddress1,
                'useraddress2' => $request->useraddress2,
                'userphone' => $request->userphone,
                'usermobile1' => $request->usermobile1,
                'usermobile2' => $request->usermobile2,
                'email' => $request->email,
                'password' => Hash::make($request->password),
                'useremail1' => $request->useremail1,
                'usercity' => $request->usercity,
                'userstate' => $request->userstate,
                'usercountry' => $request->usercountry,
                'userpincode' => $request->userpincode,
                'userstatus' => 1,
                'userrole' => $request->userrole,
            ]);
        }catch (\Exception $er){
            return back()->with('error', 'Something went wrong...');
        }
        
        return redirect()->back()->with('status','User Added Successfully');
    }

    public function editUser(Request $request)
    {
        $userId = $request->input('user_id');
        $user = User::find($userId);
        return response()->json([
            'status' => 200,
            'user' => $user,
        ]);
    }

    public function updateUser(Request $request)
    {
        //echo "<pre>";print_r($request->input());die;
        $userId = $request->input('user_id');
        $user = User::find($userId);
        
        $user->usercode = $request->input('usercode');
        $user->userfirstname = $request->input('userfirstname');
        $user->userlastname = $request->input('userlastname');
        $user->usermiddlename = $request->input('usermiddlename');
        $user->useraddress1 = $request->input('useraddress1');
        $user->useraddress2 = $request->input('useraddress2');
        $user->userphone = $request->input('userphone');
        $user->usermobile1 = $request->input('usermobile1');
        $user->usermobile2 = $request->input('usermobile2');
        $user->email = $request->input('email');
        $user->useremail1 = $request->input('useremail1');
        $user->usercity = $request->input('usercity');
        $user->userstate = $request->input('userstate');
        $user->usercountry = $request->input('usercountry');
        $user->userpincode = $request->input('userpincode');
        $user->userstatus = $request->input('userstatus') == "on" ? '1' : '0';
        $user->userrole = $request->input('userrole');
        $user->update();

        return redirect()->back()->with('status','User Updated Successfully');

    }

    public function deleteUser(Request $request){
        $userId = $request->input('user_id');
        $user = User::find($userId);
        $user->deleted_status = 'Yes';
        $user->update();

        return redirect()->back()->with('status','User Deleted Successfully');
    }
}
