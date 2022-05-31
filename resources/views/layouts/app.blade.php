<!DOCTYPE html>
<html lang="en" style="scroll-behavior: smooth;">

<head>
    <meta charset="UTF-8">
    <title>Multipilar - Penyedia Core Banking System BPR,LKM dan Koperasi</title>

    <!-- responsive meta -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- For IE -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- master stylesheet -->
    <link rel="stylesheet" href="landing/css/style.css">
    <!-- Responsive stylesheet -->
    <link rel="stylesheet" href="landing/css/responsive.css">
    <!-- Favicon -->
    <link rel="apple-touch-icon" sizes="180x180" href="landing/images/favicon/apple-touch-icon.png">
    <link rel="icon" type="image/png" href="landing/images/favicon/favicon-32x32.png" sizes="32x32">
    <link rel="icon" type="image/png" href="landing/images/favicon/favicon-16x16.png" sizes="16x16">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>

<body>

        <!--Start Top bar area -->
        <section class="top-bar-area">
            <div class="container">
                <div class="row">
                    <div class="col-md-8 col-sm-12 col-xs-12">
                        <div class="top-info">
                            <ul>
                                <li><span class="icon-signs"></span>ALAMAT MULTIPILAR</li>
                                <li><span class="icon-clock"></span>Opening Time: Mon-Sat: 09.00 to 17.00</li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-8 col-xs-9">
                        <div class="top-right">
                            <ul>
                                @guest
                                @if (Route::has('login'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                                </li>
                                @endif


                                @else
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('home') }}">Dashboard</a>
                                </li>
                                @endguest
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-1 col-sm-4 col-xs-3">
                        <div class="language-switcher">
                            <div id="polyglotLanguageSwitcher">
                                <form action="#">
                                    <select id="polyglot-language-options">
                                        <option id="id" value="id" selected>Indonesia</option>
                                        <option id="en" value="en">English</option>

                                    </select>
                                </form>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </section>

        <!--Start header area-->
        <header class="header-area">
            <div class="container">
                <div class="row">
                    <div class="col-lg-5 col-md-4 col-sm-12 col-xs-12">
                        <div class="logo">
                            <a href="/">
                                <img src="landing/newimages/logo2.png" alt="Awesome Logo">
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-5 col-md-6 col-sm-12 col-xs-12">
                        <div class="header-contact-info">
                            <ul>
                                <li>
                                    <div class="iocn-holder">
                                        <span class="icon-technology"></span>
                                    </div>
                                    <div class="text-holder">
                                        <h6>Call Us On</h6>
                                        <p>(0265) 337022</p>
                                    </div>
                                </li>
                                <li>
                                    <div class="iocn-holder">
                                        <span class="icon-letter top-envelop"></span>
                                    </div>
                                    <div class="text-holder">
                                        <h6>Mail Us @</h6>
                                        <p>cs@multipilarbalantika.co.id</p>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-2 col-sm-12 col-xs-12">
                        <div class="top-social-links">
                            <ul>
                                <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                                <li><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
                                <li><a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
                            </ul>
                        </div>
                    </div>

                </div>
            </div>
        </header>
        <!--End header area-->

         <!--Start mainmenu area-->
         <section class="mainmenu-area stricky">
            <div class="container">
                <div class="mainmenu-bg">
                    <div class="row">
                        <div class="col-md-10 col-sm-12 col-xs-12">
                            <!--Start mainmenu-->
                            <nav class="main-menu">
                                <div class="navbar-header">
                                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                                        <span class="icon-bar"></span>
                                        <span class="icon-bar"></span>
                                        <span class="icon-bar"></span>
                                    </button>
                                </div>
                                <div class="navbar-collapse collapse clearfix">
                                    <ul class="navigation clearfix">
                                        <li class="home current"><a href="/"><span class="fa fa-home"></span></a></li>
                                        <li class="dropdown"><a href="/about-us">Tentang Kami</a>
                                            <ul>
                                                <li><a href="#">Tentang Perusahaan</a></li>
                                                <li><a href="#">Sejarah Kami</a></li>
                                                <li><a href="#">Our Team</a></li>
                                                <li><a href="#">FAQ's</a></li>

                                            </ul>
                                        </li>
                                        <li class="dropdown"><a href="/products">Produk Kami</a>
                                            <ul>
                                                <li><a href="#">SimfoniBPR</a></li>
                                                <li><a href="#">SimfoniLKM</a></li>
                                                <li><a href="#">SimfoniBMT</a></li>
                                                <li><a href="#">Simfoni Mobile</a></li>

                                            </ul>
                                        </li>
                                        <li><a href="/blog">Berita / Blog</a></li>
                                        <li><a href="#contact">Hubungi Kami</a></li>


                                    </ul>
                                </div>
                            </nav>

                            <!--End mainmenu-->
                            <!--Start search box-->
                            <div class="outer-search-box">
                                <div class="seach-toggle"><i class="fa fa-search"></i></div>
                                <ul class="search-box">
                                    <li>
                                        <form method="post" action="/">
                                            <div class="form-group">
                                                <input type="search" name="search" placeholder="Search Here" required>
                                                <button type="submit"><i class="fa fa-search"></i></button>
                                            </div>
                                        </form>
                                    </li>
                                </ul>
                            </div>
                            <!--End search box-->
                        </div>
                        <div class="col-md-2 col-sm-12 col-xs-12">
                            <div class="free-consulation-button pull-right">
                                <a class="thm-btn bg-clr1" href="#">Konsultasi Gratis</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--End mainmenu area-->

    
    <main class="py-4">
        @yield('content')
    </main>

</body>

</html>