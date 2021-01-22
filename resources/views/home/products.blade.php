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
                        <li class="breadcrumb-item flex-shrink-0 flex-xl-shrink-1"><a href="../shop/shop.html">Accessories</a></li>
                        <li class="breadcrumb-item flex-shrink-0 flex-xl-shrink-1"><a href="../shop/shop.html">Headphones</a></li>
                        <li class="breadcrumb-item flex-shrink-0 flex-xl-shrink-1 active" aria-current="page">Ultra Wireless S50 Headphones S50 with Bluetooth</li>
                    </ol>
                </nav>
            </div>
            <!-- End breadcrumb -->
        </div>
    </div>
    <!-- End breadcrumb -->

    <div class="container">
        <!-- Single Product Body -->
        <div class="mb-14">
            <div class="row">
                <div class="col-md-6 col-lg-4 col-xl-5 mb-4 mb-md-0">
                    <div id="sliderSyncingNav" class="js-slick-carousel u-slick mb-2"
                         data-infinite="true"
                         data-arrows-classes="d-none d-lg-inline-block u-slick__arrow-classic u-slick__arrow-centered--y rounded-circle"
                         data-arrow-left-classes="fas fa-arrow-left u-slick__arrow-classic-inner u-slick__arrow-classic-inner--left ml-lg-2 ml-xl-4"
                         data-arrow-right-classes="fas fa-arrow-right u-slick__arrow-classic-inner u-slick__arrow-classic-inner--right mr-lg-2 mr-xl-4"
                         data-nav-for="#sliderSyncingThumb">

                        @if(count($video) > 0)
                            @foreach($video as $row)
                                <div class="js-slide">

                                    <video width="600" height="340" controls>
                                        <source src="{{asset('uploadedFiles/video/'.$row->name)}}" type="video/mp4">
                                        <source src="{{asset('uploadedFiles/video/'.$row->name)}}" type="video/ogg">
                                        Your browser does not support the video tag.
                                    </video>

                                </div>
                            @endforeach
                        @else

                            @foreach ($mutipleimages as $row)
                                <div class="js-slide" style="cursor: pointer;">
                                    <img class="img-fluid" src="{{asset('uploadedFiles/images/'.$row->name)}}" alt="Image Description">
                                </div>
                            @endforeach
                        @endif

                    </div>

                    <div id="sliderSyncingThumb" class="js-slick-carousel u-slick u-slick--slider-syncing u-slick--slider-syncing-size u-slick--gutters-1 u-slick--transform-off"
                         data-infinite="true"
                         data-slides-show="5"
                         data-is-thumbs="true"
                         data-nav-for="#sliderSyncingNav">

                        @if(count($video) > 0)
                            @foreach($video as $row)

                            @endforeach
                        @else
                                @foreach ($mutipleimages as $row)
                            <div class="js-slide" style="cursor: pointer;">
                                <img class="img-fluid" src="{{asset('uploadedFiles/images/'.$row->name)}}" alt="Image Description">
                            </div>
                                @endforeach
                        @endif

                    </div>
                </div>

                @foreach($products  as $row)
                <div class="col-md-6 col-lg-4 col-xl-4 mb-md-6 mb-lg-0">
                    <div class="mb-2">
                        <a href="#" class="font-size-12 text-gray-5 mb-2 d-inline-block">Headphones</a>
                        <h2 class="font-size-25 text-lh-1dot2">{{($row->name)}}</h2>
                        <div class="mb-2">
                            <a class="d-inline-flex align-items-center small font-size-15 text-lh-1" href="#">
                                <div class="text-warning mr-2">
                                    <small class="fas fa-star"></small>
                                    <small class="fas fa-star"></small>
                                    <small class="fas fa-star"></small>
                                    <small class="fas fa-star"></small>
                                    <small class="far fa-star text-muted"></small>
                                </div>
                                <span class="text-secondary font-size-13">(3 customer reviews)</span>
                            </a>
                        </div>
                        <a href="#" class="d-inline-block max-width-150 ml-n2 mb-2"><img class="img-fluid" src="../../assets/img/200X60/img1.png" alt="Image Description"></a>
                        <div class="mb-2">
                            <ul class="font-size-14 pl-3 ml-1 text-gray-110">
                                <li>4.5 inch HD Touch Screen (1280 x 720)</li>
                                <li>Android 4.4 KitKat OS</li>
                                <li>1.4 GHz Quad Core™ Processor</li>
                                <li>20 MP Electro and 28 megapixel CMOS rear camera</li>
                            </ul>
                        </div>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt.</p>
                        <p><strong>SKU</strong>: FW511948218</p>
                    </div>
                </div>
                <div class="mx-md-auto mx-lg-0 col-md-6 col-lg-4 col-xl-3">
                    <div class="mb-2">
                        <div class="card p-5 border-width-2 border-color-1 borders-radius-17">
                            <div class="text-gray-9 font-size-14 pb-2 border-color-1 border-bottom mb-3">Availability: <span class="text-green font-weight-bold">26 in stock</span></div>
                            <div class="mb-3">
                                <div class="font-size-36">N{{number_format($row->price)}}</div>
                            </div>

                            <form class="cart" method="post" action="{{ url('cart/add-to-cart') }}" enctype="multipart/form-data">
                                {{ csrf_field() }}
                            <div class="mb-3">
                                <h6 class="font-size-14">Quantity</h6>
                                <!-- Quantity -->
                                <div class="border rounded-pill py-1 w-md-60 height-35 px-3 border-color-1">
                                    <div class="js-quantity row align-items-center">
                                        <div class="col">
                                            <input class="js-result form-control h-auto border-0 rounded p-0 shadow-none" type="text" name="quantity"  value="1">
                                        </div>
                                        <div class="col-auto pr-1">
                                            <a class="js-minus btn btn-icon btn-xs btn-outline-secondary rounded-circle border-0" href="javascript:;">
                                                <small class="fas fa-minus btn-icon__inner"></small>
                                            </a>
                                            <a class="js-plus btn btn-icon btn-xs btn-outline-secondary rounded-circle border-0" href="javascript:;">
                                                <small class="fas fa-plus btn-icon__inner"></small>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <!-- End Quantity -->
                            </div>
                            <div class="mb-3">
                                <h6 class="font-size-14">Color</h6>
                                <!-- Select -->
                                <select class="js-select selectpicker dropdown-select btn-block col-12 px-0"
                                        data-style="btn-sm bg-white font-weight-normal py-2 border">
                                    <option value="one" selected>White with Gold</option>
                                    <option value="two">Red</option>
                                    <option value="three">Green</option>
                                    <option value="four">Blue</option>
                                </select>
                                <!-- End Select -->
                            </div>

                            <div class="mb-2 pb-0dot5">
                                <input name="id" value="{{$row->id}}" type="hidden">
                                <input name="action" value="add to cart" type="hidden">
                                <button id="add-to-cart" class="btn btn-block btn-primary-dark" type="submit" name="add"><i class="ec ec-add-to-cart mr-2 font-size-20"></i>Add To Cart</button>
                            </div>
                            </form>

                            <div class="mb-3">
                                <a href="#" class="btn btn-block btn-dark">Contact Supplier</a>
                            </div>

                            <div class="mb-3">
                                <a href="#" class="btn btn-block btn-white" style="border-color: orange;">Call Us</a>
                            </div>
                            <div class="flex-content-center flex-wrap">
                                <a href="#" class="text-gray-6 font-size-13 mr-2"><i class="ec ec-favorites mr-1 font-size-15"></i> Wishlist</a>
                                <a href="#" class="text-gray-6 font-size-13 ml-2"><i class="ec ec-compare mr-1 font-size-15"></i> Compare</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- End Single Product Body -->
    </div>
    <div class="bg-gray-7 pt-6 pb-3 mb-6">
        <div class="container">
            <div class="js-scroll-nav">

                <div class="bg-white pt-4 pb-6 px-xl-11 px-md-5 px-4 mb-6 overflow-hidden">
                    <div id="Description" class="mx-md-2">
                        <div class="position-relative mb-6">
                            <ul class="nav nav-classic nav-tab nav-tab-lg justify-content-xl-center mb-6 flex-nowrap flex-xl-wrap overflow-auto overflow-xl-visble border-lg-down-bottom-0 pb-1 pb-xl-0 mb-n1 mb-xl-0">

                                <li class="nav-item flex-shrink-0 flex-xl-shrink-1 z-index-2">
                                    <a class="nav-link active" href="#Description">
                                        <div class="d-md-flex justify-content-md-center align-items-md-center">
                                            Description
                                        </div>
                                    </a>
                                </li>

                            </ul>
                        </div>
                        <div class="mx-md-4 pt-1">
                            <h3 class="font-size-24 mb-3">About </h3>
                           <p>{{$row->long_desc}}</p>


                        </div>
                    </div>
                </div>


            </div>
        </div>
    </div>

    @endforeach
    <div class="container">
        <!-- Related products -->
        <div class="mb-6">
            <div class="d-flex justify-content-between align-items-center border-bottom border-color-1 flex-lg-nowrap flex-wrap mb-4">
                <h3 class="section-title mb-0 pb-2 font-size-22">Related products</h3>
            </div>
            <ul class="row list-unstyled products-group no-gutters">

                @foreach($latest_products as $row)
                <li class="col-6 col-md-3 col-xl-2gdot4-only col-wd-2 product-item">
                    <div class="product-item__outer h-100">
                        <div class="product-item__inner px-xl-4 p-3">
                            <div class="product-item__body pb-xl-2">
                                <div class="mb-2"><a href="{{url('/categories/'.$row->category_url)}}" class="font-size-12 text-gray-5">{{$row->category_name}}</a></div>
                                <h5 class="mb-1 product-item__title"><a href="{{url('/'.$row->url)}}" class="text-blue font-weight-bold">{{$row->name}}</a></h5>
                                <div class="mb-2">
                                    <a href="{{url('/'.$row->url)}}" class="d-block text-center"><img class="img-fluid" src="{{asset('uploadedFiles/images/'.$row->image)}}" alt="{{$row->name}}"></a>
                                </div>
                                <div class="flex-center-between mb-1">
                                    <div class="prodcut-price">
                                        <div class="text-gray-100">N{{number_format($row->price)}}</div>
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
        <!-- End Related products -->

    </div>

</main>
<!-- ========== END MAIN CONTENT ========== -->
@endsection
