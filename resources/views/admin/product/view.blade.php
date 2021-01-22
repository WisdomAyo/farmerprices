
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
                        <h4 class="page-title mb-0 font-size-18">All Products</h4>

                        <div class="page-title-right">
                            <ol class="breadcrumb m-0">
                                <li class="breadcrumb-item"><a href="javascript: void(0);">All Products</a></li>
                                <li class="breadcrumb-item active">All Products</li>
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


                            <table id="datatable-buttons" class="table table-striped table-bordered table-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                                <thead>
                                <tr>

                                <th>Id</th>
                                <th>Name</th>
                                <th>Price</th>
                                <th>quantity</th>
                                <th>weight</th>
                                <th>pieces</th>
                                <th>Created</th>
                                <th>Action</th>
                                <th></th>
                                <th></th>
                            </tr>
                            </thead>
                            <tbody>
                            <?php $x =1; ?>
                            @foreach ($allProduct  as $row)

                                <tr>
                                    <td class="center">{{$x++}}</td>
                                    <td class="center"> <a  href="{{URL('admin/products/view/'.$row->id)}}"> {{$row->name}}</a></td>
                                    <td>{{$row->price}}</td>
                                    <td>{{$row->quantity}}</td>
                                    <td>{{$row->weight}}</td>
                                    <td>{{$row->pieces}}</td>

                                    <td class="center">{{$row->created_at}}</td>
                                    <td class="center">
                                        @if($row->status_id == 1)
                                        <form class="form-horizontal "style="width: 80%;" action="{{ route('enabling.Product')}}" method="post">
                                            {{ csrf_field() }}
                                            <input name="action" value="delete" type="hidden" />
                                            <input name="id" value="{{$row->id}}" type="hidden" />
                                            <input name="status_answer" value="2" type="hidden">
                                            <input type="submit" class="btn btn-danger btn-sm" value="Disable">
                                        </form>
                                            @else
                                            <form class="form-horizontal "style="width: 80%;" action="{{ route('enabling.Product')}}" method="post">
                                                {{ csrf_field() }}
                                                <input name="action" value="delete" type="hidden" />
                                                <input name="id" value="{{$row->id}}" type="hidden" />
                                                <input name="status_answer" value="1" type="hidden">
                                                <input type="submit" class="btn btn-success btn-sm" value="Enable">
                                            </form>
                                        @endif


                                    </td>




                                    <td>
                                        <a class="btn btn-info btn-sm" href="{{URL('admin/products/view/'.$row->id)}}">
                                            <i class="glyphicon glyphicon-edit icon-white"></i>
                                            Edit
                                        </a>
                                    </td>


                                    <td>

                                        <form class="form-horizontal "style="width: 80%;" action="{{ route('delete.Product.now')}}" method="post">
                                            {{ csrf_field() }}
                                            <input name="action" value="delete" type="hidden" />
                                            <input name="id" value="{{$row->id}}" type="hidden" />
                                            <input name="status_answer" value="1" type="hidden">
                                            <input type="submit" class="btn btn-danger btn-sm" value="Delete">
                                        </form>


                                    </td>

                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
