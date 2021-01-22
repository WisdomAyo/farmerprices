
@extends('home.template')
@section('content')


<!-- ========== MAIN CONTENT ========== -->
<main id="content" role="main">
    <!-- Slider Section -->
    <div class="mb-4">
        <div class="bg-img-hero" style="background-image: url('');">
            <div class="container min-height-438 overflow-hidden">
                <div class="js-slick-carousel u-slick"
                     data-pagi-classes="text-center position-absolute right-0 bottom-0 left-0 u-slick__pagination u-slick__pagination--long justify-content-start mb-3 mb-md-4 offset-xl-2 pl-xl-16 pl-wd-13">
                    <div class="js-slide">
                        <div class="row min-height-438 pt-7 py-md-0">
                            <div class="d-none d-xl-block col-auto">
                                <div class="max-width-270 min-width-270"></div>
                            </div>
                            <div class="col-xl col col-md-6 mt-md-8 mt-lg-10">
                                <div class="ml-xl-4">
                                    <h6 class="font-size-15 font-weight-bold mb-2 text-cyan"
                                        data-scs-animation-in="fadeInUp">
                                        SHOP TO GET WHAT YOU LOVE
                                    </h6>
                                    <h1 class="font-size-46 text-lh-50 font-weight-light mb-6"
                                        data-scs-animation-in="fadeInUp"
                                        data-scs-animation-delay="200">
                                        TIMEPIECES THAT MAKE A STATEMENT UP TO <stong class="font-weight-bold">40% OFF</stong>
                                    </h1>
                                    <a href="../shop/single-product-fullwidth.html" class="btn btn-primary transition-3d-hover rounded-lg font-weight-normal py-2 px-md-7 px-3 font-size-16"
                                    <a href="../shop/single-product-fullwidth.html" class="btn btn-primary transition-3d-hover rounded-lg  py-2 px-md-7 px-3 font-size-16"
                                       data-scs-animation-in="fadeInUp"
                                       data-scs-animation-delay="300">
                                        Start Buying
                                    </a>
                                </div>
                            </div>
                            <div class="col-xl-5 col-6 d-flex align-items-end ml-auto ml-md-0"
                                 data-scs-animation-in="fadeInUp"
                                 data-scs-animation-delay="500">
                                <img class="img-fluid ml-auto mr-5" src="{{ asset('home/banner.jpeg')}}" alt="Image Description">
                            </div>
                        </div>
                    </div>
                    <div class="js-slide">
                        <div class="row min-height-438 pt-7 py-md-0">
                            <div class="d-none d-xl-block col-auto">
                                <div class="max-width-270 min-width-270"></div>
                            </div>
                            <div class="col-xl col col-md-6 mt-md-8 mt-lg-10">
                                <div class="ml-xl-4">
                                    <h6 class="font-size-15 font-weight-bold mb-2 text-cyan"
                                        data-scs-animation-in="fadeInUp">
                                        SHOP TO GET WHAT YOU LOVE
                                    </h6>
                                    <h1 class="font-size-46 text-lh-50 font-weight-light mb-6"
                                        data-scs-animation-in="fadeInUp"
                                        data-scs-animation-delay="200">
                                        TIMEPIECES THAT MAKE A STATEMENT UP TO <stong class="font-weight-bold">40% OFF</stong>
                                    </h1>
                                    <a href="{{url("/")}}" class="btn btn-primary transition-3d-hover rounded-lg font-weight-normal py-2 px-md-7 px-3 font-size-16"
                                    <a href="{{url("/")}}" class="btn btn-primary transition-3d-hover rounded-lg  py-2 px-md-7 px-3 font-size-16"
                                       data-scs-animation-in="fadeInUp"
                                       data-scs-animation-delay="300">
                                        Start Buying
                                    </a>
                                </div>
                            </div>
                            <div class="col-xl-5 col-6 flex-horizontal-center ml-auto ml-md-0"
                                 data-scs-animation-in="fadeInRight"
                                 data-scs-animation-delay="500">
                                <img class="img-fluid ml-auto mr-5 h-100" src="{{ asset('home/assets/img/416X420/img1.png')}}" alt="Image Description">
                            </div>
                        </div>
                    </div>
                    <div class="js-slide">
                        <div class="row min-height-438 pt-7 py-md-0">
                            <div class="d-none d-xl-block col-auto">
                                <div class="max-width-270 min-width-270"></div>
                            </div>
                            <div class="col-xl col col-md-6 mt-md-8 mt-lg-10">
                                <div class="ml-xl-4">
                                    <h6 class="font-size-15 font-weight-bold mb-2 text-cyan"
                                        data-scs-animation-in="fadeInUp">
                                        SHOP TO GET WHAT YOU LOVE
                                    </h6>
                                    <h1 class="font-size-46 text-lh-50 font-weight-light mb-6"
                                        data-scs-animation-in="fadeInUp"
                                        data-scs-animation-delay="200">
                                        TIMEPIECES THAT MAKE A STATEMENT UP TO <stong class="font-weight-bold">40% OFF</stong>
                                    </h1>
                                    <a href="../shop/single-product-fullwidth.html" class="btn btn-primary transition-3d-hover rounded-lg font-weight-normal py-2 px-md-7 px-3 font-size-16"
                                       data-scs-animation-in="fadeInUp"
                                       data-scs-animation-delay="300">
                                        Start Buying
                                    </a>
                                </div>
                            </div>
                            <div class="col-xl-5 col-6 flex-horizontal-center ml-auto ml-md-0"
                                 data-scs-animation-in="fadeInRight"
                                 data-scs-animation-delay="500">
                                <img class="img-fluid ml-auto mr-5 h-100" src="{{ asset('home/assets/img/416X420/img3.png')}}" alt="Image Description">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Slider Section -->
    <div class="container">
        <div class="row">
            <div class="col-xl-3 col-wd-auto d-none d-xl-block">
                <div class="max-width-270 min-width-270 pt-xl-13 mt-xl-13">
                    <!-- Image Banner -->
                    <aside class="mb-8">
                        <a href="#" class="d-block">
                            <img class="img-fluid" src="{{ asset('home/slide2.jpeg')}}" alt="Image Description">
                        </a>
                    </aside>
                    <!-- End Image Banner -->
                    <!-- Latest Products -->
                    <aside class="mb-4">
                        <!-- Wrapper Latest Products -->
                        <div class="mb-2 position-relative">
                            <dv class="d-flex justify-content-between border-bottom border-color-1 flex-md-nowrap flex-wrap border-sm-bottom-0">
                                <h3 class="section-title section-title__sm mb-0 pb-3 font-size-18">Latest Products</h3>
                            </dv>
                            <div class="js-slick-carousel u-slick u-slick--gutters-2 overflow-hidden u-slick-overflow-visble pt-3 position-static"
                                 data-slides-show="1"
                                 data-slides-scroll="1"
                                 data-arrows-classes="position-absolute top-0 font-size-17 u-slick__arrow-normal top-10"
                                 data-arrow-left-classes="fa fa-angle-left right-1"
                                 data-arrow-right-classes="fa fa-angle-right right-0">

                                <div class="js-slide">
                                    <ul class="list-unstyled products-group mb-0 overflow-visible">

                                        @foreach($latest_products as $row)
                                        <li class="product-item__list pb-2 mb-2 pb-md-0 mb-md-0">
                                            <div class="product-item__outer h-100">
                                                <div class="product-item__inner py-md-3 mx-3 border-bottom row no-gutters">
                                                    <div class="col-auto product-media-left">
                                                        <a href="{{url('/'.$row->url)}}" class="max-width-70 d-block"><img class="img-fluid" src="{{asset('uploadedFiles/images/resize/'.$row->image)}}" alt="Image Description"></a>
                                                    </div>
                                                    <div class="col product-item__body pl-2 pl-lg-3">
                                                        <div class="mb-4">
                                                            <h5 class="product-item__title"><a href="{{url('/'.$row->url)}}" class="text-gray-90">{{$row->name}}</a></h5>
                                                        </div>
                                                        <div class="flex-center-between">
                                                            <div class="prodcut-price">
                                                                <div class="text-gray-100 font-size-15 font-weight-bold">₦{{number_format($row->price)}}</div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                            @endforeach

                                    </ul>
                                </div>
                                <div class="js-slide">
                                    <ul class="list-unstyled products-group mb-0 overflow-visible">

                                        @foreach($latest_products as $row)
                                            <li class="product-item__list pb-2 mb-2 pb-md-0 mb-md-0">
                                                <div class="product-item__outer h-100">
                                                    <div class="product-item__inner py-md-3 mx-3 border-bottom row no-gutters">
                                                        <div class="col-auto product-media-left">
                                                            <a href="{{url('/'.$row->url)}}" class="max-width-70 d-block"><img class="img-fluid" src="{{asset('uploadedFiles/images/resize/'.$row->image)}}" alt="Image Description"></a>
                                                        </div>
                                                        <div class="col product-item__body pl-2 pl-lg-3">
                                                            <div class="mb-4">
                                                                <h5 class="product-item__title"><a href="{{url('/'.$row->url)}}" class="text-gray-90">{{$row->name}}</a></h5>
                                                            </div>
                                                            <div class="flex-center-between">
                                                                <div class="prodcut-price">
                                                                    <div class="text-gray-100 font-size-15 font-weight-bold">₦{{number_format($row->price)}}</div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                        @endforeach

                                    </ul>
                                </div>

                            </div>
                        </div>
                        <!-- End Wrapper Latest Products -->
                    </aside>
                    <!-- End Latest Products -->
                    <!-- Feature List -->
                    <aside class="mb-8">
                        <div class="d-flex justify-content-center rounded border mb-4">
                            <div class="px-4 py-6 w-100">
                                <!-- Feature List -->
                                <div class="media px-3 mb-4 pb-4 border-bottom" href="#">
                                    <div class="u-avatar mr-2">
                                        <i class="text-primary ec ec-transport font-size-46"></i>
                                    </div>
                                    <div class="media-body text-center">
                                        <span class="d-block font-weight-bold text-dark">Free Delivery</span>
                                        <div class=" text-secondary">from $50</div>
                                    </div>
                                </div>
                                <!-- End Feature List -->

                                <!-- Feature List -->
                                <div class="media px-3 mb-4 pb-4 border-bottom" href="#">
                                    <div class="u-avatar mr-2">
                                        <i class="text-primary ec ec-customers font-size-56"></i>
                                    </div>
                                    <div class="media-body text-center">
                                        <span class="d-block font-weight-bold text-dark">99 % Customer</span>
                                        <div class=" text-secondary">Feedbacks</div>
                                    </div>
                                </div>
                                <!-- End Feature List -->

                                <!-- Feature List -->
                                <div class="media px-3 mb-4 pb-4 border-bottom" href="#">
                                    <div class="u-avatar mr-2">
                                        <i class="text-primary ec ec-returning font-size-46"></i>
                                    </div>
                                    <div class="media-body text-center">
                                        <span class="d-block font-weight-bold text-dark">365 Days</span>
                                        <div class=" text-secondary">for free return</div>
                                    </div>
                                </div>
                                <!-- End Feature List -->

                                <!-- Feature List -->
                                <div class="media px-3 mb-4 pb-4 border-bottom" href="#">
                                    <div class="u-avatar mr-2">
                                        <i class="text-primary ec ec-payment font-size-46"></i>
                                    </div>
                                    <div class="media-body text-center">
                                        <span class="d-block font-weight-bold text-dark">Payment</span>
                                        <div class=" text-secondary">Secure System</div>
                                    </div>
                                </div>
                                <!-- End Feature List -->

                                <!-- Feature List -->
                                <div class="media px-3" href="#">
                                    <div class="u-avatar mr-2">
                                        <i class="text-primary ec ec-tag font-size-46"></i>
                                    </div>
                                    <div class="media-body text-center">
                                        <span class="d-block font-weight-bold text-dark">Only Best</span>
                                        <div class=" text-secondary">Brands</div>
                                    </div>
                                </div>
                                <!-- End Feature List -->
                            </div>
                        </div>
                    </aside>
                    <!-- End Feature List -->
                    <!-- Feature Product -->
                    <aside class="mb-8">
                        <!-- Featured Products -->
                        <div class="position-relative">
                            <div class="border-bottom border-color-1 mb-2">
                                <h3 class="section-title mb-0 pb-3 font-size-18">Featured Products</h3>
                            </div>
                            <div class="js-slick-carousel u-slick position-static overflow-hidden u-slick-overflow-visble"
                                 data-slides-show="1"
                                 data-slides-scroll="1"
                                 data-arrows-classes="position-absolute top-0 font-size-17 u-slick__arrow-normal top-10"
                                 data-arrow-left-classes="fa fa-angle-left right-1"
                                 data-arrow-right-classes="fa fa-angle-right right-0">

                                @foreach($featured as $row)
                                <div class="js-slide products-group">
                                    <div class="product-item remove-divider text-center">
                                        <div class="product-item__outer h-100">
                                            <div class="product-item__inner remove-prodcut-hover px-wd-4 p-2 p-md-3">
                                                <div class="product-item__body pb-xl-2">
                                                    <div class="mb-2">
                                                        <a href="{{url('/'.$row->url)}}" class="d-block text-center"><img class="img-fluid" src="{{asset('uploadedFiles/images/resize/'.$row->image)}}" alt="Image Description"></a>
                                                    </div>
                                                    <div class="mb-2"><a href="../shop/product-categories-7-column-full-width.html" class="font-size-12 text-gray-5">Speakers</a></div>
                                                    <h5 class="mb-4 product-item__title"><a href="{{url('/'.$row->url)}}" class="text-blue font-weight-bold">{{$row->name}}</a></h5>
                                                    <div class="mb-1">
                                                        <div class="prodcut-price">
                                                            <div class="text-gray-100">₦{{number_format($row->price)}}</div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                    @endforeach

                            </div>
                        </div>
                        <!-- End Featured Products -->
                    </aside>
                    <!-- End Feature Product -->
                    <!-- From the Blog -->
                    <aside class="mb-8">
                        <div class="position-relative">
                            <div class="border-bottom border-color-1 mb-4">
                                <h3 class="section-title mb-0 pb-3 font-size-18">From the Blog</h3>
                            </div>
                            <div class="js-slick-carousel u-slick position-static overflow-hidden u-slick-overflow-visble"
                                 data-slides-show="1"
                                 data-slides-scroll="1"
                                 data-arrows-classes="position-absolute top-0 font-size-17 u-slick__arrow-normal top-10"
                                 data-arrow-left-classes="fa fa-angle-left right-1"
                                 data-arrow-right-classes="fa fa-angle-right right-0">
                                <div class="js-slide post-group">
                                    <div class="post-item">
                                        <div class="product-item__body pb-xl-2">
                                            <div class="mb-3">
                                                <a href="../blog/single-blog-post.html" class="d-block text-center"><img class="img-fluid" src="{{ asset('home/assets/img/270X180/img1.jpg')}}" alt="Image Description"></a>
                                            </div>
                                            <div class="mb-1"><a href="../shop/product-categories-7-column-full-width.html" class="font-size-12 text-gray-5">Speakers</a></div>
                                            <h6 class="mb-2 post-item__title font-size-14"><a href="../blog/single-blog-post.html" class="font-weight-bold text-dark">Robot Wars – Post with Gallery</a></h6>
                                            <div class="mb-1">
                                                <a href="../blog/single-blog-post.html" class="d-block text-gray-5"><i class="ec ec-comment"></i> 3</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="js-slide post-group">
                                    <div class="post-item">
                                        <div class="product-item__body pb-xl-2">
                                            <div class="mb-3">
                                                <a href="../blog/single-blog-post.html" class="d-block text-center"><img class="img-fluid" src="{{ asset('home/assets/img/270X180/img1.jpg')}}" alt="Image Description"></a>
                                            </div>
                                            <div class="mb-1"><a href="../shop/product-categories-7-column-full-width.html" class="font-size-12 text-gray-5">Speakers</a></div>
                                            <h6 class="mb-2 post-item__title font-size-14"><a href="../blog/single-blog-post.html" class="font-weight-bold text-dark">Robot Wars – Post with Gallery</a></h6>
                                            <div class="mb-1">
                                                <a href="../blog/single-blog-post.html" class="d-block text-gray-5"><i class="ec ec-comment"></i> 3</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </aside>
                    <!-- End From the Blog -->
                </div>
            </div>
            <div class="col-xl-9 col-wd-auto max-width-1130">
                <!-- Banner -->
                <div class="row mb-6">
                    <div class="col-md-6 mb-4 mb-xl-0 col-wd-4">
                        <a href="../shop/shop.html" class="d-black text-gray-90">
                            <div class="min-height-166 py-1 py-xl-2 py-wd-4 d-flex bg-gray-1 align-items-center">
                                <div class="col-6 col-xl-7 col-wd-6 pr-0">
                                    <img class="img-fluid" src="{{ asset('home/assets/img/246X176/img1.jpg')}}" alt="Image Description">
                                </div>
                                <div class="col-6 col-xl-5 col-wd-6 pr-xl-4 pr-wd-3">
                                    <div class="mb-2 pb-1 font-size-18 font-weight-light text-ls-n1 text-lh-23">
                                        CATCH BIG <strong>DEALS</strong> ON THE CAMERAS
                                    </div>
                                    <div class="link text-gray-90 font-weight-bold font-size-15" href="#">
                                        Shop now
                                        <span class="link__icon ml-1">
                                                    <span class="link__icon-inner"><i class="ec ec-arrow-right-categproes"></i></span>
                                                </span>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-md-6 mb-4 mb-xl-0 col-wd-4">
                        <a href="../shop/shop.html" class="d-black text-gray-90">
                            <div class="min-height-166 py-1 py-xl-2 py-wd-4 d-flex bg-gray-1 align-items-center">
                                <div class="col-6 col-xl-7 col-wd-6 pr-0">
                                    <img class="img-fluid" src="{{ asset('home/assets/img/246X176/img2.jpg')}}" alt="Image Description">
                                </div>
                                <div class="col-6 col-xl-5 col-wd-6 pr-xl-4 pr-wd-3">
                                    <div class="mb-2 pb-1 font-size-18 font-weight-light text-ls-n1 text-lh-23">
                                        CATCH BIG <strong>DEALS</strong> ON THE CAMERAS
                                    </div>
                                    <div class="link text-gray-90 font-weight-bold font-size-15" href="#">
                                        Shop now
                                        <span class="link__icon ml-1">
                                                    <span class="link__icon-inner"><i class="ec ec-arrow-right-categproes"></i></span>
                                                </span>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-md-6 mb-4 mb-xl-0 col-wd-4 d-md-none d-wd-block">
                        <a href="../shop/shop.html" class="d-black text-gray-90">
                            <div class="min-height-166 py-1 py-xl-2 py-wd-4 d-flex bg-gray-1 align-items-center">
                                <div class="col-6 col-xl-7 col-wd-6 pr-0">
                                    <img class="img-fluid" src="{{ asset('home/assets/img/246X176/img3.jpg')}}" alt="Image Description">
                                </div>
                                <div class="col-6 col-xl-5 col-wd-6 pr-xl-4 pr-wd-3">
                                    <div class="mb-2 pb-1 font-size-18 font-weight-light text-ls-n1 text-lh-23">
                                        CATCH BIG <strong>DEALS</strong> ON THE CAMERAS
                                    </div>
                                    <div class="link text-gray-90 font-weight-bold font-size-15" href="#">
                                        Shop now
                                        <span class="link__icon ml-1">
                                                    <span class="link__icon-inner"><i class="ec ec-arrow-right-categproes"></i></span>
                                                </span>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
                <!-- End Banner -->
                <!-- Tab Prodcut Section -->
                <div class="mb-6">
                    <!-- Nav Classic -->
                    <div class="position-relative bg-white text-center z-index-2">
                        <ul class="nav nav-classic nav-tab justify-content-center" id="pills-tab" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link active js-animation-link" id="pills-one-example1-tab" data-toggle="pill" href="#pills-one-example1" role="tab" aria-controls="pills-one-example1" aria-selected="true"
                                   data-target="#pills-one-example1"
                                   data-link-group="groups"
                                   data-animation-in="slideInUp">
                                    <div class="d-md-flex justify-content-md-center align-items-md-center">
                                        Featured
                                    </div>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link js-animation-link" id="pills-two-example1-tab" data-toggle="pill" href="#pills-two-example1" role="tab" aria-controls="pills-two-example1" aria-selected="false"
                                   data-target="#pills-two-example1"
                                   data-link-group="groups"
                                   data-animation-in="slideInUp">
                                    <div class="d-md-flex justify-content-md-center align-items-md-center">
                                        On Sale
                                    </div>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link js-animation-link" id="pills-three-example1-tab" data-toggle="pill" href="#pills-three-example1" role="tab" aria-controls="pills-three-example1" aria-selected="false"
                                   data-target="#pills-three-example1"
                                   data-link-group="groups"
                                   data-animation-in="slideInUp">
                                    <div class="d-md-flex justify-content-md-center align-items-md-center">
                                        Top Rated
                                    </div>
                                </a>
                            </li>
                        </ul>
                    </div>
                    <!-- End Nav Classic -->
                    <!-- Tab Content -->
                    <div class="tab-content" id="pills-tabContent">

                        <div class="tab-pane fade pt-2 show active" id="pills-one-example1" role="tabpanel" aria-labelledby="pills-one-example1-tab" data-target-group="groups">
                            <!--FEATURE -->

                            <ul class="row list-unstyled products-group no-gutters">

                                @foreach($featured as $row)
                                <li class="col-6 col-md-4 col-xl product-item remove-divider-xl">
                                    <div class="product-item__outer h-100">
                                        <div class="product-item__inner px-xl-4 p-3">
                                            <div class="b-trending-card__boosted-label h-flex-center" style="color: rgb(255, 255, 255); background-color: rgb(61, 184, 58);">
                                                11% OFF
                                            </div>
                                            <div class="product-item__body pb-xl-2">
                                                <div class="mb-2"><a href="{{url('/categories/'.$row->category_url)}}" class="font-size-12 text-gray-5">{{$row->category_name}}</a></div>
                                                <h5 class="mb-1 product-item__title"><a href="{{url('/'.$row->url)}}" class="text-blue font-weight-bold">{{$row->name}}</a></h5>
                                                <div class="mb-2">
                                                    <a href="{{url('/'.$row->url)}}" class="d-block text-center"><img class="img-fluid" src="{{asset('uploadedFiles/images/resize/'.$row->image)}}" alt="Image Description"></a>
                                                </div>
                                                <div class="flex-center-between mb-1">
                                                    <div class="prodcut-price">
                                                        <div class="text-gray-100">₦{{number_format($row->price)}}</div>
                                                        <span style="font-size: 12px">{{$row->pieces}} Pieces (Min. Order)</span>
                                                    </div>
                                                    <div class="d-none d-xl-block prodcut-add-cart">
                                                        <form class="cart" method="post" action="{{URL::to('cart/add-to-cart')}}">
                                                            {{csrf_field()}}
                                                            <input type="hidden" name="quantity" class="qty" title="Qty" value="1" maxlength="12" id="qty" name="qty">
                                                            <input name="id" value="{{$row->id}}" type="hidden">
                                                            <input name="action" value="add to cart" type="hidden">
                                                            <button type="submit" class="btn-add-cart btn-primary transition-3d-hover" style="border: none;">
                                                                <i class="ec ec-add-to-cart"></i></span>
                                                            </button>
                                                        </form>

                                                    </div>
                                                </div>
                                            </div>
                                            <div class="product-item__footer">
                                                <div class="border-top pt-2 flex-center-between flex-wrap">
                                                    <form class="cart" method="post" action="{{URL::to('compare/add-to-compare')}}">
                                                        {{csrf_field()}}
                                                        <input type="hidden" name="quantity" class="qty" title="Qty" value="1" maxlength="12" id="qty" name="qty">
                                                        <input name="id" value="{{$row->id}}" type="hidden">
                                                        <button type="submit" class="text-gray-6 font-size-13" style="background-color: white;border: none;">
                                                            <i class="ec ec-compare mr-1 font-size-15"></i> Compare
                                                        </button>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>

                                    @endforeach
                            </ul>
                        </div>

                        <div class="tab-pane fade pt-2" id="pills-two-example1" role="tabpanel" aria-labelledby="pills-two-example1-tab" data-target-group="groups">
                            <ul class="row list-unstyled products-group no-gutters">

                                @foreach($onsale as $row)
                                <li class="col-6 col-md-4 col-xl product-item">
                                    <div class="product-item__outer h-100">
                                        <div class="product-item__inner px-xl-4 p-3">
                                            <div class="b-trending-card__boosted-label h-flex-center" style="color: rgb(255, 255, 255); background-color: rgb(61, 184, 58);">
                                                11% OFF
                                            </div>

                                            <div class="product-item__body pb-xl-2">
                                                <div class="mb-2"><a href="{{url('/categories/'.$row->category_url)}}" class="font-size-12 text-gray-5">{{$row->category_name}}</a></div>
                                                <h5 class="mb-1 product-item__title"><a href="{{url('/'.$row->url)}}" class="text-blue font-weight-bold">{{$row->name}}</a></h5>
                                                <div class="mb-2">
                                                    <a href="{{url('/'.$row->url)}}" class="d-block text-center"><img class="img-fluid" src="{{asset('uploadedFiles/images/resize/'.$row->image)}}" alt="Image Description"></a>
                                                </div>
                                                <div class="flex-center-between mb-1">
                                                    <div class="prodcut-price">
                                                        <div class="text-gray-100">₦{{number_format($row->price)}}</div>
                                                        <span style="font-size: 12px">{{$row->pieces}} Pieces (Min. Order)</span>
                                                    </div>
                                                    <div class="d-none d-xl-block prodcut-add-cart">
                                                        <form class="cart" method="post" action="{{URL::to('cart/add-to-cart')}}">
                                                            {{csrf_field()}}
                                                            <input type="hidden" name="quantity" class="qty" title="Qty" value="1" maxlength="12" id="qty" name="qty">
                                                            <input name="id" value="{{$row->id}}" type="hidden">
                                                            <input name="action" value="add to cart" type="hidden">
                                                            <button type="submit" class="btn-add-cart btn-primary transition-3d-hover" style="border: none;">
                                                                <i class="ec ec-add-to-cart"></i></span>
                                                            </button>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="product-item__footer">
                                                <div class="border-top pt-2 flex-center-between flex-wrap">
                                                    <form class="cart" method="post" action="{{URL::to('compare/add-to-compare')}}">
                                                        {{csrf_field()}}
                                                        <input type="hidden" name="quantity" class="qty" title="Qty" value="1" maxlength="12" id="qty" name="qty">
                                                        <input name="id" value="{{$row->id}}" type="hidden">
                                                        <button type="submit" class="text-gray-6 font-size-13" style="background-color: white;border: none;">
                                                            <i class="ec ec-compare mr-1 font-size-15"></i> Compare
                                                        </button>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                @endforeach

                            </ul>
                        </div>

                        <div class="tab-pane fade pt-2" id="pills-three-example1" role="tabpanel" aria-labelledby="pills-three-example1-tab" data-target-group="groups">
                            <ul class="row list-unstyled products-group no-gutters">

                                @foreach($top_rated as $row)

                                <li class="col-6 col-md-4 col-xl product-item">
                                    <div class="product-item__outer h-100">
                                        <div class="product-item__inner px-xl-4 p-3">
                                            <div class="b-trending-card__boosted-label h-flex-center" style="color: rgb(255, 255, 255); background-color: rgb(61, 184, 58);">
                                                11% OFF
                                            </div>
                                            <div class="product-item__body pb-xl-2">
                                                <div class="mb-2"><a href="{{url('/categories/'.$row->category_url)}}" class="font-size-12 text-gray-5">{{$row->category_name}}</a></div>
                                                <h5 class="mb-1 product-item__title"><a href="{{url('/'.$row->url)}}" class="text-blue font-weight-bold">{{$row->name}}</a></h5>
                                                <div class="mb-2">
                                                    <a href="{{url('/'.$row->url)}}" class="d-block text-center"><img class="img-fluid" src="{{asset('uploadedFiles/images/resize/'.$row->image)}}" alt="Image Description"></a>
                                                </div>
                                                <div class="flex-center-between mb-1">
                                                    <div class="prodcut-price">
                                                        <div class="text-gray-100">₦{{number_format($row->price)}}</div>
                                                        <span style="font-size: 12px">{{$row->pieces}} Pieces (Min. Order)</span>
                                                    </div>
                                                    <div class="d-none d-xl-block prodcut-add-cart">
                                                        <form class="cart" method="post" action="{{URL::to('cart/add-to-cart')}}">
                                                            {{csrf_field()}}
                                                            <input type="hidden" name="quantity" class="qty" title="Qty" value="1" maxlength="12" id="qty" name="qty">
                                                            <input name="id" value="{{$row->id}}" type="hidden">
                                                            <input name="action" value="add to cart" type="hidden">
                                                            <button type="submit" class="btn-add-cart btn-primary transition-3d-hover" style="border: none;">
                                                                <i class="ec ec-add-to-cart"></i></span>
                                                            </button>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="product-item__footer">
                                                <div class="border-top pt-2 flex-center-between flex-wrap">
                                                    <form class="cart" method="post" action="{{URL::to('compare/add-to-compare')}}">
                                                        {{csrf_field()}}
                                                        <input type="hidden" name="quantity" class="qty" title="Qty" value="1" maxlength="12" id="qty" name="qty">
                                                        <input name="id" value="{{$row->id}}" type="hidden">
                                                        <button type="submit" class="text-gray-6 font-size-13" style="background-color: white;border: none;">
                                                            <i class="ec ec-compare mr-1 font-size-15"></i> Compare
                                                        </button>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>

                                @endforeach
                            </ul>
                        </div>

                    </div>
                    <!-- End Tab Content -->
                </div>
                <!-- End Tab Prodcut Section -->
                <!-- Deal -->
                <div class="mb-6">
                    <h4 class="font-size-22 text-gray-100 mb-3">Deals of the Week</h4>
                    <div class="p-xl-4 p-wd-0 border border-width-2 border-primary borders-radius-20 border-wd-0">
                        <div class="js-slick-carousel u-slick u-slick--gutters-2 u-slick-deal-arrow__border"
                             data-slides-show="2"
                             data-slides-scroll="1"
                             data-pagi-classes="text-center d-xl-none d-wd-flex mt-4 u-slick__pagination u-slick__pagination--long"
                             data-arrows-classes="d-none d-xl-inline-flex d-wd-none align-items-center u-slick__arrow-normal u-slick-deal-arrow position-absolute z-index-9 font-size-18 top-3"
                             data-arrow-left-classes="fa fa-angle-left right-xl-220 u-slick-deal-arrow__left"
                             data-arrow-right-classes="fa fa-angle-right right-1 u-slick-deal-arrow__right"
                             data-responsive='[{
                                        "breakpoint": 1399,
                                        "settings": {
                                            "slidesToShow": 1
                                        }
                                    }, {
                                        "breakpoint": 768,
                                        "settings": {
                                            "slidesToShow": 1
                                        }
                                    }, {
                                        "breakpoint": 554,
                                        "settings": {
                                            "slidesToShow": 1
                                        }
                                    }]'>

                            @foreach($top_rated as $row)
                            <div class="js-slide">
                                <div class="p-4 p-xl-0 p-wd-4 border border-xl-0 border-width-2 border-primary borders-radius-20 bg-white">
                                    <div class="row align-items-md-center">
                                        <div class="col-md-6 col-xl-7 col-wd-6 px-0 align-self-center">
                                            <div class="d-inline-flex justify-content-between align-items-center position-absolute left-3 top-0 z-index-9">
                                                <div class="d-flex align-items-center flex-column justify-content-center bg-primary rounded-pill height-75 width-75 text-lh-1">
                                                    <span class="font-size-12" id="strongcolor">Save</span>
                                                    <div class="font-size-20 font-weight-bold" id="strongcolor">₦120</div>
                                                </div>
                                            </div>
                                            <div class="mb-4 mb-md-0">
                                                <div class="row align-items-center">
                                                    <div class="col">
                                                        <a href="{{url('/'.$row->url)}}" class="d-block text-center"><img class="img-fluid mx-auto" src="{{asset('uploadedFiles/images/resize/'.$row->image)}}" alt="Image Description"></a>
                                                    </div>

                                                    <div class="col-auto d-none d-xl-block d-wd-none">
                                                        <ul class="list-group rounded-0">


                                                            <li class="list-group-item my-1 p-0 border-0">
                                                                <!-- Gallery -->
                                                                <a class="js-fancybox max-width-70 u-media-viewer" href="javascript:;"
                                                                   data-src="{{asset('uploadedFiles/images/resize/'.$row->image)}}"
                                                                   data-fancybox="fancyboxGallery6"
                                                                   data-caption="Electro in frames - image #01"
                                                                   data-speed="700"
                                                                   data-is-infinite="true">
                                                                    <img class="img-fluid border" src="{{asset('uploadedFiles/images/resize/'.$row->image)}}" alt="Image Description">

                                                                    <span class="u-media-viewer__container">
                                                                                <span class="u-media-viewer__icon">
                                                                                    <span class="fas fa-plus u-media-viewer__icon-inner"></span>
                                                                                </span>
                                                                            </span>
                                                                </a>
                                                                <!-- End Gallery -->
                                                            </li>

                                                            @foreach(\App\Http\Controllers\Home\HomeController::MuiltpleImage($row->id) as $row)

                                                            <li class="list-group-item my-1 p-0 border-0">
                                                                <!-- Gallery -->
                                                                <a class="js-fancybox max-width-70 u-media-viewer" href="javascript:;"
                                                                   data-src="{{asset('uploadedFiles/images/resize/'.$row->image)}}"
                                                                   data-fancybox="fancyboxGallery6"
                                                                   data-caption="Electro in frames - image #01"
                                                                   data-speed="700"
                                                                   data-is-infinite="true">
                                                                    <img class="img-fluid border" src="{{asset('uploadedFiles/images/resize/'.$row->image)}}" alt="Image Description">

                                                                    <span class="u-media-viewer__container">
                                                                                <span class="u-media-viewer__icon">
                                                                                    <span class="fas fa-plus u-media-viewer__icon-inner"></span>
                                                                                </span>
                                                                            </span>
                                                                </a>
                                                                <!-- End Gallery -->
                                                            </li>
                                                            @endforeach

                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-xl-5 col-wd-6">
                                            <div class="space-top-xl-2 space-top-wd-0 mt-xl-4 mt-wd-0">
                                                <h5 class="mb-3 mb-xl-2 mb-wd-1 font-size-14 text-center mx-auto max-width-180 text-lh-18"><a href="../shop/single-product-fullwidth.html" class="text-blue font-weight-bold">Game Console Controller + USB 3.0 Cable</a></h5>
                                                <div class="d-flex align-items-center justify-content-center mb-3">
                                                    <del class="font-size-18 mr-2 text-gray-2">₦99,00</del>
                                                    <ins class="font-size-xl-30 font-size-wd-25 text-red text-decoration-none">₦79,00</ins>
                                                </div>
                                                <div class="mb-4 mb-xl-5 mb-wd-2 pb-wd-1 mx-2">
                                                    <div class="d-flex justify-content-between align-items-center mb-2">
                                                        <span class="">Availavle: <strong>6</strong></span>
                                                        <span class="">Already Sold: <strong>28</strong></span>
                                                    </div>
                                                    <div class="rounded-pill bg-gray-3 height-wd-14 height-xl-20 position-relative">
                                                        <span class="position-absolute left-0 top-0 bottom-0 rounded-pill w-30 bg-primary"></span>
                                                    </div>
                                                </div>
                                                <div class="mb-2">
                                                    <h6 class="font-size-15 text-gray-2 text-center mb-xl-3 mb-wd-2">Hurry Up! Offer ends in:</h6>
                                                    <div class="js-countdown d-flex justify-content-center"
                                                         data-end-date="2020/11/30"
                                                         data-hours-format="%H"
                                                         data-minutes-format="%M"
                                                         data-seconds-format="%S">
                                                        <div class="text-lh-1">
                                                            <div class="text-gray-2 font-size-30 bg-gray-4 py-2 px-2 rounded-sm mb-2">
                                                                <span class="js-cd-hours"></span>
                                                            </div>
                                                            <div class="text-gray-2 font-size-12 text-center">HOURS</div>
                                                        </div>
                                                        <div class="mx-1 pt-1 text-gray-2 font-size-24">:</div>
                                                        <div class="text-lh-1">
                                                            <div class="text-gray-2 font-size-30 bg-gray-4 py-2 px-2 rounded-sm mb-2">
                                                                <span class="js-cd-minutes"></span>
                                                            </div>
                                                            <div class="text-gray-2 font-size-12 text-center">MINS</div>
                                                        </div>
                                                        <div class="mx-1 pt-1 text-gray-2 font-size-24">:</div>
                                                        <div class="text-lh-1">
                                                            <div class="text-gray-2 font-size-30 bg-gray-4 py-2 px-2 rounded-sm mb-2">
                                                                <span class="js-cd-seconds"></span>
                                                            </div>
                                                            <div class="text-gray-2 font-size-12 text-center">SECS</div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            @endforeach

                        </div>
                    </div>
                </div>
                <!-- End Deal -->
                <!-- Full banner -->
                <div class="mb-8">
                    <a href="../shop/shop.html" class="d-block text-gray-90">
                        <div class="bg-img-hero pt-3" style="background-image: url(../../assets/img/1400X206/img1.jpg);">
                            <div class="space-top-2-md p-4 pt-4 pt-md-5 pt-lg-6 pt-xl-5 pb-lg-4 px-xl-8 px-lg-6">
                                <div class="flex-horizontal-center overflow-auto overflow-md-visble">
                                    <h1 class="text-lh-38 font-size-24 font-weight-light mb-0 flex-shrink-0 flex-md-shrink-1">SHOP AND <strong>SAVE BIG</strong> ON HOTTEST TABLETS</h1>
                                    <div class="flex-content-center ml-4 flex-shrink-0">
                                        <div class="bg-primary rounded-lg px-6 py-2">
                                            <em class="font-size-14 font-weight-light" id="strongcolor">STARTING AT</em>
                                            <div class="font-size-30 font-weight-bold text-lh-1" id="strongcolor">
                                                <sup class="">₦</sup>79<sup class="">99</sup>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                <!-- End Full banner -->


                <!-- End Laptops & Computers -->
                <!-- Smartphones -->
                <div class="position-relative">
                    <div class="border-bottom border-color-1 mb-2">
                        <h3 class="section-title mb-0 pb-2 font-size-22">Baby Food</h3>
                    </div>
                    <div class="js-slick-carousel u-slick position-static overflow-hidden u-slick-overflow-visble pb-7 pt-2 px-1"
                         data-pagi-classes="text-center right-0 bottom-1 left-0 u-slick__pagination u-slick__pagination--long mb-0 z-index-n1 mt-3 mt-md-0"
                         data-slides-show="5"
                         data-slides-scroll="1"
                         data-arrows-classes="position-absolute top-0 font-size-17 u-slick__arrow-normal top-10"
                         data-arrow-left-classes="fa fa-angle-left right-1"
                         data-arrow-right-classes="fa fa-angle-right right-0"
                         data-responsive='[{
                                  "breakpoint": 1400,
                                  "settings": {
                                    "slidesToShow": 4
                                  }
                                }, {
                                    "breakpoint": 1200,
                                    "settings": {
                                      "slidesToShow": 3
                                    }
                                }, {
                                  "breakpoint": 992,
                                  "settings": {
                                    "slidesToShow": 3
                                  }
                                }, {
                                  "breakpoint": 768,
                                  "settings": {
                                    "slidesToShow": 2
                                  }
                                }, {
                                  "breakpoint": 554,
                                  "settings": {
                                    "slidesToShow": 2
                                  }
                                }]'>

                        @foreach($latest_products as $row)
                        <div class="js-slide products-group">
                            <div class="product-item">
                                <div class="product-item__outer h-100">
                                    <div class="product-item__inner px-wd-4 p-2 p-md-3">
                                        <div class="b-trending-card__boosted-label h-flex-center" style="color: rgb(255, 255, 255); background-color: rgb(61, 184, 58);">
                                            11% OFF
                                        </div>

                                        <div class="product-item__body pb-xl-2">
                                            <div class="mb-2"><a href="{{url('/categories/'.$row->category_url)}}" class="font-size-12 text-gray-5">{{$row->category_name}}</a></div>
                                            <h5 class="mb-1 product-item__title"><a href="{{url('/'.$row->url)}}" class="text-blue font-weight-bold">{{$row->name}}</a></h5>
                                            <div class="mb-2">
                                                <a href="{{url('/'.$row->url)}}" class="d-block text-center"><img class="img-fluid" src="{{asset('uploadedFiles/images/resize/'.$row->image)}}" alt="Image Description"></a>
                                            </div>
                                            <div class="flex-center-between mb-1">
                                                <div class="prodcut-price">
                                                    <div class="text-gray-100">₦{{number_format($row->price)}}</div>
                                                    <span style="font-size: 12px">{{$row->pieces}} Pieces (Min. Order)</span>
                                                </div>
                                                <div class="d-none d-xl-block prodcut-add-cart">
                                                    <form class="cart" method="post" action="{{URL::to('cart/add-to-cart')}}">
                                                        {{csrf_field()}}
                                                        <input type="hidden" name="quantity" class="qty" title="Qty" value="1" maxlength="12" id="qty" name="qty">
                                                        <input name="id" value="{{$row->id}}" type="hidden">
                                                        <input name="action" value="add to cart" type="hidden">
                                                        <button type="submit" class="btn-add-cart btn-primary transition-3d-hover" style="border: none;">
                                                            <i class="ec ec-add-to-cart"></i></span>
                                                        </button>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="product-item__footer">
                                            <div class="border-top pt-2 flex-center-between flex-wrap">
                                                <form class="cart" method="post" action="{{URL::to('compare/add-to-compare')}}">
                                                    {{csrf_field()}}
                                                    <input type="hidden" name="quantity" class="qty" title="Qty" value="1" maxlength="12" id="qty" name="qty">
                                                    <input name="id" value="{{$row->id}}" type="hidden">
                                                    <button type="submit" class="text-gray-6 font-size-13" style="background-color: white;border: none;">
                                                        <i class="ec ec-compare mr-1 font-size-15"></i> Compare
                                                    </button>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                            @endforeach


                    </div>
                </div>
                <!-- End Smartphones -->


                

                <br />

                <!-- End Laptops & Computers -->
                <!-- Smartphones -->
                <div class="position-relative">
                    <div class="border-bottom border-color-1 mb-2">
                        <h3 class="section-title mb-0 pb-2 font-size-22">Smartphones</h3>
                    </div>
                    <div class="js-slick-carousel u-slick position-static overflow-hidden u-slick-overflow-visble pb-7 pt-2 px-1"
                         data-pagi-classes="text-center right-0 bottom-1 left-0 u-slick__pagination u-slick__pagination--long mb-0 z-index-n1 mt-3 mt-md-0"
                         data-slides-show="5"
                         data-slides-scroll="1"
                         data-arrows-classes="position-absolute top-0 font-size-17 u-slick__arrow-normal top-10"
                         data-arrow-left-classes="fa fa-angle-left right-1"
                         data-arrow-right-classes="fa fa-angle-right right-0"
                         data-responsive='[{
                                  "breakpoint": 1400,
                                  "settings": {
                                    "slidesToShow": 4
                                  }
                                }, {
                                    "breakpoint": 1200,
                                    "settings": {
                                      "slidesToShow": 3
                                    }
                                }, {
                                  "breakpoint": 992,
                                  "settings": {
                                    "slidesToShow": 3
                                  }
                                }, {
                                  "breakpoint": 768,
                                  "settings": {
                                    "slidesToShow": 2
                                  }
                                }, {
                                  "breakpoint": 554,
                                  "settings": {
                                    "slidesToShow": 2
                                  }
                                }]'>

                        @foreach($latest_products as $row)
                            <div class="js-slide products-group">
                                <div class="product-item">
                                    <div class="product-item__outer h-100">
                                        <div class="product-item__inner px-wd-4 p-2 p-md-3">
                                            <div class="b-trending-card__boosted-label h-flex-center" style="color: rgb(255, 255, 255); background-color: rgb(61, 184, 58);">
                                                11% OFF
                                            </div>

                                            <div class="product-item__body pb-xl-2">
                                                <div class="mb-2"><a href="{{url('/categories/'.$row->category_url)}}" class="font-size-12 text-gray-5">{{$row->category_name}}</a></div>
                                                <h5 class="mb-1 product-item__title"><a href="{{url('/'.$row->url)}}" class="text-blue font-weight-bold">{{$row->name}}</a></h5>
                                                <div class="mb-2">
                                                    <a href="{{url('/'.$row->url)}}" class="d-block text-center"><img class="img-fluid" src="{{asset('uploadedFiles/images/resize/'.$row->image)}}" alt="Image Description"></a>
                                                </div>
                                                <div class="flex-center-between mb-1">
                                                    <div class="prodcut-price">
                                                        <div class="text-gray-100">₦{{number_format($row->price)}}</div>
                                                        <span style="font-size: 12px">{{$row->pieces}} Pieces (Min. Order)</span>
                                                    </div>
                                                    <div class="d-none d-xl-block prodcut-add-cart">
                                                        <form class="cart" method="post" action="{{URL::to('cart/add-to-cart')}}">
                                                            {{csrf_field()}}
                                                            <input type="hidden" name="quantity" class="qty" title="Qty" value="1" maxlength="12" id="qty" name="qty">
                                                            <input name="id" value="{{$row->id}}" type="hidden">
                                                            <input name="action" value="add to cart" type="hidden">
                                                            <button type="submit" class="btn-add-cart btn-primary transition-3d-hover" style="border: none;">
                                                                <i class="ec ec-add-to-cart"></i></span>
                                                            </button>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="product-item__footer">
                                                <div class="border-top pt-2 flex-center-between flex-wrap">
                                                    <form class="cart" method="post" action="{{URL::to('compare/add-to-compare')}}">
                                                        {{csrf_field()}}
                                                        <input type="hidden" name="quantity" class="qty" title="Qty" value="1" maxlength="12" id="qty" name="qty">
                                                        <input name="id" value="{{$row->id}}" type="hidden">
                                                        <button type="submit" class="text-gray-6 font-size-13" style="background-color: white;border: none;">
                                                            <i class="ec ec-compare mr-1 font-size-15"></i> Compare
                                                        </button>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        @endforeach


                    </div>
                </div>
                <!-- End Smartphones -->



                <!-- Recently viewed -->
                <div class="position-relative">
                    <div class="border-bottom border-color-1 mb-2">
                        <h3 class="section-title mb-0 pb-2 font-size-22">Recently viewed</h3>
                    </div>
                    <div class="js-slick-carousel u-slick position-static overflow-hidden u-slick-overflow-visble pb-7 pt-2 px-1"
                         data-pagi-classes="text-center right-0 bottom-1 left-0 u-slick__pagination u-slick__pagination--long mb-0 z-index-n1 mt-3 mt-md-0"
                         data-slides-show="5"
                         data-slides-scroll="1"
                         data-arrows-classes="position-absolute top-0 font-size-17 u-slick__arrow-normal top-10"
                         data-arrow-left-classes="fa fa-angle-left right-1"
                         data-arrow-right-classes="fa fa-angle-right right-0"
                         data-responsive='[{
                                  "breakpoint": 1400,
                                  "settings": {
                                    "slidesToShow": 4
                                  }
                                }, {
                                    "breakpoint": 1200,
                                    "settings": {
                                      "slidesToShow": 3
                                    }
                                }, {
                                  "breakpoint": 992,
                                  "settings": {
                                    "slidesToShow": 3
                                  }
                                }, {
                                  "breakpoint": 768,
                                  "settings": {
                                    "slidesToShow": 2
                                  }
                                }, {
                                  "breakpoint": 554,
                                  "settings": {
                                    "slidesToShow": 2
                                  }
                                }]'>


                        @foreach($latest_products as $row)
                        <div class="js-slide products-group">
                            <div class="product-item">
                                <div class="product-item__outer h-100">
                                    <div class="product-item__inner px-wd-4 p-2 p-md-3">
                                        <div class="b-trending-card__boosted-label h-flex-center" style="color: rgb(255, 255, 255); background-color: rgb(61, 184, 58);">
                                            11% OFF
                                        </div>
                                        <div class="product-item__body pb-xl-2">
                                            <div class="mb-2"><a href="{{url('/categories/'.$row->category_url)}}" class="font-size-12 text-gray-5">{{$row->category_name}}</a></div>
                                            <h5 class="mb-1 product-item__title"><a href="{{url('/'.$row->url)}}" class="text-blue font-weight-bold">{{$row->name}}</a></h5>
                                            <div class="mb-2">
                                                <a href="{{url('/'.$row->url)}}" class="d-block text-center"><img class="img-fluid" src="{{asset('uploadedFiles/images/resize/'.$row->image)}}" alt="Image Description"></a>
                                            </div>
                                            <div class="flex-center-between mb-1">
                                                <div class="prodcut-price">
                                                    <div class="text-gray-100">₦{{number_format($row->price)}}</div>
                                                    <span style="font-size: 12px">{{$row->pieces}} Pieces (Min. Order)</span>
                                                </div>
                                                <div class="d-none d-xl-block prodcut-add-cart">
                                                    <form class="cart" method="post" action="{{URL::to('cart/add-to-cart')}}">
                                                        {{csrf_field()}}
                                                        <input type="hidden" name="quantity" class="qty" title="Qty" value="1" maxlength="12" id="qty" name="qty">
                                                        <input name="id" value="{{$row->id}}" type="hidden">
                                                        <input name="action" value="add to cart" type="hidden">
                                                        <button type="submit" class="btn-add-cart btn-primary transition-3d-hover" style="border: none;">
                                                            <i class="ec ec-add-to-cart"></i></span>
                                                        </button>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="product-item__footer">
                                            <div class="border-top pt-2 flex-center-between flex-wrap">
                                                <form class="cart" method="post" action="{{URL::to('compare/add-to-compare')}}">
                                                    {{csrf_field()}}
                                                    <input type="hidden" name="quantity" class="qty" title="Qty" value="1" maxlength="12" id="qty" name="qty">
                                                    <input name="id" value="{{$row->id}}" type="hidden">
                                                    <button type="submit" class="text-gray-6 font-size-13" style="background-color: white;border: none;">
                                                        <i class="ec ec-compare mr-1 font-size-15"></i> Compare
                                                    </button>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @endforeach

                    </div>
                </div>
                <!-- End Recently viewed -->
            </div>
        </div>
    </div>
    <!-- Brand Carousel -->
    <div class="container mb-8">
        <div class="py-2 border-top border-bottom">
            <div class="js-slick-carousel u-slick my-1"
                 data-slides-show="5"
                 data-slides-scroll="1"
                 data-arrows-classes="d-none d-lg-inline-block u-slick__arrow-normal u-slick__arrow-centered--y"
                 data-arrow-left-classes="fa fa-angle-left u-slick__arrow-classic-inner--left z-index-9"
                 data-arrow-right-classes="fa fa-angle-right u-slick__arrow-classic-inner--right"
                 data-responsive='[{
                            "breakpoint": 992,
                            "settings": {
                                "slidesToShow": 2
                            }
                        }, {
                            "breakpoint": 768,
                            "settings": {
                                "slidesToShow": 1
                            }
                        }, {
                            "breakpoint": 554,
                            "settings": {
                                "slidesToShow": 1
                            }
                        }]'>
                <div class="js-slide">
                    <a href="#" class="link-hover__brand">
                        <img class="img-fluid m-auto max-height-50" src="{{ asset('home/assets/img/200X60/img1.png')}}" alt="Image Description">
                    </a>
                </div>
                <div class="js-slide">
                    <a href="#" class="link-hover__brand">
                        <img class="img-fluid m-auto max-height-50" src="{{ asset('home/assets/img/200X60/img2.png')}}" alt="Image Description">
                    </a>
                </div>
                <div class="js-slide">
                    <a href="#" class="link-hover__brand">
                        <img class="img-fluid m-auto max-height-50" src="{{ asset('home/assets/img/200X60/img3.png')}}" alt="Image Description">
                    </a>
                </div>
                <div class="js-slide">
                    <a href="#" class="link-hover__brand">
                        <img class="img-fluid m-auto max-height-50" src="{{ asset('home/assets/img/200X60/img4.png')}}" alt="Image Description">
                    </a>
                </div>
                <div class="js-slide">
                    <a href="#" class="link-hover__brand">
                        <img class="img-fluid m-auto max-height-50" src="{{ asset('home/assets/img/200X60/img5.png')}}" alt="Image Description">
                    </a>
                </div>
                <div class="js-slide">
                    <a href="#" class="link-hover__brand">
                        <img class="img-fluid m-auto max-height-50" src="{{ asset('home/assets/img/200X60/img6.png')}}" alt="Image Description">
                    </a>
                </div>
            </div>
        </div>
    </div>
    <!-- End Brand Carousel -->
</main>
<!-- ========== END MAIN CONTENT ========== -->

<!-- ========== FOOTER ========== -->
<footer>
    <!-- Footer-top-widget -->
    <div class="container d-none d-lg-block mb-3">
        <div class="row">
            <div class="col-wd-3 col-lg-4">
                <div class="widget-column">
                    <div class="border-bottom border-color-1 mb-5">
                        <h3 class="section-title section-title__sm mb-0 pb-2 font-size-18">Featured Products</h3>
                    </div>
                    <ul class="list-unstyled products-group">

                        @foreach($featured as $row)
                        <li class="product-item product-item__list row no-gutters mb-6 remove-divider">
                            <div class="col-auto">
                                <a href="{{url('/'.$row->url)}}" class="d-block width-75 text-center"><img class="img-fluid" src="{{asset('uploadedFiles/images/resize/'.$row->image)}}" alt="Image Description"></a>
                            </div>
                            <div class="col pl-4 d-flex flex-column">
                                <h5 class="product-item__title mb-0"><a href="{{url('/'.$row->url)}}" class="text-blue font-weight-bold">{{$row->name}}</a></h5>
                                <div class="prodcut-price mt-auto">
                                    <div class="font-size-15">₦1149.00</div>
                                </div>
                            </div>
                        </li>
                        @endforeach

                    </ul>
                </div>
            </div>
            <div class="col-wd-3 col-lg-4">
                <div class="border-bottom border-color-1 mb-5">
                    <h3 class="section-title section-title__sm mb-0 pb-2 font-size-18">Onsale Products</h3>
                </div>
                <ul class="list-unstyled products-group">

                    @foreach($onsale as $row)
                    <li class="product-item product-item__list row no-gutters mb-6 remove-divider">
                        <div class="col-auto">
                            <a href="{{url('/'.$row->url)}}" class="d-block width-75 text-center"><img class="img-fluid" src="{{asset('uploadedFiles/images/resize/'.$row->image)}}" alt="Image Description"></a>
                        </div>
                        <div class="col pl-4 d-flex flex-column">
                            <h5 class="product-item__title mb-0"><a href="{{url('/'.$row->url)}}" class="text-blue font-weight-bold">{{$row->name}}</a></h5>
                            <div class="prodcut-price mt-auto flex-horizontal-center">
                                <ins class="font-size-15 text-decoration-none">₦110.00</ins>
                                <del class="font-size-12 text-gray-9 ml-2">₦250.00</del>
                            </div>
                        </div>
                    </li>

                    @endforeach

                </ul>
            </div>
            <div class="col-wd-3 col-lg-4">
                <div class="border-bottom border-color-1 mb-5">
                    <h3 class="section-title section-title__sm mb-0 pb-2 font-size-18">Top Rated Products</h3>
                </div>
                <ul class="list-unstyled products-group">

                    @foreach($onsale as $row)
                    <li class="product-item product-item__list row no-gutters mb-6 remove-divider">
                        <div class="col-auto">
                            <a href="{{url('/'.$row->url)}}" class="d-block width-75 text-center"><img class="img-fluid" src="{{asset('uploadedFiles/images/resize/'.$row->image)}}" alt="Image Description"></a>
                        </div>
                        <div class="col pl-4 d-flex flex-column">
                            <h5 class="product-item__title mb-0"><a href="{{url('/'.$row->url)}}" class="text-blue font-weight-bold">{{$row->name}}</a></h5>
                            <div class="text-warning mb-2">
                                <small class="fas fa-star"></small>
                                <small class="fas fa-star"></small>
                                <small class="fas fa-star"></small>
                                <small class="fas fa-star"></small>
                                <small class="fas fa-star"></small>
                            </div>
                            <div class="prodcut-price mt-auto">
                                <div class="font-size-15">₦725.00</div>
                            </div>
                        </div>
                    </li>
                    @endforeach

                </ul>
            </div>
            <div class="col-wd-3 d-none d-wd-block">
                <a href="../shop/shop.html" class="d-block"><img class="img-fluid" src="{{ asset('home/assets/img/330X360/img1.jpg')}}" alt="Image Description"></a>
            </div>
        </div>
    </div>
    <!-- End Footer-top-widget -->

@endsection

