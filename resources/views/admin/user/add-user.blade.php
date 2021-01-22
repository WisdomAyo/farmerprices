
@extends('admin.template')
@section('content')


    <!-- ============================================================== -->
    <!-- Start right Content here -->
    <!-- ============================================================== -->
    <div class="main-content">

        <div class="page-content">

            <!-- start page title -->
            <div class="row">
                <div class="col-12">
                    <div class="page-title-box d-flex align-items-center justify-content-between">
                        <h4 class="page-title mb-0 font-size-18">Create User</h4>

                        <div class="page-title-right">
                            <ol class="breadcrumb m-0">
                                <li class="breadcrumb-item"><a href="javascript: void(0);">Create User</a></li>
                                <li class="breadcrumb-item active">Create user</li>
                            </ol>
                        </div>

                    </div>
                </div>
            </div>
            <!-- end page title -->

            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">

                            <form role="form" method="post" class="validate"action="{{ route('admin.store.users')}}"  enctype="multipart/form-data">
                                {{ csrf_field() }}


                                <div class="form-group">
                                    <label class="control-label" for="location">Fullname</label>
                                    <input type="text" name="name" class="form-control required" placeholder="Enter Fullname" required="required">
                                </div>



                                <div class="form-group">
                                    <label class="control-label" for="location">Email Address</label>
                                    <input type="email" name="email" class="form-control required" placeholder="Enter Email Address" required="required">
                                </div>

                                <div class="form-group">
                                    <label class="control-label" for="location">Phone Number</label>
                                    <input type="text" name="phone" class="form-control required" placeholder="Enter Phone number" required="required">
                                </div>

                                <div class="form-group">
                                    <label class="control-label" for="location">Address</label>
                                    <input type="text" name="address" class="form-control required" placeholder="Address" required="required">
                                </div>

                                <div class="form-group">
                                    <label class="control-label" for="location">User Access Level</label>
                                    <select name="access_level" class="form-control required">
                                        <option value="Super Admin">Super Admin</option>
                                        <option value="Admin">sub Admin</option>
                                    </select>

                                </div>




                                <div class="form-group">
                                    <label class="control-label" for="location">Password</label>
                                    <input type="password" name="password" class="form-control"  required="required">
                                </div>



                                <button type="submit" class="btn btn-primary"><i class="glyphicon glyphicon-plus"></i>Add User</button>
                            </form>

                        </div>
                    </div>
                </div>
            </div>
        </div>

                <!--/span-->

    <script src="{{URL::to('dashboard_assets/stuff/js/select-category.js')}}"></script>

    <script src="{{URL::to('dashboard_assets/stuff/js/category-slide.js')}}"></script>
@endsection
