<!DOCTYPE html>
<html class="no-js" lang="ZXX">
<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <link rel="icon" type="image/x-icon" href="{{ asset('assets/Landing_1/assets/images/new/3C.png') }}" />

    @include('web.default.includes.metas')
    <title>{{ $pageTitle ?? '' }}{{ !empty($generalSettings['site_name']) ? (' | '.$generalSettings['site_name']) : '' }}</title>

    <!-- Styles -->
    <link rel="stylesheet" href="{{ asset('assets/Landing_1/assets/plugins/css/bootstrap.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/Landing_1/assets/plugins/css/animate.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/Landing_1/assets/plugins/css/owl.carousel.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/Landing_1/assets/plugins/css/maginific-popup.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/Landing_1/assets/plugins/css/nice-select.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/Landing_1/assets/plugins/css/icofont.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/Landing_1/assets/plugins/css/uicons.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/libs/bootstrap-datepicker/css/bootstrap-datepicker.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/Landing_1/assets/libs/Inte_Tel_Code/css/intlTelInput.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/Landing_1/style.css') }}" />
    @stack('styles')

</head>
<body class="ep-magic-cursor">
<!-- Preloader -->
<!-- ... (keep your preloader, header, and mobile nav here) ... -->
<!-- Start Preloader  -->
<div id="preloader">
    <div id="ep-preloader" class="ep-preloader">
        <div class="animation-preloader">
            <div class="spinner"></div>
        </div>
    </div>
</div>
<!-- End Preloader -->
<!-- Start Back To Top  -->
<div class="progress-wrap">
    <svg class="progress-circle svg-content" width="100%" height="100%" viewBox="-1 -1 102 102">
        <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98" />
    </svg>
</div>
<!-- End Back To Top -->
<!-- Mobile Menu Modal -->
<div class="modal mobile-menu-modal offcanvas-modal fade" id="offcanvas-modal">
    <div class="modal-dialog offcanvas-dialog">
        <div class="modal-content">
            <div class="modal-header offcanvas-header">
                <!-- offcanvas-logo-start -->
                <div class="offcanvas-logo">
                    <a href="index.html">
                        <img src="/assets/Landing_1/assets/images/new/3C.png" alt="logo" />
                    </a>
                </div>
                <!-- offcanvas-logo-end -->
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                    <i class="fi fi-ss-cross"></i>
                </button>
            </div>
            <div class="mobile-menu-modal-main-body">
                <!-- offcanvas-menu start -->
                <nav id="offcanvas-menu" class="navigation offcanvas-menu">
                    <ul id="nav mobile-nav" class="list-none offcanvas-men-list">
                        <li>
                            <a class="" href="javascript:void(0)">Home</a>

                        </li>
                        <li>
                            <a href="#">About Us</a>
                        </li>
                        <li>
                            <a href="#">Contact Us</a>
                        </li>
                    </ul>
                </nav>
            </div>
        </div>
    </div>
</div>
<!-- End Mobile Menu Modal -->
<!-- Header Section -->
@include('web.default.pages.partials.header')

<!-- Main Content -->
<main>
    @yield('content')
</main>

<!-- Footer Section -->
@include('web.default.pages.partials.footer')


<!-- Scripts -->
<script src="{{ asset('assets/Landing_1/assets/plugins/js/jquery.min.js') }}"></script>
<script src="{{ asset('assets/Landing_1/assets/plugins/js/jquery-migrate.js') }}"></script>
<script src="{{ asset('assets/Landing_1/assets/plugins/js/bootstrap.min.js') }}"></script>
<script src="{{ asset('assets/Landing_1/assets/plugins/js/gsap/gsap.js') }}"></script>
<script src="{{ asset('assets/Landing_1/assets/plugins/js/gsap/gsap-scroll-to-plugin.js') }}"></script>
<script src="{{ asset('assets/Landing_1/assets/plugins/js/gsap/gsap-scroll-smoother.js') }}"></script>
<script src="{{ asset('assets/Landing_1/assets/plugins/js/gsap/gsap-scroll-trigger.js') }}"></script>
<script src="{{ asset('assets/Landing_1/assets/plugins/js/gsap/gsap-split-text.js') }}"></script>
<script src="{{ asset('assets/Landing_1/assets/plugins/js/wow.min.js') }}"></script>
<script src="{{ asset('assets/Landing_1/assets/plugins/js/owl.carousel.min.js') }}"></script>
<script src="{{ asset('assets/Landing_1/assets/plugins/js/magnific-popup.min.js') }}"></script>
<script src="{{ asset('assets/Landing_1/assets/plugins/js/jquery.counterup.min.js') }}"></script>
<script src="{{ asset('assets/Landing_1/assets/plugins/js/waypoints.min.js') }}"></script>
<script src="{{ asset('assets/Landing_1/assets/plugins/js/nice-select.min.js') }}"></script>
<script src="{{ asset('assets/Landing_1/assets/plugins/js/ep-cursor.js') }}"></script>
<script src="{{ asset('assets/Landing_1/assets/plugins/js/backToTop.js') }}"></script>
<script src="{{ asset('assets/Landing_1/assets/plugins/js/active.js') }}"></script>
<script src="{{ asset('assets/Landing_1/assets/libs/Inte_Tel_Code/js/intlTelInput.js') }}"></script>

<script src="{{ asset('assets/libs/bootstrap-datepicker/js/bootstrap-datepicker.min.js') }}"></script>


<script>
    var input = document.querySelector("#phone");
    if (input) {
        window.intlTelInput(input, {
            preferredCountries: ["sa", "eg"],
            separateDialCode: true,
            utilsScript: "{{ asset('assets/Landing_1/assets/libs/Inte_Tel_Code/js/utils.js') }}"
        });
    }
</script>
@stack('scripts')

</body>
</html>
