{{--@if(!empty($pricingPlans))--}}
{{--    <section class="ep-pricing section-gap position-relative">--}}
{{--        <div class="container">--}}
{{--            <div class="row justify-content-center">--}}
{{--                <div class="col-lg-8 col-xl-6 col-md-8 col-12">--}}
{{--                    <div class="ep-section-head text-center">--}}
{{--                    <span class="ep-section-head__sm-title ep1-color">--}}
{{--                        {{ $pricingPlans['subtitle'] ?? trans('home.pricing') }}--}}
{{--                    </span>--}}
{{--                        <h3 class="ep-section-head__big-title left">--}}
{{--                            {{ $pricingPlans['title'] ?? '' }}--}}
{{--                        </h3>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}

{{--            @if(!empty($pricingPlans['items']))--}}
{{--                <div class="row">--}}
{{--                    @foreach($pricingPlans['items'] as $plan)--}}
{{--                        <div class="col-lg-6 col-xl-4 col-md-6 col-12">--}}
{{--                            <div class="ep-pricing__card pricing-{{ $loop->iteration }} wow fadeInUp" data-wow-delay="{{ $loop->iteration * 0.2 }}s">--}}
{{--                                <div class="ep-pricing__head">--}}
{{--                                    <div class="ep-pricing__icon ep{{ $loop->iteration }}-bg-light">--}}
{{--                                        <img src="{{ $plan['icon'] }}" alt="pricing-icon">--}}
{{--                                    </div>--}}
{{--                                    <h3 class="ep-pricing__title">{{ $plan['title'] }}</h3>--}}
{{--                                    <div class="ep-pricing__price">--}}
{{--                            <span class="ep-pricing__amount ep{{ $loop->iteration }}-color">--}}
{{--                                {{ $plan['price'] }}--}}
{{--                            </span>--}}
{{--                                        @if(!empty($plan['original_price']))--}}
{{--                                            <span class="ep-pricing__original-price">--}}
{{--                                {{ $plan['original_price'] }}--}}
{{--                            </span>--}}
{{--                                        @endif--}}
{{--                                    </div>--}}
{{--                                </div>--}}

{{--                                @if(!empty($plan['features']))--}}
{{--                                    <ul class="ep-pricing__features">--}}
{{--                                        @foreach($plan['features'] as $feature)--}}
{{--                                            <li><i class="fi fi-sr-checkbox"></i> {{ $feature }}</li>--}}
{{--                                        @endforeach--}}
{{--                                    </ul>--}}
{{--                                @endif--}}

{{--                                @if(!empty($plan['button_text']))--}}
{{--                                    <div class="ep-pricing__btn">--}}
{{--                                        <a href="{{ $plan['button_link'] ?? '#' }}" class="ep-btn border-btn">--}}
{{--                                            {{ $plan['button_text'] }}--}}
{{--                                        </a>--}}
{{--                                    </div>--}}
{{--                                @endif--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    @endforeach--}}
{{--                </div>--}}
{{--            @endif--}}
{{--        </div>--}}
{{--    </section>--}}
{{--@endif--}}
<!-- Start Pricing Area -->
<section class="ep-pricing section-gap position-relative ">
    <div class="container ">
        <div class="row justify-content-center">
            <div class="col-lg-8 col-xl-6 col-md-8 col-12">
                <div class="ep-section-head text-center">
                    <span class="ep-section-head__sm-title ep1-color">Pricing</span>
                    <h3 class="ep-section-head__big-title  left">
                        Our <span>programs</span>
                    </h3>
                </div>
            </div>
        </div>
        <div class="ep-pricing__shape updown-ani">
            <img src="assets/Landing_1/assets/images/pricing/arrow.svg" alt="pricing-shape" />
        </div>

        <div class="row">
            <!-- Pricing Card -->
            <div class="col-lg-6 col-xl-4 col-md-6 col-12">
                <div class="ep-pricing__card pricing-1 wow fadeInUp" data-wow-delay=".3s" data-wow-duration="1s">
                    <div class="ep-pricing__head">
                        <div class="ep-pricing__icon ep5-bg-light">
                            <img src="assets/Landing_1/assets/images/pricing/icon-1.svg" alt="pricing-icon" />
                        </div>
                        <h3 class="ep-pricing__title">Annual - Plan <br>
                            12-Month Plan </h3>
                        <br>
                        <div class="ep-pricing__price">
                            <span class="ep-pricing__amount ep5-color">9000 (instead of 12.800)</span>
                        </div>
                    </div>
                    <ul class="ep-pricing__features">
                        <li><i class="fi fi-sr-checkbox"></i> live online session</li>
                        <li><i class="fi fi-sr-checkbox"></i> assessment & quizzes</li>
                        <li><i class="fi fi-sr-checkbox"></i> Compilation Certificate</li>
                        <li><i class="fi fi-sr-checkbox"></i> Technical Guidance</li>
                        <li><i class="fi fi-sr-checkbox"></i> Limited Group</li>
                        <li><i class="fi fi-sr-checkbox"></i> 4 -Levels Completion</li>
                        <li><i class="fi fi-sr-checkbox"></i> graduation projects</li>
                        <li><i class="fi fi-sr-checkbox"></i> 6 Months Freeze Parent support Installment</li>
                    </ul>
                    <div class="ep-pricing__btn">
                        <a href="#" class="ep-btn border-btn">Buy Now</a>
                    </div>
                </div>
            </div>
            <!-- Pricing Card -->
            <div class="col-lg-6 col-xl-4 col-md-6 col-12">
                <div class="ep-pricing__card pricing-2 wow fadeInUp" data-wow-delay=".5s" data-wow-duration="1s">
                    <div class="ep-pricing__head">
                        <div class="ep-pricing__icon ep2-bg-light">
                            <img src="assets/Landing_1/assets/images/pricing/icon-2.svg" alt="pricing-icon" />
                        </div>
                        <h3 class="ep-pricing__title">Semi-Annual<br>
                            6-Month Plan </h3>
                        <br>
                        <div class="ep-pricing__price">
                            <span class="ep-pricing__amount ep2-color">4950 (instead of 7950)</span>
                        </div>
                    </div>
                    <ul class="ep-pricing__features">
                        <li><i class="fi fi-sr-checkbox"></i> live online session </li>
                        <li><i class="fi fi-sr-checkbox"></i> assessment & quizzes</li>
                        <li><i class="fi fi-sr-checkbox"></i> Compilation Certificate</li>
                        <li><i class="fi fi-sr-checkbox"></i> Technical Guidance</li>
                        <li><i class="fi fi-sr-checkbox"></i> Limited Group</li>
                        <li><i class="fi fi-sr-checkbox"></i> 2-Level Completion</li>
                        <li><i class="fi fi-sr-checkbox"></i> graduation projects</li>
                        <li><i class="fi fi-sr-checkbox"></i> 3 Month freeze Parent support</li>
                    </ul>
                    <div class="ep-pricing__btn">
                        <a href="#" class="ep-btn border-btn">Buy Now</a>
                    </div>
                </div>
            </div>
            <!-- Pricing Card -->
            <div class="col-lg-6 col-xl-4 col-md-6 col-12">
                <div class="ep-pricing__card pricing-3 wow fadeInUp" data-wow-delay=".7s" data-wow-duration="1s">
                    <div class="ep-pricing__head">
                        <div class="ep-pricing__icon ep1-bg-light">
                            <img src="assets/Landing_1/assets/images/pricing/icon-3.svg" alt="pricing-icon" />
                        </div>
                        <h3 class="ep-pricing__title">Quarter- plan <br>
                            3-Month Plan</h3>
                        <br>
                        <div class="ep-pricing__price">
                                                <span class="ep-pricing__amount ep1-color">2500(instead of 3500)
                                                </span>
                        </div>
                    </div>
                    <ul class="ep-pricing__features">
                        <li><i class="fi fi-sr-checkbox"></i>live online session</li>
                        <li><i class="fi fi-sr-checkbox"></i>assessment & quizzes</li>
                        <li><i class="fi fi-sr-checkbox"></i>Compilation Certificate</li>
                        <li><i class="fi fi-sr-checkbox"></i>Technical Guidance</li>
                        <li><i class="fi fi-sr-checkbox"></i>Limited Group</li>
                        <li><i class="fi fi-sr-checkbox"></i>1 Level Completion</li>
                        <li><i class="fi fi-sr-checkbox"></i>graduation projects</li>
                        <li><i class="fi fi-sr-checkbox"></i>Parent support</li>
                    </ul>
                    <div class="ep-pricing__btn">
                        <a href="#" class="ep-btn border-btn">Buy Now</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End Pricing Area -->
