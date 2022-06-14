<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no">
    <title>Dashboard</title>
    <link rel="icon" type="image/x-icon" href="dashboard/assets/img/favicon.ico" />
    <!-- BEGIN GLOBAL MANDATORY STYLES -->
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600,700' rel='stylesheet' type='text/css'>

    <!-- END GLOBAL MANDATORY STYLES -->

    <!-- BEGIN PAGE LEVEL PLUGINS/CUSTOM STYLES -->

    <!-- END PAGE LEVEL PLUGINS/CUSTOM STYLES -->

    <link href="{{ asset('dashboard/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('dashboard/assets/css/plugins.css') }}" rel="stylesheet" type="text/css">

    <link href="{{ asset('dashboard/maps/vector/jvector/jquery-jvectormap-2.0.3.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('dashboard/charts/chartist/chartist.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('dashboard/assets/css/default-dashboard/style.css') }}" rel="stylesheet" type="text/css">

</head>

<body class="default-sidebar">

    <!-- Tab Mobile View Header -->
    <header class="tabMobileView header navbar fixed-top d-lg-none">
        <ul class="navbar-nav flex-row ml-lg-auto w-100">
            <li class="nav-item dropdown user-profile-dropdown w-100 text-center">
                <div class="nav-toggle d-inline-block float-left mt-2">
                    <a href="javascript:void(0);" class="nav-link sidebarCollapse d-inline-block" data-placement="bottom">
                        <i class="flaticon-menu-line-2"></i>
                    </a>
                    <a href="/multipilar/admin" class="ml-3">
                        <img src="asset('landing/newimages/logo2.png')" class="img-fluid" alt="logo">
                    </a>

                </div>
                <a href="javascript:void(0);" class="nav-link dropdown-toggle user d-inline-block float-right" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <div class="media">
                        <img src="{{asset('storage/images/profile/profile.png')}}" class="img-fluid mr-2" alt="admin-profile">
                        <div class="media-body align-self-center">
                            <h6 class="mb-1">{{ Auth::user()->name }}</h6>
                            <p class="mb-0">{{ Auth::user()->email }}</p>
                        </div>
                    </div>
                </a>
                <div class="dropdown-menu p-0 mt-5" aria-labelledby="dropdownMenuButton">
                    <a class="dropdown-item d-flex mt-5" href="user_profile.html">
                        <i class="mr-3 flaticon-user-11"></i> <span class="align-self-center">Profile</span>
                    </a>

                    <a class="dropdown-item d-flex" href="apps_scheduler.html">
                        <i class="mr-3 flaticon-calendar"></i> <span class="align-self-center">My Schedule</span>
                    </a>
                    <a class="dropdown-item d-flex" href="/login">
                        <i class="mr-3 flaticon-mail-22"></i> <span class="align-self-center">Inbox</span>
                    </a>
                    <a class="dropdown-item d-flex" href="user_lockscreen_1.html">
                        <i class="mr-3 flaticon-lock-1"></i> <span class="align-self-center">Lock Screen</span>
                    </a>
                    <a href="/login" class="dropdown-item dropdown-item-btn">

                    <a class="#" data-confirm="Are you sure?" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();
                                                     //return confirm('Are you sure?') ;
                                                     ">

                        <i class="mr-2 flaticon-power-off"></i> <span class="align-self-center">Logout</span>
                    </a>

                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                        @csrf

                    </form>
                </div>
            </li>
        </ul>
    </header>
    <!-- Tab Mobile View Header -->

    <!--  BEGIN NAVBAR  -->
    <header class="desktop-nav header navbar fixed-top">

        <ul class="navbar-nav flex-row mr-auto">
            <li class="nav-item dropdown language-dropdown mr-5  d-lg-inline-block d-none">

                <img src="{{asset('landing/newimages/logo2.png')}}" alt="Awesome Logo">

            </li>
                   


            <li class="nav-item ml-4 d-lg-none">
                <form class="form-inline search-full form-inline search animated-search" role="search">
                    <i class="flaticon-search-1 d-lg-none d-block"></i>
                    <input type="text" class="form-control search-form-control  ml-lg-auto" placeholder="Search...">
                </form>
            </li>
        </ul>

        <ul class="navbar-nav flex-row ml-lg-auto">
            <li class="nav-item mr-5 d-lg-block d-none">
                <form class="form-inline form-inline search animated-search" role="search">
                    <i class="flaticon-search-1 d-lg-none d-block"></i>
                    <input type="text" class="form-control search-form-control  ml-lg-auto" placeholder="Search...">
                </form>
            </li>

            <li class="nav-item dropdown user-profile-dropdown mr-5  d-lg-inline-block d-none">
                <a href="javascript:void(0);" class="nav-link dropdown-toggle user" id="user-profile-dropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <div class="media">
                        <img src="{{asset('storage/images/profile/profile.png')}}" class="img-fluid mr-2" alt="admin-profile">
                        <div class="media-body align-self-center">
                            <h6 class="mb-1">{{ Auth::user()->name }}</h6>
                            <p class="mb-0">{{ Auth::user()->email }}</p>
                        </div>
                    </div>
                </a>
                <div class="dropdown-menu  position-absolute p-0" aria-labelledby="user-profile-dropdown">
                    <div class="dropdown-item d-flex justify-content-around">
                        <p class="mb-0 align-self-center">Your Account</p>
                        <div class="">
                            <i class="flaticon-star-outline"></i>
                        </div>
                    </div>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item d-flex" href="#">
                        <i class="mr-3 flaticon-user-11"></i> <span class="align-self-center">Profile Setting</span>
                    </a>


                    <div class="dropdown-item dropdown-item-btn d-flex justify-content-around">

                        <a class="#" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();
                                                     return confirm('Are you sure?');
                                                     ">
                            <i class="mr-2 flaticon-power-off"></i> <span class="align-self-center">Logout</span>
                        </a>

                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                            @csrf

                        </form>

                    </div>
                </div>
            </li>
        </ul>
    </header>
    <!--  BEGIN MAIN CONTAINER  -->
    <div class="main-container" id="container">
        <div class="overlay"></div>
        <div class="cs-overlay"></div>
        <div class="search-overlay"></div>

        <div class="topbar-nav header navbar fixed-top" role="banner">
            <div id="dismiss" class="d-lg-none text-right"><i class="flaticon-cancel-12 mr-3"></i></div>
            <nav id="topbar">
                <ul class="list-unstyled menu-categories d-lg-flex justify-content-lg-around mb-0" id="topAccordion">
                    <li class="menu">

                        <a href="#dashboard" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
                            <div class="">
                                <i class="flaticon-computer-6"></i>
                                <span>Dashboard</span>
                            </div>
                        </a>

                    <li class="menu">
                        <a href="#pages" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
                            <div class="">
                                <i class="flaticon-copy"></i>
                                <span>Pages Panel Editor</span>
                            </div>
                            <div>
                                <i class="flaticon-down-arrow"></i>
                            </div>
                        </a>
                        <div class="collapse submenu list-unstyled" id="pages" data-parent="#topAccordion">
                            <div class="row">


                                <div class="col-lg-4">
                                    <ul class="list-unstyled">
                                        <li>
                                            <a href="#ecommerce" data-toggle="collapse" aria-expanded="true" class="dropdown-toggle"> Landing Page <i class="flaticon-dot-three"></i> </a>
                                            <ul class="collapse list-unstyled sub-submenu show" id="ecommerce">
                                                <li>
                                                    <a href="/multipilar/admin/banner"> Banner </a>
                                                </li>

                                                <li>
                                                    <a href="/multipilar/admin/team"> Team </a>
                                                </li>
                                                <li>
                                                    <a href="/multipilar/admin/blog"> Blog </a>
                                                </li>
                                                <li>
                                                    <a href="/multipilar/admin/testimonial"> Testimonial </a>
                                                </li>
                                                <li>
                                                    <a href="/multipilar/admin/gallery"> Klien Kami </a>
                                                </li>
                                                <li>
                                                    <a href="/multipilar/admin/count"> Angka Project </a>
                                                </li>
                                                <li>
                                                    <a href="/multipilar/admin/contact"> Qna </a>
                                                </li>
                                            </ul>
                                        </li>
                                    </ul>
                                </div>
                                <div class="col-lg-4">
                                    <ul class="list-unstyled">
                                        <li>
                                            <a href="#page" data-toggle="collapse" aria-expanded="true" class="dropdown-toggle"> Pages <i class="flaticon-dot-three"></i> </a>
                                            <ul class="collapse list-unstyled sub-submenu show" id="page">
                                                <li>
                                                    <a href="#"> Tentang Kami Page</a>
                                                </li>
                                                <li>

                                                    <a href="/multipilar/admin/product"> Produk Kami Page </a>

                                                </li>
                                                <li>
                                                    <a href="#"> Berita / Blog </a>
                                                </li>


                                            </ul>
                                        </li>
                                    </ul>
                                </div>

                                <div class="col-lg-4">
                                    <ul class="list-unstyled">
                                        <li>
                                            <a href="#users" data-toggle="collapse" aria-expanded="true" class="dropdown-toggle"> Halaman Tambahan Jika ada <i class="flaticon-dot-three"></i> </a>
                                            <ul class="collapse list-unstyled sub-submenu show" id="users">


                                            </ul>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </li>

                </ul>
            </nav>
        </div>

        <!--  BEGIN CONTENT PART  -->

        <main class="py-4">
            @yield('content')
        </main>

        <script type="text/javascript" src="{{ asset('dashboard/assets/js/libs/jquery-3.1.1.min.js') }}"></script>
        <script type="text/javascript" src="{{ asset('dashboard/bootstrap/js/popper.min.js') }}"></script>
        <script type="text/javascript" src="{{ asset('dashboard/bootstrap/js/bootstrap.min.js') }}"></script>
        <script type="text/javascript" src="{{ asset('dashboard/scrollbar/jquery.mCustomScrollbar.concat.min.js') }}"></script>
        <script type="text/javascript" src="{{ asset('dashboard/assets/js/app.js') }}"></script>
        <script type="text/javascript" src="{{ asset('dashboard/assets/js/custom.js') }}"></script>
        <script type="text/javascript" src="{{ asset('dashboard/charts/chartist/chartist.js') }}"></script>
        <script type="text/javascript" src="{{ asset('dashboard/maps/vector/jvector/jquery-jvectormap-2.0.3.min.js') }}"></script>
        <script type="text/javascript" src="{{ asset('dashboard/calendar/pignose/moment.latest.min.js') }}"></script>
        <script type="text/javascript" src="{{ asset('dashboard/calendar/pignose/pignose.calendar.js') }}"></script>
        <script type="text/javascript" src="{{ asset('dashboard/progressbar/progressbar.min.js') }}"></script>
        <script type="text/javascript" src="{{ asset('dashboard/assets/js/default-dashboard/default-custom.js') }}"></script>
</body>

</html>