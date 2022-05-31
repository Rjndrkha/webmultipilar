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



</head>

<body>
    <div class="boxed_wrapper">
        <!--Start Preloader -->
        <div class="preloader"></div>
        <!--End Preloader -->

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
    </div>
    
    <main class="py-4">
        @yield('content')
    </main>

</body>

</html>