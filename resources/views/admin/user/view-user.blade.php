
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
                        <h4 class="page-title mb-0 font-size-18">All Admin User</h4>

                        <div class="page-title-right">
                            <ol class="breadcrumb m-0">
                                <li class="breadcrumb-item"><a href="javascript: void(0);">All Admin User</a></li>
                                <li class="breadcrumb-item active">All Admin user</li>
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
                                <table class="table table-striped table-bordered bootstrap-datatable datatable responsive">
                                    <thead>

                                    <tr>

                                        <th>Id</th>
                                        <th>Name</th>
                                        <th>Email Address</th>
                                        <th>Phone</th>
                                        <th>User Right</th>
                                        <th>Status</th>
                                        <th>Date Created</th>
                                        <th>Action</th>

                                    </tr>
                                    </thead>
                                    <tbody>
                                    <?php $x =1; ?>
                                    @foreach ($user  as $row)

                                        <tr>

                                            <td class="center">{{$x++}}</td>
                                            <td class="center">{{$row->name}}</td>
                                            <td class="center">{{$row->email}}</td>
                                            <td class="center">{{$row->phone}}</td>
                                            <td class="center">{{$row->user_level}}</td>
                                            <td>@if($row->status_id == 1) Enabled @else Disabled @endif </td>
                                            <td class="center">{{$row->created_at}}</td>

                                            @if($row->status_id == 1)
                                            <td class="center">

                                                <form class="form-horizontal "style="width: 80%;" action="{{route('admin.enabling.user')}}" method="post">
                                                    {{ csrf_field() }}
                                                    <input name="action" value="delete" type="hidden" />
                                                    <input name="id" value="{{$row->id}}" type="hidden" />
                                                    <input name="user_status" value="0" type="hidden" />
                                                    <input type="submit" class="btn btn-danger btn-sm" value="Disable">

                                                </form>


                                            </td>
                                                @else
                                            <td class="center">

                                                <form class="form-horizontal "style="width: 80%;" action="#" method="post">
                                                    {{ csrf_field() }}
                                                    <input name="action" value="delete" type="hidden" />
                                                    <input name="id" value="{{$row->id}}" type="hidden" />
                                                    <input name="user_status" value="1" type="hidden" />
                                                    <input type="submit" class="btn btn-success btn-sm" value="Make Active">

                                                </form>


                                            </td>
                                                @endif
                                        </tr>
                                    @endforeach

                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    <!--/span-->
            </div>


    </div>
@endsection
