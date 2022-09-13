@extends('layouts.admin')

@section('content')

<!-- TODO : Check whether Category needs image. If not, remove image related code -->

<style>
    label{
        font-size:14px;
        font-weight:500;
    }
    input[type="text"],input[type="email"],input[type="password"]{
        height:30px;
    }
</style>

@if (session('status'))
    <div class="alert alert-success">{{ session('status') }}</div>
@endif
<div class="card">
    <div class="card-header">
        <h4>Company Edit Details Page</h4>
    </div>
    <div class="card-body">
        <table class="table table-bordered table-striped">
            <thead>
                <tr>
                    <th>S.No</th>
                    <th>Company Name</th>
                    <th>Company State</th>
                    <th>Company City</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @if(!empty($companySettingVals))
                    <tr>
                        <td>1</td>
                        <td>{{ $companySettingVals->companyname }}</td>
                        <td>{{ $companySettingVals->companystate }}</td>
                        <td>{{ $companySettingVals->companycity }}</td>
                        <td>
                            <button href="#" value="{{ $companySettingVals->id }}" class="editbtn"><i class="far fa-edit"></i></button>
                        </td>
                    </tr>
                @endif
            </tbody>
        </table>

    </div>
</div>

<!-- Start Modal for Edit Category -->

<div class="modal fade" id="EditCompanyModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-xl">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Edit & Update Company Details</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="card">
                    <div class="card-body">
                        <form action="{{ route('admin.update-company') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                            <input type="hidden" name="company_id" id="company_id" value="" />
                            <div class="row">
                                <div class="col-md-6  mb-2">
                                    <label for="">Company Name <span style="color:#ff0000">*</span></label>
                                    <input type="text" class="form-control" id="company_name" name="company_name" value="">
                                    <span id="nameErr" class=""></span>
                                </div>
                                <div class="col-md-6">
                                    <label for="">Company Address1 <span style="color:#ff0000">*</span></label>
                                    <input type="text" class="form-control" id="company_address1" name="company_address1" value="">
                                    <!-- <textarea name="company_address1" id="company_address1" cols="30" rows="3" class="form-control mb-2" placeholder="Company Address1"></textarea> -->
                                    <span id="addressErr" class=""></span>
                                </div>
                                <div class="col-md-6">
                                    <label for="">Company Address2</label>
                                    <input type="text" class="form-control" id="company_address2" name="company_address2" value="">
                                    <!-- <textarea name="company_address2" id="company_address2" cols="30" rows="3" class="form-control mb-2" placeholder="Company Address2"></textarea> -->
                                </div>
                                <div class="col-md-4 mb-2">
                                    <label for="" class="">Company City&nbsp;&nbsp;<span style="color:#ff0000">*</span></label><input type="text" class="form-control" name="company_city" id="company_city" value="">
                                    <span id="cityErr" class=""></span>
                                </div>
                                <div class="col-md-4 mb-2">
                                    <label for="" class="">Company State&nbsp;&nbsp;<span style="color:#ff0000">*</span></label><input type="text" class="form-control" name="company_state" id="company_state" value="">
                                    <span id="stateErr" class=""></span>
                                </div>
                                <div class="col-md-4 mb-2">
                                    <label for="" class="">Company Pincode&nbsp;&nbsp;<span style="color:#ff0000">*</span></label><input type="text" class="form-control" name="company_pincode" id="company_pincode" value="">
                                    <span id="pincodeErr" class=""></span>
                                </div>
                                <div class="col-md-4 mb-2">
                                    <label for="" class="">Company Phone&nbsp;&nbsp;<span style="color:#ff0000">*</span></label><input type="text" class="form-control" name="company_phone" id="company_phone" value="">
                                    <span id="phoneErr" class=""></span>
                                </div>
                                <div class="col-md-4 mb-2">
                                    <label for="" class="">Company Mobile1&nbsp;&nbsp;<span style="color:#ff0000">*</span></label><input type="text" class="form-control" name="company_mobile1" id="company_mobile1" value="">
                                </div>
                                <div class="col-md-4 mb-2">
                                    <label for="" class="">Company Mobile2&nbsp;&nbsp;</label><input type="text" class="form-control" name="company_mobile2" id="company_mobile2" value="">
                                </div>
                                <div class="col-md-4 mb-2">
                                    <label for="" class="">Company Email1&nbsp;&nbsp;<span style="color:#ff0000">*</span></label><input type="text" class="form-control" name="company_email1" id="company_email1" value="">
                                    <span id="emailErr" class=""></span>
                                </div>
                                <div class="col-md-4 mb-2">
                                    <label for="" class="">Company Email2&nbsp;&nbsp;</label><input type="text" class="form-control" name="company_email2" id="company_email2" value="">
                                </div>
                                <div class="col-md-4 mb-2">
                                    <label for="" class="">Company Website&nbsp;&nbsp;<span style="color:#ff0000">*</span></label><input type="text" class="form-control" name="company_website" id="company_website" value="">
                                    <span id="websiteErr" class=""></span>
                                </div>
                                <div class="col-md-4 mb-2">
                                    <label for="" class="">Company GST&nbsp;&nbsp;</label><input type="text" class="form-control" name="company_gstin" id="company_gstin" value="">
                                    <span id="gstErr" class=""></span>
                                </div>
                                <div class="col-md-4 mb-2">
                                    <label for="" class="">Company IEC No&nbsp;&nbsp;<span style="color:#ff0000">*</span></label><input type="text" class="form-control" name="company_iecno" id="company_iecno" value="">
                                    <span id="iecNoErr" class=""></span>
                                </div>

                                <div class="col-md-12">
                                    <button type="submit" class="btn btn-primary popup-btn" onclick="return companySettingValidation()">Update</button>
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

            var company_id = $(this).val();
            // alert(category_id);

            $('#EditCompanyModal').modal('show');

            $.ajax({
                type: "POST",
                url: "{{route('admin.edit-company')}}",
                data   : {"_token": "{{ csrf_token() }}", "company_id":company_id},
                success: function(response) {
                    //console.log(response);return false;
                    if($.trim(response.company) != ""){
                        $('#company_name').val(response.company.companyname);
                        $('#company_address1').val(response.company.companyaddress1);
                        $('#company_address2').val(response.company.companyaddress2);
                        $('#company_city').val(response.company.companycity);
                        $('#company_state').val(response.company.companystate);
                        $('#company_pincode').val(response.company.companypincode);
                        $('#company_phone').val(response.company.companyphone);
                        $('#company_mobile1').val(response.company.companymobile1);
                        $('#company_mobile2').val(response.company.companymobile2);
                        $('#company_email1').val(response.company.companyemail1);
                        $('#company_email2').val(response.company.companyemail2);
                        $('#company_website').val(response.company.companywebsite);
                        $('#company_gstin').val(response.company.companygstin);
                        $('#company_iecno').val(response.company.companyiecno);
                        $('#company_id').val(response.company.id);
                    }else{
                        alert("Invalid Company Id");
                    }
                }
            });
        });
    });
    function companySettingValidation(){
        
        var companyName        = $.trim($("#company_name").val());
        var companyAddress      = $.trim($("#company_address1").val());
        var companyCity         = $.trim($("#company_city").val());
        var companyState       = $.trim($("#company_state").val());
        var companyPincode        = $.trim($("#company_pincode").val());
        var companyPhone    = $.trim($("#company_phone").val());
        var companyEmail   = $.trim($("#company_email1").val());
        var companyWebsite         = $.trim($("#company_website").val());
        var companyGst      = $.trim($("#company_gstin").val());
        var companyIecNo        = $.trim($("#company_iecno").val());

         $("#nameErr").html("");
         $("#phoneErr").html("");
         $("#emailErr").html("");
         $("#addressErr").html("");
         $("#cityErr").html("");
         $("#stateErr").html("");
         $("#pincodeErr").html("");
         $("#websiteErr").html("");
         $("#gstErr").html("");
         $("#iecNoErr").html("");
        
        if(companyName == ''){
            $("#nameErr").addClass('errormsg').html("Please Enter the company name");
            $("#company_name").focus();
            return false;
        }
        if(companyAddress == ''){
            $("#addressErr").addClass('errormsg').html("Please Enter the company address");
            $("#company_address1").focus();
            return false;
        }
        if(companyCity == ''){
            $("#cityErr").addClass('errormsg').html("Please Enter the company city");
            $("#company_city").focus();
            return false;
        }
        if(companyState == ''){
            $("#stateErr").addClass('errormsg').html("Please Enter the company state");
            $("#company_state").focus();
            return false;
        }
        if(companyPincode == ''){
            $("#pincodeErr").addClass('errormsg').html("Please Enter the company pincode");
            $("#company_pincode").focus();
            return false;
        }
        if(companyPhone == ''){
            $("#phoneErr").addClass('errormsg').html("Please Enter the company phone number");
            $("#company_phone").focus();
            return false;
        }
        var emailRegex = new RegExp(/^([\w\.\-]+)@([\w\-]+)((\.(\w){2,3})+)$/i);
        var valid = emailRegex.test(companyEmail);
        if(!valid){
            $("#emailErr").addClass('errormsg').html("Please Enter the Valid Email Id");
            $("#company_email").focus();
            return false;
        } 
        if(companyWebsite == ''){
            $("#websiteErr").addClass('errormsg').html("Please Enter the company website");
            $("#company_website").focus();
            return false;
        }
    }
        
    
        
    //click function end
</script>
<style type="text/css">
    .errormsg{
        color: red;
    }
</style>


@endsection