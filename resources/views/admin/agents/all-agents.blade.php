
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
                        <h4 class="page-title mb-0 font-size-18">All Agents</h4>

                        <div class="page-title-right">
                            <ol class="breadcrumb m-0">
                                <li class="breadcrumb-item"><a href="javascript: void(0);">All Agents</a></li>
                                <li class="breadcrumb-item active">All Agents</li>
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


                            <table id="datatable-buttons" class="table table-striped table-bordered" style="border-collapse: collapse; border-spacing: 0;">
                                <thead>
                                <tr>

                                <th>Id</th>
                                <th>Agent ID</th>
                                <th>Name</th>
                                    <th>Category</th>
                                <th>Email</th>
                                <th>Created</th>

                            </tr>
                            </thead>
                            <tbody>
                            <?php $x =1; ?>
                            @foreach ($agent  as $row)

                                <tr>
                                    <td class="center">{{$x++}}</td>


                                    <td>{{$row->agent_id}} </td>
                                    <td>{{$row->name}} </td>
                                    <td>{{$row->device_owner}}</td>

                                    <td>{{$row->email}} </td>
                                    <td>{{$row->created_at}}</td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>

                            {{ $agent->links() }}

                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
