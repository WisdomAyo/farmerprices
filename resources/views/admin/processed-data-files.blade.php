
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
                        <h4 class="page-title mb-0 font-size-18">PROCESSED DATA FILES</h4>

                        <div class="page-title-right">
                            <ol class="breadcrumb m-0">
                                <li class="breadcrumb-item"><a href="javascript: void(0);">All Processed Files</a></li>
                                <li class="breadcrumb-item active">PROCESSED DATA FILES</li>
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


                            <table id="datatable-buttons" class="table table-striped table-bordered dt-responsive " style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                                <thead>
                                <tr>
                                    <th>S/NO</th>
                                    <th>TRANSACTION DATE</th>
                                    <th>RECORDS</th>
                                    <th>FILE NAME</th>
                                    <th>PROCESSED</th>
                                </tr>
                                </thead>

                                <tbody>
                                <?php $x = 1;?>
                                @foreach($records as $record)
                                    <tr>
                                        <td>{{ $x++ }}.</td>
                                        <td>{{ $record['datadate'] }}</td>
                                        <td>{{ $record['records'] }}</td>
                                        <td>{{ $record['filename'] }}</td>
                                        <td>{{ $record['created_at'] }}</td>
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
