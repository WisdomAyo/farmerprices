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
                        <h4 class="page-title mb-0 font-size-18">Add Agent</h4>

                        <div class="page-title-right">
                            <ol class="breadcrumb m-0">
                                <li class="breadcrumb-item"><a href="javascript: void(0);">Add Agent</a></li>
                                <li class="breadcrumb-item active">Agent</li>
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
                    <form role="form" method="post" class="validate"action="{{ route('admin.store.agents')}}"  enctype="multipart/form-data">
                        {{ csrf_field() }}

                        <div class="form-group">
                            <label class="control-label" for="location">Agent id</label>
                            <input type="text" name="agent_id" class="form-control required" placeholder="Enter Agent_id" required="required">
                        </div>

                        <div class="form-group">
                            <label class="control-label" for="location">Agent Fullname</label>
                            <input type="text" name="name" class="form-control required" placeholder="Enter Fullname" required="required">
                        </div>



                        <div class="form-group">
                            <label class="control-label" for="location">Email Address</label>
                            <input type="email" name="email" class="form-control required" placeholder="Enter Email Address" required="required">
                        </div>



                        <button type="submit" class="btn btn-primary"><i class="glyphicon glyphicon-plus"></i>Add Agent</button>
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
