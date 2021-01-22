
@extends('home.template2')
@section('content')


    <!-- ========== MAIN CONTENT ========== -->
    <main id="content" role="main">
        <!-- breadcrumb -->
        <div class="bg-gray-13 bg-md-transparent">
            <div class="container">
                <!-- breadcrumb -->
                <div class="my-md-3">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb mb-3 flex-nowrap flex-xl-wrap overflow-auto overflow-xl-visble">
                            <li class="breadcrumb-item flex-shrink-0 flex-xl-shrink-1"><a href="#">Home</a></li>
                            <li class="breadcrumb-item flex-shrink-0 flex-xl-shrink-1 active" aria-current="page">My Account</li>
                        </ol>
                    </nav>
                </div>
                <!-- End breadcrumb -->
            </div>
        </div>
        <!-- End breadcrumb -->

        <div class="container">
            <div class="mb-4">
                <h1 class="text-center">My Account</h1>
            </div>

            <div class="my-6 my-xl-8">
                @if(session('response'))
                    <div class="alert alert-success" role="alert">
                        <button type="button" class="close" data-dismiss="alert">x</button>
                        <strong>{{session('response')}}</strong>
                    </div>
                @endif
                <br />


                <div class="row">
                    <div class="col-md-7">
                        <!-- Title -->
                        <div class="border-bottom border-color-1 mb-6">
                            <h3 class="d-inline-block section-title mb-0 pb-2 font-size-26">Login</h3>
                        </div>
                        <p class="text-gray-90 mb-4">Welcome back! Sign in to your account.</p>
                        <!-- End Title -->
                        <form class="js-validate" novalidate="novalidate" action="{{ route('login.in.user') }}" method="post">
                        {{ csrf_field() }}
                            <!-- Form Group -->
                            <div class="js-form-message form-group">
                                <label class="form-label" for="signinSrEmailExample3">Email address
                                    <span class="text-danger">*</span>
                                </label>
                                <input type="email" class="form-control" name="email" id="signinSrEmailExample3" placeholder="Username or Email address" aria-label="Username or Email address" required
                                       data-msg="Please enter a valid email address."
                                       data-error-class="u-has-error"
                                       data-success-class="u-has-success">
                            </div>
                            <!-- End Form Group -->

                            <!-- Form Group -->
                            <div class="js-form-message form-group">
                                <label class="form-label" for="signinSrPasswordExample2">Password <span class="text-danger">*</span></label>
                                <input type="password" class="form-control" name="password" id="signinSrPasswordExample2" placeholder="Password" aria-label="Password" required
                                       data-msg="Your password is invalid. Please try again."
                                       data-error-class="u-has-error"
                                       data-success-class="u-has-success">
                            </div>
                            <!-- End Form Group -->

                            <!-- Checkbox -->
                            <div class="js-form-message mb-3">
                                <div class="custom-control custom-checkbox d-flex align-items-center">
                                    <input type="checkbox" class="custom-control-input" id="rememberCheckbox" name="rememberCheckbox" required
                                           data-error-class="u-has-error"
                                           data-success-class="u-has-success">
                                    <label class="custom-control-label form-label" for="rememberCheckbox">
                                        Remember me
                                    </label>
                                </div>
                            </div>
                            <!-- End Checkbox -->

                            <!-- Button -->
                            <div class="mb-1">
                                <div class="mb-3">
                                    <button type="submit" class="btn btn-primary-dark-w px-5">Login</button>
                                </div>
                                <div class="mb-2">
                                    <a class="text-blue" href="#">Lost your password?</a>
                                </div>
                            </div>
                            <!-- End Button -->
                        </form>
                    </div>

                </div>
            </div>
        </div>
    </main>
    <!-- ========== END MAIN CONTENT ========== -->


@endsection
