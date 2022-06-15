<!--begin::Entry-->
@extends('master')

@section('cssinline')
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />

@endsection


@section('content')
    <div class="d-flex flex-column-fluid flex-column">
        <section class="banner-hero">
            <div class="container h-100">
                <div class="row h-100">
                    <div class="col-md-6 my-auto">
                        <h1 class="title-banner mb-5">Mengapa Brand Anda Perlu
                            Bergabung Dengan Kagumi?</h1>
                        <p class="detail-banner">“Kagumi hadir untuk membantu membangun
                            komunitas yang loyal bagi brand melalui Digital
                            Activation dan mengubahnya menjadi aset yang
                            berharga.”</p>
                        <div class="inner-padding"></div>
                        <div class="d-flex ">
                            <button class="btn btn-gold mr-5">Join now</button>

                            <button class="btn btn-white-alt btn-pricing">Our Client</button>
                        </div>

                    </div>
                    <div class="col-md-6 my-auto">
                        <div class="swiper mySwiper">
                            <div class="swiper-wrapper">
                                <div class="swiper-slide">
                                    {{-- <img src="{{ asset('images/emas.png') }}" alt="" class="img-slide"> --}}
                                    <div class="d-flex align-items-center h-100">
                                        <img src="https://www.gallerysystems.com/wp-content/uploads/crafting-your-digital-strategy-1.png"
                                            alt="" class="img-banner">

                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="d-flex align-items-center h-100">
                                        <img src="https://www.gallerysystems.com/wp-content/uploads/crafting-your-digital-strategy-1.png"
                                            alt="" class="img-banner">

                                    </div>

                                </div>
                                <div class="swiper-slide">
                                    <div class="d-flex align-items-center h-100">
                                        <img src="https://www.gallerysystems.com/wp-content/uploads/crafting-your-digital-strategy-1.png"
                                            alt="" class="img-banner">

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

        </section>
        <section class="section-layanan">
            <div class="container">
                <h2 class="title-part text-center mb-5">
                    <img src="{{ asset('images/logo-kagumi.png') }}" alt="" class="">
                    Layanan Apa Saja Yang Disediakan <span>Kagumi</span>?

                </h2>
                <p class="detail-part text-center">Kami bekerjasama dengan client untuk membantu anda mengembangkan bisnis
                    yang anda miliki <br>
                    ke segala penjuru dan membangun komunitas brand dengan kegiatan-kegiatan digital.</p>
                <div class="inner-padding"></div>
                <div class="row justify-content-center wow fadeInLeft" data-wow-duration="0.9s" >
                    @component('components.custom.layanan-card')
                        @slot('color')
                            white
                        @endslot
                        @slot('url')
                            https://www.goersapp.com/gem/images/KV-p-500.png
                        @endslot
                        @slot('title')
                            Online Event
                        @endslot
                    @endcomponent
                    @component('components.custom.layanan-card')
                        @slot('color')
                            red
                        @endslot
                        @slot('url')
                            https://image.pngaaa.com/532/3498532-middle.png
                        @endslot
                        @slot('title')
                            Live Streaming
                        @endslot
                    @endcomponent
                    @component('components.custom.layanan-card')
                        @slot('color')
                            white
                        @endslot
                        @slot('url')
                            https://www.goersapp.com/gem/images/KV-p-500.png
                        @endslot
                        @slot('title')
                            Online Event
                        @endslot
                    @endcomponent
                    @component('components.custom.layanan-card')
                        @slot('color')
                            red
                        @endslot
                        @slot('url')
                            https://image.pngaaa.com/532/3498532-middle.png
                        @endslot
                        @slot('title')
                            Live Streaming
                        @endslot
                    @endcomponent
                    @component('components.custom.layanan-card')
                        @slot('color')
                            white
                        @endslot
                        @slot('url')
                            https://www.goersapp.com/gem/images/KV-p-500.png
                        @endslot
                        @slot('title')
                            Online Event
                        @endslot
                    @endcomponent
                </div>
            </div>
        </section>
        <section class="section-komunitas" style="background-color: white">
            <div class="inner-padding"></div>
            <div class="container">
                <h2 class="title-part text-center"> <img src="{{ asset('images/logo-kagumi.png') }}" alt=""
                        class=""> Mengapa Brand Membutuhkan Sebuah Komunitas?</h2>
                <div class="inner-padding"></div>
                <div class="row">
                    <div class="col-md-5 my-auto wow fadeInLeft" data-wow-duration="0.9s">
                        <img src="{{ asset('images/group.png') }}" alt="" class="img-komunitas">
                    </div>
                    <div class="col-md-7 my-auto wow fadeInRight" data-wow-duration="0.9s">
                        @component('components.custom.itm-kom')

                            @slot('side')
                                back
                            @endslot
                            @slot('url')
                                https://alexharkness.com/wp-content/uploads/2020/06/logo-2.png
                            @endslot
                            @slot('title')
                                Two-ways conversation → Increase brand visibility
                            @endslot

                        @endcomponent
                        @component('components.custom.itm-kom')

                            @slot('side')
                                front
                            @endslot
                            @slot('url')
                                https://alexharkness.com/wp-content/uploads/2020/06/logo-2.png
                            @endslot
                            @slot('title')
                                Actively drive engagement, keeps them coming back for more
                            @endslot

                        @endcomponent
                        @component('components.custom.itm-kom')

                            @slot('side')
                                back
                            @endslot
                            @slot('url')
                                https://alexharkness.com/wp-content/uploads/2020/06/logo-2.png
                            @endslot
                            @slot('title')
                                Customers actively involved with the development of the brand
                            @endslot

                        @endcomponent
                        @component('components.custom.itm-kom')

                            @slot('side')
                                front
                            @endslot
                            @slot('url')
                                https://alexharkness.com/wp-content/uploads/2020/06/logo-2.png
                            @endslot
                            @slot('title')
                                Building and protecting a brand’s reputation
                            @endslot

                        @endcomponent
                        @component('components.custom.itm-kom')

                            @slot('side')
                                back
                            @endslot
                            @slot('url')
                                https://alexharkness.com/wp-content/uploads/2020/06/logo-2.png
                            @endslot
                            @slot('title')
                                More chance to turn ordinary customer into loyal advocates
                            @endslot

                        @endcomponent
                    </div>
                </div>
            </div>
            <div class="inner-padding"></div>
        </section>
        <!--begin::Container-->
        <section class="section-client">
            <div class="container">
                <h2 class="title-part text-center"> <img src="{{ asset('images/logo-kagumi.png') }}" alt=""
                        class=""> Siapa Saja Klien <span>Kagumi</span>?</h2>
                <div class="inner-padding"></div>
                <div class="row">
                    <div class="col-md-3 col-6">
                        <img src="https://www.kindpng.com/picc/m/257-2576933_transparent-fake-png-dummy-company-logo-png-png.png" alt="" class="img-client">
                        <h6 class="title-client">PT .DTAt</h6>
                    </div>
                    <div class="col-md-3 col-6">
                        <img src="https://www.kindpng.com/picc/m/257-2576933_transparent-fake-png-dummy-company-logo-png-png.png" alt="" class="img-client">
                        <h6 class="title-client">PT .DTAt</h6>
                    </div>
                    <div class="col-md-3 col-6">
                        <img src="https://www.kindpng.com/picc/m/257-2576933_transparent-fake-png-dummy-company-logo-png-png.png" alt="" class="img-client">
                        <h6 class="title-client">PT .DTAt</h6>
                    </div>
                    <div class="col-md-3 col-6">
                        <img src="https://www.kindpng.com/picc/m/257-2576933_transparent-fake-png-dummy-company-logo-png-png.png" alt="" class="img-client">
                        <h6 class="title-client">PT .DTAt</h6>
                    </div>
                    <div class="col-md-3 col-6">
                        <img src="https://www.kindpng.com/picc/m/257-2576933_transparent-fake-png-dummy-company-logo-png-png.png" alt="" class="img-client">
                        <h6 class="title-client">PT .DTAt</h6>
                    </div>
                </div>
            </div>

        </section>
        <section class="section-testimoni">
            <div class="container">
                <h2 class="title-part text-center"> <img src="{{ asset('images/logo-kagumi.png') }}" alt=""
                        class=""> Apa Kata Mereka Tentang <span>Kagumi</span>?</h2>
                <div class="inner-padding"></div>
                <div class="swiper swiperTestimoni">
                    <div class="swiper-wrapper">
                        @component('components.custom.testi-card')
                            @slot('img')
                                https://alexharkness.com/wp-content/uploads/2020/06/logo-2.png
                            @endslot
                            @slot('details')
                                Terimakasih untuk para team Resonansi
                                yang telah membantu dalam
                                mengembangkan binis di perusahaan kami
                            @endslot
                        @endcomponent
                        @component('components.custom.testi-card')
                            @slot('img')
                                https://alexharkness.com/wp-content/uploads/2020/06/logo-2.png
                            @endslot
                            @slot('details')
                                Terimakasih untuk para team Resonansi
                                yang telah membantu dalam
                                mengembangkan binis di perusahaan kami
                            @endslot
                        @endcomponent
                        @component('components.custom.testi-card')
                            @slot('img')
                                https://alexharkness.com/wp-content/uploads/2020/06/logo-2.png
                            @endslot
                            @slot('details')
                                Terimakasih untuk para team Resonansi
                                yang telah membantu dalam
                                mengembangkan binis di perusahaan kami
                            @endslot
                        @endcomponent
                    </div>
                    <div class="swiper-button-next"></div>
                    <div class="swiper-button-prev"></div>
                    <div class="swiper-pagination"></div>
                </div>
            </div>
        </section>
        <section class="section-form">
            <div class="container">
                <h2 class="title-part text-center">Tertarik Untuk Bergabung & Berdiskusi Dengan
                    <span>Account Executive Kami</span> ??
                </h2>
                <div class="inner-padding-sm"></div>
                <div class="row">
                    <div class="col-md-6 img-mbl-form">
                        <img src="{{ asset('images/calendar.png') }}" alt="" class="img-form">
                    </div>
                    <div class="col-md-6 my-auto">
                        <div class="card">
                            <div class="card-body">
                                <h5 class="text-center title-part mb-4">
                                    Yuk Bertemu dengan <span>Account Executive</span> Kami!
                                </h5>

                                <form action="" class="meeting-form">
                                    <input type="text" name="name" class="form-control" placeholder="Nama" required>
                                    <div class="form-error" id="error_name"></div>
                                    <input type="text" name="email" class="form-control" placeholder="Email" required>
                                    <div class="form-error" id="error_email"></div>
                                    <input type="number" name="whatsapp" class="form-control"
                                        placeholder="Nomor Handphone" required>
                                    <div class="form-error" id="error_whatsapp"></div>
                                    <input type="text" name="company" class="form-control" placeholder="Nama Perusahaan"
                                        required>
                                    <div class="form-error" id="error_company"></div>
                                    <input type="date" name="date" class="form-control" placeholder="Tanggal bertemu"
                                        required>
                                    <div class="form-error" id="error_date"></div>
                                    <input type="time" name="time" class="form-control" placeholder="Waktu bertemu"
                                        required>
                                    <div class="form-error" id="error_time"></div>
                                    <div class="d-flex justify-content-center mt-7">
                                        <button class="btn btn-prim">
                                            Book Now!
                                        </button>
                                    </div>
                                </form>
                            </div>
                        </div>

                    </div>
                </div>
            </div>

        </section>
        <!--end::Container-->
    </div>
@endsection


@section('jsPage')
    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
    <script>
        var swiper = new Swiper(".mySwiper", {
            cssMode: true,
            navigation: {
                nextEl: ".swiper-button-next",
                prevEl: ".swiper-button-prev",
            },
            pagination: {
                el: ".swiper-pagination",
            },
            mousewheel: true,
            keyboard: true,
            autoplay: {
                delay: 25000,
            },
        });
    </script>
    <script>
        var swiper = new Swiper(".swiperTestimoni", {
            cssMode: true,
            navigation: {
                nextEl: ".swiper-button-next",
                prevEl: ".swiper-button-prev",
            },
            pagination: {
                el: ".swiper-pagination",
            },
            mousewheel: true,
            keyboard: true,
            autoplay: {
                delay: 2500,
            },
        });
    </script>
@endsection


<!--end::Entry-->
