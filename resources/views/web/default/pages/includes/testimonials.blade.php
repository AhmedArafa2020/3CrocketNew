
<section class="home-sections container">
    <h2 class="section-title">{{ trans('home.testimonials') }}</h2>
    <p class="section-hint">{{ trans('home.testimonials_hint') }}</p>

    <div class="testimonials-slider">
        <div class="swiper-container testimonials-swiper">
            <div class="swiper-wrapper">
                @foreach($testimonials as $testimonial)
                    <div class="swiper-slide">
                        <div class="testimonial-card">
                            <div class="testimonial-avatar">
                                <img src="{{ $testimonial->user_avatar }}" alt="{{ $testimonial->user_name }}" class="img-cover rounded-circle">
                            </div>
                            <h4 class="testimonial-name">{{ $testimonial->user_name }}</h4>
                            <p class="testimonial-text">{!! nl2br(e($testimonial->comment)) !!}</p>
                        </div>
                    </div>
                @endforeach
            </div>
            <div class="swiper-pagination"></div>
        </div>
    </div>
</section>
