<!-- footer area start -->
<footer class="footer-area style-02" style="background-image: url({{ asset('assets/img/bg/footer-bg.png') }})">
    <div class="footer-top ">
        <div class="container">
            <div class="row">
                <div class="footer-subscribe-area">
                    <h4 class="title">Abonnez - vous et Obtenez les dernières nouvelles d'Ümoja Trans</h4>
                    <div class="subscribe-area">
                        <form>
                            <div class="input-group">
                                <input type="email" class="form-control" placeholder="Enter your email address">
                                <div class="input-group-append">
                                    <div class="input-group-text">
                                        <input type="submit" value="Subscribe">
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>

            <div class="row padding-top-125 padding-bottom-45">
                <div class="col-lg-4 col-md-6 px-lg-0">
                    <div class="footer-widget widget">
                        <div class="about_us_widget">
                            <a href="{{ route('home') }}" class="footer-logo">
                                <img src="{{ Voyager::image(setting('site.logo')) }}" alt="footer logo"></a>
                            <p>We believe brand interaction is key in commu- nication. Real innovations and a
                                positive customer
                                experience are the heart of successful communication.</p>

                            <div class="footer-social-icon padding-top-10">
                                <div class="banner__header__follow_us">
                                    <div class="text">FOLLOW US</div>
                                    <div class="banner__header__icon">
                                        <ul>
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
                <div class="col-lg-2 offset-lg-1 col-md-6 px-lg-0">
                    <div class="footer-widget widget widget_nav_menu">
                        <h5 class="widget-title">Liens Utiles</h5>
                        <ul>
                            <li><a href="{{ route('home') }}">Accueil</a></li>
                            <li><a href="{{ route('about.index') }}">A propos</a></li>
                            <li><a href="{{ route('news.index') }}">News</a></li>
                            <li><a href="{{ route('service.index') }}">Services</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-2 col-md-6 px-lg-0">
                    <div class="footer-widget widget widget_nav_menu">
                        <h5 class="widget-title">Nos Services</h5>
                        <ul>
                            @foreach($all_services as $service)
                                <li><a href="{{ $service->order }}">{{ title_case($service->name) }}</a></li>
                            @endforeach
                        </ul>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 px-lg-0">
                    <div class="footer-widget widget">
                        <h5 class="widget-title">Nous Contacter</h5>
                        <div class="contact-area">
                            <ul>
                                <li><i class="icon flaticon-pin"></i><a href="#">Lavaca Street, Suite 2000 Austin,
                                        TX 24141</a></li>
                                <li><i class="icon flaticon-email"></i><a href="#">autoshop@gmail.com</a></li>
                                <li><i class="icon flaticon-call-answer"></i><a href="#">(+88) 0172 570051</a></li>
                                <li><i class="icon flaticon-global"></i><a href="#">www.autoshop.com</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="copyright-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="copyright-area-inner">
                        &copy;  Ümoja Driving Solution . Powered with <span class="coypright-icon"><i
                                class="fas fa-heart"></i></span> 
                        <a href="https://umojatechnology.com/" target="_blank">Ümoja Technology</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>
<!-- footer area end -->

<!-- back to top area start -->
<div class="back-to-top">
    <span class="back-top"> <img src="{{ asset('assets/img/back-to-top.png') }}" alt="img"> </span>
</div>
<!-- back to top area end -->
