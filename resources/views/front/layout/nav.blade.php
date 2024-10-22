<header id="header" class="header d-flex align-items-center sticky-top">
    <div class="container-fluid position-relative d-flex align-items-center justify-content-between">

        <a href="{{route('home')}}" class="logo d-flex align-items-center me-auto me-xl-0">
            <!-- Uncomment the line below if you also wish to use an image logo -->
            <!-- <img src="assets/img/logo.png" alt=""> -->
            <img class="img-thumbnail" src="{{asset('uploads/logo.png')}}" alt="">
            <h1 class="sitename">BYB Seramik</h1>
        </a>

        <nav id="navmenu" class="navmenu">
            <ul>
                <li><a href="{{route('home')}}" class="active">ANA SAYFA<br></a></li>
                <li><a href="{{route('about')}}">HAKKIMIZDA</a></li>
                {{--                <li class="dropdown"><a href="gallery.html"><span>Gallery</span> <i class="bi bi-chevron-down toggle-dropdown"></i></a>--}}
                {{--                    <ul>--}}
                {{--                        <li><a href="gallery.html">Nature</a></li>--}}
                {{--                        <li><a href="gallery.html">People</a></li>--}}
                {{--                        <li><a href="gallery.html">Architecture</a></li>--}}
                {{--                        <li><a href="gallery.html">Animals</a></li>--}}
                {{--                        <li><a href="gallery.html">Sports</a></li>--}}
                {{--                        <li><a href="gallery.html">Travel</a></li>--}}
                {{--                        <li class="dropdown"><a href="#"><span>Deep Dropdown</span> <i class="bi bi-chevron-down toggle-dropdown"></i></a>--}}
                {{--                            <ul>--}}
                {{--                                <li><a href="#">Deep Dropdown 1</a></li>--}}
                {{--                                <li><a href="#">Deep Dropdown 2</a></li>--}}
                {{--                                <li><a href="#">Deep Dropdown 3</a></li>--}}
                {{--                                <li><a href="#">Deep Dropdown 4</a></li>--}}
                {{--                                <li><a href="#">Deep Dropdown 5</a></li>--}}
                {{--                            </ul>--}}
                {{--                        </li>--}}
                {{--                    </ul>--}}
                {{--                </li>--}}
                <li><a href="{{route('granitler')}}">TEKNİK GRANİT</a></li>
                <li><a href="{{route('seramikler')}}">SERAMİK</a></li>
                <li><a href="{{route('contact')}}">İLETİŞİM</a></li>
            </ul>
            <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
        </nav>

        <div class="header-social-links">
            <a href="#" class="twitter"><i class="bi bi-twitter-x"></i></a>
            <a href="#" class="facebook"><i class="bi bi-facebook"></i></a>
            <a href="#" class="instagram"><i class="bi bi-instagram"></i></a>
            <a href="#" class="linkedin"><i class="bi bi-linkedin"></i></a>
        </div>

    </div>
</header>
