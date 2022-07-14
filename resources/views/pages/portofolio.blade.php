@extends('master2')
@section('css')
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />
    <link rel="stylesheet" href="{{ asset('asset/css/contact-us.css') }}?v=1.0.0">

    <style>
        @media screen and (max-width: 996px) {
            .slider-element {
                min-height: 60vh !important;
            }
        }
    </style>
@endsection
@section('banner')
    <section id="slider" class="slider-element bgchanger include-header mb-0 "
        style="background-color: #de1d38 ; background-image: url('{{ asset('images/watch-bg.png') }}'); background-position: center center; background-size: cover;">
        <div class="slider-inner">

            <div class="vertical-middle slider-element-fade">
                <div class="container py-5">
                    <div class="emphasis-title">
                        <h2 class="mt-2 fw-semibold " style=" color: white; line-height: 1.3; letter-spacing: -2px;">
                            Our Portofolio
                        </h2>
                    </div>
                    <span class=" mt-3 d-block details-banner" style="color: white">Penasaran tentang hasil karya
                        <strong>Kagumi</strong>? Cek di bawah ini! </span>


                </div>
            </div>


        </div>
    </section>
@endsection

@section('content')
    <section id="content">
        <div class="content-wrap py-0">



            <div id="section-works" class="page-section pt-0">
                <div class="section m-0">
                    <div class="container clearfix">
                        <div class="mx-auto center" style="max-width: 900px;">
                            <h2 class="mb-0 fw-light ls1">Kualitas adalah kunci utama dari kesuksesan kami. Kami memberikan
                                tidak kurang dari yang terbaik untuk setiap klien kami. </h2>
                        </div>
                    </div>
                </div>



                <!-- Portfolio Items
                        ============================================= -->
                <div class="container-fluid">
                    <div class="row align-items-center mt-lg-0 mt-5">
                        <div class="col-lg-4 mb-lg-0 mb-3">
                            <h2 class="mb-3 ls1 text-lg-start text-center">Media Sosial</h2>
                            <h4 class="mb-0 fw-light ls1 text-lg-start text-center">Menambah jumlah like, share dan interaksi di akun media sosial klien kami.</h4>
                        </div>
                        <div class="col-lg-8">
                            <div class="portfolio grid-container row g-0">



                                <article class="portfolio-item col-lg-3 col-md-3 col-sm-6 col-12">
                                    <div class="grid-inner">
                                        <div class="portfolio-image">
                                            <a href="https://www.facebook.com/clubsobatbadak/">
                                                <img src="{{ asset('images/portofolio/medsos/csb-fb.jpeg') }}"
                                                    alt="Locked Steel Gate">
                                            </a>
                                            <div class="bg-overlay">
                                                <div class="bg-overlay-content flex-column" data-hover-animate="fadeIn">
                                                    <div class="portfolio-desc p-0 center"
                                                        data-hover-animate="fadeInDownSmall"
                                                        data-hover-animate-out="fadeOutUpSmall" data-hover-speed="350">
                                                        <h3><a href="#">Facebook Club Sobat Badak</a></h3>
                                                        <span><a href="https://www.facebook.com/clubsobatbadak/">Link</a></span>
                                                    </div>
                                                </div>
                                                <div class="bg-overlay-bg" data-hover-animate="fadeIn"></div>
                                            </div>
                                        </div>
                                    </div>
                                </article>

                                <article class="portfolio-item col-lg-3 col-md-3 col-sm-6 col-12">
                                    <div class="grid-inner">
                                        <div class="portfolio-image">
                                            <a href="https://www.youtube.com/c/clubsobatbadak">
                                                <img src="{{ asset('images/portofolio/medsos/csb-youtube.jpeg') }}"
                                                    alt="Mac Sunglasses">
                                            </a>
                                            <div class="bg-overlay">
                                                <div class="bg-overlay-content flex-column" data-hover-animate="fadeIn">
                                                    <div class="portfolio-desc p-0 center"
                                                        data-hover-animate="fadeInDownSmall"
                                                        data-hover-animate-out="fadeOutUpSmall" data-hover-speed="350">
                                                        <h3><a href="#">Youtube Club Sobat Badak</a></h3>
                                                        <span><a href="https://www.youtube.com/c/clubsobatbadak">Link</a></span>
                                                    </div>
                                                </div>
                                                <div class="bg-overlay-bg" data-hover-animate="fadeIn"></div>
                                            </div>
                                        </div>
                                    </div>
                                </article>
                                <article class="portfolio-item col-lg-3 col-md-3 col-sm-6 col-12">
                                    <div class="grid-inner">
                                        <div class="portfolio-image">
                                            <a href="https://www.instagram.com/clubsobatbadak/">
                                                <img src="{{ asset('images/portofolio/medsos/csb-ig.jpeg') }}"
                                                    alt="Mac Sunglasses">
                                            </a>
                                            <div class="bg-overlay">
                                                <div class="bg-overlay-content flex-column" data-hover-animate="fadeIn">
                                                    <div class="portfolio-desc p-0 center"
                                                        data-hover-animate="fadeInDownSmall"
                                                        data-hover-animate-out="fadeOutUpSmall" data-hover-speed="350">
                                                        <h3><a href="#">Instagram Club Sobat Badak</a></h3>
                                                        <span><a href="https://www.instagram.com/clubsobatbadak/">Link</a></span>
                                                    </div>
                                                </div>
                                                <div class="bg-overlay-bg" data-hover-animate="fadeIn"></div>
                                            </div>
                                        </div>
                                    </div>
                                </article>
                                <article class="portfolio-item col-lg-3 col-md-3 col-sm-6 col-12">
                                    <div class="grid-inner">
                                        <div class="portfolio-image">
                                            <a href="https://www.tiktok.com/@clubsobatbadak">
                                                <img src="{{ asset('images/portofolio/medsos/csb-tiktok.jpeg') }}"
                                                    alt="Mac Sunglasses">
                                            </a>
                                            <div class="bg-overlay">
                                                <div class="bg-overlay-content flex-column" data-hover-animate="fadeIn">
                                                    <div class="portfolio-desc p-0 center"
                                                        data-hover-animate="fadeInDownSmall"
                                                        data-hover-animate-out="fadeOutUpSmall" data-hover-speed="350">
                                                        <h3><a href="#">Tiktok Club Sobat Badak</a></h3>
                                                        <span><a href="https://www.tiktok.com/@clubsobatbadak">Link</a></span>
                                                    </div>
                                                </div>
                                                <div class="bg-overlay-bg" data-hover-animate="fadeIn"></div>
                                            </div>
                                        </div>
                                    </div>
                                </article>


                            </div><!-- #portfolio end -->

                        </div>
                    </div>
                    <div class="row align-items-center mt-lg-0 mt-5">

                        <div class="col-lg-8 order-lg-1 order-2">
                            <div class="portfolio grid-container row g-0">



                               

                                <article class="portfolio-item col-lg-6 col-md-6 col-sm-6 col-12 wide">
                                    <div class="grid-inner">
                                        <div class="portfolio-image">
                                            <a href="#">
                                                <img src="{{ asset('images/portofolio/web/csb-web-2.jpeg') }}"
                                                    alt="Open Imagination">
                                            </a>
                                            <div class="bg-overlay">
                                                <div class="bg-overlay-content flex-column" data-hover-animate="fadeIn">
                                                    <div class="portfolio-desc p-0 center"
                                                        data-hover-animate="fadeInDownSmall"
                                                        data-hover-animate-out="fadeOutUpSmall" data-hover-speed="350">
                                                        <h3><a href="#">Homepage Club Sobat Badak</a></h3>
                                                        <span><a href="https://sobatbadak.club">Link</a></span>
                                                    </div>
                                                </div>
                                                <div class="bg-overlay-bg" data-hover-animate="fadeIn"></div>
                                            </div>
                                        </div>
                                    </div>
                                </article>

                                <article class="portfolio-item col-lg-6 col-md-6 col-sm-6 col-12 wide">
                                    <div class="grid-inner">
                                        <div class="portfolio-image">
                                            <a href="#">
                                                <img src="{{ asset('images/portofolio/web/csb-web-5.jpeg') }}"
                                                    alt="Open Imagination">
                                            </a>
                                            <div class="bg-overlay">
                                                <div class="bg-overlay-content flex-column" data-hover-animate="fadeIn">
                                                    <div class="portfolio-desc p-0 center"
                                                        data-hover-animate="fadeInDownSmall"
                                                        data-hover-animate-out="fadeOutUpSmall" data-hover-speed="350">
                                                        <h3><a href="#">Homepage Club Sobat Badak</a></h3>
                                                        <span><a href="https://sobatbadak.club">Link</a></span>
                                                    </div>
                                                </div>
                                                <div class="bg-overlay-bg" data-hover-animate="fadeIn"></div>
                                            </div>
                                        </div>
                                    </div>
                                </article>
                               
                                
                                <article class="portfolio-item col-lg-6 col-md-6 col-sm-6 col-12 ">
                                    <div class="grid-inner">
                                        <div class="portfolio-image">
                                            <a href="#">
                                                <img src="{{ asset('images/portofolio/web/csb-web-15.jpeg') }}"
                                                    alt="Open Imagination">
                                            </a>
                                            <div class="bg-overlay">
                                                <div class="bg-overlay-content flex-column" data-hover-animate="fadeIn">
                                                    <div class="portfolio-desc p-0 center"
                                                        data-hover-animate="fadeInDownSmall"
                                                        data-hover-animate-out="fadeOutUpSmall" data-hover-speed="350">
                                                        <h3><a href="#">Dashboard dan Fitur Club Sobat Badak</a></h3>
                                                        <span><a href="https://sobatbadak.club/dashboard">Link</a></span>
                                                    </div>
                                                </div>
                                                <div class="bg-overlay-bg" data-hover-animate="fadeIn"></div>
                                            </div>
                                        </div>
                                    </div>
                                </article>
                                <article class="portfolio-item col-lg-6 col-md-6 col-sm-6 col-12 ">
                                    <div class="grid-inner">
                                        <div class="portfolio-image">
                                            <a href="#">
                                                <img src="{{ asset('images/portofolio/web/csb-web-14.jpeg') }}"
                                                    alt="Open Imagination">
                                            </a>
                                            <div class="bg-overlay">
                                                <div class="bg-overlay-content flex-column" data-hover-animate="fadeIn">
                                                    <div class="portfolio-desc p-0 center"
                                                        data-hover-animate="fadeInDownSmall"
                                                        data-hover-animate-out="fadeOutUpSmall" data-hover-speed="350">
                                                        <h3><a href="#">Mading Club  Sobat Badak</a></h3>
                                                        <span><a href="https://sobatbadak.club/dashboard">Link</a></span>
                                                    </div>
                                                </div>
                                                <div class="bg-overlay-bg" data-hover-animate="fadeIn"></div>
                                            </div>
                                        </div>
                                    </div>
                                </article>
                                <article class="portfolio-item col-lg-6 col-md-6 col-sm-6 col-12 ">
                                    <div class="grid-inner">
                                        <div class="portfolio-image">
                                            <a href="#">
                                                <img src="{{ asset('images/portofolio/web/csb-web-13.jpeg') }}"
                                                    alt="Open Imagination">
                                            </a>
                                            <div class="bg-overlay">
                                                <div class="bg-overlay-content flex-column" data-hover-animate="fadeIn">
                                                    <div class="portfolio-desc p-0 center"
                                                        data-hover-animate="fadeInDownSmall"
                                                        data-hover-animate-out="fadeOutUpSmall" data-hover-speed="350">
                                                        <h3><a href="#">Dashboard dan Fitur Club Sobat Badak</a></h3>
                                                        <span><a href="https://sobatbadak.club/dashboard">Link</a></span>
                                                    </div>
                                                </div>
                                                <div class="bg-overlay-bg" data-hover-animate="fadeIn"></div>
                                            </div>
                                        </div>
                                    </div>
                                </article>
                                <article class="portfolio-item col-lg-6 col-md-6 col-sm-6 col-12 ">
                                    <div class="grid-inner">
                                        <div class="portfolio-image">
                                            <a href="#">
                                                <img src="{{ asset('images/portofolio/web/csb-web-9.jpeg') }}"
                                                    alt="Open Imagination">
                                            </a>
                                            <div class="bg-overlay">
                                                <div class="bg-overlay-content flex-column" data-hover-animate="fadeIn">
                                                    <div class="portfolio-desc p-0 center"
                                                        data-hover-animate="fadeInDownSmall"
                                                        data-hover-animate-out="fadeOutUpSmall" data-hover-speed="350">
                                                        <h3><a href="#">Mading Club  Sobat Badak</a></h3>
                                                        <span><a href="https://sobatbadak.club/dashboard">Link</a></span>
                                                    </div>
                                                </div>
                                                <div class="bg-overlay-bg" data-hover-animate="fadeIn"></div>
                                            </div>
                                        </div>
                                    </div>
                                </article>
                            </div><!-- #portfolio end -->

                        </div>
                        <div class="col-lg-4 order-lg-2 order-1 mb-lg-0 mb-3">
                            <h2 class="mb-0 ls1 text-lg-start text-center">Website</h2>
                            <h4 class="mb-0 fw-light ls1 text-lg-start text-center">Menghidupkan interaksi dengan user dan meningkatkan branding dengan menyediakan platform terbaik.</h4>

                        </div>
                    </div>
                    <div class="row align-items-center mt-lg-0 mt-5">
                        <div class="col-lg-4 mb-lg-0 mb-3">
                            <h2 class="mb-3 ls1 text-lg-start text-center">Gamification</h2>
                            <h4 class="mb-0 fw-light ls1 text-lg-start text-center">Menghadirkan games untuk menambah interaksi dan loyalitas.</h4>
                        </div>
                        <div class="col-lg-8">
                            <div class="portfolio grid-container row g-0">



                               

                                <article class="portfolio-item col-lg-6 col-md-6 col-sm-6 col-12 wide">
                                    <div class="grid-inner">
                                        <div class="portfolio-image">
                                            <a href="https://sobatbadak.club/quiz-show">
                                                <img src="{{ asset('images/portofolio/web/csb-game.jpeg') }}"
                                                    alt="Open Imagination">
                                            </a>
                                            <div class="bg-overlay">
                                                <div class="bg-overlay-content flex-column" data-hover-animate="fadeIn">
                                                    <div class="portfolio-desc p-0 center"
                                                        data-hover-animate="fadeInDownSmall"
                                                        data-hover-animate-out="fadeOutUpSmall" data-hover-speed="350">
                                                        <h3><a href="#">Gamification Club Sobat Badak</a></h3>
                                                        <span><a href="https://sobatbadak.club/quiz-show">Link</a></span>
                                                    </div>
                                                </div>
                                                <div class="bg-overlay-bg" data-hover-animate="fadeIn"></div>
                                            </div>
                                        </div>
                                    </div>
                                </article>

                                <article class="portfolio-item col-lg-6 col-md-6 col-sm-6 col-12 wide">
                                    <div class="grid-inner">
                                        <div class="portfolio-image">
                                            <a href="https://sobatbadak.club/tebak-kata">
                                                <img src="{{ asset('images/portofolio/web/csb-game-4.jpeg') }}"
                                                    alt="Open Imagination">
                                            </a>
                                            <div class="bg-overlay">
                                                <div class="bg-overlay-content flex-column" data-hover-animate="fadeIn">
                                                    <div class="portfolio-desc p-0 center"
                                                        data-hover-animate="fadeInDownSmall"
                                                        data-hover-animate-out="fadeOutUpSmall" data-hover-speed="350">
                                                        <h3><a href="#">Tebak Kata Club Sobat Badak</a></h3>
                                                        <span><a href="https://sobatbadak.club/tebak-kata">Link</a></span>
                                                    </div>
                                                </div>
                                                <div class="bg-overlay-bg" data-hover-animate="fadeIn"></div>
                                            </div>
                                        </div>
                                    </div>
                                </article>
                               
                                
                                <article class="portfolio-item col-lg-6 col-md-6 col-sm-6 col-12 ">
                                    <div class="grid-inner">
                                        <div class="portfolio-image">
                                            <a href="https://sobatbadak.club/rejeki-sobat">
                                                <img src="{{ asset('images/portofolio/web/csb-game-5.jpeg') }}"
                                                    alt="Open Imagination">
                                            </a>
                                            <div class="bg-overlay">
                                                <div class="bg-overlay-content flex-column" data-hover-animate="fadeIn">
                                                    <div class="portfolio-desc p-0 center"
                                                        data-hover-animate="fadeInDownSmall"
                                                        data-hover-animate-out="fadeOutUpSmall" data-hover-speed="350">
                                                        <h3><a href="#">"Rejeki Sobat" Club Sobat Badak</a></h3>
                                                        <span><a href="https://sobatbadak.club/rejeki-sobat">Link</a></span>
                                                    </div>
                                                </div>
                                                <div class="bg-overlay-bg" data-hover-animate="fadeIn"></div>
                                            </div>
                                        </div>
                                    </div>
                                </article>
                                <article class="portfolio-item col-lg-6 col-md-6 col-sm-6 col-12 ">
                                    <div class="grid-inner">
                                        <div class="portfolio-image">
                                            <a href="https://sobatbadak.club/lelang">
                                                <img src="{{ asset('images/portofolio/web/csb-game-6.jpeg') }}"
                                                    alt="Open Imagination">
                                            </a>
                                            <div class="bg-overlay">
                                                <div class="bg-overlay-content flex-column" data-hover-animate="fadeIn">
                                                    <div class="portfolio-desc p-0 center"
                                                        data-hover-animate="fadeInDownSmall"
                                                        data-hover-animate-out="fadeOutUpSmall" data-hover-speed="350">
                                                        <h3><a href="#">"Bid Auction" Club  Sobat Badak</a></h3>
                                                        <span><a href="https://sobatbadak.club/lelang">Link</a></span>
                                                    </div>
                                                </div>
                                                <div class="bg-overlay-bg" data-hover-animate="fadeIn"></div>
                                            </div>
                                        </div>
                                    </div>
                                </article>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="topmargin center"><a href="#"
                        class="button button-border button-circle fw-semibold">View More
                        Projects</a></div>

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
