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
      <link href="https://fonts.googleapis.com/css?family=Work+Sans:100,200,300,400,500,600,700,800,900" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <!-- Icons -->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/vendors/fontawesome.css')}}">

    <!--Slick slider css-->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/vendors/flag-icon.css')}}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/vendors/icofont.css')}}">

    <!-- Animate icon -->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/vendors/prism.css')}}">

    <!-- Themify icon -->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/vendors/chartist.css')}}">

    <!-- Bootstrap css -->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/vendors/bootstrap.css')}}">

    <!-- Theme css -->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/admin.css')}}">

    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.21/css/jquery.dataTables.min.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/responsive/2.2.5/css/responsive.dataTables.min.css">

</head>
    
    <!-- page-wrapper Start-->
<div class="page-wrapper">

    <!-- Page Header Start-->
    <div class="page-main-header">
        <div class="main-header-right row">
            <div class="main-header-left d-lg-none w-auto">
                <div class="logo-wrapper"><a href="{{ url('/dashboard') }}">
                    {{-- <img class="blur-up lazyloaded" src="{{ asset('assets/images/icon/logo/festivent-logo.png')}}" alt=""> --}}
                </a></div>
            </div>
            <div class="mobile-sidebar w-auto">
                <div class="media-body text-end switch-sm">
                    <label class="switch"><a href="#"><i id="sidebar-toggle" data-feather="align-left"></i></a></label>
                </div>
            </div>
         
        </div>
    </div>
    <!-- Page Header Ends -->


    <!-- Page Body Start-->
    <div class="page-body-wrapper">

        <!-- Page Sidebar Start-->
        <div class="page-sidebar">
            <div class="main-header-left d-none d-lg-block">
                <div class="logo-wrapper"><a href="index.html">
                    {{-- <img class="blur-up lazyloaded" src="{{ asset('assets/images/icon/logo/festivent-logo.png')}}" alt=""> --}}
                </a></div>
            </div>
            <div class="sidebar custom-scrollbar">
                <div class="sidebar-user text-center">
                    <div><img class="img-60 rounded-circle lazyloaded blur-up" src="{{ asset('assets/images/dashboard/man.png')}}" alt="#">
                    </div>
                    <h6 class="mt-3 f-14">Admin</h6>
                    {{-- <p>Festivent Admin</p> --}}
                </div>
                <ul class="sidebar-menu">
                    <li><a class="sidebar-header" href="{{ url('/dashboard') }}"><i data-feather="home"></i><span>Dashboard</span></a></li>
                    <li><a class="sidebar-header" href="{{ url('/vehicles') }}"><i data-feather="users"></i><span>Vehicle</span></a></li>
                    <li><a class="sidebar-header" href="{{ url('/companys') }}"><i data-feather="dollar-sign"></i><span>Company</span></a></li>
                    <li><a class="sidebar-header" href="{{ url('/reports') }}"><i data-feather="bar-chart"></i><span>Reports</span></a></li>
                     <li><a class="sidebar-header" href="{{ url('/users') }}"><i data-feather="bar-chart"></i><span>User Management</span></a></li>
                    <li>
                         <br>
                     <form method="POST" action="{{ route('logout') }}">
                        <a class="sidebar-header" href="{{ route('logout') }}" data-lng="en"
                         onclick="event.preventDefault();
                          this.closest('form').submit();">
                          <i data-feather="log-out"></i>
                          Logout
                           @csrf               
                        </a>
                    </form>
                    </li>
                </ul>
            </div>
        </div>
        <!-- Page Sidebar Ends-->

        <div class="page-body">
            <main class="py-4">
                @yield('content')
            </main>
        </div>
    </div>
</div>

<!-- footer -->
<footer class="footer">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-6 footer-copyright">
                <p class="mb-0">Copyright 2022 © Festivent All rights reserved.</p>
            </div>
            <div class="col-md-6">
                <p class="pull-right mb-0">Hand crafted & made with<i class="fa fa-heart"></i> by Safwan</p>
            </div>
        </div>
    </div>
</footer>
<!-- footer end -->

    <!-- latest jquery-->
    <script src="{{ asset('assets/js/jquery-3.3.1.min.js')}}"></script>

    <!-- Bootstrap js-->
    <script src="{{ asset('assets/js/bootstrap.bundle.min.js')}}"></script>

   
    <!-- feather icon js-->
    <script src="{{ asset('assets/js/icons/feather-icon/feather.min.js')}}"></script>
    <script src="{{ asset('assets/js/icons/feather-icon/feather-icon.js')}}"></script>

    <!-- Sidebar jquery-->
    <script src="{{ asset('assets/js/sidebar-menu.js')}}"></script>

   
    <!-- lazyload js-->
    <script src="{{ asset('assets/js/lazysizes.min.js')}}"></script>

    <!--copycode js-->
    <script src="{{ asset('assets/js/prism/prism.min.js')}}"></script>
    <script src="{{ asset('assets/js/clipboard/clipboard.min.js')}}"></script>
    <script src="{{ asset('assets/js/custom-card/custom-card.js')}}"></script>

    <!--counter js-->
    <script src="{{ asset('assets/js/counter/jquery.waypoints.min.js')}}"></script>
    <script src="{{ asset('assets/js/counter/jquery.counterup.min.js')}}"></script>
    <script src="{{ asset('assets/js/counter/counter-custom.js')}}"></script>

    <!--peity chart js-->
    <script src="{{ asset('assets/js/chart/peity-chart/peity.jquery.js')}}"></script>

    <!--sparkline chart js-->
    <script src="{{ asset('assets/js/chart/sparkline/sparkline.js')}}"></script>

    <!--Customizer admin-->
    <script src="{{ asset('assets/js/admin-customizer.js')}}"></script>

    <!--dashboard custom js-->
    <script src="{{ asset('assets/js/dashboard/default.js')}}"></script>

    <!--right sidebar js-->
    <script src="{{ asset('assets/js/chat-menu.js')}}"></script>

    <!--height equal js-->
    <script src="{{ asset('assets/js/height-equal.js')}}"></script>

    <!-- lazyload js-->
    <script src="{{ asset('assets/js/lazysizes.min.js')}}"></script>

    <!--script admin-->
    <script src="{{ asset('assets/js/admin-script.js')}}"></script>

    <script src="https://cdn.datatables.net/1.10.21/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/responsive/2.2.5/js/dataTables.responsive.min.js"></script>

<script type="text/javascript">
 $(document).ready(function() {
    $('.table').DataTable( {
        responsive: {
            details: {
                type: 'column',
                target: 'tr'
            }
        },
        columnDefs: [ {
            className: 'control',
            orderable: false,
            targets:   0
        } ],
        order: [ 1, 'asc' ]
    } );
} );
</script>

@stack('custom-js')

</body>

</html>
