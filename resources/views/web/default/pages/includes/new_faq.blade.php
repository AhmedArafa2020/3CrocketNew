{{--@if(!empty($faqs))--}}
{{--    <section class="ep-faq ep-faq--style2 section-gap position-relative">--}}
{{--        <div class="container">--}}
{{--            <div class="row justify-content-center">--}}
{{--                <div class="col-lg-8 col-xl-6 col-md-8 col-12">--}}
{{--                    <div class="ep-section-head text-center">--}}
{{--                    <span class="ep-section-head__sm-title ep1-color">--}}
{{--                        {{ $faqs['subtitle'] ?? trans('home.faq') }}--}}
{{--                    </span>--}}
{{--                        <h3 class="ep-section-head__big-title left">--}}
{{--                            {{ $faqs['title'] ?? '' }}--}}
{{--                        </h3>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}

{{--            <div class="row g-0 align-items-center">--}}
{{--                @if(!empty($faqs['image']))--}}
{{--                    <div class="col-lg-5 col-12">--}}
{{--                        <div class="ep-faq__img">--}}
{{--                            <img src="{{ $faqs['image'] }}" alt="faq-image">--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                @endif--}}

{{--                <div class="col-lg-7 col-12">--}}
{{--                    <div class="ep-faq__content">--}}
{{--                        <div class="ep-section-head">--}}
{{--                            <h3 class="ep-section-head__big-title fs-28 left">--}}
{{--                                {{ $faqs['secondary_title'] ?? '' }}--}}
{{--                            </h3>--}}
{{--                        </div>--}}

{{--                        @if(!empty($faqs['items']))--}}
{{--                            <div class="ep-faq__accordion faq-inner accordion" id="accordionExample">--}}
{{--                                @foreach($faqs['items'] as $index => $faq)--}}
{{--                                    <div class="ep-faq__accordion-item ep-faq__accordion-item--style2">--}}
{{--                                        <h2 class="accordion-header" id="heading{{ $index }}">--}}
{{--                                            <button class="accordion-button @if($index > 0) collapsed @endif"--}}
{{--                                                    type="button"--}}
{{--                                                    data-bs-toggle="collapse"--}}
{{--                                                    data-bs-target="#collapse{{ $index }}"--}}
{{--                                                    aria-expanded="{{ $index == 0 ? 'true' : 'false' }}"--}}
{{--                                                    aria-controls="collapse{{ $index }}">--}}
{{--                                                <span>{{ $index + 1 }}</span> {{ $faq['question'] }}--}}
{{--                                            </button>--}}
{{--                                        </h2>--}}
{{--                                        <div id="collapse{{ $index }}"--}}
{{--                                             class="accordion-collapse collapse @if($index == 0) show @endif"--}}
{{--                                             aria-labelledby="heading{{ $index }}"--}}
{{--                                             data-bs-parent="#accordionExample">--}}
{{--                                            <div class="ep-faq__accordion-body">--}}
{{--                                                <p class="ep-faq__accordion-text">--}}
{{--                                                    {!! nl2br($faq['answer']) !!}--}}
{{--                                                </p>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                @endforeach--}}
{{--                            </div>--}}
{{--                        @endif--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </section>--}}
{{--@endif--}}
<!-- Start Faq Area -->
<section class="ep-faq ep-faq--style2 section-gap position-relative">
    <div class="ep-faq__pattern-3 updown-ani">
        <img src="assets/images/faq/faq-2/pattern.svg" alt="pattern" />
    </div>
    <div class="container ">
        <div class="row justify-content-center">
            <div class="col-lg-8 col-xl-6 col-md-8 col-12">
                <div class="ep-section-head text-center">
                    <span class="ep-section-head__sm-title ep1-color">FAQ</span>
                    <h3 class="ep-section-head__big-title  left">
                        Study Aids to <span>Questions</span> <br />
                        Your Learning
                    </h3>
                </div>
            </div>
        </div>
        <div class="row g-0 align-items-center">
            <div class="col-lg-5 col-12">
                <div class="ep-faq__img">
                    <img src="assets/Landing_1/assets/images/faq/faq-2/faq-img.png" alt="faq-img" />
                </div>
            </div>
            <div class="col-lg-7 col-12">
                <div class="ep-faq__content">
                    <div class="ep-section-head">
                        <h3 class="ep-section-head__big-title fs-28  left">
                            Frequently Asked Questions and Answers <br />
                            Find Solutions
                        </h3>
                    </div>
                    <div class="ep-faq__accordion faq-inner accordion" id="accordionExample">
                        <!-- Single Faq -->
                        <div class="ep-faq__accordion-item ep-faq__accordion-item--style2">
                            <h2 class="accordion-header" id="headingOne">
                                <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                    <span>01</span>Why is it important for kids to learn coding from an early age?
                                </button>
                            </h2>
                            <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                                <div class="ep-faq__accordion-body">
                                    <p class="ep-faq__accordion-text">
                                        A: Learning to code at a young age builds essential skills like logical thinking, creativity, and
                                        problem-solving, all through fun and age-appropriate methods.
                                        Coding is not just a technical skill — it helps children develop focus, patience, and selfconfidence.
                                        Kids who start early gain a stronger understanding of modern technology and are better
                                        prepared to create, innovate, and thrive in a digital world.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <!-- Single Faq -->
                        <div class="ep-faq__accordion-item ep-faq__accordion-item--style2">
                            <h2 class="accordion-header" id="headingTwo">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                    <span>02</span>What is the best age to start learning coding?
                                </button>
                            </h2>
                            <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                                <div class="ep-faq__accordion-body">
                                    <p class="ep-faq__accordion-text">
                                        A: The ideal age to start is between 6 and 8 years old, when children's brains are highly
                                        adaptable and ready to learn new skills.
                                        Studies f rom MIT show that kids at this age can absorb coding concepts easily through visual
                                        tools like Scratch, which is now used in thousands of schools worldwide.
                                        At 3C, we make coding fun, simple, and exciting — tailored to every age group.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <!-- Single Faq -->
                        <div class="ep-faq__accordion-item ep-faq__accordion-item--style2">
                            <h2 class="accordion-header" id="headingThree">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                    <span>03</span>How can a 6-year-old learn to code and understand programming?
                                </button>
                            </h2>
                            <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                                <div class="ep-faq__accordion-body">
                                    <p class="ep-faq__accordion-text">
                                        A: Young children learn best through observation and play. Tools like Scratch and Blockly
                                        are designed specifically for kids, using visual blocks to introduce core programming
                                        concepts.
                                        At 3C, we start with fun challenges and gradually introduce real coding, helping kids build
                                        confidence step by step.
                                    </p>
                                </div>
                            </div>
                        </div>


                        <div class="ep-faq__accordion-item ep-faq__accordion-item--style2">
                            <h2 class="accordion-header" id="heading_4">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse_4" aria-expanded="false" aria-controls="collapse_4">
                                    <span>04</span>What’s the coding curriculum like at 3C?
                                </button>
                            </h2>
                            <div id="collapse_4" class="accordion-collapse collapse" aria-labelledby="heading_4" data-bs-parent="#accordionExample">
                                <div class="ep-faq__accordion-body">
                                    <p class="ep-faq__accordion-text">
                                        A: We offer a complete learning path f rom ages 6 to 18, starting with interactive, playful
                                        basics and progressing to professional-level skills.
                                        Students work with modern tools like MIT Scratch, Python, and Unity, in a safe and
                                        inspiring environment where every child can learn at their own pace.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="ep-faq__accordion-item ep-faq__accordion-item--style2">
                            <h2 class="accordion-header" id="heading_5">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse_5" aria-expanded="false" aria-controls="collapse_5">
                                    <span>05</span>What do kids actually learn at 3C?
                                </button>
                            </h2>
                            <div id="collapse_5" class="accordion-collapse collapse" aria-labelledby="heading_5" data-bs-parent="#accordionExample">
                                <div class="ep-faq__accordion-body">
                                    <p class="ep-faq__accordion-text">
                                        A: Kids learn how to think logically, solve problems, and create real-world projects
                                        like games and websites.
                                        We also teach them critical thinking, creativity, and give them hands-on
                                        experience with real tools like Python, JavaScript, and Scratch — setting the stage
                                        for a strong digital future.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="ep-faq__accordion-item ep-faq__accordion-item--style2">
                            <h2 class="accordion-header" id="heading_6">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse_6" aria-expanded="false" aria-controls="collapse_6">
                                    <span>06</span>How do you teach a language like Python to young kids?
                                </button>
                            </h2>
                            <div id="collapse_6" class="accordion-collapse collapse" aria-labelledby="heading_6" data-bs-parent="#accordionExample">
                                <div class="ep-faq__accordion-body">
                                    <p class="ep-faq__accordion-text">
                                        A: We start with interactive games and challenges, then introduce Python in a
                                        simplified way through fun projects.
                                        Our approach is based on global best practices like project-based learning, so
                                        kids learn by building and creating.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="ep-faq__accordion-item ep-faq__accordion-item--style2">
                            <h2 class="accordion-header" id="heading_7">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse_7" aria-expanded="false" aria-controls="collapse_7">
                                    <span>07</span>Do kids need any special skills to learn coding?
                                </button>
                            </h2>
                            <div id="collapse_7" class="accordion-collapse collapse" aria-labelledby="heading_7" data-bs-parent="#accordionExample">
                                <div class="ep-faq__accordion-body">
                                    <p class="ep-faq__accordion-text">
                                        A: Not at all! Coding doesn’t require any special talent — just curiosity and a
                                        willingness to learn.
                                        At 3C, our step-by-step, interactive methods make it easy for every child to learn
                                        comfortably and confidently.
                                    </p>
                                </div>
                            </div>
                        </div>

                        <div class="ep-faq__accordion-item ep-faq__accordion-item--style2">
                            <h2 class="accordion-header" id="heading_8">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse_8" aria-expanded="false" aria-controls="collapse_8">
                                    <span>08</span>How can I choose the right program for my child?
                                </button>
                            </h2>
                            <div id="collapse_8" class="accordion-collapse collapse" aria-labelledby="heading_8" data-bs-parent="#accordionExample">
                                <div class="ep-faq__accordion-body">
                                    <p class="ep-faq__accordion-text">
                                        A: Start with your child’s interests — Do they love games? Building? Exploring?
                                        At 3C, we offer a quick assessment to help us recommend the best track based on
                                        each child’s unique strengths and passions.
                                        Our instructors guide them to the right learning path for a personalized, fun, and
                                        effective journey.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="ep-faq__accordion-item ep-faq__accordion-item--style2">
                            <h2 class="accordion-header" id="heading_9">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse_9" aria-expanded="false" aria-controls="collapse_9">
                                    <span>09</span>Can I track my child’s progress?
                                </button>
                            </h2>
                            <div id="collapse_9" class="accordion-collapse collapse" aria-labelledby="heading_9" data-bs-parent="#accordionExample">
                                <div class="ep-faq__accordion-body">
                                    <p class="ep-faq__accordion-text">
                                        A: Absolutely! We provide detailed progress reports and regular updates, so parents
                                        can follow their child’s journey step by step.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="ep-faq__accordion-item ep-faq__accordion-item--style2">
                            <h2 class="accordion-header" id="heading_10">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse_10" aria-expanded="false" aria-controls="collapse_10">
                                    <span>10</span>How do I enroll my child?
                                </button>
                            </h2>
                            <div id="collapse_10" class="accordion-collapse collapse" aria-labelledby="heading_10" data-bs-parent="#accordionExample">
                                <div class="ep-faq__accordion-body">
                                    <p class="ep-faq__accordion-text">
                                        A: It’s quick and simple! Just fill out the online registration form, and our team will
                                        contact you immediately to guide you through the next steps.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End Faq Area -->
