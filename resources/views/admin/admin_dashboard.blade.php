<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="shortcut icon" href="https://laravel.com/img/favicon/favicon-16x16.png"  type='image/x-icon'>
        <title>Admin Dashboard</title>
        <link rel="stylesheet" href="{{ asset('') }}../assets/vendor/chartist/css/chartist.min.css">
        <link href="{{ asset('') }}../assets/vendor/bootstrap-select/dist/css/bootstrap-select.min.css" rel="stylesheet">
        <link href="{{ asset('') }}../assets/css/style.css" rel="stylesheet">
    </head>
    <body>
      <!--**********************************
        Main wrapper start
            ***********************************-->
            <div id="main-wrapper">
            @include('admin.body.navheader')
        
        
        
            @include('admin.body.header')
           


            @include('admin.body.sidebar')
        
        @yield('admin')
            

            @include('admin.body.footer')
        </div>
       
        <!--**********************************
            Scripts
        ***********************************-->
        <script src="{{ asset('') }}../assets/vendor/global/global.min.js"></script>
        <script src="{{ asset('') }}../assets/vendor/bootstrap-select/dist/js/bootstrap-select.min.js"></script>
        <script src="{{ asset('') }}../assets/vendor/chart.js/Chart.bundle.min.js"></script>
        <!-- Chart piety plugin files -->
            <script src="{{ asset('') }}../assets/vendor/peity/jquery.peity.min.js"></script>
        
        <!-- Apex Chart -->
        <script src="{{ asset('') }}../assets/vendor/apexchart/apexchart.js"></script>
        
        <!-- Dashboard 1 -->
        <script src="{{ asset('') }}../assets/js/dashboard/dashboard-1.js"></script>
        
            <script src="{{ asset('') }}../assets/js/custom.min.js"></script>
        <script src="{{ asset('') }}../assets/js/deznav-init.js"></script>
        <script src="{{ asset('') }}../assets/js/demo.js"></script>
    </body>
</html>