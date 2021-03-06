@extends('layouts.app')

@section('content')

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



        
        <!--End mainmenu area-->

        <!--Start rev slider wrapper-->
        <section class="rev_slider_wrapper">
            <div id="slider1" class="rev_slider" data-version="5.0">
                <ul>

                    <li data-transition="slidingoverlayleft">
                        @foreach($banners as $banner)
                        <img src="{{ asset('storage/'.$banner->image1) }}" alt="" width="1920" height="550" data-bgposition="top center" data-bgfit="cover" data-bgrepeat="no-repeat" data-bgparallax="1">


                        <div class="tp-caption  tp-resizeme" data-x="left" data-hoffset="0" data-y="top" data-voffset="130" data-transform_idle="o:1;" data-transform_in="x:[-175%];y:0px;z:0;rX:0;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0.01;s:3000;e:Power3.easeOut;" data-transform_out="s:1000;e:Power3.easeInOut;s:1000;e:Power3.easeInOut;" data-mask_in="x:[100%];y:0;s:inherit;e:inherit;" data-splitin="none" data-splitout="none" data-responsive_offset="on" data-start="700">

                            <div class="slide-content-box">
                                <h1>{{ $banner->title1 }}<br>{{$banner->subtitle1}}</h1>
                                <p>{{$banner->description1}}</p>
                            </div>

                        </div>
                        <div class="tp-caption tp-resizeme" data-x="left" data-hoffset="0" data-y="top" data-voffset="358" data-transform_idle="o:1;" data-transform_in="y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;s:2000;e:Power4.easeInOut;" data-transform_out="s:1000;e:Power3.easeInOut;s:1000;e:Power3.easeInOut;" data-splitin="none" data-splitout="none" data-responsive_offset="on" data-start="2300">
                            <div class="slide-content-box">
                                <div class="button">
                                    <a class="thm-btn bg-clr1" href="https://www.youtube.com/watch?v=KeoZSoKH39k">Video Profil Kami</a>
                                </div>
                            </div>
                        </div>
                        <div class="tp-caption tp-resizeme" data-x="left" data-hoffset="182" data-y="top" data-voffset="358" data-transform_idle="o:1;" data-transform_in="y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;s:2000;e:Power4.easeInOut;" data-transform_out="s:1000;e:Power3.easeInOut;s:1000;e:Power3.easeInOut;" data-splitin="none" data-splitout="none" data-responsive_offset="on" data-start="2600">
                            <div class="slide-content-box">
                                <div class="button">
                                    <a class="thm-btn bg-clr2" href="mailto:cs@multipilarbalantika.co.id">Hubungi Kami</a>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li data-transition="fade">

                        <img src="{{ asset('storage/'.$banner->image2) }}" alt="" width="1920" height="550" data-bgposition="top center" data-bgfit="cover" data-bgrepeat="no-repeat" data-bgparallax="1">

                        <div class="tp-caption tp-resizeme" data-x="center" data-hoffset="0" data-y="center" data-voffset="-47" data-transform_idle="o:1;" data-transform_in="x:[-175%];y:0px;z:0;rX:0;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0.01;s:3000;e:Power3.easeOut;" data-transform_out="s:1000;e:Power3.easeInOut;s:1000;e:Power3.easeInOut;" data-mask_in="x:[100%];y:0;s:inherit;e:inherit;" data-splitin="none" data-splitout="none" data-start="500">
                            <div class="slide-content-box middle-slide">
                                <h1>{{$banner->title2}}</h1>
                            </div>
                        </div>
                        <div class="tp-caption tp-resizeme" data-x="center" data-hoffset="0" data-y="center" data-voffset="75" data-transform_idle="o:1;" data-transform_in="y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;s:2000;e:Power4.easeInOut;" data-transform_out="s:1000;e:Power3.easeInOut;s:1000;e:Power3.easeInOut;" data-splitin="none" data-splitout="none" data-responsive_offset="on" data-start="2300">
                            <div class="slide-content-box middle-slide">
                                <div class="button">
                                    <a href="/konsultasi">Ajukan Demo</a>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </li>


                </ul>
            </div>
        </section>
        <!--End rev slider wrapper-->
        <!--Start call to action area-->
        <section class="call-to-action-area">
            <div class="container">
                <div class="title text-center">
                    <h3>PT. Multipilar Balantika <br>
                        perusahaan penyedia Core Banking System (CBS) yang telah berpengalaman untuk membantu
                        perusahaan microbanking untuk tumbuh melalui produk yang handal dan adaptif.</h3>
                    <p>Microbanking yang kami layani :</p>
                </div>
                <div class="row">
                    <!--Start single item-->
                    @foreach($services as $service)
                    <div class="col-md-3 col-sm-6 col-xs-12">
                        <div class="single-item hvr-shadow text-center">
                            <div class="img-holder">
                                <img src="{{ asset('storage/'.$service->image) }}" alt="Awesome Image">
                                <div class="overlay-style-one">
                                    <div class="box">
                                        <div class="content">
                                            <a href="/products"><i class="fa fa-link" aria-hidden="true"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="text-holder">
                                <h3>{{$service->title}}</h3>
                                <p>{{$service->subtitle}}</p>
                            </div>
                        </div>
                    </div>
                    @endforeach
                    <!--End single item-->
                </div>
            </div>
        </section>
        <!--End call to action area-->

        <!--Start smart approach area-->
        <section class="smart-approach-area">
            <div class="container">
                <div class="sec-title text-center">
                    <h1>Kelebihan Layanan Kami </h1>
                    <span class="border"></span>
                </div>
                <div class="row">
                    <!--Start single item-->
                    <div class="col-md-4 col-sm-12 col-xs-12">
                        <div class="single-item text-center">
                            <div class="icon-box">
                                <span class="icon-mathematics"></span>
                            </div>
                            <div class="text-box">
                                <h3>Handal</h3>
                                <p>Produk dan layanan kami dapat diandalkan yang
                                    dibuktikan dengan pengalaman di industri keuangan selama lebih dari 13 tahun.</p>
                            </div>
                        </div>
                    </div>
                    <!--End single item-->
                    <!--Start single item-->
                    <div class="col-md-4 col-sm-12 col-xs-12">
                        <div class="single-item text-center">
                            <div class="icon-box">
                                <span class="icon-science"></span>
                            </div>
                            <div class="text-box">
                                <h3>Adaptif</h3>
                                <p>Produk kami adaptif terhadap perubahan regulasi maupun kebutuhan instansi dan nasabah
                                    sehingga dapat dikembangkan dengan sangat adaptif terhadap kebutuhan.</p>
                            </div>
                        </div>
                    </div>
                    <!--End single item-->
                    <!--Start single item-->
                    <div class="col-md-4 col-sm-12 col-xs-12">
                        <div class="single-item text-center">
                            <div class="icon-box">
                                <span class="icon-science-1"></span>
                            </div>
                            <div class="text-box">
                                <h3>Support 24/7 </h3>
                                <p>Kami memberikan support 24/7 melalui IT Support
                                    kami untuk membantu jika terjadi keluhan atau kendala saat menggunakan sistem kami.</p>
                            </div>
                        </div>
                    </div>
                    <!--End single item-->
                </div>
            </div>
        </section>
        <!--End smart approach area-->

        <!--Start fact counter area-->
        @foreach($counts as $count)
        <section class="fact-counter-area" style="background-image:url({{asset('storage/'.$count->background)}});">
            <div class="container">
                <div class="row">
                    @foreach($counts as $count)
                    <!--Start single item-->
                    <div class="col-md-3 col-sm-6 col-xs-12">
                        <div class="single-item text-center">
                            <h1><span class="timer" data-from="1" data-to="{{$count->klien}}" data-speed="5000" data-refresh-interval="50"></span></h1>
                            <span class="border"></span>
                            <h3>Client Aktif</h3>
                        </div>
                    </div>
                    @endforeach

                    <!--End single item-->
                    <!--Start single item-->
                    @foreach($counts as $count)
                    <div class="col-md-3 col-sm-6 col-xs-12">
                        <div class="single-item text-center">
                            <h1><span class="timer" data-from="1" data-to="{{$count->ahli}}" data-speed="5000" data-refresh-interval="50"></span></h1>
                            <span class="border"></span>
                            <h3>Tenaga Ahli</h3>
                        </div>
                    </div>
                    @endforeach
                    <!--End single item-->
                    @foreach($counts as $count)
                    <!--Start single item-->
                    <div class="col-md-3 col-sm-6 col-xs-12">
                        <div class="single-item text-center">
                            <h1><span class="timer" data-from="1" data-to="{{$count->symfoni}}" data-speed="5000" data-refresh-interval="50">55+</span><i class="fa fa-plus" aria-hidden="true"></i></h1>
                            <span class="border"></span>
                            <h3>Pengguna Symfoni Mobile</h3>
                        </div>
                    </div>
                    @endforeach
                    <!--End single item-->
                    @foreach($counts as $count)
                    <!--Start single item-->
                    <div class="col-md-3 col-sm-6 col-xs-12">
                        <div class="single-item text-center">
                            <h1><span class="timer" data-from="1" data-to="{{$count->mobile}}" data-speed="5000" data-refresh-interval="50">5+</span><i class="fa fa-plus" aria-hidden="true"></i></h1>
                            <span class="border"></span>
                            <h3>Mobile Apps untuk Nasabah</h3>
                        </div>
                    </div>
                @endforeach
                    <!--End single item-->

                </div>
            </div>
        </section>
        @endforeach


        <!--Start team area-->
        <section class="team-area">
            <div class="container">
                <div class="sec-title text-center">
                    <h1>Team Kami</h1>
                    <span class="border"></span>
                </div>
                <div class="row">
                    <!--star single tema-->
                    @foreach($teams as $team)
                    <div class="col-md-2 col-sm-4 col-xs-6">
                        <div class="single-team hvr-float-shadow text-center">
                            <div class="img-holder">
                                <img src="{{ asset('storage/'.$team->image) }}" alt="Awesome Image">
                            </div>
                            <div class="title-holder">
                                <h3>{{$team->name}}</h3>
                                <p>{{$team->position}}</p>
                            </div>
                        </div>
                    </div>
                    @endforeach
                    <!--End single tema-->
                </div>
            </div>
        </section>
        <!--End team area-->

        <!--Start video gallery area-->
        <section class="video-gallery-area" id="layanan">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <div class="text-holder">
                            <h3>Layanan Sistem Informasi dan Teknologi</h3>
                            <div class="text">
                                <p>Multipilar sebagai vendor aplikasi inti perbankan untuk BPR, LKM, Koperasi dan UMKM, sangat concern terhadap kualitas layanan. Salah satu misi kami adalah bersama-sama secara sinergi menjadikan bisnis anda tumbuh dan berkembang secara menguntungkan.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="video-holder">
                            <img src="landing/images/resources/video-gallery.jpg" alt="Awesome Video Gallery">
                            <div class="overlay-gallery">
                                <div class="icon-holder">
                                    <div class="icon">
                                        <a class="html5lightbox" title="Assurance Video Gallery" href="https://www.youtube.com/watch?v=KeoZSoKH39k"><img src="landing/images/multipilar-slideshow.jpg" alt="Play Button"></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </section>
        <!--End video gallery area-->

        <!--Start latest blog area-->
        <section class="latest-blog-area">
            <div class="container">
                <div class="sec-title text-center">
                    <h1>Berita-Berita</h1>
                    <span class="border"></span>
                </div>
                <div class="row">
                    @foreach($blogs as $blog)
                    <!--Start single latest blog-->
                    <div class="col-md-4">
                        <div class="/blog">
                            <div class="img-holder">
                                <img src="{{ asset('storage/'.$blog->image) }}" alt="Awesome Image">
                                <div class="published-date">
                                    <h3>{{
                                        $blog->updated_at
                                    }}</h3>
                                </div>
                                <div class="overlay-style-one">
                                    <div class="box">
                                        <div class="content">
                                            <a href="/blog"><i class="fa fa-link" aria-hidden="true"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="text-holder">
                                <a href="/blog">
                                    <h3 class="blog-title">{{$blog->title}}</h3>
                                </a>
                                <div class="text">
                                    <p>{{$blog->content}}</p>
                                </div>
                                <div class="meta-info clearfix">
                                    <div class="left pull-left">
                                        <ul class="post-info">
                                            <li>Oleh <a href="#">{{$blog->user->name}}</a></li>
                                            <li><a href="#">{{$blog->category->name}}, {{$blog->tag->name}}</a></li>
                                        </ul>
                                    </div>
                                    <div class="right pull-right">
                                        <a class="post-share" href="#"><i class="fa fa-share-alt" aria-hidden="true"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                    <!--End single latest blog-->

                </div>
            </div>
        </section>
        <!--End latest blog area-->

        <!--Start testimonial area-->
        <section class="testimonial-area" style="background-image:url(images/testimonial/testimonial-bg.jpg);">
            <div class="container">
                <div class="sec-title text-center">
                    <h1>Testimonial</h1>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="testimonial-carousel">
                            <!--Start single item-->
                            @foreach($testimonials as $testimonial)
                            <div class="single-item text-center">
                                <div class="text-holder">
                                    <p>{{$testimonial->description}}</p>
                                </div>
                                <div class="client-info">
                                    <div class="img-holder">
                                        <img src="{{ asset('storage/'.$testimonial->image) }}" alt="Client Photo">
                                    </div>
                                    <div class="name">
                                        <h3>{{$testimonial->name}}</h3>
                                        <p>{{$testimonial->address}}</p>
                                    </div>
                                </div>
                            </div>
                            @endforeach
                            <!--End single item-->

                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--End testimonial area-->

        <!--Start Brand area-->
        <section class="brand-area">
            <div class="container">
                <div class="sec-title">
                    <h1>Klien Kami</h1>
                    <span class="border"></span>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="brand">
                            <!--Start single item-->
                            @foreach($galleries as $gallery)
                            <a class="tool_tip" title="{{$gallery->title}}" href="#">
                                <div class="single-item">
                                    <img src="{{ asset('storage/'.$gallery->image) }}" alt="Awesome Brand Image">
                                </div>
                            </a>
                            @endforeach
                            <!--End single item-->

                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--End Brand area-->

        <!--Start footer area-->
        <footer id="contact" class="footer-area" style="background-image:url(landing/images/footer/footer-bg.jpg);">
            <div class="footer-top-area">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="footer-top-content">
                                <div class="title pull-left">
                                    <h5 style="margin-top: 25px; font-size: 16px">Berpengalaman lebih dari 13 tahun untuk membangun Core Banking System yang handal dan adaptif.</h5>
                                </div>
                                <div class="button pull-right">
                                    <a class="thm-btn bg-clr1" href="/konsultasi">Konsultasi Sekarang</a>
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
                                <p>PT. Multipilar Balantika adalah perusahaan yang bergerak di bidang pelayanan jasa konsultasi manajemen, pelatihan, dan Teknologi Informasi untuk institusi Microbanking, Small & Medium Enterprise(SME).</p>
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
                    <!--End single footer widget-->
                    <!--Start single footer widget-->
                    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                        <div class="single-footer-widget pd-top pd-left">
                            <div class="title">
                                <h3>Kontak Kami</h3>
                            </div>
                            <ul class="footer-contact-info">
                                <li>
                                    <div class="icon-holder">
                                        <span class="icon-world"></span>
                                    </div>
                                    <div class="text-holder">
                                        <p>Jl. Permata Raya Blok H Kav. No. 4, Tugujaya, Kec. Cihideung, Kab. Tasikmalaya<br>Jawa Barat 46115</p>
                                    </div>
                                </li>
                                <li>
                                    <div class="icon-holder">
                                        <span class="icon-technology-1"></span>
                                    </div>
                                    <div class="text-holder">
                                        <p>Telepon: (0265) 2354583</p>
                                    </div>
                                </li>
                                <li>
                                    <div class="icon-holder">
                                        <span class="icon-letter-1 bottom-envelop"></span>
                                    </div>
                                    <div class="text-holder">
                                        <p>cs@multipilarbalantika.co.id</p>
                                    </div>
                                </li>
                            </ul>
                            <ul class="footer-social-links">
                                <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                                <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                                <li><a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
                                <li><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
                            </ul>
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
                                <p>Copyrights ?? 2022 All Rights Reserved, Powered by <a href="#">PT Multipilar Balantika.</a></p>
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