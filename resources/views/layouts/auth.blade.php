<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="description" content="festivent">
    <meta name="keywords" content="festivent">
    <meta name="author" content="festivent">
    <link rel="icon" href="{{ asset('assets/images/favicon/festivent-mini.png')}}" type="image/x-icon">
    <link rel="shortcut icon" href="{{ asset('assets/images/favicon/festivent-mini.png')}}" type="image/x-icon">
    <title>Workshop System</title>

    <!--Google font-->
    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700,900" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Yellowtail&display=swap" rel="stylesheet">

    <!-- Icons -->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/vendors/fontawesome.css')}}">

    <!--Slick slider css-->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/vendors/themify-icons.css')}}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/vendors/slick.css')}}">

    <!-- Animate icon -->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/vendors/slick-theme.css')}}">

    <!-- Themify icon -->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/vendors/jsgrid.css')}}">

    <!-- Bootstrap css -->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/vendors/bootstrap.css')}}">

    <!-- Theme css -->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/admin.css')}}">

    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.21/css/jquery.dataTables.min.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/responsive/2.2.5/css/responsive.dataTables.min.css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-fileinput/5.1.4/css/fileinput.min.css" media="all" rel="stylesheet" type="text/css" />

</head>


<!-- page-wrapper Start-->
<div class="page-wrapper">
    <div class="authentication-box">
        <div class="container">
            <div class="row">
                <div class="col-md-12 p-0 card-right">
                    <div class="card ">
                        <div class="card-body">
                            {{-- <center><img src="{{ asset('assets/images/icon/logo/festivent-logo.png')}}"
                                                class="img-fluid blur-up lazyload" alt=""></center> --}}
                            <main class="py-4">
                                @yield('content')
                            </main>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- latest jquery-->
<script src="{{ asset('assets/js/jquery-3.3.1.min.js')}}"></script>

<!-- Bootstrap js-->
<script src="{{ asset('assets/js/bootstrap.bundle.min.js')}}"></script>

<!-- Sidebar jquery-->
<script src="{{ asset('assets/js/sidebar-menu.js')}}"></script>
<script src="{{ asset('assets/js/slick.js')}}"></script>

<!-- lazyload js-->
<script src="{{ asset('assets/js/lazysizes.min.js')}}"></script>

<!--script admin-->
<script src="{{ asset('assets/js/admin-script.js')}}"></script>

<!--right sidebar js-->
<script src="{{ asset('assets/js/chat-menu.js')}}"></script>

</html>



