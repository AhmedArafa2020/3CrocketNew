{{--@if(!empty($students))--}}
{{--    <section class="ep-team section-gap position-relative">--}}
{{--        <div class="container">--}}
{{--            <div class="row justify-content-center">--}}
{{--                <div class="col-lg-8 col-xl-8 col-md-10 col-12">--}}
{{--                    <div class="ep-section-head text-center">--}}
{{--                    <span class="ep-section-head__sm-title ep1-color">--}}
{{--                        {{ $students['subtitle'] ?? trans('home.our_students') }}--}}
{{--                    </span>--}}
{{--                        <h3 class="ep-section-head__big-title left mb-2">--}}
{{--                            {{ $students['title'] ?? '' }}--}}
{{--                        </h3>--}}
{{--                        <p class="section-hint">--}}
{{--                            {!! nl2br($students['description'] ?? '') !!}--}}
{{--                        </p>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}

{{--            @if(!empty($students['items']))--}}
{{--                <div class="row">--}}
{{--                    <div class="owl-carousel ep-student__slider">--}}
{{--                        @foreach($students['items'] as $student)--}}
{{--                            <div class="col-lg-12">--}}
{{--                                <div class="ep-team__card wow fadeInUp" data-wow-delay=".3s" data-wow-duration="1s">--}}
{{--                                    <div class="ep-team__img">--}}
{{--                                        <img src="{{ $student['image'] }}" alt="{{ $student['name'] }}">--}}
{{--                                        @if(!empty($student['video']))--}}
{{--                                            <a href="{{ $student['video'] }}" class="ep-video__btn popup-video ep-hover-layer-2">--}}
{{--                                                <i class="fi fi-sr-play"></i>--}}
{{--                                            </a>--}}
{{--                                        @endif--}}
{{--                                    </div>--}}
{{--                                    <div class="ep-team__content">--}}
{{--                                        <div class="ep-team__author">--}}
{{--                                            <h5>{{ $student['name'] }}</h5>--}}
{{--                                            @if(!empty($student['achievement']))--}}
{{--                                                <p>{{ $student['achievement'] }}</p>--}}
{{--                                            @endif--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        @endforeach--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            @endif--}}
{{--        </div>--}}
{{--    </section>--}}
{{--@endif--}}
<!-- Start Team Area -->
<section class="ep-team section-gap position-relative">
    <div class="ep-team__pattern updown-ani">
        <img
            src="assets/Landing_1/assets/images/team/team-1/dot-pattern.svg"
            alt="dot-pattern"
        />
    </div>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-8 col-xl-8 col-md-10 col-12">
                <div class="ep-section-head text-center">
                    <span class="ep-section-head__sm-title ep1-color">Our Students</span>
                    <h3 class="ep-section-head__big-title  left mb-2">
                        Meet Our Future <span>Leaders</span> !
                    </h3>
                    <p>At 3C, your child will learn coding using the latest technologies, following real industry standards.
                        They’ll get the chance to independently design and build their own projects, just like the pros!
                        But it doesn’t stop at programming —
                        our students also gain valuable skills in marketing, design, business management, HR, critical thinking, and much
                        more.
                        We don’t just teach code — we build future-ready creators</p>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="owl-carousel ep-student__slider">
                <div class="col-lg-12">
                    <div
                        class="ep-team__card wow fadeInUp"
                        data-wow-delay=".3s"
                        data-wow-duration="1s"
                    >
                        <div class="ep-team__img">
                            <img
                                src="assets/Landing_1/assets/images/team/team-1/1.png"
                                alt="team-img"
                            />
                            <a href="https://www.youtube.com/watch?v=gyGsPlt06bo" class="ep-video__btn popup-video ep-hover-layer-2" >
                                <i class="fi fi-sr-play"></i>
                            </a>
                        </div>
                        <div class="ep-team__content">
                            <div class="ep-team__author">

                                <h5>Bessie Cooper</h5>

                                <!-- <p>Mentor</p> -->
                            </div>
                            <div class="ep-team__social">
                              <span class="ep-team__social-btn">
                                <i class="fi-rr-share"></i>
                              </span>
                                <ul>
                                    <li>
                                        <a href="#">
                                            <i class="icofont-twitter"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <i class="icofont-facebook"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <i class="icofont-instagram"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <i class="icofont-linkedin"></i>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Single Team -->
                <div class="col-lg-12">
                    <div
                        class="ep-team__card wow fadeInUp"
                        data-wow-delay=".5s"
                        data-wow-duration="1s"
                    >
                        <div class="ep-team__img">
                            <img
                                src="assets/Landing_1/assets/images/team/team-1/2.png"
                                alt="team-img"
                            />
                            <a href="https://www.youtube.com/watch?v=gyGsPlt06bo" class="ep-video__btn popup-video ep-hover-layer-2" >
                                <i class="fi fi-sr-play"></i>
                            </a>
                        </div>
                        <div class="ep-team__content">
                            <div class="ep-team__author">

                                <h5>Arlene McCoy</h5>

                                <!-- <p>Senior Mentor</p> -->
                            </div>
                            <div class="ep-team__social">
                              <span class="ep-team__social-btn">
                                <i class="fi-rr-share"></i>
                              </span>
                                <ul>
                                    <li>
                                        <a href="#">
                                            <i class="icofont-twitter"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <i class="icofont-facebook"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <i class="icofont-instagram"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <i class="icofont-linkedin"></i>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Single Team -->
                <div class="col-lg-12">
                    <div
                        class="ep-team__card wow fadeInUp"
                        data-wow-delay=".7s"
                        data-wow-duration="1s"
                    >
                        <div class="ep-team__img">
                            <img
                                src="assets/Landing_1/assets/images/team/team-1/3.png"
                                alt="team-img"
                            />
                            <a href="https://www.youtube.com/watch?v=gyGsPlt06bo" class="ep-video__btn popup-video ep-hover-layer-2" >
                                <i class="fi fi-sr-play"></i>
                            </a>
                        </div>
                        <div class="ep-team__content">
                            <div class="ep-team__author">

                                <h5>Brooklyn Simmons</h5>

                                <!-- <p>Assistant Teacher</p> -->
                            </div>
                            <div class="ep-team__social">
                              <span class="ep-team__social-btn">
                                <i class="fi-rr-share"></i>
                              </span>
                                <ul>
                                    <li>
                                        <a href="#">
                                            <i class="icofont-twitter"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <i class="icofont-facebook"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <i class="icofont-instagram"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <i class="icofont-linkedin"></i>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Single Team -->

        </div>
    </div>
</section>
<!-- End Team Area -->


<!-- Start Team Area -->
<section
    class="ep-team ep-team--style2 section-gap position-relative"
>
    <div class="ep-team__pattern-style2">
        <img
            class="pattern-1 updown-ani"
            src="assets/Landing_1/assets/images/team/team-2/pattern-1.svg"
            alt="pattern-1"
        />
        <img
            class="pattern-2 rotate-ani"
            src="assets/Landing_1/assets/images/team/team-2/pattern-2.svg"
            alt="pattern-2"
        />
        <img
            class="pattern-3 updown-ani"
            src="assets/Landing_1/assets/images/team/team-2/pattern-3.svg"
            alt="pattern-3"
        />
    </div>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-8 col-xl-8 col-md-10 col-12">
                <div class="ep-section-head text-center">

                    <h3 class="ep-section-head__big-title  left mb-2">
                        Unique Experience for <span>Every Parent</span>
                    </h3>
                    <p>We believe every family is unique, and so is our approach.
                        At 3C, we tailor the journey to match your child’s needs, and we keep parents involved every step of
                        the way.</p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="owl-carousel ep-student__slider">
                <!-- Single Team -->
                <div class="col-lg-12">
                    <div
                        class="ep-team__card ep-team__card--style2 wow fadeInUp"
                        data-wow-delay=".3s"
                        data-wow-duration="1s"
                    >
                        <div class="ep-team__img">
                            <img
                                src="assets/Landing_1/assets/images/team/team-2/1.png"
                                alt="team-img"
                            />
                            <a href="https://www.youtube.com/watch?v=gyGsPlt06bo" class="ep-video__btn popup-video ep-hover-layer-2" >
                                <i class="fi fi-sr-play"></i>
                            </a>
                        </div>
                        <div class="ep-team__content">
                            <div class="ep-team__author">

                                <h5>Jane Cooper</h5>


                            </div>

                        </div>
                    </div>
                </div>
                <!-- Single Team -->
                <div class="col-lg-12">
                    <div
                        class="ep-team__card ep-team__card--style2 wow fadeInUp"
                        data-wow-delay=".5s"
                        data-wow-duration="1s"
                    >
                        <div class="ep-team__img">
                            <img
                                src="assets/Landing_1/assets/images/team/team-2/2.png"
                                alt="team-img"
                            />
                            <a href="https://www.youtube.com/watch?v=gyGsPlt06bo" class="ep-video__btn popup-video ep-hover-layer-2" >
                                <i class="fi fi-sr-play"></i>
                            </a>
                        </div>
                        <div class="ep-team__content">
                            <div class="ep-team__author">

                                <h5>Kane Saan</h5>


                            </div>

                        </div>
                    </div>
                </div>
                <!-- Single Team -->
                <div class="col-lg-12">
                    <div
                        class="ep-team__card ep-team__card--style2 wow fadeInUp"
                        data-wow-delay=".7s"
                        data-wow-duration="1s"
                    >
                        <div class="ep-team__img">
                            <img
                                src="assets/Landing_1/assets/images/team/team-2/3.png"
                                alt="team-img"
                            />
                            <a href="https://www.youtube.com/watch?v=gyGsPlt06bo" class="ep-video__btn popup-video ep-hover-layer-2" >
                                <i class="fi fi-sr-play"></i>
                            </a>
                        </div>
                        <div class="ep-team__content">
                            <div class="ep-team__author">

                                <h5>Jack Win</h5>


                            </div>

                        </div>
                    </div>
                </div>
            </div>


        </div>
    </div>
</section>
<!-- End Team Area -->
