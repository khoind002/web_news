@extends('Client.layout')
@section('content')
<main class="main oh" id="main">

<section class="featured-posts-grid bg-dark">
            <div class="container clearfix">

                <!-- Large post slider -->
                <div class="featured-posts-grid__item featured-posts-grid__item--lg">
                    <div id="owl-hero-grid" class="owl-carousel owl-theme owl-carousel--dots-inside">

                        <article class="entry featured-posts-grid__entry">
                            <div class="thumb-bg-holder owl-lazy" data-src="images/blog/featured_grid_slide_1.jpg">
                                <img src="img/blog/featured_grid_slide_1.jpg" alt="" class="d-none">
                                <a href="#" class="thumb-url"></a>
                                <div class="bottom-gradient"></div>
                            </div>

                            <div class="thumb-text-holder">
                                <a href="" class="entry__meta-category entry__meta-category-color entry__meta-category-color--salad">Lifestyle</a>
                                <h2 class="thumb-entry-title">
                                    <a href="#">See a 360-Degree View of the Top of the Everest</a>
                                </h2>
                            </div>
                        </article>

                        <article class="entry featured-posts-grid__entry">
                            <div class="thumb-bg-holder owl-lazy" data-src="images/blog/featured_grid_slide_2.jpg">
                                <img src="img/blog/featured_grid_slide_2.jpg" alt="" class="d-none">
                                <a href="#" class="thumb-url"></a>
                                <div class="bottom-gradient"></div>
                            </div>

                            <div class="thumb-text-holder">
                                <a href="#" class="entry__meta-category entry__meta-category-color entry__meta-category-color--blue">Business</a>
                                <h2 class="thumb-entry-title">
                                    <a href="#">BRICS Nations Agree to Create Own Development Bank</a>
                                </h2>
                            </div>
                        </article>

                        <article class="entry featured-posts-grid__entry">
                            <div class="thumb-bg-holder owl-lazy" data-src="images/blog/featured_grid_slide_3.jpg">
                                <img src="img/blog/featured_grid_slide_3.jpg" alt="" class="d-none">
                                <a href="#" class="thumb-url"></a>
                                <div class="bottom-gradient"></div>
                            </div>

                            <div class="thumb-text-holder">
                                <a href="#" class="entry__meta-category entry__meta-category-color entry__meta-category-color--purple">Tech</a>
                                <h2 class="thumb-entry-title">
                                    <a href="#">Tesla's Giant Battery Farm Is Now Live in South Australia</a>
                                </h2>
                            </div>
                        </article>

                    </div>
                    <!-- end owl slider -->
                </div>
                <!-- end large post slider -->


                <div class="featured-posts-grid__item featured-posts-grid__item--sm">
                    <article class="entry featured-posts-grid__entry">
                        <div class="thumb-bg-holder" style="background-image: url(images/blog/featured_grid_2.jpg);">
                            <a href="#" class="thumb-url"></a>
                            <div class="bottom-gradient"></div>
                        </div>

                        <div class="thumb-text-holder">
                            <h2 class="thumb-entry-title thumb-entry-title--sm">
                                <a href="#">These Are the 20 Best Places to Work in 2018</a>
                            </h2>
                            <ul class="entry__meta">
                                <li class="entry__meta-author">
                                <i class="fa-solid fa-user"></i>

                                    <a href="#">Đăng Khôi</a>
                                </li>
                                <li class="entry__meta-date">
                                    <i class="fa-solid fa-calendar-days"></i> 21 October, 2017
                                </li>
                                <li class="entry__meta-comments">
                                    <i class="fa-solid fa-comments"></i>
                                    <a href="#">115</a>
                                </li>
                            </ul>
                        </div>
                    </article>
                </div>

                <div class="featured-posts-grid__item featured-posts-grid__item--sm">
                    <article class="entry featured-posts-grid__entry">
                        <div class="thumb-bg-holder" style="background-image: url(images/blog/featured_grid_3.jpg);">
                            <a href="#" class="thumb-url"></a>
                            <div class="bottom-gradient"></div>
                        </div>

                        <div class="thumb-text-holder">
                            <h2 class="thumb-entry-title thumb-entry-title--sm">
                                <a href="#">Experience the Grand Canyon National Park</a>
                            </h2>
                            <ul class="entry__meta">
                                <li class="entry__meta-author">
                                <i class="fa-solid fa-user"></i>
                                    <a href="#">Đăng Khôi</a>
                                </li>
                                <li class="entry__meta-date">
                                    <i class="fa-solid fa-calendar-days"></i> 21 October, 2017
                                </li>
                                <li class="entry__meta-comments">
                                    <i class="fa-solid fa-comments"></i>
                                    <a href="#">115</a>
                                </li>
                            </ul>
                        </div>
                    </article>
                </div>

            </div>
        </section>
        <!-- end featured posts grid -->

        <div class="main-container container mt-40" id="main-container">

            <!-- Content -->
            <div class="row">

                <!-- Posts -->
                <div class="col-lg-8 blog__content mb-30">

                    <!-- Hot News -->
                    <section class="section tab-post mb-10">
                        <div class="title-wrap">
                            <h3 class="section-title">Hot News</h3>

                            <!-- <div class="tabs tab-post__tabs">
                                <ul class="tabs__list">
                                    <li class="tabs__item tabs__item--active">
                                        <a href="#tab-all" class="tabs__trigger">All</a>
                                    </li>
                                    <li class="tabs__item">
                                        <a href="#tab-world" class="tabs__trigger">World</a>
                                    </li>
                                    <li class="tabs__item">
                                        <a href="#tab-business" class="tabs__trigger">Business</a>
                                    </li>
                                    <li class="tabs__item">
                                        <a href="#tab-politics" class="tabs__trigger">Politics</a>
                                    </li>
                                    <li class="tabs__item">
                                        <a href="#tab-marketing" class="tabs__trigger">Marketing</a>
                                    </li>
                                </ul>
                            </div> -->
                        </div>

                        <!-- tab content -->
                        <div class="tabs__content tabs__content-trigger tab-post__tabs-content">

                            <div class="tabs__content-pane tabs__content-pane--active" id="tab-all">
                                
                                <div class="row">
                                @foreach($data->take(6)  as  $post)
                                    <div class="col-md-6">
                                        <article class="entry">
                                            <div class="entry__img-holder">
                                                <a href="/detail/{{$post->id}}">
                                                    <div class="thumb-container thumb-75">                                                        
                                                        @if ($post->urlHinh && file_exists(public_path($post->urlHinh)))
                                                            <img class="img_news" src="{{asset($post->urlHinh)}}" alt="ảnh tin">
                                                        @else
                                                            <img class="img_news" src="{{asset('images/default.jpg')}}" alt="ảnh tin">
                                                        @endif



                                                    </div>
                                                </a>
                                            </div>

                                            <div class="entry__body">
                                                <div class="entry__header">
                                                    <h2 class="entry__title">
                                                        <a href="#">{{$post->tieuDe}}</a>
                                                    </h2>
                                                    <ul class="entry__meta">
                                                        <li class="entry__meta-author">
                                                        <i class="fa-solid fa-user"></i>
                                                            <a href="#">tác giả</a>
                                                        </li>
                                                        <li class="entry__meta-date">
                                                            <i class="fa-solid fa-calendar-days"></i> {{$post->ngayDang}}
                                                        </li>
                                                        <li class="entry__meta-comments">
                                                            <i class="fa-solid fa-comments"></i>
                                                            <a href="#">{{$post->xem}}</a>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <div class="entry__excerpt">
                                                    <p>{{$post->tomTat}}</p>
                                                </div>
                                            </div>
                                        </article>
                                    </div>
                                    @endforeach
                                </div>
                            </div>
                            <!-- end pane 1 -->
                            <div class="tabs__content-pane" id="tab-world">
                                <div class="row">
                                    <div class="col-md-6">
                                        <article class="entry">
                                            <div class="entry__img-holder">
                                                <a href="#">
                                                    <div class="thumb-container thumb-75">
                                                        <img data-src="img/blog/grid_post_img_1.jpg" src="img/empty.png" class="entry__img lazyload" alt="" />
                                                    </div>
                                                </a>
                                            </div>

                                            <div class="entry__body">
                                                <div class="entry__header">
                                                    <a href="#" class="entry__meta-category">science</a>
                                                    <h2 class="entry__title">
                                                        <a href="#">Optimal Amount of Rainfall for Plants</a>
                                                    </h2>
                                                    <ul class="entry__meta">
                                                        <li class="entry__meta-author">
                                                        <i class="fa-solid fa-user"></i>

                                                            <a href="#">Đăng Khôi</a>
                                                        </li>
                                                        <li class="entry__meta-date">
                                                            <i class="fa-solid fa-calendar-days"></i> 21 October, 2017
                                                        </li>
                                                        <li class="entry__meta-comments">
                                                            <i class="fa-solid fa-comments"></i>
                                                            <a href="#">115</a>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <div class="entry__excerpt">
                                                    <p>Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos. Lorem ipsum dolor sit amet, consectetur adipiscing elit...</p>
                                                </div>
                                            </div>
                                        </article>
                                    </div>
                                    <div class="col-md-6">
                                        <article class="entry">
                                            <div class="entry__img-holder">
                                                <a href="#">
                                                    <div class="thumb-container thumb-75">
                                                        <img data-src="img/blog/grid_post_img_2.jpg" src="img/empty.png" class="entry__img lazyload" alt="" />
                                                    </div>
                                                </a>
                                            </div>

                                            <div class="entry__body">
                                                <div class="entry__header">
                                                    <a href="#" class="entry__meta-category">business</a>
                                                    <h2 class="entry__title">
                                                        <a href="#">BRICS Nations Agree to Create Own Development Bank</a>
                                                    </h2>
                                                    <ul class="entry__meta">
                                                        <li class="entry__meta-author">
                                                        <i class="fa-solid fa-user"></i>

                                                            <a href="#">Đăng Khôi</a>
                                                        </li>
                                                        <li class="entry__meta-date">
                                                            <i class="fa-solid fa-calendar-days"></i> 21 October, 2017
                                                        </li>
                                                        <li class="entry__meta-comments">
                                                            <i class="fa-solid fa-comments"></i>
                                                            <a href="#">115</a>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <div class="entry__excerpt">
                                                    <p>Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos. Lorem ipsum dolor sit amet, consectetur adipiscing elit...</p>
                                                </div>
                                            </div>
                                        </article>
                                    </div>
                                </div>
                            </div>
                            <!-- end pane 2 -->
                            <div class="tabs__content-pane" id="tab-business">
                                <div class="row">
                                    <div class="col-md-6">
                                        <article class="entry">
                                            <div class="entry__img-holder">
                                                <a href="#">
                                                    <div class="thumb-container thumb-75">
                                                        <img data-src="img/blog/grid_post_img_1.jpg" src="img/empty.png" class="entry__img lazyload" alt="" />
                                                    </div>
                                                </a>
                                            </div>

                                            <div class="entry__body">
                                                <div class="entry__header">
                                                    <a href="#" class="entry__meta-category">science</a>
                                                    <h2 class="entry__title">
                                                        <a href="#">Optimal Amount of Rainfall for Plants</a>
                                                    </h2>
                                                    <ul class="entry__meta">
                                                        <li class="entry__meta-author">
                                                        <i class="fa-solid fa-user"></i>

                                                            <a href="#">Đăng Khôi</a>
                                                        </li>
                                                        <li class="entry__meta-date">
                                                            <i class="fa-solid fa-calendar-days"></i> 21 October, 2017
                                                        </li>
                                                        <li class="entry__meta-comments">
                                                            <i class="fa-solid fa-comments"></i>
                                                            <a href="#">115</a>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <div class="entry__excerpt">
                                                    <p>Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos. Lorem ipsum dolor sit amet, consectetur adipiscing elit...</p>
                                                </div>
                                            </div>
                                        </article>
                                    </div>
                                    <div class="col-md-6">
                                        <article class="entry">
                                            <div class="entry__img-holder">
                                                <a href="#">
                                                    <div class="thumb-container thumb-75">
                                                        <img data-src="img/blog/grid_post_img_2.jpg" src="img/empty.png" class="entry__img lazyload" alt="" />
                                                    </div>
                                                </a>
                                            </div>

                                            <div class="entry__body">
                                                <div class="entry__header">
                                                    <a href="#" class="entry__meta-category">business</a>
                                                    <h2 class="entry__title">
                                                        <a href="#">BRICS Nations Agree to Create Own Development Bank</a>
                                                    </h2>
                                                    <ul class="entry__meta">
                                                        <li class="entry__meta-author">
                                                        <i class="fa-solid fa-user"></i>

                                                            <a href="#">Đăng Khôi</a>
                                                        </li>
                                                        <li class="entry__meta-date">
                                                            <i class="fa-solid fa-calendar-days"></i> 21 October, 2017
                                                        </li>
                                                        <li class="entry__meta-comments">
                                                            <i class="fa-solid fa-comments"></i>
                                                            <a href="#">115</a>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <div class="entry__excerpt">
                                                    <p>Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos. Lorem ipsum dolor sit amet, consectetur adipiscing elit...</p>
                                                </div>
                                            </div>
                                        </article>
                                    </div>
                                </div>
                            </div>
                            <!-- end pane 3 -->
                            <div class="tabs__content-pane" id="tab-politics">
                                <div class="row">
                                    <div class="col-md-6">
                                        <article class="entry">
                                            <div class="entry__img-holder">
                                                <a href="#">
                                                    <div class="thumb-container thumb-75">
                                                        <img data-src="img/blog/grid_post_img_1.jpg" src="img/empty.png" class="entry__img lazyload" alt="" />
                                                    </div>
                                                </a>
                                            </div>

                                            <div class="entry__body">
                                                <div class="entry__header">
                                                    <a href="#" class="entry__meta-category">science</a>
                                                    <h2 class="entry__title">
                                                        <a href="#">Optimal Amount of Rainfall for Plants</a>
                                                    </h2>
                                                    <ul class="entry__meta">
                                                        <li class="entry__meta-author">
                                                        <i class="fa-solid fa-user"></i>

                                                            <a href="#">Đăng Khôi</a>
                                                        </li>
                                                        <li class="entry__meta-date">
                                                            <i class="fa-solid fa-calendar-days"></i> 21 October, 2017
                                                        </li>
                                                        <li class="entry__meta-comments">
                                                            <i class="fa-solid fa-comments"></i>
                                                            <a href="#">115</a>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <div class="entry__excerpt">
                                                    <p>Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos. Lorem ipsum dolor sit amet, consectetur adipiscing elit...</p>
                                                </div>
                                            </div>
                                        </article>
                                    </div>
                                    <div class="col-md-6">
                                        <article class="entry">
                                            <div class="entry__img-holder">
                                                <a href="#">
                                                    <div class="thumb-container thumb-75">
                                                        <img data-src="img/blog/grid_post_img_2.jpg" src="img/empty.png" class="entry__img lazyload" alt="" />
                                                    </div>
                                                </a>
                                            </div>

                                            <div class="entry__body">
                                                <div class="entry__header">
                                                    <a href="#" class="entry__meta-category">business</a>
                                                    <h2 class="entry__title">
                                                        <a href="#">BRICS Nations Agree to Create Own Development Bank</a>
                                                    </h2>
                                                    <ul class="entry__meta">
                                                        <li class="entry__meta-author">
                                                        <i class="fa-solid fa-user"></i>

                                                            <a href="#">Đăng Khôi</a>
                                                        </li>
                                                        <li class="entry__meta-date">
                                                            <i class="fa-solid fa-calendar-days"></i> 21 October, 2017
                                                        </li>
                                                        <li class="entry__meta-comments">
                                                            <i class="fa-solid fa-comments"></i>
                                                            <a href="#">115</a>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <div class="entry__excerpt">
                                                    <p>Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos. Lorem ipsum dolor sit amet, consectetur adipiscing elit...</p>
                                                </div>
                                            </div>
                                        </article>
                                    </div>
                                </div>
                            </div>
                            <!-- end pane 4 -->
                            <div class="tabs__content-pane" id="tab-marketing">
                                <div class="row">
                                    <div class="col-md-6">
                                        <article class="entry">
                                            <div class="entry__img-holder">
                                                <a href="#">
                                                    <div class="thumb-container thumb-75">
                                                        <img data-src="img/blog/grid_post_img_1.jpg" src="img/empty.png" class="entry__img lazyload" alt="" />
                                                    </div>
                                                </a>
                                            </div>

                                            <div class="entry__body">
                                                <div class="entry__header">
                                                    <a href="#" class="entry__meta-category">science</a>
                                                    <h2 class="entry__title">
                                                        <a href="#">Optimal Amount of Rainfall for Plants</a>
                                                    </h2>
                                                    <ul class="entry__meta">
                                                        <li class="entry__meta-author">
                                                        <i class="fa-solid fa-user"></i>

                                                            <a href="#">Đăng Khôi</a>
                                                        </li>
                                                        <li class="entry__meta-date">
                                                            <i class="fa-solid fa-calendar-days"></i> 21 October, 2017
                                                        </li>
                                                        <li class="entry__meta-comments">
                                                            <i class="fa-solid fa-comments"></i>
                                                            <a href="#">115</a>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <div class="entry__excerpt">
                                                    <p>Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos. Lorem ipsum dolor sit amet, consectetur adipiscing elit...</p>
                                                </div>
                                            </div>
                                        </article>
                                    </div>
                                    <div class="col-md-6">
                                        <article class="entry">
                                            <div class="entry__img-holder">
                                                <a href="#">
                                                    <div class="thumb-container thumb-75">
                                                        <img data-src="img/blog/grid_post_img_2.jpg" src="img/empty.png" class="entry__img lazyload" alt="" />
                                                    </div>
                                                </a>
                                            </div>

                                            <div class="entry__body">
                                                <div class="entry__header">
                                                    <a href="#" class="entry__meta-category">business</a>
                                                    <h2 class="entry__title">
                                                        <a href="#">BRICS Nations Agree to Create Own Development Bank</a>
                                                    </h2>
                                                    <ul class="entry__meta">
                                                        <li class="entry__meta-author">
                                                        <i class="fa-solid fa-user"></i>

                                                            <a href="#">Đăng Khôi</a>
                                                        </li>
                                                        <li class="entry__meta-date">
                                                            <i class="fa-solid fa-calendar-days"></i> 21 October, 2017
                                                        </li>
                                                        <li class="entry__meta-comments">
                                                            <i class="fa-solid fa-comments"></i>
                                                            <a href="#">115</a>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <div class="entry__excerpt">
                                                    <p>Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos. Lorem ipsum dolor sit amet, consectetur adipiscing elit...</p>
                                                </div>
                                            </div>
                                        </article>
                                    </div>
                                </div>
                            </div>
                            <!-- end pane 5 -->
                        </div>
                        <!-- end tab content -->
                    </section>
                    <!-- end hot news -->

                    <!-- Latest News -->
                    <section class="section">
                        <div class="title-wrap">
                            <h3 class="section-title">Latest News</h3>
                            <a href="#" class="all-posts-url">View All</a>
                        </div>

                        <article class="entry post-list">
                            <div class="entry__img-holder post-list__img-holder">
                                <a href="#">
                                    <div class="thumb-container thumb-75">
                                        <img data-src="img/blog/list_post_img_1.jpg" src="img/empty.png" class="entry__img lazyload" alt="">
                                    </div>
                                </a>
                            </div>

                            <div class="entry__body post-list__body">
                                <div class="entry__header">
                                    <a href="#" class="entry__meta-category">business</a>
                                    <h2 class="entry__title">
                                        <a href="#">Your Business Is Talking. Do You Have the Tools to Listen?</a>
                                    </h2>
                                    <ul class="entry__meta">
                                        <li class="entry__meta-author">
                                        <i class="fa-solid fa-user"></i>

                                            <a href="#">Đăng Khôi</a>
                                        </li>
                                        <li class="entry__meta-date">
                                            <i class="fa-solid fa-calendar-days"></i> 21 October, 2017
                                        </li>
                                        <li class="entry__meta-comments">
                                            <i class="fa-solid fa-comments"></i>
                                            <a href="#">115</a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="entry__excerpt">
                                    <p>Point of Sale hardware, the till at a shop check out, has become very complex over the past ten years. Modern POS hardware includes the cash till, bar-code readers...</p>
                                </div>
                            </div>
                        </article>

                        <article class="entry post-list">
                            <div class="entry__img-holder post-list__img-holder">
                                <a href="#">
                                    <div class="thumb-container thumb-75">
                                        <img data-src="img/blog/list_post_img_2.jpg" src="img/empty.png" class="entry__img lazyload" alt="">
                                    </div>
                                </a>
                            </div>

                            <div class="entry__body post-list__body">
                                <div class="entry__header">
                                    <a href="#" class="entry__meta-category">tech</a>
                                    <h2 class="entry__title">
                                        <a href="#">Removing Bitcoin payments from Steam is a smart move by Valve</a>
                                    </h2>
                                    <ul class="entry__meta">
                                        <li class="entry__meta-author">
                                        <i class="fa-solid fa-user"></i>

                                            <a href="#">Đăng Khôi</a>
                                        </li>
                                        <li class="entry__meta-date">
                                            <i class="fa-solid fa-calendar-days"></i> 21 October, 2017
                                        </li>
                                        <li class="entry__meta-comments">
                                            <i class="fa-solid fa-comments"></i>
                                            <a href="#">115</a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="entry__excerpt">
                                    <p>Point of Sale hardware, the till at a shop check out, has become very complex over the past ten years. Modern POS hardware includes the cash till, bar-code readers...</p>
                                </div>
                            </div>
                        </article>

                        <article class="entry post-list">
                            <div class="entry__img-holder post-list__img-holder">
                                <a href="#">
                                    <div class="thumb-container thumb-75">
                                        <img data-src="img/blog/list_post_img_3.jpg" src="img/empty.png" class="entry__img lazyload" alt="">
                                    </div>
                                </a>
                            </div>

                            <div class="entry__body post-list__body">
                                <div class="entry__header">
                                    <a href="#" class="entry__meta-category">fashion</a>
                                    <h2 class="entry__title">
                                        <a href="#">This Is the Burberry Bag Every Fashion Girl Wanted 15 Years Ago</a>
                                    </h2>
                                    <ul class="entry__meta">
                                        <li class="entry__meta-author">
                                        <i class="fa-solid fa-user"></i>

                                            <a href="#">Đăng Khôi</a>
                                        </li>
                                        <li class="entry__meta-date">
                                            <i class="fa-solid fa-calendar-days"></i> 21 October, 2017
                                        </li>
                                        <li class="entry__meta-comments">
                                            <i class="fa-solid fa-comments"></i>
                                            <a href="#">115</a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="entry__excerpt">
                                    <p>Point of Sale hardware, the till at a shop check out, has become very complex over the past ten years. Modern POS hardware includes the cash till, bar-code readers...</p>
                                </div>
                            </div>
                        </article>

                    </section>
                    <!-- end latest news -->

                    <!-- Ad Banner 728 -->
                    <div class="text-center pb-40">
                        <a href="#">
                            <img src="img/blog/placeholder_leaderboard.jpg" alt="">
                        </a>
                    </div>

                    <!-- Editor's Picks -->
                    <section class="section editors-picks mb-20">
                        <div class="title-wrap">
                            <h3 class="section-title">Editor's Picks</h3>
                            <a href="#" class="all-posts-url">View All</a>
                        </div>
                        <div class="row">
                            <div class="col-lg-7">
                                <article class="entry">
                                    <div class="entry__img-holder">
                                        <a href="#">
                                            <div class="thumb-container thumb-75">
                                                <img data-src="img/blog/editors_post_img.jpg" src="img/empty.png" class="entry__img lazyload" alt="" />
                                            </div>
                                        </a>
                                    </div>

                                    <div class="entry__body">
                                        <div class="entry__header">
                                            <a href="#" class="entry__meta-category">science</a>
                                            <h2 class="entry__title">
                                                <a href="#">Synchrotron scanning reveals amphibious ecomorphology in a new clade of bird-like dinosaurs</a>
                                            </h2>
                                            <ul class="entry__meta">
                                                <li class="entry__meta-author">
                                                <i class="fa-solid fa-user"></i>

                                                    <a href="#">Đăng Khôi</a>
                                                </li>
                                                <li class="entry__meta-date">
                                                    <i class="fa-solid fa-calendar-days"></i> 21 October, 2017
                                                </li>
                                                <li class="entry__meta-comments">
                                                    <i class="fa-solid fa-comments"></i>
                                                    <a href="#">115</a>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="entry__excerpt">
                                            <p>Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos. Lorem ipsum dolor sit amet, consectetur adipiscing elit...</p>
                                        </div>
                                    </div>
                                </article>
                            </div>
                            <div class="col-lg-5">
                                <ul class="post-list-small">
                                    <li class="post-list-small__item">
                                        <article class="post-list-small__entry">
                                            <div class="post-list-small__body">
                                                <h3 class="post-list-small__entry-title">
                                                    <a href="#">What Indie Beauty Companies Can Teach Entrepreneurs About Scaling</a>
                                                </h3>
                                                <ul class="entry__meta">
                                                    <li class="entry__meta-date">
                                                        <i class="fa-solid fa-calendar-days"></i> 21 October, 2017
                                                    </li>
                                                </ul>
                                            </div>
                                        </article>
                                    </li>
                                    <li class="post-list-small__item">
                                        <article class="post-list-small__entry">
                                            <div class="post-list-small__body">
                                                <h3 class="post-list-small__entry-title">
                                                    <a href="#">Bill Gates's 5 Favorite Books of 2017</a>
                                                </h3>
                                                <ul class="entry__meta">
                                                    <li class="entry__meta-date">
                                                        <i class="fa-solid fa-calendar-days"></i> 21 October, 2017
                                                    </li>
                                                </ul>
                                            </div>
                                        </article>
                                    </li>
                                    <li class="post-list-small__item">
                                        <article class="post-list-small__entry">
                                            <div class="post-list-small__body">
                                                <h3 class="post-list-small__entry-title">
                                                    <a href="#">Sheryl Sandberg's 6 Steps to Make Sure Everyone Feels Safe at Work</a>
                                                </h3>
                                                <ul class="entry__meta">
                                                    <li class="entry__meta-date">
                                                        <i class="fa-solid fa-calendar-days"></i> 21 October, 2017
                                                    </li>
                                                </ul>
                                            </div>
                                        </article>
                                    </li>
                                    <li class="post-list-small__item">
                                        <article class="post-list-small__entry">
                                            <div class="post-list-small__body">
                                                <h3 class="post-list-small__entry-title">
                                                    <a href="#">Elon Musk May Be Sending a Tesla Roadster to Space on a SpaceX Rocket</a>
                                                </h3>
                                                <ul class="entry__meta">
                                                    <li class="entry__meta-date">
                                                        <i class="fa-solid fa-calendar-days"></i> 21 October, 2017
                                                    </li>
                                                </ul>
                                            </div>
                                        </article>
                                    </li>
                                    <li class="post-list-small__item">
                                        <article class="post-list-small__entry">
                                            <div class="post-list-small__body">
                                                <h3 class="post-list-small__entry-title">
                                                    <a href="#">GoPro Accidentally Left In Path of Lava and Incredible Footage Survives</a>
                                                </h3>
                                                <ul class="entry__meta">
                                                    <li class="entry__meta-date">
                                                        <i class="fa-solid fa-calendar-days"></i> 21 October, 2017
                                                    </li>
                                                </ul>
                                            </div>
                                        </article>
                                    </li>
                                    <li class="post-list-small__item">
                                        <article class="post-list-small__entry">
                                            <div class="post-list-small__body">
                                                <h3 class="post-list-small__entry-title">
                                                    <a href="#">The One Goal Every Business Should Have, But Almost None Prioritize</a>
                                                </h3>
                                                <ul class="entry__meta">
                                                    <li class="entry__meta-date">
                                                        <i class="fa-solid fa-calendar-days"></i> 21 October, 2017
                                                    </li>
                                                </ul>
                                            </div>
                                        </article>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </section>
                    <!-- end editors picks -->

                    <!-- Posts from categories -->
                    <section class="section mb-0">
                        <div class="row">

                            <!-- World -->
                            <div class="col-md-6 mb-40">
                                <div class="title-wrap bottom-line bottom-line--orange">
                                    <h3 class="section-title section-title--sm">World</h3>
                                </div>
                                <article class="entry">
                                    <div class="entry__img-holder">
                                        <a href="#">
                                            <div class="thumb-container thumb-75">
                                                <img data-src="img/blog/grid_post_img_3.jpg" src="img/empty.png" class="entry__img lazyload" alt="" />
                                            </div>
                                        </a>
                                    </div>

                                    <div class="entry__body">
                                        <div class="entry__header">
                                            <h2 class="entry__title">
                                                <a href="#">To Succeed in 2018, Ecommerce Entrepreneurs Must Focus on This One Change</a>
                                            </h2>
                                            <ul class="entry__meta">
                                                <li class="entry__meta-author">
                                                <i class="fa-solid fa-user"></i>

                                                    <a href="#">Đăng Khôi</a>
                                                </li>
                                                <li class="entry__meta-date">
                                                    <i class="fa-solid fa-calendar-days"></i> 21 October, 2017
                                                </li>
                                                <li class="entry__meta-comments">
                                                    <i class="fa-solid fa-comments"></i>
                                                    <a href="#">115</a>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="entry__excerpt">
                                            <p>Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos. Lorem ipsum dolor sit amet, consectetur adipiscing elit...</p>
                                        </div>
                                    </div>
                                </article>
                                <ul class="post-list-small post-list-small--border-top">
                                    <li class="post-list-small__item">
                                        <article class="post-list-small__entry">
                                            <div class="post-list-small__body">
                                                <h3 class="post-list-small__entry-title">
                                                    <a href="#">What Indie Beauty Companies Can Teach Entrepreneurs About Scaling</a>
                                                </h3>
                                                <ul class="entry__meta">
                                                    <li class="entry__meta-date">
                                                        <i class="fa-solid fa-calendar-days"></i> 21 October, 2017
                                                    </li>
                                                </ul>
                                            </div>
                                        </article>
                                    </li>
                                    <li class="post-list-small__item">
                                        <article class="post-list-small__entry">
                                            <div class="post-list-small__body">
                                                <h3 class="post-list-small__entry-title">
                                                    <a href="#">Bill Gates's 5 Favorite Books of 2017</a>
                                                </h3>
                                                <ul class="entry__meta">
                                                    <li class="entry__meta-date">
                                                        <i class="fa-solid fa-calendar-days"></i> 21 October, 2017
                                                    </li>
                                                </ul>
                                            </div>
                                        </article>
                                    </li>
                                    <li class="post-list-small__item">
                                        <article class="post-list-small__entry">
                                            <div class="post-list-small__body">
                                                <h3 class="post-list-small__entry-title">
                                                    <a href="#">Sheryl Sandberg's 6 Steps to Make Sure Everyone Feels Safe at Work</a>
                                                </h3>
                                                <ul class="entry__meta">
                                                    <li class="entry__meta-date">
                                                        <i class="fa-solid fa-calendar-days"></i> 21 October, 2017
                                                    </li>
                                                </ul>
                                            </div>
                                        </article>
                                    </li>
                                </ul>
                            </div>
                            <!-- end world -->

                            <!-- Science -->
                            <div class="col-md-6 mb-40">
                                <div class="title-wrap bottom-line bottom-line--violet">
                                    <h3 class="section-title section-title--sm">Science</h3>
                                </div>
                                <article class="entry">
                                    <div class="entry__img-holder">
                                        <a href="#">
                                            <div class="thumb-container thumb-75">
                                                <img data-src="img/blog/grid_post_img_4.jpg" src="img/empty.png" class="entry__img lazyload" alt="" />
                                            </div>
                                        </a>
                                    </div>

                                    <div class="entry__body">
                                        <div class="entry__header">
                                            <h2 class="entry__title">
                                                <a href="#">What hospitals can do to help keep excess opioids out of communities</a>
                                            </h2>
                                            <ul class="entry__meta">
                                                <li class="entry__meta-author">
                                                <i class="fa-solid fa-user"></i>

                                                    <a href="#">Đăng Khôi</a>
                                                </li>
                                                <li class="entry__meta-date">
                                                    <i class="fa-solid fa-calendar-days"></i> 21 October, 2017
                                                </li>
                                                <li class="entry__meta-comments">
                                                    <i class="fa-solid fa-comments"></i>
                                                    <a href="#">115</a>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="entry__excerpt">
                                            <p>Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos. Lorem ipsum dolor sit amet, consectetur adipiscing elit...</p>
                                        </div>
                                    </div>
                                </article>
                                <ul class="post-list-small post-list-small--border-top">
                                    <li class="post-list-small__item">
                                        <article class="post-list-small__entry">
                                            <div class="post-list-small__body">
                                                <h3 class="post-list-small__entry-title">
                                                    <a href="#">What Indie Beauty Companies Can Teach Entrepreneurs About Scaling</a>
                                                </h3>
                                                <ul class="entry__meta">
                                                    <li class="entry__meta-date">
                                                        <i class="fa-solid fa-calendar-days"></i> 21 October, 2017
                                                    </li>
                                                </ul>
                                            </div>
                                        </article>
                                    </li>
                                    <li class="post-list-small__item">
                                        <article class="post-list-small__entry">
                                            <div class="post-list-small__body">
                                                <h3 class="post-list-small__entry-title">
                                                    <a href="#">Bill Gates's 5 Favorite Books of 2017</a>
                                                </h3>
                                                <ul class="entry__meta">
                                                    <li class="entry__meta-date">
                                                        <i class="fa-solid fa-calendar-days"></i> 21 October, 2017
                                                    </li>
                                                </ul>
                                            </div>
                                        </article>
                                    </li>
                                    <li class="post-list-small__item">
                                        <article class="post-list-small__entry">
                                            <div class="post-list-small__body">
                                                <h3 class="post-list-small__entry-title">
                                                    <a href="#">Sheryl Sandberg's 6 Steps to Make Sure Everyone Feels Safe at Work</a>
                                                </h3>
                                                <ul class="entry__meta">
                                                    <li class="entry__meta-date">
                                                        <i class="fa-solid fa-calendar-days"></i> 21 October, 2017
                                                    </li>
                                                </ul>
                                            </div>
                                        </article>
                                    </li>
                                </ul>
                            </div>
                            <!-- end science -->

                            <!-- Sport -->
                            <div class="col-md-6 mb-40">
                                <div class="title-wrap bottom-line bottom-line--light-blue">
                                    <h3 class="section-title section-title--sm">Sport</h3>
                                </div>
                                <article class="entry">
                                    <div class="entry__img-holder">
                                        <a href="#">
                                            <div class="thumb-container thumb-75">
                                                <img data-src="img/blog/grid_post_img_5.jpg" src="img/empty.png" class="entry__img lazyload" alt="" />
                                            </div>
                                        </a>
                                    </div>

                                    <div class="entry__body">
                                        <div class="entry__header">
                                            <h2 class="entry__title">
                                                <a href="#">Phil Taylor: The Power and The Glory</a>
                                            </h2>
                                            <ul class="entry__meta">
                                                <li class="entry__meta-author">
                                                <i class="fa-solid fa-user"></i>

                                                    <a href="#">Đăng Khôi</a>
                                                </li>
                                                <li class="entry__meta-date">
                                                    <i class="fa-solid fa-calendar-days"></i> 21 October, 2017
                                                </li>
                                                <li class="entry__meta-comments">
                                                    <i class="fa-solid fa-comments"></i>
                                                    <a href="#">115</a>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="entry__excerpt">
                                            <p>Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos. Lorem ipsum dolor sit amet, consectetur adipiscing elit...</p>
                                        </div>
                                    </div>
                                </article>
                                <ul class="post-list-small post-list-small--border-top">
                                    <li class="post-list-small__item">
                                        <article class="post-list-small__entry">
                                            <div class="post-list-small__body">
                                                <h3 class="post-list-small__entry-title">
                                                    <a href="#">What Indie Beauty Companies Can Teach Entrepreneurs About Scaling</a>
                                                </h3>
                                                <ul class="entry__meta">
                                                    <li class="entry__meta-date">
                                                        <i class="fa-solid fa-calendar-days"></i> 21 October, 2017
                                                    </li>
                                                </ul>
                                            </div>
                                        </article>
                                    </li>
                                    <li class="post-list-small__item">
                                        <article class="post-list-small__entry">
                                            <div class="post-list-small__body">
                                                <h3 class="post-list-small__entry-title">
                                                    <a href="#">Bill Gates's 5 Favorite Books of 2017</a>
                                                </h3>
                                                <ul class="entry__meta">
                                                    <li class="entry__meta-date">
                                                        <i class="fa-solid fa-calendar-days"></i> 21 October, 2017
                                                    </li>
                                                </ul>
                                            </div>
                                        </article>
                                    </li>
                                    <li class="post-list-small__item">
                                        <article class="post-list-small__entry">
                                            <div class="post-list-small__body">
                                                <h3 class="post-list-small__entry-title">
                                                    <a href="#">Sheryl Sandberg's 6 Steps to Make Sure Everyone Feels Safe at Work</a>
                                                </h3>
                                                <ul class="entry__meta">
                                                    <li class="entry__meta-date">
                                                        <i class="fa-solid fa-calendar-days"></i> 21 October, 2017
                                                    </li>
                                                </ul>
                                            </div>
                                        </article>
                                    </li>
                                </ul>
                            </div>
                            <!-- end sport -->

                            <!-- Business -->
                            <div class="col-md-6 mb-40">
                                <div class="title-wrap bottom-line bottom-line--blue">
                                    <h3 class="section-title section-title--sm">Business</h3>
                                </div>
                                <article class="entry">
                                    <div class="entry__img-holder">
                                        <a href="#">
                                            <div class="thumb-container thumb-75">
                                                <img data-src="img/blog/grid_post_img_6.jpg" src="img/empty.png" class="entry__img lazyload" alt="" />
                                            </div>
                                        </a>
                                    </div>

                                    <div class="entry__body">
                                        <div class="entry__header">
                                            <h2 class="entry__title">
                                                <a href="#">7 Ways Ecommerce Businesses Can Prevent Holiday Fraud</a>
                                            </h2>
                                            <ul class="entry__meta">
                                                <li class="entry__meta-author">
                                                <i class="fa-solid fa-user"></i>

                                                    <a href="#">Đăng Khôi</a>
                                                </li>
                                                <li class="entry__meta-date">
                                                    <i class="fa-solid fa-calendar-days"></i> 21 October, 2017
                                                </li>
                                                <li class="entry__meta-comments">
                                                    <i class="fa-solid fa-comments"></i>
                                                    <a href="#">115</a>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="entry__excerpt">
                                            <p>Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos. Lorem ipsum dolor sit amet, consectetur adipiscing elit...</p>
                                        </div>
                                    </div>
                                </article>
                                <ul class="post-list-small post-list-small--border-top">
                                    <li class="post-list-small__item">
                                        <article class="post-list-small__entry">
                                            <div class="post-list-small__body">
                                                <h3 class="post-list-small__entry-title">
                                                    <a href="#">What Indie Beauty Companies Can Teach Entrepreneurs About Scaling</a>
                                                </h3>
                                                <ul class="entry__meta">
                                                    <li class="entry__meta-date">
                                                        <i class="fa-solid fa-calendar-days"></i> 21 October, 2017
                                                    </li>
                                                </ul>
                                            </div>
                                        </article>
                                    </li>
                                    <li class="post-list-small__item">
                                        <article class="post-list-small__entry">
                                            <div class="post-list-small__body">
                                                <h3 class="post-list-small__entry-title">
                                                    <a href="#">Bill Gates's 5 Favorite Books of 2017</a>
                                                </h3>
                                                <ul class="entry__meta">
                                                    <li class="entry__meta-date">
                                                        <i class="fa-solid fa-calendar-days"></i> 21 October, 2017
                                                    </li>
                                                </ul>
                                            </div>
                                        </article>
                                    </li>
                                    <li class="post-list-small__item">
                                        <article class="post-list-small__entry">
                                            <div class="post-list-small__body">
                                                <h3 class="post-list-small__entry-title">
                                                    <a href="#">Sheryl Sandberg's 6 Steps to Make Sure Everyone Feels Safe at Work</a>
                                                </h3>
                                                <ul class="entry__meta">
                                                    <li class="entry__meta-date">
                                                        <i class="fa-solid fa-calendar-days"></i> 21 October, 2017
                                                    </li>
                                                </ul>
                                            </div>
                                        </article>
                                    </li>
                                </ul>
                            </div>
                            <!-- end business -->

                        </div>
                    </section>
                    <!-- end posts from categories -->

                    <!-- Carousel posts -->
                    <section class="section mb-20">
                        <div class="title-wrap">
                            <h3 class="section-title section-title--sm">More News</h3>
                            <div class="carousel-nav">
                                <button class="carousel-nav__btn carousel-nav__btn--prev" aria-label="previous slide">
                                <i class="fa-solid fa-chevron-left"></i>
                </button>
                                <button class="carousel-nav__btn carousel-nav__btn--next" aria-label="next slide">
                                <i class="fa-solid fa-chevron-right"></i>
                </button>
                            </div>
                        </div>

                        <!-- Slider -->
                        <div id="owl-posts" class="owl-carousel owl-theme">
                            <article class="entry">
                                <div class="entry__img-holder">
                                    <a href="#">
                                        <div class="thumb-container thumb-75">
                                            <img data-src="img/blog/carousel_img_1.jpg" src="img/blog/carousel_img_1.jpg" class="entry__img owl-lazy" alt="" />
                                        </div>
                                    </a>
                                </div>

                                <div class="entry__body">
                                    <div class="entry__header">
                                        <h2 class="entry__title entry__title--sm">
                                            <a href="#">The Surprising Way This Designer Picked the Next It Colors</a>
                                        </h2>
                                        <ul class="entry__meta">
                                            <li class="entry__meta-date">
                                                <i class="fa-solid fa-calendar-days"></i> 21 October, 2017
                                            </li>
                                            <li class="entry__meta-comments">
                                                <i class="fa-solid fa-comments"></i>
                                                <a href="#">115</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </article>
                            <article class="entry">
                                <div class="entry__img-holder">
                                    <a href="#">
                                        <div class="thumb-container thumb-75">
                                            <img data-src="img/blog/carousel_img_2.jpg" src="img/blog/carousel_img_2.jpg" class="entry__img owl-lazy" alt="" />
                                        </div>
                                    </a>
                                </div>

                                <div class="entry__body">
                                    <div class="entry__header">
                                        <h2 class="entry__title entry__title--sm">
                                            <a href="#">What Fashion Editors Are Buying for Every Kid on Our Holiday List</a>
                                        </h2>
                                        <ul class="entry__meta">
                                            <li class="entry__meta-date">
                                                <i class="fa-solid fa-calendar-days"></i> 21 October, 2017
                                            </li>
                                            <li class="entry__meta-comments">
                                                <i class="fa-solid fa-comments"></i>
                                                <a href="#">115</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </article>
                            <article class="entry">
                                <div class="entry__img-holder">
                                    <a href="#">
                                        <div class="thumb-container thumb-75">
                                            <img data-src="img/blog/carousel_img_3.jpg" src="img/blog/carousel_img_3.jpg" class="entry__img owl-lazy" alt="" />
                                        </div>
                                    </a>
                                </div>

                                <div class="entry__body">
                                    <div class="entry__header">
                                        <h2 class="entry__title entry__title--sm">
                                            <a href="#">Why Coach's Cute New Holiday Collab Is Unexpected</a>
                                        </h2>
                                        <ul class="entry__meta">
                                            <li class="entry__meta-date">
                                                <i class="fa-solid fa-calendar-days"></i> 21 October, 2017
                                            </li>
                                            <li class="entry__meta-comments">
                                                <i class="fa-solid fa-comments"></i>
                                                <a href="#">115</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </article>
                        </div>
                        <!-- end slider -->

                    </section>

                </div>
                

                <!-- end posts -->

                <!-- Sidebar -->
                
@endsection