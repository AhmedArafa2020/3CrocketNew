
<!-- Start About Area -->
<section class="ep-about ep-about--style2 ep-section section-gap position-relative">
    <div class="container ">
        <div class="row align-items-center">
            <div class="col-lg-5 col-12">
                <div class="ep-section__img ep-section__img--style2 position-relative hidden_xs">
                    <div class="ep-section__img-main">
                        <img src="{{ $newAboutSection->image }}" alt="about-img" />
                    </div>

                </div>
            </div>
            <div class="col-lg-7 col-12">
                <div class="ep-section__content">
                    <div class="ep-section-head">
                                        <span class="ep-section-head__sm-title ep1-color" >{{ $newAboutSection->sm_title }}</span >
                        <h3 class="ep-section-head__big-title  left">
                            {{ $newAboutSection->big_title }}
                        </h3>
                        <p class="ep-section-head__text">
                            {{ $newAboutSection->description }} </p>
                    </div>
                    <div class="ep-section__widget d-none">
                        <div class="ep-feature-list">
                            <div class="ep-feature-list__icon">
                                <i class="fi fi-ss-check-circle"></i>
                            </div>
                            <div class="ep-feature-list__info">
                                <h5>{{ $newAboutSection->big_title }}</h5>
                                <p>{{ $newAboutSection->description }}</p>
                            </div>
                        </div>
                    </div>

                    <div class="SliderWHyUs">
                        <div class="owl-carousel SliderWHyUs__slider">
                            @php
                                $cards = json_decode($newAboutSection->feature_cards);
                                if (is_string($cards)) {
                                    $cards = json_decode($cards); // second decode
                                }
                            @endphp

                            @if (is_array($cards) || is_object($cards))
                                @foreach ($cards as $card)
                                    <div class="SliderItem">
                                        <h5>{{ $card->title }}</h5>
                                        <p>{{ $card->description }}</p>
                                        <img src="{{ $card->icon }}" alt="{{ $card->title }}">
                                    </div>
                                @endforeach
                            @else
                                <p style="color:red;">Invalid or empty feature cards</p>
                            @endif

                        </div>

                    </div>

                    <div class="ep-section__btn">
                        <a href="pages/about" class="ep-btn border-btn"
                        >Book Now <i class="fi fi-rs-arrow-small-right"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End Start About Area -->
