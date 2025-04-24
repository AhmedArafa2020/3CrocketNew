{{--@if(!empty($aboutSection))--}}
{{--    <section class="ep-about ep-about--style2 ep-section section-gap position-relative">--}}
{{--        <div class="container">--}}
{{--            <div class="row align-items-center">--}}
{{--                @if(!empty($aboutSection['image']))--}}
{{--                    <div class="col-lg-6 col-12">--}}
{{--                        <div class="ep-section__img ep-section__img--style2 position-relative">--}}
{{--                            <div class="ep-section__img-main">--}}
{{--                                <img src="{{ $aboutSection['image'] }}" alt="about-img">--}}
{{--                            </div>--}}
{{--                            @if(!empty($aboutSection['statistics']))--}}
{{--                                <div class="overview-card updown-ani">--}}
{{--                                    <div class="overview-card__icon">--}}
{{--                                        <img src="/assets/images/about/about-1/user.svg" alt="user-icon">--}}
{{--                                    </div>--}}
{{--                                    <div class="overview-card__info">--}}
{{--                                        <h4><span class="counter">{{ $aboutSection['statistics']['students'] ?? 0 }}</span>+</h4>--}}
{{--                                        <p>{{ trans('home.full_time_student') }}</p>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            @endif--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                @endif--}}

{{--                <div class="col-lg-6 col-12">--}}
{{--                    <div class="ep-section__content">--}}
{{--                        <div class="ep-section-head">--}}
{{--                        <span class="ep-section-head__sm-title ep1-color">--}}
{{--                            {{ $aboutSection['subtitle'] ?? '' }}--}}
{{--                        </span>--}}
{{--                            <h3 class="ep-section-head__big-title left">--}}
{{--                                {{ $aboutSection['title'] ?? '' }}--}}
{{--                            </h3>--}}
{{--                            <p class="ep-section-head__text">--}}
{{--                                {!! nl2br($aboutSection['description'] ?? '') !!}--}}
{{--                            </p>--}}
{{--                        </div>--}}

{{--                        @if(!empty($aboutSection['features']))--}}
{{--                            <div class="ep-section__widget">--}}
{{--                                @foreach($aboutSection['features'] as $feature)--}}
{{--                                    <div class="ep-feature-list">--}}
{{--                                        <div class="ep-feature-list__icon">--}}
{{--                                            <i class="fi fi-ss-check-circle"></i>--}}
{{--                                        </div>--}}
{{--                                        <div class="ep-feature-list__info">--}}
{{--                                            <h5>{{ $feature['title'] }}</h5>--}}
{{--                                            <p>{{ $feature['description'] }}</p>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                @endforeach--}}
{{--                            </div>--}}
{{--                        @endif--}}

{{--                        @if(!empty($aboutSection['button_text']))--}}
{{--                            <div class="ep-section__btn">--}}
{{--                                <a href="{{ $aboutSection['button_link'] ?? '#' }}" class="ep-btn border-btn">--}}
{{--                                    {{ $aboutSection['button_text'] }}--}}
{{--                                    <i class="fi fi-rs-arrow-small-right"></i>--}}
{{--                                </a>--}}
{{--                            </div>--}}
{{--                        @endif--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </section>--}}
{{--@endif--}}

<section class="ep-about ep-about--style2 ep-section section-gap position-relative">
    <div class="container ">
        <div class="row align-items-center">
            <div class="col-lg-6 col-12">
                <div class="ep-section__img ep-section__img--style2 position-relative">
                    <div class="ep-section__img-main">
                        <img src="/assets/Landing_1/assets/images/about/about-2/about-img.png" alt="about-img" />
                    </div>
                    <div class="overview-card updown-ani">
                        <div class="overview-card__icon">
                            <img src="/assets/Landing_1/assets/images/about/about-1/user.svg" alt="user-icon" />
                        </div>
                        <div class="overview-card__info">
                            <h4><span>2</span>k+</h4>
                            <p>Full Time Student</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-12">
                <div class="ep-section__content">
                    <div class="ep-section-head">
                                        <span class="ep-section-head__sm-title ep1-color"
                                        >Know About Us</span
                                        >
                        <h3 class="ep-section-head__big-title  left">
                            Why Choose 3C?
                        </h3>
                        <p class="ep-section-head__text">
                            We offer your child the opportunity to build real-world coding
                            skills and work on hands-on tech projects — all designed to
                            prepare them for a future as a confident, professional
                            programmer.</p>
                    </div>
                    <div class="ep-section__widget">
                        <div class="ep-feature-list">
                            <div class="ep-feature-list__icon">
                                <i class="fi fi-ss-check-circle"></i>
                            </div>
                            <div class="ep-feature-list__info">
                                <h5>Certified Curriculum</h5>
                                <p>Accredited learning paths are designed by experts from MIT and Google.</p>
                            </div>
                        </div>
                        <div class="ep-feature-list">
                            <div class="ep-feature-list__icon">
                                <i class="fi fi-ss-check-circle"></i>
                            </div>
                            <div class="ep-feature-list__info">
                                <h5>Live, Interactive Online Classes</h5>
                                <p>Choose between private 1-on-1 sessions or group classes
                                    tailored to your child’s learning style.</p>
                            </div>
                        </div>
                        <div class="ep-feature-list">
                            <div class="ep-feature-list__icon">
                                <i class="fi fi-ss-check-circle"></i>
                            </div>
                            <div class="ep-feature-list__info">
                                <h5>Fun & Simplified Learning</h5>
                                <p>
                                    We teach high-demand tech skills in a simple, engaging way,
                                    making coding fun and easy to understand.
                                </p>
                            </div>
                        </div>
                        <div class="ep-feature-list">
                            <div class="ep-feature-list__icon">
                                <i class="fi fi-ss-check-circle"></i>
                            </div>
                            <div class="ep-feature-list__info">
                                <h5>Top Expert Instructors</h5>
                                <p>Your child will be guided by experienced engineers who teach
                                    in both Arabic and English for the best learning experience.</p>
                            </div>
                        </div>
                        <div class="ep-feature-list">
                            <div class="ep-feature-list__icon">
                                <i class="fi fi-ss-check-circle"></i>
                            </div>
                            <div class="ep-feature-list__info">
                                <h5>Clear Career Pathway</h5>
                                <p>Our comprehensive programs include a step-by-step roadmap
                                    that helps your child build a solid tech career foundation.</p>
                            </div>
                        </div>

                        <div class="ep-feature-list">
                            <div class="ep-feature-list__icon">
                                <i class="fi fi-ss-check-circle"></i>
                            </div>
                            <div class="ep-feature-list__info">
                                <h5>Ongoing Support After Class</h5>
                                <p>We offer continuous mentoring and follow-ups to boost your
                                    child’s skills and help them grow confidently in the tech
                                    world.</p>
                            </div>
                        </div>
                    </div>
                    <div class="ep-section__btn">
                        <a href="about.html" class="ep-btn border-btn"
                        >Book Now <i class="fi fi-rs-arrow-small-right"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
