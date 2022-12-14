@extends('master2')
@section('css')
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />

    <style>
        @media screen and (max-width: 996px) {
            .slider-element {
                min-height: 60vh !important;
            }
        }
    </style>
@endsection
@section('banner')
    <section id="slider" class="detect-sect slider-element min-vh-100 bgchanger include-header"
        style="background-color: #de1d38 ; background-image: url('{{ asset('images/watch-bg.png') }}'); background-position: center center; background-size: cover;">
        <div class="slider-inner">

            <div class="vertical-middle slider-element-fade">
                <div class="container py-5">
                    <div class="row align-items-center justify-content-center mt-3">
                        <div class=" col-lg-6 order-lg-1 order-2 text-center text-md-start">
                            <div class="emphasis-title mb-0">

                                <h2 class="mt-2 fw-semibold "
                                    style=" color: white; line-height: 1.3; letter-spacing: -2px;">
                                    Mengapa Brand Anda Perlu
                                    Bergabung Dengan Kagumi?
                                </h2>
                                <span class=" mt-3 d-block details-banner" style="color: white">Kagumi hadir untuk membantu
                                    serta membangun sebuah brand melalui komunitas yang loyal dengan Digital Activation
                                    sehingga dapat
                                    mencapai <i>Key Performance Indicator</i> (KPI) yang ditargetkan. </span>
                                <div class="d-flex justify-content-lg-start justify-content-center">
                                    <a href="#" data-animate="fadeInUp" data-delay="600"
                                        class="button button-circle btn-gold button-light btn-join button-large text-white mt-4 mr-md-3 mr-0 nott ls0">Join
                                        Now</a>
                                    {{-- <a href="#" data-animate="fadeInUp" data-delay="600"
                                        class="button button-circle btn-white-alt button-light btn-client  button-large text-white mt-md-4 mt-3 nott ls0">Our
                                        Client</a> --}}
                                    <a href="#" data-animate="fadeInUp" data-delay="600"
                                        class="button button-circle btn-white-alt button-light btn-client button-large text-white mt-4 mr-md-3 mr-0 nott ls0">Our
                                        Client</a>
                                </div>

                            </div>
                        </div>

                        <div class=" col-lg-6 col-md-9 mb-lg-0 mb-4 order-lg-2 order-1 ">
                            <!-- <div id="oc-watch" class="owl-carousel carousel-widget" data-margin="0" data-nav="false"
                                                    data-pagi="true" data-items="1" data-autoplay="5000" data-speed="1000" data-loop="true">


                                                </div>

                                                {{-- <div id="oc-watch-bg"
                                style="background: #E25B45; width: 360px; height: 360px; position: absolute; top: 50%; left: 50%; transform: translate(-50%, -50%); opacity: 1; border-radius: 50%;">
                            </div> --}} -->
                            <div class="swiper mySwiper">
                                <div class="swiper-wrapper">
                                    <div class="swiper-slide">
                                        <img src="{{ asset('images/banner/digital-activation.png') }}?v=1.00.0"
                                            alt="Watch">

                                    </div>
                                    
                                    <div class="swiper-slide">
                                        <img src="{{ asset('images/banner/tiktok-management.png') }}?v=1.00.0"
                                            alt="Watch">
                                    </div>
                                    <div class="swiper-slide">
                                        <img src="{{ asset('images/banner/youtube-management.png') }}?v=1.00.0"
                                            alt="Watch">
                                    </div>
                                    <div class="swiper-slide">
                                        <img src="{{ asset('images/banner/academy-streamer.png') }}?v=1.00.0"
                                            alt="Watch">
                                    </div>
                                    
                                </div>
                                <div class="swiper-pagination"></div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>

            <a href="#" data-scrollto="#section-about " data-easing="easeInOutExpo" data-speed="1250" data-offset="70"
                class="one-page-arrow d-md-flex d-none">
                <div class="scroll-inner">
                    <div class="scroll-wheel"></div>
                </div>
            </a>

        </div>
    </section>
@endsection

@section('content')
    <section id="content">
        <div class="content-wrap py-0">

            <div id="section-services" class="center page-section detect-sect">

                <div class="container clearfix">

                    <h2 class="mx-auto font-body title-section " style="max-width: 700px; font-size: 40px;">
                        Layanan Apa Saja Yang Disediakan oleh Kagumi?</h2>

                    <p class="lead mx-auto bottommargin" style="">Kami bekerjasama dengan client untuk membantu dalam
                        mengembangkan, menyebarluaskan, dan membangun sebuah brand melalui sebuah komunitas dengan
                        kegiatan-kegiatan yang dilakukan secara digital.
                    </p>

                    {{-- <p class="bottommargin" style="font-size: 16px;"><a href="#" data-scrollto="#section-services"
                            data-easing="easeInOutExpo" data-speed="1250" data-offset="70" class="more-link">Learn more
                            <i class="icon-angle-right"></i></a></p> --}}

                    <div class="clear"></div>
                    <div class="row justify-content-center  " data-animate="fadeInUp" data-delay="150">
                        @component('components.custom.layanan-card-homepage')
                            @slot('order')
                                order-1
                            @endslot
                            @slot('color')
                                white
                            @endslot
                            @slot('url')
                                {{ asset('images/banner/digital-activation.png') }}?v=1.00.0
                               
                            @endslot
                            @slot('title')
                                Digital Activation
                            @endslot
                            @slot('id')
                                1
                            @endslot
                        @endcomponent
                        @component('components.custom.layanan-card-homepage')
                            @slot('order')
                                order-lg-2 order-md-3 order-3
                            @endslot
                            @slot('color')
                                red
                            @endslot
                            @slot('url')
                                {{ asset('images/banner/youtube-management.png') }}
                            @endslot
                            @slot('title')
                                Youtube Management
                            @endslot
                            @slot('id')
                                2
                            @endslot
                        @endcomponent
                        <div class="d-lg-none w-100 order-md-3 d-md-flex"></div>
                        @component('components.custom.layanan-card-homepage')
                            @slot('order')
                                order-lg-3 order-md-3 order-2
                            @endslot
                            @slot('color')
                                red
                            @endslot
                            @slot('url')
                                {{ asset('images/banner/tiktok-management.png') }}
                            @endslot
                            @slot('title')
                                Tiktok Management
                            @endslot
                            @slot('id')
                                3
                            @endslot
                        @endcomponent
                        @component('components.custom.layanan-card-homepage')
                            @slot('order')
                                order-md-5 order-4
                            @endslot
                            @slot('color')
                                white
                            @endslot
                            @slot('url')
                                {{ asset('images/banner/academy-streamer.png') }}
                            @endslot
                            @slot('title')
                                Academy Streamer
                            @endslot
                            @slot('id')
                                4
                            @endslot
                        @endcomponent
                    </div>
                    <div class="mt-5 d-flex flex-column align-items-center">

                        <div class="card card-penjelasan border-0 ">
                            <div class="card-body">
                                <h3 class="title" id="title-penjelasan">Digital Activation </h3>
                                <p id="content-penjelasan">Strategi dimana sebuah brand menargetkan mikro audiens dan
                                    melakukan interaksi antara
                                    brand dengan konsumen maupun calon konsumen melalui berbagai aktivitas. Hal tersebut
                                    berguna untuk membangun serta meningkatkan brand awareness (kesadaran merek).</p>
                            </div>
                        </div>
                    </div>
                    {{-- <div class="row topmargin-lg mx-auto" style="max-width: 1000px;">

                        <div class="col-md-4 mb-5">

                            <div class="team">
                                <div class="team-image">
                                    <img src="one-page/images/team/1.jpg" alt="John Doe">
                                    <div class="bg-overlay">
                                        <div class="bg-overlay-content align-items-end" data-hover-animate="fadeIn"
                                            data-hover-speed="400">
                                            <a href="#" class="social-icon si-borderless si-small si-facebook"
                                                title="Facebook">
                                                <i class="icon-facebook"></i>
                                                <i class="icon-facebook"></i>
                                            </a>
                                            <a href="#" class="social-icon si-borderless si-small si-twitter"
                                                title="Twitter">
                                                <i class="icon-twitter"></i>
                                                <i class="icon-twitter"></i>
                                            </a>
                                            <a href="#" class="social-icon si-borderless si-small si-github" title="Github">
                                                <i class="icon-github"></i>
                                                <i class="icon-github"></i>
                                            </a>
                                        </div>
                                        <div class="bg-overlay-bg" data-hover-animate="fadeIn" data-hover-speed="400">
                                        </div>
                                    </div>
                                </div>
                                <div class="team-desc team-desc-bg">
                                    <div class="team-title">
                                        <h4>John Doe</h4><span>CEO</span>
                                    </div>
                                </div>
                            </div>

                        </div>

                        <div class="col-md-4 mb-5">

                            <div class="team">
                                <div class="team-image">
                                    <img src="one-page/images/team/2.jpg" alt="Josh Clark">
                                    <div class="bg-overlay">
                                        <div class="bg-overlay-content align-items-end" data-hover-animate="fadeIn"
                                            data-hover-speed="400">
                                            <a href="#" class="social-icon si-borderless si-small si-twitter"
                                                title="Twitter">
                                                <i class="icon-twitter"></i>
                                                <i class="icon-twitter"></i>
                                            </a>
                                            <a href="#" class="social-icon si-borderless si-small si-linkedin"
                                                title="LinkedIn">
                                                <i class="icon-linkedin"></i>
                                                <i class="icon-linkedin"></i>
                                            </a>
                                            <a href="#" class="social-icon si-borderless si-small si-flickr" title="Flickr">
                                                <i class="icon-flickr"></i>
                                                <i class="icon-flickr"></i>
                                            </a>
                                        </div>
                                        <div class="bg-overlay-bg" data-hover-animate="fadeIn" data-hover-speed="400">
                                        </div>
                                    </div>
                                </div>
                                <div class="team-desc team-desc-bg">
                                    <div class="team-title">
                                        <h4>Mary Jane</h4><span>Co-Founder</span>
                                    </div>
                                </div>
                            </div>

                        </div>

                        <div class="col-md-4 mb-5">

                            <div class="team">
                                <div class="team-image">
                                    <img src="one-page/images/team/3.jpg" alt="Mary Jane">
                                    <div class="bg-overlay">
                                        <div class="bg-overlay-content align-items-end" data-hover-animate="fadeIn"
                                            data-hover-speed="400">
                                            <a href="#" class="social-icon si-borderless si-small si-twitter"
                                                title="Twitter">
                                                <i class="icon-twitter"></i>
                                                <i class="icon-twitter"></i>
                                            </a>
                                            <a href="#" class="social-icon si-borderless si-small si-vimeo" title="Vimeo">
                                                <i class="icon-vimeo"></i>
                                                <i class="icon-vimeo"></i>
                                            </a>
                                            <a href="#" class="social-icon si-borderless si-small si-instagram"
                                                title="Instagram">
                                                <i class="icon-instagram"></i>
                                                <i class="icon-instagram"></i>
                                            </a>
                                        </div>
                                        <div class="bg-overlay-bg" data-hover-animate="fadeIn" data-hover-speed="400">
                                        </div>
                                    </div>
                                </div>
                                <div class="team-desc team-desc-bg">
                                    <div class="team-title">
                                        <h4>Josh Clark</h4><span>Sales</span>
                                    </div>
                                </div>
                            </div>

                        </div>

                    </div> --}}

                </div>

            </div>


            <div id="section-value" class="page-section detect-sect pt-0" style="padding-bottom: 80px !important">

                <div class="section m-0">
                    <div class="container clearfix">
                        <div class="mx-auto center" style="max-width: 900px;">
                            <h2 class="mb-0 fw-light ls1">Mengapa sebuah <span class="red-part">Brand Membutuhkan
                                    Komunitas </span> yang solid dan loyal?</h2>
                        </div>
                    </div>
                </div>

                <div class="row justify-content-center align-items-center">

                    <div class="col-lg-5 col-md-8 col-11 ">
                        <img src="{{ asset('images/advan/komunitas-kagumi.png') }}" alt="" class="w-100 mt-lg-0 mt-4"
                            style="object-fit: contain">
                    </div>
                    <div class="col-lg-7 " data-animate="fadeInRight" data-delay="150">
                        <div class="inner-padding"></div>
                        @component('components.custom.itm-kom')
                            @slot('side')
                                back
                            @endslot
                            @slot('url')
                               {{asset('images/advan/interaksi-medsos.png')}}
                            @endslot
                            @slot('title')
                                Dapat meningkatkan interaksi di media sosial
                            @endslot
                        @endcomponent
                        @component('components.custom.itm-kom')
                            @slot('side')
                                front
                            @endslot
                            @slot('url')
                                {{asset('images/advan/brand-awareness.png')}}
                            @endslot
                            @slot('title')
                                Bisa mendapatkan brand awareness lebih luas
                            @endslot
                        @endcomponent
                        @component('components.custom.itm-kom')
                            @slot('side')
                                back
                            @endslot
                            @slot('url')
                            {{asset('images/advan/pembelaan-medsos.png')}}
                            @endslot
                            @slot('title')
                                Membangun dan memberikan pembelaan di media sosial kepada brand
                            @endslot
                        @endcomponent
                        @component('components.custom.itm-kom')
                            @slot('side')
                                front
                            @endslot
                            @slot('url')
                            {{asset('images/advan/pelanggan-loyal.png')}}
                            @endslot
                            @slot('title')
                                Merubah pelanggan musiman menjadi pelanggan yang loyal terhadap brand
                            @endslot
                        @endcomponent

                        <div class="inner-padding"></div>
                        {{-- <div class="row align-items-stretch grid-border clearfix">
                            <div class="col-lg-4 col-md-6 ">
                                <div class="d-flex h-100 w-100 align-items-center justify-content-center">
                                    <div class="feature-box fbox-center fbox-dark fbox-plain">
                                        <div class="fbox-icon">
                                            <img src="https://miro.medium.com/max/680/0*iISE_ybkNl-TkQ42.jpg" alt="">
                                        </div>
                                        <div class="fbox-content fbox-content-sm">
                                            <h3>Two-ways conversation ??? Increase brand visibility
                                            </h3>
                                        </div>
                                    </div>
                                </div>

                            </div>
                            <div class="col-lg-4 col-md-6 col-padding">
                                <div class="feature-box fbox-center fbox-dark fbox-plain">
                                    <div class="fbox-icon">
                                        <a href="#"><i class="icon-et-presentation op-gradient-icon"></i></a>
                                    </div>
                                    <div class="fbox-content fbox-content-sm">
                                        <h3>Actively drive engagement, keeps them coming back for more
                                        </h3>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6 col-padding">
                                <div class="feature-box fbox-center fbox-dark fbox-plain">
                                    <div class="fbox-icon">
                                        <a href="#"><i class="icon-et-puzzle op-gradient-icon"></i></a>
                                    </div>
                                    <div class="fbox-content fbox-content-sm">
                                        <h3>Customers actively involved with the development of the brand
                                        </h3>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6 col-padding">
                                <div class="feature-box fbox-center fbox-dark fbox-plain">
                                    <div class="fbox-icon">
                                        <a href="#"><i class="icon-et-gears op-gradient-icon"></i></a>
                                    </div>
                                    <div class="fbox-content fbox-content-sm">
                                        <h3>Building and protecting a brand???s reputation
                                        </h3>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6 col-padding">
                                <div class="feature-box fbox-center fbox-dark fbox-plain">
                                    <div class="fbox-icon">
                                        <a href="#"><i class="icon-et-genius op-gradient-icon"></i></a>
                                    </div>
                                    <div class="fbox-content fbox-content-sm ">
                                        <h3>More chance to turn ordinary customer into loyal advocates </h3>
                                    </div>
                                </div>
                            </div>
                            {{-- <div class="col-lg-4 col-md-6 col-padding">
                                <div class="feature-box fbox-center fbox-dark fbox-plain">
                                    <div class="fbox-icon">
                                        <a href="#"><i class="icon-et-hotairballoon op-gradient-icon"></i></a>
                                    </div>
                                    <div class="fbox-content fbox-content-sm">
                                        <h3>Industrial Support</h3>
                                    </div>
                                </div>
                            </div>
                        </div> --}}
                    </div>

                </div>

                <div class="section dark m-0">
                    <div class="mx-auto center" style="max-width: 900px;">
                        <h2 class="mb-0 fw-light ls1">Tertarik dengan Layanan Kami? <a href="#"
                                data-scrollto="#template-contactform" data-offset="140" data-easing="easeInOutExpo"
                                data-speed="1250"
                                class="button button-border button-circle button-light button-large my-md-0 my-3 button-join button-btw-sect"
                                style="position: relative; top: -3px;">Hubungi Kami</a></h2>
                    </div>
                </div>



            </div>
            <section class="section-client detect-sect  pt-5" id="section-client" data-animate="fadeInDown" data-delay="150">
                <div class="container">
                    <div class="inner-padding"></div>
                    {{-- <h2 class="title-part text-center"> <img src="{{ asset('images/logo-kagumi.png') }}" alt=""
                            class=""> Siapa Saja Klien <span>Kagumi</span>?</h2> --}}
                    <h2 class="text-center mx-auto bottommargin font-body title-section mb-4"
                        style="max-width: 700px; font-size: 40px;">
                        Siapa Saja Klien <span class="red-part">Kagumi</span>?</h2>
                   
                    <div class="row justify-content-center">
                        <div class="col-md-3 col-6 col-lg-2 mb-3">
                            <div class="card-client p-2">
                                <img src="{{ asset('images/klien/csb-kagumi.png') }}" alt="sobatbadak"
                                    class="img-client shadow rounded bg-white">
                                <h5 class="title-client">Club Sobat Badak</h5>
                            </div>

                        </div>
                        <div class="col-md-3 col-6 col-lg-2 mb-3">
                            <div class="card-client p-2">
                                <img src="{{ asset('images/klien/isea-kagumi.png') }}" alt="sobatbadak"
                                    class="img-client shadow rounded bg-white">
                                <h5 class="title-client">ISEA</h5>
                            </div>

                        </div>
                        <div class="col-md-3 col-6 col-lg-2 mb-3">
                            <div class="card-client p-2">
                                <img src="{{ asset('images/klien/warisan-kagumi.png') }}" alt="sobatbadak"
                                    class="img-client shadow rounded bg-white">
                                <h5 class="title-client">Warisan</h5>
                            </div>

                        </div>
                        <div class="col-md-3 col-6 col-lg-2 mb-3">
                            <div class="card-client p-2">
                                <img src="{{ asset('images/klien/wgm-kagumi.png') }}" alt="sobatbadak"
                                    class="img-client shadow rounded bg-white">
                                <h5 class="title-client">Warisan Gajahmada</h5>
                            </div>

                        </div>
                        <div class="col-md-3 col-6 col-lg-2 mb-3">
                            <div class="card-client p-2">
                                <img src="{{ asset('images/klien/yokesen-kagumi.png') }}" alt="sobatbadak"
                                    class="img-client shadow rounded bg-white">
                                <h5 class="title-client">Yokesen</h5>
                            </div>

                        </div>
                    </div>
                </div>

            </section>
            {{-- Testimoni Section --}}
            {{-- <div class="section m-0 dark section-testi"
                style="background-image: url('https://image.freepik.com/free-photo/solid-concrete-wall-textured-backdrop_53876-129493.jpg'); ">

                <div class="container clearfix">

                    <div class="row justify-content-center">
                        <div class="col-md-5 my-auto">
                            <h2 class="mb-md-0 mb-3 fw-bold ls1 testi-title">Testimoni Klien </h2>
                        </div>
                        <div class="col-md-7">
                            <!-- <div class="fslider testimonial testimonial-full bg-transparent border-0 shadow-none p-0"
                                                    data-arrows="false">
                                                    <div class="flexslider">
                                                        <div class="slider-wrap">
                                                            <div class="slide">

                                                            </div>
                                                            <div class="slide">
                                                                <div class="testi-content">
                                                                    <div class="d-flex align-items-center justify-content-center">
                                                                        <img src="https://akcdn.detik.net.id/community/media/visual/2019/02/19/42393387-9c5c-4be4-97b8-49260708719e.jpeg?w=750&q=90" alt="" class="img-testi-new">
                                                                    </div>                                               <p>Natus voluptatum enim quod necessitatibus quis expedita harum
                                                                        provident eos obcaecati id culpa corporis molestias.</p>
                                                                    <div class="testi-meta">
                                                                        Collis Ta'eed
                                                                        <span>Envato Inc.</span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="slide">
                                                                <div class="testi-content">
                                                                    <div class="d-flex align-items-center justify-content-center">
                                                                        <img src="https://akcdn.detik.net.id/community/media/visual/2019/02/19/42393387-9c5c-4be4-97b8-49260708719e.jpeg?w=750&q=90" alt="" class="img-testi-new">
                                                                    </div>                                             <p>Incidunt deleniti blanditiis quas aperiam recusandae consequatur
                                                                        ullam quibusdam cum libero illo rerum!</p>
                                                                    <div class="testi-meta">
                                                                        John Doe
                                                                        <span>XYZ Inc.</span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                 -->
                            <div class="swiper mySwiper">
                                <div class="swiper-wrapper">
                                    <div class="swiper-slide">
                                        <div class="testi-content">
                                            <div class="d-flex align-items-center justify-content-center">
                                                <img src="https://akcdn.detik.net.id/community/media/visual/2019/02/19/42393387-9c5c-4be4-97b8-49260708719e.jpeg?w=750&q=90"
                                                    alt="" class="img-testi-new">
                                            </div>

                                            <p>Similique fugit repellendus expedita excepturi iure perferendis
                                                provident quia eaque vero numquam?</p>
                                            <div class="testi-meta">
                                                Steve Jobs
                                                <span>Apple Inc.</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="testi-content">
                                            <div class="d-flex align-items-center justify-content-center">
                                                <img src="https://akcdn.detik.net.id/community/media/visual/2019/02/19/42393387-9c5c-4be4-97b8-49260708719e.jpeg?w=750&q=90"
                                                    alt="" class="img-testi-new">
                                            </div>

                                            <p>Similique fugit repellendus expedita excepturi iure perferendis
                                                provident quia eaque vero numquam?</p>
                                            <div class="testi-meta">
                                                Steve Jobs
                                                <span>Apple Inc.</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="testi-content">
                                            <div class="d-flex align-items-center justify-content-center">
                                                <img src="https://akcdn.detik.net.id/community/media/visual/2019/02/19/42393387-9c5c-4be4-97b8-49260708719e.jpeg?w=750&q=90"
                                                    alt="" class="img-testi-new">
                                            </div>

                                            <p>Similique fugit repellendus expedita excepturi iure perferendis
                                                provident quia eaque vero numquam?</p>
                                            <div class="testi-meta">
                                                Steve Jobs
                                                <span>Apple Inc.</span>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                                <div class="swiper-button-next"></div>
                                <div class="swiper-button-prev"></div>
                                <div class="swiper-pagination"></div>
                            </div>
                        </div>
                    </div>

                </div>

            </div> --}}
            {{-- <div class="" style="height: 65px;">

            </div> --}}
            <div id="section-contact" class="page-section  section-form pt-4" style="padding-bottom: 20px !important">



                <div class=" clearfix">
                    <div class="container">
                        <h2 class="text-center mx-md-auto mx-2 mt-3 bottommargin font-body title-section "
                            style="max-width: 700px; font-size: 40px;">
                            Tertarik Untuk Bergabung & Berdiskusi Dengan
                            <span class="red-part">Account Executive</span> Kami?
                        </h2>
                        <div class="mx-auto topmargin" style="">
                            <div class="row">
                                <div class="col-md-6 order-md-1 order-2">


                                    <div class="form-result"></div>

                                    <form class="row mb-0 meeting-form detect-sect" id="template-contactform"
                                        name="template-contactform" action="{{ route('postMeeting') }}"
                                        method="post">
                                        @csrf


                                        <div class="col-md-12 mb-4">
                                            <input type="text" id="template-contactform-name" name="name"
                                                class="sm-form-control border-form-control required" placeholder="Name"
                                                value="{{ old('name') }}" />
                                            <div style="color: red; font-size:11px" id="err-name">

                                            </div>
                                        </div>
                                        <div class="col-md-12 mb-4">
                                            <input type="email" id="template-contactform-email" name="email"
                                                class="required email sm-form-control border-form-control"
                                                placeholder="Email Address" value="{{ old('email') }}" />
                                            <div style="color: red; font-size:11px" id="err-email">

                                            </div>
                                        </div>

                                        <div class="w-100"></div>

                                        <div class="col-md-12 mb-4">
                                            <input type="text" id="template-contactform-phone" name="whatsapp"
                                                value="{{ old('phone') }}" class="sm-form-control border-form-control"
                                                placeholder="Phone" />
                                            <div style="color: red; font-size:11px" id="err-phone">

                                            </div>
                                        </div>

                                        <div class="col-md-12 mb-4">
                                            <input type="text" id="company" name="company"
                                                value="{{ old('company') }}"
                                                class="required sm-form-control border-form-control"
                                                placeholder="Company Name" />
                                            <div style="color: red; font-size:11px" id="err-company">

                                            </div>
                                        </div>
                                        <div class="col-md-12 mb-4">
                                            <textarea name="message" rows="3" cols="5" class="required sm-form-control border-form-control"
                                                placeholder="Alamat" style="height:auto !important">{{ old('alamat') }}</textarea>
                                            <div style="color: red; font-size:11px" id="err-message">

                                            </div>
                                        </div>
                                        <div class="w-100"></div>


                                        <div class="g-recaptcha" data-callback="recaptchaCallback"
                                            data-sitekey="6LdLM1UeAAAAANIPJEOY3Bo_7bysZ5pSdgMMkyc5"></div>
                                        <div class="col-12 center mb-4">
                                            <button
                                                class="button button-border btn-sub button-circle fw-medium ms-0 topmargin-sm"
                                                type="submit" id="template-contactform-submit" disabled
                                                name="template-contactform-submit" value="submit">Join Now</button>
                                            <br>
                                            <small style="display: block; font-size: 13px; margin-top: 15px;">We'll do our
                                                best to
                                                get back to you within 2-3 working days.</small>
                                        </div>

                                        <div class="w-100"></div>

                                        <div class="col-12 d-none">
                                            <input type="text" id="template-contactform-botcheck"
                                                name="template-contactform-botcheck" value=""
                                                class="sm-form-control" />
                                        </div>

                                        <input type="hidden" name="prefix" value="template-contactform-">

                                    </form>


                                </div>
                                <div class="col-md-6 order-md-2 order-1  mb-md-4 mb-4">
                                    <img src="{{ asset('images/red_write_1.png') }}" alt=""
                                        class="w-100 h-100 rounded  " style="object-fit:cover">
                                    <!-- <iframe src="https://calendar.google.com/calendar/embed?src=uon0rocne2ndmlcp14vl2jl5v0%40group.calendar.google.com&ctz=Asia%2FJakarta" style="border: 0" class="img-form" frameborder="0" scrolling="no"></iframe> -->
                                </div>
                            </div>


                        </div>

                    </div>

                </div>
                <div class="row mx-0 topmargin-lg align-items-stretch">
                    <div class="col-lg-8 col-md-6 d-none d-md-block px-0">
                        <iframe class="h-100 w-100"
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3966.2661524317405!2d106.64887841476916!3d-6.228599195491247!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69fb588b4591bf%3A0x94e2c809ac22a79e!2sMedia%20Kagumi%20From%20Yokesen!5e0!3m2!1sen!2sid!4v1643271485111!5m2!1sen!2sid"
                            style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                    </div>
                    <div class="col-lg-4 col-md-6" style="background-color: #F5F5F5;">
                        <div class="col-padding">
                            <h3 class="font-body fw-normal ls1">Media Kagumi from Yokesen</h3>

                            <div style="font-size: 16px; line-height: 1.7;">
                                <address style="line-height: 1.7;">
                                    <strong>Our Head Office: </strong> <br>
                                    Jalan Lingkar Luar Barat <br>Kel. Panunggangan, Kec. Pinang, <br> Banten 15143
                                </address>



                                <abbr title="Phone Number"><strong>Phone:</strong></abbr> (62) 819-837-2373<br>
                                <abbr title="Fax"><strong>Fax:</strong></abbr> (62) 21 9837-2373<br>
                                <abbr title="Email Address"><strong>Email:</strong></abbr> media@kagumi.com
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section>
@endsection

@section('js')
    <script src="https://www.google.com/recaptcha/api.js" async defer></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.3.10/dist/sweetalert2.all.min.js"></script>
    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>

    <!-- Initialize Swiper -->
    <script>
        var swiper = new Swiper(".mySwiper", {
            spaceBetween: 30,
            centeredSlides: true,
            loop: true,
            autoplay: {
                delay: 10000,
                disableOnInteraction: false,
            },
            pagination: {
                el: ".swiper-pagination",
                clickable: true,
            },
            navigation: {
                nextEl: ".swiper-button-next",
                prevEl: ".swiper-button-prev",
            },
        });
    </script>
    <script>
        $('.btn-join').on('click', function() {
            $('html, body').animate({
                scrollTop: ($(".section-form").offset().top) - 160
            }, 1500);
        })
        $('.btn-client').on('click', function() {
            $('html, body').animate({
                scrollTop: ($(".section-client").offset().top) - 160
            }, 1500);
        })
    </script>
    <script type="text/javascript">
        $('.meeting-form').on('submit', function(e) {

            let errorEmail = false;
            let errorName = false;
            let errorPhone = false;
            let errorCompany = false;
            let errorMessage = false;

            let email = $('input[name="email"]').val() ?? "";
            let name = $('input[name="name"]').val();
            let phone = $('input[name="phone"]').val();
            let company = $('input[name="company"]').val();
            let message = $('textarea[name="message"]').val();

            var mailformat = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;

            if (!email.match(mailformat)) {
                console.log("wrong email");
                errorEmail = true;
                $('#err-email').text('Email Tidak Valid');

            } else {
                $('#err-email').text('');
            }

            if (name.length < 2) {
                console.log("name empty");
                errorName = true;
                $('#err-name').text('Nama tidak valid');
            } else {
                $('#err-name').text('');
            }
            if (phone.length < 9) {
                console.log("phone error");
                errorPhone = true;
                $('#err-phone').text('Nomor Kamu Tidak Valid');
            } else {
                $('#err-phone').text('');
            }

            if (company.length < 3) {
                console.log("company error");
                errorCompany = true;
                $('#err-company').text('Nama Perusahaan Tidak Valid');
            } else {
                $('#err-company').text('');
            }

            if (message.length < 3) {
                console.log('message error');
                errorMessage = true;
                $('#err-message').text('Pesan terlalu pendek!');
            } else {
                $('#err-message').text('');

            }



            if (errorName || errorEmail || errorPhone || errorCompany || errorMessage) {
                console.log("ONE OF THEM IS EMPTY/WRONG");
                e.preventDefault();
            }
        })
    </script>
    <script type="text/javascript">
        function recaptchaCallback() {
            $('.btn-sub').removeAttr('disabled');
        }
    </script>

    <script>
        let title = ['Digital Activation ', 'YouTube Management', 'TikTok Management', 'Academy Streamer']
        let content = [
            'Strategi dimana sebuah brand menargetkan mikro audiens dan melakukan interaksi antara brand dengan konsumen maupun calon konsumen melalui berbagai aktivitas. Hal tersebut berguna untuk membangun serta meningkatkan brand awareness (kesadaran merek). ',
            'Membantu mengoptimalkan saluran YouTube milik kamu dimulai dari merencanakan konten-konten (content planning), produksi (video production), editing, optimizing dan juga monetizing.',
            'Kagumi siap bantu untuk memaksimalkan platform TikTok kamu dengan menyiapkan segala halnya termasuk ide content planning, produksi video, optimizing, dan menaikan penjualanmu dengan TikTok Shop! ',
            'Menjadi seorang streamer handal sekarang bukan sebuah mimpi lagi! Kagumi akan membantu kamu dari segi public speaking, merencanakan konten-konten, hingga tahap produksi, dan persiapan seluruh alat produksi, semua akan diatur Kagumi!'
        ]
        $('.layanan.homepage').click(function() {
            let temp = $(this).data('id');
            let id = parseInt(temp) - parseInt(1);

            $('.card-penjelasan').removeClass('active')

            sleep(500).then(() => {
                $('#title-penjelasan').html(title[id]);
                $('#content-penjelasan').html(content[id]);
                $('.card-penjelasan').addClass('active')
            })
        })

        function sleep(time) {
            return new Promise((resolve) => setTimeout(resolve, time));
        }
    </script>
    @if (Session::has('fullBooked'))
        <script>
            Swal.fire(
                'Gagal',
                'Jadwal sudah penuh pada hari tersebut! Silahkan pilih hari dan jam lain!',
                'error'
            );
        </script>
    @endif
    @if (Session::has('errorBeforeDate'))
        <script>
            Swal.fire(
                'Gagal',
                'Kamu tidak bisa memilih jadwal diskusi sebelum hari ini!',
                'error'
            );
        </script>
    @endif
    @if (Session::has('holidayError'))
        <script>
            Swal.fire(
                'Gagal',
                'Account Executive tidak menerima jadwal diskusi pada hari Sabtu dan Minggu.',
                'error'
            );
        </script>
    @endif
    @if (Session::has('fullBookedjam'))
        <script>
            Swal.fire(
                'Gagal',
                'Jadwal sudah terisi pada jam tersebut! Silahkan pilih jam lain!',
                'error'
            );
        </script>
    @endif
    @if (Session::has('errorCapcha'))
        <script>
            Swal.fire(
                'Gagal',
                'Capcha kamu kosong!',
                'error'
            );
        </script>
    @endif
@endsection
