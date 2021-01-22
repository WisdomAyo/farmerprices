<!doctype html>
<html lang="en">



<head>
    <meta charset="utf-8" />
    <title>FarmersPrice - Login </title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="farmers Price" name="description" />
    <meta content="farmers Price" name="author" />
    <!-- App favicon -->
    <link rel="shortcut icon" href="">

    <!-- Bootstrap Css -->
    <link href="{{ asset('dashboard_assets/assets/css/bootstrap.min.css')}}" id="bootstrap-style" rel="stylesheet" type="text/css" />
    <!-- Icons Css -->
    <link href="{{ asset('dashboard_assets/assets/css/icons.min.css')}}" rel="stylesheet" type="text/css" />
    <!-- App Css-->
    <link href="{{ asset('dashboard_assets/assets/css/app.min.css')}}" id="app-style" rel="stylesheet" type="text/css" />

</head>

<body>

<div class="account-pages my-5 ">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8 col-lg-6 col-xl-5">
                <div class="card overflow-hidden">
                    <div class="bg-login text-center">
                        <div class="bg-login-overlay">
                            <img src="{{ asset('home/FARMERSPRICE.png')}}" style="width: 200px; margin-top: 60px;" />
{{--                            <img src="{{ asset('dashboard_assets/front-page-new2.png')}}" style="margin-bottom: 20px;margin-left:50px; width: 60%;">--}}
                        </div>
                        <div class="position-relative">
                            <br /><br />
                            <p class="text-white mb-0" style="margin-top: 20px;">Sign to Farmers Price .</p>
                            <a href="index.html" class="logo logo-admin mt-4">

                            </a>
                        </div>
                    </div>
                    <div class="card-body pt-5">
                        <div class="p-2">
                            <form class="form-horizontal" action="{{ route('loginNow') }}">
                                {{ csrf_field() }}

                                {{ csrf_field() }}

                                @if ($errors->has('message'))
                                    <div class="alert alert-info">
                                        <strong>{{ $errors->first('message') }}</strong>
                                    </div>
                                @endif

                                @if ($errors->has('password'))
                                    <div class="alert alert-info">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </div>
                                @endif
                                @if ($errors->has('email'))
                                    <div class="alert alert-info">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </div>
                                @endif

                                <div class="form-group">
                                    <label for="username">Username</label>
                                    <input type="text" class="form-control" name="email" id="username" placeholder="Enter email">
                                </div>

                                <div class="form-group">
                                    <label for="userpassword">Password</label>
                                    <input type="password" class="form-control" name="password" id="userpassword" placeholder="Enter password">
                                </div>


                                <div class="mt-3">
                                    <button class="btn btn-primary btn-block waves-effect waves-light" type="submit">Log In</button>
                                </div>

                                {{--                                <div class="mt-4 text-center">--}}
                                {{--                                    <a href="pages-recoverpw.html" class="text-muted"><i class="mdi mdi-lock mr-1"></i> Forgot your password?</a>--}}
                                {{--                                </div>--}}
                            </form>
                        </div>

                    </div>
                </div>
                <div class="mt-1 text-center">
                    <p>© 2020 Farmers Price </p>
                </div>

            </div>
        </div>
    </div>
</div>

<!-- JAVASCRIPT -->
<script src="{{ asset('dashboard_assets/assets/libs/jquery/jquery.min.js')}}"></script>
<script src="{{ asset('dashboard_assets/assets/libs/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
<script src="{{ asset('dashboard_assets/assets/libs/metismenu/metisMenu.min.js')}}"></script>
<script src="{{ asset('dashboard_assets/assets/libs/simplebar/simplebar.min.js')}}"></script>
<script src="{{ asset('dashboard_assets/assets/libs/node-waves/waves.min.js')}}"></script>

<script src="{{ asset('dashboard_assets/assets/js/app.js')}}"></script>

</body>


</html>
