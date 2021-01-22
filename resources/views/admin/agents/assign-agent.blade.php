    @extends('admin.template')
            @section('content')

                <!-- jQuery library -->
                <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

                <!-- JS & CSS library of MultiSelect plugin -->
                <script src="multiselect/jquery.multiselect.js"></script>
                <link rel="stylesheet" href="multiselect/jquery.multiselect.css">
                <!-- ============================================================== -->
                    <!-- Start right Content here -->
                    <!-- ============================================================== -->
                    <div class="main-content">

                        <div class="page-content">

                            <!-- start page title -->
                            <div class="row">
                                <div class="col-12">
                                    <div class="page-title-box d-flex align-items-center justify-content-between">
                                        <h4 class="page-title mb-0 font-size-18">Assign Agent</h4>

                                        <div class="page-title-right">
                                            <ol class="breadcrumb m-0">
                                                <li class="breadcrumb-item"><a href="javascript: void(0);">Assign Agent</a></li>
                                                <li class="breadcrumb-item active">Assign Agent</li>
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
                                            <form role="form" method="post" class="validate"action="{{ route('admin.assign.agents.store')}}"  enctype="multipart/form-data">
                                        {{ csrf_field() }}

                                        <div class="form-group">
                                            <label class="control-label" for="category">Select Agent</label>
                                            <select  name="agentsid[]" class="js-example-basic-multiple form-control" data-rel="chosen"  >
                                            @foreach($agent as $row)
                                                    <option value="{{$row->id}}">{{$row->name}}</option>
                                                @endforeach
                                            </select>


                                        </div>

                                        <div class="form-group">
                                            <label class="control-label" for="category">Category</label>
                                            <select  name="category" class=" form-control" >
                                                @foreach($category as $row)
                                                    <option value="{{$row->id}}">{{$row->name}}</option>
                                                @endforeach

                                            </select>
                                        </div>

                                <button type="submit" class="btn btn-primary"><i class="glyphicon glyphicon-plus"></i>Assign Agents</button>
                    </form>

                </div>
            </div>
        </div>
        <!--/span-->

    </div><!--/row-->


    </section>
    </div>

                        <script src="{{ asset('dashboard_assets/assets/libs/select2/js/select2.min.js')}}"></script>
    <script src="{{URL::to('dashboard_assets/stuff/js/select-category.js')}}"></script>

    <script src="{{URL::to('dashboard_assets/stuff/js/category-slide.js')}}"></script>
                        <script>
                            $(document).ready(function() {
                                $('.js-example-basic-multiple').select2();
                            });
                        </script>
@endsection
