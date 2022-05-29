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
                            <h6 class="mb-1">Alan Green</h6>
                            <p class="mb-0">UI/UX Designer</p>
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
                <a href="javascript:void(0);" class="nav-link dropdown-toggle" id="language-dropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <img src="dashboard/assets/img/ca.png" alt="">
                </a>
                <div class="dropdown-menu position-absolute" aria-labelledby="language-dropdown">
                    <a class="dropdown-item d-flex" href="javascript:void(0);"><img src="dashboard/assets/img/de.png" class="flag-width mr-3" alt=""> <span class="align-self-center">&#xA0;German</span></a>
                    <a class="dropdown-item d-flex" href="javascript:void(0);"><img src="dashboard/assets/img/jp.png" class="flag-width mr-3" alt=""> <span class="align-self-center">&#xA0;Japanese</span></a>
                    <a class="dropdown-item d-flex" href="javascript:void(0);"><img src="dashboard/assets/img/fr.png" class="flag-width mr-3" alt=""> <span class="align-self-center">&#xA0;French</span></a>
                    <a class="dropdown-item d-flex" href="javascript:void(0);"><img src="dashboard/assets/img/ca.png" class="flag-width mr-3" alt=""> <span class="align-self-center">&#xA0;English</span></a>
                </div>
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
                            <h6 class="mb-1">Alan Green</h6>
                            <p class="mb-0">UI/UX Designer</p>
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

            <li class="nav-item dropdown message-dropdown ml-lg-4 mr-lg-4">
                <a href="javascript:void(0);" class="nav-link dropdown-toggle" id="message-dropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <span class="icon flaticon-mail-1"></span><span class="badge badge-primary">13</span>
                </a>
                <div class="dropdown-menu  position-absolute p-0" aria-labelledby="message-dropdown">
                    <div class="dropdown-item dropdown-header d-flex justify-content-between">
                        <p class="mb-0 align-self-center">You have 13 new messages</p>
                        <div class="">
                            <i class="flaticon-chat-bubble"></i>
                        </div>
                    </div>
                    <div class="dropdown-divider"></div>
                    <div class="message-scroll">
                        <div class="dropdown-item">
                            <div class="">
                                <div class="media">
                                    <div class="usr-img online mr-3">
                                        <img class="usr-img rounded-circle" src="dashboard/assets/img/90x90.jpg" alt="profile">
                                    </div>
                                    <div class="media-body">
                                        <div class="d-flex">
                                            <p class="meta-user-name mr-3">Kara Young</p>
                                            <p class="meta-time align-self-center mb-1">2 mins ago</p>
                                        </div>
                                        <p class="message-text mb-0 ">Simple and clean! Nice I'd like to </p>
                                        <a href="javascript:void(0);" class="see-more">See More</a>
                                    </div>
                                </div>
                                <div class="d-flex justify-content-between dropdown-action">
                                    <a href="javascript:void(0);" class="">View Details</a>
                                    <i class="flaticon-delete"></i>
                                </div>
                            </div>
                        </div>
                        <div class="dropdown-item">
                            <div class="">
                                <div class="media">
                                    <div class="usr-img online mr-3">
                                        <img class="usr-img rounded-circle" src="dashboard/assets/img/90x90.jpg" alt="profile">
                                    </div>
                                    <div class="media-body">
                                        <div class="d-flex">
                                            <p class="meta-user-name mr-3">Oscar Garner</p>
                                            <p class="meta-time align-self-center mb-1">5 mins ago</p>
                                        </div>
                                        <p class="message-text mb-0 ">Simple and clean! Nice I'd like to </p>
                                        <a href="javascript:void(0);" class="see-more">See More</a>
                                    </div>
                                </div>
                                <div class="d-flex justify-content-between dropdown-action">
                                    <a href="javascript:void(0);" class="">View Details</a>
                                    <i class="flaticon-delete"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="footer dropdown-item text-center">
                        <a class="btn btn-info my-3 btn-rounded" href="javascript:void(0);">More...</a>
                    </div>
                </div>
            </li>

            <li class="nav-item dropdown notification-dropdown ml-3 mr-lg-4">
                <a href="javascript:void(0);" class="nav-link dropdown-toggle" id="notification-dropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <span class="icon flaticon-bell-24"></span><span class="badge badge-success">15</span>
                </a>
                <div class="dropdown-menu position-absolute p-0" aria-labelledby="notification-dropdown">
                    <div class="dropdown-item dropdown-header d-flex justify-content-between">
                        <p class="mb-0 align-self-center">Notifications</p>
                        <div class="">
                            <i class="flaticon-gear-1"></i>
                        </div>
                    </div>
                    <div class="dropdown-divider"></div>
                    <div class="notification-scroll">
                        <div class="dropdown-item">
                            <div class="">
                                <div class="d-flex dropdown-action justify-content-between">
                                    <span class="badge badge-info mb-3">6 Request</span>
                                    <i class="flaticon-cancel-12"></i>
                                </div>
                                <p class="notification-text"><span class="meta-usrname">Kara Young</span>, <span class="meta-usrname">Xavier</span>, <span class="meta-usrname">Lila Perry</span> and <span class="meta-usrname">3 others</span> send a friend request.</p>
                                <p class="meta-time">6 mins ago</p>
                            </div>
                        </div>
                        <div class="dropdown-item">
                            <div class="">
                                <div class="d-flex dropdown-action justify-content-between">
                                    <span class="badge badge-primary mb-3">Invoice</span>
                                    <i class="flaticon-cancel-12"></i>
                                </div>
                                <p class="notification-text"> <span class="meta-usrname">Shaun</span>, <span class="meta-usrname">Amy Diaz</span> and <span class="meta-usrname">3 others</span> send a friend request.</p>
                                <p class="meta-time">10 mins ago</p>
                            </div>
                        </div>
                    </div>
                </div>
            </li>

            <li class="nav-item dropdown cs-toggle ml-3 mr-lg-4">
                <a href="#" class="nav-link toggle-control-sidebar suffle">
                    <span class="icon flaticon-log-3"></span>
                </a>
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

                            <div>
                                <i class="flaticon-down-arrow"></i>
                            </div>
                        </a>
                        <ul class="collapse submenu list-unstyled" id="dashboard" data-parent="#topAccordion">
                            <li>
                                <a href="#dashboards" data-toggle="collapse" aria-expanded="true" class="dropdown-toggle"> ADMIN <i class="flaticon-dot-three"></i> </a>
                                <ul class="collapse list-unstyled sub-submenu show" id="dashboards">
                                    <li class="active">
                                        <a href="index.html"> Default </a>
                                    </li>
                                    <li>
                                        <a href="ecommerce_dashboard.html"> Ecommerce </a>
                                    </li>
                                    <li>
                                        <a href="accounting_dashboard.html"> Accounting </a>
                                    </li>
                                    <li>
                                        <a href="analytics_dashboard.html"> Analytics </a>
                                    </li>
                                    <li>
                                        <a href="car_dashboard.html"> Car </a>
                                    </li>
                                    <li>
                                        <a href="classic_dashboard.html"> Classic </a>
                                    </li>
                                    <li>
                                        <a href="stock_market_dashboard.html"> Stock Market </a>
                                    </li>
                                    <li>
                                        <a href="cryptocurrency_dashboard.html">Cryptocurrency </a>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </li>

                    <li class="menu">
                        <a href="#uiAndComponents" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
                            <div class="">
                                <i class="flaticon-3d-cube"></i>
                                <span>UI & Components</span>
                            </div>
                            <div>
                                <i class="flaticon-down-arrow"></i>
                            </div>
                        </a>
                        <div class="collapse submenu list-unstyled" id="uiAndComponents" data-parent="#topAccordion">
                            <div class="row">
                                <div class="col-lg-4">
                                    <ul class="list-unstyled">
                                        <li>
                                            <a href="#ui-features" data-toggle="collapse" aria-expanded="true" class="dropdown-toggle"> UI KIT <i class="flaticon-dot-three"></i> </a>
                                            <ul class="collapse list-unstyled sub-submenu show" id="ui-features">
                                                <li>
                                                    <a href="ui_helper_classes.html"> Helper Classes </a>
                                                </li>
                                                <li>
                                                    <a href="ui_color_library.html"> Color Library </a>
                                                </li>
                                                <li>
                                                    <a href="ui_grid.html"> Grid System </a>
                                                </li>
                                                <li>
                                                    <a href="ui_typography.html"> Typography </a>
                                                </li>
                                                <li>
                                                    <a href="ui_shadows.html"> Shadow </a>
                                                </li>
                                                <li>
                                                    <a href="ui_miscellaneous.html"> Miscellaneous </a>
                                                </li>
                                                <li>
                                                    <a href="ui_pagination.html">Pagination</a>
                                                </li>
                                                <li>
                                                    <a href="ui_alert.html"> Alerts </a>
                                                </li>
                                                <li>
                                                    <a href="ui_tooltips_and_popovers.html"> Tooltips And Popovers </a>
                                                </li>
                                                <li>
                                                    <a href="ui_loader.html"> Loaders </a>
                                                </li>
                                                <li class="sub-sub-submenu-list">
                                                    <a href="#ui-buttons" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle"> Buttons <i class="flaticon-right-arrow"></i> </a>
                                                    <ul class="collapse list-unstyled sub-submenu" id="ui-buttons" data-parent="#ui-features">
                                                        <li>
                                                            <a href="ui_buttons.html"> Bootstrap </a>
                                                        </li>
                                                        <li>
                                                            <a href="ui_creative.html"> Creative </a>
                                                        </li>
                                                        <li>
                                                            <a href="ui_switches.html"> Switches </a>
                                                        </li>
                                                        <li>
                                                            <a href="ui_social_button.html"> Social </a>
                                                        </li>
                                                    </ul>
                                                </li>
                                                <li>
                                                    <a href="ui_sweetalert.html"> Sweet Alerts </a>
                                                </li>
                                                <li class="sub-sub-submenu-list">
                                                    <a href="#ui-font-icons" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle"> Font Icons <i class="flaticon-right-arrow"></i> </a>
                                                    <ul class="collapse list-unstyled sub-submenu" id="ui-font-icons" data-parent="#ui-features">
                                                        <li>
                                                            <a href="ui_flaticon_icon.html"> Flaticon </a>
                                                        </li>
                                                        <li>
                                                            <a href="ui_linea_icon.html"> Linea </a>
                                                        </li>
                                                        <li>
                                                            <a href="ui_themify_icon.html"> Themify </a>
                                                        </li>
                                                        <li>
                                                            <a href="ui_pixeden_icon.html"> Pixeden </a>
                                                        </li>
                                                        <li>
                                                            <a href="ui_fontawesome_icon.html"> Fontawesome </a>
                                                        </li>
                                                        <li>
                                                            <a href="ui_metro_icon.html"> Metro </a>
                                                        </li>
                                                        <li>
                                                            <a href="ui_weather_icon.html"> Weather </a>
                                                        </li>
                                                    </ul>
                                                </li>
                                                <li>
                                                    <a href="ui_tabs.html"> Tabs </a>
                                                </li>
                                                <li>
                                                    <a href="ui_accordion.html"> Accordions </a>
                                                </li>
                                                <li>
                                                    <a href="ui_modal.html"> Modals </a>
                                                </li>
                                                <li>
                                                    <a href="ui_sliders.html"> Range Sliders </a>
                                                </li>
                                                <li>
                                                    <a href="ui_timeline.html"> Timeline </a>
                                                </li>
                                                <li>
                                                    <a href="ui_tree.html"> Tree View </a>
                                                </li>
                                                <li class="sub-sub-submenu-list">
                                                    <a href="#ui-progress" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle"> Progress Bar <i class="flaticon-right-arrow"></i> </a>
                                                    <ul class="collapse list-unstyled sub-submenu" id="ui-progress" data-parent="#ui-features">
                                                        <li>
                                                            <a href="ui_bootstrap_progress_bar.html"> Bootstrap </a>
                                                        </li>
                                                        <li>
                                                            <a href="ui_material_progress_bar.html"> Custom </a>
                                                        </li>
                                                    </ul>
                                                </li>
                                                <li class="sub-sub-submenu-list">
                                                    <a href="#ui-notification" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle"> Notifications <i class="flaticon-right-arrow"></i> </a>
                                                    <ul class="collapse list-unstyled sub-submenu" id="ui-notification" data-parent="#ui-features">
                                                        <li>
                                                            <a href="ui_toastr.html"> Toastr </a>
                                                        </li>
                                                        <li>
                                                            <a href="ui_notification.html"> Creative </a>
                                                        </li>
                                                        <li>
                                                            <a href="ui_snackbar.html"> Snackbar </a>
                                                        </li>
                                                    </ul>
                                                </li>
                                                <li>
                                                    <a href="ui_session_timeout.html"> Session Timeout </a>
                                                </li>
                                                <li>
                                                    <a href="ui_media_object.html"> Media Object </a>
                                                </li>
                                                <li>
                                                    <a href="ui_list_group.html"> List Group </a>
                                                </li>
                                                <li>
                                                    <a href="ui_nestable_list.html"> Nested List </a>
                                                </li>
                                            </ul>
                                        </li>
                                    </ul>
                                </div>
                                <div class="col-lg-4">
                                    <ul class="list-unstyled">
                                        <li>
                                            <a href="#components" data-toggle="collapse" aria-expanded="true" class="dropdown-toggle"> COMPONENTS <i class="flaticon-dot-three"></i> </a>
                                            <ul class="collapse list-unstyled sub-submenu show" id="components">
                                                <li>
                                                    <a href="component_portlet.html"> Portlets </a>
                                                </li>
                                                <li>
                                                    <a href="component_keypad.html"> Keypad </a>
                                                </li>

                                                <li class="sub-sub-submenu-list">
                                                    <a href="#component-carousel" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle"> Carousel <i class="flaticon-right-arrow"></i> </a>
                                                    <ul class="collapse list-unstyled sub-submenu" id="component-carousel" data-parent="#components">
                                                        <li>
                                                            <a href="component_bootstrap_carousel.html">Bootstrap</a>
                                                        </li>
                                                        <li>
                                                            <a href="component_carousel.html">Metro</a>
                                                        </li>
                                                        <li>
                                                            <a href="component_sliders.html">Swiper</a>
                                                        </li>
                                                    </ul>
                                                </li>
                                                <li>
                                                    <a href="component_rating.html"> Rating </a>
                                                </li>
                                                <li>
                                                    <a href="component_blockui.html"> Block UI </a>
                                                </li>
                                                <li>
                                                    <a href="component_popup.html"> Popup </a>
                                                </li>
                                                <li>
                                                    <a href="component_scroll_bars_basic.html"> Scrollbar </a>
                                                </li>
                                                <li>
                                                    <a href="component_todo_list.html"> Todo List </a>
                                                </li>
                                                <li>
                                                    <a href="component_scrollspy.html"> Scrollspy </a>
                                                </li>
                                                <li>
                                                    <a href="component_countdown.html"> Countdown </a>
                                                </li>

                                                <li>
                                                    <a href="component_counter.html"> Counter </a>
                                                </li>
                                                <li>
                                                    <a href="component_datetime_picker.html"> Date &amp; Time Picker </a>
                                                </li>
                                                <li>
                                                    <a href="component_lightbox.html"> LightBox </a>
                                                </li>
                                                <li>
                                                    <a href="component_color_picker.html"> Color Picker </a>
                                                </li>
                                                <li class="sub-sub-submenu-list">
                                                    <a href="#component-media" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle"> Media <i class="flaticon-right-arrow"></i> </a>
                                                    <ul class="collapse list-unstyled sub-submenu" id="component-media" data-parent="#components">
                                                        <li>
                                                            <a href="component_video_player.html"> Video Player </a>
                                                        </li>
                                                        <li>
                                                            <a href="component_audio_player.html"> Audio Player </a>
                                                        </li>
                                                    </ul>
                                                </li>
                                                <li>
                                                    <a href="component_clipboard.html"> Clipboard </a>
                                                </li>
                                                <li>
                                                    <a href="component_typeahead.html"> Typeahead </a>
                                                </li>
                                                <li class="sub-sub-submenu-list">
                                                    <a href="#component-search" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle"> Search <i class="flaticon-right-arrow"></i> </a>
                                                    <ul class="collapse list-unstyled sub-submenu" id="component-search" data-parent="#components">
                                                        <li>
                                                            <a href="component_search_multiple.html"> Multiple </a>
                                                        </li>
                                                        <li>
                                                            <a href="component_search_web.html"> Web </a>
                                                        </li>
                                                    </ul>
                                                </li>
                                                <li class="sub-sub-submenu-list">
                                                    <a href="#component-animation" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle"> Animations <i class="flaticon-right-arrow"></i> </a>
                                                    <ul class="collapse list-unstyled sub-submenu" id="component-animation" data-parent="#components">
                                                        <li>
                                                            <a href="component_animation_buttons.html"> Buttons </a>
                                                        </li>
                                                        <li>
                                                            <a href="component_animation_css.html"> CSS </a>
                                                        </li>
                                                    </ul>
                                                </li>
                                                <li class="sub-sub-submenu-list">
                                                    <a href="#component-img-crop" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle"> Image Cropping <i class="flaticon-right-arrow"></i> </a>
                                                    <ul class="collapse list-unstyled sub-submenu" id="component-img-crop" data-parent="#components">
                                                        <li>
                                                            <a href="component_image_cropping_basic.html"> Basic </a>
                                                        </li>
                                                        <li>
                                                            <a href="component_image_cropping_advanced.html"> Advanced </a>
                                                        </li>
                                                    </ul>
                                                </li>
                                            </ul>
                                        </li>
                                    </ul>
                                </div>
                                <div class="col-lg-4">
                                    <ul class="list-unstyled">
                                        <li>
                                            <a href="#element" data-toggle="collapse" aria-expanded="true" class="dropdown-toggle"> ELEMENTS <i class="flaticon-dot-three"></i> </a>
                                            <ul class="collapse list-unstyled sub-submenu show" id="element">
                                                <li>
                                                    <a href="element_steps.html"> Steps </a>
                                                </li>
                                                <li>
                                                    <a href="element_list.html"> List </a>
                                                </li>
                                                <li>
                                                    <a href="element_ribbon.html"> Ribbons </a>
                                                </li>
                                                <li>
                                                    <a href="element_overlays.html"> Overlays </a>
                                                </li>
                                                <li>
                                                    <a href="element_weatherapp.html"> Weather Apps </a>
                                                </li>
                                                <li>
                                                    <a href="element_testimonial.html"> Testimonials </a>
                                                </li>
                                                <li>
                                                    <a href="element_team.html"> Team </a>
                                                </li>
                                                <li>
                                                    <a href="element_contacts.html"> Contacts </a>
                                                </li>
                                                <li>
                                                    <a href="element_blog.html"> Blog Elements </a>
                                                </li>
                                                <li>
                                                    <a href="element_pricing_table.html"> Pricing Tables </a>
                                                </li>
                                            </ul>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </li>

                    <li class="menu">
                        <a href="#tables-forms" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
                            <div class="">
                                <i class="flaticon-table"></i>
                                <span>Tables & Forms</span>
                            </div>
                            <div>
                                <i class="flaticon-down-arrow"></i>
                            </div>
                        </a>
                        <div class="collapse submenu list-unstyled" id="tables-forms" data-parent="#topAccordion">
                            <div class="row">
                                <div class="col-lg-4">
                                    <ul class="list-unstyled">
                                        <li>
                                            <a href="#tables" data-toggle="collapse" aria-expanded="true" class="dropdown-toggle"> TABLES <i class="flaticon-dot-three"></i> </a>
                                            <ul class="collapse list-unstyled sub-submenu show" id="tables">
                                                <li>
                                                    <a href="table_basic.html"> Basic </a>
                                                </li>
                                                <li>
                                                    <a href="table_tablesaw.html"> Tablesaw</a>
                                                </li>
                                                <li>
                                                    <a href="table_sticky_table_header.html"> Sticky Headers</a>
                                                </li>
                                                <li class="sub-sub-submenu-list">
                                                    <a href="#tables-editable" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle"> Editable <i class="flaticon-right-arrow"></i> </a>
                                                    <ul class="collapse list-unstyled sub-submenu" id="tables-editable" data-parent="#tables">
                                                        <li>
                                                            <a href="table_jq_spreadsheet.html"> Spreadsheet </a>
                                                        </li>
                                                        <li>
                                                            <a href="table_jquery_tabledit.html"> TableEdit </a>
                                                        </li>
                                                        <li>
                                                            <a href="table_editablegrid.html"> Editable Grid </a>
                                                        </li>
                                                    </ul>
                                                </li>
                                                <li class="sub-sub-submenu-list">
                                                    <a href="#tables-data-tables" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle"> DataTables <i class="flaticon-right-arrow"></i> </a>
                                                    <ul class="collapse list-unstyled sub-submenu" id="tables-data-tables" data-parent="#tables">
                                                        <li>
                                                            <a href="table_dt_zero_configuration.html"> Basic </a>
                                                        </li>
                                                        <li>
                                                            <a href="table_dt_ordering_sorting.html"> Order Sorting </a>
                                                        </li>
                                                        <li>
                                                            <a href="table_dt_multi-column_ordering.html"> Multi-Column </a>
                                                        </li>
                                                        <li>
                                                            <a href="table_dt_multiple_tables.html"> Multiple Tables</a>
                                                        </li>
                                                        <li>
                                                            <a href="table_dt_alternative_pagination.html"> Alternative Pagination</a>
                                                        </li>
                                                        <li>
                                                            <a href="table_dt_miscellaneous.html"> Miscellaneous </a>
                                                        </li>
                                                        <li>
                                                            <a href="table_dt_custom.html"> Custom </a>
                                                        </li>
                                                        <li>
                                                            <a href="table_dt_scrollable.html"> Scrollable </a>
                                                        </li>
                                                        <li>
                                                            <a href="table_dt_range_search.html"> Range Search </a>
                                                        </li>
                                                        <li>
                                                            <a href="table_dt_html5.html"> HTML5 Export </a>
                                                        </li>
                                                        <li>
                                                            <a href="table_dt_live_dom_ordering.html"> Live DOM ordering </a>
                                                        </li>

                                                    </ul>
                                                </li>
                                            </ul>
                                        </li>
                                    </ul>
                                </div>
                                <div class="col-lg-4">
                                    <ul class="list-unstyled">
                                        <li>
                                            <a href="#forms" data-toggle="collapse" aria-expanded="true" class="dropdown-toggle"> FORM <i class="flaticon-dot-three"></i> </a>
                                            <ul class="collapse list-unstyled sub-submenu show" id="forms">
                                                <li class="sub-sub-submenu-list">
                                                    <a href="#forms-bootstrap" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle"> Bootstrap <i class="flaticon-right-arrow"></i> </a>
                                                    <ul class="collapse list-unstyled sub-submenu" id="forms-bootstrap" data-parent="#forms">
                                                        <li>
                                                            <a href="form_bootstrap_basic.html"> Basic </a>
                                                        </li>
                                                        <li>
                                                            <a href="form_bootstrap_rounded.html"> Rounded </a>
                                                        </li>
                                                    </ul>
                                                </li>
                                                <li class="sub-sub-submenu-list">
                                                    <a href="#forms-input-group" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle"> Input Group <i class="flaticon-right-arrow"></i> </a>
                                                    <ul class="collapse list-unstyled sub-submenu" id="forms-input-group" data-parent="#forms">
                                                        <li>
                                                            <a href="form_input_group_basic.html"> Basic </a>
                                                        </li>
                                                        <li>
                                                            <a href="form_input_group_rounded.html"> Rounded </a>
                                                        </li>
                                                    </ul>
                                                </li>
                                                <li>
                                                    <a href="form_bootstrap_material.html"> Material </a>
                                                </li>
                                                <li class="sub-sub-submenu-list">
                                                    <a href="#forms-layout" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle"> Layouts <i class="flaticon-right-arrow"></i> </a>
                                                    <ul class="collapse list-unstyled sub-submenu" id="forms-layout" data-parent="#forms">
                                                        <li>
                                                            <a href="form_layouts.html"> Basic </a>
                                                        </li>
                                                        <li>
                                                            <a href="form_layouts_rounded.html"> Rounded </a>
                                                        </li>
                                                    </ul>
                                                </li>
                                                <li class="sub-sub-submenu-list">
                                                    <a href="#forms-validation" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle"> Validation <i class="flaticon-right-arrow"></i> </a>
                                                    <ul class="collapse list-unstyled sub-submenu" id="forms-validation" data-parent="#forms">
                                                        <li>
                                                            <a href="form_validation.html"> Bootstrap </a>
                                                        </li>
                                                        <li>
                                                            <a href="form_jqvalidation.html"> jQuery </a>
                                                        </li>
                                                        <li>
                                                            <a href="form_validation_material.html"> Custom </a>
                                                        </li>
                                                    </ul>
                                                </li>
                                                <li>
                                                    <a href="form_input_mask.html"> Input Mask </a>
                                                </li>
                                                <li>
                                                    <a href="form_bootstrap_select.html"> Bootstrap Select </a>
                                                </li>
                                                <li>
                                                    <a href="form_select2.html"> Select2 </a>
                                                </li>
                                                <li>
                                                    <a href="form_bootstrap_touchspin.html"> TouchSpin </a>
                                                </li>
                                                <li>
                                                    <a href="form_multiselect.html"> Multi Select </a>
                                                </li>
                                                <li>
                                                    <a href="form_maxlength.html"> Maxlength </a>
                                                </li>
                                                <li>
                                                    <a href="form_repeater.html"> Repeater </a>
                                                </li>
                                                <li>
                                                    <a href="form_checkbox_radio.html"> Checkbox and Radio </a>
                                                </li>

                                                <li class="sub-sub-submenu-list">
                                                    <a href="#forms-wizard" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle"> Wizards <i class="flaticon-right-arrow"></i> </a>
                                                    <ul class="collapse list-unstyled sub-submenu" id="forms-wizard" data-parent="#forms">
                                                        <li>
                                                            <a href="form_bs_wizard.html"> Bootstrap </a>
                                                        </li>
                                                        <li>
                                                            <a href="form_wizard.html"> jQuery Steps </a>
                                                        </li>
                                                    </ul>
                                                </li>

                                                <li>
                                                    <a href="form_fileupload.html"> File Upload </a>
                                                </li>
                                            </ul>
                                        </li>
                                    </ul>
                                </div>
                                <div class="col-lg-4">
                                    <ul class="list-unstyled">
                                        <li>
                                            <a href="#editors" data-toggle="collapse" aria-expanded="true" class="dropdown-toggle"> EDITORS <i class="flaticon-dot-three"></i> </a>
                                            <ul class="collapse list-unstyled sub-submenu show" id="editors">
                                                <li>
                                                    <a href="editor_tinymce.html"> Tinymce </a>
                                                </li>
                                                <li>
                                                    <a href="editor_quill.html"> Quill </a>
                                                </li>
                                                <li>
                                                    <a href="editor_markdown.html"> Markdown </a>
                                                </li>
                                                <li>
                                                    <a href="editor_contenttools.html"> ContentTools </a>
                                                </li>
                                                <li>
                                                    <a href="editor_summernote.html"> Summernote </a>
                                                </li>
                                            </ul>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </li>

                    <li class="menu">
                        <a href="#pages" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
                            <div class="">
                                <i class="flaticon-copy"></i>
                                <span>Pages</span>
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
                                            <a href="#ecommerce" data-toggle="collapse" aria-expanded="true" class="dropdown-toggle"> ECOMMERCE <i class="flaticon-dot-three"></i> </a>
                                            <ul class="collapse list-unstyled sub-submenu show" id="ecommerce">
                                                <li>
                                                    <a href="ecommerce_orders.html"> Orders </a>
                                                </li>
                                                <li>
                                                    <a href="ecommerce_product.html"> Products </a>
                                                </li>
                                                <li>
                                                    <a href="ecommerce_product_catalog.html"> Product Catalog </a>
                                                </li>
                                                <li class="sub-sub-submenu-list">
                                                    <a href="#product-details" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle" data-parent="#ecommerce"> Product Details <i class="flaticon-right-arrow"></i> </a>
                                                    <ul class="collapse list-unstyled sub-submenu" id="product-details">
                                                        <li>
                                                            <a href="ecommerce_product_details_1.html"> Product Details 1 </a>
                                                        </li>
                                                        <li>
                                                            <a href="ecommerce_product_details_2.html"> Product Details 2 </a>
                                                        </li>
                                                    </ul>
                                                </li>
                                                <li>
                                                    <a href="ecommerce_addedit_product.html"> Add/Edit Products </a>
                                                </li>
                                                <li>
                                                    <a href="ecommerce_addedit_categories.html"> Add/Edit Categories </a>
                                                </li>
                                                <li>
                                                    <a href="ecommerce_view_cart.html"> View Cart </a>
                                                </li>
                                                <li>
                                                    <a href="ecommerce_view_payments.html"> View Payments </a>
                                                </li>
                                                <li>
                                                    <a href="ecommerce_view_customers.html"> View Customers </a>
                                                </li>
                                                <li>
                                                    <a href="ecommerce_checkout.html"> Checkout </a>
                                                </li>
                                                <li>
                                                    <a href="ecommerce_invoices.html"> Invoice </a>
                                                </li>
                                                <li>
                                                    <a href="ecommerce_shipments.html"> Shipments </a>
                                                </li>
                                                <li>
                                                    <a href="ecommerce_products_cart.html"> Products in Cart </a>
                                                </li>
                                                <li>
                                                    <a href="ecommerce_coupons.html"> Coupons </a>
                                                </li>
                                                <li>
                                                    <a href="ecommerce_low_stock.html"> Low Stock </a>
                                                </li>
                                                <li>
                                                    <a href="ecommerce_best_sellers.html"> Best Sellers </a>
                                                </li>
                                                <li>
                                                    <a href="ecommerce_refunds.html"> Refunds </a>
                                                </li>
                                                <li>
                                                    <a href="ecommerce_search_terms.html"> Search Terms </a>
                                                </li>
                                                <li>
                                                    <a href="ecommerce_newsletters.html"> Newsletters </a>
                                                </li>
                                                <li>
                                                    <a href="ecommerce_wizards.html"> Payment Wizard </a>
                                                </li>
                                                <li>
                                                    <a href="ecommerce_reviews.html"> Reviews </a>
                                                </li>
                                            </ul>
                                        </li>
                                    </ul>
                                </div>
                                <div class="col-lg-4">
                                    <ul class="list-unstyled">
                                        <li>
                                            <a href="#page" data-toggle="collapse" aria-expanded="true" class="dropdown-toggle"> PAGES <i class="flaticon-dot-three"></i> </a>
                                            <ul class="collapse list-unstyled sub-submenu show" id="page">
                                                <li>
                                                    <a href="pages_blank_page.html"> Blank Page</a>
                                                </li>
                                                <li>
                                                    <a href="pages_helpdesk.html"> Helpdesk </a>
                                                </li>
                                                <li>
                                                    <a href="pages_contact_us.html"> Contact Form </a>
                                                </li>
                                                <li>
                                                    <a href="pages_faq.html"> FAQ </a>
                                                </li>
                                                <li>
                                                    <a href="pages_blog.html"> Blog </a>
                                                </li>
                                                <li>
                                                    <a href="pages_privacy.html"> Privacy Policy </a>
                                                </li>
                                                <li>
                                                    <a href="pages_cookie_consent.html"> Cookie Consent </a>
                                                </li>
                                                <li>
                                                    <a href="pages_landing_page.html" target="_blank"> Landing Page </a>
                                                </li>
                                                <li>
                                                    <a href="pages_coming_soon.html"> Coming Soon </a>
                                                </li>

                                                <li class="sub-sub-submenu-list">
                                                    <a href="#pages-error" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle"> Error <i class="flaticon-right-arrow"></i> </a>
                                                    <ul class="collapse list-unstyled sub-submenu" id="pages-error" data-parent="#pages">
                                                        <li>
                                                            <a href="pages_error404.html"> 404 1 </a>
                                                        </li>
                                                        <li>
                                                            <a href="pages_error404-2.html"> 404 2 </a>
                                                        </li>
                                                        <li>
                                                            <a href="pages_error500.html"> 500 1 </a>
                                                        </li>
                                                        <li>
                                                            <a href="pages_error500-2.html"> 500 2 </a>
                                                        </li>
                                                        <li>
                                                            <a href="pages_error503.html"> 503 1 </a>
                                                        </li>
                                                        <li>
                                                            <a href="pages_error503-2.html"> 503 2 </a>
                                                        </li>
                                                        <li>
                                                            <a href="pages_maintenence.html"> Maintanence </a>
                                                        </li>
                                                    </ul>
                                                </li>
                                            </ul>
                                        </li>
                                    </ul>
                                </div>
                                <div class="col-lg-4">
                                    <ul class="list-unstyled">
                                        <li>
                                            <a href="#users" data-toggle="collapse" aria-expanded="true" class="dropdown-toggle"> USERS <i class="flaticon-dot-three"></i> </a>
                                            <ul class="collapse list-unstyled sub-submenu show" id="users">
                                                <li>
                                                    <a href="user_profile.html"> Profile </a>
                                                </li>
                                                <li>
                                                    <a href="user_account_setting.html"> Account Settings </a>
                                                </li>
                                                <li class="sub-sub-submenu-list">
                                                    <a href="#user-login" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle"> Login <i class="flaticon-right-arrow"></i> </a>
                                                    <ul class="collapse list-unstyled sub-submenu" id="user-login" data-parent="#users">
                                                        <li>
                                                            <a href="user_login_1.html"> Login 1 </a>
                                                        </li>
                                                        <li>
                                                            <a href="user_login_2.html"> Login 2 </a>
                                                        </li>
                                                        <li>
                                                            <a href="user_login_3.html"> Login 3 </a>
                                                        </li>
                                                    </ul>
                                                </li>
                                                <li class="sub-sub-submenu-list">
                                                    <a href="#user-register" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle"> Register <i class="flaticon-right-arrow"></i> </a>
                                                    <ul class="collapse list-unstyled sub-submenu" id="user-register" data-parent="#users">
                                                        <li>
                                                            <a href="user_register_1.html"> Register 1 </a>
                                                        </li>
                                                        <li>
                                                            <a href="user_register_2.html"> Register 2 </a>
                                                        </li>
                                                        <li>
                                                            <a href="user_register_3.html"> Register 3 </a>
                                                        </li>
                                                    </ul>
                                                </li>
                                                <li class="sub-sub-submenu-list">
                                                    <a href="#user-passRecovery" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle"> Password Recovery <i class="flaticon-right-arrow"></i> </a>
                                                    <ul class="collapse list-unstyled sub-submenu" id="user-passRecovery" data-parent="#users">
                                                        <li>
                                                            <a href="user_pass_recovery_1.html"> Password Recovery 1 </a>
                                                        </li>
                                                        <li>
                                                            <a href="user_pass_recovery_2.html"> Password Recovery 2 </a>
                                                        </li>
                                                        <li>
                                                            <a href="user_pass_recovery_3.html"> Password Recovery 3 </a>
                                                        </li>
                                                    </ul>
                                                </li>
                                                <li class="sub-sub-submenu-list">
                                                    <a href="#user-lockscreen" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle"> Lockscreen <i class="flaticon-right-arrow"></i> </a>
                                                    <ul class="collapse list-unstyled sub-submenu" id="user-lockscreen" data-parent="#users">
                                                        <li>
                                                            <a href="user_lockscreen_1.html"> Lockscreen 1 </a>
                                                        </li>
                                                        <li>
                                                            <a href="user_lockscreen_2.html"> Lockscreen 2 </a>
                                                        </li>
                                                        <li>
                                                            <a href="user_lockscreen_3.html"> Lockscreen 3 </a>
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

                    <li class="menu">
                        <a href="#more" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
                            <div class="">
                                <i class="flaticon-plus"></i>
                                <span class="d-lg-none">More</span>
                            </div>
                            <div class="d-lg-none">
                                <i class="flaticon-down-arrow"></i>
                            </div>
                        </a>
                        <div class="collapse submenu list-unstyled" id="more" data-parent="#topAccordion">
                            <div class="row">
                                <div class="col-lg-3">
                                    <ul class="list-unstyled">
                                        <li>
                                            <a href="#modules" data-toggle="collapse" aria-expanded="true" class="dropdown-toggle"> MODULES <i class="flaticon-dot-three"></i> </a>
                                            <ul class="collapse list-unstyled sub-submenu show" id="modules">
                                                <li>
                                                    <a href="modules_widgets.html"> Widgets </a>
                                                </li>
                                                <li>
                                                    <a href="modules_table_and_event.html"> Tables &amp; Events </a>
                                                </li>
                                                <li>
                                                    <a href="modules_charts_and_maps.html"> Charts &amp; Maps </a>
                                                </li>
                                                <li>
                                                    <a href="modules_weather_and_calendar.html"> Weather &amp; Calendar </a>
                                                </li>
                                                <li>
                                                    <a href="modules_cards.html"> Cards </a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li>
                                            <a href="#dragndrop" data-toggle="collapse" aria-expanded="true" class="dropdown-toggle"> DRAG AND DROP <i class="flaticon-dot-three"></i> </a>
                                            <ul class="collapse list-unstyled sub-submenu show" id="dragndrop">
                                                <li>
                                                    <a href="dragndrop_gridstack.html"> Grid Stack</a>
                                                </li>
                                                <li>
                                                    <a href="dragndrop_dragula.html"> Dragula</a>
                                                </li>
                                                <li class="sub-sub-submenu-list">
                                                    <a href="#dragndrop-jqueryui" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle"> jQuery UI <i class="flaticon-right-arrow"></i> </a>
                                                    <ul class="collapse list-unstyled sub-submenu" id="dragndrop-jqueryui" data-parent="#dragndrop">
                                                        <li>
                                                            <a href="dragndrop_ui_product_cart.html"> Shopping Cart </a>
                                                        </li>
                                                        <li>
                                                            <a href="dragndrop_scrumboard.html"> Scrum Task Board</a>
                                                        </li>
                                                        <li>
                                                            <a href="dragndrop_scroll_bars.html"> Scrollbar</a>
                                                        </li>
                                                    </ul>
                                                </li>
                                            </ul>
                                        </li>
                                    </ul>
                                </div>
                                <div class="col-lg-3">
                                    <ul class="list-unstyled">
                                        <li>
                                            <a href="#charts" data-toggle="collapse" aria-expanded="true" class="dropdown-toggle"> CHARTS <i class="flaticon-dot-three"></i> </a>
                                            <ul class="collapse list-unstyled sub-submenu show" id="charts">
                                                <li class="sub-sub-submenu-list">
                                                    <a href="#chart-amcharts" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle"> amCharts <i class="flaticon-right-arrow"></i> </a>
                                                    <ul class="collapse list-unstyled sub-submenu" id="chart-amcharts" data-parent="#charts">
                                                        <li>
                                                            <a href="am_column_and_barchart.html"> Column &amp; Bar </a>
                                                        </li>
                                                        <li>
                                                            <a href="am_line_and_areachart.html"> Line &amp; Area </a>
                                                        </li>
                                                        <li>
                                                            <a href="am_pie_and_donutchart.html"> Pie &amp; Donut </a>
                                                        </li>
                                                        <li>
                                                            <a href="am_gauge_and_otherchart.html"> Gauges &amp; Other </a>
                                                        </li>
                                                    </ul>
                                                </li>
                                                <li class="sub-sub-submenu-list">
                                                    <a href="#chart-c3chart" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle"> C3 <i class="flaticon-right-arrow"></i> </a>
                                                    <ul class="collapse list-unstyled sub-submenu" id="chart-c3chart" data-parent="#charts">
                                                        <li>
                                                            <a href="charts_c3_chart.html"> Simple</a>
                                                        </li>
                                                        <li>
                                                            <a href="charts_c3_api.html"> Api </a>
                                                        </li>
                                                    </ul>
                                                </li>
                                                <li>
                                                    <a href="charts_cssplot.html"> CSS Plot </a>
                                                </li>
                                                <li>
                                                    <a href="charts_morris.html"> Morris </a>
                                                </li>
                                                <li>
                                                    <a href="charts_flowchart.html"> Flowcharts </a>
                                                </li>
                                                <li>
                                                    <a href="charts_jQuery_sparklines.html"> jQuery Sparklines </a>
                                                </li>
                                                <li class="sub-sub-submenu-list">
                                                    <a href="#chart-echart" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle"> eCharts <i class="flaticon-right-arrow"></i> </a>
                                                    <ul class="collapse list-unstyled sub-submenu" id="chart-echart" data-parent="#charts">
                                                        <li>
                                                            <a href="charts_echart_basic.html"> Basic </a>
                                                        </li>
                                                        <li>
                                                            <a href="charts_echart_candlestick.html"> Candlestick </a>
                                                        </li>
                                                        <li>
                                                            <a href="charts_echart_funnel_radar.html"> Funnel & Radar </a>
                                                        </li>
                                                        <li>
                                                            <a href="charts_echart_scatters.html"> Scatter </a>
                                                        </li>
                                                    </ul>
                                                </li>
                                                <li class="sub-sub-submenu-list">
                                                    <a href="#chart-chartist" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle"> Chartist <i class="flaticon-right-arrow"></i> </a>
                                                    <ul class="collapse list-unstyled sub-submenu" id="chart-chartist" data-parent="#charts">
                                                        <li>
                                                            <a href="charts_chartist_bar.html"> Bar </a>
                                                        </li>
                                                        <li>
                                                            <a href="charts_chartist_line.html"> Line &amp; Area </a>
                                                        </li>
                                                        <li>
                                                            <a href="charts_chartist_pie.html"> Pie </a>
                                                        </li>
                                                    </ul>
                                                </li>
                                                <li>
                                                    <a href="charts_google.html"> Google </a>
                                                </li>
                                            </ul>
                                        </li>
                                    </ul>
                                </div>
                                <div class="col-lg-3">
                                    <ul class="list-unstyled">
                                        <li>
                                            <a href="#maps" data-toggle="collapse" aria-expanded="true" class="dropdown-toggle"> MAPS <i class="flaticon-dot-three"></i> </a>
                                            <ul class="collapse list-unstyled sub-submenu show" id="maps">
                                                <li class="sub-sub-submenu-list">
                                                    <a href="#map-googleMaps" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle"> Google <i class="flaticon-right-arrow"></i> </a>
                                                    <ul class="collapse list-unstyled sub-submenu" id="map-googleMaps" data-parent="#maps">
                                                        <li>
                                                            <a href="map_google_basic.html"> Basic </a>
                                                        </li>
                                                        <li>
                                                            <a href="map_google_event.html"> Event </a>
                                                        </li>
                                                        <li>
                                                            <a href="map_google_controls_interaction.html"> Controls and Interaction </a>
                                                        </li>
                                                        <li>
                                                            <a href="map_google_styles.html"> Styles </a>
                                                        </li>
                                                        <li>
                                                            <a href="map_google_other.html"> Other </a>
                                                        </li>
                                                    </ul>
                                                </li>
                                                <li class="sub-sub-submenu-list">
                                                    <a href="#map-jqMapael" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle"> jquery Mapael <i class="flaticon-right-arrow"></i> </a>
                                                    <ul class="collapse list-unstyled sub-submenu" id="map-jqMapael" data-parent="#maps">
                                                        <li>
                                                            <a href="map_jquerymapael_basic.html"> Basic </a>
                                                        </li>
                                                        <li>
                                                            <a href="map_jquerymapael_advanced.html"> Advanced </a>
                                                        </li>
                                                    </ul>
                                                </li>
                                                <li>
                                                    <a href="map_jhere.html"> jhere </a>
                                                </li>
                                                <li>
                                                    <a href="map_open_layers.html"> OpenLayers </a>
                                                </li>
                                                <li class="sub-sub-submenu-list">
                                                    <a href="#map-vMaps" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle"> Vector Maps <i class="flaticon-right-arrow"></i> </a>
                                                    <ul class="collapse list-unstyled sub-submenu" id="map-vMaps" data-parent="#maps">
                                                        <li>
                                                            <a href="map_amvector.html"> amVector</a>
                                                        </li>
                                                        <li>
                                                            <a href="map_jvector.html"> jVector</a>
                                                        </li>
                                                    </ul>
                                                </li>
                                            </ul>
                                        </li>
                                    </ul>
                                </div>
                                <div class="col-lg-3">
                                    <ul class="list-unstyled">
                                        <li>
                                            <a href="#apps" data-toggle="collapse" aria-expanded="true" class="dropdown-toggle"> APPS <i class="flaticon-dot-three"></i> </a>
                                            <ul class="collapse list-unstyled sub-submenu show" id="apps">
                                                <li>
                                                    <a href="apps_chat.html"> Chat </a>
                                                </li>
                                                <li>
                                                    <a href="apps_mailbox.html"> Mailbox </a>
                                                </li>
                                                <li>
                                                    <a href="apps_mailbox_with_chat.html"> Mailbox With Chat </a>
                                                </li>
                                                <li>
                                                    <a href="apps_newsletter.html"> Newsletter </a>
                                                </li>
                                                <li>
                                                    <a href="apps_scheduler.html"> Scheduler </a>
                                                </li>
                                                <li class="sub-sub-submenu-list">
                                                    <a href="#apps-calendars" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle"> Calendar <i class="flaticon-right-arrow"></i> </a>
                                                    <ul class="collapse list-unstyled sub-submenu" id="apps-calendars" data-parent="#apps-calendars">
                                                        <li>
                                                            <a href="apps_basic_calendar.html"> Basic </a>
                                                        </li>
                                                        <li>
                                                            <a href="apps_full_calendar.html"> Full Calendar </a>
                                                        </li>
                                                        <li>
                                                            <a href="apps_drag_n_drop_calendar.html"> Drag n Drop </a>
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

                <div class="row layout-spacing ">

                    <div class="col-xl-3 mb-xl-0 col-lg-6 mb-4 col-md-6 col-sm-6">
                        <div class="widget-content-area  data-widgets br-4">
                            <div class="widget  t-sales-widget">
                                <div class="media">
                                    <div class="icon ml-2">
                                        <i class="flaticon-line-chart"></i>
                                    </div>
                                    <div class="media-body text-right">
                                        <p class="widget-text mb-0">Sales</p>
                                        <p class="widget-numeric-value">98,225</p>
                                    </div>
                                </div>
                                <p class="widget-total-stats mt-2">94% New Sales</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-xl-3 mb-xl-0 col-lg-6 mb-4 col-md-6 col-sm-6">
                        <div class="widget-content-area  data-widgets br-4">
                            <div class="widget  t-order-widget">
                                <div class="media">
                                    <div class="icon ml-2">
                                        <i class="flaticon-cart-bag"></i>
                                    </div>
                                    <div class="media-body text-right">
                                        <p class="widget-text mb-0">Orders</p>
                                        <p class="widget-numeric-value">24,017</p>
                                    </div>
                                </div>
                                <p class="widget-total-stats mt-2">552 New Orders</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6 mb-sm-0 mb-4">
                        <div class="widget-content-area  data-widgets br-4">
                            <div class="widget  t-customer-widget">
                                <div class="media">
                                    <div class="icon ml-2">
                                        <i class="flaticon-user-11"></i>
                                    </div>
                                    <div class="media-body text-right">
                                        <p class="widget-text mb-0">Customers</p>
                                        <p class="widget-numeric-value">92,251</p>
                                    </div>
                                </div>
                                <p class="widget-total-stats mt-2">390 New Customers</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6">

                        <div class="widget-content-area  data-widgets br-4">
                            <div class="widget  t-income-widget">
                                <div class="media">
                                    <div class="icon ml-2">
                                        <i class="flaticon-money"></i>
                                    </div>
                                    <div class="media-body text-right">
                                        <p class="widget-text mb-0">Income</p>
                                        <p class="widget-numeric-value">9.5 M</p>
                                    </div>
                                </div>
                                <p class="widget-total-stats mt-2">$2.1 M This Week</p>
                            </div>
                        </div>
                    </div>

                </div>

                <div class="row">
                    <div class="col-xl-4 col-lg-6 col-md-6 col-12 layout-spacing">
                        <div class="widget-content-area chat-messages p-0  br-4">

                            <div class="chat-container">
                                <div class="chat-header">
                                    <div class="media">
                                        <i class="flaticon-mail-fill icon mr-4"></i>
                                        <div class="media-body">
                                            <h6 class="">Message</h6>
                                            <p class="mb-0">3 Unread Message</p>
                                        </div>
                                        <div class="float-right">
                                            <i class="flaticon-refresh-1 js-refresh mr-1"></i>
                                            <div class="dropdown custom-dropdown d-inline-block">
                                                <a class="dropdown-toggle pl-0" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                    <i class="flaticon-dots"></i>
                                                </a>
                                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuLink">
                                                    <a class="dropdown-item" href="javascript:void(0);">Account</a>
                                                    <a class="dropdown-item" href="javascript:void(0);">Profile</a>
                                                    <a class="dropdown-item" href="javascript:void(0);">Settings</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="chat-body reload-widget-area">
                                    <div class="mCustomScrollbar message-scroll" data-mcs-theme="minimal-dark">
                                        <div class="table-responsive">
                                            <table class="table">
                                                <tbody>
                                                    <tr>
                                                        <td>
                                                            <div class="media">
                                                                <img src="dashboard/assets/img/90x90.jpg" class="rounded-circle mr-4" alt="user">
                                                                <div class="media-body">
                                                                    <h6 class="usr-name">Andy King</h6>
                                                                    <p class="message">Hey, where have you been?</p>
                                                                </div>
                                                            </div>
                                                        </td>
                                                        <td class="text-right">
                                                            <p class="meta-time">5 min</p>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <div class="media">
                                                                <img src="dashboard/assets/img/90x90.jpg" class="rounded-circle mr-4" alt="user">
                                                                <div class="media-body">
                                                                    <h6 class="usr-name">Shaun Park</h6>
                                                                    <p class="message">What up man? Good Morning</p>
                                                                </div>
                                                            </div>
                                                        </td>
                                                        <td class="text-right">
                                                            <p class="meta-time">7 min</p>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <div class="media">
                                                                <img src="dashboard/assets/img/90x90.jpg" class="rounded-circle mr-4" alt="user">
                                                                <div class="media-body">
                                                                    <h6 class="usr-name">Nia Hillyer</h6>
                                                                    <p class="message">Hey, why are you not eating anything?</p>
                                                                </div>
                                                            </div>
                                                        </td>
                                                        <td class="text-right">
                                                            <p class="meta-time">11 min</p>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <div class="media">
                                                                <img src="dashboard/assets/img/90x90.jpg" class="rounded-circle mr-4" alt="user">
                                                                <div class="media-body">
                                                                    <h6 class="usr-name">Mary McDonald</h6>
                                                                    <p class="message">I never said that for sure</p>
                                                                </div>
                                                            </div>
                                                        </td>
                                                        <td class="text-right">
                                                            <p class="meta-time">20 min</p>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <div class="media">
                                                                <img src="dashboard/assets/img/90x90.jpg" class="rounded-circle mr-4" alt="user">
                                                                <div class="media-body">
                                                                    <h6 class="usr-name">Lisa Doe</h6>
                                                                    <p class="message">That's not what I heard from Sammy</p>
                                                                </div>
                                                            </div>
                                                        </td>
                                                        <td class="text-right">
                                                            <p class="meta-time">25 min</p>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <div class="media">
                                                                <img src="dashboard/assets/img/90x90.jpg" class="rounded-circle mr-4" alt="user">
                                                                <div class="media-body">
                                                                    <h6 class="usr-name">Alma Clarke</h6>
                                                                    <p class="message">Good Morning Friends</p>
                                                                </div>
                                                            </div>
                                                        </td>
                                                        <td class="text-right">
                                                            <p class="meta-time">33 min</p>
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                    <div class="text-center show-all-msg p-4">
                                        <a href="#">All messages</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-xl-4 col-lg-6 col-md-6 col-sm-12 col-12 layout-spacing">
                        <div class="widget-content-area card-widget p-0  br-4">
                            <div class="card-1 br-4">
                                <div class="d-flex justify-content-between mb-5">
                                    <p class="card-title">Team Meeting</p>
                                    <p class="meta-time">12:30 - 2:30 PM</p>
                                </div>

                                <div class="row">
                                    <div class="col-md-12 mb-4">
                                        <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                                        <p> Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                                    </div>

                                    <div class="col-md-12 text-center mt-sm-3">
                                        <button class="btn btn-outline-default btn-rounded">View Details</button>
                                    </div>
                                </div>

                                <ul class="list-inline badge-collapsed-img badge-tooltip mt-5 mb-0 text-right mr-3">
                                    <li class="list-inline-item chat-online-usr">
                                        <img data-original-title="Alma Clarke" alt="admin-profile" src="dashboard/assets/img/90x90.jpg" class="ml-0 bs-tooltip">
                                    </li>
                                    <li class="list-inline-item chat-online-usr">
                                        <img data-original-title="Alan Green" alt="admin-profile" src="dashboard/assets/img/90x90.jpg" class="bs-tooltip">
                                    </li>
                                    <li class="list-inline-item chat-online-usr">
                                        <img data-original-title="Daisy Anderson" alt="admin-profile" src="dashboard/assets/img/90x90.jpg" class="bs-tooltip">
                                    </li>
                                    <li class="list-inline-item chat-online-usr">
                                        <img data-original-title="Judy Holmes" alt="admin-profile" src="dashboard/assets/img/90x90.jpg" class="bs-tooltip">
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <div class="col-xl-4 col-lg-12 col-md-12 col-12 layout-spacing">
                        <div class="statbox widget box order-summary">
                            <div class="widget-header ">
                                <div class="row">
                                    <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                                        <h4>Order Summary</h4>
                                    </div>
                                </div>
                            </div>
                            <div class="widget-content widget-content-area ">
                                <p class="card-title pl-2 mb-0 mt-1">Total Balance</p>
                                <div class="d-flex justify-content-between mt-4">
                                    <p class="t-amount mb-2">168,500</p>
                                    <p class="order-rate mt-auto">20% <i class="flaticon-double-check ml-2"></i></p>
                                </div>
                                <div class="row mt-5">
                                    <div class="col-sm-6 mb-sm-4 mb-2">
                                        <div class="media processed">
                                            <i class="flaticon-cart-bag icon mr-2"></i>
                                            <div class="media-body">
                                                <p class="mt-1">Processed</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-6 mb-sm-4 mb-2">
                                        <div class="progress progress-md">
                                            <div class="progress-bar" role="progressbar" style="width: 85%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                    </div>
                                    <div class="col-sm-6 mb-sm-4 mb-2">
                                        <div class="media pending">
                                            <i class="flaticon-danger-2 icon mr-2"></i>
                                            <div class="media-body">
                                                <p class="mt-1">Pending</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-6 mb-sm-4 mb-2">
                                        <div class="progress progress-md">
                                            <div class="progress-bar" role="progressbar" style="width: 25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                    </div>
                                    <div class="col-sm-6 mb-sm-4 mb-2">
                                        <div class="media delivered">
                                            <i class="flaticon-gift icon mr-2"></i>
                                            <div class="media-body">
                                                <p class="mt-1">Delivered</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-6 mb-sm-4 mb-2">
                                        <div class="progress progress-md">
                                            <div class="progress-bar" role="progressbar" style="width: 90%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row">

                    <div class="col-xl-8 col-lg-12 col-md-12 col-12 layout-spacing">
                        <div class="widget-content-area monthly-chart  br-4">
                            <div class="row">
                                <div class="col-lg-4 col-md-6 col-sm-2 col-12  align-self-center">
                                    <h3>Statistics</h3>
                                </div>
                                <div class="col-lg-8 col-md-6 col-sm-10 col-12 mt-sm-0 mt-3">
                                    <ul class="nav justify-content-sm-end justify-content-center monthly-chart-tab nav-pills" id="monthly-chart" role="tablist">
                                        <li class="nav-item">
                                            <a class="nav-link active" id="monthly-chart-weekly-tab" data-toggle="pill" href="#monthly-chart-weekly" role="tab" aria-controls="monthly-chart-weekly" aria-selected="true">Weekly</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" id="monthly-chart-monthly-tab" data-toggle="pill" href="#monthly-chart-monthly" role="tab" aria-controls="monthly-chart-monthly" aria-selected="true">Monthly</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" id="monthly-chart-yearly-tab" data-toggle="pill" href="#monthly-chart-yearly" role="tab" aria-controls="monthly-chart-yearly" aria-selected="false">Yearly</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-12 col-md-12 col-12 mt-3">
                                    <div class="tab-content" id="monthly-chartContent">
                                        <div class="tab-pane fade show active" id="monthly-chart-weekly" role="tabpanel" aria-labelledby="monthly-chart-weekly-tab">
                                            <div class="v-pv-weekly" style="height: 300px; width: 100%; margin-top: 30px;"></div>

                                            <div class="col-lg-12 col-md-12 col-sm-12 col-12">
                                                <div class="row mt-3">
                                                    <div class="col-lg-5 col-md-5 col-sm-5 col-12 text-sm-right text-center mb-3 mr-sm-3 px-xl-0">
                                                        <div class="d-flex justify-content-sm-end  justify-content-center">
                                                            <div class="d-m-visitors data-marker align-self-center"></div>
                                                            <span class="visitors">Visitors : 9,823</span>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-5 col-md-5 col-sm-5 col-12 text-sm-left text-center mb-3 ml-sm-3 px-xl-0">
                                                        <div class="d-flex justify-content-sm-start  justify-content-center">
                                                            <div class="d-m-page-view data-marker align-self-center"></div>
                                                            <span class="page-view">Pageviews : 21,655</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="tab-pane fade" id="monthly-chart-monthly" role="tabpanel" aria-labelledby="monthly-chart-monthly-tab">
                                            <div class="v-pv-monthly" style="height: 300px; width: 100%; margin-top: 30px;"></div>

                                            <div class="col-lg-12 col-md-12 col-sm-12 col-12">
                                                <div class="row mt-3">
                                                    <div class="col-lg-5 col-md-5 col-sm-5 col-12 text-sm-right text-center mb-3 mr-sm-3 px-xl-0">
                                                        <div class="d-flex justify-content-sm-end  justify-content-center">
                                                            <div class="d-m-visitors data-marker data-marker-success align-self-center"></div>
                                                            <span class="visitors">Visitors : 19,823</span>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-5 col-md-5 col-sm-5 col-12 text-sm-left text-center mb-3 ml-sm-3 px-xl-0">
                                                        <div class="d-flex justify-content-sm-start  justify-content-center">
                                                            <div class="d-m-page-view data-marker data-marker-secondary align-self-center"></div>
                                                            <span class="page-view">Pageviews : 61,655</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="tab-pane fade" id="monthly-chart-yearly" role="tabpanel" aria-labelledby="monthly-chart-yearly-tab">
                                            <div class="v-pv-yearly" style="height: 300px; width: 100%; margin-top: 30px;"></div>

                                            <div class="col-lg-12 col-md-12 col-sm-12 col-12">
                                                <div class="row mt-3">
                                                    <div class="col-lg-5 col-md-5 col-sm-5 col-12 text-sm-right text-center mb-3 mr-sm-3 px-xl-0">
                                                        <div class="d-flex justify-content-sm-end  justify-content-center">
                                                            <div class="d-m-visitors data-marker data-marker-success align-self-center"></div>
                                                            <span class="visitors">Visitors : 80,823</span>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-5 col-md-5 col-sm-5 col-12 text-sm-left text-center mb-3 ml-sm-3 px-xl-0">
                                                        <div class="d-flex justify-content-sm-start  justify-content-center">
                                                            <div class="d-m-page-view data-marker data-marker-secondary align-self-center"></div>
                                                            <span class="page-view">Pageviews : 1,21,655</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-xl-4 col-lg-12 col-sm-12 col-12 layout-spacing">
                        <div class="statbox widget box">
                            <div class="widget-header ">
                                <div class="row">
                                    <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                                        <h4>Revenue and Profit</h4>
                                    </div>
                                </div>
                            </div>
                            <div class="widget-content widget-content-area  monthly-profit-chart">
                                <div class="row">
                                    <div class="col-lg-12 col-md-12">
                                        <div class="row">
                                            <div class="col-lg-12 col-md-12 col-12 mt-3">
                                                <div class="s-r mx-auto" style="height: 300px; width: 100%; max-width: 275px;"></div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-lg-12 col-md-12 col-12 mt-2 mb-2">
                                        <div class="row mt-4">
                                            <div class="col-lg-6 col-md-6 col-6 px-xl-0 text-right">
                                                <div class="d-flex justify-content-end">
                                                    <div class="d-m-revenue data-marker align-self-center"></div>
                                                    <span class="page-view mr-sm-3">Revenue</span>
                                                </div>
                                            </div>
                                            <div class="col-lg-6 col-md-6 col-6 px-xl-0 text-left">
                                                <div class="d-flex justify-content-start">
                                                    <div class="d-m-profit data-marker align-self-center"></div>
                                                    <span class="page-view">Profit</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>

                <div class="row">
                    <div class="col-xl-12 col-lg-12 col-md-12 col-12 layout-spacing">
                        <div class="statbox widget box">
                            <div class="widget-header ">
                                <div class="row">
                                    <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                                        <h4>New Products</h4>
                                    </div>
                                </div>
                            </div>

                            <div class="widget-content-area ">

                                <div class="table-responsive new-products">
                                    <table class="table">
                                        <thead>
                                            <tr>
                                                <th class="form-check-column text-center">
                                                    <label for="checkAll" class="new-control new-checkbox new-checkbox-rounded checkbox-primary pb-2">
                                                        <input type="checkbox" id="checkAll" class="new-control-input">
                                                        <span class="new-control-indicator mt-2"></span><span class="invisible">s</span>
                                                    </label>
                                                </th>
                                                <th>Product</th>
                                                <th>Type</th>
                                                <th>SKU</th>
                                                <th class="text-center">Quantity</th>
                                                <th>Image</th>
                                                <th class="text-center">Price</th>
                                                <th class="text-center">Status</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td class="form-check-column text-center">
                                                    <label class="new-control new-checkbox new-checkbox-rounded checkbox-primary pb-2">
                                                        <input type="checkbox" class="new-control-input chkbox">
                                                        <span class="new-control-indicator mt-2"></span><span class="invisible">s</span>
                                                    </label>
                                                </td>
                                                <td>Camera</td>
                                                <td><span class="badge badge-info badge-pill">Simple</span></td>
                                                <td>#0001</td>
                                                <td class="text-center">1</td>
                                                <td>
                                                    <img src="dashboard/assets/img/90x90.jpg" class="img-fluid" alt="img-1" style="border-color: #3862f5;">
                                                </td>
                                                <td class="text-center">$848.95</td>
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

                                            <tr>
                                                <td class="form-check-column text-center">
                                                    <label class="new-control new-checkbox new-checkbox-rounded checkbox-primary pb-2">
                                                        <input type="checkbox" class="new-control-input chkbox">
                                                        <span class="new-control-indicator mt-2"></span><span class="invisible">s</span>
                                                    </label>
                                                </td>
                                                <td>Mobile</td>
                                                <td><span class="badge badge-info badge-pill">Simple</span></td>
                                                <td>#0002</td>
                                                <td class="text-center">1</td>
                                                <td>
                                                    <img src="dashboard/assets/img/90x90.jpg" class="img-fluid" alt="img-1" style="border-color: #07e0c4;">
                                                </td>
                                                <td class="text-center">$529.95</td>
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

                                            <tr>
                                                <td class="form-check-column text-center">
                                                    <label class="new-control new-checkbox new-checkbox-rounded checkbox-primary pb-2">
                                                        <input type="checkbox" class="new-control-input chkbox">
                                                        <span class="new-control-indicator mt-2"></span><span class="invisible">s</span>
                                                    </label>
                                                </td>
                                                <td>Windows 10</td>
                                                <td><span class="badge badge-success badge-pill">Digital</span></td>
                                                <td>#0003</td>
                                                <td class="text-center">3</td>
                                                <td>
                                                    <img src="dashboard/assets/img/90x90.jpg" class="img-fluid" alt="img-1" style="border-color: #00b1f4;">
                                                </td>
                                                <td class="text-center">$1584.00</td>
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

                                            <tr>
                                                <td class="form-check-column text-center">
                                                    <label class="new-control new-checkbox new-checkbox-rounded checkbox-primary pb-2">
                                                        <input type="checkbox" class="new-control-input chkbox">
                                                        <span class="new-control-indicator mt-2"></span><span class="invisible">s</span>
                                                    </label>
                                                </td>
                                                <td>Watch</td>
                                                <td><span class="badge badge-info badge-pill">Simple</span></td>
                                                <td>#0004</td>
                                                <td class="text-center">5</td>
                                                <td>
                                                    <img src="dashboard/assets/img/90x90.jpg" class="img-fluid" alt="img-1" style="border-color: #f8538d;">
                                                </td>
                                                <td class="text-center">$595.99</td>
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

                                            <tr>
                                                <td class="form-check-column text-center">
                                                    <label class="new-control new-checkbox new-checkbox-rounded checkbox-primary pb-2">
                                                        <input type="checkbox" class="new-control-input chkbox">
                                                        <span class="new-control-indicator mt-2"></span><span class="invisible">s</span>
                                                    </label>
                                                </td>
                                                <td>Drone</td>
                                                <td><span class="badge badge-info badge-pill">Simple</span></td>
                                                <td>#0005</td>
                                                <td class="text-center">1</td>
                                                <td>
                                                    <img src="dashboard/assets/img/90x90.jpg" class="img-fluid" alt="img-1" style="border-color: #ffbb44;">
                                                </td>
                                                <td class="text-center">$58.00</td>
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

                                            <tr>
                                                <td class="form-check-column text-center">
                                                    <label class="new-control new-checkbox new-checkbox-rounded checkbox-primary pb-2">
                                                        <input type="checkbox" class="new-control-input chkbox">
                                                        <span class="new-control-indicator mt-2"></span><span class="invisible">s</span>
                                                    </label>
                                                </td>
                                                <td>Sunglasses</td>
                                                <td><span class="badge badge-secondary badge-pill">Bundled</span></td>
                                                <td>#0006</td>
                                                <td class="text-center">6</td>
                                                <td>
                                                    <img src="dashboard/assets/img/90x90.jpg" class="img-fluid" alt="img-1" style="border-color: #25d5e4;">
                                                </td>
                                                <td class="text-center">$123.00</td>
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

</html>                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                            