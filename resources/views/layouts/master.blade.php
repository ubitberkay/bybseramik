<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8"/>
    <title> @yield('title')</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="BYB Seramik" name="description"/>
    <meta content="bybseramik" name="author"/>
    <!-- App favicon -->
    <link rel="shortcut icon" href="{{ asset('assets/images/logo.png') }}">
    <meta name="csrf-token" content="{{ csrf_token() }}" />

    @include('layouts.head-css')
</head>

@section('body')
    <body data-sidebar="light" >
    @include('sweetalert::alert')
    @show
    <!-- Begin page -->
    <div id="layout-wrapper">
        @include('layouts.topbar')
        @include('layouts.sidebar')
        <!-- ============================================================== -->
        <!-- Start right Content here -->
        <!-- ============================================================== -->
        <div class="main-content">
            <div class="page-content">
                <div class="container-fluid">
                    @yield('content')
                </div>
                <!-- container-fluid -->
            </div>
            <!-- End Page-content -->
            @include('layouts.footer')
        </div>
        <!-- end main content-->
    </div>
    <!-- END layout-wrapper -->

    <!-- Right Sidebar -->
    @include('layouts.right-sidebar')
    <!-- /Right-bar -->

    <!-- JAVASCRIPT -->
    @include('layouts.vendor-scripts')

    @if(session('success'))
        <script>
            Swal.fire({
                title: 'Başarılı!',
                text: '{{ session('success') }}',
                icon: 'success',
                confirmButtonText: 'OK'
            });
        </script>
    @endif
    </body>

</html>
