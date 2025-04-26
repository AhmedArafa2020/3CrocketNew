<section class="ep-about ep-about--style2 ep-section section-gap position-relative">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6 col-12">
                <div class="ep-section__img ep-section__img--style2 position-relative">
                    <div class="ep-section__img-main">
                        <img src="{{ $newAboutSection->image }}" alt="about-img" />
                    </div>
                    <div class="overview-card updown-ani">
                        <div class="overview-card__icon">
                            <img src="{{ $newAboutSection->overview_icon }}" alt="user-icon" />
                        </div>
                        <div class="overview-card__info">
                            <h4><span>{{ $newAboutSection->overview_number }}</span></h4>
                            <p>{{ $newAboutSection->overview_text }}</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-12">
                <div class="ep-section__content">
                    <div class="ep-section-head">
                        <span class="ep-section-head__sm-title ep1-color">{{ $newAboutSection->sm_title }}</span>
                        <h3 class="ep-section-head__big-title left">{{ $newAboutSection->big_title }}</h3>
                        <p class="ep-section-head__text">{{ $newAboutSection->description }}</p>
                    </div>

                    <!-- Feature List -->
                    @foreach(json_decode($newAboutSection->feature_cards) as $card)
                        <div class="ep-feature-list">
                            <div class="ep-feature-list__icon">
                                <i class="fi fi-ss-check-circle"></i>
                            </div>
                            <div class="ep-feature-list__info">
                                <h5>{{ $card->title }}</h5>
                                <p>{{ $card->description }}</p>
                            </div>
                        </div>
                    @endforeach

                    <div class="ep-section__btn">
                        <a href="{{ $newAboutSection->btn_link }}" class="ep-btn border-btn">
                            {{ $newAboutSection->btn_text }} <i class="fi fi-rs-arrow-small-right"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
