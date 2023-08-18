<header class="sidenav" id="sidenav">

<!-- close -->
<div class="sidenav__close">
    <button class="sidenav__close-button" id="sidenav__close-button" aria-label="close sidenav">
    <i class="fa-solid fa-xmark"></i>
</button>
</div>

<!-- Nav -->
<nav class="sidenav__menu-container">
    <ul class="sidenav__menu" role="menubar">
        <!-- Categories -->
        @foreach ($category as $cate)
            <a href="/category/{{$cate->id}}" class="sidenav__menu-link sidenav__menu-link-category sidenav__menu-link--orange">{{$cate->ten}}</a>
        </li>
        @endforeach
        

        <li>
            <a href="#" class="sidenav__menu-link">Chi tiết</a>
            <button class="sidenav__menu-toggle" aria-haspopup="true" aria-label="Open dropdown"><i class="fa-solid fa-chevron-down"></i></i></button>
            <ul class="sidenav__menu-dropdown">
                <li><a href="about.html" class="sidenav__menu-link">Giới thiệu</a></li>
                <li><a href="contact.html" class="sidenav__menu-link">Liên hệ</a></li>
                <li><a href="search-results.html" class="sidenav__menu-link">Đóng góp ý kiến</a></li>
                <li><a href="404.html" class="sidenav__menu-link">404</a></li>
            </ul>
        </li>
    </ul>
</nav>

<div class="socials sidenav__socials">
    <a class="social social-facebook" href="#" target="_blank" aria-label="facebook">
    <i class="fa-brands fa-facebook-f"></i>
    </a>
    <a class="social social-twitter" href="#" target="_blank" aria-label="twitter">
    <i class="fa-brands fa-twitter"></i>
    </a>
    <a class="social social-google-plus" href="#" target="_blank" aria-label="google">
    <i class="fa-brands fa-google-plus-g"></i>
    </a>
    <a class="social social-youtube" href="#" target="_blank" aria-label="youtube">
    <i class="fa-brands fa-youtube"></i>
    </a>
    <a class="social social-instagram" href="#" target="_blank" aria-label="instagram">
    <i class="fa-brands fa-square-instagram"></i>
    </a>
</div>
</header>
<!-- end sidenav -->

