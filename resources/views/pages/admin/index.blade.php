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
    <link href="dashboard/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <link href="dashboard/assets/css/plugins.css" rel="stylesheet" type="text/css" />
    <!-- END GLOBAL MANDATORY STYLES -->

    <!-- BEGIN PAGE LEVEL PLUGINS/CUSTOM STYLES -->
    <link href="dashboard/maps/vector/jvector/jquery-jvectormap-2.0.3.css" rel="stylesheet" type="text/css" />
    <link href="dashboard/charts/chartist/chartist.css" rel="stylesheet" type="text/css">
    <link href="dashboard/assets/css/default-dashboard/style.css" rel="stylesheet" type="text/css" />
    <!-- END PAGE LEVEL PLUGINS/CUSTOM STYLES -->

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
                    <a href="index.html" class="ml-3"> <img src="dashboard/assets/img/logo-3.png" class="img-fluid" alt="logo"></a>
                </div>
                <a href="javascript:void(0);" class="nav-link dropdown-toggle user d-inline-block float-right" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <div class="media">
                        <img src="dashboard/assets/img/90x90.jpg" class="img-fluid mr-2" alt="admin-profile">
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
                    <a class="dropdown-item d-flex" href="apps_mailbox.html">
                        <i class="mr-3 flaticon-mail-22"></i> <span class="align-self-center">Inbox</span>
                    </a>
                    <a class="dropdown-item d-flex" href="user_lockscreen_1.html">
                        <i class="mr-3 flaticon-lock-1"></i> <span class="align-self-center">Lock Screen</span>
                    </a>
                    <a href="user_login_1.html" class="dropdown-item dropdown-item-btn">
                        <i class="mr-2 flaticon-power-off"></i> <span class="align-self-center">Logout</span>
                    </a>
                </div>
            </li>
        </ul>
    </header>
    <!-- Tab Mobile View Header -->

    <!--  BEGIN NAVBAR  -->
    <header class="desktop-nav header navbar fixed-top">
        <div class="nav-logo mr-5 ml-4 d-lg-inline-block d-none">
            <a href="index.html" class=""> <img src="dashboard/assets/img/logo-3.png" class="img-fluid" alt="logo"></a>
        </div>
        <ul class="navbar-nav flex-row mr-auto">
            <li class="nav-item dropdown language-dropdown mr-5  d-lg-inline-block d-none">
                <img src="landing/newimages/logo2.png" alt="Awesome Logo">
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
                        <img src="dashboard/assets/img/90x90.jpg" class="img-fluid mr-2" alt="admin-profile">
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
                    <a class="dropdown-item d-flex" href="user_profile.html">
                        <i class="mr-3 flaticon-user-11"></i> <span class="align-self-center">Profile Setting</span>
                    </a>
                    <a class="dropdown-item d-flex" href="apps_scheduler.html">
                        <i class="mr-3 flaticon-calendar"></i> <span class="align-self-center">Schedule</span>
                    </a>
                    <a class="dropdown-item d-flex" href="apps_mailbox.html">
                        <i class="mr-3 flaticon-mail-22"></i> <span class="align-self-center">Inbox</span>
                    </a>
                    <a class="dropdown-item d-flex" href="user_lockscreen_1.html">
                        <i class="mr-3 flaticon-lock-1"></i> <span class="align-self-center">Lock Screen</span>
                    </a>

                    <div class="dropdown-item dropdown-item-btn d-flex justify-content-around">
                        <a class="" href="user_login_1.html">
                            <i class="mr-2 flaticon-power-off"></i> <span class="align-self-center">Logout</span>
                        </a>
                    </div>
                </div>
            </li>




        </ul>
    </header>
    <!--  END NAVBAR  -->

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

                    </li>

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
                            <div class="row" >

                            
                                <div class="col-lg-4">
                                    <ul class="list-unstyled">
                                        <li>
                                            <a href="#ecommerce" data-toggle="collapse" aria-expanded="true" class="dropdown-toggle"> Landing Page <i class="flaticon-dot-three"></i> </a>
                                            <ul class="collapse list-unstyled sub-submenu show" id="ecommerce">
                                                <li>
                                                    <a href="ecommerce_orders.html"> Banner </a>
                                                </li>
                                                <li>
                                                    <a href="ecommerce_product.html"> Service </a>
                                                </li>
                                                <li>
                                                    <a href="ecommerce_product.html"> Team </a>
                                                </li>
                                                <li>
                                                    <a href="ecommerce_product.html"> Blog </a>
                                                </li>
                                                <li>
                                                    <a href="ecommerce_product.html"> Testimonial </a>
                                                </li>
                                                <li>
                                                    <a href="ecommerce_product.html"> Klien Kami </a>
                                                </li>
                                                <li>
                                                    <a href="ecommerce_product.html"> Angka Project </a>
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
                                                    <a href="pages_blank_page.html"> Tentang Kami Page</a>
                                                </li>
                                                <li>
                                                    <a href="pages_helpdesk.html"> Produk Kami Page </a>
                                                </li>
                                                <li>
                                                    <a href="pages_contact_us.html"> Berita / Blog </a>
                                                </li>


                                                <li class="sub-sub-submenu-list">
                                                    <a href="#pages-error" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle"> Halaman Tambahan jika ada <i class="flaticon-right-arrow"></i> </a>
                                                    <ul class="collapse list-unstyled sub-submenu" id="pages-error" data-parent="#pages">
                                                        <li>
                                                            <a href="pages_error404.html"> 404 1 </a>
                                                        </li>
                                                        <li>
                                                            <a href="pages_error404-2.html"> 404 2 </a>
                                                        </li>

                                                    </ul>
                                                </li>
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
        <div id="content" class="main-content">
            <div class="container">
                <div class="page-header">
                    <div class="page-title">
                        <h3>Dashboard</h3>
                    </div>
                </div>

                <div class="row">
                    <div class="col-xl-12 col-lg-12 col-md-12 col-12 layout-spacing">
                        <div class="statbox widget box">
                            <div class="widget-header ">
                                <div class="row">
                                    <div class="col-xl-12 col-md-12 col-sm-12 col-12">


                                        <div class="col-md-7 col-sm-7 text-sm-left">
                                            <h4>User Database</h4>
                                            <button class="btn btn-gradient-warning btn-rounded">Add New User</button>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="widget-content-area ">

                                <div class="table-responsive new-products">
                                    <table class="table">
                                        <thead>
                                            <tr>
                                                <th>ID</th>
                                                <th>Name</th>
                                                <th>Email</th>
                                                <th>Password</th>
                                                <th>Image</th>
                                                <th>Status</th>

                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>{{ Auth::user()->id }}</td>
                                                <td>{{ Auth::user()->name }}</td>
                                                <td><span class="badge badge-info badge-pill">{{ Auth::user()->email }}</span></td>
                                                <td>{{ Auth::user()->password }}</td>

                                                <td>
                                                    <img src="dashboard/assets/img/90x90.jpg" class="img-fluid" alt="img-1" style="border-color: #3862f5;">
                                                </td>

                                                <td class="text-center">
                                                    <div class="toolbar">
                                                        <div class="toolbar-toggle">...</div>
                                                        <ul class="toolbar-dropdown animated fadeInUp table-controls list-inline">
                                                            <li class="list-inline-item"><a href="javascript:void(0);" class="bs-tooltip" data-original-title="View"><i class="flaticon-view-3"></i></a>
                                                            </li>
                                                            <li class="list-inline-item"><a href="javascript:void(0);" class="bs-tooltip" data-original-title="Edit"><i class="flaticon-edit-5"></i></a>
                                                            </li>
                                                            <li class="list-inline-item"><a href="javascript:void(0);" class="bs-tooltip" data-original-title="Remove"><i class="flaticon-delete-6"></i></a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </td>
                                            </tr>


                                        </tbody>
                                    </table>
                                </div>
                                <div class="pagination-section">
                                    <ul class="pagination pagination-style-1 pagination-rounded justify-content-end mt-3 mb-3">
                                        <li><a href="javascript:void(0);">«</a></li>
                                        <li><a href="javascript:void(0);">1</a></li>
                                        <li><a href="javascript:void(0);">2</a></li>
                                        <li><a href="javascript:void(0);">3</a></li>
                                        <li><a href="javascript:void(0);">4</a></li>
                                        <li><a href="javascript:void(0);">5</a></li>
                                        <li><a href="javascript:void(0);">»</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-xl-6 col-lg-12 col-md-12 col-12 layout-spacing">
                        <div class="widget-content-area raised-tickets p-0  h-100 br-4">
                            <div class=" table-header">
                                <div class="row">
                                    <div class="col-6 pr-0">
                                        <p class="mb-0">Tickets</p>
                                    </div>
                                    <div class="col-6 pl-0 text-right">
                                        <p class="mb-0">Status</p>
                                    </div>
                                </div>
                            </div>
                            <div class="table-responsive">
                                <table class="table">
                                    <tbody>
                                        <tr>
                                            <td>
                                                <div class="media">
                                                    <img src="dashboard/assets/img/90x90.jpg" class="rounded-circle mr-4" alt="user">
                                                    <div class="media-body">
                                                        <h6 class="usr-name">Shaun Park</h6>
                                                        <p class="meta-info">
                                                            <i class="flaticon-stopwatch-1 mr-1"></i>
                                                            <span class="meta-date">9 Jan 2019 | Tue - </span>
                                                            <span class="meta-time">9:00 am</span>
                                                        </p>
                                                    </div>
                                                </div>
                                            </td>
                                            <td class="action text-right">
                                                <i class="flaticon-danger-2 mb-2 t-inprogress bs-tooltip" data-placement="top" title="Pending"></i>
                                                <i class="flaticon-checked-1 mb-2 bs-tooltip" data-placement="top" title="Success"></i>
                                                <i class="flaticon-cancel-circle mb-2 bs-tooltip" data-placement="top" title="Close"></i>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="media">
                                                    <img src="dashboard/assets/img/90x90.jpg" class="rounded-circle mr-4" alt="user">
                                                    <div class="media-body">
                                                        <h6 class="usr-name">Nia Hillyer</h6>
                                                        <p class="meta-info">
                                                            <i class="flaticon-stopwatch-1 mr-1"></i>
                                                            <span class="meta-date">5 Jan 2019 | Mon - </span>
                                                            <span class="meta-time">2:00 pm</span>
                                                        </p>
                                                    </div>
                                                </div>
                                            </td>
                                            <td class="action text-right">
                                                <i class="flaticon-danger-2 mb-2 bs-tooltip" data-placement="top" title="Pending"></i>
                                                <i class="flaticon-checked-1 mb-2 t-solved bs-tooltip" data-placement="top" title="Success"></i>
                                                <i class="flaticon-cancel-circle mb-2 bs-tooltip" data-placement="top" title="Close"></i>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="media">
                                                    <img src="dashboard/assets/img/90x90.jpg" class="rounded-circle mr-4" alt="user">
                                                    <div class="media-body">
                                                        <h6 class="usr-name">Mary McDonald</h6>
                                                        <p class="meta-info">
                                                            <i class="flaticon-stopwatch-1 mr-1"></i>
                                                            <span class="meta-date">3 Jan 2019 | Mon - </span>
                                                            <span class="meta-time">10:00 am</span>
                                                        </p>
                                                    </div>
                                                </div>
                                            </td>
                                            <td class="action text-right">
                                                <i class="flaticon-danger-2 mb-2 bs-tooltip" data-placement="top" title="Pending"></i>
                                                <i class="flaticon-checked-1 mb-2 bs-tooltip" data-placement="top" title="Success"></i>
                                                <i class="flaticon-cancel-circle mb-2 t-not-solved bs-tooltip" data-placement="top" title="Close"></i>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="media">
                                                    <img src="dashboard/assets/img/90x90.jpg" class="rounded-circle mr-4" alt="user">
                                                    <div class="media-body">
                                                        <h6 class="usr-name">Andy King</h6>
                                                        <p class="meta-info">
                                                            <i class="flaticon-stopwatch-1 mr-1"></i>
                                                            <span class="meta-date">29 Dec 2018 | Fri - </span>
                                                            <span class="meta-time">03:00 pm</span>
                                                        </p>
                                                    </div>
                                                </div>
                                            </td>
                                            <td class="action text-right">
                                                <i class="flaticon-danger-2 mb-2 bs-tooltip" data-placement="top" title="Pending"></i>
                                                <i class="flaticon-checked-1 mb-2 t-solved bs-tooltip" data-placement="top" title="Success"></i>
                                                <i class="flaticon-cancel-circle mb-2 bs-tooltip" data-placement="top" title="Close"></i>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>

                    <div class="col-xl-6 col-lg-12 col-md-12 col-12 layout-spacing">
                        <div class="widget-content-area task-container  p-0 h-100 br-4">
                            <div class="task-list">
                                <div class="task-header">
                                    <div class="row">
                                        <div class="col-md-5 col-sm-5 mb-4 mb-sm-0">
                                            <h6 class="mt-3 mb-0">Today's Task</h6>
                                        </div>
                                        <div class="col-md-7 col-sm-7 text-sm-right">
                                            <button class="btn btn-gradient-warning btn-rounded">Create Task</button>
                                        </div>
                                    </div>
                                </div>
                                <div class="task-body">
                                    <div class="table-responsive">
                                        <table class="table">
                                            <tbody>
                                                <tr>
                                                    <td>
                                                        <div class="task-item">
                                                            <h6 class="task-title mb-3">Metting Scheduled with</h6>
                                                            <ul class="list-inline">
                                                                <li class="list-inline-item">
                                                                    <img src="dashboard/assets/img/90x90.jpg" class="rounded-circle mb-2" alt="user">
                                                                </li>
                                                                <li class="list-inline-item">
                                                                    <img src="dashboard/assets/img/90x90.jpg" class="rounded-circle mb-2" alt="user">
                                                                </li>
                                                                <li class="list-inline-item">
                                                                    <img src="dashboard/assets/img/90x90.jpg" class="rounded-circle mb-2" alt="user">
                                                                </li>
                                                                <li class="list-inline-item">
                                                                    <img src="dashboard/assets/img/90x90.jpg" class="rounded-circle mb-2" alt="user">
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </td>
                                                    <td class="action text-right">
                                                        <i class="flaticon-edit-fill bs-tooltip" data-placement="top" title="Edit"></i>
                                                        <i class="flaticon-delete-can-fill-2 ml-2 bs-tooltip" data-placement="top" title="Delete"></i>
                                                        <br />
                                                        <p class="meta-info">
                                                            <span class="meta-time">03:20 PM Wed,</span>
                                                            <span class="meta-date">16 Jan 2019</span>
                                                        </p>
                                                    </td>
                                                </tr>

                                                <tr>
                                                    <td>
                                                        <div class="task-item">
                                                            <h6 class="task-title mb-3">Give purchase report to</h6>
                                                            <ul class="list-inline">
                                                                <li class="list-inline-item">
                                                                    <img src="dashboard/assets/img/90x90.jpg" class="rounded-circle mb-1" alt="user">
                                                                </li>
                                                                <li class="list-inline-item">
                                                                    <div class="txt-profile txt-profile-success mb-1">G</div>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </td>
                                                    <td class="action text-right">
                                                        <i class="flaticon-edit-fill bs-tooltip" data-placement="top" title="Edit"></i>
                                                        <i class="flaticon-delete-can-fill-2 ml-2 bs-tooltip" data-placement="top" title="Delete"></i>
                                                        <br />
                                                        <p class="meta-info">
                                                            <span class="meta-time">11:00 AM Wed,</span>
                                                            <span class="meta-date">16 Jan 2019</span>
                                                        </p>
                                                    </td>
                                                </tr>

                                                <tr>
                                                    <td>
                                                        <div class="task-item">
                                                            <h6 class="task-title mb-3">Receive Shipment</h6>
                                                            <ul class="list-inline">
                                                                <li class="list-inline-item">
                                                                    <img src="dashboard/assets/img/90x90.jpg" class="rounded-circle mb-2" alt="user">
                                                                </li>
                                                                <li class="list-inline-item">
                                                                    <img src="dashboard/assets/img/90x90.jpg" class="rounded-circle mb-2" alt="user">
                                                                </li>
                                                                <li class="list-inline-item">
                                                                    <img src="dashboard/assets/img/90x90.jpg" class="rounded-circle mb-2" alt="user">
                                                                </li>
                                                                <li class="list-inline-item">
                                                                    <img src="dashboard/assets/img/90x90.jpg" class="rounded-circle mb-2" alt="user">
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </td>
                                                    <td class="action text-right">
                                                        <i class="flaticon-edit-fill bs-tooltip" data-placement="top" title="Edit"></i>
                                                        <i class="flaticon-delete-can-fill-2 ml-2 bs-tooltip" data-placement="top" title="Delete"></i>
                                                        <br />
                                                        <p class="meta-info">
                                                            <span class="meta-time">09:00 AM Wed,</span>
                                                            <span class="meta-date">16 Jan 2019</span>
                                                        </p>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                    <div class="text-center action-button">
                                        <button class="btn btn-light-success mb-4 mt-3 box-shadow-none">View All Tasks</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-xl-6 col-lg-12 col-md-12 col-12 layout-spacing">
                        <div class="widget-content-area event-calendar p-0  h-100 br-4">
                            <div class="calendar"></div>
                        </div>
                    </div>

                    <div class="col-xl-6 col-lg-12 col-md-12 col-12 layout-spacing">
                        <div class="top-searches widget-content-area p-0 widget-content-container h-100 br-4">
                            <div class="col-lg-12 col-md-12 col-12 map-title">
                                <div class="row">
                                    <div class="col-lg-6 col-md-6 col-6">
                                        <p class="mb-4 mt-2">Top Searches</p>
                                    </div>
                                </div>
                            </div>
                            <div class="child-content">
                                <div id="world-map" style="height: 435px; max-height: 100%;"></div>
                                <div class="world-map-section">
                                    <div class="">
                                        <div class="table-responsive top-search-scroll">
                                            <table class="table table-highlight-head">
                                                <thead>
                                                    <tr>
                                                        <th class="align-center">
                                                            <div class="d-flex justify-content-center">
                                                                <div class="d-m-data-1 data-marker align-self-center"></div>
                                                                <span class="page-view mr-sm-3">USA</span>
                                                            </div>
                                                        </th>
                                                        <th class="align-center">
                                                            <div class="d-flex justify-content-center">
                                                                <div class="d-m-data-2 data-marker align-self-center"></div>
                                                                <span class="page-view mr-sm-3">Australia</span>
                                                            </div>
                                                        </th>
                                                        <th class="align-center">
                                                            <div class="d-flex justify-content-center">
                                                                <div class="d-m-data-3 data-marker align-self-center"></div>
                                                                <span class="page-view mr-sm-3">Spain</span>
                                                            </div>
                                                        </th>
                                                        <th class="align-center">
                                                            <div class="d-flex justify-content-center">
                                                                <div class="d-m-data-4 data-marker align-self-center"></div>
                                                                <span class="page-view mr-sm-3">France</span>
                                                            </div>
                                                        </th>
                                                        <th class="align-center">
                                                            <div class="d-flex justify-content-center">
                                                                <div class="d-m-data-5 data-marker align-self-center"></div>
                                                                <span class="page-view mr-sm-3">India</span>
                                                            </div>
                                                        </th>
                                                        <th class="align-center">
                                                            <div class="d-flex justify-content-center">
                                                                <div class="d-m-data-6 data-marker align-self-center"></div>
                                                                <span class="page-view mr-sm-3">Other</span>
                                                            </div>
                                                        </th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td class="align-center data-value-1">55%</td>
                                                        <td class="align-center data-value-2">30%</td>
                                                        <td class="align-center data-value-3">10%</td>
                                                        <td class="align-center data-value-4">4%</td>
                                                        <td class="align-center data-value-5">0.6%</td>
                                                        <td class="align-center data-value-6">0.4%</td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-xl-8 col-lg-8 col-md-8 col-12 layout-spacing">
                        <div class="statbox widget box box-shadow latest-invoice ">
                            <div class="widget-header ">
                                <div class="row">
                                    <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                                        <h4>Latest Invoice</h4>
                                    </div>
                                </div>
                            </div>
                            <div class="widget-content-area ">
                                <div class="table-responsive">
                                    <table class="table">
                                        <thead>
                                            <tr>
                                                <th class="form-check-column text-center">
                                                    <label for="invoiceAll" class="new-control new-checkbox checkbox-primary pb-2">
                                                        <input type="checkbox" id="invoiceAll" class="new-control-input">
                                                        <span class="new-control-indicator mt-2"></span><span class="invisible">s</span>
                                                    </label>
                                                </th>
                                                <th>Product</th>
                                                <th>Invoice no.</th>
                                                <th>Date</th>
                                                <th class="text-center">Amount</th>
                                                <th class="text-center">Status</th>
                                                <th></th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td class="form-check-column text-center">
                                                    <label class="new-control new-checkbox checkbox-primary pb-2">
                                                        <input type="checkbox" class="new-control-input invoicechk">
                                                        <span class="new-control-indicator mt-2"></span><span class="invisible">s</span>
                                                    </label>
                                                </td>
                                                <td>Camera</td>
                                                <td>#0001</td>
                                                <td>16 Jan</td>
                                                <td class="align-center">$15,202</td>
                                                <td class="text-center">
                                                    <span class="badge badge-pills outline-badge-secondary">In Progress</span>
                                                </td>
                                                <td>
                                                    <i class="flaticon-view-1 bs-tooltip" data-placement="top" data-original-title="View"></i>
                                                </td>
                                            </tr>

                                            <tr>
                                                <td class="form-check-column text-center">
                                                    <label class="new-control new-checkbox checkbox-primary pb-2">
                                                        <input type="checkbox" class="new-control-input invoicechk">
                                                        <span class="new-control-indicator mt-2"></span><span class="invisible">s</span>
                                                    </label>
                                                </td>
                                                <td>Iphone</td>
                                                <td>#0002</td>
                                                <td>16 Jan</td>
                                                <td class="align-center">$650</td>
                                                <td class="text-center">
                                                    <span class="badge badge-pills outline-badge-success">Approved</span>
                                                </td>
                                                <td>
                                                    <i class="flaticon-view-1 bs-tooltip" data-placement="top" data-original-title="View"></i>
                                                </td>
                                            </tr>

                                            <tr>
                                                <td class="form-check-column text-center">
                                                    <label class="new-control new-checkbox checkbox-primary pb-2">
                                                        <input type="checkbox" class="new-control-input invoicechk">
                                                        <span class="new-control-indicator mt-2"></span><span class="invisible">s</span>
                                                    </label>
                                                </td>
                                                <td>Headphone</td>
                                                <td>#0003</td>
                                                <td>16 Jan</td>
                                                <td class="align-center">$25</td>
                                                <td class="text-center">
                                                    <span class="badge badge-pills outline-badge-warning">Pending</span>
                                                </td>
                                                <td>
                                                    <i class="flaticon-view-1 bs-tooltip" data-placement="top" data-original-title="View"></i>
                                                </td>
                                            </tr>

                                            <tr>
                                                <td class="form-check-column text-center">
                                                    <label class="new-control new-checkbox checkbox-primary pb-2">
                                                        <input type="checkbox" class="new-control-input invoicechk">
                                                        <span class="new-control-indicator mt-2"></span><span class="invisible">s</span>
                                                    </label>
                                                </td>
                                                <td>Speakers</td>
                                                <td>#0004</td>
                                                <td>16 Jan</td>
                                                <td class="align-center">$100</td>
                                                <td class="text-center">
                                                    <span class="badge badge-pills outline-badge-secondary">In Progress</span>
                                                </td>
                                                <td>
                                                    <i class="flaticon-view-1 bs-tooltip" data-placement="top" data-original-title="View"></i>
                                                </td>
                                            </tr>

                                            <tr>
                                                <td class="form-check-column text-center">
                                                    <label class="new-control new-checkbox checkbox-primary pb-2">
                                                        <input type="checkbox" class="new-control-input invoicechk">
                                                        <span class="new-control-indicator mt-2"></span><span class="invisible">s</span>
                                                    </label>
                                                </td>
                                                <td>Watch</td>
                                                <td>#0005</td>
                                                <td>16 Jan</td>
                                                <td class="align-center">$85</td>
                                                <td class="text-center">
                                                    <span class="badge badge-pills outline-badge-success">Approved</span>
                                                </td>
                                                <td>
                                                    <i class="flaticon-view-1 bs-tooltip" data-placement="top" data-original-title="View"></i>
                                                </td>
                                            </tr>

                                            <tr>
                                                <td class="form-check-column text-center">
                                                    <label class="new-control new-checkbox checkbox-primary pb-2">
                                                        <input type="checkbox" class="new-control-input invoicechk">
                                                        <span class="new-control-indicator mt-2"></span><span class="invisible">s</span>
                                                    </label>
                                                </td>
                                                <td>Sunglasses</td>
                                                <td>#0006</td>
                                                <td>16 Jan</td>
                                                <td class="align-center">$19</td>
                                                <td class="text-center">
                                                    <span class="badge badge-pills outline-badge-danger">Cancelled</span>
                                                </td>
                                                <td>
                                                    <i class="flaticon-view-1 bs-tooltip" data-placement="top" data-original-title="View"></i>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-xl-4 col-lg-4 col-md-4 col-12 layout-spacing">
                        <div class="widget-content-area p-0 card-widget-content ">
                            <div id="user-profile-card-1" class="card br-4" style="">
                                <div class="card-body p-0">
                                    <div class="usr-img-meta mx-auto">
                                        <img alt="admin-profile" src="dashboard/assets/img/120x120.jpg" class="rounded-circle">
                                    </div>
                                    <div class="usr-info-meta text-center">
                                        <p class="usr-name mb-0">Sean Freeman</p>
                                        <p class="usr-occupation">Designer</p>
                                        <button class="btn btn-secondary btn-rounded">View Profile</button>
                                    </div>
                                    <div class="row mt-5">
                                        <div class="col-lg-12 text-center mt-4">
                                            <button class="btn btn-light-info rounded-circle mb-2 mr-2"><i class="flaticon-twitter-logo flaticon-circle-p"></i>
                                            </button>
                                            <button class="btn btn-light-success rounded-circle mb-2 mr-2"><i class="flaticon-behance-logo flaticon-circle-p"></i>
                                            </button>
                                            <button class="btn btn-light-primary rounded-circle mb-2 mr-2"><i class="flaticon-facebook-logo flaticon-circle-p"></i>
                                            </button>
                                            <button class="btn btn-light-warning rounded-circle mb-2 mr-2"><i class="flaticon-dribbble-bold flaticon-circle-p"></i>
                                            </button>
                                            <button class="btn btn-light-danger rounded-circle mb-2 mr-2"><i class="flaticon-youtube-logo flaticon-circle-p"></i></button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-xl-5 col-lg-12 col-md-12 col-12 layout-spacing">
                        <div class="widget-content-area page-views p-0  br-4">
                            <ul class="nav nav-pills py-3" id="pills-tab" role="tablist">
                                <li class="nav-item">
                                    <a class="nav-link active" id="pills-home-tab" data-toggle="pill" href="#pills-home" role="tab" aria-controls="pills-home" aria-selected="true">Daily</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="pills-profile-tab" data-toggle="pill" href="#pills-profile" role="tab" aria-controls="pills-profile" aria-selected="false">Weekly</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="pills-contact-tab" data-toggle="pill" href="#pills-contact" role="tab" aria-controls="pills-contact" aria-selected="false">Monthly</a>
                                </li>
                            </ul>
                            <div class="tab-content" id="pills-tabContent">
                                <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
                                    <div class="row">
                                        <div class="col-md-6 col-sm-6 text-center">
                                            <div class="daily">
                                                <p class="d-count mb-0">5,067</p>
                                                <p>Total Page Views</p>
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-sm-6">
                                            <div id="daily"></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">
                                    <div class="row">
                                        <div class="col-md-6 col-sm-6 text-center">
                                            <div class="weekly">
                                                <p class="w-count mb-0">25,067</p>
                                                <p>Total Page Views</p>
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-sm-6">
                                            <div id="weekly"></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="pills-contact" role="tabpanel" aria-labelledby="pills-contact-tab">
                                    <div class="row">
                                        <div class="col-md-6 col-sm-6 text-center">
                                            <div class="month">
                                                <p class="m-count mb-0">276,097</p>
                                                <p>Total Page Views</p>
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-sm-6">
                                            <div id="month"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-xl-7 col-lg-12 col-md-12 col-12 layout-spacing">
                        <div class="row">

                            <div class="col-sm-4 col-12 mb-sm-0 mb-4">
                                <div class="widget-content-area social-likes text-center p-0  br-4">
                                    <div class="card facebook">
                                        <div class="icon mb-4">
                                            <i class="flaticon-facebook-logo"></i>
                                        </div>
                                        <div class="card-content">
                                            <h5>Facebook</h5>
                                            <p>13K Followers</p>
                                        </div>
                                        <div class="card-btn-section">
                                            <p>View Profile</p>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-sm-4 col-12 mb-sm-0 mb-4">
                                <div class="widget-content-area social-likes text-center p-0  br-4">
                                    <div class="card dribbble">
                                        <div class="icon mb-4">
                                            <i class="flaticon-dribbble-bold"></i>
                                        </div>
                                        <div class="card-content">
                                            <h5>Dribbble</h5>
                                            <p>4K Followers</p>
                                        </div>
                                        <div class="card-btn-section">
                                            <p>Check Work</p>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-sm-4 col-12 mb-sm-0 mb-4">
                                <div class="widget-content-area social-likes text-center p-0  br-4">
                                    <div class="card twitter">
                                        <div class="icon mb-4">
                                            <i class="flaticon-twitter-logo"></i>
                                        </div>
                                        <div class="card-content">
                                            <h5>Twitter</h5>
                                            <p>7.2K Followers</p>
                                        </div>
                                        <div class="card-btn-section">
                                            <p>Read Tweets</p>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>

            </div>
        </div>
        <!--  END CONTENT PART  -->

    </div>
    <!-- END MAIN CONTAINER -->

    <!--  BEGIN FOOTER  -->
    <footer class="footer-section theme-footer">

        <div class="footer-section-1  sidebar-theme">

        </div>

        <div class="footer-section-2 container-fluid">
            <div class="row">
                <div id="toggle-grid" class="col-xl-7 col-md-6 col-sm-6 col-12 text-sm-left text-center">
                    <ul class="list-inline links ml-sm-5">
                        <li class="list-inline-item mr-3">
                            <a href="javascript:void(0);">Home</a>
                        </li>
                        <li class="list-inline-item mr-3">
                            <a href="javascript:void(0);">Blog</a>
                        </li>
                        <li class="list-inline-item mr-3">
                            <a href="javascript:void(0);">About</a>
                        </li>
                        <li class="list-inline-item">
                            <a href="javascript:void(0);">Buy</a>
                        </li>
                    </ul>
                </div>
                <div class="col-xl-5 col-md-6 col-sm-6 col-12">
                    <ul class="list-inline mb-0 d-flex justify-content-sm-end justify-content-center mr-sm-3 ml-sm-0 mx-3">
                        <li class="list-inline-item  mr-3">
                            <p class="bottom-footer">&#xA9; 2019 <a target="_blank" href="https://designreset.com/equation">Equation Admin Theme</a></p>
                        </li>
                        <li class="list-inline-item align-self-center">
                            <div class="scrollTop"><i class="flaticon-up-arrow-fill-1"></i></div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </footer>
    <!--  END FOOTER  -->

    <!--  BEGIN CONTROL SIDEBAR  -->
    <aside class="control-sidebar control-sidebar-light-color cs-content">
        <i class=""></i>
        <div class="">
            <div class="tab-navigation-section text-center mb-5 mt-3">
                <ul class="nav nav-tabs nav-justified mx-2">
                    <li class="nav-item">
                        <a data-toggle="tab" href="#task-tab" class="nav-link rounded-circle  justify-content-center d-flex active show">
                            <p class="mb-0">Task</p>
                            <i class="align-self-center flaticon-notes"></i>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a data-toggle="tab" href="#friends-tab" class="nav-link rounded-circle  justify-content-center d-flex">
                            <p class="mb-0">Friends</p>
                            <i class="align-self-center flaticon-user-8"></i>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a data-toggle="tab" href="#settings-tab" class="nav-link rounded-circle  justify-content-center d-flex">
                            <p class="mb-0">Settings</p>
                            <i class="align-self-center flaticon-gear-1"></i>
                        </a>
                    </li>
                </ul>
            </div>

            <div class="tab-content">
                <div id="task-tab" class="tab-pane tab-1 fade show active">
                    <div class="tasks">
                        <div class="recent">

                            <div class="d-flex justify-content-between mb-5">
                                <div>
                                    <span class="">Today</span> <span class="notification-count ml-2">12</span>
                                </div>

                                <div>
                                    <p class="r-view-all">See all</p>
                                </div>
                            </div>

                            <div class="media">
                                <img src="dashboard/assets/img/120x120.jpg" class="img-fluid mr-3" alt="admin-profile">
                                <div class="media-body">
                                    <h6 class="mb-0">Sean Freeman</h6>
                                    <p>has replied your mail.</p>
                                    <p class="meta-time">7 mins ago</p>
                                </div>
                            </div>

                            <div class="media">
                                <img src="dashboard/assets/img/120x120.jpg" class="img-fluid mr-3" alt="admin-profile">
                                <div class="media-body">
                                    <h6 class="mb-0">Laurie Fox</h6>
                                    <p>comment to your posts.</p>
                                    <p class="meta-time">13 mins ago</p>
                                </div>
                            </div>

                            <div class="media system-notify">
                                <i class="flaticon-settings-7  mr-3"></i>
                                <div class="media-body">
                                    <h6 class="mb-0">System Notifications</h6>
                                    <p>has replied your mail.</p>
                                    <p class="meta-time">7 mins ago</p>
                                </div>
                            </div>

                            <div class="media mail-notify">
                                <i class="flaticon-folder-fill-1  mr-3"></i>
                                <div class="media-body">
                                    <h6 class="mb-0">Ricky Turner</h6>
                                    <p>has replied your mails.</p>
                                    <p class="meta-time">7 mins ago</p>
                                </div>
                            </div>

                        </div>

                        <div class="today mt-5">

                            <div class="d-flex justify-content-between mb-5">
                                <div>
                                    <span>Yesterday</span> <span class="notification-count ml-2">8</span>
                                </div>

                                <div>
                                    <p class="r-view-all">See all</p>
                                </div>
                            </div>

                            <div class="media">
                                <img src="dashboard/assets/img/120x120.jpg" class="img-fluid mr-3" alt="admin-profile">
                                <div class="media-body">
                                    <h6 class="mb-0">Angie Lamb</h6>
                                    <p>has replied your mail.</p>
                                    <p class="meta-time">7 mins ago</p>
                                </div>
                            </div>

                            <div class="media">
                                <img src="dashboard/assets/img/120x120.jpg" class="img-fluid mr-3" alt="admin-profile">
                                <div class="media-body">
                                    <h6 class="mb-0">Amy Diaz</h6>
                                    <p>comment to your posts.</p>
                                    <p class="meta-time">13 mins ago</p>
                                </div>
                            </div>

                            <div class="media">
                                <img src="dashboard/assets/img/120x120.jpg" class="img-fluid mr-3" alt="admin-profile">
                                <div class="media-body">
                                    <h6 class="mb-0">Irene Collins</h6>
                                    <p>has replied your mail.</p>
                                    <p class="meta-time">7 mins ago</p>
                                </div>
                            </div>

                            <div class="media">
                                <img src="dashboard/assets/img/120x120.jpg" class="img-fluid mr-3" alt="admin-profile">
                                <div class="media-body">
                                    <h6 class="mb-0">Lila Perry</h6>
                                    <p>has replied your mails.</p>
                                    <p class="meta-time">7 mins ago</p>
                                </div>
                            </div>

                        </div>

                        <div class="task-stats mt-5">

                            <div class="t-s-header mb-5">
                                <div class="row">
                                    <div class="col-md-12 text-center">
                                        <h6><span>TASK STATISTICS</span></h6>
                                    </div>
                                </div>
                            </div>

                            <div class="t-s-body">

                                <div class="row">

                                    <div class="col-md-12">

                                        <div class="d-flex justify-content-between">
                                            <p>Feature development</p>
                                            <p>70%</p>
                                        </div>

                                        <div class="progress  br-30 mb-4">
                                            <div class="progress-bar  br-30 bg-secondary" role="progressbar" style="width: 70%" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>

                                    </div>

                                    <div class="col-md-12">

                                        <div class="d-flex justify-content-between mt-3">
                                            <p>Uploading files</p>
                                            <p>30%</p>
                                        </div>

                                        <div class="progress  br-30 mb-4">
                                            <div class="progress-bar  br-30 bg-danger" role="progressbar" style="width: 30%" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>

                                    </div>

                                    <div class="col-md-12">

                                        <div class="d-flex justify-content-between mt-3">
                                            <p>Total progress</p>
                                            <p>86%</p>
                                        </div>

                                        <div class="progress  br-30">
                                            <div class="progress-bar  br-30 bg-info" role="progressbar" style="width: 86%" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>

                                    </div>

                                </div>

                            </div>

                            <div class="close-sidebar text-center">
                                <i class="flaticon-cancel-12 toggle-control-sidebar"></i>
                            </div>

                        </div>

                    </div>
                </div>

                <div id="friends-tab" class="tab-pane tab-2 fade">

                    <div class="friends">
                        <div class="recent">
                            <div class="friend-request">

                                <div class="d-flex justify-content-between header mb-5">

                                    <div class="media">
                                        <i class="flaticon-user-plus mr-3 align-self-center"></i>
                                        <div class="media-body">
                                            <h6 class="mt-2">Friend request</h6>
                                        </div>
                                    </div>

                                    <div class="align-self-center">
                                        <p class="mb-0">See all</p>
                                    </div>

                                </div>

                                <div class="media">
                                    <img src="dashboard/assets/img/120x120.jpg" class="img-fluid mr-3" alt="admin-profile">
                                    <div class="media-body">
                                        <h6>Kara Young</h6>
                                        <p>2 mins ago</p>
                                    </div>
                                    <i class="flaticon-fill-tick mr-2"></i>
                                    <i class="flaticon-close-fill"></i>
                                </div>

                                <div class="media mt-2">
                                    <img src="dashboard/assets/img/120x120.jpg" class="img-fluid mr-3" alt="admin-profile">
                                    <div class="media-body">
                                        <h6>Justin Cross</h6>
                                        <p>5 mins ago</p>
                                    </div>
                                    <i class="flaticon-fill-tick mr-2"></i>
                                    <i class="flaticon-close-fill"></i>
                                </div>

                                <div class="media mt-2">
                                    <img src="dashboard/assets/img/120x120.jpg" class="img-fluid mr-3" alt="admin-profile">
                                    <div class="media-body">
                                        <h6>Amy Diaz</h6>
                                        <p>7 mins ago</p>
                                    </div>
                                    <i class="flaticon-fill-tick mr-2"></i>
                                    <i class="flaticon-close-fill"></i>
                                </div>


                                <div class="media mt-2">
                                    <img src="dashboard/assets/img/120x120.jpg" class="img-fluid mr-3" alt="admin-profile">
                                    <div class="media-body">
                                        <h6>Ernest Reeves</h6>
                                        <p>10 mins ago</p>
                                    </div>
                                    <i class="flaticon-fill-tick mr-2"></i>
                                    <i class="flaticon-close-fill"></i>
                                </div>

                            </div>
                        </div>

                        <div class="friends-stats">

                            <div class="a-s-media mt-5">

                                <div class="d-flex justify-content-between header mb-5">

                                    <div class="media">
                                        <div class="media-body">
                                            <h6 class="mt-2 text-center ml-4"><span>Status</span></h6>
                                        </div>
                                    </div>

                                    <div class="align-self-center">
                                        <p class="mb-0">See all</p>
                                    </div>

                                </div>

                                <div class="media mb-3">
                                    <div class="profile-img online mr-3">
                                        <img src="dashboard/assets/img/90x90.jpg" class="img-fluid" alt="admin-profile">
                                    </div>
                                    <div class="media-body">
                                        <h6 class="mt-2 mb-0">Traci Lopez</h6>
                                        <p class="stats">Available</p>
                                    </div>
                                    <div class="align-self-center">
                                        <p class="meta-time">12 mins ago</p>
                                    </div>
                                </div>

                                <div class="media mb-3">
                                    <div class="profile-img away mr-3">
                                        <img src="dashboard/assets/img/120x120.jpg" class="img-fluid" alt="admin-profile">
                                    </div>
                                    <div class="media-body">
                                        <h6 class="mt-2 mb-0">Kristen Beck</h6>
                                        <p class="stats">Away</p>
                                    </div>
                                    <div class="align-self-center">
                                        <div class="text-center mb-2">
                                            <span class="badge-primary">8</span>
                                        </div>
                                        <p class="meta-time">15 mins ago</p>
                                    </div>
                                </div>

                                <div class="media">
                                    <div class="profile-img online mr-3">
                                        <img src="dashboard/assets/img/120x120.jpg" class="img-fluid" alt="admin-profile">
                                    </div>
                                    <div class="media-body">
                                        <h6 class="mt-2 mb-0">Keith Foster</h6>
                                        <p class="stats">Available</p>
                                    </div>
                                    <div class="align-self-center">
                                        <p class="meta-time">35 mins ago</p>
                                    </div>
                                </div>

                            </div>
                        </div>

                        <div class="close-sidebar text-center">
                            <i class="flaticon-cancel-12 toggle-control-sidebar"></i>
                        </div>

                    </div>
                </div>

                <div id="settings-tab" class="tab-pane tab-3 fade">
                    <div class="settings">
                        <div class="admin-setting">

                            <div class="d-flex justify-content-between header">

                                <div class="media">
                                    <i class="flaticon-user-5 mr-3 align-self-center"></i>
                                    <div class="media-body">
                                        <h6 class="mt-2">Admin settings</h6>
                                    </div>
                                </div>

                                <div class="align-self-center">
                                    <p class="mb-0">See all</p>
                                </div>

                            </div>

                            <div class="mb-3 mt-5">
                                <div class="d-flex justify-content-between">
                                    <h6 class="mb-0 mt-1">Show notifications</h6>
                                    <label class="custom-control material-switch mb-4 mt-1 material-s-rounded material-primary">
                                        <input type="checkbox" class="material-switch-control-input" checked="">
                                        <span class="material-switch-control-indicator"></span>
                                    </label>
                                </div>
                            </div>

                            <div class="mb-3">
                                <div class="d-flex justify-content-between">
                                    <h6 class="mb-0 mt-1">Enable auto logout</h6>
                                    <label class="custom-control material-switch mb-4 mt-1 material-s-rounded material-primary">
                                        <input type="checkbox" class="material-switch-control-input" checked="">
                                        <span class="material-switch-control-indicator"></span>
                                    </label>
                                </div>
                            </div>

                            <div class="mb-3">
                                <div class="d-flex justify-content-between">
                                    <h6 class="mb-0 mt-1">Show recent activity</h6>
                                    <label class="custom-control material-switch mb-4 mt-1 material-s-rounded material-primary">
                                        <input type="checkbox" class="material-switch-control-input" checked="">
                                        <span class="material-switch-control-indicator"></span>
                                    </label>
                                </div>
                            </div>

                            <div class="mb-3">
                                <div class="d-flex justify-content-between">
                                    <h6 class="mb-0 mt-1">Chat history</h6>
                                    <label class="custom-control material-switch mb-4 mt-1 material-s-rounded material-primary">
                                        <input type="checkbox" class="material-switch-control-input" checked="">
                                        <span class="material-switch-control-indicator"></span>
                                    </label>
                                </div>
                            </div>

                            <div class="mb-3">
                                <div class="d-flex justify-content-between">
                                    <h6 class="mb-0 mt-1">Users activity</h6>
                                    <label class="custom-control material-switch mb-4 mt-1 material-s-rounded material-primary">
                                        <input type="checkbox" class="material-switch-control-input" checked="">
                                        <span class="material-switch-control-indicator"></span>
                                    </label>
                                </div>
                            </div>

                            <div class="mb-3">
                                <div class="d-flex justify-content-between">
                                    <h6 class="mb-0 mt-1">Orders history</h6>
                                    <label class="custom-control material-switch mb-4 mt-1 material-s-rounded material-primary">
                                        <input type="checkbox" class="material-switch-control-input" checked="">
                                        <span class="material-switch-control-indicator"></span>
                                    </label>
                                </div>
                            </div>

                            <div class="mb-3">
                                <div class="d-flex justify-content-between">
                                    <h6 class="mb-0 mt-1">Show task statistics</h6>
                                    <label class="custom-control material-switch mb-4 mt-1 material-s-rounded material-primary">
                                        <input type="checkbox" class="material-switch-control-input" checked="">
                                        <span class="material-switch-control-indicator"></span>
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="general-setting mt-5">

                            <div class="d-flex justify-content-between header mb-5">

                                <div class="media">
                                    <i class="flaticon-gear-5 mr-3 align-self-center"></i>
                                    <div class="media-body">
                                        <h6 class="mt-2">General Settings</h6>
                                    </div>
                                </div>

                            </div>

                            <div class="media mb-4 social-media-list">
                                <i class="flaticon-facebook-logo fb"></i>
                                <div class="media-body d-flex justify-content-around">
                                    <h6 class="mb-0 mt-2">Show notfications</h6>
                                    <label class="custom-control material-switch mb-4  mt-2 material-s-rounded material-primary">
                                        <input type="checkbox" class="material-switch-control-input" checked="">
                                        <span class="material-switch-control-indicator"></span>
                                    </label>
                                </div>
                            </div>

                            <div class="media mb-4 social-media-list">
                                <i class="flaticon-dribbble-bold dribbble"></i>
                                <div class="media-body d-flex justify-content-around">
                                    <h6 class="mb-0 mt-2">Show notfications</h6>
                                    <label class="custom-control material-switch mb-4  mt-2 material-s-rounded material-primary">
                                        <input type="checkbox" class="material-switch-control-input" checked="">
                                        <span class="material-switch-control-indicator"></span>
                                    </label>
                                </div>
                            </div>

                            <div class="media mb-4 social-media-list">
                                <i class="flaticon-linkedin-logo lin"></i>
                                <div class="media-body d-flex justify-content-around">
                                    <h6 class="mb-0 mt-2">Show notfications</h6>
                                    <label class="custom-control material-switch mb-4  mt-2 material-s-rounded material-primary">
                                        <input type="checkbox" class="material-switch-control-input" checked="">
                                        <span class="material-switch-control-indicator"></span>
                                    </label>
                                </div>
                            </div>

                            <div class="media mb-4 social-media-list">
                                <i class="flaticon-twitter-logo tweet"></i>
                                <div class="media-body d-flex justify-content-around">
                                    <h6 class="mb-0 mt-2">Show notfications</h6>
                                    <label class="custom-control material-switch mb-4  mt-2 material-s-rounded material-primary">
                                        <input type="checkbox" class="material-switch-control-input" checked="">
                                        <span class="material-switch-control-indicator"></span>
                                    </label>
                                </div>
                            </div>

                            <div class="media mb-4 social-media-list">
                                <i class="flaticon-behance-logo behance"></i>
                                <div class="media-body d-flex justify-content-around">
                                    <h6 class="mb-0 mt-2">Show notfications</h6>
                                    <label class="custom-control material-switch mb-4  mt-2 material-s-rounded material-primary">
                                        <input type="checkbox" class="material-switch-control-input" checked="">
                                        <span class="material-switch-control-indicator"></span>
                                    </label>
                                </div>
                            </div>

                            <div class="chk-settings mt-5">

                                <div class="media mb-4 ">
                                    <div class="media-body">
                                        <h6 class="media-heading mt-0 mb-3"><span class="media-title">Report panel usage</span>
                                        </h6>
                                        <p class="media-text">
                                            Show information on any malicious activity
                                        </p>
                                    </div>
                                    <div class="n-chk">
                                        <label class="new-control new-checkbox checkbox-secondary mr-1">
                                            <input type="checkbox" class="new-control-input" checked>
                                            <span class="new-control-indicator"></span><span class="invisible">C</span>
                                        </label>
                                    </div>
                                </div>

                                <div class="media mb-4 ">
                                    <div class="media-body">
                                        <h6 class="media-heading mt-0 mb-3"><span class="media-title">Allow mail redirect</span>
                                        </h6>
                                        <p class="media-text">
                                            Redirect mail through exchange server
                                        </p>
                                    </div>
                                    <div class="n-chk">
                                        <label class="new-control new-checkbox checkbox-secondary mr-1">
                                            <input type="checkbox" class="new-control-input">
                                            <span class="new-control-indicator"></span><span class="invisible">C</span>
                                        </label>
                                    </div>
                                </div>

                                <div class="media mb-4 ">
                                    <div class="media-body">
                                        <h6 class="media-heading mt-0 mb-3"><span class="media-title"> Show author name in posts</span>
                                        </h6>
                                        <p class="media-text">
                                            Allow the user to show his name in blog posts
                                        </p>
                                    </div>
                                    <div class="n-chk">
                                        <label class="new-control new-checkbox checkbox-secondary mr-1">
                                            <input type="checkbox" class="new-control-input" checked>
                                            <span class="new-control-indicator"></span><span class="invisible">C</span>
                                        </label>
                                    </div>
                                </div>

                                <div class="media mb-4 ">
                                    <div class="media-body">
                                        <h6 class="media-heading mt-0 mb-3"><span class="media-title"> Sync phone when connected to the PC</span>
                                        </h6>
                                        <p class="media-text">
                                            Connect smart phone automatically and sync with user profile
                                        </p>
                                    </div>
                                    <div class="n-chk">
                                        <label class="new-control new-checkbox checkbox-secondary mr-1">
                                            <input type="checkbox" class="new-control-input" checked>
                                            <span class="new-control-indicator"></span><span class="invisible">C</span>
                                        </label>
                                    </div>
                                </div>

                                <div class="media mb-4 ">
                                    <div class="media-body">
                                        <h6 class="media-heading mt-0 mb-3"><span class="media-title"> Show me as Online </span>
                                        </h6>
                                    </div>
                                    <div class="n-chk">
                                        <label class="new-control new-checkbox checkbox-secondary mr-1">
                                            <input type="checkbox" class="new-control-input" checked>
                                            <span class="new-control-indicator"></span><span class="invisible">C</span>
                                        </label>
                                    </div>
                                </div>

                            </div>

                            <div class="mt-5 delete-chat">

                                <div class="media mb-4">
                                    <div class="media-body">
                                        <h6 class="media-heading mt-0 mb-3"><span class="media-title"> Delete chat history</span>
                                        </h6>
                                    </div>
                                    <i class="del-chat flaticon-delete-2 mb-4"></i>

                                </div>

                            </div>

                            <div class="close-sidebar text-center">
                                <i class="flaticon-cancel-12 toggle-control-sidebar"></i>
                            </div>

                        </div>
                    </div>
                </div>
            </div>

        </div>
    </aside>
    <!--  END CONTROL SIDEBAR  -->

    <!-- BEGIN GLOBAL MANDATORY SCRIPTS -->
    <script src="dashboard/assets/js/libs/jquery-3.1.1.min.js"></script>
    <script src="dashboard/bootstrap/js/popper.min.js"></script>
    <script src="dashboard/bootstrap/js/bootstrap.min.js"></script>
    <script src=dashboards/scrollbar/jquery.mCustomScrollbar.concat.min.js"></script>
    <script src="dashboard/assets/js/app.js"></script>
    <script>
        $(document).ready(function() {
            App.init();
        });
    </script>
    <script src="dashboard/assets/js/custom.js"></script>
    <!-- END GLOBAL MANDATORY SCRIPTS -->

    <!-- BEGIN PAGE LEVEL PLUGINS/CUSTOM SCRIPTS -->
    <script src=dashboards/charts/chartist/chartist.js"></script>
    <script src=dashboards/maps/vector/jvector/jquery-jvectormap-2.0.3.min.js"></script>
    <script src=dashboards/maps/vector/jvector/worldmap_script/jquery-jvectormap-world-mill-en.js"></script>
    <script src=dashboards/calendar/pignose/moment.latest.min.js"></script>
    <script src=dashboards/calendar/pignose/pignose.calendar.js"></script>
    <script src=dashboards/progressbar/progressbar.min.js"></script>
    <script src="dashboard/assets/js/default-dashboard/default-custom.js"></script>
    <!-- BEGIN PAGE LEVEL PLUGINS/CUSTOM SCRIPTS -->
</body>

</html>