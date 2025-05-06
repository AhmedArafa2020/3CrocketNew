{{--@extends(getTemplate().'.layouts.newapp')--}}


    @if($heroSection)
{{--        <section class="ep-hero section-bg-1">--}}
{{--            <div class="container">--}}
{{--                <div class="row align-items-center">--}}
{{--                    <div class="col-lg-12 col-xl-6 col-12">--}}
{{--                        <div class="ep-hero__content">--}}
{{--                            <h1 class="ep-hero__title left">{{ $heroSection->title }}</h1>--}}
{{--                            <img src="/assets/Landing_1/assets/images/new/new_20_4_2025/hero.png">--}}
{{--                            <p class="ep-hero__text">{{ $heroSection->description }}</p>--}}
{{--                            <div class="ep-hero__btn">--}}
{{--                                <a href="#" class="ep-btn">{{ $heroSection->button_text }} <i class="fi fi-rs-arrow-small-right"></i></a>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                    <div class="col-lg-12 col-xl-6 col-12 order-top">--}}
{{--                        <div class="BookFormBox">--}}
{{--                            <div class="MainTitle">--}}
{{--                                <p>Start your kids' learning journey today!</p>--}}
{{--                            </div>--}}
{{--                            <div class="FormBook">--}}
{{--                                <form action="{{ route('booking.startSubmit') }}" method="POST">--}}
{{--                                    @csrf--}}
{{--                                    <div class="row">--}}
{{--                                        <div class="col-lg-12">--}}
{{--                                            <div class="form-group">--}}
{{--                                                <label>Enter your WhatsApp phone number</label>--}}
{{--                                                <input id="phone" name="whatsapp_number" type="tel" class="form-control" required>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                        <div class="col-lg-12">--}}
{{--                                            <div class="form-group">--}}
{{--                                                <select name="grade" class="form-control" required>--}}
{{--                                                    <option value="">Select grade/class</option>--}}
{{--                                                    <option value="Grade 1">Grade 1</option>--}}
{{--                                                    <option value="Grade 2">Grade 2</option>--}}
{{--                                                    <option value="Grade 3">Grade 3</option>--}}
{{--                                                    <option value="Grade 4">Grade 4</option>--}}
{{--                                                    <option value="Grade 5">Grade 5</option>--}}
{{--                                                    <option value="Grade 6">Grade 6</option>--}}
{{--                                                    <option value="Grade 7">Grade 7</option>--}}
{{--                                                    <option value="Grade 8">Grade 8</option>--}}
{{--                                                    <option value="Grade 9">Grade 9</option>--}}
{{--                                                    <option value="Grade 10">Grade 10</option>--}}
{{--                                                    <option value="Grade 11">Grade 11</option>--}}
{{--                                                    <option value="Grade 12">Grade 12</option>--}}
{{--                                                </select>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                        <div class="col-lg-12">--}}
{{--                                            <div class="form-group">--}}
{{--                                                <button type="submit" class="ep-btn">Try a free class</button>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                </form>--}}
{{--                            </div>--}}

{{--                            <div class="SecTitle">--}}
{{--                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="text-orange mr-2 mt-1">--}}
{{--                                    <path d="M12 20h9"></path>--}}
{{--                                    <path d="M16.5 3.5a2.121 2.121 0 0 1 3 3L7 19l-4 1 1-4L16.5 3.5z"></path>--}}
{{--                                </svg>--}}
{{--                                <p>🚀 Over 1,000 seats booked in the last 24 hours!</p>--}}
{{--                            </div>--}}

{{--                            <div class="Description">--}}
{{--                                <p>{{ __(optional($heroSection)->footer_description) }}</p>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}

{{--                </div>--}}

{{--            </div>--}}
{{--        </section>--}}
<section class="ep-hero section-bg-1">
    <div class="container ">
        <div class="row align-items-center">
            <div class="col-lg-12 col-xl-6 col-12">
                <div class="ep-hero__content">
                    <h1 class="ep-hero__title  left">
                        {{ $heroSection->title }}
                    </h1>
                    <img src="/assets/Landing_1/assets/images/new/new_20_4_2025/hero.png">
                    <p class="ep-hero__text">{{ $heroSection->description }}</p>
                    <!-- <div class="ep-hero__btn">
                        <a href="#" class="ep-btn">Explore Now <i class="fi fi-rs-arrow-small-right"></i> </a>
                    </div> -->
                </div>
            </div>
            <div class="col-lg-12 col-xl-6 col-12 order-top">
                <div class="BookFormBox">
                    <div class="MainTitle">
                        <p>Start your kids ' learning journey today!</p>
                    </div>
                    <div class="FormBook">
                        <form action="{{ route('booking.startSubmit') }}" method="POST">
                            @csrf
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="form-group">
                                        <label>Enter your WhatsApp phone number</label>
                                        <input id="phone" name="whatsapp_number" type="tel" class="form-control" required>
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="form-group">
                                        <select name="grade" class="form-control" required>
                                            <option value="">Select grade/class</option>
                                            <option value="Grade 1">Grade 1</option>
                                            <option value="Grade 2">Grade 2</option>
                                            <option value="Grade 3">Grade 3</option>
                                            <option value="Grade 4">Grade 4</option>
                                            <option value="Grade 5">Grade 5</option>
                                            <option value="Grade 6">Grade 6</option>
                                            <option value="Grade 7">Grade 7</option>
                                            <option value="Grade 8">Grade 8</option>
                                            <option value="Grade 9">Grade 9</option>
                                            <option value="Grade 10">Grade 10</option>
                                            <option value="Grade 11">Grade 11</option>
                                            <option value="Grade 12">Grade 12</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="form-group">
                                        <button type="submit" class="ep-btn">Try a free class</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                    <div class="SecTitle">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="text-orange mr-2 mt-1">
                            <path d="M12 20h9"></path>
                            <path d="M16.5 3.5a2.121 2.121 0 0 1 3 3L7 19l-4 1 1-4L16.5 3.5z"></path>
                        </svg>
                        <p>🚀 Over 1,000 seats booked in the last 24 hours!</p>
                    </div>
                    <div class="Description">
                        <p>{{ __(optional($heroSection)->footer_description) }}</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
    @endif
