@extends('admin.template')
@section('content')
    <div class="row">
        <div class="box col-md-12">
            <div class="box-inner">
                <div class="box-header well" data-original-title="">
                    <h2><i class="glyphicon glyphicon-plus"></i>Add User</h2>

                </div>
                <div class="box-content">
                    <!-- /.col -->
                    <div class="col-lg-7 col-12">
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

                    <div class="col-12 col-lg-5">
                        <div class="box box-widget widget-user">
                            <!-- Add the bg color to the header using any of the bg-* classes -->
                            <div class="widget-user-header bg-black" style="background: url({{URL::to('new_dashboard_assets/images/gallery/full/10.jpg')}}) center center;">
                                <h3 class="widget-user-username">{{ucwords($row->firstname .''.$row->lastname)}}</h3>
                                <h6 class="widget-user-desc">{{$row->user_level}}</h6>
                            </div>
                            <div class="widget-user-image">
                                <img class="rounded-circle" src="{{URL::to('new_dashboard_assets/avater.svg')}}" alt="User Avatar">
                            </div>
                            <div class="box-footer">
                                <div class="row">
                                    <div class="col-sm-4">
                                        <div class="description-block">
                                            <a href=""><i class="fa fa-arrow-right mr-5"></i>View Riders</a>
                                        </div>
                                        <!-- /.description-block -->
                                    </div>
                                    <!-- /.col -->
                                    <div class="col-sm-4 br-1 bl-1">
                                        <div class="description-block">
                                            <a href=""><i class="fa fa-arrow-right mr-5"></i>View Riders Report</a>
                                        </div>
                                        <!-- /.description-block -->
                                    </div>
                                    <!-- /.col -->
                                    <div class="col-sm-4">
                                        <div class="description-block">
                                            <a href=""><i class="fa fa-arrow-right mr-5"></i>All Motorcycle </a>

                                        </div>
                                        <!-- /.description-block -->
                                    </div>
                                    <!-- /.col -->
                                </div>
                                <!-- /.row -->
                            </div>
                        </div>


                    </div>

                    @endforeach

                </div>
                <!-- /.row -->

                </section>

                <section class="content">
                @foreach($user as $row)
                    <!-- Basic Forms -->
                        <div class="box">
                            <div class="box-header with-border">
                                <h4 class="box-title">Update Profile</h4>

                            </div>
                            <!-- /.box-header -->

                            <div class="box-body">
                                <div class="row">
                                    <div class="col">

                                        <form role="form" method="post" class="validate"action=""  enctype="multipart/form-data">
                                            {{ csrf_field() }}


                                            <div class="form-group">
                                                <label class="control-label" for="location">Firstname</label>
                                                <input type="text" name="firstname" class="form-control required" placeholder="Enter Firstname" required="required" value="{{$row->firstname}}">
                                            </div>

                                            <div class="form-group">
                                                <label class="control-label" for="location">lastname</label>
                                                <input type="text" name="lastname" class="form-control required" placeholder="Enter Lastname" required="required" value="{{$row->lastname}}">
                                            </div>



                                            <div class="form-group">
                                                <label class="control-label" for="location">Email Address</label>
                                                <input type="email"  class="form-control required" placeholder="Enter Email Address" required="required" disabled="disabled" value="{{$row->email}}">
                                            </div>

                                            <div class="form-group">
                                                <label class="control-label" for="location">Phone Number</label>
                                                <input type="text" name="phone" class="form-control required" placeholder="Enter Phone number" required="required" value="{{$row->phone}}">
                                            </div>

                                            <div class="form-group">
                                                <label class="control-label" for="location">Address</label>
                                                <input type="text" name="address" class="form-control required" placeholder="Address" required="required" value="{{$row->address}}">
                                            </div>



                                            <input type="hidden" name="id"  value="{{$row->id}}">
                                            <input type="hidden" name="email"  value="{{$row->email}}">

                                            <button type="submit" class="btn btn-custom"><i class="glyphicon glyphicon-plus"></i>Update Account</button>
                                        </form>

                                    </div>
                                </div>
                            </div>
                            <!--/span-->

                        </div><!--/row-->


                </section>
                <!-- /.content -->
                @endforeach
            </div>
            <!-- /.content-wrapper -->
@endsection
