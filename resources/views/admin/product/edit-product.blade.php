@extends('admin.template')
@section('content')


    <link href="https://cdn.jsdelivr.net/npm/select2@4.0.13/dist/css/select2.min.css" rel="stylesheet" />
    <script src="https://cdn.jsdelivr.net/npm/select2@4.0.13/dist/js/select2.min.js"></script>

    <!-- ============================================================== -->
    <!-- Start right Content here -->
    <!-- ============================================================== -->
    <div class="main-content">

        <div class="page-content">

            <!-- start page title -->
            <div class="row">
                <div class="col-12">
                    <div class="page-title-box d-flex align-items-center justify-content-between">
                        <h4 class="page-title mb-0 font-size-18">Edit Product</h4>

                        <div class="page-title-right">
                            <ol class="breadcrumb m-0">
                                <li class="breadcrumb-item"><a href="javascript: void(0);">Edit  Product</a></li>
                                <li class="breadcrumb-item active">Edit  Product</li>
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

                            <form action="{{route('editing.product.now_submit')}}" role="form" method="post" class="validate" enctype="multipart/form-data">
                                {{ csrf_field() }}

                                @foreach($Product as $row)
                                <div class="form-group">
                                    <label class="control-label" for="shop_name">Product Name</label>
                                    <input type="text" name="title" class="form-control required" value="{{$row->name}}" placeholder="Enter Product Name" required>
                                </div>



                                <div class="form-group">
                                    <label class="control-label" for="latitude">Price</label>
                                    <input type="number" name="price" class="form-control required" id="datepicker" value="{{$row->price}}" placeholder="Price" required>
                                </div>

                                <div class="form-group">
                                    <label class="control-label" for="latitude">Quantity</label>
                                    <input type="text" name="quantity" class="form-control required" id="datepicker"  value="{{$row->quantity}}" placeholder="Quantity" required>
                                </div>


                                <div class="form-group">
                                    <label class="control-label" for="latitude">Weight</label>
                                    <input type="text" name="weight" class="form-control required" id="datepicker" value="{{$row->weight}}" placeholder="Weight" required>
                                </div>


                                <div class="form-group">
                                    <label class="control-label" for="latitude">Discount</label>
                                    <input type="text" name="discount" class="form-control required" id="datepicker"  value="{{$row->discount}}" placeholder="Discount" required>
                                </div>



                                <div class="form-group">
                                    <label class="control-label" for="category">Stock</label>
                                    <select name="stocks" class="form-control" data-rel="chosen">

                                        <option value="0">Out of stock</option>
                                        <option value="1">In stock</option>


                                    </select>
                                </div>


                                <div class="form-group">
                                    <label class="control-label" for="latitude">Pieces</label>
                                    <input type="text" name="pieces" class="form-control required"  value="{{$row->pieces}}" id="datepicker" placeholder="Pieces" required>
                                </div>

                                <div class="form-group">
                                    <label class="control-label" for="latitude">Price Range</label>
                                    <input type="text" name="pricerange" class="form-control required" id="datepicker" value="{{$row->price_range}}" placeholder="Price Range" required>
                                </div>


                                <div class="form-group">
                                    <label class="control-label" for="description">Long Description</label>
                                    <textarea name="content_ii" placeholder="Description" rows="3" class="form-control required" required>{{$row->long_desc}}</textarea>
                                </div>



                                    <input type="hidden" name="id"  value="{{$row->id}}" placeholder="Price Range" required>

                                @endforeach

                                <div class="form-group">
                                    <label class="control-label" for="image">Image (Optional)</label>
                                    <input type="file" multiple name="post_image[]"  size="20" required="required" />

                                </div>


                                <button type="submit" class="btn btn-primary"><i class="glyphicon glyphicon-plus"></i> Update Product</button>
                            </form>

                            <br /><br />


                                <ul>

                                @foreach($images as $row)

                                    <li style="float: left;list-style: none;">
                                        <img class="img-fluid" src="{{asset('uploadedFiles/images/resize/'.$row->name)}}" alt="Image Description" style="width: 50px;">
                                        <br />

                                        <form style="margin: 5px;" action="{{ route('editing.product.SoftDeleteImage')}}" method="post">
                                            {{ csrf_field() }}
                                            <input name="action" value="delete" type="hidden" />
                                            <input name="id" value="{{$row->id}}" type="hidden" />
                                            <input type="submit" class="btn btn-danger btn-sm" value="remove">
                                        </form>
                                    </li>

                                @endforeach
                                </ul>






                        </div>
                    </div>
                </div>
                <!--/span-->

            </div><!--/row-->

            <div class="modal fade modal-wide" id="mapModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
                 aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                            <h4 class="modal-title">Select location</h4>
                        </div>
                        <div class="modal-body">
                            <div id='map_canvas'></div>
                            <div id="current">Nothing yet...</div>
                            <input type="hidden" id="pick-lat" />
                            <input type="hidden" id="pick-lng" />

                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Close</button>
                            <button type="button" class="btn btn-custom select-location">Select Location</button>
                        </div>
                    </div><!-- /.modal-content -->
                </div><!-- /.modal-dialog -->
            </div>
            <script>
                $(document).ready(function() {
                    $('.js-example-basic-multiple').select2();
                });
            </script>
@endsection
