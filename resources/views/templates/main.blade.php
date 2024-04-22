<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <title>
            @yield('title') | Proferan - Professional Federation Accounting
        </title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta content="WebApp for help UMKM to create simple financial statements" name="description" />
        <meta content="Proferam Team" name="author" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <!-- App favicon -->
        <link rel="shortcut icon" href="{{ asset('assets/images/favicon.ico') }}">

        <!-- Bootstrap Css -->
        <link href="{{ asset('assets/css/bootstrap.min.css') }}" id="bootstrap-stylesheet" rel="stylesheet" type="text/css" />
        <!-- Icons Css -->
        <link href="{{ asset('assets/css/icons.min.css') }}" rel="stylesheet" type="text/css" />
        <!-- App Css-->
        <link href="{{ asset('assets/css/app.min.css') }}" id="app-stylesheet" rel="stylesheet" type="text/css" />

        @yield('styles')
    </head>

    <body>

        <!-- Begin page -->
        <div id="wrapper">

            <!-- Topbar Start -->
            @include('templates.topbar')
            <!-- end Topbar -->

            <!-- ========== Left Sidebar Start ========== -->
            @include('templates.sidebar')
            <!-- Left Sidebar End -->

            <!-- ============================================================== -->
            <!-- Start Page Content here -->
            <!-- ============================================================== -->
            @yield('content')
            <!-- ============================================================== -->
            <!-- End Page content -->
            <!-- ============================================================== -->

        </div>
        <!-- END wrapper -->

        @yield('scripts')
        <!-- Vendor js -->
        <script src="{{ asset('assets/js/vendor.min.js') }}"></script>

        <!-- knob plugin -->
        <script src="{{ asset('assets/libs/jquery-knob/jquery.knob.min.js') }}"></script>

        <!--Morris Chart-->
        <script src="{{ asset('assets/libs/morris-js/morris.min.js') }}"></script>
        <script src="{{ asset('assets/libs/raphael/raphael.min.js') }}"></script>

        <!-- Dashboard init js-->
        <script src="{{ asset('assets/js/pages/dashboard.init.js') }}"></script>

        <!-- App js -->
        <script src="{{ asset('assets/js/app.min.js') }}"></script>
        
    </body>
</html>