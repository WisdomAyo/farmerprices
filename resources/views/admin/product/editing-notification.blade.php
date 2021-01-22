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
                        <h4 class="page-title mb-0 font-size-18">Editing Notification Details</h4>

                        <div class="page-title-right">
                            <ol class="breadcrumb m-0">
                                <li class="breadcrumb-item"><a href="javascript: void(0);">Editing Notification Details</a></li>
                                <li class="breadcrumb-item active">Editing Notification Details</li>
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

                        <form action="{{route('update.notification')}}" role="form" method="post" class="validate" enctype="multipart/form-data">
                        {{ csrf_field() }}

                        @foreach($notification as $row)
                        <div class="form-group">
                            <label class="control-label" for="shop_name">Title</label>
                            <input type="text" name="title" class="form-control required" placeholder="Enter Title" value="{{$row->title}}" required>
                        </div>



                        <div class="form-group">
                            <label class="control-label" for="description">Description</label>
                            <textarea name="content_i" placeholder="Description" rows="3" class="form-control required" required>
                                {{$row->content}}
                            </textarea>
                        </div>
                        <div class="form-group">
                            <label class="control-label" for="latitude">External Links</label>
                            <input type="text" name="external_links" class="form-control required" id="latitude" placeholder="External Links" required value="{{$row->external_links}}">
                        </div>

                        <div class="form-group">
                            <p>Current Image</p>
                            <img src="{{URL::to('uploadedFiles/images/'.$row->images)}}" width="40" />
                            <br/><br />

                            <label class="control-label" for="image">Change Image ?</label>
                            <input type="file" multiple name="post_image"  size="20"/>
                            <input name="id" value="{{$row->id}}" type="hidden" />

                        </div>
                        @endforeach




                        <button type="submit" class="btn btn-custom"><i class="glyphicon glyphicon-plus"></i> Update Notification</button>
                    </form>

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
@endsection
