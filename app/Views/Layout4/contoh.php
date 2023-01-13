<!DOCTYPE html>

<head>
    <base href="/" />
    <title>JADESTA - Jejaring Desa Wisata</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <meta http-equiv="content-type" content="text/html; charset=utf-8">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link rel="apple-touch-icon" sizes="57x57" href="/imgs/apple-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="60x60" href="/imgs/apple-icon-60x60.png">
    <link rel="apple-touch-icon" sizes="72x72" href="/imgs/apple-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="76x76" href="/imgs/apple-icon-76x76.png">
    <link rel="apple-touch-icon" sizes="114x114" href="/imgs/apple-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="120x120" href="/imgs/apple-icon-120x120.png">
    <link rel="apple-touch-icon" sizes="144x144" href="/imgs/apple-icon-144x144.png">
    <link rel="apple-touch-icon" sizes="152x152" href="/imgs/apple-icon-152x152.png">
    <link rel="apple-touch-icon" sizes="180x180" href="/imgs/apple-icon-180x180.png">
    <link rel="icon" type="image/png" sizes="192x192" href="/imgs/android-icon-192x192.png">
    <link rel="icon" type="image/png" sizes="32x32" href="/imgs/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="96x96" href="/imgs/favicon-96x96.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/imgs/favicon-16x16.png">
    <link rel="manifest" href="/imgs/manifest.json">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="/imgs/ms-icon-144x144.png">
    <meta name="theme-color" content="#ffffff">

    <meta content="Jejaring Desa Wisata" name="description">
    <meta content="Kementerian Pariwisata dan Ekonomi Kreatif Republik Indonesia" name="author">
    <meta content="Jejaring Desa Wisata, Jadesta, Kemenparekraf" name="keywords">

    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/main-color.css" id="colors">

    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-130935175-1"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());

        gtag('config', 'UA-130935175-1');
    </script>
    <style>
        nav.sosmed {
            display: block;
            position: fixed;
            width: 60px;
            top: 0px;
            left: 0px;
            margin-top: 140px;
            transition: all 0.3s linear;
            box-shadow: 2px 2px 8px 0px rgba(0, 0, 0, .4);
            z-index: 99999;
        }

        nav.sosmed ul {
            margin-top: 0;
            margin-bottom: 0rem
        }

        nav.sosmed li {
            height: 45px;
            position: relative
        }

        nav.sosmed li a {
            color: #fff !important;
            display: block;
            height: 100%;
            width: 100%;
            line-height: 45px;
            padding-left: 0%;
            border-bottom: 1px solid rgba(0, 0, 0, .4);
            transition: all .3s linear;
            text-decoration: none !important
        }

        nav.sosmed li:nth-child(1) a {
            background: #4267B2
        }

        nav.sosmed li:nth-child(2) a {
            background: #E1306C
        }

        nav.sosmed li:nth-child(3) a {
            background: #1DA1F2
        }

        nav.sosmed li:nth-child(4) a {
            background: #ff0000
        }

        nav.sosmed li:nth-child(5) a {
            background: #333
        }

        nav.sosmed li:nth-child(6) a {
            background: #ff0000
        }

        nav.sosmed li a i {
            position: absolute;
            top: 0px;
            left: 12px;
            font-size: 27px
        }

        nav.sosmed ul li a span {
            display: none;
            font-weight: bold;
            letter-spacing: 1px;
            text-transform: uppercase
        }

        nav.sosmed a:hover {
            z-index: 1;
            width: 240px;
            border-bottom: 1px solid rgba(0, 0, 0, .5);
            box-shadow: 0 0 1px 1px rgba(0, 0, 0, .3)
        }

        nav.sosmed ul li:hover a span {
            padding-left: 0%;
            display: block;
            font-size: 15px
        }

        nav.sosmed ul {
            padding-left: 15px;
            list-style-type: none;
            padding-inline-start: 0px;
            margin-block-start: 0px;
        }

        .R_title {
            background: rgba(0, 0, 0, 0.3);
            display: inline;
            padding: 3px 10px;
        }

        .caption-text {
            background: rgba(0, 0, 0, 0.3);
            display: inline;
            padding: 3px 10px;
        }

        .float {
            position: fixed;
            width: 60px;
            height: 60px;
            bottom: 20px;
            right: 80px;
            background-color: #25d366;
            color: #FFF;
            border-radius: 50px;
            text-align: center;
            font-size: 30px;
            box-shadow: 2px 2px 3px #999;
            z-index: 100;
        }

        .my-float {
            margin-top: 16px;
        }

        .fileremover {
            cursor: pointer;
            font-weight: bold;
            color: #cb100a;
        }
    </style>

</head>

<body class="">

    <div id="wrapper">

        <header id="header-container" class="fullwidth">
            <div id="header">
                <div class="container">
                    <div class="left-side">
                        <div id="logo">
                            <a href="/"><img src="img/pesonaindonesia.png" alt=""></a>
                        </div>
                        <div class="mmenu-trigger">
                            <button class="hamburger hamburger--collapse" type="button">
                                <span class="hamburger-box">
                                    <span class="hamburger-inner"></span>
                                </span>
                            </button>
                        </div>
                        <nav id="navigation" class="style-1">
                            <ul id="responsive">

                                <li>
                                    <a href="home" class="current">Home</a>
                                </li>
                                <li>
                                    <a href="peta" class="">Peta Sebaran</a>
                                </li>
                                <li>
                                    <a href="#" class="">Kategori <i class="la la-angle-down"></i></a>
                                    <ul class="dropdown-menu-item">
                                        <li><a href="/desa/kategori/71">Rintisan</a></li>
                                        <li><a href="/desa/kategori/72">Berkembang</a></li>
                                        <li><a href="/desa/kategori/73">Maju</a></li>
                                        <li><a href="/desa/kategori/74">Mandiri</a></li>
                                        <li><a href="/desa">Semua Kategori</a></li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="#" class="">Produk Wisata <i class="la la-angle-down"></i></a>
                                    <ul class="dropdown-menu-item">
                                        <li>
                                            <a href="#">Atraksi <i class="la la-plus"></i></a>
                                            <ul class="sub-menu">
                                                <li><a href="atraksi/jenis/59">Wisata Alam (3,941)</a></li>
                                                <li><a href="atraksi/jenis/60">Wisata Budaya (2,983)</a></li>
                                                <li><a href="atraksi/jenis/61">Wisata Buatan (1,604)</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="/paket/jenis/105">Edukasi</a></li>
                                        <li><a href="/paket/jenis/112">Kuliner</a></li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="#" class="">Informasi <i class="la la-angle-down"></i></a>
                                    <ul class="dropdown-menu-item">
                                        <li><a href="berita">Berita </a></li>
                                        <li><a href="berita/event">Event </a></li>
                                        <li><a href="direktori">Direktori </a></li>
                                        <li><a href="faq">Pertanyaan dan Jawaban </a></li>
                                        <li><a href="video50adwi2021">Video 50 Besar ADWI 2021 </a></li>
                                        <li><a href="video50adwi2022">Video 50 Besar ADWI 2022 </a></li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="#" class="">Forum <i class="la la-angle-down"></i></a>
                                    <ul class="dropdown-menu-item">
                                        <li><a href="/jejaring/16">ADWI 2022</a></li>
                                        <li><a href="/jejaring/15">ADWI 2021</a></li>
                                        <li><a href="/jejaring/14">Forum Jadesta</a></li>
                                    </ul>
                                </li>


                            </ul>
                        </nav>
                        <div class="clearfix"></div>
                    </div>
                    <div class="right-side">
                        <div class="header-widget">
                            <a href="/login" class="sign-in"><i class="sl sl-icon-login"></i> Login</a>
                            <a href="/daftar" class="sign-in margin-left-10"><i class="sl sl-icon-user"></i> Daftar</a>
                        </div>
                    </div>
                </div>
            </div>
        </header>
        <div class="clearfix"></div>



        <div id="rev_slider_4_1_wrapper" class="rev_slider_wrapper fullwidthbanner-container" data-alias="classicslider1" style="margin:0px auto;background-color:transparent;padding:0px;margin-top:0px;margin-bottom:0px;">

            <div id="rev_slider_4_1" class="rev_slider home fullwidthabanner" style="display:none;" data-version="5.0.7">
                <ul>

                    <!-- Slide  -->
                    <li data-index="rs-1" data-transition="fade" data-slotamount="default" data-easein="Power4.easeInOut" data-easeout="Power4.easeInOut" data-masterspeed="1000" data-rotate="0" data-fstransition="fade" data-fsmasterspeed="800" data-fsslotamount="7" data-saveperformance="off">

                        <!-- Background -->
                        <img src="/slider/slider19.jpg" alt="" data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat" data-bgparallax="10" class="rev-slidebg" data-no-retina data-kenburns="on" data-duration="12000" data-ease="Linear.easeNone" data-scalestart="100" data-scaleend="100" data-rotatestart="0" data-rotateend="0" data-offsetstart="0 0" data-offsetend="0 0">

                        <!-- Caption-->
                        <div class="tp-caption custom-caption-2 tp-shape tp-shapewrapper tp-resizeme rs-parallaxlevel-0" id="slide-1-layer-1" data-x="['left','left','left','left']" data-hoffset="['40','40','40','40']" data-y="['middle','middle','middle','middle']" data-voffset="['0']" data-width="['800','800', 800','800','800']" data-height="auto" data-whitespace="nowrap" data-transform_idle="o:1;" data-transform_in="y:0;opacity:0;s:1000;e:Power2.easeOutExpo;s:400;e:Power2.easeOutExpo" data-transform_out="" data-mask_in="x:0px;y:[20%];s:inherit;e:inherit;" data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;" data-start="1000" data-responsive_offset="on">

                            <!-- Caption Content -->
                            <div class="R_title margin-bottom-15" id="slide-2-layer-1" data-x="['left','center','center','center']" data-hoffset="['40','0','40','0']" data-y="['middle','middle','middle','middle']" data-voffset="['-40','-40','-20','-80']" data-fontsize="['42','36', '32','36','22']" data-lineheight="['70','60','60','45','35']" data-width="['800','800', 800','800','800']" data-height="none" data-whitespace="normal" data-transform_idle="o:1;" data-transform_in="y:-50px;sX:2;sY:2;opacity:0;s:1000;e:Power4.easeOut;" data-transform_out="opacity:0;s:300;" data-start="600" data-splitin="none" data-splitout="none" data-basealign="slide" data-responsive_offset="off" data-responsive="off" style="z-index: 6; color: #fff; letter-spacing: 0px; font-weight: 600; ">Selamat Datang</div>
                            <br />
                            <div class="caption-text">Jadesta sebagai wadah komunitas bagi Desa Wisata di seluruh Indonesia</div>
                            <br />
                            <a href="/peta" class="button medium">Jelajahi</a>
                        </div>

                    </li>

                    <!-- Slide  -->
                    <li data-index="rs-2" data-transition="fade" data-slotamount="default" data-easein="Power4.easeInOut" data-easeout="Power4.easeInOut" data-masterspeed="1000" data-rotate="0" data-fstransition="fade" data-fsmasterspeed="800" data-fsslotamount="7" data-saveperformance="off">

                        <!-- Background -->
                        <img src="/slider/slider11.jpg" alt="" data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat" data-bgparallax="10" class="rev-slidebg" data-no-retina data-kenburns="on" data-duration="12000" data-ease="Linear.easeNone" data-scalestart="100" data-scaleend="112" data-rotatestart="0" data-rotateend="0" data-offsetstart="0 0" data-offsetend="0 0">

                        <!-- Caption-->
                        <div class="tp-caption centered custom-caption-2 tp-shape tp-shapewrapper tp-resizeme rs-parallaxlevel-0" id="slide-1-layer-2" data-x="['center','center','center','center']" data-hoffset="['0']" data-y="['middle','middle','middle','middle']" data-voffset="['0']" data-width="['800','800', 800','800','800']" data-height="auto" data-whitespace="nowrap" data-transform_idle="o:1;" data-transform_in="y:0;opacity:0;s:1000;e:Power2.easeOutExpo;s:400;e:Power2.easeOutExpo" data-transform_out="" data-mask_in="x:0px;y:[20%];s:inherit;e:inherit;" data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;" data-start="1000" data-responsive_offset="on">

                            <!-- Caption Content -->
                            <div class="R_title margin-bottom-15" id="slide-2-layer-2" data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']" data-y="['middle','middle','middle','middle']" data-voffset="['-40','-40','-20','-80']" data-fontsize="['42','36', '32','36','22']" data-lineheight="['70','60','60','45','35']" data-width="['800','800', 800','800','800']" data-height="none" data-whitespace="normal" data-transform_idle="o:1;" data-transform_in="y:-50px;sX:2;sY:2;opacity:0;s:1000;e:Power4.easeOut;" data-transform_out="opacity:0;s:300;" data-start="600" data-splitin="none" data-splitout="none" data-basealign="slide" data-responsive_offset="off" data-responsive="off" style="z-index: 6; color: #fff; letter-spacing: 0px; font-weight: 600; ">Desa Wisata Bangkit</div>
                            <br />
                            <div class="caption-text">Secara terpadu mendorong transformasi sosial, budaya & ekonomi desa</div>
                            <br />
                            <a href="/peta" class="button medium">Jelajahi</a>
                        </div>

                    </li>

                    <!-- Slide  -->
                    <li data-index="rs-3" data-transition="fade" data-slotamount="default" data-easein="Power4.easeInOut" data-easeout="Power4.easeInOut" data-masterspeed="1000" data-rotate="0" data-fstransition="fade" data-fsmasterspeed="800" data-fsslotamount="7" data-saveperformance="off">

                        <!-- Background -->
                        <img src="/slider/slider18.jpg" alt="" data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat" data-bgparallax="10" class="rev-slidebg" data-no-retina data-kenburns="on" data-duration="12000" data-ease="Linear.easeNone" data-scalestart="100" data-scaleend="100" data-rotatestart="0" data-rotateend="0" data-offsetstart="0 0" data-offsetend="0 0">

                        <!-- Caption-->
                        <div class="tp-caption custom-caption-2 tp-shape tp-shapewrapper tp-resizeme rs-parallaxlevel-0" id="slide-3-layer-1" data-x="['right','right','right','right']" data-hoffset="['40','40','40','40']" data-y="['middle','middle','middle','middle']" data-voffset="['0']" data-width="['800','800', 800','800','800']" data-height="auto" data-whitespace="nowrap" data-transform_idle="o:1;" data-transform_in="y:0;opacity:0;s:1000;e:Power2.easeOutExpo;s:400;e:Power2.easeOutExpo" data-transform_out="" data-mask_in="x:0px;y:[20%];s:inherit;e:inherit;" data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;" data-start="1000" data-responsive_offset="on">

                            <!-- Caption Content -->
                            <div class="R_title margin-bottom-15" id="slide-3-layer-2" data-x="['right','right','right','right']" data-hoffset="['40','0','40','0']" data-y="['middle','middle','middle','middle']" data-voffset="['-40','-40','-20','-80']" data-fontsize="['42','36', '32','36','22']" data-lineheight="['70','60','60','45','35']" data-width="['800','800', 800','800','800']" data-height="none" data-whitespace="normal" data-transform_idle="o:1;" data-transform_in="y:-50px;sX:2;sY:2;opacity:0;s:1000;e:Power4.easeOut;" data-transform_out="opacity:0;s:300;" data-start="600" data-splitin="none" data-splitout="none" data-basealign="slide" data-responsive_offset="off" data-responsive="off" style="z-index: 6; color: #fff; letter-spacing: 0px; font-weight: 600; text-align:right">Yuk membangun Desa wisata</div>
                            <br />
                            <div class="caption-text" style="text-align:right">Memperluas manfaat ekonomi pariwisata bagi masyarakat lokal</div>
                            <br />
                            <a href="/peta" class="button medium" style="float:right">Jelajahi</a>
                        </div>

                    </li>

                    <!-- Slide  -->
                    <li data-index="rs-4" data-transition="fade" data-slotamount="default" data-easein="Power4.easeInOut" data-easeout="Power4.easeInOut" data-masterspeed="1000" data-rotate="0" data-fstransition="fade" data-fsmasterspeed="800" data-fsslotamount="7" data-saveperformance="off">

                        <!-- Background -->
                        <img src="/slider/slider12.jpg" alt="" data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat" data-bgparallax="10" class="rev-slidebg" data-no-retina data-kenburns="on" data-duration="12000" data-ease="Linear.easeNone" data-scalestart="100" data-scaleend="112" data-rotatestart="0" data-rotateend="0" data-offsetstart="0 0" data-offsetend="0 0">

                        <!-- Caption-->
                        <div class="tp-caption centered custom-caption-2 tp-shape tp-shapewrapper tp-resizeme rs-parallaxlevel-0" id="slide-4-layer-1" data-x="['center','center','center','center']" data-hoffset="['0']" data-y="['middle','middle','middle','middle']" data-voffset="['0']" data-width="['800','800', 800','800','800']" data-height="auto" data-whitespace="nowrap" data-transform_idle="o:1;" data-transform_in="y:0;opacity:0;s:1000;e:Power2.easeOutExpo;s:400;e:Power2.easeOutExpo" data-transform_out="" data-mask_in="x:0px;y:[20%];s:inherit;e:inherit;" data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;" data-start="1000" data-responsive_offset="on">

                            <!-- Caption Content -->
                            <div class="R_title margin-bottom-15" id="slide-4-layer-2" data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']" data-y="['middle','middle','middle','middle']" data-voffset="['-40','-40','-20','-80']" data-fontsize="['42','36', '32','36','22']" data-lineheight="['70','60','60','45','35']" data-width="['800','800', 800','800','800']" data-height="none" data-whitespace="normal" data-transform_idle="o:1;" data-transform_in="y:-50px;sX:2;sY:2;opacity:0;s:1000;e:Power4.easeOut;" data-transform_out="opacity:0;s:300;" data-start="600" data-splitin="none" data-splitout="none" data-basealign="slide" data-responsive_offset="off" data-responsive="off" style="z-index: 6; color: #fff; letter-spacing: 0px; font-weight: 600; ">Nggak perlu jauh berwisata</div>
                            <br />
                            <div class="caption-text">Desa wisata menyajikan keindahan, keharmonisan, dan kearifan budaya lokal</div>
                            <br />
                            <a href="/peta" class="button medium">Jelajahi</a>
                        </div>
                    </li>

                    <!-- Slide  -->
                    <li data-index="rs-5" data-transition="fade" data-slotamount="default" data-easein="Power4.easeInOut" data-easeout="Power4.easeInOut" data-masterspeed="1000" data-rotate="0" data-fstransition="fade" data-fsmasterspeed="800" data-fsslotamount="7" data-saveperformance="off">

                        <!-- Background -->
                        <img src="/slider/slider4.jpg" alt="" data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat" data-bgparallax="10" class="rev-slidebg" data-no-retina data-kenburns="on" data-duration="12000" data-ease="Linear.easeNone" data-scalestart="100" data-scaleend="100" data-rotatestart="0" data-rotateend="0" data-offsetstart="0 0" data-offsetend="0 0">

                        <!-- Caption-->
                        <div class="tp-caption custom-caption-2 tp-shape tp-shapewrapper tp-resizeme rs-parallaxlevel-0" id="slide-5-layer-1" data-x="['left','left','left','left']" data-hoffset="['40','40','40','40']" data-y="['middle','middle','middle','middle']" data-voffset="['0']" data-width="['800','800', 800','800','800']" data-height="auto" data-whitespace="nowrap" data-transform_idle="o:1;" data-transform_in="y:0;opacity:0;s:1000;e:Power2.easeOutExpo;s:400;e:Power2.easeOutExpo" data-transform_out="" data-mask_in="x:0px;y:[20%];s:inherit;e:inherit;" data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;" data-start="1000" data-responsive_offset="on">

                            <!-- Caption Content -->
                            <div class="R_title margin-bottom-15" id="slide-5-layer-2" data-x="['left','center','center','center']" data-hoffset="['40','0','40','0']" data-y="['middle','middle','middle','middle']" data-voffset="['-40','-40','-20','-80']" data-fontsize="['42','36', '32','36','22']" data-lineheight="['70','60','60','45','35']" data-width="['800','800', 800','800','800']" data-height="none" data-whitespace="normal" data-transform_idle="o:1;" data-transform_in="y:-50px;sX:2;sY:2;opacity:0;s:1000;e:Power4.easeOut;" data-transform_out="opacity:0;s:300;" data-start="600" data-splitin="none" data-splitout="none" data-basealign="slide" data-responsive_offset="off" data-responsive="off" style="z-index: 6; color: #fff; letter-spacing: 0px; font-weight: 600; ">Jejaring Desa Wisata</div>
                            <br />
                            <div class="caption-text">Wadah informasi, serta arah pengembangan desa wisata di Nusantara</div>
                            <br />
                            <a href="/peta" class="button medium">Jelajahi</a>
                        </div>

                    </li>

                    <!-- Slide  -->
                    <li data-index="rs-6" data-transition="fade" data-slotamount="default" data-easein="Power4.easeInOut" data-easeout="Power4.easeInOut" data-masterspeed="1000" data-rotate="0" data-fstransition="fade" data-fsmasterspeed="800" data-fsslotamount="7" data-saveperformance="off">

                        <!-- Background -->
                        <img src="/slider/slider11.jpg" alt="" data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat" data-bgparallax="10" class="rev-slidebg" data-no-retina data-kenburns="on" data-duration="12000" data-ease="Linear.easeNone" data-scalestart="100" data-scaleend="112" data-rotatestart="0" data-rotateend="0" data-offsetstart="0 0" data-offsetend="0 0">

                        <!-- Caption-->
                        <div class="tp-caption centered custom-caption-2 tp-shape tp-shapewrapper tp-resizeme rs-parallaxlevel-0" id="slide-6-layer-1" data-x="['right','right','right','right']" data-hoffset="['0']" data-y="['middle','middle','middle','middle']" data-voffset="['0']" data-width="['800','800', 800','800','800']" data-height="auto" data-whitespace="nowrap" data-transform_idle="o:1;" data-transform_in="y:0;opacity:0;s:1000;e:Power2.easeOutExpo;s:400;e:Power2.easeOutExpo" data-transform_out="" data-mask_in="x:0px;y:[20%];s:inherit;e:inherit;" data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;" data-start="1000" data-responsive_offset="on">

                            <!-- Caption Content -->
                            <div class="R_title margin-bottom-15" id="slide-6-layer-2" data-x="['right','right','right','right']" data-hoffset="['0','0','0','0']" data-y="['middle','middle','middle','middle']" data-voffset="['-40','-40','-20','-80']" data-fontsize="['42','36', '32','36','22']" data-lineheight="['70','60','60','45','35']" data-width="['800','800', 800','800','800']" data-height="none" data-whitespace="normal" data-transform_idle="o:1;" data-transform_in="y:-50px;sX:2;sY:2;opacity:0;s:1000;e:Power4.easeOut;" data-transform_out="opacity:0;s:300;" data-start="600" data-splitin="none" data-splitout="none" data-basealign="slide" data-responsive_offset="off" data-responsive="off" style="z-index: 6; color: #fff; letter-spacing: 0px; font-weight: 600; text-align:right">Cegah urbanisasi masyarakat</div>
                            <br />
                            <div class="caption-text">Masyarakat Desa sebagai tuan rumah melalui pembangunan pariwisata</div>
                            <br />
                            <a href="/peta" class="button medium" style="float:right">Jelajahi</a>
                        </div>

                    </li>


                </ul>
                <div class="tp-static-layers"></div>

            </div>
        </div>

        <div class="container margin-top-70">
            <div class="row">
                <div class="col-md-12">
                    <h3 class="headline centered margin-bottom-45">
                        <strong class="headline-with-separator">Rekomendasi Desa Wisata</strong>
                    </h3>
                </div>
                <div class="col-md-12">
                    <div class="simple-slick-carousel dots-nav">
                        <div class="carousel-item">
                            <a href="desa/batu_ampar" class="listing-item-container">
                                <div class="listing-item">
                                    <div class='listing-badge rank3'>100 Besar</div>
                                    <img src="imgpost/24351_medium.jpg" alt="">
                                    <div class="listing-item-content">
                                        <span class="list-item-tag73">Maju</span>
                                        <h3>Desa Wisata Batu Ampar <i class="verified-icon"></i></h3>
                                        <span>Kabupaten Kepahiang</span>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="carousel-item">
                            <a href="desa/kampung_tobati" class="listing-item-container">
                                <div class="listing-item">
                                    <div class='listing-badge rank4'>50 Besar</div>
                                    <img src="imgpost/19634_medium.jpg" alt="">
                                    <div class="listing-item-content">
                                        <span class="list-item-tag72">Berkembang</span>
                                        <h3>Desa Wisata Kampung Tobati <i class="verified-icon"></i></h3>
                                        <span>Kota Jayapura</span>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="carousel-item">
                            <a href="desa/taman_loang_baloq" class="listing-item-container">
                                <div class="listing-item">
                                    <div class='listing-badge rank4'>50 Besar</div>
                                    <img src="imgpost/29331_medium.jpg" alt="">
                                    <div class="listing-item-content">
                                        <span class="list-item-tag73">Maju</span>
                                        <h3>Desa Wisata Taman Loang Baloq <i class="verified-icon"></i></h3>
                                        <span>Kota Mataram</span>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="carousel-item">
                            <a href="desa/belitar_seberang" class="listing-item-container">
                                <div class="listing-item">
                                    <div class='listing-badge rank4'>50 Besar</div>
                                    <img src="imgpost/26943_medium.jpg" alt="">
                                    <div class="listing-item-content">
                                        <span class="list-item-tag72">Berkembang</span>
                                        <h3>Desa Wisata Belitar Seberang <i class="verified-icon"></i></h3>
                                        <span>Kabupaten Rejang Lebong</span>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="carousel-item">
                            <a href="desa/riam_tinggi" class="listing-item-container">
                                <div class="listing-item">
                                    <div class='listing-badge rank3'>100 Besar</div>
                                    <img src="imgpost/19523_medium.jpg" alt="">
                                    <div class="listing-item-content">
                                        <span class="list-item-tag72">Berkembang</span>
                                        <h3>Desa Wisata Riam Tinggi <i class="verified-icon"></i></h3>
                                        <span>Kabupaten Lamandau</span>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="carousel-item">
                            <a href="desa/penembang" class="listing-item-container">
                                <div class="listing-item">
                                    <div class='listing-badge rank3'>100 Besar</div>
                                    <img src="imgpost/17601_medium.jpg" alt="">
                                    <div class="listing-item-content">
                                        <span class="list-item-tag71">Rintisan</span>
                                        <h3>Desa Wisata Penembang <i class="verified-icon"></i></h3>
                                        <span>Kabupaten Bengkulu Tengah</span>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="carousel-item">
                            <a href="desa/keciput" class="listing-item-container">
                                <div class="listing-item">
                                    <div class='listing-badge rank3'>100 Besar</div>
                                    <img src="imgpost/27497_medium.jpg" alt="">
                                    <div class="listing-item-content">
                                        <span class="list-item-tag73">Maju</span>
                                        <h3>Desa Wisata Keciput <i class="verified-icon"></i></h3>
                                        <span>Kabupaten Belitung</span>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="carousel-item">
                            <a href="desa/barania" class="listing-item-container">
                                <div class="listing-item">
                                    <div class='listing-badge rank4'>50 Besar</div>
                                    <img src="imgpost/19429_medium.jpg" alt="">
                                    <div class="listing-item-content">
                                        <span class="list-item-tag72">Berkembang</span>
                                        <h3>Desa Wisata Barania <i class="verified-icon"></i></h3>
                                        <span>Kabupaten Sinjai</span>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="carousel-item">
                            <a href="desa/pela" class="listing-item-container">
                                <div class="listing-item">
                                    <div class='listing-badge rank4'>50 Besar</div>
                                    <img src="imgpost/24029_medium.jpg" alt="">
                                    <div class="listing-item-content">
                                        <span class="list-item-tag73">Maju</span>
                                        <h3>Desa Wisata Pela <i class="verified-icon"></i></h3>
                                        <span>Kabupaten Kutai Kartanegara</span>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="carousel-item">
                            <a href="desa/silokek" class="listing-item-container">
                                <div class="listing-item">
                                    <div class='listing-badge rank4'>50 Besar</div>
                                    <img src="imgpost/18357_medium.jpg" alt="">
                                    <div class="listing-item-content">
                                        <span class="list-item-tag72">Berkembang</span>
                                        <h3>Desa Wisata Silokek <i class="verified-icon"></i></h3>
                                        <span>Kabupaten Sijunjung</span>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="carousel-item">
                            <a href="desa/kampung_sauwandarek" class="listing-item-container">
                                <div class="listing-item">
                                    <div class='listing-badge rank3'>100 Besar</div>
                                    <img src="imgpost/17738_medium.jpg" alt="">
                                    <div class="listing-item-content">
                                        <span class="list-item-tag73">Maju</span>
                                        <h3>Desa Wisata Kampung Sauwandarek <i class="verified-icon"></i></h3>
                                        <span>Kabupaten Raja Ampat</span>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="carousel-item">
                            <a href="desa/soinrat" class="listing-item-container">
                                <div class="listing-item">
                                    <div class='listing-badge rank3'>100 Besar</div>
                                    <img src="imgpost/17382_medium.jpg" alt="">
                                    <div class="listing-item-content">
                                        <span class="list-item-tag72">Berkembang</span>
                                        <h3>Desa Wisata Soinrat <i class="verified-icon"></i></h3>
                                        <span>Kabupaten Maluku Tenggara</span>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="carousel-item">
                            <a href="desa/limbo_wolio" class="listing-item-container">
                                <div class="listing-item">
                                    <div class='listing-badge rank4'>50 Besar</div>
                                    <img src="imgpost/27814_medium.jpg" alt="">
                                    <div class="listing-item-content">
                                        <span class="list-item-tag71">Rintisan</span>
                                        <h3>Desa Wisata Limbo Wolio <i class="verified-icon"></i></h3>
                                        <span>Kota Baubau</span>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="carousel-item">
                            <a href="desa/hilisimaetano" class="listing-item-container">
                                <div class="listing-item">
                                    <div class='listing-badge rank4'>50 Besar</div>
                                    <img src="imgpost/28192_medium.jpg" alt="">
                                    <div class="listing-item-content">
                                        <span class="list-item-tag72">Berkembang</span>
                                        <h3>Desa Wisata Hilisimaetano <i class="verified-icon"></i></h3>
                                        <span>Kabupaten Nias Selatan</span>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="carousel-item">
                            <a href="desa/lonuo_bukit_arang" class="listing-item-container">
                                <div class="listing-item">
                                    <div class='listing-badge rank4'>50 Besar</div>
                                    <img src="imgpost/24019_medium.jpg" alt="">
                                    <div class="listing-item-content">
                                        <span class="list-item-tag72">Berkembang</span>
                                        <h3>Desa Wisata Lonuo (bukit Arang) <i class="verified-icon"></i></h3>
                                        <span>Kabupaten Bone Bolango</span>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="carousel-item">
                            <a href="desa/conto" class="listing-item-container">
                                <div class="listing-item">
                                    <div class='listing-badge rank3'>100 Besar</div>
                                    <img src="imgpost/29361_medium.jpg" alt="">
                                    <div class="listing-item-content">
                                        <span class="list-item-tag72">Berkembang</span>
                                        <h3>Desa Wisata Conto <i class="verified-icon"></i></h3>
                                        <span>Kabupaten Wonogiri</span>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="carousel-item">
                            <a href="desa/tondok_bakaru" class="listing-item-container">
                                <div class="listing-item">
                                    <div class='listing-badge rank4'>50 Besar</div>
                                    <img src="imgpost/17692_medium.jpg" alt="">
                                    <div class="listing-item-content">
                                        <span class="list-item-tag72">Berkembang</span>
                                        <h3>Desa Wisata Tondok Bakaru <i class="verified-icon"></i></h3>
                                        <span>Kabupaten Mamasa</span>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="carousel-item">
                            <a href="desa/buluh_duri" class="listing-item-container">
                                <div class="listing-item">
                                    <div class='listing-badge rank4'>50 Besar</div>
                                    <img src="imgpost/18466_medium.jpg" alt="">
                                    <div class="listing-item-content">
                                        <span class="list-item-tag73">Maju</span>
                                        <h3>Desa Wisata Buluh Duri <i class="verified-icon"></i></h3>
                                        <span>Kabupaten Serdang Bedagai</span>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="carousel-item">
                            <a href="desa/dayun" class="listing-item-container">
                                <div class="listing-item">
                                    <div class='listing-badge rank4'>50 Besar</div>
                                    <img src="imgpost/26890_medium.jpg" alt="">
                                    <div class="listing-item-content">
                                        <span class="list-item-tag73">Maju</span>
                                        <h3>Desa Wisata Dayun <i class="verified-icon"></i></h3>
                                        <span>Kabupaten S I A K</span>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="carousel-item">
                            <a href="desa/malangga" class="listing-item-container">
                                <div class="listing-item">
                                    <div class='listing-badge rank4'>50 Besar</div>
                                    <img src="imgpost/23991_medium.jpg" alt="">
                                    <div class="listing-item-content">
                                        <span class="list-item-tag73">Maju</span>
                                        <h3>Desa Wisata Malangga <i class="verified-icon"></i></h3>
                                        <span>Kabupaten Toli-toli</span>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-md-12 centered-content">
                    <a href="/desa" class="button margin-top-10">Jelajahi Desa Wisata Lainnya</a>
                </div>
            </div>
        </div>

        <div class="container margin-top-70">
            <div class="row">
                <div class="col-md-12">
                    <h3 class="headline centered margin-bottom-45">
                        <strong class="headline-with-separator">Atraksi Wisata</strong>
                    </h3>
                </div>
                <div class="col-md-12">
                    <div class="simple-slick-carousel dots-nav">
                        <div class="carousel-item">
                            <a href="atraksi/ritual_mandi_koneng" class="listing-item-container">
                                <div class="listing-item">
                                    <img src="imgpost/69629_medium.jpg" alt="">

                                    <span class="blog-item-tag">Wisata Budaya</span>
                                    <div class="listing-item-content">
                                        <h3>Ritual Mandi Koneng</h3>
                                        <span>Desa Wisata Kampung Adat Banceuy, Kabupaten Subang</span>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="carousel-item">
                            <a href="atraksi/paket_wisata_memancing" class="listing-item-container">
                                <div class="listing-item">
                                    <img src="imgpost/93629_medium.jpg" alt="">
                                    <div class='listing-badge rank2'>Rp 50,000</div>
                                    <span class="blog-item-tag">Wisata Alam</span>
                                    <div class="listing-item-content">
                                        <h3>Paket Wisata Memancing</h3>
                                        <span>Desa Wisata Budidaya Patin, Kabupaten Trenggalek</span>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="carousel-item">
                            <a href="atraksi/track_sepeda_downhill" class="listing-item-container">
                                <div class="listing-item">
                                    <img src="imgpost/22820_medium.jpg" alt="">

                                    <span class="blog-item-tag">Wisata Buatan</span>
                                    <div class="listing-item-content">
                                        <h3>Track Sepeda Downhill</h3>
                                        <span>Desa Wisata Karangtengah, Kabupaten Bantul</span>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="carousel-item">
                            <a href="atraksi/trekking_hutan__observasi_orangutan" class="listing-item-container">
                                <div class="listing-item">
                                    <img src="imgpost/79115_medium.jpg" alt="">
                                    <div class='listing-badge rank2'>Rp 100,000</div>
                                    <span class="blog-item-tag">Wisata Alam</span>
                                    <div class="listing-item-content">
                                        <h3>Trekking Hutan & Observasi Orangutan</h3>
                                        <span>Desa Wisata Sei Sekonyer, Kabupaten Kotawaringin Barat</span>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="carousel-item">
                            <a href="atraksi/penyewaan_trail_mini" class="listing-item-container">
                                <div class="listing-item">
                                    <img src="imgpost/71281_medium.jpg" alt="">

                                    <span class="blog-item-tag">Wisata Buatan</span>
                                    <div class="listing-item-content">
                                        <h3>Penyewaan Trail Mini</h3>
                                        <span>Desa Wisata Agrowisata, Kabupaten Kotawaringin Barat</span>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="carousel-item">
                            <a href="atraksi/taman_keseran" class="listing-item-container">
                                <div class="listing-item">
                                    <img src="imgpost/30863_medium.jpg" alt="">
                                    <div class='listing-badge rank2'>Rp 5,000</div>
                                    <span class="blog-item-tag">Wisata Buatan</span>
                                    <div class="listing-item-content">
                                        <h3>Taman Keseran</h3>
                                        <span>Desa Wisata Tanggeran - Taman Keseran, Kabupaten Brebes</span>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="carousel-item">
                            <a href="atraksi/outbond_wahana_tantangan" class="listing-item-container">
                                <div class="listing-item">
                                    <img src="imgpost/93854_medium.jpg" alt="">
                                    <div class='listing-badge rank2'>Rp 25,000</div>
                                    <span class="blog-item-tag">Wisata Buatan</span>
                                    <div class="listing-item-content">
                                        <h3>Outbond Wahana Tantangan</h3>
                                        <span>Desa Wisata Tempellemahbang, Kabupaten Blora</span>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="carousel-item">
                            <a href="atraksi/outbond_2" class="listing-item-container">
                                <div class="listing-item">
                                    <img src="imgpost/18714_medium.jpg" alt="">
                                    <div class='listing-badge rank2'>Rp 10,000</div>
                                    <span class="blog-item-tag">Wisata Alam</span>
                                    <div class="listing-item-content">
                                        <h3>Outbond</h3>
                                        <span>Desa Wisata Genilangit, Kabupaten Magetan</span>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="carousel-item">
                            <a href="atraksi/hikuk_halawang" class="listing-item-container">
                                <div class="listing-item">
                                    <img src="imgpost/62021_medium.jpg" alt="">

                                    <span class="blog-item-tag">Wisata Budaya</span>
                                    <div class="listing-item-content">
                                        <h3>Hikuk Halawang</h3>
                                        <span>Desa Wisata Nyelanding, Kabupaten Bangka Selatan</span>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="carousel-item">
                            <a href="atraksi/lomba_kolintang" class="listing-item-container">
                                <div class="listing-item">
                                    <img src="imgpost/69957_medium.jpg" alt="">
                                    <div class='listing-badge rank2'>Rp 100,000</div>
                                    <span class="blog-item-tag">Wisata Budaya</span>
                                    <div class="listing-item-content">
                                        <h3>Lomba Kolintang</h3>
                                        <span>Desa Wisata Sendangan, Kabupaten Minahasa</span>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="carousel-item">
                            <a href="atraksi/lapangan_olahraga" class="listing-item-container">
                                <div class="listing-item">
                                    <img src="imgpost/78222_medium.jpg" alt="">

                                    <span class="blog-item-tag">Wisata Buatan</span>
                                    <div class="listing-item-content">
                                        <h3>Lapangan Olahraga</h3>
                                        <span>Desa Wisata Lawang, Kabupaten Agam</span>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="carousel-item">
                            <a href="atraksi/pemandangan_sawah" class="listing-item-container">
                                <div class="listing-item">
                                    <img src="imgpost/91305_medium.jpg" alt="">

                                    <span class="blog-item-tag">Wisata Alam</span>
                                    <div class="listing-item-content">
                                        <h3>Pemandangan Sawah</h3>
                                        <span>Desa Wisata Woloara, Kabupaten Ende</span>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="carousel-item">
                            <a href="atraksi/kayu_gadang_sirantiah" class="listing-item-container">
                                <div class="listing-item">
                                    <img src="imgpost/75397_medium.jpg" alt="">
                                    <div class='listing-badge rank2'>Rp 20,000</div>
                                    <span class="blog-item-tag">Wisata Alam</span>
                                    <div class="listing-item-content">
                                        <h3>Kayu Gadang Sirantiah</h3>
                                        <span>Desa Wisata Koto Kaciak, Kabupaten Agam</span>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="carousel-item">
                            <a href="atraksi/sport_center_kolam_renang_lapangan_futsal" class="listing-item-container">
                                <div class="listing-item">
                                    <img src="imgpost/72683_medium.jpg" alt="">
                                    <div class='listing-badge rank2'>Rp 50,000</div>
                                    <span class="blog-item-tag">Wisata Buatan</span>
                                    <div class="listing-item-content">
                                        <h3>Sport Center (kolam Renang, Lapangan Futsal)</h3>
                                        <span>Desa Wisata Glamping Rindu Hati, Kabupaten Bengkulu Tengah</span>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="carousel-item">
                            <a href="atraksi/river_tubing_9" class="listing-item-container">
                                <div class="listing-item">
                                    <img src="imgpost/29338_medium.jpg" alt="">
                                    <div class='listing-badge rank2'>Rp 8,000</div>
                                    <span class="blog-item-tag">Wisata Alam</span>
                                    <div class="listing-item-content">
                                        <h3>River Tubing</h3>
                                        <span>Desa Wisata Bara Indah Permai Pastap Julu, Kabupaten Mandailing Natal</span>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="carousel-item">
                            <a href="atraksi/kerajinan_batik" class="listing-item-container">
                                <div class="listing-item">
                                    <img src="imgpost/79436_medium.jpg" alt="">
                                    <div class='listing-badge rank2'>Rp 150,000</div>
                                    <span class="blog-item-tag">Wisata Budaya</span>
                                    <div class="listing-item-content">
                                        <h3>Kerajinan Batik</h3>
                                        <span>Desa Wisata Curuggoong, Kabupaten Serang</span>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="carousel-item">
                            <a href="atraksi/kandang_kang_im" class="listing-item-container">
                                <div class="listing-item">
                                    <img src="imgpost/21857_medium.jpg" alt="">
                                    <div class='listing-badge rank2'>Rp 25,000</div>
                                    <span class="blog-item-tag">Wisata Alam</span>
                                    <div class="listing-item-content">
                                        <h3>Kandang Kang Im</h3>
                                        <span>Desa Wisata Ngargoretno, Kabupaten Magelang</span>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="carousel-item">
                            <a href="atraksi/menikmati_sunset_di_puncak_tabura" class="listing-item-container">
                                <div class="listing-item">
                                    <img src="imgpost/19084_medium.jpg" alt="">

                                    <span class="blog-item-tag">Wisata Alam</span>
                                    <div class="listing-item-content">
                                        <h3>Menikmati Sunset Di Puncak Tabura</h3>
                                        <span>Desa Wisata Taman Bukit Raya ( Tabura ), Kabupaten Pesawaran</span>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-md-12 centered-content">
                    <a href="/atraksi" class="button margin-top-10">Jelajahi Atraksi Lainnya</a>
                </div>
            </div>
        </div>

        <div class="container margin-top-70">
            <div class="row">
                <div class="col-md-12">
                    <h3 class="headline centered margin-bottom-45">
                        <strong class="headline-with-separator">Produk Wisata</strong>
                    </h3>
                </div>
                <div class="col-md-12">
                    <div class="simple-slick-carousel dots-nav">
                        <div class="carousel-item">
                            <a href="paket/ngopi_santai" class="listing-item-container">
                                <div class="listing-item">
                                    <img src="imgpost/80150_medium.jpg" alt="">

                                    <span class="blog-item-tag">Edukasi</span>
                                    <div class="listing-item-content">
                                        <h3>Ngopi Santai</h3>
                                        <span>Desa Wisata Bioa Putiak, Kabupaten Lebong</span>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="carousel-item">
                            <a href="paket/paket_wisata_budaya_sejarah_half_day_tour" class="listing-item-container">
                                <div class="listing-item">
                                    <img src="imgpost/83147_medium.jpg" alt="">
                                    <div class='listing-badge rank2'>Rp 150,000</div>
                                    <span class="blog-item-tag">Edukasi</span>
                                    <div class="listing-item-content">
                                        <h3>Paket Wisata Budaya Sejarah Half Day Tour</h3>
                                        <span>Desa Wisata Kampong Melayu Bml, Kota Pontianak</span>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="carousel-item">
                            <a href="paket/tarian_topeng" class="listing-item-container">
                                <div class="listing-item">
                                    <img src="imgpost/89701_medium.jpg" alt="">
                                    <div class='listing-badge rank2'>Rp 5,000,000</div>
                                    <span class="blog-item-tag">Edukasi</span>
                                    <div class="listing-item-content">
                                        <h3>Tarian Topeng</h3>
                                        <span>Desa Wisata Mas, Kabupaten Gianyar</span>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="carousel-item">
                            <a href="paket/buah_rambutan" class="listing-item-container">
                                <div class="listing-item">
                                    <img src="imgpost/83366_medium.jpg" alt="">
                                    <div class='listing-badge rank2'>Rp 15,000</div>
                                    <span class="blog-item-tag">Kuliner</span>
                                    <div class="listing-item-content">
                                        <h3>Buah Rambutan</h3>
                                        <span>Desa Wisata Dermaga Desa Pasi-pasi, Kabupaten Luwu Timur</span>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="carousel-item">
                            <a href="paket/paket_wisata_edukasi_resik_resik_eceng_gondok" class="listing-item-container">
                                <div class="listing-item">
                                    <img src="imgpost/89728_medium.jpg" alt="">
                                    <div class='listing-badge rank2'>Rp 20,000</div>
                                    <span class="blog-item-tag">Edukasi</span>
                                    <div class="listing-item-content">
                                        <h3>Paket Wisata Edukasi Resik Resik Eceng Gondok</h3>
                                        <span>Desa Wisata Jamalsari Kedungpane, Kota Semarang</span>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="carousel-item">
                            <a href="paket/sirup_jeruk_gerga" class="listing-item-container">
                                <div class="listing-item">
                                    <img src="imgpost/80557_medium.jpg" alt="">

                                    <span class="blog-item-tag">Kuliner</span>
                                    <div class="listing-item-content">
                                        <h3>Sirup Jeruk Gerga</h3>
                                        <span>Desa Wisata Green Cannyon Bengkulu, Kabupaten Lebong</span>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="carousel-item">
                            <a href="paket/paket_one_day_kkd" class="listing-item-container">
                                <div class="listing-item">
                                    <img src="imgpost/85537_medium.jpg" alt="">
                                    <div class='listing-badge rank2'>Rp 85,000</div>
                                    <span class="blog-item-tag">Edukasi</span>
                                    <div class="listing-item-content">
                                        <h3>Paket One Day Kkd</h3>
                                        <span>Desa Wisata Kampung Dosan, Kabupaten S I A K</span>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="carousel-item">
                            <a href="paket/tasbih" class="listing-item-container">
                                <div class="listing-item">
                                    <img src="imgpost/59432_medium.jpg" alt="">
                                    <div class='listing-badge rank2'>Rp 5,000</div>
                                    <span class="blog-item-tag">Edukasi</span>
                                    <div class="listing-item-content">
                                        <h3>Tasbih</h3>
                                        <span>Desa Wisata Taman Wisata Edukasi Religi Kebangsaan Desa Jango, Kabupaten Lombok Tengah</span>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="carousel-item">
                            <a href="paket/madu_teran" class="listing-item-container">
                                <div class="listing-item">
                                    <img src="imgpost/26938_medium.jpg" alt="">
                                    <div class='listing-badge rank2'>Rp 35,000</div>
                                    <span class="blog-item-tag">Kuliner</span>
                                    <div class="listing-item-content">
                                        <h3>Madu Teran</h3>
                                        <span>Desa Wisata Pesisir Tanjung Rusa, Kabupaten Belitung</span>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="carousel-item">
                            <a href="paket/paket_wisata_live_in_deswita_dieng_kulon" class="listing-item-container">
                                <div class="listing-item">
                                    <img src="imgpost/35502_medium.jpg" alt="">
                                    <div class='listing-badge rank2'>Rp 250,000</div>
                                    <span class="blog-item-tag">Edukasi</span>
                                    <div class="listing-item-content">
                                        <h3>Paket Wisata Live In Deswita Dieng Kulon</h3>
                                        <span>Desa Wisata Dieng Kulon, Kabupaten Banjarnegara</span>
                                    </div>
                                </div>
                            </a>
                        </div>

                    </div>
                </div>
                <div class="col-md-12 centered-content">
                    <a href="/paket" class="button margin-top-10">Jelajahi Produk Wisata Lainnya</a>
                </div>
            </div>
        </div>

        <section class="fullwidth margin-top-0 padding-top-75 padding-bottom-75" data-background-color="#fff">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <h3 class="headline centered margin-bottom-55">
                            <strong class="headline-with-separator">Berita Terbaru</strong>
                        </h3>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4">
                        <a href="/berita/17050" class="blog-compact-item-container">
                            <div class="blog-compact-item">
                                <img src="imgpost/17050.jpg" alt="">
                                <div class="blog-compact-item-content">
                                    <ul class="blog-post-tags">
                                        <li>18 February 2022</li>
                                    </ul>
                                    <h3>MotoGP-Superbike Bisa Berdampak bagi Desa Wisata</h3>

                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-md-4">
                        <a href="/berita/17052" class="blog-compact-item-container">
                            <div class="blog-compact-item">
                                <img src="imgpost/17052.jpg" alt="">
                                <div class="blog-compact-item-content">
                                    <ul class="blog-post-tags">
                                        <li>18 February 2022</li>
                                    </ul>
                                    <h3>Sandiaga Uno Sebut Ada 1.831 Desa Wisata yang Berpotensi Tarik Wisatawan</h3>

                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-md-4">
                        <a href="/berita/17535" class="blog-compact-item-container">
                            <div class="blog-compact-item">
                                <img src="imgpost/17535.jpg" alt="">
                                <div class="blog-compact-item-content">
                                    <ul class="blog-post-tags">
                                        <li>18 February 2022</li>
                                    </ul>
                                    <h3>Fokus Indonesia dalam Tourism Working Group G20 </h3>

                                </div>
                            </div>
                        </a>
                    </div>

                    <div class="col-md-12 centered-content">
                        <a href="/berita" class="button margin-top-10">Berita Lainnya</a>
                    </div>
                </div>
            </div>
        </section>

        <section class="fullwidth border-top padding-bottom-30">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="boxed-photo-banner">
                            <!-- Infobox -->
                            <div class="boxed-photo-banner-text">
                                <h2>Dapatkan Update Informasi</h2>
                                <p>Masukkan alamat email Anda</p>
                                <div class="subscriber-box">
                                    <div class="contact-form-action">

                                        <form method="post" action="newsletter" name="newsletter" id="newsletter" autocomplete="on">

                                            <div class="row">
                                                <div class="col-md-8">
                                                    <div>
                                                        <input name="email" type="email" id="email" placeholder="Alamat Email" pattern="^[A-Za-z0-9](([_\.\-]?[a-zA-Z0-9]+)*)@([A-Za-z0-9]+)(([\.\-]?[a-zA-Z0-9]+)*)\.([A-Za-z]{2,})$" required="required" />
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <div>
                                                        <input type="submit" name="submit" class="submit button" id="submit" value="Subscribe" />
                                                    </div>
                                                </div>
                                            </div>


                                        </form>

                                    </div>
                                </div><!-- end section-heading -->
                            </div>
                            <!-- Infobox / End -->
                            <img src="images/35858.jpeg" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </section>


        <div id="footer" class="dark">

            <div class="container">
                <div class="row">
                    <div class="col-md-3 col-sm-6">
                        <img class="footer-logo" src="img/deswit_white.png" alt="" style="width:148px" /><br /><br />
                        <img class="footer-logo" src="img/jadestawhite.png" alt="" style="width:148px" />
                        <div class="text-widget">
                            <span>Jejaring Desa Wisata</span> <br>
                        </div>
                        <br><br>
                    </div>

                    <div class="col-md-6 col-sm-6 ">
                        <h4>Desa Wisata</h4>
                        <ul class="footer-links">
                            <li><a href="desa/kategori/71">Rintisan</a></li>
                            <li><a href="desa/kategori/72">Berkembang</a></li>
                            <li><a href="desa/kategori/73">Maju</a></li>
                            <li><a href="desa/kategori/74">Mandiri</a></li>
                            <li><a href="desa">Pencarian Desa Wisata</a></li>
                        </ul>

                        <ul class="footer-links">
                            <li><a href="atraksi/jenis/59">Wisata Alam</a></li>
                            <li><a href="atraksi/jenis/60">Wisata Budaya</a></li>
                            <li><a href="atraksi/jenis/61">Wisata Buatan</a></li>
                            <li><a href="atraksi">Pencarian Atraksi</a></li>
                        </ul>

                        <div class="clearfix"></div>
                    </div>

                    <div class="col-md-3 col-sm-12">
                        <h4>Hubungi Kami</h4>
                        <div class="text-widget">
                            <i class="fa fa-whatsapp"></i> <span><a href="https://wa.me/6281210002190">0812-1000-2190</a> </span><br>
                            <i class="fa fa-envelope-o"></i> <span> <a href="#">info@jadesta.com</a> </span><br>
                        </div>

                        <ul class="social-icons margin-top-20">
                            <li><a class="facebook" href="https://www.facebook.com/Jejaring-Desa-Wisata-100361435540103"><i class="icon-facebook"></i></a></li>
                            <li><a class="twitter" href="https://twitter.com/jadestaofficial"><i class="icon-twitter"></i></a></li>
                            <li><a class="instagram" href="https://www.instagram.com/jadesta.official"><i class="icon-instagram"></i></a></li>
                            <li><a class="youtube" href="https://www.youtube.com/channel/UCZZiOB4JImoIzWfof3oOB3g"><i class="icon-youtube"></i></a></li>
                        </ul>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="copyrights">
                            KEMENTERIAN PARIWISATA DAN EKONOMI KREATIF / BADAN PARIWISATA DAN EKONOMI KREATIF<br />
                            &copy; 2022
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div id="backtotop"><a href="#"></a></div>
    </div>

    <a href="https://api.whatsapp.com/send?phone=6281210002190&text=Halo+Jadesta,+kami+dari+" class="float" target="_blank">
        <i class="fa fa-whatsapp my-float"></i>
    </a>

    <nav class="sosmed" id="divsosmed">
        <ul>
            <li>
                Close <span class="fileremover">X</span>
                <a href="https://sertidewi.jadesta.kemenparekraf.go.id/"><img src="/images/sertifikasi.png" width="240px" /></a>
            </li>
        </ul>
    </nav>

    <script type="text/javascript" src="scripts/jquery-3.6.0.min.js"></script>
    <script type="text/javascript" src="scripts/jquery-migrate-3.3.2.min.js"></script>
    <script type="text/javascript" src="scripts/mmenu.min.js"></script>
    <script type="text/javascript" src="scripts/chosen.min.js"></script>
    <script type="text/javascript" src="scripts/slick.min.js"></script>
    <script type="text/javascript" src="scripts/rangeslider.min.js"></script>
    <script type="text/javascript" src="scripts/magnific-popup.min.js"></script>
    <script type="text/javascript" src="scripts/waypoints.min.js"></script>
    <script type="text/javascript" src="scripts/counterup.min.js"></script>
    <script type="text/javascript" src="scripts/jquery-ui.min.js"></script>
    <script type="text/javascript" src="scripts/tooltips.min.js"></script>
    <script type="text/javascript" src="scripts/custom.js"></script>
    <script>
        $(function() {
            "use strict";
            $(".fileremover").on("click", function(e) {
                e.preventDefault();
                $("#divsosmed").css('display', 'none');
            });
        });
    </script>

    <script src="https://www.gstatic.com/firebasejs/8.3.0/firebase-app.js"></script>
    <script src="https://www.gstatic.com/firebasejs/8.3.0/firebase-analytics.js"></script>
    <script src="https://www.gstatic.com/firebasejs/8.3.0/firebase-auth.js"></script>
    <script src="https://www.gstatic.com/firebasejs/8.3.0/firebase-firestore.js"></script>

    <script>
        var isauto = false;
        // Your web app's Firebase configuration
        var firebaseConfig = {
            apiKey: "AIzaSyBG3y2u9K__Au5jYUMukVHZ8fI-MttCRxQ",
            authDomain: "jadesta-181605.firebaseapp.com",
            databaseURL: "https://jadesta-181605.firebaseio.com",
            projectId: "jadesta-181605",
            storageBucket: "jadesta-181605.appspot.com",
            messagingSenderId: "728028849720",
            appId: "1:728028849720:web:8a814378dfc15c390568cd"
        };
        // Initialize Firebase
        firebase.initializeApp(firebaseConfig);
        firebase.auth().languageCode = 'id';

        firebase.auth().onAuthStateChanged(function(user) {
            if (user) {
                isauto = true;
                goLogin(user, user.uid);
            } else {
                // No user is signed in.
            }
        });



        function checkDaftar() {
            var email = $("#regemail").val();
            var pass1 = $("#regpwd").val();
            var pass2 = $("#regpwd2").val();
            if (email == '') {
                alert('Invalid email');
                return;
            }
            if (pass1 == '') {
                alert('Invalid password');
                return;
            }
            if (pass1 != pass2) {
                alert('Kedua password tidak sama');
                return;
            }

            var jenis = $('input[name="jenis"]:checked').val();
            var idprov = $('#idprov').val();
            var idkota = $('#idkota').val();
            var namadesa = $('#namadesa').val();
            var namapopuler = $('#namapopuler').val();
            var alamat = $('#alamat').val();
            var pengelola = $('#pengelola').val();
            var msisdn = $('#msisdn').val();

            if (jenis == 0) {
                if (idprov == '' || idkota == '') {
                    alert('Silakan pilih provinsi dan kabupaten/kota');
                    return;
                }
                if (namadesa == '' || namapopuler == '' || alamat == '' || pengelola == '' || msisdn == '') {
                    alert('Silakan isi data dengan lengkap');
                    return;
                }
            } else {
                if (idprov == '') {
                    alert('Silakan pilih provinsi');
                    return;
                }
                if (jenis == 1 && idkota == '') {
                    alert('Silakan pilih kabupaten/kota');
                    return;
                }
            }
            $("#btnsubmit").prop('disabled', true);

            firebase.auth().createUserWithEmailAndPassword(email, pass1)
                .then((userCredential) => {
                    $("#btnsubmit").prop('disabled', false);
                    var user = userCredential.user;

                    user.sendEmailVerification().then(function() {
                        goSave(userCredential.user, userCredential.user.uid);
                    }).catch(function(error) {
                        alert(error.message);
                    });

                })
                .catch((error) => {
                    $("#btnsubmit").prop('disabled', false);
                    alert(error.message);
                });
        }

        function checkLogin() {
            var email = $("#logemail").val();
            var pass = $("#logpwd").val();
            if (email == '') {
                alert('Invalid email');
                return;
            }
            if (pass == '') {
                alert('Invalid password');
                return;
            }
            $("#btnsubmit").prop('disabled', true);

            firebase.auth().signInWithEmailAndPassword(email, pass)
                .then((userCredential) => {
                    $("#btnsubmit").prop('disabled', false);
                    var user = userCredential.user;
                    if (!user.emailVerified) {
                        if (user.email.startsWith('juri')) {
                            goLogin(userCredential.user, userCredential.user.uid);
                        } else
                        if (confirm("Email belum terverifikasi, kirim ulang verifikasi?")) {
                            user.sendEmailVerification().then(function() {
                                alert('Verifikasi telah dikirim ke email ' + user.email + ", silakan periksa email Anda");
                                location.href = '/home';
                            }).catch(function(error) {
                                alert(error.message);
                            });
                        }
                    } else {
                        goLogin(userCredential.user, userCredential.user.uid);
                    }
                })
                .catch((error) => {
                    $("#btnsubmit").prop('disabled', false);
                    alert(error.message);
                });
        }

        function goSave(user, token) {
            var jenis = $('input[name="jenis"]:checked').val();
            var idprov = $('#idprov').val();
            var idkota = $('#idkota').val();
            var namadesa = $('#namadesa').val();
            var namapopuler = $('#namapopuler').val();
            var alamat = $('#alamat').val();
            var pengelola = $('#pengelola').val();
            var msisdn = $('#msisdn').val();

            $.post('checkacc', {
                nama: user.displayName,
                email: user.email,
                foto: user.photoURL,
                token: token,
                jenis: jenis,
                idprov: idprov,
                idkota: idkota,
                namadesa: namadesa,
                namapopuler: namapopuler,
                alamat: alamat,
                pengelola: pengelola,
                msisdn: msisdn
            }, function(data) {
                if (data.ok == '1') {
                    alert('Silakan periksa email Anda, verifikasi telah dikirim ke email ' + user.email);
                    firebase.auth().signOut().then(() => {
                        location.href = '/';
                    }).catch((error) => {
                        // An error happened.
                    });
                } else {
                    alert(data.errmsg);
                    firebase.auth().signOut().then(() => {

                    }).catch((error) => {
                        // An error happened.
                    });
                }

            }, 'json');
        }

        function goLogin(user, token) {
            var jenis = $('input[name="jenis"]:checked').val();
            var idprov = $('#idprov').val();
            var idkota = $('#idkota').val();
            $.post('checkacc', {
                nama: user.displayName,
                email: user.email,
                verified: user.emailVerified ? 1 : 0,
                foto: user.photoURL,
                token: token,
                jenis: jenis,
                idprov: idprov,
                idkota: idkota
            }, function(data) {
                if (data.ok == '1')
                    location.href = 'dashboard';
                else {
                    alert(data.errmsg);
                    firebase.auth().signOut().then(() => {

                    }).catch((error) => {
                        // An error happened.
                    });
                }
            }, 'json');
        }

        function doLoginFB() {
            var provider = new firebase.auth.FacebookAuthProvider();
            doLogin(provider);
        }

        function doLoginGoogle() {
            var provider = new firebase.auth.GoogleAuthProvider();
            doLogin(provider);
        }

        function doLoginTwitter() {
            var provider = new firebase.auth.TwitterAuthProvider();
            doLogin(provider);
        }

        function doForgot() {
            var email = prompt('Masukkan email saat pendaftaran', '');
            if (email != '') {
                var auth = firebase.auth();
                auth.sendPasswordResetEmail(email).then(function() {
                    alert('Email reset password telah dikirim ke ' + email);
                }).catch(function(error) {
                    alert(error.message);
                });
            }
        }

        function updatePassword() {
            var newpass = prompt('Masukkan password baru', '');
            if (newpass != '') {
                firebase.auth().currentUser.updatePassword(newpass).then(function() {
                    alert('Password berhasil diganti');
                }).catch(function(err) {
                    alert(err.message);
                });
            }
            return false;
        }

        function doReset(email) {
            var auth = firebase.auth();
            auth.sendPasswordResetEmail(email).then(function() {
                alert('Email reset password telah dikirim ke ' + email);
            }).catch(function(error) {
                alert(error.message);
            });
        }

        function doLogin(provider) {

            firebase
                .auth()
                .signInWithPopup(provider)
                .then((result) => {
                    goLogin(result.user, result.user.uid);
                })
                .catch((error) => {
                    alert(error.message);
                });
        }
    </script>

    <script type="text/javascript">
        $(function() {
            "use strict";

            $(".btnFB").click(function(e) {
                e.preventDefault();
                doLoginFB();
            });
            $(".btnGoogle").click(function(e) {
                e.preventDefault();
                doLoginGoogle();
            });
            $(".btnTwitter").click(function(e) {
                e.preventDefault();
                doLoginTwitter();
            });
            $("#btnForgot").click(function(e) {
                e.preventDefault();
                doForgot();
            });
        });
    </script>

    <script type="text/javascript" src="scripts/themepunch.tools.min.js"></script>
    <script type="text/javascript" src="scripts/themepunch.revolution.min.js"></script>

    <script type="text/javascript">
        var tpj = jQuery;
        var revapi4;
        tpj(document).ready(function() {
            if (tpj("#rev_slider_4_1").revolution == undefined) {
                revslider_showDoubleJqueryError("#rev_slider_4_1");
            } else {
                revapi4 = tpj("#rev_slider_4_1").show().revolution({
                    sliderType: "standard",
                    jsFileLocation: "scripts/",
                    sliderLayout: "auto",
                    dottedOverlay: "none",
                    delay: 9000,
                    navigation: {
                        keyboardNavigation: "off",
                        keyboard_direction: "horizontal",
                        mouseScrollNavigation: "off",
                        onHoverStop: "on",
                        touch: {
                            touchenabled: "on",
                            swipe_threshold: 75,
                            swipe_min_touches: 1,
                            swipe_direction: "horizontal",
                            drag_block_vertical: false
                        },
                        arrows: {
                            style: "zeus",
                            enable: true,
                            hide_onmobile: true,
                            hide_under: 600,
                            hide_onleave: true,
                            hide_delay: 200,
                            hide_delay_mobile: 1200,
                            tmp: '<div class="tp-title-wrap"></div>',
                            left: {
                                h_align: "left",
                                v_align: "center",
                                h_offset: 40,
                                v_offset: 0
                            },
                            right: {
                                h_align: "right",
                                v_align: "center",
                                h_offset: 40,
                                v_offset: 0
                            }
                        },
                        bullets: {
                            enable: false,
                            hide_onmobile: true,
                            hide_under: 600,
                            style: "hermes",
                            hide_onleave: true,
                            hide_delay: 200,
                            hide_delay_mobile: 1200,
                            direction: "horizontal",
                            h_align: "center",
                            v_align: "bottom",
                            h_offset: 0,
                            v_offset: 32,
                            space: 5,
                            tmp: ''
                        }
                    },
                    viewPort: {
                        enable: true,
                        outof: "pause",
                        visible_area: "80%"
                    },
                    responsiveLevels: [1200, 992, 768, 480],
                    visibilityLevels: [1200, 992, 768, 480],
                    gridwidth: [1180, 1024, 778, 480],
                    gridheight: [640, 500, 400, 300],
                    lazyType: "none",
                    parallax: {
                        type: "mouse",
                        origo: "slidercenter",
                        speed: 2000,
                        levels: [2, 3, 4, 5, 6, 7, 12, 16, 10, 25, 47, 48, 49, 50, 51, 55],
                        type: "mouse",
                    },
                    shadow: 0,
                    spinner: "off",
                    stopLoop: "off",
                    stopAfterLoops: -1,
                    stopAtSlide: -1,
                    shuffle: "off",
                    autoHeight: "off",
                    hideThumbsOnMobile: "off",
                    hideSliderAtLimit: 0,
                    hideCaptionAtLimit: 0,
                    hideAllCaptionAtLilmit: 0,
                    debugMode: false,
                    fallbacks: {
                        simplifyAll: "off",
                        nextSlideOnWindowFocus: "off",
                        disableFocusListener: false,
                    }
                });
            }
        }); /*ready*/
    </script>

</body>

</html>