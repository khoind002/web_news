<!DOCTYPE html>
<html lang="en">

<head>
    <title>@yield('title','Khoi News')</title>

    <meta charset="utf-8">
    <!--[if IE]><meta http-equiv='X-UA-Compatible' content='IE=edge,chrome=1'><![endif]-->
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="">

    <!-- Google Fonts -->
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600,700' rel='stylesheet'>

    <!-- Css -->
    <link rel="stylesheet" href="{{asset('assets/css/bootstrap.min.css')}}" />
    <link rel="stylesheet" href="{{asset('assets/css/font-icons.css')}}" />
    <link rel="stylesheet" href="{{asset('assets/css/style.css')}}" />

    <!-- Favicons -->
    <link rel="shortcut icon" href="{{asset('images/favicon.ico')}}">
    <link rel="apple-touch-icon" href="{{asset('images/apple-touch-icon.png')}}">
    <link rel="apple-touch-icon" sizes="72x72" href="{{asset('images/apple-touch-icon-72x72.png')}}">
    <link rel="apple-touch-icon" sizes="114x114" href="{{asset('images/apple-touch-icon-114x114.png')}}">

    <!-- Lazyload -->
    <script src="js/lazysizes.min.js"></script>
    <link rel="stylesheet" href="{{asset('assets/font/fontawesome/css/all.min.css')}}">

</head>

<body class="bg-light">

    <!-- Preloader -->
    <div class="loader-mask">
        <div class="loader">
            <div></div>
        </div>
    </div>

    <!-- Bg Overlay -->
    <div class="content-overlay"></div>

  @include('Client.Blocks.header')



    <!-- het header -->



    @include('Client.Blocks.subheader')


        <!-- Trending Now -->
      

        <!-- Featured Posts Grid -->
  @yield('content')
        <!-- end main container -->
  @include('Client.Blocks.sidebar')
        <!-- Footer -->
        <footer class="footer footer--dark">
            <div class="container">
                <div class="footer__widgets">
                    <div class="row">

                        <div class="col-lg-3 col-md-6">
                            <div class="widget">
                                <a href="index.html">
                                    <img src="{{asset('images/logo_mobile.png')}}" srcset="{{asset('images/logo_mobile.png 1x')}}, {{asset('images/logo_mobile@2x.png 2x')}}" class="logo__img" alt="">
                                </a>
                                <p class="mt-20">We bring you the best Premium WordPress Themes. Deliver smart websites faster with this amazing theme. We care about our buyers.</p>
                            </div>
                        </div>

                        <div class="col-lg-3 col-md-6">
                            <h4 class="widget-title">Latest Posts</h4>
                            <ul class="post-list-small">
                                <li class="post-list-small__item">
                                    <article class="post-list-small__entry clearfix">
                                        <div class="post-list-small__img-holder">
                                            <div class="thumb-container thumb-75">
                                                <a href="single-post.html">
                                                    <img src="{{asset('images/empty.png')}}" alt="" class="lazyload">
                                                </a>
                                            </div>
                                        </div>
                                        <div class="post-list-small__body">
                                            <h3 class="post-list-small__entry-title">
                                                <a href="single-post.html">Google is fixing its troubling burger emoji in Android 8.1</a>
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
                                    <article class="post-list-small__entry clearfix">
                                        <div class="post-list-small__img-holder">
                                            <div class="thumb-container thumb-75">
                                                <a href="single-post.html">
                                                    <img data-src="{{asset('images/blog/popular_post_2.jpg')}}" src="{{asset('images/empty.png')}}" alt="" class="lazyload">
                                                </a>
                                            </div>
                                        </div>
                                        <div class="post-list-small__body">
                                            <h3 class="post-list-small__entry-title">
                                                <a href="single-post.html">How Meditation Can Transform Your Business</a>
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

                        <div class="col-lg-3 col-md-6">
                            <div class="widget widget__newsletter">
                                <h4 class="widget-title">Follow us</h4>

                                <div class="socials mb-20">
                                    <a href="#" class="social social-facebook" aria-label="facebook"><i class="fa-brands fa-facebook-f"></i></a>
                                    <a href="#" class="social social-twitter" aria-label="twitter"><i class="fa-brands fa-twitter"></i></a>
                                    <a href="#" class="social social-google-plus" aria-label="google+"><i class="fa-brands fa-google-plus-g"></i></a>
                                    <a href="#" class="social social-youtube" aria-label="youtube"><i class="fa-brands fa-youtube"></i></a>
                                    <a href="#" class="social social-instagram" aria-label="instagram"><i class="fa-brands fa-square-instagram"></i></a>
                                </div>

                                <form class="mc4wp-form" method="post">
                                    <div class="mc4wp-form-fields">
                                        <p>
                                            <input type="email" name="EMAIL" placeholder="Your email" required="">
                                        </p>
                                        <p>
                                            <input type="submit" class="btn btn-lg btn-color" value="Subscribe">
                                        </p>
                                    </div>
                                </form>

                            </div>
                        </div>

                        <div class="col-lg-3 col-md-6">
                            <div class="widget widget_nav_menu">
                                <h4 class="widget-title">Useful Links</h4>
                                <ul>
                                    <li><a href="about.html">About</a></li>
                                    <li><a href="contact.html">Contact</a></li>
                                    <li><a href="categories.html">Categories</a></li>
                                    <li><a href="shortcodes.html">Shortcodes</a></li>
                                </ul>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
            <!-- end container -->

            <div class="footer__bottom">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-7 order-lg-2 text-right text-md-center">
                            <div class="widget widget_nav_menu">
                                <ul>
                                    <li><a href="#">Terms</a></li>
                                    <li><a href="#">Privacy</a></li>
                                    <li><a href="#">Advertise</a></li>
                                    <li><a href="#">Affiliates</a></li>
                                    <li><a href="#">Newsletter</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-lg-5 order-lg-1 text-md-center">
                            <span class="copyright">
                &copy; 2017 AhaMag | Made by <a href="http://deothemes.com">DeoThemes</a>
              </span>
                        </div>
                    </div>

                </div>
            </div>
            <!-- end bottom footer -->
        </footer>
        <!-- end footer -->

        <div id="back-to-top">
            <a href="#top" aria-label="Go to top"><i class="fa-solid fa-chevron-up"></i></a>
        </div>

    </main>
    <!-- end main-wrapper -->


    <!-- jQuery Scripts -->
    <script src="{{asset('assets/js/jquery.min.js')}}"></script>
    <script src="{{asset('assets/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('assets/js/easing.min.js')}}"></script>
    <script src="{{asset('assets/js/owl-carousel.min.js')}}"></script>
    <script src="{{asset('assets/js/twitterFetcher_min.js')}}"></script>
    <script src="{{asset('assets/js/jquery.newsTicker.min.js')}}"></script>
    <script src="{{asset('assets/js/modernizr.min.js')}}"></script>
    <script src="{{asset('assets/js/scripts.js')}}"></script>

</body>

</html>