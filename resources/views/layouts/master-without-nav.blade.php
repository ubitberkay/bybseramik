<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8"/>
    <title> @yield('title')</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="BYB Seramik" name="description"/>
    <meta content="bybseramik" name="author"/>
    <!-- App favicon -->
    <link rel="shortcut icon" href="{{ asset('assets/images/logo.png')}}">

    @include('layouts.head-css')
</head>

@yield('body')

@yield('content')

@include('layouts.vendor-scripts')
</body>
</html>
