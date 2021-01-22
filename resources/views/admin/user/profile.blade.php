
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
                        <h4 class="page-title mb-0 font-size-18">Profile</h4>

                        <div class="page-title-right">
                            <ol class="breadcrumb m-0">
                                <li class="breadcrumb-item"><a href="javascript: void(0);">Profile</a></li>
                                <li class="breadcrumb-item active">Profile</li>
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
                @foreach($user as $row)
                    <!-- Profile Image -->
                        <div class="box">
                            <div class="box-body box-profile">
                                <div class="row">
                                    <div class="col-md-8 col-12">
                                        <div class="profile-user-info">
                                            <p>Email :<span class="text-gray pl-10">{{$row->email}}</span> </p>
                                            <p>Phone :<span class="text-gray pl-10">{{$row->phone}}</span></p>
                                            <p>Address :<span class="text-gray pl-10">{{$row->address}}</span></p>
                                            <p>Level :<span class="text-gray pl-10">{{$row->user_level}}</span></p>
                                        </div>
                                    </div>


                                </div>
                            </div>
                            <!-- /.box-body -->
                        </div>


                </div>
                <!-- /.col -->

                @endforeach

            </div>
        </div>
    </div>
    </div>

    <!-- /.content-wrapper -->
@endsection
