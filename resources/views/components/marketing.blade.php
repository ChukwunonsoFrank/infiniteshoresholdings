<!DOCTYPE html>
<html lang="zxx" class="theme-light">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <!-- Animate CSS -->
    <link rel="stylesheet" href="assets/css/animate.min.css">
    <!-- Meanmenu CSS -->
    <link rel="stylesheet" href="assets/css/meanmenu.css">
    <!-- Boxicons CSS -->
    <link rel="stylesheet" href="assets/css/boxicons.min.css">
    <!-- Flaticon CSS -->
    <link rel="stylesheet" href="assets/css/flaticon.css">
    <!-- Nice Select CSS -->
    <link rel="stylesheet" href="assets/css/nice-select.min.css">
    <!-- Owl Carousel CSS -->
    <link rel="stylesheet" href="assets/css/owl.carousel.min.css">
    <!-- Owl Carousel Default CSS -->
    <link rel="stylesheet" href="assets/css/owl.theme.default.min.css">
    <!-- Odometer CSS -->
    <link rel="stylesheet" href="assets/css/odometer.min.css">
    <!-- Magnific Popup CSS -->
    <link rel="stylesheet" href="assets/css/magnific-popup.min.css">
    <!-- Style CSS -->
    <link rel="stylesheet" href="assets/css/style.css">
    <!-- Dark CSS -->
    <link rel="stylesheet" href="assets/css/dark.css">
    <!-- Responsive CSS -->
    <link rel="stylesheet" href="assets/css/responsive.css">

    <title>Infinite Shores Holdings - Online Banking Services</title>

    <link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">
    <link rel="manifest" href="/site.webmanifest">
</head>

<body>

    <!-- Start Preloader Area -->
    <div class="preloader" style="display: none;">
        <div class="loader">
            <div class="shadow"></div>
            <div class="box"></div>
        </div>
    </div>
    <!-- End Preloader Area -->

    <!-- Start Top Header Area -->
    <div class="top-header-area">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <ul class="top-header-information">
                        <li>
                            <i class="bx bx-envelope"></i>
                            <a href="mailto:support@infiniteshoresholdings.com">support@infiniteshoresholdings.com</a>
                        </li>

                        <li>
                            <i class="bx bxs-phone"></i>
                            <a href="tel:15143125678">+1 (514) 312-5678</a>
                        </li>
                    </ul>
                </div>

                <div class="col-lg-6">
                    <ul class="top-header-others">
                        <li>
                            <i class="bx bx-user"></i>
                            <a href="{{ route('login') }}">Sign In</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- End Top Header Area -->

    <!-- Start Navbar Area -->
    <div class="navbar-area">
        <div class="main-responsive-nav">
            <div class="container">
                <div class="main-responsive-menu mean-container">
                    <div class="mean-bar"><a href="#nav" class="meanmenu-reveal"
                            style="right:0;left:auto;"><span><span><span></span></span></span></a>
                        <nav class="mean-nav">
                            <ul class="navbar-nav" style="display: none;">

                                <li class="nav-item">
                                    <a href="credit-card.html" class="nav-link active">
                                        Credit Cards
                                    </a>
                                </li>

                                <li class="nav-item">
                                    <a href="loans.html" class="nav-link">
                                        Loans
                                    </a>
                                </li>

                                <li class="nav-item mean-last">
                                    <a href="contact.html" class="nav-link">
                                        Contact
                                    </a>
                                </li>
                            </ul>

                            <div class="others-options d-flex align-items-center">
                                <div class="option-item">
                                    <a href="open-account.html" class="default-btn">Open an account with us</a>
                                </div>
                            </div>
                        </nav>
                    </div>
                    <div class="logo">
                        <a href="index.html">
                            <img src="assets/img/logo-1.png" class="black-logo" alt="image">
                            <img src="assets/img/white-logo.png" class="white-logo" alt="image">
                        </a>
                    </div>
                </div>
            </div>
        </div>

        <div class="main-navbar">
            <div class="container">
                <nav class="navbar navbar-expand-md navbar-light">
                    <a class="navbar-brand" href="{{ route('home') }}">
                        <img src="assets/img/logo-1.png" class="black-logo" alt="image">
                        <img src="assets/img/white-logo.png" class="white-logo" alt="image">
                    </a>

                    <div class="mean-push"></div>
                    <div class="collapse navbar-collapse mean-menu" id="navbarSupportedContent"
                        style="display: none;">
                        <ul class="navbar-nav">
                            <li class="nav-item">
                                <a href="{{ route('home') }}" class="nav-link active">
                                    Home
                                </a>
                            </li>

                            <li class="nav-item">
                                <a href="{{ route('about') }}" class="nav-link">
                                    About Us
                                </a>
                            </li>

                            <li class="nav-item">
                                <a href="{{ route('services') }}" class="nav-link">
                                    Services
                                </a>
                            </li>

                            <li class="nav-item">
                                <a href="{{ route('contact') }}" class="nav-link">
                                    Contact
                                </a>
                            </li>
                        </ul>

                        <div class="others-options d-flex align-items-center">
                            <div class="option-item">
                                <a href="{{ route('register') }}" class="default-btn">Open an account with us</a>
                            </div>
                        </div>
                    </div>
                </nav>
            </div>
        </div>

        <div class="others-option-for-responsive">
            <div class="container">
                <div class="dot-menu">
                    <div class="inner">
                        <div class="circle circle-one"></div>
                        <div class="circle circle-two"></div>
                        <div class="circle circle-three"></div>
                    </div>
                </div>

                <div class="container">
                    <div class="option-inner">
                        <div class="others-options d-flex align-items-center">
                            <div class="option-item">
                                <a href="{{ route('register') }}" class="default-btn">Open an account with us</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Navbar Area -->

    {{ $slot }}

    <!-- Start Footer Area -->
    <section class="footer-area pt-100 pb-70">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-sm-6">
                    <div class="single-footer-widget">
                        <div class="footer-logo">
                            <h2><a href="index.html">Infinite Shores Holdings</a></h2>

                            <p>Providing Premium Financing Services to customers all around the globe.</p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-sm-6">
                    <div class="single-footer-widget">
                        <h3>Contact</h3>

                        <ul class="footer-contact-info">
                            <li>
                                <i class="bx bxs-phone"></i>
                                <span>Phone</span>
                                <a href="tel:15147939-357">+1 (514) 7939-357</a>
                            </li>
                            <li>
                                <i class="bx bx-envelope"></i>
                                <span>Email</span>
                                <a
                                    href="mailto:support@infiniteshoresholdings.com">support@infiniteshoresholdings.com</a>
                            </li>
                            <li>
                                <i class="bx bx-map"></i>
                                <span>Address</span>
                                6890 Blvd, The Bronx, NY 1058 <br> New York, USA
                            </li>
                        </ul>
                    </div>
                </div>

                <div class="col-lg-3 col-sm-6">
                    <div class="single-footer-widget pl-5">
                        <h3>Services</h3>

                        <ul class="quick-links">
                            <li>
                                <a href="#">Bank accounts</a>
                            </li>
                            <li>
                                <a href="#">Savings</a>
                            </li>
                            <li>
                                <a href="#">Credit cards</a>
                            </li>
                            <li>
                                <a href="#">Loans</a>
                            </li>
                            <li>
                                <a href="#">Car finance</a>
                            </li>
                            <li>
                                <a href="#">Mobile banking</a>
                            </li>
                            <li>
                                <a href="#">Online banking</a>
                            </li>
                        </ul>
                    </div>
                </div>

                <div class="col-lg-3 col-sm-6">
                    <div class="single-footer-widget">
                        <h3>Help &amp; guidance</h3>

                        <ul class="quick-links">
                            <li>
                                <a href="#">Privacy statement</a>
                            </li>
                            <li>
                                <a href="#">Corporate information</a>
                            </li>
                            <li>
                                <a href="#">Online banking help</a>
                            </li>
                            <li>
                                <a href="#">Managing your money</a>
                            </li>
                            <li>
                                <a href="#">Proving your identity</a>
                            </li>
                            <li>
                                <a href="#">International banking</a>
                            </li>
                            <li>
                                <a href="#">Help centre</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Footer Area -->

    <!-- Start Copy Right Area -->
    <div class="copyright-area">
        <div class="container">
            <div class="copyright-area-content">
                <p style="font-size: 13px;">
                    © Copyright. Infinite Shores Holdings. All Rights Reserved.
                </p>
            </div>
        </div>
    </div>
    <!-- End Copy Right Area -->

    <!-- Start Go Top Area -->
    <div class="go-top">
        <i class="bx bx-up-arrow-alt"></i>
    </div>
    <!-- End Go Top Area -->

    <!-- Jquery Slim JS -->
    <script src="assets/js/jquery.min.js"></script>
    <!-- Bootstrap JS -->
    <script src="assets/js/bootstrap.bundle.min.js"></script>
    <!-- Meanmenu JS -->
    <script src="assets/js/jquery.meanmenu.js"></script>
    <!-- Nice Select JS -->
    <script src="assets/js/jquery.nice-select.min.js"></script>
    <!-- Owl Carousel JS -->
    <script src="assets/js/owl.carousel.min.js"></script>
    <!-- Magnific Popup JS -->
    <script src="assets/js/jquery.magnific-popup.min.js"></script>
    <!-- Odometer JS -->
    <script src="assets/js/odometer.min.js"></script>
    <!-- Jquery Appear JS -->
    <script src="assets/js/jquery.appear.min.js"></script>
    <!-- Ajaxchimp JS -->
    <script src="assets/js/jquery.ajaxchimp.min.js"></script>
    <!-- Form Validator JS -->
    <script src="assets/js/form-validator.min.js"></script>
    <!-- Contact JS -->
    <script src="assets/js/contact-form-script.js"></script>
    <!-- Wow JS -->
    <script src="assets/js/wow.min.js"></script>
    <!-- Custom JS -->
    <script src="assets/js/main.js"></script>

</body>

</html>
