<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- The above 4 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <!-- Title  -->
    <title>Furniture</title>

    <!-- Favicon  -->
    <link rel="icon" href="{{asset('public/fontend/img/core-img/favicon.ico')}}">

    <!-- Core Style CSS -->
    <link rel="stylesheet" href="{{asset('public/fontend/css/core-style.css')}}">
    <link rel="stylesheet" href="{{asset('public/fontend/style.css')}}">

</head>

<body>

    @include('layout.Search')
    <!-- ##### Main Content Wrapper Start ##### -->
    <div class="main-content-wrapper d-flex clearfix">
        
        <!--Header-->
        @include('layout.Header')
        <!--Chuyển trang-->
        @yield('Content')

    </div>
    <!-- ##### Main Content Wrapper End ##### -->
    @include('layout.Newletter')
    @include('layout.Footer')
    <!-- ##### jQuery (Necessary for All JavaScript Plugins) ##### -->
    <script src="{{asset('public/fontend/js/jquery/jquery-2.2.4.min.js')}}"></script>
    <!-- Popper js -->
    <script src="{{asset('public/fontend/js/popper.min.js')}}"></script>
    <!-- Bootstrap js -->
    <script src="{{asset('public/fontend/js/bootstrap.min.js')}}"></script>
    <!-- Plugins js -->
    <script src="{{asset('public/fontend/js/plugins.js')}}"></script>
    <!-- Active js -->
    <script src="{{asset('public/fontend/js/active.js')}}"></script>

</body>

</html>