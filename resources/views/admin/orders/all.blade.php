
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
                        <h4 class="page-title mb-0 font-size-18">All Orders</h4>

                        <div class="page-title-right">
                            <ol class="breadcrumb m-0">
                                <li class="breadcrumb-item"><a href="javascript: void(0);">All Tags</a></li>
                                <li class="breadcrumb-item active">All Orders</li>
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


                            <table id="datatable-buttons" class="table table-striped table-bordered" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                                <thead>
                                <tr>

                                    <th>Id</th>
                                    <th>Order Name</th>
                                    <th>Status</th>
                                    <th>Date Created</th>
                                    <th>Action</th>
                                    <th>&nbsp;</th>
                                    {{--                                        <th>&nbsp;</th>--}}
                                </tr>
                                </thead>
                                <tbody>
                                <?php $x =1; ?>
                                @foreach ($orders  as $row)

                                    <tr>
                                        <td>{{$x++}}</td>
                                        <td>{{$row->name}}</td>
                                        <td>@if($row->status_id == 1) Enabled @else Disabled @endif </td>
                                        <td>{{$row->created_at}}</td>
                                        <td>

                                            <a class="btn btn-info" href="{{URL('/tags/editing/'.$row->id)}}">
                                                <i class="glyphicon glyphicon-edit icon-white"></i>
                                                Edit
                                            </a>
                                        </td>


                                        <td>

                                            @if($row->status_id == 1)
                                                <form class="form-horizontal " action="{{ route('enabling.tags')}}" method="post">
                                                    {{ csrf_field() }}
                                                    <input name="action" value="delete" type="hidden" />
                                                    <input name="id" value="{{$row->id}}" type="hidden" />
                                                    <input name="status_answer" value="2" type="hidden">
                                                    <input type="submit" class="btn btn-danger" value="Disable">
                                                </form>
                                            @else
                                                <form class="form-horizontal " action="{{ route('enabling.tags')}}" method="post">
                                                    {{ csrf_field() }}
                                                    <input name="action" value="delete" type="hidden" />
                                                    <input name="id" value="{{$row->id}}" type="hidden" />
                                                    <input name="status_answer" value="1" type="hidden">
                                                    <input type="submit" class="btn btn-success " value="Enable">
                                                </form>
                                            @endif


                                        </td>



                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <!-- end col -->
            </div>
            <!-- end row -->

        </div>
        <!-- End Page-content -->

@endsection
