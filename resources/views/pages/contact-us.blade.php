@extends('master2')
@section('css')
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />
    <link rel="stylesheet" href="{{ asset('asset/css/contact-us.css') }}?v=1.0.0">
@endsection
@section('banner')
    <section id="slider" class="slider-element bgchanger include-header mb-0 "
        style="background-color: #de1d38 ; background-image: url('{{ asset('images/watch-bg.png') }}'); background-position: center center; background-size: cover;">
        <div class="slider-inner">

            <div class="vertical-middle slider-element-fade">
                <div class="container py-5">
                    <div class="emphasis-title">
                        <h2 class="mt-2 fw-semibold " style=" color: white; line-height: 1.3; letter-spacing: -2px;">
                            Contact Us
                        </h2>
                    </div>
                    <span class=" mt-3 d-block details-banner" style="color: white">Bingung tentang apa sih itu <strong>Kagumi</strong>? Tertarik dengan pelayanan <strong>Kagumi</strong> tapi ingin bertanya dulu supaya jelas? Yuk hubungi kami!


                </div>
            </div>


        </div>
    </section>
@endsection

@section('content')
    <section id="content" class="mb-2">
        <div class="content-wrap py-0">



            {{-- <div id="section-works" class="page-section pt-0">

                <div class="section m-0">
                    <div class="container clearfix">
                        <div class="mx-auto center" style="max-width: 900px;">
                            <h2 class="mb-0 fw-light ls1">We create &amp; craft projects that ooze creativity in every
                                aspect. We try to create a benchmark in everything we do. Take a moment to browse through
                                some of our recent completed work.</h2>
                        </div>
                    </div>
                </div>

                <!-- Portfolio Items
                    ============================================= -->
                <div class="portfolio grid-container row g-0">

                    <article class="portfolio-item col-lg-6 col-md-4 col-sm-6 col-12 wide">
                        <div class="grid-inner">
                            <div class="portfolio-image">
                                <a href="#">
                                    <img src="one-page/images/portfolio/mixed/1.jpg" alt="Open Imagination">
                                </a>
                                <div class="bg-overlay">
                                    <div class="bg-overlay-content flex-column" data-hover-animate="fadeIn">
                                        <div class="portfolio-desc p-0 center" data-hover-animate="fadeInDownSmall"
                                            data-hover-animate-out="fadeOutUpSmall" data-hover-speed="350">
                                            <h3><a href="#">Open Imagination</a></h3>
                                            <span><a href="#">Media</a>, <a href="#">Icons</a></span>
                                        </div>
                                    </div>
                                    <div class="bg-overlay-bg" data-hover-animate="fadeIn"></div>
                                </div>
                            </div>
                        </div>
                    </article>

                    <article class="portfolio-item col-lg-3 col-md-4 col-sm-6 col-12">
                        <div class="grid-inner">
                            <div class="portfolio-image">
                                <a href="#">
                                    <img src="one-page/images/portfolio/mixed/2.jpg" alt="Locked Steel Gate">
                                </a>
                                <div class="bg-overlay">
                                    <div class="bg-overlay-content flex-column" data-hover-animate="fadeIn">
                                        <div class="portfolio-desc p-0 center" data-hover-animate="fadeInDownSmall"
                                            data-hover-animate-out="fadeOutUpSmall" data-hover-speed="350">
                                            <h3><a href="#">Locked Steel Gate</a></h3>
                                            <span><a href="#">Illustrations</a></span>
                                        </div>
                                    </div>
                                    <div class="bg-overlay-bg" data-hover-animate="fadeIn"></div>
                                </div>
                            </div>
                        </div>
                    </article>

                    <article class="portfolio-item col-lg-3 col-md-4 col-sm-6 col-12">
                        <div class="grid-inner">
                            <div class="portfolio-image">
                                <a href="#">
                                    <img src="one-page/images/portfolio/mixed/3.jpg" alt="Mac Sunglasses">
                                </a>
                                <div class="bg-overlay">
                                    <div class="bg-overlay-content flex-column" data-hover-animate="fadeIn">
                                        <div class="portfolio-desc p-0 center" data-hover-animate="fadeInDownSmall"
                                            data-hover-animate-out="fadeOutUpSmall" data-hover-speed="350">
                                            <h3><a href="#">Mac Sunglasses</a></h3>
                                            <span><a href="#">Graphics</a>, <a href="#">UI Elements</a></span>
                                        </div>
                                    </div>
                                    <div class="bg-overlay-bg" data-hover-animate="fadeIn"></div>
                                </div>
                            </div>
                        </div>
                    </article>

                    <article class="portfolio-item col-lg-6 col-md-4 col-sm-6 col-12 wide">
                        <div class="grid-inner">
                            <div class="portfolio-image">
                                <a href="#">
                                    <img src="one-page/images/portfolio/mixed/4.jpg" alt="Open Imagination">
                                </a>
                                <div class="bg-overlay">
                                    <div class="bg-overlay-content flex-column" data-hover-animate="fadeIn">
                                        <div class="portfolio-desc p-0 center" data-hover-animate="fadeInDownSmall"
                                            data-hover-animate-out="fadeOutUpSmall" data-hover-speed="350">
                                            <h3><a href="#">Open Imagination</a></h3>
                                            <span><a href="#">Media</a>, <a href="#">Icons</a></span>
                                        </div>
                                    </div>
                                    <div class="bg-overlay-bg" data-hover-animate="fadeIn"></div>
                                </div>
                            </div>
                        </div>
                    </article>

                    <article class="portfolio-item col-lg-6 col-md-4 col-sm-6 col-12 wide">
                        <div class="grid-inner">
                            <div class="portfolio-image">
                                <a href="#">
                                    <img src="one-page/images/portfolio/mixed/5.jpg" alt="Console Activity">
                                </a>
                                <div class="bg-overlay">
                                    <div class="bg-overlay-content flex-column" data-hover-animate="fadeIn">
                                        <div class="portfolio-desc p-0 center" data-hover-animate="fadeInDownSmall"
                                            data-hover-animate-out="fadeOutUpSmall" data-hover-speed="350">
                                            <h3><a href="#">Console Activity</a></h3>
                                            <span><a href="#">UI Elements</a>, <a href="#">Media</a></span>
                                        </div>
                                    </div>
                                    <div class="bg-overlay-bg" data-hover-animate="fadeIn"></div>
                                </div>
                            </div>
                        </div>
                    </article>

                    <article class="portfolio-item col-lg-3 col-md-4 col-sm-6 col-12">
                        <div class="grid-inner">
                            <div class="portfolio-image">
                                <a href="#">
                                    <img src="one-page/images/portfolio/mixed/6.jpg" alt="Open Imagination">
                                </a>
                                <div class="bg-overlay">
                                    <div class="bg-overlay-content flex-column" data-hover-animate="fadeIn">
                                        <div class="portfolio-desc p-0 center" data-hover-animate="fadeInDownSmall"
                                            data-hover-animate-out="fadeOutUpSmall" data-hover-speed="350">
                                            <h3><a href="#">Open Imagination</a></h3>
                                            <span><a href="#">Media</a>, <a href="#">Icons</a></span>
                                        </div>
                                    </div>
                                    <div class="bg-overlay-bg" data-hover-animate="fadeIn"></div>
                                </div>
                            </div>
                        </div>
                    </article>

                    <article class="portfolio-item col-lg-3 col-md-4 col-sm-6 col-12">
                        <div class="grid-inner">
                            <div class="portfolio-image">
                                <a href="#">
                                    <img src="one-page/images/portfolio/mixed/7.jpg" alt="Backpack Contents">
                                </a>
                                <div class="bg-overlay">
                                    <div class="bg-overlay-content flex-column" data-hover-animate="fadeIn">
                                        <div class="portfolio-desc p-0 center" data-hover-animate="fadeInDownSmall"
                                            data-hover-animate-out="fadeOutDownSmall" data-hover-speed="350">
                                            <h3><a href="#">Backpack Contents</a></h3>
                                            <span><a href="#">UI Elements</a>, <a href="#">Icons</a></span>
                                        </div>
                                    </div>
                                    <div class="bg-overlay-bg" data-hover-animate="fadeIn"></div>
                                </div>
                            </div>
                        </div>
                    </article>

                </div><!-- #portfolio end -->

                <div class="topmargin center"><a href="#" class="button button-border button-circle fw-semibold">View More
                        Projects</a></div>

            </div> --}}





            <div id="section-contact" class=" section-form" style="padding-bottom: 20px !important">



                <div class=" clearfix">
                    <iframe class="h-100 map-contact-us"
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3966.2661524317405!2d106.64887841476916!3d-6.228599195491247!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69fb588b4591bf%3A0x94e2c809ac22a79e!2sMedia%20Kagumi%20From%20Yokesen!5e0!3m2!1sen!2sid!4v1643271485111!5m2!1sen!2sid"
                        style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                    <div class="container position-relative container-contact-us" >
                        
                        <div class="row justify-content-center">
                            <div class="col-lg-7 col-md-10 col-12">
                                <div class="card contact-us border-0 mx-lg-4 mx-0">
                                    <div class="card-body ">

                                        <h2 class="text-center mx-md-auto mx-2 mt-3 bottommargin font-body"
                                            style="max-width: 700px; font-size: 27px;">
                                            Ingin mengetahui lebih lanjut tentang <span class="red-part">Kagumi</span>?
                                        </h2>
                                        <div class="mx-auto topmargin" style="">
                                            <div class="row justify-content-center">

                                                <div class="col-lg-12">


                                                    <div class="form-result"></div>

                                                    <form class="row mb-0 meeting-form" id="template-contactform"
                                                        name="template-contactform" action="{{ route('makeContactUs') }}"
                                                        method="post">
                                                        @csrf


                                                        <div class="col-md-12 mb-4">
                                                            <input type="text" id="template-contactform-name"
                                                                name="name"
                                                                class="sm-form-control border-form-control required"
                                                                placeholder="Name" value="{{ old('name') }}" />
                                                            <div style="color: red; font-size:11px" id="err-name">

                                                            </div>
                                                        </div>
                                                        <div class="col-md-12 mb-4">
                                                            <input type="email" id="template-contactform-email"
                                                                name="email"
                                                                class="required email sm-form-control border-form-control"
                                                                placeholder="Email Address" value="{{ old('email') }}" />
                                                            <div style="color: red; font-size:11px" id="err-email">

                                                            </div>
                                                        </div>

                                                        <div class="w-100"></div>

                                                        <div class="col-md-12 mb-4">
                                                            <input type="text" id="template-contactform-phone"
                                                                name="whatsapp" value="{{ old('phone') }}"
                                                                class="sm-form-control border-form-control"
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

                                                        <div class="w-100"></div>


                                                        <div class="g-recaptcha" data-callback="recaptchaCallback"
                                                            data-sitekey="6LdLM1UeAAAAANIPJEOY3Bo_7bysZ5pSdgMMkyc5"></div>
                                                        <div class="col-12 center mb-4">
                                                            <button
                                                                class="button button-border btn-sub button-circle fw-medium ms-0 topmargin-sm"
                                                                type="submit" id="template-contactform-submit" disabled
                                                                name="template-contactform-submit" value="submit">Join
                                                                Now</button>
                                                            <br>
                                                            <small
                                                                style="display: block; font-size: 13px; margin-top: 15px;">We'll
                                                                do our
                                                                best to
                                                                get back to you within 2-3 working days.</small>
                                                        </div>

                                                        <div class="w-100"></div>

                                                        <div class="col-12 d-none">
                                                            <input type="text" id="template-contactform-botcheck"
                                                                name="template-contactform-botcheck" value=""
                                                                class="sm-form-control" />
                                                        </div>

                                                        <input type="hidden" name="prefix"
                                                            value="template-contactform-">

                                                    </form>


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
   

            let email = $('input[name="email"]').val() ?? "";
            let name = $('input[name="name"]').val();
            let phone = $('input[name="phone"]').val();
            let company = $('input[name="company"]').val();
            

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




            if (errorName || errorEmail || errorPhone || errorCompany ) {
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
    {{-- @if (Session::has('successMsg'))
        <script>
            console.log('success');
            Swal.fire(
                'Success!',
                'Account executive kami akan menghubungi Anda, terima kasih!',
                'success'
            );
        </script>
        <script type="text/javascript">
            $(function() {
                console.log("Begin");

                $.ajax({
                    type: "GET",
                    url: "{{ route('getFutureEvent') }}",

                    success: function(result) {
                        console.log("Success");
                        // alert("Success");
                    },
                    error: function(xhr) {
                        //Do Something to handle error
                        console.log(xhr.responseText);


                    }
                });
            });
        </script>
    @endif --}}

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
