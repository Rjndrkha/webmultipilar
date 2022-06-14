@extends('layouts.app')

@section('content')
    <!DOCTYPE html>
    <html lang="en">

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




            <!--Start breadcrumb area-->
            <section class="breadcrumb-area" style="background-image: url(landing/images/resources/breadcrumb-bg.jpg);">
                <div class="container text-center">
                    <h1>Products</h1>
                </div>
            </section>
            <!--End breadcrumb area-->

            <!--Start breadcrumb bottom area-->
            <section class="breadcrumb-botton-area">
                <div class="container">
                    <div class="left pull-left">
                        <ul>
                            <li><a href="index.html">Home</a></li>
                            <li><i class="fa fa-angle-right" aria-hidden="true"></i></li>
                            <li>Products</li>
                        </ul>
                    </div>
                    <div class="right pull-right">
                        <a href="#"><i class="fa fa-share-alt" aria-hidden="true"></i>Share</a>
                    </div>
                </div>

            </div>
        </section>
        <!--End breadcrumb bottom area-->

        <!--Start company overview area-->
        <section class="company-overview-area">
            <div class="container">
                <div class="row">
                    <div class="col-lg-9 col-md-8 col-sm-12 col-xs-12 pull-right">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="top-img-box">
                                    @foreach($products as $product)
                                    <img src="{{ asset('storage/'.$product->image) }}" alt="Awesome Image">
                                    @endforeach

                                </div>
                            </div>




                        </div>
                        <div class="col-lg-3 col-md-4 col-sm-7 col-xs-12 pull-left">
                            <div class="left-sidebar">
                                <!--Start single sidebar-->
                                <div class="single-sidebar">
                                    <ul class="page-link">
                                        <li>
                                            <a class="active" href="company-overview.html">
                                                SimfoniBPR
                                                <i class="fa fa-angle-double-right" aria-hidden="true"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                SimfoniLKM
                                                <i class="fa fa-angle-double-right" aria-hidden="true"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                SimfoniBMT
                                                <i class="fa fa-angle-double-right" aria-hidden="true"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                Simfoni Mobile
                                                <i class="fa fa-angle-double-right" aria-hidden="true"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                Simfoni Koperasi
                                                <i class="fa fa-angle-double-right" aria-hidden="true"></i>
                                            </a>
                                        </li>

                                    </ul>
                                </div>
                                <!--End single sidebar-->
                                <!--Start single sidebar-->
                                <div class="single-sidebar">
                                    <ul class="download-link">
                                        <li>
                                            <a href="#">
                                                <div class="icon-holder">
                                                    <span class="icon-pdf"></span>
                                                </div>
                                                <div class="title-holder">
                                                    <h5>Our Presentation.PDF</h5>
                                                </div>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <div class="icon-holder">
                                                    <span class="icon-word-document"></span>
                                                </div>
                                                <div class="title-holder">
                                                    <h5>Financial Report.DOC</h5>
                                                </div>
                                            </a>
                                        </li>
                                    </ul>
                                </div>



                            </div>

                        </div>
                        <div class="row overview-content-pdbottom">
                            <div class="col-md-7">
                                <div class="overview-content">
                                    <div class="sec-title">
                                        <h1>Overview</h1>
                                        <span class="border"></span>
                                    </div>
                                    <div class="text">
                                        <p>We have over 20 years of experience we’ll ensure you always get the best
                                            guidance. serve clients at every level of their organizations, seds in whatever
                                            capacity we can be sed most useful, whether as a trusted advisor to top
                                            management sed ut or ours hands-on coach for front line employees.</p>
                                        <p>For more every engagement, we assemble team with the most appropriated experience
                                            and more expertis Our goal is too optimises our customers business seds uts
                                            relationships.</p>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
            </section>

            <!--End company overview area-->

            <!--Start footer area-->
            <footer class="footer-area" style="background-image:url(landing/images/footer/footer-bg.jpg);">
                <div class="footer-top-area">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="footer-top-content">
                                    <div class="title pull-left">
                                        <h3>Berpengalaman lebih dari 13 tahun untuk membangun Core Banking System yang
                                            handal dan adaptif.</h3>
                                    </div>
                                    <div class="button pull-right">
                                        <a class="thm-btn bg-clr1" href="#">Konsultasi Sekarang</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="container">
                    <div class="row">
                        <!--Start single footer widget-->
                        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                            <div class="single-footer-widget pd-bottom">
                                <div class="footer-logo">
                                    <a href="index.html">
                                        <img src="landing/newimages/logo2.png" alt="Awesome Footer Logo">
                                    </a>
                                </div>
                                <div class="our-info">
                                    <p>PT. Multipilar Balantika adalah perusahaan yang bergerak di bidang pelayanan jasa
                                        konsultasi manajemen, pelatihan, dan Teknologi Informasi untuk institusi
                                        Microbanking, Small & Medium Enterprise(SME).</p>
                                </div>
                            </div>
                        </div>
                        <!--End single footer widget-->
                        <!--Start single footer widget-->
                        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                            <div class="single-footer-widget wedo pd-left pd-bottom">
                                <div class="title">
                                    <h3>Apa yang Kami Lakukan</h3>
                                </div>
                                <ul class="we-do-list">
                                    <li><a href="#">SimfoniBPR</a></li>
                                    <li><a href="#">SimfoniLKM</a></li>
                                    <li><a href="#">SimfoniBMT</a></li>
                                    <li><a href="#">Mobile</a></li>
                                </ul>
                            </div>
                        </div>
                        <!--Start single footer widget-->
                        <!--Start single footer widget-->
                        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                            <div class="single-footer-widget">
                                <div class="title">
                                    <h3>Berita Terkini</h3>
                                </div>
                                <ul class="latest-news-items">
                                    <li>
                                        <a href="#">
                                            BPR BKPD Pangandaran meminta Multipilar Untuk Speedup<br> Project Digitalisasi
                                        </a>
                                        <p>August 21, 2016</p>
                                    </li>
                                    <li>
                                        <a href="#">
                                            Mengapa Aplikasi Berbasis Web<br> Kini Menjadi Pilihan
                                        </a>
                                        <p>March 14, 2016</p>
                                    </li>
                                </ul>
                            </div>
                        </div>

                    </div>
                    <div class="row overview-content-pdbottom">
                        <div class="col-md-7">
                            <div class="overview-content">
                                <div class="sec-title">
                                    <h1>Overview</h1>
                                    <span class="border"></span>
                                </div>
                                <div class="text">
                                    @foreach($products as $product)
                                    <p>
                                        {{ $product->overview }}
                                    </p>
                                    @endforeach     

                            </div>
                        </div>
                        <!--End single footer widget-->
                    </div>
                </div>
            </footer>
            <!--End footer area-->

            <!--Start footer bottom area-->
            <section class="footer-bottom-area">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="footer-bottom">
                                <div class="copyright-text pull-left">
                                    <p>Copyrights © 2022 All Rights Reserved, Powered by <a href="#">PT Multipilar
                                            Balantika.</a></p>
                                </div>
                                <div class="footer-menu pull-right">
                                    <ul>
                                        <li><a href="#">Kebijakan Hukum</a></li>
                                        <li><a href="#">Peta Situs</a></li>
                                        <li><a href="#">Kebijakan Pribadi</a></li>
                                        <li><a href="#">Syarat & Ketentuan</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!--End footer bottom area-->

            <!--Scroll to top-->
            <div class="scroll-to-top scroll-to-target" data-target="html"><span class="fa fa-angle-up"></span></div>

            <!-- main jQuery -->
            <script src="landing/js/jquery-1.11.1.min.js"></script>
            <!-- bootstrap -->
            <script src="landing/js/bootstrap.min.js"></script>
            <!-- bx slider -->
            <script src="landing/js/jquery.bxslider.min.js"></script>
            <!-- count to -->
            <script src="landing/js/jquery.countTo.js"></script>
            <!-- owl carousel -->
            <script src="landing/js/owl.carousel.min.js"></script>
            <!-- validate -->
            <script src="landing/js/validation.js"></script>
            <!-- mixit up -->
            <script src="landing/js/jquery.mixitup.min.js"></script>
            <!-- easing -->
            <script src="landing/js/jquery.easing.min.js"></script>
            <!-- gmap helper -->
            <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAHzPSV2jshbjI8fqnC_C4L08ffnj5EN3A"></script>
            <!--gmap script-->
            <script src="landing/js/gmaps.js"></script>
            <script src="landing/js/map-helper.js"></script>
            <!-- fancy box -->
            <script src="landing/js/jquery.fancybox.pack.js"></script>
            <script src="landing/js/jquery.appear.js"></script>
            <!-- isotope script-->
            <script src="landing/js/isotope.js"></script>
            <script src="landing/js/jquery.prettyPhoto.js"></script>
            <script src="landing/js/jquery.bootstrap-touchspin.js"></script>
            <!-- jQuery timepicker js -->
            <script src="landing/assets/timepicker/timePicker.js"></script>
            <!-- Bootstrap select picker js -->
            <script src="landing/assets/bootstrap-sl-1.12.1/bootstrap-select.js"></script>
            <!-- Bootstrap bootstrap touchspin js -->
            <!-- jQuery ui js -->
            <script src="landing/assets/jquery-ui-1.11.4/jquery-ui.js"></script>
            <!-- Language Switche  -->
            <script src="landing/assets/language-switcher/jquery.polyglot.language.switcher.js"></script>
            <!-- Html 5 light box script-->
            <script src="landing/assets/html5lightbox/html5lightbox.js"></script>
            <!-- wow script-->
            <script src="landing/js/wow.min.js"></script>

            <!-- revolution slider js -->
            <script src="landing/assets/revolution/js/jquery.themepunch.tools.min.js"></script>
            <script src="landing/assets/revolution/js/jquery.themepunch.revolution.min.js"></script>
            <script src="landing/assets/revolution/js/extensions/revolution.extension.actions.min.js"></script>
            <script src="landing/assets/revolution/js/extensions/revolution.extension.carousel.min.js"></script>
            <script src="landing/assets/revolution/js/extensions/revolution.extension.kenburn.min.js"></script>
            <script src="landing/assets/revolution/js/extensions/revolution.extension.layeranimation.min.js"></script>
            <script src="landing/assets/revolution/js/extensions/revolution.extension.migration.min.js"></script>
            <script src="landing/assets/revolution/js/extensions/revolution.extension.navigation.min.js"></script>
            <script src="landing/assets/revolution/js/extensions/revolution.extension.parallax.min.js"></script>
            <script src="landing/assets/revolution/js/extensions/revolution.extension.slideanims.min.js"></script>
            <script src="landing/assets/revolution/js/extensions/revolution.extension.video.min.js"></script>



            <!-- thm custom script -->
            <script src="landing/js/custom.js"></script>





        </div>
    </body>

    </html>
@endsection
