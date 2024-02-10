<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>@yield('title', 'G-Finance')</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="{{ asset('assets/img/favicon.ico') }}" rel="icon">
    <link href="{{ asset('assets/img/apple-touch-icon.png') }}" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,600;1,700&family=Montserrat:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&family=Raleway:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap" rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="{{ asset('assets/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/aos/aos.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/glightbox/css/glightbox.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/swiper/swiper-bundle.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/remixicon/remixicon.css') }}" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="{{ asset('assets/css/main.css') }}" rel="stylesheet">
</head>

<body class="page-@yield('body-class', 'index')">
    <!-- ======= Header ======= -->
    <header id="header" class="header d-flex align-items-center fixed-top">
        <div class="container-fluid container-xl d-flex align-items-center justify-content-between">
            <a href="{{ route('welcome') }}" class="logo d-flex align-items-center">
                <img src="{{ asset('assets/img/logo.png') }}" alt="">
                <h1 class="d-flex align-items-center">G-Finance</h1>
            </a>

            <i class="mobile-nav-toggle mobile-nav-show bi bi-list"></i>
            <i class="mobile-nav-toggle mobile-nav-hide d-none bi bi-x"></i>

            <nav id="navbar" class="navbar">
                <ul>
                    <li><a href="{{ route('welcome') }}" class="{{ Request::is('/') ? 'active' : '' }}">Home</a></li>

                    <li><a href="/services" class="{{ Request::is('/services') ? 'active' : '' }}">Services</a></li>

                    <li><a href="/contact" class="{{ Request::is('/contact') ? 'active' : '' }}">Contact</a></li>
                    
                    <li><a href="/loan" class="{{ Request::is('/loan') ? 'active' : '' }}">Get a Loan</a></li>
                </ul>
            </nav>
            <!-- .navbar -->
        </div>
    </header>
    <!-- End Header -->

    <!-- ======= Content ======= -->
    @yield('content')
    <!-- End Content -->

    <!-- ======= Footer ======= -->
    <footer id="footer" class="footer">
        <div class="footer-content">
            <div class="container">
                <div class="row gy-4">
                    <div class="col-lg-5 col-md-12 footer-info">
                        <a href="index.html" class="logo d-flex align-items-center">
                            <img src="assets/img/logo.png" alt="" />
                            <span>G-Finaice</span>
                        </a>
                        <p>
                            Cras fermentum odio eu feugiat lide par naso tierra. Justo eget
                            nada terra videa magna derita valies darta donna mare fermentum
                            iaculis eu non diam phasellus.
                        </p>
                        <div class="social-links d-flex mt-3">
                            <a href="#" class="twitter"><i class="bi bi-twitter"></i></a>
                            <a href="#" class="facebook"><i class="bi bi-facebook"></i></a>
                            <a href="#" class="instagram"><i class="bi bi-instagram"></i></a>
                            <a href="#" class="linkedin"><i class="bi bi-linkedin"></i></a>
                        </div>
                    </div>

                    <div class="col-lg-2 col-6 footer-links">
                        <h4>Useful Links</h4>
                        <ul>
                            <li><i class="bi bi-dash"></i> <a href="#">Home</a></li>
                            <li><i class="bi bi-dash"></i> <a href="#">About us</a></li>
                            <li><i class="bi bi-dash"></i> <a href="#">Services</a></li>
                            <li>
                                <i class="bi bi-dash"></i> <a href="#">Terms of service</a>
                            </li>
                            <li>
                                <i class="bi bi-dash"></i> <a href="#">Privacy policy</a>
                            </li>
                        </ul>
                    </div>

                    <div class="col-lg-3 col-md-12 footer-contact text-center text-md-start">
                        <h4>Contact Us</h4>
                        <p>
                            A108 Adam Street <br />
                            New York, NY 535022<br />
                            United States <br /><br />
                            <a type="tel" href="tel:+18127039247"><strong>Phone:</strong> +1 8127 039 247</a><br />
                            <a type="email" href="mail:mail@g-finanice.com"><strong>Email:</strong> info@example.com</a><br />
                        </p>
                    </div>
                </div>
            </div>
        </div>

        <div class="footer-legal">
            <div class="container">
                <div class="copyright">
                    &copy; Copyright <strong><span>G-Finaice</span></strong>. All Rights Reserved
                </div>
                <div class="credits">
                    <!-- All the links in the footer should remain intact. -->
                    <!-- You can delete the links only if you purchased the pro version. -->
                    <!-- Licensing information: https://Ip-core.com/license/ -->
                    <!-- Purchase the pro version with working PHP/AJAX contact form: https://Ip-core.com/nova-bootstrap-business-template/ -->
                    Designed by <a href="https://github.com/Ip-Tec/">Ip~Tec</a>
                </div>
            </div>
        </div>
    </footer>
    <!-- End Footer --><!-- End Footer -->

    <!-- Scroll Top Button -->
    <a href="#" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

    <!-- Preloader -->
    <div id="preloader"></div>

    <!-- Vendor JS Files -->
    <script src="{{ asset('assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/aos/aos.js') }}"></script>
    <script src="{{ asset('assets/vendor/glightbox/js/glightbox.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/swiper/swiper-bundle.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/isotope-layout/isotope.pkgd.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/php-email-form/validate.js') }}"></script>

    <!-- Template Main JS File -->
    <script src="{{ asset('assets/js/main.js') }}"></script>
</body>

</html>