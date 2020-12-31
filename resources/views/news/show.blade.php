@extends('layouts.main')

@section('title') @parent News : {{ $news->title }} @endsection

@section('description')
    {{ $news->meta_description }}
@endsection

@section('keywords')
    {{ $news->meta_keywords }}
@endsection
@section('meta-image')
    {{ Voyager::image($news->image) }}
@endsection

@section('content')
    <!--Breadcrumb Start-->
    <div class="breadcrumb-area style-02">
        <div class="container">
            <div class="row">
                <div class="breadcrumb-inner">
                    <div class="breadcrumb-left">
                        <div class="breadcrumb-inner-wrap">
                            <div class="breadcrumb-border">
                                <h1 class="page-title">{{ $news->title }}</h1>
                                <ul class="page-list">
                                    <li><a href="{{ route('home') }}">Accueil</a></li>
                                    <li>{{ $news->title }}</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="breadcrumb-right">
                        <div class="breadcrumb-thumb" style="background-image: url({{ asset('assets/img/breadcrumb/03.png') }})">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--// Breadcrumb End-->


    <!--Blog Page Content-->
    <div class="blog-page-content padding-top-120 padding-bottom-95">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <div class="blog-details-wrap">
                        <!--Blog Details item-->
                        <div class="blog-details-items">
                            <div class="content bg-none">
                                <h3 class="title"></h3>{{ $news->title }}
                                <div class="post-meta border-none padding-top-20">
                                    <ul class="list-wrap">
                                        <li>
                                            <div class="author"><a href="#"> {{ $news->user->name }}</a></div>
                                        </li>
                                    </ul>
                                    <ul class="list-wrap two">
                                        <li><i class="flaticon-comment"></i><a href="#"> {{ count($news->comments) }}</a></li>
                                    </ul>
                                </div>
                                <div class="padding-30">
                                   <p>
                                       {{ $news->excerpt }}
                                   </p>
                                </div>
                            </div>
                            <!--// Content-->

                            <div class="thumb">
                                <img src="{{ $news->image }}" alt="{{ $news->title }}">
                            </div>
                            <!--// Thumbnail Area-->

                            <div class="padding-30">
                                {!! $news->body !!}
                            </div>

                        </div>
                        <!--// Blog Details item-->

                        <div class="blog-details-footer">
                            <div class="left">
                                <div class="share-icon">
                                    <ul class="icon-wrap">
                                        <li class="share-text">Partager:</li>
                                        <li><a class="icon" href="https://www.facebook.com/codingeek.net/"
                                               target="_blank"><i class="fab fa-facebook-f"></i></a></li>
                                        <li><a class="icon" href="https://twitter.com/codingeeknet" target="_blank"><i
                                                    class="fab fa-twitter"></i></a></li>
                                        <li><a class="icon" href="https://www.instagram.com/codingeeknet"
                                               target="_blank"><i class="fab fa-instagram"></i></a></li>
                                        <li><a class="icon" href="https://www.linkedin.com/company/codingeek/about"
                                               target="_blank"><i class="fab fa-linkedin-in"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                            <!--// Left-->

                            <div class="right">
                                <ul class="list-wrap">
                                    <li><i class="icon flaticon-heart"></i> <a href="#"> Like</a></li>
                                    <li><i class="flaticon-comment"></i><a href="#"> Comment</a></li>
                                </ul>
                            </div>
                            <!--// Right-->
                        </div>
                        <!--// Blog Details Footer-->

                        <!--Comment area-->

                        <div class="comment-area padding-top-120">
                            <h5 class="comments-title">Commentaires:</h5>
                            @comments([
                            'model' => $news,
                            'approved' => true
                            ])
                        </div>
                        <!--// Comment area-->
                    </div>
                </div>

                <div class="col-lg-4">
                    @include('partials.news.sidebar')
                </div>
            </div>
        </div>
        <!--// Container-->
    </div>
    <!--// Blog Page Content-->

    <!--Blog Related Post-->
    <div class="related-post padding-bottom-95">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <!--Section Title-->
                    <div class="section-title">
                        <div class="padding-bottom-20">
                            <h5 class="related-post-title">Related Posts</h5>
                        </div>
                    </div>
                    <!--// Section Title-->
                </div>
                <div class="col-lg-12">
                    <div class="row">
                        @foreach($related_posts as $related_post)
                            <div class="col-lg-3 col-md-6">
                            <div class="latest-news-slider-items">
                                <div class="cards">
                                    <div class="cards-img"><img src="{{ $related_post->image }}"
                                                                alt="{{ $related_post->title }}"></div>
                                    <div class="cards-body">
                                        <div class="padding-bottom-30 padding-top-10">
                                            <h5 class="heading-05"><a href="{{ $related_post->slug_link }}">{{ $related_post->title }}</a></h5>
                                        </div>
                                        <div class="name-date">
                                            <div class="author-name">{{ $related_post->user->name }}</div>
                                            <div class="publish-date">May 26, 2019</div>
                                        </div>
                                    </div>
                                    <!--// Cards Body-->
                                </div>
                                <!--//cards-->
                            </div>
                            <!--// Items-->
                        </div>
                        @endforeach
                    </div>
                    <!--// Latest News Slider Wrap-->
                </div>
            </div>
        </div>
    </div>
    <!--// Blog Related Post-->

@endsection


