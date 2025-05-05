<!DOCTYPE html>
<html>

<head>


    <meta charset="utf-8">
    <meta name="viewport"
        content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0">

    <title>InfiniteShoresHoldings - Dashboard</title>

    <meta name="description"
        content=" InfiniteShoresHoldings provide expert financial guidance, investment solutions, and personalized strategies to help you achieve your goals. Partner with us for a secure and prosperous tomorrow.">
    <meta name="keywords"
        content="Financial services, Investment strategies, Wealth management, Retirement planning, Financial advice, Portfolio diversification, Tax planning, Asset allocation, Personal finance, Financial education">

    <!-- Favicon -->
    <link rel="shortcut icon" href="/favicon.ico" type="image/x-icon">
    <link rel="icon" href="/favicon.ico" type="image/x-icon">

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:ital,wght@0,200..800;1,200..800&display=swap" rel="stylesheet">

    <!-- Icons. Uncomment required icon fonts -->
    <link rel="stylesheet" href="{{ asset('dash/assets/vendor/fonts/boxicons.css') }}">

    <!-- Core CSS -->
    <link rel="stylesheet" href="{{ asset('dash/assets/vendor/css/core.css') }}"
        class="template-customizer-core-css">
    <link rel="stylesheet" href="{{ asset('dash/assets/vendor/css/theme-default.css') }}"
        class="template-customizer-theme-css">
    <link rel="stylesheet" href="{{ asset('dash/assets/css/demo.css') }}">

    <!-- Vendors CSS -->
    <link rel="stylesheet"
        href="{{ asset('dash/assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.css') }}">

    <!-- Smartsupp Live Chat script -->
<script type="text/javascript">
    var _smartsupp = _smartsupp || {};
    _smartsupp.key = '92d4e149e541338c3b22e67d865571418a1ae73e';
    window.smartsupp||(function(d) {
      var s,c,o=smartsupp=function(){ o._.push(arguments)};o._=[];
      s=d.getElementsByTagName('script')[0];c=d.createElement('script');
      c.type='text/javascript';c.charset='utf-8';c.async=true;
      c.src='https://www.smartsuppchat.com/loader.js?';s.parentNode.insertBefore(c,s);
    })(document);
    </script>
    <noscript> Powered by <a href=“https://www.smartsupp.com” target=“_blank”>Smartsupp</a></noscript>
    

    <!-- Page CSS -->

    <!-- Helpers -->
    <script src="{{ asset('dash/assets/vendor/js/helpers.js') }}"></script>
    <style type="text/css">
        .layout-menu-fixed .layout-navbar-full .layout-menu,
        .layout-page {
            padding-top: 0px !important;
        }

        .content-wrapper {
            padding-bottom: 0px !important;
        }
    </style>

    <!--! Template customizer & Theme config files MUST be included after core stylesheets and helpers.js in the <head> section -->
    <!--? Config:  Mandatory theme config file contain global vars & default theme options, Set your preferred theme option in this file.  -->
    <!-- <script src="assets/js/config.js"></script> -->
</head>

<body>


    <!-- Layout wrapper -->
    <div class="layout-wrapper layout-content-navbar">
        <div class="layout-container">
            <!-- Menu -->

            <aside id="layout-menu" class="layout-menu menu-vertical menu bg-menu-theme" data-bg-class="bg-menu-theme">
                <div class="app-brand demo">
                    <a href="/" class="app-brand-link">
                        <!-- logo here -->
                        <img src="{{ asset('assets/img/logo-1.png') }}" alt="" class="img-fluid">
                    </a>

                    <a href="javascript:void(0);"
                        class="layout-menu-toggle menu-link text-large ms-auto d-block d-xl-none">
                        <i class="bx bx-chevron-left bx-sm align-middle"></i>
                    </a>
                </div>

                <div class="menu-inner-shadow"></div>

                <ul class="menu-inner py-1 ps">
                    <!-- Dashboard -->
                    <li class="menu-item">
                        <a href="/dashboard" class="menu-link">
                            <i class="menu-icon tf-icons bx bx-home-circle"></i>
                            <div data-i18n="Analytics">Dashboard</div>
                        </a>
                    </li>

                    <!-- Make Deposit -->
                    <li class="menu-item">
                        <a href="/transactions" class="menu-link">
                            <i class="menu-icon tf-icons bx bx-receipt"></i>
                            <div data-i18n="Analytics">Transactions</div>
                        </a>
                    </li>

                    <li class="menu-item">
                        <a href="/deposit" class="menu-link">
                            <i class="menu-icon tf-icons bx bx-money"></i>
                            <div data-i18n="Analytics">Deposits</div>
                        </a>
                    </li>

                    <li class="menu-item">
                        <a href="/international-transfer" class="menu-link">
                            <i class="menu-icon tf-icons bx bx-globe"></i>
                            <div data-i18n="Analytics">International Transfer</div>
                        </a>
                    </li>

                    <li class="menu-item">
                        <a href="/domestic-transfer" class="menu-link">
                            <i class="menu-icon tf-icons bx bx-bar-chart"></i>
                            <div data-i18n="Analytics">Domestic Transfer</div>
                        </a>
                    </li>

                    <li class="menu-item">
                        <a href="/local-transfer" class="menu-link">
                            <i class="menu-icon tf-icons bx bx-wallet"></i>
                            <div data-i18n="Analytics">Local Transfer</div>
                        </a>
                    </li>

                    <li class="menu-item  ">
                        <a href="javascript:void(0);" class="menu-link menu-toggle">
                            <i class="menu-icon tf-icons bx bx-user"></i>
                            <div>Account</div>
                        </a>

                        <ul class="menu-sub">
                            <li class="menu-item">
                                <a href="/profile" class="menu-link">
                                    <div>Edit Profile</div>
                                </a>
                            </li>
                            <li class="menu-item">
                                <a href="/profile/password" class="menu-link">
                                    <div>Change Password</div>
                                </a>
                            </li>
                        </ul>
                    </li>

                    <!-- signout -->
                    <li class="menu-item">
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            @csrf
                        </form>
                        <a href="{{ route('logout') }}"
                            onclick="event.preventDefault();
                        document.getElementById('logout-form').submit();"
                            class="menu-link">
                            <i class="menu-icon tf-icons bx bx-log-out"></i>
                            <div>Logout</div>
                        </a>
                    </li>


                    <div class="ps__rail-x" style="left: 0px; bottom: 0px;">
                        <div class="ps__thumb-x" tabindex="0" style="left: 0px; width: 0px;"></div>
                    </div>
                    <div class="ps__rail-y" style="top: 0px; right: 4px;">
                        <div class="ps__thumb-y" tabindex="0" style="top: 0px; height: 0px;"></div>
                    </div>
                </ul>
            </aside>
            <!-- / Menu -->

            <!-- Layout container -->
            <div class="layout-page">
                <!-- Navbar -->

                <nav class="layout-navbar container-fluid navbar navbar-expand-xl navbar-detached align-items-center bg-navbar-theme"
                    id="layout-navbar">
                    <div class="layout-menu-toggle navbar-nav align-items-xl-center me-3 me-xl-0 d-xl-none">
                        <a class="nav-item nav-link px-0 me-xl-4" href="javascript:void(0)">
                            <i class="bx bx-menu bx-sm"></i>
                        </a>
                    </div>
                    <div class="layout-menu-toggle navbar-nav align-items-xl-center me-3 me-xl-0 d-xl-none">
                        <a class="nav-item nav-link px-0 me-xl-4" href="javascript:void(0)">
                            <img src="{{ asset('assets/img/logo-1.png') }}" alt="" class="img-fluid">
                        </a>
                    </div>

                    <div class="navbar-nav-right d-flex align-items-center" id="navbar-collapse">
                        <!-- Search -->
                        <div class="navbar-nav align-items-center">
                            <div class="nav-item d-flex align-items-center">
                                {{-- <div class="text-secondary text-uppercase">
                                    {{ auth()->user()->username }} </div> --}}
                            </div>
                        </div>
                        <!-- /Search -->

                        <ul class="navbar-nav flex-row align-items-center ms-auto">


                            <!-- User -->
                            <li class="nav-item navbar-dropdown dropdown-user dropdown">
                                <a class="nav-link dropdown-toggle hide-arrow" href="javascript:void(0);"
                                    data-bs-toggle="dropdown">
                                    <div class="avatar avatar-online">
                                        <img src="{{ auth()->user()->profile_picture ? asset('storage/' . auth()->user()->profile_picture) : asset('dash/assets/img/avatars/placeholder.png') }}"
                                            alt="" class="w-px-40 h-auto rounded-circle">
                                    </div>
                                </a>
                                <ul class="dropdown-menu dropdown-menu-end">
                                    <li>
                                        <a class="dropdown-item" href="#">
                                            <div class="d-flex">
                                                <div class="flex-shrink-0 me-3">
                                                    <div class="avatar avatar-online">
                                                        <img src="{{ auth()->user()->profile_picture ? asset('storage/' . auth()->user()->profile_picture) : asset('dash/assets/img/avatars/placeholder.png') }}"
                                                            alt="" class="w-px-40 h-auto rounded-circle">
                                                    </div>
                                                </div>
                                                <div class="flex-grow-1">
                                                    <span
                                                        class="fw-semibold d-block text-capitalize">{{ auth()->user()->fullname }}</span>
                                                    <small class="text-muted">{{ auth()->user()->account_number }}</small>
                                                </div>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <div class="dropdown-divider"></div>
                                    </li>
                                    <li>
                                        <a class="dropdown-item" href="/profile">
                                            <i class="bx bx-user me-2"></i>
                                            <span class="align-middle">My Profile</span>
                                        </a>
                                    </li>
                                    <li>
                                        <div class="dropdown-divider"></div>
                                    </li>
                                    <li>
                                        <a class="dropdown-item" href="{{ route('logout') }}"
                                            onclick="event.preventDefault();
                                        document.getElementById('logout-form').submit();">
                                            <i class="bx bx-power-off me-2"></i>
                                            <span class="align-middle">Sign Out</span>
                                        </a>
                                    </li>

                                </ul>
                            </li>
                            <!--/ User -->
                        </ul>
                    </div>
                </nav>


                <!-- / Navbar -->

                <!-- Content wrapper -->
                <div class="content-wrapper">
                    <!-- Content -->

                    <div class="container-fluid flex-grow-1 container-p-y">



                        <div class="content-wrapper">
                            <!-- Content -->

                            {{ $slot }}

                            <!-- Footer -->
                            <footer class="content-footer footer bg-footer-theme">
                                <div
                                    class="container-xxl d-flex flex-wrap justify-content-between py-2 flex-md-row flex-column">


                                </div>
                            </footer>
                            <!-- / Footer -->

                            <div class="content-backdrop fade"></div>
                        </div>



                    </div>
                    <!-- / Content -->

                    <!-- Footer -->
                    <footer class="content-footer footer bg-footer-theme">
                        <div
                            class="container-fluid d-flex flex-wrap justify-content-between py-2 flex-md-row flex-column">
                        </div>
                    </footer>
                    <!-- / Footer -->

                    <div class="content-backdrop fade"></div>
                </div>
                <!-- Content wrapper -->
            </div>
            <!-- / Layout page -->
        </div>

        <!-- Overlay -->
        <div class="layout-overlay layout-menu-toggle"></div>
    </div>
    <!-- / Layout wrapper -->


    <!-- Core JS -->
    <!-- build:js assets/vendor/js/core.js -->
    <script src="{{ asset('dash/assets/vendor/libs/jquery/jquery.js') }}"></script>
    <script src="{{ asset('dash/assets/vendor/libs/popper/popper.js') }}"></script>
    <script src="{{ asset('dash/assets/vendor/js/bootstrap.js') }}"></script>
    <script src="{{ asset('dash/assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.js') }}"></script>

    <script src="{{ asset('dash/assets/vendor/js/menu.js') }}"></script>
    <!-- endbuild -->

    <!-- Vendors JS -->

    <!-- Main JS -->
    <script src="{{ asset('dash/assets/js/main.js') }}"></script>




    <iframe id="tidio-chat-code" style="display: none;" title="Tidio Chat code"></iframe>
    <div id="tidio-chat"><iframe title="Tidio Chat"
            style="display: block; border: medium; position: fixed; inset: auto 9px 35px auto; width: 258px; height: 94px; opacity: 1; color-scheme: none; background: transparent !important; margin: 0px; max-height: 100%; max-width: 100vw; transform: translateY(0px); transition: none 0s ease 0s !important; visibility: visible; z-index: 999999999 !important; border-radius: 47px 30px 47px 47px;"
            id="tidio-chat-iframe"
            srcdoc="
                    <html lang=&quot;en&quot;>
                    <head>
                    <meta name=&quot;viewport&quot; content=&quot;width=device-width, user-scalable=no&quot;>
                      </head>
                    <body  class=&quot;awesome-iframe&quot;>
                      <div></div>
                    </body>
                    "></iframe>
    </div>
</body>

</html>
