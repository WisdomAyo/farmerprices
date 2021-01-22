<!-- Footer-newsletter -->
<div class="bg-primary py-3">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-7 mb-md-3 mb-lg-0">
                <div class="row align-items-center">
                    <div class="col-auto flex-horizontal-center">
                        <i class="ec ec-newsletter font-size-40" id="strongcolor"></i>
                        <h2 class="font-size-20 mb-0 ml-3" id="strongcolor">Sign up to Newsletter</h2>
                    </div>
                    <div class="col my-4 my-md-0">
                        <h5 class="font-size-15 ml-4 mb-0" id="strongcolor">...and receive <strong>₦1000 coupon for first shopping.</strong></h5>
                    </div>
                </div>
            </div>
            <div class="col-lg-5">
                <!-- Subscribe Form -->
                <form class="js-validate js-form-message">
                    <label class="sr-only" for="subscribeSrEmail">Email address</label>
                    <div class="input-group input-group-pill">
                        <input type="email" class="form-control border-0 height-40" name="email" id="subscribeSrEmail" placeholder="Email address" aria-label="Email address" aria-describedby="subscribeButton" required
                               data-msg="Please enter a valid email address.">
                        <div class="input-group-append">
                            <button type="submit" class="btn btn-dark btn-sm-wide height-40 py-2" id="subscribeButton">Sign Up</button>
                        </div>
                    </div>
                </form>
                <!-- End Subscribe Form -->
            </div>
        </div>
    </div>
</div>
<!-- End Footer-newsletter -->
<!-- Footer-bottom-widgets -->
<div class="pt-8 pb-4 bg-gray-13">
    <div class="container mt-1">
        <div class="row">
            <div class="col-lg-5">
                <div class="mb-6">
                    <a href="#" class="d-inline-block">
                        <img src="{{ asset('home/FARMERSPRICE.png')}}" style="width: 200px;" />
                    </a>
                </div>
                <div class="mb-4">
                    <div class="row no-gutters">
                        <div class="col-auto">
                            <i class="ec ec-support text-primary font-size-56"></i>
                        </div>
                        <div class="col pl-3">
                            <div class="font-size-13 font-weight-light">Got questions? Call us 24/7!</div>
                            <a href="tel:+09070084307" class="font-size-20 text-gray-90">0907 008 4307, </a><a href="tel:+2348063427286" class="font-size-20 text-gray-90">080-6342-7286</a>
                        </div>
                    </div>
                </div>
                <div class="mb-4">
                    <h6 class="mb-1 font-weight-bold">Contact info</h6>
                    <address class="">
                        No 5 Craig street, Ogudu GRA, Lagos
                    </address>
                </div>
                <div class="my-4 my-md-4">
                    <ul class="list-inline mb-0 opacity-7">
                        <li class="list-inline-item mr-0">
                            <a class="btn font-size-20 btn-icon btn-soft-dark btn-bg-transparent rounded-circle" href="#">
                                <span class="fab fa-facebook-f btn-icon__inner"></span>
                            </a>
                        </li>
                        <li class="list-inline-item mr-0">
                            <a class="btn font-size-20 btn-icon btn-soft-dark btn-bg-transparent rounded-circle" href="#">
                                <span class="fab fa-google btn-icon__inner"></span>
                            </a>
                        </li>
                        <li class="list-inline-item mr-0">
                            <a class="btn font-size-20 btn-icon btn-soft-dark btn-bg-transparent rounded-circle" href="#">
                                <span class="fab fa-twitter btn-icon__inner"></span>
                            </a>
                        </li>
                        <li class="list-inline-item mr-0">
                            <a class="btn font-size-20 btn-icon btn-soft-dark btn-bg-transparent rounded-circle" href="#">
                                <span class="fab fa-github btn-icon__inner"></span>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-7">
                <div class="row">
                    <div class="col-12 col-md mb-4 mb-md-0">
                        <h6 class="mb-3 font-weight-bold">Find it Fast</h6>
                        <!-- List Group -->
                        <ul class="list-group list-group-flush list-group-borderless mb-0 list-group-transparent">
                            @foreach($cat as $row)
                                <li><a class="list-group-item list-group-item-action" href="{{URL::to('/categories').'/'.$row->url}}">{{$row->name}}</a></li>
                                @endforeach

                        </ul>
                        <!-- End List Group -->
                    </div>

                    <div class="col-12 col-md mb-4 mb-md-0">
                        <!-- List Group -->
                        <ul class="list-group list-group-flush list-group-borderless mb-0 list-group-transparent mt-md-6">
                            @foreach($cat2 as $row)
                                <li><a class="list-group-item list-group-item-action" href="{{URL::to('/categories').'/'.$row->old_url.'/'.$row->url}}">{{$row->name}}</a></li>
                            @endforeach
                        </ul>
                        <!-- End List Group -->
                    </div>

                    <div class="col-12 col-md mb-4 mb-md-0">
                        <h6 class="mb-3 font-weight-bold">Customer Care</h6>
                        <!-- List Group -->
                        <ul class="list-group list-group-flush list-group-borderless mb-0 list-group-transparent">
                            <li><a class="list-group-item list-group-item-action" href="{{url('login')}}">My Account</a></li>
                            <li><a class="list-group-item list-group-item-action" href="{{route('contact')}}">Customer Service</a></li>
                            <li><a class="list-group-item list-group-item-action" href="{{url('terms-and-conditions')}}">Terms And Condition</a></li>
                            <li><a class="list-group-item list-group-item-action" href="{{url('faq')}}">FAQs</a></li>

                        </ul>
                        <!-- End List Group -->
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Footer-bottom-widgets -->
<!-- Footer-copy-right -->
<div class="bg-gray-14 py-2">
    <div class="container">
        <div class="flex-center-between d-block d-md-flex">
            <div class="mb-3 mb-md-0">© <a href="#" class="font-weight-bold text-gray-90">Farmers Price</a> - All rights Reserved</div>

        </div>
    </div>
</div>
<!-- End Footer-copy-right -->
</footer>
<!-- ========== END FOOTER ========== -->

<!-- ========== SECONDARY CONTENTS ========== -->
<!-- Account Sidebar Navigation -->
<aside id="sidebarContent" class="u-sidebar u-sidebar__lg" aria-labelledby="sidebarNavToggler">
    <div class="u-sidebar__scroller">
        <div class="u-sidebar__container">
            <div class="js-scrollbar u-header-sidebar__footer-offset pb-3">
                <!-- Toggle Button -->
                <div class="d-flex align-items-center pt-4 px-7">
                    <button type="button" class="close ml-auto"
                            aria-controls="sidebarContent"
                            aria-haspopup="true"
                            aria-expanded="false"
                            data-unfold-event="click"
                            data-unfold-hide-on-scroll="false"
                            data-unfold-target="#sidebarContent"
                            data-unfold-type="css-animation"
                            data-unfold-animation-in="fadeInRight"
                            data-unfold-animation-out="fadeOutRight"
                            data-unfold-duration="500">
                        <i class="ec ec-close-remove"></i>
                    </button>
                </div>
                <!-- End Toggle Button -->

                <!-- Content -->
                <div class="js-scrollbar u-sidebar__body">
                    <div class="u-sidebar__content u-header-sidebar__content">
                        <form class="js-validate">
                            <!-- Login -->
                            <div id="login" data-target-group="idForm">
                                <!-- Title -->
                                <header class="text-center mb-7">
                                    <h2 class="h4 mb-0">Welcome Back!</h2>
                                    <p>Login to manage your account.</p>
                                </header>
                                <!-- End Title -->

                                <!-- Form Group -->
                                <div class="form-group">
                                    <div class="js-form-message js-focus-state">
                                        <label class="sr-only" for="signinEmail">Email</label>
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                                        <span class="input-group-text" id="signinEmailLabel">
                                                            <span class="fas fa-user"></span>
                                                        </span>
                                            </div>
                                            <input type="email" class="form-control" name="email" id="signinEmail" placeholder="Email" aria-label="Email" aria-describedby="signinEmailLabel" required
                                                   data-msg="Please enter a valid email address."
                                                   data-error-class="u-has-error"
                                                   data-success-class="u-has-success">
                                        </div>
                                    </div>
                                </div>
                                <!-- End Form Group -->

                                <!-- Form Group -->
                                <div class="form-group">
                                    <div class="js-form-message js-focus-state">
                                        <label class="sr-only" for="signinPassword">Password</label>
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                                    <span class="input-group-text" id="signinPasswordLabel">
                                                        <span class="fas fa-lock"></span>
                                                    </span>
                                            </div>
                                            <input type="password" class="form-control" name="password" id="signinPassword" placeholder="Password" aria-label="Password" aria-describedby="signinPasswordLabel" required
                                                   data-msg="Your password is invalid. Please try again."
                                                   data-error-class="u-has-error"
                                                   data-success-class="u-has-success">
                                        </div>
                                    </div>
                                </div>
                                <!-- End Form Group -->

                                <div class="d-flex justify-content-end mb-4">
                                    <a class="js-animation-link small link-muted" href="javascript:;"
                                       data-target="#forgotPassword"
                                       data-link-group="idForm"
                                       data-animation-in="slideInUp">Forgot Password?</a>
                                </div>

                                <div class="mb-2">
                                    <button type="submit" class="btn btn-block btn-sm btn-primary transition-3d-hover">Login</button>
                                </div>

                                <div class="text-center mb-4">
                                    <span class="small text-muted">Do not have an account?</span>
                                    <a class="js-animation-link small text-dark" href="javascript:;"
                                       data-target="#signup"
                                       data-link-group="idForm"
                                       data-animation-in="slideInUp">Signup
                                    </a>
                                </div>

                                <div class="text-center">
                                    <span class="u-divider u-divider--xs u-divider--text mb-4">OR</span>
                                </div>

                                <!-- Login Buttons -->
                                <div class="d-flex">
                                    <a class="btn btn-block btn-sm btn-soft-facebook transition-3d-hover mr-1" href="#">
                                        <span class="fab fa-facebook-square mr-1"></span>
                                        Facebook
                                    </a>
                                    <a class="btn btn-block btn-sm btn-soft-google transition-3d-hover ml-1 mt-0" href="#">
                                        <span class="fab fa-google mr-1"></span>
                                        Google
                                    </a>
                                </div>
                                <!-- End Login Buttons -->
                            </div>

                            <!-- Signup -->
                            <div id="signup" style="display: none; opacity: 0;" data-target-group="idForm">
                                <!-- Title -->
                                <header class="text-center mb-7">
                                    <h2 class="h4 mb-0">Welcome to Farmers Price.</h2>
                                    <p>Fill out the form to get started.</p>
                                </header>
                                <!-- End Title -->

                                <!-- Form Group -->
                                <div class="form-group">
                                    <div class="js-form-message js-focus-state">
                                        <label class="sr-only" for="signupEmail">Email</label>
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                                        <span class="input-group-text" id="signupEmailLabel">
                                                            <span class="fas fa-user"></span>
                                                        </span>
                                            </div>
                                            <input type="email" class="form-control" name="email" id="signupEmail" placeholder="Email" aria-label="Email" aria-describedby="signupEmailLabel" required
                                                   data-msg="Please enter a valid email address."
                                                   data-error-class="u-has-error"
                                                   data-success-class="u-has-success">
                                        </div>
                                    </div>
                                </div>
                                <!-- End Input -->

                                <!-- Form Group -->
                                <div class="form-group">
                                    <div class="js-form-message js-focus-state">
                                        <label class="sr-only" for="signupPassword">Password</label>
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                                        <span class="input-group-text" id="signupPasswordLabel">
                                                            <span class="fas fa-lock"></span>
                                                        </span>
                                            </div>
                                            <input type="password" class="form-control" name="password" id="signupPassword" placeholder="Password" aria-label="Password" aria-describedby="signupPasswordLabel" required
                                                   data-msg="Your password is invalid. Please try again."
                                                   data-error-class="u-has-error"
                                                   data-success-class="u-has-success">
                                        </div>
                                    </div>
                                </div>
                                <!-- End Input -->

                                <!-- Form Group -->
                                <div class="form-group">
                                    <div class="js-form-message js-focus-state">
                                        <label class="sr-only" for="signupConfirmPassword">Confirm Password</label>
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                                    <span class="input-group-text" id="signupConfirmPasswordLabel">
                                                        <span class="fas fa-key"></span>
                                                    </span>
                                            </div>
                                            <input type="password" class="form-control" name="confirmPassword" id="signupConfirmPassword" placeholder="Confirm Password" aria-label="Confirm Password" aria-describedby="signupConfirmPasswordLabel" required
                                                   data-msg="Password does not match the confirm password."
                                                   data-error-class="u-has-error"
                                                   data-success-class="u-has-success">
                                        </div>
                                    </div>
                                </div>
                                <!-- End Input -->

                                <div class="mb-2">
                                    <button type="submit" class="btn btn-block btn-sm btn-primary transition-3d-hover">Get Started</button>
                                </div>

                                <div class="text-center mb-4">
                                    <span class="small text-muted">Already have an account?</span>
                                    <a class="js-animation-link small text-dark" href="javascript:;"
                                       data-target="#login"
                                       data-link-group="idForm"
                                       data-animation-in="slideInUp">Login
                                    </a>
                                </div>

                                <div class="text-center">
                                    <span class="u-divider u-divider--xs u-divider--text mb-4">OR</span>
                                </div>

                                <!-- Login Buttons -->
                                <div class="d-flex">
                                    <a class="btn btn-block btn-sm btn-soft-facebook transition-3d-hover mr-1" href="#">
                                        <span class="fab fa-facebook-square mr-1"></span>
                                        Facebook
                                    </a>
                                    <a class="btn btn-block btn-sm btn-soft-google transition-3d-hover ml-1 mt-0" href="#">
                                        <span class="fab fa-google mr-1"></span>
                                        Google
                                    </a>
                                </div>
                                <!-- End Login Buttons -->
                            </div>
                            <!-- End Signup -->

                            <!-- Forgot Password -->
                            <div id="forgotPassword" style="display: none; opacity: 0;" data-target-group="idForm">
                                <!-- Title -->
                                <header class="text-center mb-7">
                                    <h2 class="h4 mb-0">Recover Password.</h2>
                                    <p>Enter your email address and an email with instructions will be sent to you.</p>
                                </header>
                                <!-- End Title -->

                                <!-- Form Group -->
                                <div class="form-group">
                                    <div class="js-form-message js-focus-state">
                                        <label class="sr-only" for="recoverEmail">Your email</label>
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                                        <span class="input-group-text" id="recoverEmailLabel">
                                                            <span class="fas fa-user"></span>
                                                        </span>
                                            </div>
                                            <input type="email" class="form-control" name="email" id="recoverEmail" placeholder="Your email" aria-label="Your email" aria-describedby="recoverEmailLabel" required
                                                   data-msg="Please enter a valid email address."
                                                   data-error-class="u-has-error"
                                                   data-success-class="u-has-success">
                                        </div>
                                    </div>
                                </div>
                                <!-- End Form Group -->

                                <div class="mb-2">
                                    <button type="submit" class="btn btn-block btn-sm btn-primary transition-3d-hover">Recover Password</button>
                                </div>

                                <div class="text-center mb-4">
                                    <span class="small text-muted">Remember your password?</span>
                                    <a class="js-animation-link small" href="javascript:;"
                                       data-target="#login"
                                       data-link-group="idForm"
                                       data-animation-in="slideInUp">Login
                                    </a>
                                </div>
                            </div>
                            <!-- End Forgot Password -->
                        </form>
                    </div>
                </div>
                <!-- End Content -->
            </div>
        </div>
    </div>
</aside>
<!-- End Account Sidebar Navigation -->
<!-- ========== END SECONDARY CONTENTS ========== -->

<!-- Go to Top -->
<a class="js-go-to u-go-to" href="#"
   data-position='{"bottom": 15, "right": 15 }'
   data-type="fixed"
   data-offset-top="400"
   data-compensation="#header"
   data-show-effect="slideInUp"
   data-hide-effect="slideOutDown">
    <span class="fas fa-arrow-up u-go-to__inner"></span>
</a>
<!-- End Go to Top -->

<!-- JS Global Compulsory -->
<script src="{{ asset('home/assets/vendor/jquery/dist/jquery.min.js')}}"></script>
<script src="{{ asset('home/assets/vendor/jquery-migrate/dist/jquery-migrate.min.js')}}"></script>
<script src="{{ asset('home/assets/vendor/popper.js/dist/umd/popper.min.js')}}"></script>
<script src="{{ asset('home/assets/vendor/bootstrap/bootstrap.min.js')}}"></script>

<!-- JS Implementing Plugins -->
<script src="{{ asset('home/assets/vendor/appear.js')}}"></script>
<script src="{{ asset('home/assets/vendor/jquery.countdown.min.js')}}"></script>
<script src="{{ asset('home/assets/vendor/hs-megamenu/src/hs.megamenu.js')}}"></script>
<script src="{{ asset('home/assets/vendor/svg-injector/dist/svg-injector.min.js')}}"></script>
<script src="{{ asset('home/assets/vendor/malihu-custom-scrollbar-plugin/jquery.mCustomScrollbar.concat.min.js')}}"></script>
<script src="{{ asset('home/assets/vendor/jquery-validation/dist/jquery.validate.min.js')}}"></script>
<script src="{{ asset('home/assets/vendor/fancybox/jquery.fancybox.min.js')}}"></script>
<script src="{{ asset('home/assets/vendor/typed.js/lib/typed.min.js')}}"></script>
<script src="{{ asset('home/assets/vendor/slick-carousel/slick/slick.js')}}"></script>
<script src="{{ asset('home/assets/vendor/bootstrap-select/dist/js/bootstrap-select.min.js')}}"></script>

<!-- JS Farmers Price -->
<script src="{{ asset('home/assets/js/hs.core.js')}}"></script>
<script src="{{ asset('home/assets/js/components/hs.countdown.js')}}"></script>
<script src="{{ asset('home/assets/js/components/hs.header.js')}}"></script>
<script src="{{ asset('home/assets/js/components/hs.hamburgers.js')}}"></script>
<script src="{{ asset('home/assets/js/components/hs.unfold.js')}}"></script>
<script src="{{ asset('home/assets/js/components/hs.focus-state.js')}}"></script>
<script src="{{ asset('home/assets/js/components/hs.malihu-scrollbar.js')}}"></script>
<script src="{{ asset('home/assets/js/components/hs.validation.js')}}"></script>
<script src="{{ asset('home/assets/js/components/hs.fancybox.js')}}"></script>
<script src="{{ asset('home/assets/js/components/hs.onscroll-animation.js')}}"></script>
<script src="{{ asset('home/assets/js/components/hs.slick-carousel.js')}}"></script>
<script src="{{ asset('home/assets/js/components/hs.show-animation.js')}}"></script>
<script src="{{ asset('home/assets/js/components/hs.svg-injector.js')}}"></script>
<script src="{{ asset('home/assets/js/components/hs.go-to.js')}}"></script>
<script src="{{ asset('home/assets/js/components/hs.selectpicker.js')}}"></script>

<!-- JS Plugins Init. -->

<!-- JS Plugins Init. -->
<script>
    $(window).on('load', function () {
        // initialization of HSMegaMenu component
        $('.js-mega-menu').HSMegaMenu({
            event: 'hover',
            direction: 'horizontal',
            pageContainer: $('.container'),
            breakpoint: 1199.98,
            hideTimeOut: 0
        });

        // initialization of svg injector module
        $.HSCore.components.HSSVGIngector.init('.js-svg-injector');
    });

    $(document).on('ready', function () {
        // initialization of header
        $.HSCore.components.HSHeader.init($('#header'));

        // initialization of animation
        $.HSCore.components.HSOnScrollAnimation.init('[data-animation]');

        // initialization of unfold component
        $.HSCore.components.HSUnfold.init($('[data-unfold-target]'), {
            afterOpen: function () {
                $(this).find('input[type="search"]').focus();
            }
        });

        // initialization of popups
        $.HSCore.components.HSFancyBox.init('.js-fancybox');

        // initialization of countdowns
        var countdowns = $.HSCore.components.HSCountdown.init('.js-countdown', {
            yearsElSelector: '.js-cd-years',
            monthsElSelector: '.js-cd-months',
            daysElSelector: '.js-cd-days',
            hoursElSelector: '.js-cd-hours',
            minutesElSelector: '.js-cd-minutes',
            secondsElSelector: '.js-cd-seconds'
        });

        // initialization of malihu scrollbar
        $.HSCore.components.HSMalihuScrollBar.init($('.js-scrollbar'));

        // initialization of forms
        $.HSCore.components.HSFocusState.init();

        // initialization of form validation
        $.HSCore.components.HSValidation.init('.js-validate', {
            rules: {
                confirmPassword: {
                    equalTo: '#signupPassword'
                }
            }
        });

        // initialization of show animations
        $.HSCore.components.HSShowAnimation.init('.js-animation-link');

        // initialization of fancybox
        $.HSCore.components.HSFancyBox.init('.js-fancybox');

        // initialization of slick carousel
        $.HSCore.components.HSSlickCarousel.init('.js-slick-carousel');

        // initialization of go to
        $.HSCore.components.HSGoTo.init('.js-go-to');

        // initialization of hamburgers
        $.HSCore.components.HSHamburgers.init('#hamburgerTrigger');

        // initialization of unfold component
        $.HSCore.components.HSUnfold.init($('[data-unfold-target]'), {
            beforeClose: function () {
                $('#hamburgerTrigger').removeClass('is-active');
            },
            afterClose: function() {
                $('#headerSidebarList .collapse.show').collapse('hide');
            }
        });

        $('#headerSidebarList [data-toggle="collapse"]').on('click', function (e) {
            e.preventDefault();

            var target = $(this).data('target');

            if($(this).attr('aria-expanded') === "true") {
                $(target).collapse('hide');
            } else {
                $(target).collapse('show');
            }
        });

        // initialization of unfold component
        $.HSCore.components.HSUnfold.init($('[data-unfold-target]'));

        // initialization of select picker
        $.HSCore.components.HSSelectPicker.init('.js-select');
    });
</script>


<script type="text/javascript">

    $(".update-cart").click(function (e) {
        e.preventDefault();

        var ele = $(this);

        $.ajax({
            url: '{{ url('cart/update-cart') }}',
            method: "patch",
            data: {_token: '{{ csrf_token() }}', id: ele.attr("data-id"), quantity: ele.parents("tr").find(".quantity").val()},
            success: function (response) {
                window.location.reload();
            }
        });
    });

    $(".remove-from-cart").click(function (e) {
        e.preventDefault();

        var ele = $(this);

        if(confirm("Are you sure")) {
            $.ajax({
                url: '{{ url('cart/remove-from-cart') }}',
                method: "DELETE",
                data: {_token: '{{ csrf_token() }}', id: ele.attr("data-id")},
                success: function (response) {
                    window.location.reload();
                }
            });
        }
    });

</script>
</body>
</html>
