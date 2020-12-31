@extends('layouts.main')

@section('title') @parent Nos Véhicules @endsection

@section('description')
    {{ setting('site.description') }}
@endsection

@section('keywords')
    {{ setting('site.keywords') }}
@endsection

@section('meta-image')
    {{ Voyager::image(setting('site.logo')) }}
@endsection

@section('content')

    <!--Breadcrumb Start-->
    <div class="breadcrumb-area style-03" style="background: url('assets/img/breadcrumb/04.png')">
        <div class="container">
            <div class="row">
                <div class="breadcrumb-content">
                    <h1 class="page-title">Nos Véhicules</h1>
                    <ul class="page-list">
                        <li><a href="{{url('/')}}">Accueil</a></li>
                        <li>Shop</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!--// Breadcrumb End-->


    <!--Blog Page Content-->
    <div class="blog-page-content padding-top-120 padding-bottom-160">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <!-- Shop Page Grig View-->
                    <div class="shop-page-grid-view">
                        <div class="product-filtering-area">
                            <div class="filter-left" id="btnContainer">
                                <ul class="nav nav-tabs" id="myTab" role="tablist">
                                    <li class="nav-item">
                                        <a class="nav-link active" data-toggle="tab" href="#home-grid">
                                            <i class="ti ti-layout-grid2-alt"></i>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" data-toggle="tab" href="#single-grid">
                                            <i class="ti ti-menu"></i>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                            <div class="filter-right">
                                <span class="sorting-text">Sort by</span>
                                <div class="custom-select-box">
                                    <select>
                                        <option value="ban">Sorting Items</option>
                                        <option value="ban">25 Products</option>
                                        <option value="ban">50 Products</option>
                                        <option value="ban">100 Products</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <!--// Product Filtering Area-->

                        <div class="tab-content" id="myTabContent">
                            <div class="tab-pane fade show active" id="home-grid">

                                <div class="grid-list-wrapper padding-top-30">
                                    <!-- Grid List Column-->
                                    @foreach($cars as $car)
                                    <div class="grid-list-column-item style-02">
                                        <span class="price-drop-tag">New</span>
                                        <a href="{{ route('cars.show', $car->slug) }}">
                                            <h5 class="title padding-top-30">{{$car->title}}</h5>
                                        </a>

                                        <h6 class="sub-title">{{$car->model}}</h6>
                                        <div class="thumb">
                                            <img src="{{Voyager::image($car->image)}}" alt="img">
                                        </div>
                                        <!--// Thumbnail-->
                                        <div class="price-wrap">
                                            <div class="price">
                                                <div class="common-price-style">
                                                    <span class="black">${{$car->price}}</span>
                                                </div>
                                                <div class="common-rating-style">
                                                    <input type="radio" name="start1" id="start1"><label
                                                        for="start1"></label>
                                                    <input type="radio" name="start1" id="start2"><label
                                                        for="start2"></label>
                                                    <input type="radio" name="start1" id="start3"><label
                                                        for="start3"></label>
                                                    <input type="radio" name="start1" id="start4"><label
                                                        for="start4"></label>
                                                    <input type="radio" name="start1" id="start5"><label
                                                        for="start5"></label>
                                                </div>
                                            </div>
                                            <div class="cart">
                                                <a href="#"><i class="icon flaticon-shopping-cart"></i></a>
                                            </div>
                                        </div>
                                        <!--// Price Wrap-->
                                        <div class="car-functional-wrap">
                                            <div class="car-functional-wrap__item">
                                                <div class="icon flaticon-speedometer"></div>
                                                <div class="force">{{$car->mileage}}</div>
                                            </div>
                                            <div class="car-functional-wrap__item">
                                                <div class="icon flaticon-engine"></div>
                                                <div class="force">{{$car->Power}}</div>
                                            </div>
                                            <div class="car-functional-wrap__item">
                                                <div class="icon flaticon-fuel-station"></div>
                                                <div class="force">{{$car->bootSpace}}</div>
                                            </div>
                                        </div>
                                        <!--// Car Functional Wrap-->
                                    </div>
                                @endforeach
                                    <!--// Grid List Column-->
                                </div>
                                <!--// Grid List Wrapper-->
                            </div>
                        </div>
                    </div>
                    <!--// Shop Page Grid View-->

                    <!-- Pagination-->
                    <div class="col-lg-12 margin-bottom-60">
                        <div class="blog-pagination text-center">
                            <ul class="page-numbers">
                                <li><a class="next page-numbers" href="#"><i class="flaticon-left-arrow"></i></a></li>
                                <li><span aria-current="page" class="page-numbers current">1</span></li>
                                <li><a class="page-numbers" href="#">2</a></li>
                                <li><a class="page-numbers" href="#">3</a></li>
                                <li><a class="page-numbers" href="#">4</a></li>
                                <li><a class="next page-numbers" href="#"><i class="flaticon-right-arrow"></i></a></li>
                            </ul>
                        </div>
                    </div>
                    <!--// Pagination-->
                </div>


                <div class="col-lg-4">
                    <div class="widget-area">
                        <div class="widget widget_search blog-bg">
                            <form action="https://codingeek.net/html/coche/blog.html" class="search-form">
                                <div class="form-group">
                                    <input type="text" class="form-control" placeholder="Search">
                                </div>
                                <button class="submit-btn" type="submit"><i class="fa fa-search"></i></button>
                            </form>
                        </div>
                        <!--// Search Widget -->

                        <div class="widget blog-bg">
                            <h5 class="widget-title border-bottom">Filters By Price</h5>
                            <div class="price-filter">
                                <div id="slider-range"></div>
                                <div class="price-slider-amount">
                                    <input type="submit" value="Enter Filters" />
                                    <input type="text" id="amount" name="price" placeholder="Add Your Price" />
                                </div>
                            </div>
                        </div>
                        <!--// Price Filter widget-->

                        <div class="widget blog-bg style-01">
                            <h5 class="widget-title border-bottom">Popular Vehicles</h5>
                            <ul class="recent_post_item">
                                <li class="single-recent-post-item">
                                    <div class="thumb">
                                        <img src="assets/img/shop-02/product-01.png" alt="popular post">
                                    </div>
                                    <div class="content">
                                        <h5 class="title"><a href="#">Creative Audio System</a></h5>
                                        <div class="common-rating-style left">
                                            <input type="radio" name="start1" id="start111"><label
                                                for="start111"></label>
                                            <input type="radio" name="start1" id="start112"><label
                                                for="start112"></label>
                                            <input type="radio" name="start1" id="start113"><label
                                                for="start113"></label>
                                            <input type="radio" name="start1" id="start114"><label
                                                for="start114"></label>
                                            <input type="radio" name="start1" id="start115"><label
                                                for="start115"></label>
                                        </div>
                                        <div class="common-price-style">
                                            Price: <span class="black">$145</span>
                                        </div>
                                    </div>
                                </li>
                                <li class="single-recent-post-item">
                                    <div class="thumb">
                                        <img src="assets/img/shop-02/product-02.png" alt="popular post">
                                    </div>
                                    <div class="content">
                                        <h5 class="title"><a href="#">Flash Deals Chair</a></h5>
                                        <div class="common-rating-style left">
                                            <input type="radio" name="start1" id="start221"><label
                                                for="start221"></label>
                                            <input type="radio" name="start1" id="start222"><label
                                                for="start222"></label>
                                            <input type="radio" name="start1" id="start223"><label
                                                for="start223"></label>
                                            <input type="radio" name="start1" id="start224"><label
                                                for="start224"></label>
                                            <input type="radio" name="start1" id="start225"><label
                                                for="start225"></label>
                                        </div>
                                        <div class="common-price-style">
                                            Price: <span class="black">$145</span>
                                        </div>
                                    </div>
                                </li>
                                <li class="single-recent-post-item">
                                    <div class="thumb">
                                        <img src="assets/img/shop-02/product-03.png" alt="popular post">
                                    </div>
                                    <div class="content">
                                        <h5 class="title"><a href="#">Hanging 4K Camera</a></h5>
                                        <div class="common-rating-style left">
                                            <input type="radio" name="start1" id="start331"><label
                                                for="start331"></label>
                                            <input type="radio" name="start1" id="start332"><label
                                                for="start332"></label>
                                            <input type="radio" name="start1" id="start333"><label
                                                for="start333"></label>
                                            <input type="radio" name="start1" id="start334"><label
                                                for="start334"></label>
                                            <input type="radio" name="start1" id="start335"><label
                                                for="start335"></label>
                                        </div>
                                        <div class="common-price-style">
                                            Price: <span class="black">$145</span>
                                        </div>
                                    </div>
                                </li>
                                <li class="single-recent-post-item">
                                    <div class="thumb">
                                        <img src="assets/img/shop-02/product-01.png" alt="popular post">
                                    </div>
                                    <div class="content">
                                        <h5 class="title"><a href="#">Back Camera Display</a></h5>
                                        <div class="common-rating-style left">
                                            <input type="radio" name="start1" id="start441"><label
                                                for="start441"></label>
                                            <input type="radio" name="start1" id="start442"><label
                                                for="start442"></label>
                                            <input type="radio" name="start1" id="start443"><label
                                                for="start443"></label>
                                            <input type="radio" name="start1" id="start444"><label
                                                for="start444"></label>
                                            <input type="radio" name="start1" id="start445"><label
                                                for="start445"></label>
                                        </div>
                                        <div class="common-price-style">
                                            Price: <span class="black">$145</span>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                        <!--// New Product Widget-->


                        <div class="widget blog-bg style-01">
                            <h5 class="widget-title border-bottom">Popular Brands</h5>
                            <ul class="gallery-items">
                                <li><a href="#"><img src="assets/img/blog/gallery/01.png" alt="img"></a></li>
                                <li><a href="#"><img src="assets/img/blog/gallery/02.png" alt="img"></a></li>
                                <li><a href="#"><img src="assets/img/blog/gallery/03.png" alt="img"></a></li>
                                <li><a href="#"><img src="assets/img/blog/gallery/04.png" alt="img"></a></li>
                                <li><a href="#"><img src="assets/img/blog/gallery/05.png" alt="img"></a></li>
                                <li><a href="#"><img src="assets/img/blog/gallery/06.png" alt="img"></a></li>
                            </ul>

                        </div>
                        <!--// Tag Widget-->
                    </div>

                </div>
            </div>
        </div>
        <!--// Container-->
    </div>
    <!--// Blog Page Content-->

@endsection
