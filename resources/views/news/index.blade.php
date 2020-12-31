@extends('layouts.main')

@section('title') @parent Les News Du Blog @endsection

@section('description')
   {{-- {{ $page->meta_description }}--}}
@endsection

@section('keywords')
   {{-- {{ $page->meta_keywords }}--}}
@endsection

@section('meta-image')
   {{-- {{ Voyager::image($page->image) }}--}}
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
                                <h1 class="page-title">Les News Du Blog</h1>
                                <ul class="page-list">
                                    <li><a href="{{ route('home') }}">Accueil</a></li>
                                    <li>Les News Du Blog</li>
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
    <div class="blog-page-content padding-top-120 padding-bottom-100">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    @foreach($news as $new)
                        <!--Blog Single item-->
                        <div class="blog-single-item margin-bottom-60">
                            <div class="row">
                                <div class="col-md-6 px-lg-0">
                                    <div class="thumb-area-wrap">
                                        <div class="thumb-area">
                                            <div class="thumb">
                                                <img src="{{ $new->image }}" alt="{{ $new->title }}">
                                            </div>
                                            <div class="date">
                                                {{ $new->created_at_first_format }}
                                                <span class="day">22</span>
                                                <span class="month">Dec</span>
                                            </div>
                                        </div>
                                    </div>
                                    <!--// Thumbnail Area-->
                                </div>
                                <div class="col-md-6 px-lg-0">
                                    <div class="content">
                                        <h4 class="title"><a href="{{ $new->slug_link }}">{{ $new->title }}</a></h4>
                                        <div class="post-meta">
                                            <ul class="list-wrap">
                                                <li>
                                                    <div class="author"><a href="#"> {{--{{ $new->user->name }}--}}</a></div>
                                                </li>
                                            </ul>
                                            <ul class="list-wrap two">
                                                <li><i class="flaticon-comment"></i><a href="#"> {{ count($new->comments) }}</a></li>
                                            </ul>
                                        </div>
                                        <div class="padding-30">
                                            <p>
                                                {{ $new->excerpt }}
                                            </p>
                                        </div>
                                        <div class="read-more-area">
                                            <div class="read-more">
                                                <a href="{{ $new->slug_link }}">voir plus</a>
                                            </div>
                                            <div class="share">
                                                <span class="share-text">Partager</span>
                                                <div class="line-shap">
                                                    <span class="caret"></span>
                                                </div>
                                                <div class="share-icon">
                                                    <ul class="icon-wrap">
                                                        <li><a class="icon" href="https://www.facebook.com/codingeek.net/"
                                                               target="_blank"><i class="fab fa-facebook-f"></i></a></li>
                                                        <li><a class="icon" href="https://twitter.com/codingeeknet"
                                                               target="_blank"><i class="fab fa-twitter"></i></a></li>
                                                        <li><a class="icon" href="https://www.instagram.com/codingeeknet"
                                                               target="_blank"><i class="fab fa-instagram"></i></a></li>
                                                        <li><a class="icon"
                                                               href="https://www.linkedin.com/company/codingeek/about"
                                                               target="_blank"><i class="fab fa-linkedin-in"></i></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--// Blog Single item-->
                    @endforeach
                    <!-- Pagination-->
                    <div class="col-lg-12 margin-bottom-60">
                        <div class="blog-pagination text-center">
                            {{ $news->links() }}
                        </div>
                    </div>
                    <!--// Pagination-->
                </div>

                <div class="col-lg-4">
                    @include('partials.news.sidebar')
                </div>
            </div>
        </div>
        <!--// Container-->
    </div>
    <!--// Blog Page Content-->
@endsection
