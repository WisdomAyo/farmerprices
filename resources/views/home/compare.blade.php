
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
                        <li class="breadcrumb-item flex-shrink-0 flex-xl-shrink-1 active" aria-current="page">Compare</li>
                    </ol>
                </nav>
            </div>
            <!-- End breadcrumb -->
        </div>
    </div>
    <!-- End breadcrumb -->

    <div class="container">
        <div class="table-responsive table-bordered table-compare-list mb-10 border-0">
            <table class="table">
                <tbody>
                <tr>
                    <th class="min-width-200">Product</th>
                    @foreach($allcompare as $row)
                    <td>
                        <a href="#" class="product d-block">
                            <div class="product-compare-image">
                                <div class="d-flex mb-3">
                                    <img class="img-fluid mx-auto" src="{{asset('uploadedFiles/images/'.$row['photo'])}}" alt="{{ ucwords($row['name'])}}">
                                </div>
                            </div>
                            <h3 class="product-item__title text-blue font-weight-bold mb-3">{{ ucwords($row['name'])}}</h3>
                        </a>
                        <div class="text-warning mb-2">
                            <small class="fas fa-star"></small>
                            <small class="fas fa-star"></small>
                            <small class="fas fa-star"></small>
                            <small class="fas fa-star"></small>
                            <small class="fas fa-star"></small>
                        </div>
                    </td>
                    @endforeach

                </tr>

                <tr>
                    <th>Price</th>
                    @foreach($allcompare as $row)
                    <td>
                        <div class="product-price">₦{{ number_format($row['price'])}}</div>
                    </td>
                    @endforeach

                </tr>

                <tr>
                    <th>Availability</th>
                    @foreach($allcompare as $row)
                    <td><span>In stock</span>
                    </td>
                    @endforeach
                </tr>

                <tr>
                    <th>Description</th>


                    <td>
                        <ul>
                            <li><span class="">Intel Core i5 processors (13-inch model)</span></li>
                            <li><span class="">Intel Iris Graphics 6100 (13-inch model)</span></li>
                            <li><span class="">Flash storage</span></li>
                            <li><span class="">Up to 10 hours of battery life2 (13-inch model)</span></li>
                            <li><span class="">Force Touch trackpad (13-inch model)</span></li>
                        </ul>
                    </td>

                </tr>

                <tr>
                    <th>Add to cart</th>
                    @foreach($allcompare as $row)
                    <td>
                        <div class=""><a href="#" class="btn btn-soft-secondary mb-3 mb-md-0 font-weight-normal px-5 px-md-3 px-xl-5">Add to cart</a></div>
                    </td>
                    @endforeach
                </tr>


                <tr>
                    <th>Remove</th>
                    @foreach($allcompare as $row)
                    <td class="text-center">
                        <a href="#" class="text-gray-90"><i class="fa fa-times"></i></a>
                    </td>
                    @endforeach
                </tr>
                </tbody>
            </table>
        </div>
    </div>
</main>
<!-- ========== END MAIN CONTENT ========== -->

<!-- ========== FOOTER ========== -->
<footer>
    <div class="container">
        <!-- Brand Carousel -->
        <div class="mb-6">
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
                            <img class="img-fluid m-auto max-height-50" src="../../assets/img/200X60/img1.png" alt="Image Description">
                        </a>
                    </div>
                    <div class="js-slide">
                        <a href="#" class="link-hover__brand">
                            <img class="img-fluid m-auto max-height-50" src="../../assets/img/200X60/img2.png" alt="Image Description">
                        </a>
                    </div>
                    <div class="js-slide">
                        <a href="#" class="link-hover__brand">
                            <img class="img-fluid m-auto max-height-50" src="../../assets/img/200X60/img3.png" alt="Image Description">
                        </a>
                    </div>
                    <div class="js-slide">
                        <a href="#" class="link-hover__brand">
                            <img class="img-fluid m-auto max-height-50" src="../../assets/img/200X60/img4.png" alt="Image Description">
                        </a>
                    </div>
                    <div class="js-slide">
                        <a href="#" class="link-hover__brand">
                            <img class="img-fluid m-auto max-height-50" src="../../assets/img/200X60/img5.png" alt="Image Description">
                        </a>
                    </div>
                    <div class="js-slide">
                        <a href="#" class="link-hover__brand">
                            <img class="img-fluid m-auto max-height-50" src="../../assets/img/200X60/img6.png" alt="Image Description">
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Brand Carousel -->
    </div>

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
                                        <div class="font-size-15">$1149.00</div>
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
                                    <ins class="font-size-15 text-decoration-none">$110.00</ins>
                                    <del class="font-size-12 text-gray-9 ml-2">$250.00</del>
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
                                    <div class="font-size-15">$725.00</div>
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

