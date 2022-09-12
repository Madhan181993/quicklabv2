@extends('layouts.admin')

@section('content')


<h4>Admin User Dashboard</h4>
<hr style="border-color:red;">
<div class="row">
    <div class="col-md-6">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title" style="font-size:18px;"> Partner Approvals</h4>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table">
                        <thead class=" text-primary">
                            <th>
                                Approval Details
                            </th>
                            <th>
                                Status
                            </th>
                            <th>
                                Action
                            </th>
                        </thead>
                        <tbody>
                            <tr>
                                <td>
                                    Parnter Registration
                                </td>
                                <td>
                                    Pending
                                </td>
                                <td>
                                    <i class="fa fa-check mr-3"></i>
                                    <i class="fa fa-times"></i>
                                </td>

                            </tr>


                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <div class="col-md-6">
        <div class="card  card-tasks">
            <div class="card-header ">
                <!-- <h5 class="card-category">Backend development</h5> -->
                <h4 class="card-title" style="font-size:18px;">Notifications</h4>
            </div>
            <div class="card-body ">
                <div class="table-full-width table-responsive">
                    <table class="table">
                        <tbody>
                            <tr>
                                <!-- <td>
                                    <div class="form-check">
                                        <label class="form-check-label">
                                            <input class="form-check-input" type="checkbox" checked>
                                            <span class="form-check-sign"></span>
                                        </label>
                                    </div>
                                </td> -->
                                <td class="text-left"><a href="#">"Volume related query" from Contact Form</a></td>
                                <td class="td-actions text-right">
                                    <span style="color:red;">
                                        <i class="fa fa-times"></i>
                                        </span>
                                </td>
                            </tr>
                            <tr>
                                <!-- <td>
                                    <div class="form-check">
                                        <label class="form-check-label">
                                            <input class="form-check-input" type="checkbox">
                                            <span class="form-check-sign"></span>
                                        </label>
                                    </div>
                                </td> -->
                                <td class="text-left"><a href="#">"Dealership Request..." from Contact Form</a></td>
                                <td class="td-actions text-right">
                                <span style="color:red;">
                                        <i class="fa fa-times"></i>
                                        </span>
                                </td>
                            </tr>
                            <tr>
                                <!-- <td>
                                    <div class="form-check">
                                        <label class="form-check-label">
                                            <input class="form-check-input" type="checkbox" checked>
                                            <span class="form-check-sign"></span>
                                        </label>
                                    </div>
                                </td> -->
                                <td class="text-left">Request for information from Contact Form
                                </td>
                                <td class="td-actions text-right">
                                <span style="color:red;">
                                        <i class="fa fa-times"></i>
                                        </span>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>

        </div>
    </div>
</div>
@endsection