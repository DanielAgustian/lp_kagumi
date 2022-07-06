@extends('master2')
@section('css')
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />
    <link rel="stylesheet" href="{{ asset('asset/css/kagumi-academy.css') }}">
    <style>
        @media screen and (max-width: 996px) {
            .slider-element {
                min-height: 60vh !important;
            }
        }
    </style>
@endsection
@section('banner')
    <section id="slider" class="slider-element min-vh-100 bgchanger include-header mb-0"
        style="background-color: #de1d38 ; background-image: url('{{ asset('images/watch-bg.png') }}'); background-position: center center; background-size: cover;">
        <div class="slider-inner">

            <div class="vertical-middle slider-element-fade">
                <div class="container py-5">
                    <div class="row align-items-center justify-content-center">
                        <div class=" col-lg-6 order-lg-1 order-2 text-center text-md-start">
                            <div class="emphasis-title mb-0">

                                <h2 class="mt-2 fw-semibold "
                                    style=" color: white; line-height: 1.3; letter-spacing: -2px;">
                                    Gabung Streaming Selling Academy Bisa Dapat Banyak Keuntungan Lho!!

                                </h2>
                                <span class=" mt-3 d-block details-banner" style="color: white">Kagumi akan membantu kamu
                                    menjadi seorang <strong>Streamer Handal</strong> dengan melatih public speaking,
                                    mempersiapkan segala peralatan streaming, mempersiapkan konten, hingga proses produksi
                                    semuanya Kagumi yang atur!
                                </span>
                                <div class="d-flex justify-content-lg-start justify-content-center">
                                    <a href="#" data-animate="fadeInUp" data-delay="600"
                                        class="button button-circle btn-gold button-light btn-join button-large text-white mt-4 mr-md-3 mr-0 nott ls0">Register</a>
                                    {{-- <a href="#" data-animate="fadeInUp" data-delay="600"
                                        class="button button-circle btn-white-alt button-light btn-client  button-large text-white mt-md-4 mt-3 nott ls0">Our
                                        Client</a> --}}
                                    <a href="#" data-animate="fadeInUp" data-delay="600"
                                        class="button button-circle btn-white-alt button-light btn-benefit button-large text-white mt-4 mr-md-3 mr-0 nott ls0">Benefit</a>
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
                                        <img src="{{ asset('images/kagumi-academy/banner-1.png') }}?v=1.00.0"
                                            alt="streaming">

                                    </div>
                                    <div class="swiper-slide">
                                        <img src="{{ asset('images/kagumi-academy/banner-2.png') }}?v=1.00.0"
                                        alt="opprtunity">
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
            <div id="section-benefit" class="page-section pt-0">

                <div class="mt-0 mx-0 mb-5 bg-white ">
                    <div class="container clearfix">
                        <div class="mx-auto center mt-6" style="max-width: 900px;">
                            <h2 class="mb-0 fw-bold ls1">Apa yang bisa kamu dapatkan dari
                                <strong style="color: #de1d38">Streaming Selling Academy </strong>?
                            </h2>
                        </div>
                    </div>
                </div>

                <div class="row ">

                    <div class="col-lg-5 d-none d-md-block"
                        style="background: url('{{ asset('images/kagumi-academy/livestream.png') }}') center center no-repeat; background-size: contain;">

                    </div>
                    <div class="col-lg-7 kagumi-acap" data-animate="fadeInRight"  data-duration="750">
                        <div class="inner-padding"></div>
                        @component('components.custom.itm-kom')
                            @slot('side')
                                back
                            @endslot
                            @slot('url')
                               {{asset('images/kagumi-academy/get-streamer.png')}}
                            @endslot
                            @slot('title')
                                Peluang menjadi Streamer Handal tanpa bingung harus menyiapkan materi konten dan peralatan yang
                                dibutuhkan
                            @endslot
                        @endcomponent
                        @component('components.custom.itm-kom')
                            @slot('side')
                                front
                            @endslot
                            @slot('url')
                                {{asset('images/kagumi-academy/get-content.png')}}
                            @endslot
                            @slot('title')
                                Konten yang dibutuhkan sudah disiapkan mulai dari planning, process, sampai production
                            @endslot
                        @endcomponent
                        @component('components.custom.itm-kom')
                            @slot('side')
                                back
                            @endslot
                            @slot('url')
                            {{asset('images/kagumi-academy/get-public-speaking.png')}}
                            @endslot
                            @slot('title')
                                Kagumi akan membantu kamu dalam hal Public Speaking
                            @endslot
                        @endcomponent
                        @component('components.custom.itm-kom')
                            @slot('side')
                                front
                            @endslot
                            @slot('url')
                            {{asset('images/kagumi-academy/get-tools.png')}}
                            @endslot
                            @slot('title')
                                Peralatan yang lengkap untuk keperluan kamu ngonten
                            @endslot
                        @endcomponent
                        @component('components.custom.itm-kom')
                            @slot('side')
                                back
                            @endslot
                            @slot('url')
                            {{asset('images/kagumi-academy/get-opt.png')}}
                            @endslot
                            @slot('title')
                                Konten kamu dibantu optimizing supaya bisa menjangkau para audience
                            @endslot
                        @endcomponent
                        @component('components.custom.itm-kom')
                            @slot('side')
                                front
                            @endslot
                            @slot('url')
                                {{asset('images/kagumi-academy/get-adsense.png')}}
                            @endslot
                            @slot('title')
                                Dan Kagumi akan membantu dalam hal Adsense atau Monetizing
                            @endslot
                        @endcomponent
                        <div class="inner-padding"></div>

                    </div>

                </div>

                {{-- <div class="section dark m-0">
                    <div class="mx-auto center" style="max-width: 900px;">
                        <h2 class="mb-0 fw-light ls1">Tertarik dengan Layanan Kami? <a href="#"
                                data-scrollto="#template-contactform" data-offset="140" data-easing="easeInOutExpo"
                                data-speed="1250"
                                class="button button-border button-circle button-light button-large my-md-0 my-3 button-join button-btw-sect"
                                style="position: relative; top: -3px;">Hubungi Kami</a></h2>
                    </div>
                </div> --}}



            </div>


            <section id="section-services" class="section mt-0"
                style="background: url('{{ asset('images/red-bg-gradient.svg') }}') no-repeat center center / cover; ">
                <div class="container">
                    <div class="d-flex justify-content-center">
                        <h2 class="text-white text-center" style="max-width: 700px">Layanan Yang Disediakan Kagumi Untuk
                            Calon-Calon Streaming Selling Academy?
                        </h2>
                    </div>

                    <div class="row justify-content-lg-between justify-content-center no-gutters" data-animate="fadeInUp" data-delay="50" data-duration="500">
                        <div class="col-lg-3 col-md-6 col-6" >
                            <div class="card card-layanan-kagumi">
                                <div class="card-body">
                                    <img src="{{ asset('images/kagumi-academy/cloud-content-planning.png') }}?v=1.00.0"
                                        alt="Watch" class="w-100">
                                    <h4 class="title">Content Planning</h4>
                                </div>

                            </div>

                        </div>
                        <div class="col-lg-3 col-md-6 col-6">
                            <div class="card card-layanan-kagumi">
                                <div class="card-body">
                                    <img src="{{ asset('images/kagumi-academy/cloud-content-platform.png') }}?v=1.00.0"
                                        alt="Watch" class="w-100">
                                    <h4 class="title">Content Platform Tools</h4>
                                </div>

                            </div>

                        </div>
                        <div class="col-lg-3 col-md-6 col-6">
                            <div class="card card-layanan-kagumi">
                                <div class="card-body">
                                    <img src="{{ asset('images/kagumi-academy/cloud-monetizing.png') }}?v=1.00.0"
                                        alt="Watch" class="w-100">
                                    <h4 class="title">Monetizing
                                    </h4>
                                </div>

                            </div>

                        </div>


                    </div>
                    <div class="row justify-content-around no-gutters" data-animate="fadeInUp" data-delay="50" data-duration="500">
                        <div class="col-lg-2 d-lg-flex d-none"></div>
                        <div class="col-lg-3 col-md-6 col-6">
                            <div class="card card-layanan-kagumi">
                                <div class="card-body">
                                    <img src="{{ asset('images/kagumi-academy/cloud-content-production.png') }}?v=1.00.0"
                                        alt="Watch" class="w-100">
                                    <h4 class="title">Content Production</h4>
                                </div>

                            </div>

                        </div>
                        <div class="col-lg-2 d-lg-flex d-none"></div>
                        <div class="col-lg-3 col-md-6 col-6">
                            <div class="card card-layanan-kagumi">
                                <div class="card-body">
                                    <img src="{{ asset('images/kagumi-academy/cloud-smo.png') }}?v=1.00.0"
                                        alt="Watch" class="w-100">
                                    <h4 class="title">Social Media Optimizing</h4>
                                </div>

                            </div>

                        </div>
                        <div class="col-lg-2 d-lg-flex d-none"></div>
                        <div class="w-100"></div>

                    </div>
                </div>

            </section>

            <section id="section-harga" class="section mb-0"
                style="background: linear-gradient(0deg, rgb(238, 238, 238) 0%, rgba(232,232,232,1) 33%, rgba(249,249,249,1) 71%, rgba(255,255,255,1) 100%);">
                <div class="container">
                    <div class="d-flex justify-content-center">
                        <h2 class="text-primary-title">Apa Saja Yang Akan Kamu Pelajari di <strong>Kagumi Academy</strong>?

                        </h2>
                    </div>
                    <div class="row">
                        <div class="col-lg-4 col-md-6 mb-lg-0 mb-3"  data-animate="fadeInDown" data-delay="100">
                            <div class="card card-harga-academy">
                                <div class="card-title">
                                    <h3 class="title">Stage 1 <br>Basic Course</h3>

                                </div>
                                <div class="card-body">
                                    <ul class="ms-4 mb-0">
                                        <li> <span class="lil-title">Time: 1 Day(4 Hours)</span>
                                            <ul class="ms-4 mb-0">
                                                <li>Public Speaking</li>
                                                <li>Know You Audience & Context</li>
                                            </ul>


                                        </li>

                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 mb-lg-0 mb-3" data-animate="fadeInUp" data-delay="150">
                            <div class="card card-harga-academy">
                                <div class="card-title">
                                    <h3 class="title">Stage 2 <br>Intermediate Course</h3>

                                </div>
                                <div class="card-body">
                                    <ul class="ms-4 mb-0">
                                        <li> <span class="lil-title">Time: 2 Days(8 Hours/Day)</span>
                                            <ul class="ms-4 mb-0">
                                                <li>Public Speaking</li>
                                                <li>Know You Audience & Context</li>
                                                <li>Plan Structure for Good Public Speaking (Copywriting)</li>
                                                <li>Practive Selling Online</li>
                                            </ul>


                                        </li>

                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 mb-lg-0 mb-3" data-animate="fadeInDown" data-delay="200">
                            <div class="card card-harga-academy">
                                <div class="card-title">
                                    <h3 class="title">Stage 3: <br>Advanced Course</h3>

                                </div>
                                <div class="card-body">
                                    <ul class="ms-4 mb-0">
                                        <li> <span class="lil-title">Time: 4 Days (8 Hours/Day)</span>
                                            <ul class="ms-4 mb-0">
                                                <li>Public Speaking</li>
                                                <li>Know You Audience & Context</li>
                                                <li>Plan Structure for Good Public Speaking (Copywriting)</li>
                                                <li>Practive Selling Online</li>
                                                <li>Basic Conversion</li>
                                                <li>Storytelling that sell</li>
                                            </ul>


                                        </li>

                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div style=" height: 55px"></div>
                </div>

            </section>


            <div id="section-contact" class="page-section section-form pt-4" style="padding-bottom: 20px !important">



                <div class=" clearfix">
                    <div class="container">
                        <h2 class="text-center mx-md-auto mx-2 mt-3 mb-3" 
                            style="max-width: 800px; ">
                            Jadi Tunggu Apa Lagi? <br>
                            Daftarkan dirimu dan Jadilah <span class="red-part">Streamer</span>  yang kamu inginkan!!!

                            
                        </h2>
                        <div class="mx-auto mt-4" style="">
                            <div class="row justify-content-center">

                                <div class="col-lg-10 col-md-11 order-md-2 order-1  mb-md-4 mb-4">
                                    <img src="{{ asset('images/kagumi-academy/streamer.png') }}" alt="Menjadi Streamer"
                                        class="w-100 img-register " style="">

                                    <div class="d-flex justify-content-center mt-4">
                                        <a
                                            href="https://docs.google.com/forms/d/e/1FAIpQLSfxn0xEOU9uFq4NKfioy4WYCe48smmALHYLy1KbRa19KTJRqg/viewform ">
                                            <button class="btn-red btn btn-large btn-bordered-white" style="border">Free
                                                Register</button>

                                        </a>
                                    </div>



                                    <!-- <iframe src="https://calendar.google.com/calendar/embed?src=uon0rocne2ndmlcp14vl2jl5v0%40group.calendar.google.com&ctz=Asia%2FJakarta" style="border: 0" class="img-form" frameborder="0" scrolling="no"></iframe> -->
                                </div>
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
                scrollTop: ($(".section-form").offset().top) - 50
            }, 1500);
        })
        $('.btn-benefit').on('click', function() {
            $('html, body').animate({
                scrollTop: ($("#section-benefit").offset().top) - 50
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
