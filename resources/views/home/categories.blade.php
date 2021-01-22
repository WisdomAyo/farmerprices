
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
                        <li class="breadcrumb-item flex-shrink-0 flex-xl-shrink-1 active" aria-current="page">Categories</li>
                    </ol>
                </nav>
            </div>
            <!-- End breadcrumb -->
        </div>
    </div>
    <!-- End breadcrumb -->

    <div class="container">
        <div class="row mb-8">
            <div class="d-none d-xl-block col-xl-3 col-wd-2gdot5">
                <div class="mb-6 border border-width-2 border-color-3 borders-radius-6">
                    <!-- List -->
                    <ul id="sidebarNav" class="list-unstyled mb-0 sidebar-navbar view-all">
                        <li><div class="dropdown-title">Browse Categories</div></li>

                        {!! $sidebarcategory !!}

                    </ul>
                    <!-- End List -->
                </div>
                <div class="mb-6">
                    <div class="border-bottom border-color-1 mb-5">
                        <h3 class="section-title section-title__sm mb-0 pb-2 font-size-18">Filters</h3>
                    </div>
                    <div class="border-bottom pb-4 mb-4">
                        <h4 class="font-size-14 mb-3 font-weight-bold">Brands</h4>

                        <!-- Checkboxes -->
                        <div class="form-group d-flex align-items-center justify-content-between mb-2 pb-1">
                            <div class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input" id="brandAdidas">
                                <label class="custom-control-label" for="brandAdidas">Adidas
                                    <span class="text-gray-25 font-size-12 font-weight-normal"> (56)</span>
                                </label>
                            </div>
                        </div>
                        <div class="form-group d-flex align-items-center justify-content-between mb-2 pb-1">
                            <div class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input" id="brandNewBalance">
                                <label class="custom-control-label" for="brandNewBalance">New Balance
                                    <span class="text-gray-25 font-size-12 font-weight-normal"> (56)</span>
                                </label>
                            </div>
                        </div>
                        <div class="form-group d-flex align-items-center justify-content-between mb-2 pb-1">
                            <div class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input" id="brandNike">
                                <label class="custom-control-label" for="brandNike">Nike
                                    <span class="text-gray-25 font-size-12 font-weight-normal"> (56)</span>
                                </label>
                            </div>
                        </div>
                        <div class="form-group d-flex align-items-center justify-content-between mb-2 pb-1">
                            <div class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input" id="brandFredPerry">
                                <label class="custom-control-label" for="brandFredPerry">Fred Perry
                                    <span class="text-gray-25 font-size-12 font-weight-normal"> (56)</span>
                                </label>
                            </div>
                        </div>
                        <div class="form-group d-flex align-items-center justify-content-between mb-2 pb-1">
                            <div class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input" id="brandTnf">
                                <label class="custom-control-label" for="brandTnf">The North Face
                                    <span class="text-gray-25 font-size-12 font-weight-normal"> (56)</span>
                                </label>
                            </div>
                        </div>
                        <!-- End Checkboxes -->

                        <!-- View More - Collapse -->
                        <div class="collapse" id="collapseBrand">
                            <div class="form-group d-flex align-items-center justify-content-between mb-2 pb-1">
                                <div class="custom-control custom-checkbox">
                                    <input type="checkbox" class="custom-control-input" id="brandGucci">
                                    <label class="custom-control-label" for="brandGucci">Gucci
                                        <span class="text-gray-25 font-size-12 font-weight-normal"> (56)</span>
                                    </label>
                                </div>
                            </div>
                            <div class="form-group d-flex align-items-center justify-content-between mb-2 pb-1">
                                <div class="custom-control custom-checkbox">
                                    <input type="checkbox" class="custom-control-input" id="brandMango">
                                    <label class="custom-control-label" for="brandMango">Mango
                                        <span class="text-gray-25 font-size-12 font-weight-normal"> (56)</span>
                                    </label>
                                </div>
                            </div>
                        </div>
                        <!-- End View More - Collapse -->

                        <!-- Link -->
                        <a class="link link-collapse small font-size-13 text-gray-27 d-inline-flex mt-2" data-toggle="collapse" href="#collapseBrand" role="button" aria-expanded="false" aria-controls="collapseBrand">
                                    <span class="link__icon text-gray-27 bg-white">
                                        <span class="link__icon-inner">+</span>
                                    </span>
                            <span class="link-collapse__default">Show more</span>
                            <span class="link-collapse__active">Show less</span>
                        </a>
                        <!-- End Link -->
                    </div>

                </div>

            </div>
            <div class="col-xl-9 col-wd-9gdot5">
                <!-- Recommended Products -->
                <div class="mb-6 d-none d-xl-block">
                    <div class="position-relative">
                        <div class="border-bottom border-color-1 mb-2">
                            <h3 class="d-inline-block section-title section-title__full mb-0 pb-2 font-size-22">Recommended Products</h3>
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
                                          "slidesToShow": 4
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

                            @foreach($recommended as $row)
                            <div class="js-slide products-group">
                                <div class="product-item">
                                    <div class="product-item__outer h-100">
                                        <div class="product-item__inner px-wd-4 p-2 p-md-3">
                                            <div class="product-item__body pb-xl-2">
                                                <div class="mb-2"><a href="{{url('/categories/'.$row->category_url)}}" class="font-size-12 text-gray-5">{{$row->category_name}}</a></div>
                                                <h5 class="mb-1 product-item__title"><a href="{{url('/'.$row->url)}}" class="text-blue font-weight-bold">{{$row->name}}</a></h5>
                                                <div class="mb-2">
                                                    <a href="{{url('/'.$row->url)}}" class="d-block text-center"><img class="img-fluid" src="{{asset('uploadedFiles/images/'.$row->image)}}" alt="Image Description"></a>
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
                </div>
                <!-- End Recommended Products -->
                <!-- Shop-control-bar Title -->
                <div class="flex-center-between mb-3">
                    <div class="border-bottom border-color-1 mb-2">
                        <h3 class="d-inline-block section-title section-title__full mb-0 pb-2 font-size-22">
                            @if(!empty(Request::segment(2)) && empty(Request::segment(3)))
                                {{str_replace(array('-',), ' ', ucwords(Request::segment(2)))}}
                            @else
                                {{str_replace(array('-',), ' ', ucwords(Request::segment(3)))}}
                            @endif Category</h3>
                    </div>

                    <p class="font-size-14 text-gray-90 mb-0">Showing 1–25 of 56 results</p>
                </div>
                <!-- End shop-control-bar Title -->
                <!-- Shop-control-bar -->
                <div class="bg-gray-1 flex-center-between borders-radius-9 py-1">
                    <div class="d-xl-none">
                        <!-- Account Sidebar Toggle Button -->
                        <a id="sidebarNavToggler1" class="btn btn-sm py-1 font-weight-normal" href="javascript:;" role="button"
                           aria-controls="sidebarContent1"
                           aria-haspopup="true"
                           aria-expanded="false"
                           data-unfold-event="click"
                           data-unfold-hide-on-scroll="false"
                           data-unfold-target="#sidebarContent1"
                           data-unfold-type="css-animation"
                           data-unfold-animation-in="fadeInLeft"
                           data-unfold-animation-out="fadeOutLeft"
                           data-unfold-duration="500">
                            <i class="fas fa-sliders-h"></i> <span class="ml-1">Filters</span>
                        </a>
                        <!-- End Account Sidebar Toggle Button -->
                    </div>
                    <div class="px-3 d-none d-xl-block">
                        <ul class="nav nav-tab-shop" id="pills-tab" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link active" id="pills-one-example1-tab" data-toggle="pill" href="#pills-one-example1" role="tab" aria-controls="pills-one-example1" aria-selected="false">
                                    <div class="d-md-flex justify-content-md-center align-items-md-center">
                                        <i class="fa fa-th"></i>
                                    </div>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="pills-two-example1-tab" data-toggle="pill" href="#pills-two-example1" role="tab" aria-controls="pills-two-example1" aria-selected="false">
                                    <div class="d-md-flex justify-content-md-center align-items-md-center">
                                        <i class="fa fa-align-justify"></i>
                                    </div>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="pills-three-example1-tab" data-toggle="pill" href="#pills-three-example1" role="tab" aria-controls="pills-three-example1" aria-selected="true">
                                    <div class="d-md-flex justify-content-md-center align-items-md-center">
                                        <i class="fa fa-list"></i>
                                    </div>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="pills-four-example1-tab" data-toggle="pill" href="#pills-four-example1" role="tab" aria-controls="pills-four-example1" aria-selected="true">
                                    <div class="d-md-flex justify-content-md-center align-items-md-center">
                                        <i class="fa fa-th-list"></i>
                                    </div>
                                </a>
                            </li>
                        </ul>
                    </div>
                    <div class="d-flex">
                        <form method="get">
                            <!-- Select -->
                            <select class="js-select selectpicker dropdown-select max-width-200 max-width-160-sm right-dropdown-0 px-2 px-xl-0"
                                    data-style="btn-sm bg-white font-weight-normal py-2 border text-gray-20 bg-lg-down-transparent border-lg-down-0">
                                <option value="one" selected>Default sorting</option>
                                <option value="two">Sort by popularity</option>
                                <option value="three">Sort by average rating</option>
                                <option value="four">Sort by latest</option>
                                <option value="five">Sort by price: low to high</option>
                                <option value="six">Sort by price: high to low</option>
                            </select>
                            <!-- End Select -->
                        </form>
                        <form method="POST" class="ml-2 d-none d-xl-block">
                            <!-- Select -->
                            <select class="js-select selectpicker dropdown-select max-width-120"
                                    data-style="btn-sm bg-white font-weight-normal py-2 border text-gray-20 bg-lg-down-transparent border-lg-down-0">
                                <option value="one" selected>Show 20</option>
                                <option value="two">Show 40</option>
                                <option value="three">Show All</option>
                            </select>
                            <!-- End Select -->
                        </form>
                    </div>
                    <nav class="px-3 flex-horizontal-center text-gray-20 d-none d-xl-flex">
                        <form method="post" class="min-width-50 mr-1">
                            <input size="2" min="1" max="3" step="1" type="number" class="form-control text-center px-2 height-35" value="1">
                        </form> of 3
                        <a class="text-gray-30 font-size-20 ml-2" href="#">→</a>
                    </nav>
                </div>
                <!-- End Shop-control-bar -->
                <!-- Shop Body -->
                <!-- Tab Content -->
                <div class="tab-content" id="pills-tabContent">
                    <div class="tab-pane fade pt-2 show active" id="pills-one-example1" role="tabpanel" aria-labelledby="pills-one-example1-tab" data-target-group="groups">
                        <ul class="row list-unstyled products-group no-gutters">

                            @foreach($products as $row)
                            <li class="col-6 col-md-3 product-item">
                                <div class="product-item__outer h-100 w-100">
                                    <div class="product-item__inner px-xl-4 p-3">
                                        <div class="product-item__body pb-xl-2">
                                            <div class="mb-2"><a href="{{url('/categories/'.$row->category_url)}}" class="font-size-12 text-gray-5">{{$row->category_name}}</a></div>
                                            <h5 class="mb-1 product-item__title"><a href="{{url('/'.$row->url)}}" class="text-blue font-weight-bold">{{$row->name}}</a></h5>
                                            <div class="mb-2">
                                                <a href="{{url('/'.$row->url)}}" class="d-block text-center"><img class="img-fluid" src="{{asset('uploadedFiles/images/'.$row->image)}}" alt="Image Description"></a>
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
                <!-- End Shop Body -->
                <!-- Shop Pagination -->
{{--                <nav class="d-md-flex justify-content-between align-items-center border-top pt-3" aria-label="Page navigation example">--}}
{{--                    <div class="text-center text-md-left mb-3 mb-md-0">Showing 1–25 of 56 results</div>--}}
{{--                    <ul class="pagination mb-0 pagination-shop justify-content-center justify-content-md-start">--}}
{{--                        <li class="page-item"><a class="page-link current" href="#">1</a></li>--}}
{{--                        <li class="page-item"><a class="page-link" href="#">2</a></li>--}}
{{--                        <li class="page-item"><a class="page-link" href="#">3</a></li>--}}
{{--                    </ul>--}}
{{--                </nav>--}}
                <!-- End Shop Pagination -->
            </div>

    </div>
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
                                    <a href="{{url('/'.$row->url)}}" class="d-block width-75 text-center"><img class="img-fluid" src="{{asset('uploadedFiles/images/'.$row->image)}}" alt="Image Description"></a>
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
                                <a href="{{url('/'.$row->url)}}" class="d-block width-75 text-center"><img class="img-fluid" src="{{asset('uploadedFiles/images/'.$row->image)}}" alt="Image Description"></a>
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
                                <a href="{{url('/'.$row->url)}}" class="d-block width-75 text-center"><img class="img-fluid" src="{{asset('uploadedFiles/images/'.$row->image)}}" alt="Image Description"></a>
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
