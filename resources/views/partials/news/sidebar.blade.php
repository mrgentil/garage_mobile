<div class="widget-area">
    <div class="widget widget_search blog-bg">
        <form action="#" class="search-form">
            <div class="form-group">
                <input type="text" class="form-control" placeholder="Recherche">
            </div>
            <button class="submit-btn" type="submit"><i class="fa fa-search"></i></button>
        </form>
    </div>
    <!--// Search Widget -->
    <div class="widget widget_nav_menu blog-bg radio-button">
        <h5 class="widget-title border-bottom">Catégories des News</h5>
        <ul>
            @foreach($categories as $category)
                <li><a href="#">{{ $category->name }} <span> (22)</span></a></li>
            @endforeach
        </ul>
    </div>
    <!--// Category Widget-->
    <div class="widget widget_recent_posts blog-bg style-01">
        <h5 class="widget-title border-bottom">Dernières News</h5>
        <ul class="recent_post_item">
            @foreach($latest_posts as $news)
                <li class="single-recent-post-item">
                    <div class="thumb">
                        <img src="{{ $news->image }}" alt="{{ $news->title }}">
                    </div>
                    <div class="content">
                        <h5 class="title"><a href="{{ $news->slug_link }}">{{ $news->title }}</a></h5>
                        <span class="time">14 May, 2019 </span>
                    </div>
                </li>
            @endforeach
        </ul>
    </div>
</div>
