@extends('layouts.admin')

@section('content')

<style>
    label {
        font-size: 14px;
        font-weight: 500;
    }

    input[type="text"],
    input[type="email"],
    input[type="password"] {
        height: 30px;
    }
</style>
<h4>My Profile</h4>
<div class="card">

    <div class="card">
        <div class="card-body">
            <form action="{{ url('add-user') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <!-- <div class="row">
                    <div class="col-md-2  mb-2">
                        <label for="">User Code</label>
                        <input type="text" class="form-control" name="usercode" required>
                        <div class="alert alert-danger" style="display:none"></div>
                    </div>
                </div> -->
                <div class="row">
                    <div class="col-md-4  mb-2">
                        <label for="">First Name</label>
                        <input type="text" class="form-control" name="userfirstname" value="{{ $profile->userfirstname }}">
                        <div class="alert alert-danger" style="display:none"></div>
                    </div>
                    <div class="col-md-4  mb-2">
                        <label for="">Middle Name</label>
                        <input type="text" class="form-control" name="usermiddlename" value="{{ $profile->usermiddlename }}">
                        <div class="alert alert-danger" style="display:none"></div>
                    </div>
                    <div class="col-md-4  mb-2">
                        <label for="">Last Name</label>
                        <input type="text" class="form-control" name="userlastname" value="{{ $profile->userlastname }}">
                        <div class="alert alert-danger" style="display:none"></div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4  mb-2">
                        <label for="">Email</label>
                        <input type="email" class="form-control" name="email" value="{{ $profile->email }}">
                        <div class="alert alert-danger" style="display:none"></div>
                    </div>

                    <div class="col-md-4  mb-2">
                        <label for="">Email 1</label>
                        <input type="email" class="form-control" name="useremail1" value="{{ $profile->useremail1 }}">
                        <div class="alert alert-danger" style="display:none"></div>
                    </div>
                    <div class="col-md-4  mb-2">
                        <label for="">Email 2</label>
                        <input type="email" class="form-control" name="useremail2" value="{{ $profile->useremail2 }}">
                        <div class="alert alert-danger" style="display:none"></div>
                    </div>

                </div>
                <div class="row">
                    <div class="col-md-4  mb-2">
                        <label for="">Password</label>
                        <input type="password" class="form-control" name="password" required>
                        <div class="alert alert-danger" style="display:none"></div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4  mb-2">
                        <label for="">Phone</label>
                        <input type="text" class="form-control" name="userphone"  value="{{ $profile->userphone }}">
                        <div class="alert alert-danger" style="display:none"></div>
                    </div>
                    <div class="col-md-4  mb-2">
                        <label for="">Mobile</label>
                        <input type="text" class="form-control" name="usermobile1" value="{{ $profile->usermobile1 }}">
                        <div class="alert alert-danger" style="display:none"></div>
                    </div>
                    <div class="col-md-4  mb-2">
                        <label for="">Alternative Mobile</label>
                        <input type="text" class="form-control" name="usermobile2"  value="{{ $profile->usermobile2 }}">
                        <div class="alert alert-danger" style="display:none"></div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6  mb-2">
                        <label for="">Address 1</label>
                        <input type="text" class="form-control" name="useraddress1" value="{{ $profile->useraddress1 }}">
                        <div class="alert alert-danger" style="display:none"></div>
                    </div>
                    <div class="col-md-6  mb-2">
                        <label for="">Address 2</label>
                        <input type="text" class="form-control" name="useraddress2" value="{{ $profile->useraddress2 }}">
                        <div class="alert alert-danger" style="display:none"></div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-3  mb-2">
                        <label for="">City</label>
                        <input type="text" class="form-control" name="usercity" value="{{ $profile->usercity }}">
                        <div class="alert alert-danger" style="display:none"></div>
                    </div>
                    <div class="col-md-3  mb-2">
                        <label for="">State</label>
                        <input type="text" class="form-control" name="userstate" value="{{ $profile->userstate }}">
                        <div class="alert alert-danger" style="display:none"></div>
                    </div>
                    <div class="col-md-3  mb-2">
                        <label for="">Country</label>
                        <input type="text" class="form-control" name="usercountry" value="{{ $profile->usercountry }}">
                        <div class="alert alert-danger" style="display:none"></div>
                    </div>
                    <div class="col-md-3  mb-2">
                        <label for="">Pincode</label>
                        <input type="text" class="form-control" name="userpincode" value="{{ $profile->userpincode }}">
                        <div class="alert alert-danger" style="display:none"></div>
                    </div>
                    <!-- <div class="col-md-6  mb-2">
                        <label for="">User Role</label>
                        <!-- 1:Admin, 2:Partner, 3:Customer -->
                        <!-- <select name="userrole" id="userrole">
                            <option value="">Please select role</option>
                            <option value="1">Admin</option>
                            <option value="2">Partner</option>
                        </select>
                        <div class="alert alert-danger" style="display:none"></div>
                    </div> -->
                    <div class="col-md-12 ">
                        <!-- <button type="submit" class="btn btn-primary popup-btn">Submit</button>
                        <button class="btn btn-secondary popup-btn" data-dismiss="modal">Close</button> -->
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>






@endsection