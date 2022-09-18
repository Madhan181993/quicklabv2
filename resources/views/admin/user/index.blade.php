@extends('layouts.admin')

@section('content')


<style>
    label {
        font-size: 14px;
        font-weight: 500;
    }
    input[type="text"],input[type="email"],input[type="password"]{
        height:30px;
    }
</style>

@if (session('status'))
<div class="alert alert-success">{{ session('status') }}</div>
@endif
<h4>User Management</h4>
<div class="card">

    <div class="card-body">
        <a href="{{ url('add-category') }}" class="btn btn-primary button1" data-toggle="modal" data-target="#AddUserModal"> Add User</a>
        <table class="table table-bordered table-striped">
            <thead>
                <tr>
                    <th>Id</th>
                    <th>Code</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Phone</th>
                    <th>Type</th>

                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach($usersList as $key => $user)
                <tr>
                    <td>{{ $key+1 }}</td>
                    <td>{{ $user->usercode }}</td>
                    <td>{{ $user->userfirstname.' '.$user->userlastname }}</td>
                    <td>{{ $user->email }}</td>
                    <td>{{ $user->userphone }}</td>
                    <td >{{ $user->userrole == "1" ? "Admin" : "Partner"}}</td>

                    <td>
                        <button href="#" value="{{ $user->id }}" class="editbtn"><i class="far fa-edit"></i></button>
                        <button onclick="return deleteUser('{{ $user->id }}');" class="deletebtn"><i class="far fa-trash-alt"></i></button>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>

    </div>
</div>

<!-- Modal for Add User -->
<div class="modal fade" id="AddUserModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-xl">
        <div class="modal-content">
            <div class="modal-header">
                <h4>Add User</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="card">
                    <div class="card-body">
                        <form action="{{ url('add-user') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="row">
                                <div class="col-md-2  mb-2">
                                    <label for="">User Code</label>
                                    <input type="text" class="form-control" name="usercode" required>
                                    <div class="alert alert-danger" style="display:none"></div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-4  mb-2">
                                    <label for="">First Name</label>
                                    <input type="text" class="form-control" name="userfirstname" required>
                                    <div class="alert alert-danger" style="display:none"></div>
                                </div>
                                <div class="col-md-4  mb-2">
                                    <label for="">Middle Name</label>
                                    <input type="text" class="form-control" name="usermiddlename">
                                    <div class="alert alert-danger" style="display:none"></div>
                                </div>
                                <div class="col-md-4  mb-2">
                                    <label for="">Last Name</label>
                                    <input type="text" class="form-control" name="userlastname">
                                    <div class="alert alert-danger" style="display:none"></div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-4  mb-2">
                                    <label for="">Email</label>
                                    <input type="email" class="form-control" name="email" required>
                                    <div class="alert alert-danger" style="display:none"></div>
                                </div>
                                <div class="col-md-4  mb-2">
                                    <label for="">Email 1</label>
                                    <input type="email" class="form-control" name="useremail1">
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
                                    <input type="text" class="form-control" name="userphone" required>
                                    <div class="alert alert-danger" style="display:none"></div>
                                </div>
                                <div class="col-md-4  mb-2">
                                    <label for="">Mobile</label>
                                    <input type="text" class="form-control" name="usermobile1">
                                    <div class="alert alert-danger" style="display:none"></div>
                                </div>
                                <div class="col-md-4  mb-2">
                                    <label for="">Alternative Mobile</label>
                                    <input type="text" class="form-control" name="usermobile2">
                                    <div class="alert alert-danger" style="display:none"></div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6  mb-2">
                                    <label for="">Address 1</label>
                                    <input type="text" class="form-control" name="useraddress1">
                                    <div class="alert alert-danger" style="display:none"></div>
                                </div>
                                <div class="col-md-6  mb-2">
                                    <label for="">Address 2</label>
                                    <input type="text" class="form-control" name="useraddress2">
                                    <div class="alert alert-danger" style="display:none"></div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-3  mb-2">
                                    <label for="">City</label>
                                    <input type="text" class="form-control" name="usercity">
                                    <div class="alert alert-danger" style="display:none"></div>
                                </div>
                                <div class="col-md-3  mb-2">
                                    <label for="">State</label>
                                    <input type="text" class="form-control" name="userstate">
                                    <div class="alert alert-danger" style="display:none"></div>
                                </div>
                                <div class="col-md-3  mb-2">
                                    <label for="">Country</label>
                                    <input type="text" class="form-control" name="usercountry">
                                    <div class="alert alert-danger" style="display:none"></div>
                                </div>
                                <div class="col-md-3  mb-2">
                                    <label for="">Pincode</label>
                                    <input type="text" class="form-control" name="userpincode">
                                    <div class="alert alert-danger" style="display:none"></div>
                                </div>
                                <div class="col-md-3 mb-2">
                                    <label class="">User Role&nbsp;&nbsp;</label>
                                        <label for="admin_role" class="">Admin&nbsp;<input type="radio" class="" name="userrole" id="admin_role" value="1"></label>
                                        <label for="partner_role" class="">Partner&nbsp;<input type="radio" class="" name="userrole" id="partner_role" value="2"></label>
                                </div>
                                <div class="col-md-12 ">
                                    <button type="submit" class="btn btn-primary popup-btn">Submit</button>
                                    <button class="btn btn-secondary popup-btn" data-dismiss="modal">Close</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Modal for Add User -->


<!-- Start Modal for Edit User -->

<div class="modal fade" id="EditUserModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-xl">
        <div class="modal-content">
            <div class="modal-header">
                <h4>Edit & Update User</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="card">
                    <div class="card-body">
                        <form action="{{ url('admin/update-user') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                            <input type="hidden" name="user_id" id="user_id" />
                            <div class="row">
                                <div class="col-md-6  mb-2">
                                    <label for="">User Code</label>
                                    <input type="text" class="form-control" name="usercode" id="usercode" required>
                                    <div class="alert alert-danger" style="display:none"></div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-4  mb-2">
                                    <label for="">User First Name</label>
                                    <input type="text" class="form-control" name="userfirstname" id="userfirstname" required>
                                    <div class="alert alert-danger" style="display:none"></div>
                                </div>
                                <div class="col-md-4  mb-2">
                                    <label for="">User Middle Name</label>
                                    <input type="text" class="form-control" name="usermiddlename" id="usermiddlename">
                                    <div class="alert alert-danger" style="display:none"></div>
                                </div>
                                <div class="col-md-4  mb-2">
                                    <label for="">User Last Name</label>
                                    <input type="text" class="form-control" name="userlastname" id="userlastname">
                                    <div class="alert alert-danger" style="display:none"></div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6  mb-2">
                                    <label for="">User Email</label>
                                    <input type="email" class="form-control" name="email" id="email" required>
                                    <div class="alert alert-danger" style="display:none"></div>
                                </div>
                                <div class="col-md-6  mb-2">
                                    <label for="">User Email1</label>
                                    <input type="text" class="form-control" name="useremail1" id="useremail1">
                                    <div class="alert alert-danger" style="display:none"></div>
                                </div>
                                <div class="col-md-6  mb-2">
                                    <label for="">User Email2</label>
                                    <input type="text" class="form-control" name="useremail2" id="useremail2">
                                    <div class="alert alert-danger" style="display:none"></div>
                                </div>
                                <div class="col-md-6  mb-2">
                                    <label for="">User Phone</label>
                                    <input type="text" class="form-control" name="userphone" id="userphone" required>
                                    <div class="alert alert-danger" style="display:none"></div>
                                </div>
                                <div class="col-md-6  mb-2">
                                    <label for="">User Mobile1</label>
                                    <input type="text" class="form-control" name="usermobile1" id="usermobile1">
                                    <div class="alert alert-danger" style="display:none"></div>
                                </div>
                                <div class="col-md-6  mb-2">
                                    <label for="">User Mobile2</label>
                                    <input type="text" class="form-control" name="usermobile2" id="usermobile2">
                                    <div class="alert alert-danger" style="display:none"></div>
                                </div>
                                <div class="col-md-6  mb-2">
                                    <label for="">User Address1</label>
                                    <input type="text" class="form-control" name="useraddress1" id="useraddress1" required>
                                    <div class="alert alert-danger" style="display:none"></div>
                                </div>
                                <div class="col-md-6  mb-2">
                                    <label for="">User Address2</label>
                                    <input type="text" class="form-control" name="useraddress2" id="useraddress2">
                                    <div class="alert alert-danger" style="display:none"></div>
                                </div>
                                <div class="col-md-3  mb-2">
                                    <label for="">User City</label>
                                    <input type="text" class="form-control" name="usercity" id="usercity" required>
                                    <div class="alert alert-danger" style="display:none"></div>
                                </div>
                                <div class="col-md-3  mb-2">
                                    <label for="">User State</label>
                                    <input type="text" class="form-control" name="userstate" id="userstate" required>
                                    <div class="alert alert-danger" style="display:none"></div>
                                </div>
                                <div class="col-md-3  mb-2">
                                    <label for="">User Country</label>
                                    <input type="text" class="form-control" name="usercountry" id="usercountry" required>
                                    <div class="alert alert-danger" style="display:none"></div>
                                </div>
                                <div class="col-md-3  mb-2">
                                    <label for="">User Pincode</label>
                                    <input type="text" class="form-control" name="userpincode" id="userpincode" required>
                                    <div class="alert alert-danger" style="display:none"></div>
                                </div>
                                <div class="col-md-3 mb-2">
                                    <label class="">User Role&nbsp;&nbsp;</label>
                                    <label for="admin_role_update" class="">Admin&nbsp;<input type="radio" class="" name="userrole" id="admin_role_update" value="1"></label>
                                    <label for="partner_role_update" class="">Partner&nbsp;<input type="radio" class="" name="userrole" id="partner_role_update" value="2"></label>
                                </div>
                            </div>
                            <div class="col-md-3  mb-2">
                                <label for="userstatus" class="checkboxLabel">User Status&nbsp;&nbsp;<input type="checkbox" class="form-control" name="userstatus" id="userstatus"></label>
                            </div>

                            <div class="col-md-12 ">
                                <button type="submit" class="btn btn-primary popup-btn">Update</button>
                                <button class="btn btn-secondary popup-btn" data-dismiss="modal">Close</button>
                            </div>
                    </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
</div>

<!-- End Modal for Edit Category -->

@endsection

@section('scripts')
<script>
    $(document).ready(function() {
        setTimeout(function() {
            $('.alert-success').hide();
        }, 2000); // <-- time in milliseconds

        

        $(document).on('click', '.editbtn', function() {

            var user_id = $(this).val();
            // alert(category_id);

            $('#EditUserModal').modal('show');

            $.ajax({
                type: "POST",
                url: "{{route('admin.edit-user')}}",
                data: {
                    "_token": "{{ csrf_token() }}",
                    "user_id": user_id
                },
                success: function(response) {
                    // console.log(response.user.name);
                    $('#usercode').val(response.user.usercode);
                    $('#userfirstname').val(response.user.userfirstname);
                    $('#userlastname').val(response.user.userlastname);
                    $('#usermiddlename').val(response.user.usermiddlename);
                    $('#usercity').val(response.user.usercity);
                    $('#userstate').val(response.user.userstate);
                    $('#email').val(response.user.email);
                    $('#useremail1').val(response.user.useremail1);
                    $('#useremail2').val(response.user.useremail2);
                    $('#userphone').val(response.user.userphone);
                    $('#usermobile1').val(response.user.usermobile1);
                    $('#usermobile2').val(response.user.usermobile2);
                    $('#useraddress1').val(response.user.useraddress1);
                    $('#useraddress2').val(response.user.useraddress2);
                    $('#usercountry').val(response.user.usercountry);
                    $('#userpincode').val(response.user.userpincode);

                    // alert(response.user.userrole);
                    // let element = document.getElementById("userrole");
                    // if (typeof element != "undefined") {
                    //     alert("GOT THERE");
                    //     }else{
                    //         alert("NOT AVAILABLE");
                    //     }
                    //     alert(document.getElementById('userrole').value);
                    // document.getElementById('userrole').value = response.user.userrole;
                    // element.value = response.user.userrole;


                    if (response.user.userrole == 1){
                        $("#admin_role_update").attr("checked",true);
                    }else if(response.user.userrole == 2){
                        $("#partner_role_update").attr('checked', true);
                    }

                    // Setting the Checkboxes
                    if (response.user.userstatus == 1) {
                        $('input[name=userstatus]').attr('checked', true);
                    } else {
                        $('input[name=userstatus]').attr('checked', false);
                    }

                    $("#user_id").val(user_id);

                }
            });
        });
    });
    function deleteUser(id) {
        if(confirm('Are you sure want to delete user?')){
            $.ajax({
                type: "POST",
                url: "{{route('admin.delete-user')}}",
                data: {
                    "_token": "{{ csrf_token() }}",
                    "user_id": id
                },
                success: function(response) {

                }
            });
        }
    }
</script>

@endsection