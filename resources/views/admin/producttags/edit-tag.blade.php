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
                                            <h4 class="page-title mb-0 font-size-18">Update Tag </h4>

                                            <div class="page-title-right">
                                                <ol class="breadcrumb m-0">
                                                    <li class="breadcrumb-item"><a href="javascript: void(0);">Update Tag</a></li>
                                                    <li class="breadcrumb-item active">Update Tag</li>
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
                                        <form role="form" method="post" class="validate"  action="{{ route('update.tags.now')}}"  enctype="multipart/form-data">
                                            {{ csrf_field() }}


                                            @foreach($category as $row)
                                            <div class="form-group">
                                                <label class="control-label" for="shop_name">Tag Name</label>
                                                <input type="text" name="category_name" class="form-control required" placeholder="Enter Category Name" required="required" value="{{$row->name}}">
                                            </div>

                                            <input type="hidden" name="id"  value="{{$row->id}}">
                                            @endforeach




                                            <button type="submit" class="btn btn-primary"><i class="glyphicon glyphicon-plus"></i> Update Tag</button>
                                        </form>

                        </div>
                    </div>
                </div>
                <!--/span-->

            </div><!--/row-->
        </section>
    </div>


    <script src="{{URL::to('dashboard_assets/stuff/js/category-slide.js')}}"></script>

@endsection
