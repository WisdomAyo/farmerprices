
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
                        <li class="breadcrumb-item flex-shrink-0 flex-xl-shrink-1"><a href="../home/index.html">Home</a></li>
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
        <div class="my-4 my-xl-8">
            <div class="row">
                <div class="col-md-5 ml-xl-auto mr-md-auto mr-xl-0 mb-8 mb-md-0">
                    <!-- Title -->
                    <div class="border-bottom border-color-1 mb-6">
                        <h3 class="d-inline-block section-title mb-0 pb-2 font-size-26">Login</h3>
                    </div>
                    <p class="text-gray-90 mb-4">Welcome back! Sign in to your account.</p>
                    <!-- End Title -->
                    <form class="js-validate" novalidate="novalidate" action="{{ route('login.in.user') }}" method="post">
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
                <div class="col-md-1 d-none d-md-block">
                    <div class="flex-content-center h-100">
                        <div class="width-1 bg-1 h-100"></div>
                        <div class="width-50 height-50 border border-color-1 rounded-circle flex-content-center font-italic bg-white position-absolute">or</div>
                    </div>
                </div>
                <div class="col-md-5 ml-md-auto ml-xl-0 mr-xl-auto">
                    <!-- Title -->
                    <div class="border-bottom border-color-1 mb-6">
                        <h3 class="d-inline-block section-title mb-0 pb-2 font-size-26">Register</h3>
                    </div>
                    <p class="text-gray-90 mb-4">Create new account today to reap the benefits of a personalized shopping experience.</p>
                    <!-- End Title -->
                    <!-- Form Group -->
                    <form class="js-validate" novalidate="novalidate"  action="{{route('signup.now')}}" method="post">
                        {{ csrf_field() }}

                        <div class="js-form-message form-group mb-5">
                            <label class="form-label" for="RegisterSrEmailExample3">First Name
                                <span class="text-danger">*</span>
                            </label>
                            <input type="text" class="form-control" name="firstname" id="RegisterSrEmailExample3" placeholder="Full Name" aria-label="Full Name" required
                                   data-msg="Please enter your first name."
                                   data-error-class="u-has-error"
                                   data-success-class="u-has-success">
                        </div>

                        <div class="js-form-message form-group mb-5">
                            <label class="form-label" for="RegisterSrEmailExample3">Full Name
                                <span class="text-danger">*</span>
                            </label>
                            <input type="text" class="form-control" name="lastname" id="RegisterSrEmailExample3" placeholder="Last Name" aria-label="Last Name" required
                                   data-msg="Please enter your last name."
                                   data-error-class="u-has-error"
                                   data-success-class="u-has-success">
                        </div>

                        <div class="js-form-message form-group mb-5">
                            <label class="form-label" for="RegisterSrEmailExample3">Email address
                                <span class="text-danger">*</span>
                            </label>
                            <input type="email" class="form-control" name="email" id="RegisterSrEmailExample3" placeholder="Email address" aria-label="Email address" required
                                   data-msg="Please enter a valid email address."
                                   data-error-class="u-has-error"
                                   data-success-class="u-has-success">
                        </div>


                        <div class="js-form-message form-group mb-5">
                            <label class="form-label" for="RegisterSrEmailExample3">Phone Number
                                <span class="text-danger">*</span>
                            </label>
                            <input type="text" class="form-control" name="phone" id="RegisterSrEmailExample3" placeholder="Phone Number" aria-label="Phone Number" required
                                   data-msg="Please enter your phone number."
                                   data-error-class="u-has-error"
                                   data-success-class="u-has-success">
                        </div>


                        <div class="js-form-message form-group mb-5">
                            <label class="form-label" for="RegisterSrEmailExample3">Please select trade role
                                <span class="text-danger">*</span>
                            </label>
                            <div class="next-form-item next-row next-form-text-align" label="Please select trade role:">
                                <div class="next-col-10 next-form-item-control">
                                    <div id="tradeRole" class="next-radio-group"><label class=""><span
                                                class="next-radio "><span class="next-radio-inner unpress"></span><input
                                                    type="radio" value="buyer" aria-checked="false" ></span><span
                                                class="next-radio-label">Buyer</span></label><label class=""><span
                                                class="next-radio "><span class="next-radio-inner unpress"></span><input
                                                    type="radio" value="supplier" aria-checked="false"></span><span
                                                class="next-radio-label"> Seller</span></label><label class=""><span
                                                class="next-radio "><span class="next-radio-inner unpress"></span><input
                                                    type="radio" value="both" aria-checked="false"></span><span
                                                class="next-radio-label">Both</span></label></div>
                                    <!-- react-text: 36 --> <!-- /react-text -->
                                    <div class=""></div><!-- react-text: 38 --> <!-- /react-text -->
                                    <div class="schema-form-item-tips"></div>
                                </div>
                            </div>

                        </div>

                        <div class="js-form-message form-group mb-5">
                            <label class="form-label" for="RegisterSrEmailExample3">Password
                                <span class="text-danger">*</span>
                            </label>
                            <input type="password" class="form-control" name="password" id="RegisterSrEmailExample3" placeholder="Password" aria-label="Email address" required
                                   data-msg="Please enter your phone number."
                                   data-error-class="u-has-error"
                                   data-success-class="u-has-success">
                        </div>

                        <div class="js-form-message form-group mb-5">
                            <label class="form-label" for="RegisterSrEmailExample3">Confirm Password
                                <span class="text-danger">*</span>
                            </label>
                            <input type="password" class="form-control" name="password_confirmation" id="RegisterSrEmailExample3" placeholder="Password" aria-label="Email address" required
                                   data-msg="Please enter your phone number."
                                   data-error-class="u-has-error"
                                   data-success-class="u-has-success">
                        </div>




                        <!-- End Form Group -->
                        <p class="text-gray-90 mb-4">Your personal data will be used to support your experience throughout this website, to manage your account, and for other purposes described in our <a href="#" class="text-blue">privacy policy.</a></p>
                        <!-- Button -->
                        <div class="mb-6">
                            <div class="mb-3">
                                <button type="submit" class="btn btn-primary-dark-w px-5">Register</button>
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
