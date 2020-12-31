<!--Navbar Area Start Here-->
<nav class="navbar navbar-area navbar-expand-lg style-02">
    <div class="container nav-container">
        <button class="navbar-toggler" type="button" data-toggle="collapse"
                data-target="#autoshop_main_menu" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="humberger-menu black">
                    <span class="one"></span>
                    <span class="two"></span>
                    <span class="three"></span>
                </span>
        </button>
        <div class="collapse navbar-collapse" id="autoshop_main_menu">
            <ul class="navbar-nav">
                <li class="{{ request()->is('/') ? '  current-menu-item': '' }}">
                    <a href="{{ route('home') }}">Accueil</a>
                </li>
                <li class="{{ request()->is('about-us') ? '  current-menu-item': '' }}"><a href="{{ route('about.index') }}">A propos</a></li>
                <li class="{{ request()->is('services') || request()->is('service/*') ? '  current-menu-item': '' }}">
                    <a href="{{ route('service.index') }}">Nos services</a>
                </li>
                <li class="{{ request()->is('cars') || request()->is('cars/*') ? '  current-menu-item': '' }}">
                    <a href="{{ route('cars.index') }}">Nos voitures</a>
                </li>
                <li class="{{ request()->is('news') || request()->is('news/*') ? '  current-menu-item': '' }}">
                    <a href="{{ route('news.index') }}">Blog</a>
                </li>

                <li class="{{ request()->is('contact-us') ? '  current-menu-item': '' }}"><a href="{{ route('contact.index') }}">Contact</a></li>

                @if (Route::has('login'))
                    @auth
                        <div class="nav-right-content black">
                            <ul>
                                <li class="cart show-cart">
                                    <a href="{{route('cart.index')}}" class="notification">
                                        <i class="fa fa-shopping-cart"></i>
                                        <span class="badge"> {{ \Cart::session(auth()->user()->id)->getTotalQuantity() }}</span>
                                    </a>
                                </li>
                                <li class="search" id="search">
                                    <i class="fa fa-search"></i>
                                </li>
                            </ul>
                        </div>
                        <li>
                            <a href="{{ route('logout') }}"
                               onclick="event.preventDefault();
                                                         document.getElementById('logout-form').submit();">
                                <i class="sl sl-icon-power"></i> Déconnexion
                            </a>
                        </li>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            @csrf
                        </form>
                    @else

                        <li class="{{ request()->is('login') ? '  current-menu-item': '' }}"><a href="{{ route('login') }}">Connexion</a></li>

                        @if (Route::has('register'))
                            <li class="{{ request()->is('register') ? '  current-menu-item': '' }}"><a href="{{ route('register') }}">Créer un Compte</a></li>
                        @endif
                    @endauth
                @endif
            </ul>
        </div>

    </div>
</nav>
<!-- navbar area end -->
