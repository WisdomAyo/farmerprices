
@extends('admin.template')
@section('content')
    <style>
        .hidemydata {
            display: none;
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
                        <h4 class="page-title mb-0 font-size-18">Dashboard</h4>

                        <div class="page-title-right">
                            <ol class="breadcrumb m-0">
                                <li class="breadcrumb-item active">Welcome to Farmers Price Dashboard</li>
                            </ol>
                        </div>

                    </div>
                </div>
            </div>
            <!-- end page title -->

            <div class="row">
                <div class="col-xl-3">
                    <div class="card">
                        <div class="card-body">
                            <div class="media">
                                <div class="avatar-sm font-size-20 mr-3">
                                            <span class="avatar-title bg-soft-primary text-primary rounded">
                                                    <i class="mdi mdi-library-books"></i>
                                                </span>
                                </div>
                                <div class="media-body">
                                    <div class="font-size-16 mt-2">{{$category}}- Total category </div>
                                </div>
                            </div>

                            <h4 class="mt-4 hidemydata " id="daily-total-trans-agent"></h4>

                            <div class="row">

                                <div class="col-5 align-self-center">
                                    <div class="progress progress-sm">
                                        <div class="progress-bar bg-primary" role="progressbar" style="width: 62%" aria-valuenow="62" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-body">
                            <div class="media">
                                <div class="avatar-sm font-size-20 mr-3">
                                            <span class="avatar-title bg-soft-primary text-primary rounded">
                                                    <i class="mdi mdi-account-multiple-outline"></i>
                                                </span>
                                </div>
                                <div class="media-body">
                                    <div class="font-size-16 mt-2"> {{$tag}} -  Total Tags</div>

                                </div>
                            </div>


                            <h4 class="mt-4 hidemydata " id="daily-dstv-trans-agent"></h4>
                            <div class="row">

                                <div class="col-5 align-self-center">
                                    <div class="progress progress-sm">
                                        <div class="progress-bar bg-success" role="progressbar" style="width: 62%" aria-valuenow="62" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>


                <!------ end one --->



                <div class="col-xl-3">


                    <div class="card">
                        <div class="card-body">
                            <div class="media">
                                <div class="avatar-sm font-size-20 mr-3">
                                            <span class="avatar-title bg-soft-primary text-primary rounded">
                                                    <i class="mdi mdi-tag"></i>
                                                </span>
                                </div>
                                <div class="media-body">
                                    <div class="font-size-16 mt-2"> {{$orders}} -  Total Orders</div>
                                </div>
                            </div>

                            <h4 class="mt-4 hidemydata" id="daily-gotv-trans-agent"></h4>

                            <div class="row">

                                <div class="col-5 align-self-center">
                                    <div class="progress progress-sm">
                                        <div class="progress-bar bg-primary" role="progressbar" style="width: 62%" aria-valuenow="62" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-body">
                            <div class="media">
                                <div class="avatar-sm font-size-20 mr-3">
                                            <span class="avatar-title bg-soft-primary text-primary rounded">
                                                    <i class="mdi mdi-account-multiple-outline"></i>
                                                </span>
                                </div>
                                <div class="media-body">
                                    <div class="font-size-16 mt-2">1   -  Total Agent</div>

                                </div>
                            </div>

                            <h4 class="mt-4 hidemydata" id="daily-others-trans-agent"></h4>
                            <div class="row">

                                <div class="col-5 align-self-center">
                                    <div class="progress progress-sm">
                                        <div class="progress-bar bg-success" role="progressbar" style="width: 62%" aria-valuenow="62" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>


                <div class="col-xl-6">

                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-body">
                                    <h4 class="card-title mb-4">Overview</h4>

                                    <div>
                                        <div class="pb-3 border-bottom">
                                            <div class="row align-items-center">
                                                <div class="col-8">
                                                    <p class="mb-2">All pending Transactions</p>

                                                    <h4 class="mb-0 hidemydata" id="trans-volume-dstv"></h4>
                                                </div>
                                                <div class="col-4">
                                                    <div class="text-right">
                                                       1

                                                        <div class="progress progress-sm mt-3">
                                                            <div class="progress-bar" role="progressbar" style="width: 62%" aria-valuenow="62" aria-valuemin="0" aria-valuemax="100"></div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="pb-3 border-bottom">
                                            <div class="row align-items-center">
                                                <div class="col-8">
                                                    <p class="mb-2">All Completed Transaction</p>

                                                    <h4 class="mb-0 hidemydata" id="trans-volume-dstv"></h4>
                                                </div>
                                                <div class="col-4">
                                                    <div class="text-right">

                                                        1
                                                        <div class="progress progress-sm mt-3">
                                                            <div class="progress-bar" role="progressbar" style="width: 62%" aria-valuenow="62" aria-valuemin="0" aria-valuemax="100"></div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>


                </div>




            </div>
            <!-- end row -->


        </div>


@endsection

