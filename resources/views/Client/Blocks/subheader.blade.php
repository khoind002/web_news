<header class="nav">

<div class="nav__holder nav--sticky">
    <div class="container relative">
        <div class="flex-parent">

            <!-- Side Menu Button -->
            <button class="nav-icon-toggle" id="nav-icon-toggle" aria-label="Open side menu">
  <span class="nav-icon-toggle__box">
    <span class="nav-icon-toggle__inner"></span>
  </span>
</button>
            <!-- end Side menu button -->

            <!-- Mobile logo -->
            <a href="index.html" class="logo logo--mobile d-lg-none">
                <img class="logo__img" src="{{asset('images/logo_mobile.png')}}" srcset="{{asset('images/logo_mobile.png 1x')}}, {{asset('images/logo_mobile@2x.png 2x')}}" alt="logo">
            </a>

            <!-- Nav-wrap -->
            <nav class="flex-child nav__wrap d-none d-lg-block">
                <ul class="nav__menu">
                    <li class="active">
                        <a href="/">Trang Chủ </a>
                    </li>
                    @foreach ($category as $cate)
                    <li class="active">
                        <a href="/category/{{$cate->id}}">{{$cate->ten}} </a>
                    </li>
                    
                    @endforeach
                </ul>
                <!-- end menu -->
            </nav>
            <!-- end nav-wrap -->

            <!-- Nav Right -->
            <div class="nav__right nav--align-right d-lg-flex">

                <!-- Socials -->
                <div class="nav__right-item socials nav__socials d-none d-lg-flex">
                    <a class="social social-facebook social--nobase" href="#" target="_blank" aria-label="facebook">
                    <i class="fa-brands fa-facebook-f"></i>
                    </a>
                    <a class="social social-twitter social--nobase" href="#" target="_blank" aria-label="twitter">
                    <i class="fa-brands fa-twitter"></i>
                    </a>
                    <a class="social social-google social--nobase" href="#" target="_blank" aria-label="google">
                    <i class="fa-brands fa-google-plus-g"></i>
                    </a>
                    <a class="social social-youtube social--nobase" href="#" target="_blank" aria-label="youtube">
                    <i class="fa-brands fa-youtube"></i>
                    </a>
                    <a class="social social-instagram social--nobase" href="#" target="_blank" aria-label="instagram">
                    <i class="fa-brands fa-square-instagram"></i>
                    </a>
                </div>

                <!-- Search -->
                <div class="nav__right-item nav__search">
                    <a href="#" class="nav__search-trigger" id="nav__search-trigger">
                    <i class="fa-solid fa-magnifying-glass"></i>
                    </a>
                    <div class="nav__search-box" id="nav__search-box">
                        <form class="nav__search-form">
                            <input type="text" placeholder="Tìm bài viết" class="nav__search-input">
                            <button type="submit" class="search-button btn btn-lg btn-color btn-button">
                            <i class="fa-solid fa-magnifying-glass"></i>
                    </button>
                        </form>
                    </div>

                </div>

            </div>
            <!-- end nav right -->

        </div>
        <!-- end flex-parent -->
    </div>
    <!-- end container -->

</div>
</header>
<!-- end navigation -->

<!-- Header -->
<div class="header">
<div class="container">
    <div class="flex-parent align-items-center">

        <!-- Logo -->
        <a href="/" class="logo d-none d-lg-block">
            <img class="logo__img" src="{{asset('images/logo.png')}}" srcset="{{asset('images/logo.png 1x')}}, {{asset('images/logo@2x.png 2x')}}" alt="logo">
        </a>

        <!-- Ad Banner 728 -->
        <div class="text-center">
            <a href="#">
                <img src="{{asset('images/blog/placeholder_leaderboard.jpg')}}" alt="">
            </a>
        </div>

    </div>
</div>
</div>
@include('Client.Blocks.trending')