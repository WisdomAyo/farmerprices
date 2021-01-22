
@extends('admin.template')
@section('content')

    <style>
        li {
            list-style: none;
        }
    </style>


    <!-- ============================================================== -->
    <!-- Start right Content here -->
    <!-- ============================================================== -->
    <div class="main-content">

        <div class="page-content">

            <!-- start page title -->
            <div class="row">
                <div class="col-12">
                    <div class="page-title-box d-flex align-items-center justify-content-between">
                        <h4 class="page-title mb-0 font-size-18">Add Product Tags</h4>

                        <div class="page-title-right">
                            <ol class="breadcrumb m-0">
                                <li class="breadcrumb-item"><a href="javascript: void(0);">Add Product Tags</a></li>
                                <li class="breadcrumb-item active">Add Product Tags</li>
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

                                    <form role="form" method="post" class="validate"  action="{{route('add.tags.now')}}"  enctype="multipart/form-data">
                                     {{ csrf_field() }}

                                       <div class="form-group">
                                            <label for="inputEmail3" class="control-label">All Tag</label>

                                                    <div class="ul-category">
                                                        {!! $category !!}

                                                    </div>
                                        </div>

                                        <div class="form-group">
                                            <label class="control-label" for="shop_name">Tag Name</label>

                                            <input type="text" name="category_name" class="form-control required" placeholder="Enter Tag Name" required="required" multiple>
                                        </div>



                                        <button type="submit" class="btn btn-primary"><i class="glyphicon glyphicon-plus"></i> Add Tag</button>
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
