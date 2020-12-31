@extends('layouts.main')

@section('title') @parent News : {{ $cars->title }} @endsection

@section('description')
    {{ $cars->meta_description }}
@endsection

@section('keywords')
    {{ $cars->meta_keywords }}
@endsection
@section('meta-image')
    {{ Voyager::image($cars->image) }}
@endsection

@section('content')

    <!--Breadcrumb Start-->
    <div class="breadcrumb-area style-03" style="background: url('assets/img/breadcrumb/04.png')">
        <div class="container">
            <div class="row">
                <div class="breadcrumb-content">
                    <h1 class="page-title">{{$cars->title}}</h1>
                    <ul class="page-list">
                        <li><a href="{{url('/')}}">Accueil</a></li>
                        <li>Shop</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!--// Breadcrumb End-->

    <!--Product Details Tab-->
    <div class="product-details-tab padding-top-120 padding-bottom-90">
        <div class="container">
            <div class="row">
                <div class="col-lg-7">
                    <div class="Product-tab-big">
                        <div class="product-tab-big-active">
                            <div class="product-tab-single-big-item">
                                <img src="{{Voyager::image($cars->image)}}" alt="img">
                            </div>
                            <!--// Single Item-->
                            <div class="product-tab-single-big-item">
                                <img src="assets/img/shop-details-02/02.png" alt="img">
                            </div>
                            <!--// Single Item-->
                            <div class="product-tab-single-big-item">
                                <img src="assets/img/shop-details-02/03.png" alt="img">
                            </div>
                            <!--// Single Item-->
                            <div class="product-tab-single-big-item">
                                <img src="assets/img/shop-details-02/04.png" alt="img">
                            </div>
                            <!--// Single Item-->
                            <div class="product-tab-single-big-item">
                                <img src="assets/img/shop-details-02/01.png" alt="img">
                            </div>
                            <!--// Single Item-->
                            <div class="product-tab-single-big-item">
                                <img src="assets/img/shop-details-02/02.png" alt="img">
                            </div>
                            <!--// Single Item-->
                            <!--// Single Item-->
                            <div class="product-tab-single-big-item">
                                <img src="assets/img/shop-details-02/03.png" alt="img">
                            </div>
                            <!--// Single Item-->
                        </div>
                        <!--Slider Active Class-->
                    </div>
                    <!--// Product Tab Big-->

                    <div class="Product-tab-small-active padding-top-30">
                        <div class="product-tab-single-small-item" data-slide-index="0">
                            <img src="assets/img/shop-details-02/small-01.png" alt="img">
                        </div>
                        <!--// Single Item-->
                        <div class="product-tab-single-small-item" data-slide-index="1">
                            <img src="assets/img/shop-details-02/small-02.png" alt="img">
                        </div>
                        <!--// Single Item-->
                        <div class="product-tab-single-small-item" data-slide-index="2">
                            <img src="assets/img/shop-details-02/small-03.png" alt="img">
                        </div>
                        <!--// Single Item-->

                        <!--// Single Item-->
                        <div class="product-tab-single-small-item" data-slide-index="3">
                            <img src="assets/img/shop-details-02/small-04.png" alt="img">
                        </div>
                        <!--// Single Item-->

                        <!--// Single Item-->
                        <div class="product-tab-single-small-item" data-slide-index="4">
                            <img src="assets/img/shop-details-02/small-01.png" alt="img">
                        </div>
                        <!--// Single Item-->

                        <!--// Single Item-->
                        <div class="product-tab-single-small-item" data-slide-index="5">
                            <img src="assets/img/shop-details-02/small-02.png" alt="img">
                        </div>
                        <!--// Single Item-->

                        <!--// Single Item-->
                        <div class="product-tab-single-small-item" data-slide-index="6">
                            <img src="assets/img/shop-details-02/small-03.png" alt="img">
                        </div>
                        <!--// Single Item-->

                    </div>
                    <!--// Slider Active Class-->

                    <!--Product Information-->
                    <div class="product-information padding-top-40 padding-bottom-100">
                        <ul class="nav nav-tabs" id="myTab" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link active" data-toggle="pill" href="#pills-overview">Description</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" data-toggle="pill" href="#pills-specification">Specification</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" data-toggle="pill" href="#pills-review">Reviews</a>
                            </li>
                        </ul>
                        <div class="tab-content description-tab-content">
                            <div class="tab-pane fade show active" id="pills-overview" role="tabpanel">
                                <p>
                                    {!! $cars->description !!}.
                                </p>
                            </div>
                            <!--// Tab Panel-->
                            <div class="tab-pane fade" id="pills-specification" role="tabpanel">
                                <div class="row">
                                    <div class="col-lg-6">
                                        <ul class="name-of-type-wrap ">
                                            <li class="name-of-type"><span class="gray">Kilométrage:</span> {{$cars->mileage}} </li>
                                            <li class="name-of-type"><span class="gray">Type carburant:</span>{{$cars->fuelType}}
                                            </li>
                                            <li class="name-of-type"><span class="gray">D&placement Moteur:</span> {{{$cars->engineDisplacement}}}</li>
                                            <li class="name-of-type"><span class="gray">Torque:</span>
                                                {{$cars->torque}}</li>
                                            <li class="name-of-type"><span class="gray">Type de moteur:</span>
                                                {{$cars->engineType}}</li>
                                            <li class="name-of-type"><span class="gray">Type Véhicule:</span> {{$cars->driveType}} </li>
                                            <li class="name-of-type"><span class="gray">Taille pneus:</span> {{$cars->wheelSize}}
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="col-lg-6">
                                        <ul class="name-of-type-wrap ">
                                            <li class="name-of-type"><span class="gray">Vitesse:</span>{{$cars->speed}}</li>
                                            <li class="name-of-type"><span class="gray">Transmission:</span>{{$cars->transmission}}
                                            </li>
                                            <li class="name-of-type"><span class="gray">Puissance:</span>{{$cars->Power}}
                                            </li>
                                            <li class="name-of-type"><span class="gray">NPMBREuméro du Cylindres:</span> {{$cars->cylinders}}</li>
                                            <li class="name-of-type"><span class="gray">Paigie de changement:</span>{{$cars->paddleShift}}</li>
                                            <li class="name-of-type"><span class="gray">Taille:</span> {{$cars->size}}
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <!--// Tab Panel-->
                            <div class="tab-pane fade" id="pills-review" role="tabpanel">
                                <div class="comment-area">
                                    <h5 class="comments-title padding-bottom-5">Comments:</h5>
                                    <ul class="comment-list">
                                        <li>
                                            <!-- single comment wrap -->
                                            <div class="single-comment-wrap align-items-center">
                                                <div class="thumb">
                                                    <img src="assets/img/blog/blog-details/avatar-01.png"
                                                         alt="comment images">
                                                </div>
                                                <div class="content bg-none">
                                                    <div class="title-area">
                                                        <h5 class="title padding-top-25">Adam Smith</h5>
                                                        <span class="date">July 24, 2019</span>
                                                    </div>
                                                    <div class="common-rating-style left">
                                                        <input type="radio" name="start1" id="start199"><label
                                                            for="start199"></label>
                                                        <input type="radio" name="start1" id="start299"><label
                                                            for="start299"></label>
                                                        <input type="radio" name="start1" id="start399"><label
                                                            for="start399"></label>
                                                        <input type="radio" name="start1" id="start499"><label
                                                            for="start499"></label>
                                                        <input type="radio" name="start1" id="start599"><label
                                                            for="start599"></label>
                                                    </div>
                                                    <div class="padding-10">
                                                        <p>Twitter Prototype Product management beta long tail business
                                                            cosumer user experience learning curve iteration seed money.
                                                            stealth startup lean startup equity focus metrics sales
                                                            channels influencer ecosystem monetization.</p>
                                                    </div>
                                                </div>
                                            </div><!-- // single comment wrap -->

                                            <ul class="children">
                                                <li>
                                                    <!-- single comment wrap -->
                                                    <div class="single-comment-wrap align-items-center">
                                                        <div class="thumb">
                                                            <img src="assets/img/blog/blog-details/avatar-02.png"
                                                                 alt="comment images">
                                                        </div>
                                                        <div class="content bg-none">
                                                            <div class="title-area">
                                                                <h5 class="title padding-top-25">Mohfuz Riad</h5>
                                                                <span class="date">August 2, 2019</span>
                                                            </div>
                                                            <div class="common-rating-style left">
                                                                <input type="radio" name="start1" id="start188"><label
                                                                    for="start188"></label>
                                                                <input type="radio" name="start1" id="start288"><label
                                                                    for="start288"></label>
                                                                <input type="radio" name="start1" id="start388"><label
                                                                    for="start388"></label>
                                                                <input type="radio" name="start1" id="start488"><label
                                                                    for="start488"></label>
                                                                <input type="radio" name="start1" id="start588"><label
                                                                    for="start588"></label>
                                                            </div>
                                                            <div class="padding-10">
                                                                <p>Twitter Prototype Product management beta long tail
                                                                    business cosumer user experience learning curve
                                                                    iteration seed money.
                                                                    stealth startup lean startup equity focus metrics
                                                                    sales channels influencer ecosystem monetization.
                                                                </p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!-- // single comment wrap -->
                                                </li>
                                            </ul>
                                        </li>

                                        <li>
                                            <!-- single comment wrap -->
                                            <div class="single-comment-wrap align-items-center">
                                                <div class="thumb">
                                                    <img src="assets/img/blog/blog-details/avatar-03.png"
                                                         alt="comment images">
                                                </div>
                                                <div class="content bg-none">
                                                    <div class="title-area">
                                                        <h5 class="title padding-top-25">Neem Uddin</h5>
                                                        <span class="date">September 10, 2019</span>
                                                    </div>
                                                    <div class="common-rating-style left">
                                                        <input type="radio" name="start1" id="start177"><label
                                                            for="start177"></label>
                                                        <input type="radio" name="start1" id="start277"><label
                                                            for="start277"></label>
                                                        <input type="radio" name="start1" id="start377"><label
                                                            for="start377"></label>
                                                        <input type="radio" name="start1" id="start477"><label
                                                            for="start477"></label>
                                                        <input type="radio" name="start1" id="start577"><label
                                                            for="start577"></label>
                                                    </div>
                                                    <div class="padding-10">
                                                        <p>Twitter Prototype Product management beta long tail business
                                                            cosumer user experience learning curve iteration seed money.
                                                            stealth startup lean startup equity focus metrics sales
                                                            channels influencer ecosystem monetization.</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- // single comment wrap -->
                                        </li>
                                    </ul>

                                    <!-- comment form wrap -->
                                    <div class="comment-form-wrap padding-top-85">
                                        <h5 class="reply-title">Add a Review</h5>
                                        <div class="form-area">
                                            <form action="https://codingeek.net/html/coche/blog-details.html">
                                                <div class="form-group">
                                                    <div class="row">
                                                        <div class="col-lg-12">
                                                            <textarea name="message" class="form-control"
                                                                      placeholder="Comment" rows="5"></textarea>
                                                        </div>
                                                        <div class="col-lg-6">
                                                            <input type="text" name="name" placeholder="Name"
                                                                   class="form-control">
                                                        </div>
                                                        <div class="col-lg-6">
                                                            <input type="email" name="email" placeholder="Email"
                                                                   class="form-control">
                                                        </div>
                                                        <div class="col-lg-12">
                                                            <div class="main-btn-wrap">
                                                                <input class="main-btn  black" type="submit"
                                                                       value="Submit">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                        <!--// Form Area-->
                                    </div>
                                </div>
                            </div>
                            <!--// Tab Panel-->
                        </div>
                    </div>
                    <!--// Product Information-->
                </div>

                <div class="col-lg-5">
                    <!--Product Description-->
                    <div class="product-description pl-lg-4">
                        <h4 class="title">{{$cars->title}}</h4>
                        <!--// Title-->
                        <div class="rating-wrap">
                            <div class="common-rating-style left">
                                <input type="radio" name="start1" id="start166"><label for="start166"></label>
                                <input type="radio" name="start1" id="start266"><label for="start266"></label>
                                <input type="radio" name="start1" id="start366"><label for="start366"></label>
                                <input type="radio" name="start1" id="start466"><label for="start466"></label>
                                <input type="radio" name="start1" id="start566"><label for="start566"></label>
                            </div>
                            <span class="how-many-rating"> (72 Customer Review)</span>
                        </div>
                        <!--// Rating Wrap-->
                        <div class="common-price-style">
                            Price: <span class="black">${{$cars->price}}</span>
                        </div>
                        <!--// Price-->

                        <div class="color-list style-02">
                            <span class="color-text">Color</span>
                            <ul class="color-list-row">
                                <li class="list-item"><a href="#"></a></li>
                                <li class="list-item gray"><a href="#"></a></li>
                                <li class="list-item black"><a href="#"></a></li>
                                <li class="list-item red"><a href="#"></a></li>
                                <li class="list-item yellow"><a href="#"></a></li>
                                <li class="list-item blue"><a href="#"></a></li>
                            </ul>
                        </div>
                        <!--// Color List-->

                        <div class="car-assets">
                            <div class="car-assets-item">
                                <div class="icon"><i class="flaticon-safety-seat"></i></div>
                                <div class="content">
                                    <div class="sub-title">Siège</div>
                                    <h5 class="title">{{$cars->seat}}</h5>
                                </div>
                            </div>
                            <!--// car assets item-->

                            <div class="car-assets-item">
                                <div class="icon"><i class="flaticon-signal-tower"></i></div>
                                <div class="content">
                                    <div class="sub-title">Transmission</div>
                                    <h5 class="title">{{$cars->transmission}}</h5>
                                </div>
                            </div>
                            <!--// car assets item-->

                            <div class="car-assets-item">
                                <div class="icon"><i class="flaticon-speedometer"></i></div>
                                <div class="content">
                                    <div class="sub-title">Kilométrage</div>
                                    <h5 class="title">{{$cars->mileage}}</h5>
                                </div>
                            </div>
                            <!--// car assets item-->
                        </div>
                        <!--// Car Assets-->

                        <div class="car-assets padding-top-10">
                            <div class="car-assets-item">
                                <div class="icon"><i class="flaticon-speedometer-1"></i></div>
                                <div class="content">
                                    <div class="sub-title">Vitesse</div>
                                    <h5 class="title">{{$cars->speed}}</h5>
                                </div>
                            </div>
                            <!--// car assets item-->

                            <div class="car-assets-item">
                                <div class="icon"><i class="flaticon-engine"></i></div>
                                <div class="content">
                                    <div class="sub-title">Puissance</div>
                                    <h5 class="title">{{$cars->Power}}</h5>
                                </div>
                            </div>
                            <!--// car assets item-->

                            <div class="car-assets-item">
                                <div class="icon"><i class="flaticon-fuel-station"></i></div>
                                <div class="content">
                                    <div class="sub-title">Amorcage</div>
                                    <h5 class="title">{{$cars->bootSpace}}</h5>
                                </div>
                            </div>
                            <!--// car assets item-->
                        </div>
                        <!--// Car Assets-->

                        <div class="cart-wrap padding-top-15 padding-bottom-30">
                            <input type="number" value="1" class="qty" min="1" />
                            <div class="main-btn-wrap">
                                <a href="#" class="main-btn black"><i class="flaticon-shopping-cart"></i> Add To
                                    Cart</a>
                            </div>
                        </div>
                        <!--// Cart Wrap-->
                    </div>
                    <!--// Product Description-->
                </div>

                <div class="col-lg-12">
                    <!--Related Product-->
                    <div class="related-product-area">
                        <div class="title padding-bottom-20">Related Vehicles</div>
                        <div class="row">
                            <div class="col-lg-3 col-md-6">
                                <!-- Grid List Column-->
                                <div class="grid-list-column-item style-02">
                                    <span class="price-drop-tag">New</span>
                                    <h5 class="title padding-top-30">Audi S3 Sedan</h5>
                                    <h6 class="sub-title">Model 2019</h6>
                                    <div class="thumb">
                                        <img src="assets/img/shop-details-02/related-01.png" alt="img">
                                    </div>
                                    <!--// Thumbnail-->
                                    <div class="price-wrap">
                                        <div class="price">
                                            <div class="common-price-style">
                                                <span class="black">$44,500</span>
                                            </div>
                                            <div class="common-rating-style">
                                                <input type="radio" name="start1" id="start13"><label
                                                    for="start13"></label>
                                                <input type="radio" name="start1" id="start23"><label
                                                    for="start23"></label>
                                                <input type="radio" name="start1" id="start33"><label
                                                    for="start33"></label>
                                                <input type="radio" name="start1" id="start43"><label
                                                    for="start43"></label>
                                                <input type="radio" name="start1" id="start53"><label
                                                    for="start53"></label>
                                            </div>
                                        </div>
                                        <div class="cart">
                                            <a href="#"><i class="icon flaticon-shopping-cart"></i></a>
                                        </div>
                                    </div>
                                    <!--// Price Wrap-->
                                    <div class="car-functional-wrap">
                                        <div class="car-functional-wrap__item">
                                            <div class="power">5.4s</div>
                                            <div class="icon flaticon-speedometer"></div>
                                            <div class="force">0-100kmph</div>
                                        </div>
                                        <div class="car-functional-wrap__item">
                                            <div class="power">280hp</div>
                                            <div class="icon flaticon-engine"></div>
                                            <div class="force">Engine Power</div>
                                        </div>
                                        <div class="car-functional-wrap__item">
                                            <div class="power">100.0</div>
                                            <div class="icon flaticon-fuel-station"></div>
                                            <div class="force">0-100kmph</div>
                                        </div>
                                    </div>
                                    <!--// Car Functional Wrap-->
                                </div>
                                <!--// Grid List Column-->
                            </div>
                            <div class="col-lg-3 col-md-6">
                                <!-- Grid List Column-->
                                <div class="grid-list-column-item style-02">
                                    <span class="price-drop-tag">New</span>
                                    <h5 class="title padding-top-30">Audi S3 Sedan</h5>
                                    <h6 class="sub-title">Model 2019</h6>
                                    <div class="thumb">
                                        <img src="assets/img/shop-details-02/related-02.png" alt="img">
                                    </div>
                                    <!--// Thumbnail-->
                                    <div class="price-wrap">
                                        <div class="price">
                                            <div class="common-price-style">
                                                <span class="black">$44,500</span>
                                            </div>
                                            <div class="common-rating-style">
                                                <input type="radio" name="start1" id="start14"><label
                                                    for="start14"></label>
                                                <input type="radio" name="start1" id="start24"><label
                                                    for="start24"></label>
                                                <input type="radio" name="start1" id="start34"><label
                                                    for="start34"></label>
                                                <input type="radio" name="start1" id="start44"><label
                                                    for="start44"></label>
                                                <input type="radio" name="start1" id="start54"><label
                                                    for="start54"></label>
                                            </div>
                                        </div>
                                        <div class="cart">
                                            <a href="#"><i class="icon flaticon-shopping-cart"></i></a>
                                        </div>
                                    </div>
                                    <!--// Price Wrap-->
                                    <div class="car-functional-wrap">
                                        <div class="car-functional-wrap__item">
                                            <div class="power">5.4s</div>
                                            <div class="icon flaticon-speedometer"></div>
                                            <div class="force">0-100kmph</div>
                                        </div>
                                        <div class="car-functional-wrap__item">
                                            <div class="power">280hp</div>
                                            <div class="icon flaticon-engine"></div>
                                            <div class="force">Engine Power</div>
                                        </div>
                                        <div class="car-functional-wrap__item">
                                            <div class="power">100.0</div>
                                            <div class="icon flaticon-fuel-station"></div>
                                            <div class="force">0-100kmph</div>
                                        </div>
                                    </div>
                                    <!--// Car Functional Wrap-->
                                </div>
                                <!--// Grid List Column-->
                            </div>
                            <div class="col-lg-3 col-md-6">
                                <!-- Grid List Column-->
                                <div class="grid-list-column-item style-02">
                                    <span class="price-drop-tag">New</span>
                                    <h5 class="title padding-top-30">Audi S3 Sedan</h5>
                                    <h6 class="sub-title">Model 2019</h6>
                                    <div class="thumb">
                                        <img src="assets/img/shop-details-02/related-03.png" alt="img">
                                    </div>
                                    <!--// Thumbnail-->
                                    <div class="price-wrap">
                                        <div class="price">
                                            <div class="common-price-style">
                                                <span class="black">$44,500</span>
                                            </div>
                                            <div class="common-rating-style">
                                                <input type="radio" name="start1" id="start15"><label
                                                    for="start15"></label>
                                                <input type="radio" name="start1" id="start25"><label
                                                    for="start25"></label>
                                                <input type="radio" name="start1" id="start35"><label
                                                    for="start35"></label>
                                                <input type="radio" name="start1" id="start45"><label
                                                    for="start45"></label>
                                                <input type="radio" name="start1" id="start55"><label
                                                    for="start55"></label>
                                            </div>
                                        </div>
                                        <div class="cart">
                                            <a href="#"><i class="icon flaticon-shopping-cart"></i></a>
                                        </div>
                                    </div>
                                    <!--// Price Wrap-->
                                    <div class="car-functional-wrap">
                                        <div class="car-functional-wrap__item">
                                            <div class="power">5.4s</div>
                                            <div class="icon flaticon-speedometer"></div>
                                            <div class="force">0-100kmph</div>
                                        </div>
                                        <div class="car-functional-wrap__item">
                                            <div class="power">280hp</div>
                                            <div class="icon flaticon-engine"></div>
                                            <div class="force">Engine Power</div>
                                        </div>
                                        <div class="car-functional-wrap__item">
                                            <div class="power">100.0</div>
                                            <div class="icon flaticon-fuel-station"></div>
                                            <div class="force">0-100kmph</div>
                                        </div>
                                    </div>
                                    <!--// Car Functional Wrap-->
                                </div>
                                <!--// Grid List Column-->
                            </div>
                            <div class="col-lg-3 col-md-6">
                                <!-- Grid List Column-->
                                <div class="grid-list-column-item style-02">
                                    <span class="price-drop-tag">New</span>
                                    <h5 class="title padding-top-30">Audi S3 Sedan</h5>
                                    <h6 class="sub-title">Model 2019</h6>
                                    <div class="thumb">
                                        <img src="assets/img/shop-details-02/related-04.png" alt="img">
                                    </div>
                                    <!--// Thumbnail-->
                                    <div class="price-wrap">
                                        <div class="price">
                                            <div class="common-price-style">
                                                <span class="black">$44,500</span>
                                            </div>
                                            <div class="common-rating-style">
                                                <input type="radio" name="start1" id="start16"><label
                                                    for="start16"></label>
                                                <input type="radio" name="start1" id="start26"><label
                                                    for="start26"></label>
                                                <input type="radio" name="start1" id="start36"><label
                                                    for="start36"></label>
                                                <input type="radio" name="start1" id="start46"><label
                                                    for="start46"></label>
                                                <input type="radio" name="start1" id="start56"><label
                                                    for="start56"></label>
                                            </div>
                                        </div>
                                        <div class="cart">
                                            <a href="#"><i class="icon flaticon-shopping-cart"></i></a>
                                        </div>
                                    </div>
                                    <!--// Price Wrap-->
                                    <div class="car-functional-wrap">
                                        <div class="car-functional-wrap__item">
                                            <div class="power">5.4s</div>
                                            <div class="icon flaticon-speedometer"></div>
                                            <div class="force">0-100kmph</div>
                                        </div>
                                        <div class="car-functional-wrap__item">
                                            <div class="power">280hp</div>
                                            <div class="icon flaticon-engine"></div>
                                            <div class="force">Engine Power</div>
                                        </div>
                                        <div class="car-functional-wrap__item">
                                            <div class="power">100.0</div>
                                            <div class="icon flaticon-fuel-station"></div>
                                            <div class="force">0-100kmph</div>
                                        </div>
                                    </div>
                                    <!--// Car Functional Wrap-->
                                </div>
                                <!--// Grid List Column-->
                            </div>
                        </div>
                    </div>
                    <!--// Related Product-->
                </div>

            </div>

        </div>
    </div>
    <!--// Product Details Tab-->
@endsection


