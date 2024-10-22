<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <title>BYB Seramik</title>
    <meta name="description" content="">
    <meta name="keywords" content="">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css"
          integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg=="
          crossorigin="anonymous" referrerpolicy="no-referrer"/>

    <!-- Favicons -->
    <link href="{{asset('dist-front/assets/img/favicon.png')}}" rel="icon">
    <link href="{{asset('dist-front/assets/img/apple-touch-icon.png')}}" rel="apple-touch-icon">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com" rel="preconnect">
    <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&family=Inter:wght@100;200;300;400;500;600;700;800;900&family=Cardo:ital,wght@0,400;0,700;1,400;1,700&display=swap"
        rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="{{asset('dist/css/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{asset('dist/css/bootstrap-icons/bootstrap-icons.css')}}" rel="stylesheet">
    <link href="{{asset('dist/css/aos/aos.css')}}" rel="stylesheet">
    <link href="{{asset('dist/css/glightbox/css/glightbox.min.css')}}" rel="stylesheet">
    <link href="{{asset('dist/css/swiper/swiper-bundle.min.css')}}" rel="stylesheet">

    <!-- Main CSS File -->
    <link href="{{asset('dist/css/main.css')}}" rel="stylesheet">


    <!-- =======================================================
    * Template Name: PhotoFolio
    * Template URL: https://bootstrapmade.com/photofolio-bootstrap-photography-website-template/
    * Updated: Aug 07 2024 with Bootstrap v5.3.3
    * Author: BootstrapMade.com
    * License: https://bootstrapmade.com/license/
    ======================================================== -->
</head>

<body class="index-page">


@include('front.layout.nav')

@yield('main_content')

<footer id="footer" class="footer">

    <div class="container">
        <div class="copyright text-center ">
            <p>© <span>Copyright</span> <strong class="px-1 sitename">BYB Sermaik</strong>
                <span>Tüm Hakları Saklıdır.</span></p>
        </div>
        <div class="social-links d-flex justify-content-center">
            <a href=""><i class="bi bi-twitter-x"></i></a>
            <a href=""><i class="bi bi-facebook"></i></a>
            <a href=""><i class="bi bi-instagram"></i></a>
            <a href=""><i class="bi bi-linkedin"></i></a>
        </div>
    </div>

</footer>

<!-- Scroll Top -->
<a href="#" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center"><i
        class="bi bi-arrow-up-short"></i></a>



<!-- Vendor JS Files -->

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

<script src="{{asset('dist/css/bootstrap/css/js/bootstrap.bundle.min.js')}}"></script>
<script src="{{asset('dist/css/bootstrap/css/php-email-form/validate.js')}}"></script>
<script src="{{asset('dist/css/bootstrap/css/aos/aos.js')}}"></script>
<script src="{{asset('dist/css/bootstrap/css/glightbox/js/glightbox.min.js')}}"></script>
<script src="{{asset('dist/css/bootstrap/css/swiper/swiper-bundle.min.js')}}"></script>

<!-- Main JS File -->
<script src="{{asset('dist/css/js/main.js')}}"></script>


</body>

</html>
