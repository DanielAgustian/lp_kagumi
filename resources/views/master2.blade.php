<!DOCTYPE html>
<html dir="ltr" lang="en-US">

<head>

  <meta name="description" content="Kagumi hadir untuk membantu membangun komunitas bagi brand melalui digital activation." />
  <meta name="keywords" content="digital activation and gamification, brand community marketing, digital technology integration, content creator management" />
  <meta name="robots" content="index, follow" />
  <meta name="author" content="Mediakagumi.com" />
  <meta name="google-site-verification" content="oQk4soQuvFJqEjTkl6S6xFgrd-MYazzr1S_eapX8ikE" />

    <!-- Stylesheets
 ============================================= -->
    <link
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700|Roboto:300,400,500,700|IBM+Plex+Serif:300,400,500,600&display=swap"
        rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="{{ asset('asset/css/template/bootstrap.css') }}" type="text/css" />
    <link rel="stylesheet" href="{{ asset('asset/css/template/style.css') }}" type="text/css" />

    <!-- One Page Module Specific Stylesheet -->
    <link rel="stylesheet" href="{{ asset('asset/css/template/onepage.css') }}" type="text/css" />
    <!-- / -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link rel="stylesheet" href="{{ asset('asset/css/template/dark.css') }}" type="text/css" />
    <link rel="stylesheet" href="{{ asset('asset/css/template/font-icons.css') }}" type="text/css" />
    <link rel="stylesheet" href="{{ asset('asset/css/template/et-line.css') }}" type="text/css" />
    <link rel="stylesheet" href="{{ asset('asset/css/template/animate.css') }}" type="text/css" />
    <link rel="stylesheet" href="{{ asset('asset/css/template/magnific-popup.css') }}" type="text/css" />

    <link rel="stylesheet" href="{{ asset('asset/css/template/fonts.css') }}" type="text/css" />

    <link rel="stylesheet" href="{{ asset('asset/css/custom.css') }}?v=1.0.8" type="text/css" />
    @yield('css')
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <!-- Document Title
 ============================================= -->
    <title>Media Kagumi | Digital Activation and Gamification | Brand Community Marketing</title>

    <style>
        .font-secondary {
            font-family: 'IBM Plex Serif', serif !important;
        }

        .bgchanger {
            background-color: #EEE;
        }

        #oc-watch .owl-item,
        #oc-watch .owl-item img {
            width: auto;
            height: auto;
            margin: 0 auto;
        }

        #oc-watch.owl-carousel .owl-stage {
            display: flex;
            align-items: center;
            justify-content: center;
        }

        #oc-watch .owl-dots {
            bottom: 20px;
        }

        #oc-watch .owl-dots {
            counter-reset: dots;
        }

        #oc-watch.owl-carousel .owl-dots .owl-dot {
            margin: 0 4px;
            width: auto;
            height: auto;
            opacity: .3 !important;
            border: none;
            background-color: transparent !important;
            font-family: 'IBM Plex Serif', serif;
        }

        #oc-watch .owl-dot:after {
            content: "";
            position: absolute;
            background: #111;
            height: 2px;
            width: 0;
            top: 50%;
            margin: -1px 4px 0;
            transition: all .3s ease;
        }

        #oc-watch.owl-carousel .owl-dots .owl-dot.active {
            margin-right: 34px;
            opacity: 1 !important;
        }

        #oc-watch .owl-dot.active:after {
            width: 26px;
        }

        #oc-watch .owl-dot:before {
            counter-increment: dots;
            content: counter(dots, decimal-leading-zero);
        }

        #slider {
            -webkit-transition: background-color .4s ease;
            -o-transition: background-color .4s ease;
            transition: background-color .4s ease;
        }

        @-webkit-keyframes mouse-scroll {
            0% {
                top: 10%;
                opacity: 1;
            }

            100% {
                top: 30%;
                opacity: 0;
            }
        }

        @keyframes mouse-scroll {
            0% {
                top: 10%;
                opacity: 1;
            }

            100% {
                top: 30%;
                opacity: 0;
            }
        }

        @-webkit-keyframes scroll-mouse {
            from {
                transform: translateY(-7px);
            }

            to {
                transform: translateY(0);
            }
        }

        @keyframes scroll-mouse {
            from {
                transform: translateY(-7px);
            }

            to {
                transform: translateY(0);
            }
        }

        .scroll-inner {
            position: relative;
            width: 26px;
            height: 40px;
            border-radius: 18px;
            border: 2px solid #555;
            -webkit-animation: scroll-mouse 1s infinite;
            animation: scroll-mouse 1s infinite;
        }

        .scroll-wheel {
            position: absolute;
            top: 10%;
            left: 50%;
            width: 6px;
            height: 6px;
            border-radius: 50%;
            transform: translateX(-50%);
            background-color: #555;
            -webkit-animation: mouse-scroll 1s infinite;
            -moz-animation: mouse-scroll 1s infinite;
            -o-animation: mouse-scroll 1s infinite;
            animation: mouse-scroll 1s infinite;
        }

        .one-page-arrow {
            bottom: 40px;
            right: 40px;
            left: auto;
        }

    </style>

</head>

<body class="stretched side-push-panel">

    <div class="body-overlay"></div>

    {{-- <div id="side-panel" class="bgchanger">

        <div id="side-panel-trigger-close" class="side-panel-trigger"><a href="#"><i class="icon-line-cross"></i></a>
        </div>

        <div class="side-panel-wrap">

            <div class="widget widget_links clearfix">

                <h4>About Canvas</h4>

                <div style="font-size: 14px; line-height: 1.7;">
                    <address style="line-height: 1.7;">
                        795 Folsom Ave, Suite 600<br>
                        San Francisco, CA 94107<br>
                    </address>

                    <div class="clear topmargin-sm"></div>

                    <abbr title="Phone Number">Phone:</abbr> (1) 8547 632521<br>
                    <abbr title="Fax">Fax:</abbr> (1) 11 4752 1433<br>
                    <abbr title="Email Address">Email:</abbr> info@canvas.com
                </div>

            </div>

            <div class="widget clearfix">

                <h4>Connect Socially</h4>

                <a href="#" class="social-icon si-small si-colored si-facebook" title="Facebook">
                    <i class="icon-facebook"></i>
                    <i class="icon-facebook"></i>
                </a>
                <a href="#" class="social-icon si-small si-colored si-twitter" title="Twitter">
                    <i class="icon-twitter"></i>
                    <i class="icon-twitter"></i>
                </a>
                <a href="#" class="social-icon si-small si-colored si-github" title="Github">
                    <i class="icon-github"></i>
                    <i class="icon-github"></i>
                </a>
                <a href="#" class="social-icon si-small si-colored si-pinterest" title="Pinterest">
                    <i class="icon-pinterest"></i>
                    <i class="icon-pinterest"></i>
                </a>
                <a href="#" class="social-icon si-small si-colored si-forrst" title="Forrst">
                    <i class="icon-forrst"></i>
                    <i class="icon-forrst"></i>
                </a>
                <a href="#" class="social-icon si-small si-colored si-linkedin" title="LinkedIn">
                    <i class="icon-linkedin"></i>
                    <i class="icon-linkedin"></i>
                </a>
                <a href="#" class="social-icon si-small si-colored si-gplus" title="Google Plus">
                    <i class="icon-gplus"></i>
                    <i class="icon-gplus"></i>
                </a>
                <a href="#" class="social-icon si-small si-colored si-instagram" title="Instagram">
                    <i class="icon-instagram"></i>
                    <i class="icon-instagram"></i>
                </a>
                <a href="#" class="social-icon si-small si-colored si-flickr" title="Flickr">
                    <i class="icon-flickr"></i>
                    <i class="icon-flickr"></i>
                </a>
                <a href="#" class="social-icon si-small si-colored si-skype" title="Skype">
                    <i class="icon-skype"></i>
                    <i class="icon-skype"></i>
                </a>

            </div>

        </div>

    </div> --}}

    <!-- Document Wrapper
 ============================================= -->
    <div id="wrapper" class="clearfix">
        <div class="btn-wa" data-toggle="tooltip" title="Kami Siap Membantu anda">
            <i class="fab fa-whatsapp"></i>
        </div>
        <!-- Header
  ============================================= -->
        <header id="header" class="full-header transparent-header border-full-header header-size-custom"
            data-sticky-shrink="false" data-sticky-offset="full" data-sticky-offset-negative="200">
            <div id="header-wrap">
                <div class="container">
                    <div class="header-row">


                        <div id="logo">
                            <a href="{{ route('homepageNew') }}" class="standard-logo"
                                data-dark-logo="{{ asset('images/logo-kagumi.png') }}"><img
                                    src="{{ asset('images/logo-kagumi.png') }}" alt="Canvas Logo"></a>
                            <a href="{{ route('homepageNew') }}" class="retina-logo"
                                data-dark-logo="{{ asset('images/logo-kagumi.png') }}"><img
                                    src="{{ asset('images/logo-kagumi.png') }}" alt="Canvas Logo"></a>
                        </div><!-- #logo end -->

                        {{-- <div class="header-misc">

							<div class="side-panel-trigger header-misc-icon">
								<a href="#"><i class="icon-ellipsis-v"></i></a>
							</div>

						</div> --}}

                        <div id="primary-menu-trigger" class="{{ set_none_navbar('landingPage') }}">
                            <svg class="svg-trigger" viewBox="0 0 100 100">
                                <path
                                    d="m 30,33 h 40 c 3.722839,0 7.5,3.126468 7.5,8.578427 0,5.451959 -2.727029,8.421573 -7.5,8.421573 h -20">
                                </path>
                                <path d="m 30,50 h 40"></path>
                                <path
                                    d="m 70,67 h -40 c 0,0 -7.5,-0.802118 -7.5,-8.365747 0,-7.563629 7.5,-8.634253 7.5,-8.634253 h 20">
                                </path>
                            </svg>
                        </div>

                        <!-- Primary Navigation============================================= -->
                        <nav class="primary-menu">

                            <ul class="one-page-menu menu-container {{ set_none_navbar('landingPage') }}"
                                data-easing="easeInOutExpo" data-speed="1250" data-offset="65">

                                <li class="menu-item">
                                    <a href="#" class="menu-link" data-href="#section-about">
                                        <div>About</div>
                                    </a>
                                </li>

                                <li class="menu-item">
                                    <a href="#" class="menu-link" data-href="#section-services">
                                        <div>Services</div>
                                    </a>
                                </li>
                                <li class="menu-item">
                                    <a href="#" class="menu-link" data-href="#section-services">
                                        <div>Our Client</div>
                                    </a>
                                </li>
                                <li class="menu-item">
                                    <a href="#" class="menu-link" data-href="#section-blog">
                                        <div>Blog</div>
                                    </a>
                                </li>
                                <li class="menu-item">
                                    <a href="#" class="menu-link" data-href="#section-contact">
                                        <div>Contact Us</div>
                                    </a>
                                </li>
                            </ul>

                        </nav><!-- #primary-menu end -->

                    </div>
                </div>
            </div>
            <div class="header-wrap-clone"></div>
        </header><!-- #header end -->

        @yield('banner')
        <!-- Slider
  ============================================= -->
        <!-- #slider end -->

        @yield('content')
        <!-- Content
  ============================================= -->
        <!-- #content end -->

        <!-- Footer
  ============================================= -->
        <footer id="footer" class="dark border-0">

            <div class="container center {{ set_none_navbar('landingPage') }}">
                <div class="footer-widgets-wrap">

                    <div class="row mx-auto clearfix">

                        <div class="col-lg-4">

                            <div class="widget clearfix">
                                <h4>Site Links</h4>

                                <ul class="list-unstyled footer-site-links mb-0">
                                    <li><a href="#" data-scrollto="#section-about" data-easing="easeInOutExpo"
                                            data-speed="1250" data-offset="70">About Us</a></li>
                                    <li><a href="#" data-scrollto="#section-services" data-easing="easeInOutExpo"
                                            data-speed="1250" data-offset="70">Services</a></li>
                                    <li><a href="#" data-scrollto="#section-services" data-easing="easeInOutExpo"
                                            data-speed="1250" data-offset="70">Our Client</a></li>
                                    <li><a href="#" data-scrollto="#section-blog" data-easing="easeInOutExpo"
                                            data-speed="1250" data-offset="70">Blog</a></li>
                                    <li><a href="#" data-scrollto="#section-contact" data-easing="easeInOutExpo"
                                            data-speed="1250" data-offset="70">Contact Us</a></li>
                                </ul>
                            </div>

                        </div>

                        <div class="col-lg-4">

                            {{-- <div class="widget subscribe-widget clearfix" data-loader="button">
								<h4>Subscribe</h4>

								<div class="widget-subscribe-form-result"></div>
								<form id="widget-subscribe-form" action="include/subscribe.php" method="post" class="mb-0">
									<input type="email" id="widget-subscribe-form-email" name="widget-subscribe-form-email" class="form-control form-control-lg not-dark required email" placeholder="Your Email Address">
									<button class="button button-border button-circle button-light topmargin-sm" type="submit">Subscribe Now</button>
								</form>
							</div> --}}

                        </div>

                        <div class="col-lg-4">

                            <div class="widget clearfix">
                                <h4>Contact</h4>

                                <p class="lead">Jalan Lingkar Luar Barat
                                    <br>Kel. Panunggangan, Kec. Pinang,
                                    <br>Banten 15143
                                </p>

                                {{-- <div class="center topmargin-sm">
                                    <a href="#" class="social-icon inline-block border-0 si-small si-facebook"
                                        title="Facebook">
                                        <i class="icon-facebook"></i>
                                        <i class="icon-facebook"></i>
                                    </a>
                                    <a href="#" class="social-icon inline-block border-0 si-small si-twitter"
                                        title="Twitter">
                                        <i class="icon-twitter"></i>
                                        <i class="icon-twitter"></i>
                                    </a>
                                    <a href="#" class="social-icon inline-block border-0 si-small si-github"
                                        title="Github">
                                        <i class="icon-github"></i>
                                        <i class="icon-github"></i>
                                    </a>
                                    <a href="#" class="social-icon inline-block border-0 si-small si-pinterest"
                                        title="Pinterest">
                                        <i class="icon-pinterest"></i>
                                        <i class="icon-pinterest"></i>
                                    </a>
                                </div> --}}
                            </div>

                        </div>

                    </div>

                </div>
            </div>

            <div id="copyrights">
                <div class="container center clearfix">
                    Copyrights 2022 | Powered by Yokesen
                </div>
            </div>

        </footer><!-- #footer end -->

    </div><!-- #wrapper end -->

    <!-- Go To Top
 ============================================= -->
    {{-- <div id="gotoTop" class="icon-angle-up"></div> --}}

    <!-- JavaScripts
 ============================================= -->
    <script src="{{ asset('asset/js/template/jquery.js') }}"></script>
    <script src="{{ asset('asset/js/template/plugins.min.js') }}"></script>
    <script src="https://maps.google.com/maps/api/js?key=YOUR-API-KEY"></script>

    <!-- Footer Scripts
 ============================================= -->
    <script src="{{ asset('asset/js/template/functions.js') }}"></script>

    <script>
        jQuery(window).on('pluginCarouselReady', function() {
            var owlWatch = $('#oc-watch'),
                owlWatchbg = $('.bgchanger');

            owlWatch.on('translated.owl.carousel changed.owl.carousel', function(event) {
                var bgcolor = owlWatch.find('.active img').attr('data-bg');
                owlWatchbg.css({
                    'background-color': bgcolor
                });
            });
        });
    </script>
    <script>
        $(function() {
            $('[data-toggle="tooltip"]').tooltip();
        })
    </script>
    <script>
        $('.btn-wa').on('click', function() {
            var y = Math.random();
            if (y < 0.5) {
                y = 0
            } else {
                y = 1
            }
            let wa = [6281388886435, 6281388886435]
            window.open(
                `https://wa.me/${wa[y]}?text=Halo%2C%20aku%20mau%20bertanya%20tentang%20servis%20di%20Kagumi`
            )
        })
    </script>
    @yield('js')
</body>

</html>
