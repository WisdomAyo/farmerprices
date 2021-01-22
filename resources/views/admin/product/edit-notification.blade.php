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
                        <h4 class="page-title mb-0 font-size-18">Notification Details</h4>

                        <div class="page-title-right">
                            <ol class="breadcrumb m-0">
                                <li class="breadcrumb-item"><a href="javascript: void(0);">Notification Details</a></li>
                                <li class="breadcrumb-item active">Notification Details</li>
                            </ol>
                        </div>

                    </div>
                </div>
            </div>
            <!-- end page title -->

            <div class="row">
                <div class="col-12">


                    @if(session('response'))
                        <div class="alert alert-success alert-dismissible fade show" role="alert">
                            <i class="mdi mdi-check-all mr-2"></i> {{session('response')}}
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">×</span>
                            </button>
                        </div>
                    @endif


                    <div class="card">
                        <div class="card-body">

                            <form action="{{route('admin.updating.days.notification')}}" method="post" class="form-element" >
                                {{ csrf_field() }}
                                <div class="box-controls pull-right">

                                    <div class="form-group col-md-6">
                                        <input type="datetime-local" name="days" class="form-control required" id="datepicker" placeholder="To" required>
                                    </div>
                                    @foreach($notification as $row)
                                    <input name="id" value="{{$row->id}}" type="hidden" />
                                    @endforeach


                                    <div class="d-flex align-items-center" style="float: left;">
                                        <button type="submit" class="btn btn-primary" style="margin-left: 20px;"> Extend Days</button>
                                    </div>

                                </div>
                            </form>


                    </div>
                </div>

                        <div class="row">
                            <div class="col-12">
                                <div class="card">
                                    <div class="card-body">

                                        @foreach($notification as $row)
                                            <!-- Profile Image -->
                                                <div class="box">
                                                    <div class="box-body box-profile">
                                                        <div class="row">

                                                                <div class="profile-user-info">
                                                                    <p><b>Title </b>: <span class="text-gray pl-10">{{$row->title}}</span> </p>
                                                                    <p><b>Content </b>: <span class="text-gray pl-10">{{$row->content}}</span></p>
                                                                    <p><b>External Links </b>:<span class="text-gray pl-10">{{$row->external_links}}</span></p>
                                                                    <p><b>Time Range</b> : <span class="text-gray pl-10"> From : ({{$row->range_from}})  TO: ({{$row->range_to}} )</span></p>
                                                                    <p><b>Images </b>: <span class="text-gray pl-10"><img src="{{URL::to('uploadedFiles/images/'.$row->images)}}" width="40" /></span></p>
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

                        <div class="row">
                            <div class="col-12">
                                <div class="card">
                                    <div class="card-body">
                                    <h4>All Categories </h4>

                                        <div class="box">
                                            <div class="box-body box-profile">
                                                <div class="row">
                                                    <div class="col-md-8 col-12">
                                                        <?php $x =1; ?>
                                                        @foreach($allnotification_cat as $row)
                                                        <div class="profile-user-info">
                                                            <p>{{$x++}} :<span class="text-gray pl-10"> {{$row->name}}</span>
                                                            </p>
                                                            <form class="form-horizontal " action="{{ route('deleting.notification.cat')}}" method="post">
                                                                {{ csrf_field() }}
                                                                <input name="action" value="delete" type="hidden" />
                                                                <input name="id" value="{{$row->id}}" type="hidden" />
                                                                <input name="status_answer" value="1" type="hidden">
                                                                <input type="submit" class="glyphicon glyphicon-trash icon-white" value="Delete" >
                                                            </form>
                                                        </div>
                                                        @endforeach
                                                    </div>


                                                </div>
                                            </div>
                                            <!-- /.box-body -->
                                        </div>


                </div>
                <!-- /.col -->



            </div>

        </div>
    </div>
    </div>

    <!-- /.content-wrapper -->
@endsection
