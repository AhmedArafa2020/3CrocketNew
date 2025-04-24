@extends(getTemplate().'.layouts.appnew')

@push('styles_top')
    <link rel="stylesheet" href="/assets/default/vendors/swiper/swiper-bundle.min.css">
    <link rel="stylesheet" href="/assets/default/vendors/owl-carousel2/owl.carousel.min.css">
@endpush

{{--@section('content')--}}

{{--    @if(!empty($heroSection))--}}
{{--        @include('web.default.pages.includes.new_hero')--}}
{{--    @endif--}}

{{--    @foreach($homeSections as $homeSection)--}}
{{--        @if($homeSection->name == 'about_section' && !empty($aboutSection))--}}
{{--            @include('web.default.pages.includes.new_about')--}}
{{--        @endif--}}

{{--        @if($homeSection->name == 'brands_section' && !empty($brands))--}}
{{--            @include('web.default.pages.includes.new_brands')--}}
{{--        @endif--}}

{{--        @if($homeSection->name == 'statistics_section')--}}
{{--            @include('web.default.pages.includes.home_statistics')--}}
{{--        @endif--}}

{{--        @if($homeSection->name == 'services_section' && !empty($services))--}}
{{--            @include('web.default.pages.includes.new_services')--}}
{{--        @endif--}}
{{--        @includeWhen($homeSection->name == 'funfacts' && !empty($funfacts), 'web.default.pages.includes.new_funfacts')--}}
{{--        @if($homeSection->name == 'students_section' && !empty($students))--}}
{{--            @include('web.default.pages.includes.new_students')--}}
{{--        @endif--}}

{{--        @if($homeSection->name == 'parents_section' && !empty($parentsTestimonials))--}}
{{--            @include('web.default.pages.includes.new_parents')--}}
{{--        @endif--}}

{{--        @if($homeSection->name == 'pricing_section' && !empty($pricingPlans))--}}
{{--            @include('web.default.pages.includes.new_pricing')--}}
{{--        @endif--}}

{{--        @if($homeSection->name == 'opportunity_section' && !empty($opportunitySection))--}}
{{--            @include('web.default.pages.includes.new_opportunity')--}}
{{--        @endif--}}

{{--        @if($homeSection->name == 'faq_section' && !empty($faqs))--}}
{{--            @include('web.default.pages.includes.new_faq')--}}
{{--        @endif--}}
{{--    @endforeach--}}

{{--    @include('web.default.pages.includes.new_footer')--}}
{{--@endsection--}}


@section('content')




    <!-- Mobile Menu Modal -->
    <div class="modal mobile-menu-modal offcanvas-modal fade" id="offcanvas-modal">
        <div class="modal-dialog offcanvas-dialog">
            <div class="modal-content">
                <div class="modal-header offcanvas-header">
                    <!-- offcanvas-logo-start -->
                    <div class="offcanvas-logo">
                        <a href="index.html">
                            <img src="assets/Landing_1/assets/images/new/3C.png" alt="logo" />
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
    <header class="ep-header ep-header--style2 position-relative">
        <!-- Header Middle -->
{{--        @include('web.default.includes.top_nav')--}}
        <div id="active-sticky" class="ep-header__middle ep-header__middle--style2">
{{--                    @include('web.default.includes.top_nav')--}}
            <div class="container ">
                <div class="ep-header__inner ep-header__inner--style2">
                    <div class="row align-items-center">
                        <div class="col-lg-2 col-6">
                            <div class="ep-logo">
                                <a href="index.html">
                                    <img src="assets/Landing_1/assets/images/new/3C.png" alt="logo" />
                                </a>
                            </div>
                        </div>
                        <div class="col-lg-10 col-6">
                            <div class="ep-header__inner-right">
                                <nav class="ep-header__navigation">
                                    <ul class="ep-header__menu ep-header__menu--style2">
                                        <li class="active">
                                            <a href="#">Home Web </a>

                                        </li>
                                        <li>
                                            <a href="#">About us</a>
                                        </li>
                                        <li>
                                            <a href="#">Contact Us</a>
                                        </li>
                                    </ul>
                                </nav>

                                <div class="ep-header__btn">
                                    <a href="#" class="ep-btn ep5-bg">Read More <i class="fi fi-rs-arrow-small-right"></i> </a>
                                </div>

                            </div>
                            <!-- Mobile Menu Button -->
                            <button type="button" class="mobile-menu-offcanvas-toggler" data-bs-toggle="modal" data-bs-target="#offcanvas-modal">
                                <span class="line"></span>
                                <span class="line"></span>
                                <span class="line"></span>
                            </button>
                            <!-- End Mobile Menu Button -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <div id="smooth-wrapper">
        <div id="smooth-content">
            <main>
    @include('web.default.pages.includes.new_hero')
    @include('web.default.pages.includes.new_about')
    @include('web.default.pages.includes.new_brands')
    @include('web.default.pages.includes.new_funfacts')
    @include('web.default.pages.includes.new_services')
    @include('web.default.pages.includes.new_students')
    @include('web.default.pages.includes.new_pricing')
    @include('web.default.pages.includes.new_childchance')
    @include('web.default.pages.includes.new_faq')
    @include('web.default.pages.includes.new_opportunity')

            </main>
{{--    @include('web.default.pages.includes.featured_classes', ['classes' => $featuredClasses])--}}
{{--    @include('web.default.pages.includes.testimonials')--}}
{{--    @include('web.default.pages.includes.new_statistics')--}}
    @include('web.default.pages.includes.new_footer')
        </div>
    </div>
@endsection
@push('scripts_bottom')
    <script src="/assets/default/vendors/swiper/swiper-bundle.min.js"></script>
    <script src="/assets/default/vendors/owl-carousel2/owl.carousel.min.js"></script>
    <script src="/assets/default/vendors/parallax/parallax.min.js"></script>
    <script src="/assets/default/js/parts/home.min.js"></script>
@endpush
