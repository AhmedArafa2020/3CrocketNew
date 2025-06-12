@extends(getTemplate().'.layouts.newapp')
@section('title', 'About Us | 3 School Coding')
@push('styles')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/css/bootstrap-datepicker.min.css">
    <style>
        .datepicker table tr td.has-slot {
            background-color: #d4edda !important;
            color: #155724 !important;
            border-radius: 50% !important;
        }



    </style>
@endpush
@section('content')
    <form action="{{ route('booking.selectSlotSubmit') }}" method="POST">
        @csrf
        <input type="hidden" name="booking_date" id="booking_date">
        <input type="hidden" name="booking_time" id="booking_time">

        <section class="ep-about ep-section section-gap position-relative">
            <div class="ep-about__shape updown-ani">
                <img src="/assets/Landing_1/assets/images/about/about-1/circle-shape.svg" alt="circle-shape" />
            </div>

            <div class="container ep-container">
                <div class="row align-items-center">
                    <!-- Left image content -->
                    <div class="col-lg-5 col-12 mb-4 mb-lg-0">
                        <div class="ep-section__img position-relative">
                            <div class="ep-section__img-shape rotate-ani">
                                <img src="/assets/Landing_1/assets/images/about/about-1/pattern-shape.svg" alt="pattern-shape" />
                            </div>
                            <div class="ep-section__img-main">
                                <img src="/assets/Landing_1/assets/images/about/about-1/about-img.png" alt="about-img" />
                            </div>
                            <div class="overview-card updown-ani">
                                <div class="overview-card__info">
                                    <h4>Gladys</h4>
                                    <p>Student | Grade 8</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Booking form -->
                    <div class="col-lg-7 col-12">
                        <div class="BookZoom">
                            <div class="MainTitle">
                                <h2>Book a free lesson to enter the magical world of coding</h2>
                            </div>
                            <div class="ZoomNots">
                                <p>Your timezone is Africa/Cairo (GMT +02:00). Your current time is {{ now()->format('h:i A') }}.</p>
                            </div>

                            <!-- Date and Time Row -->
                            <div class="DatTimeBox d-flex flex-column flex-md-row gap-4 mt-4">
                                <!-- Date picker -->
                                <div class="ChoseDay flex-shrink-0" style="min-width: 280px;">
                                    <div class="SubTitle">
                                        <h2>Select Date</h2>
                                    </div>
                                    <div class="ClaenderBox">
                                        <div id="availableDatesCalendar" class="bootstrap-datepicker-inline"></div>
                                    </div>
                                </div>

                                <!-- Time picker -->
                                <div class="ChoseTime flex-grow-1">
                                    <div class="SubTitle">
                                        <h2>Select a time (Africa/Cairo)</h2>
                                    </div>
                                    <div class="GroupTimes d-flex flex-wrap gap-2">
                                        @foreach($available_slots as $slot)
                                            <div class="TimeItemss" data-date="{{ $slot->date }}">
                                                <label for="TimeItem_{{ $slot->id }}">
                                                    {{ \Carbon\Carbon::parse($slot->time)->format('h:i A') }}
                                                </label>
                                                <input id="TimeItem_{{ $slot->id }}" type="radio" name="time" value="{{ $slot->time }}" required />
                                            </div>
                                        @endforeach
                                    </div>
                                </div>
                            </div>

                            <!-- Book button -->
                            <div class="BooKBtn mt-4">
                                <button type="submit" class="ep-btn">Book now</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </form>


@endsection


{{--@section('scripts')--}}
    @push('scripts')

        <!-- jQuery -->
        <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

        <!-- Bootstrap Datepicker JS -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/js/bootstrap-datepicker.min.js"></script>

        <script src="/assets/Landing_1/assets/libs/bootstrap-datepicker/js/bootstrap-datepicker.min.js"></script>
    <!-- Jquery JS -->
    <script src="/assets/Landing_1/assets/plugins/js/jquery.min.js"></script>
    <script src="/assets/Landing_1/assets/plugins/js/jquery-migrate.js"></script>

    <!-- Bootstrap JS -->
    <script src="/assets/Landing_1/assets/plugins/js/bootstrap.min.js"></script>
    <!-- Gsap JS -->
    <script src="/assets/Landing_1/assets/plugins/js/gsap/gsap.js"></script>
    <script src="/assets/Landing_1/assets/plugins/js/gsap/gsap-scroll-to-plugin.js"></script>
    <script src="/assets/Landing_1/assets/plugins/js/gsap/gsap-scroll-smoother.js"></script>
    <script src="/assets/Landing_1/assets/plugins/js/gsap/gsap-scroll-trigger.js"></script>
    <script src="/assets/Landing_1/assets/plugins/js/gsap/gsap-split-text.js"></script>
    <!-- Wow JS -->
    <script src="/assets/Landing_1/assets/plugins/js/wow.min.js"></script>
    <!-- Owl Carousel JS -->
    <script src="/assets/Landing_1/assets/plugins/js/owl.carousel.min.js"></script>
    <!-- Magnific Popup JS -->
    <script src="/assets/Landing_1/assets/plugins/js/magnific-popup.min.js"></script>
    <!-- CounterUp  JS -->
    <script src="/assets/Landing_1/assets/plugins/js/jquery.counterup.min.js"></script>
    <script src="/assets/Landing_1/assets/plugins/js/waypoints.min.js"></script>
    <!-- Nice Select JS -->
    <script src="/assets/Landing_1/assets/plugins/js/nice-select.min.js"></script>
    <!-- Cursor JS -->
    <script src="/assets/Landing_1/assets/plugins/js/ep-cursor.js"></script>
    <!-- Back To Top JS -->
    <script src="/assets/Landing_1/assets/plugins/js/backToTop.js"></script>
    <!-- Main JS -->
    <script src="/assets/Landing_1/assets/plugins/js/active.js"></script>
    <script src="/assets/Landing_1/assets/libs/Inte_Tel_Code/js/intlTelInput.js"></script>
    <script src="/assets/Landing_1/assets/libs/bootstrap-datepicker/js/bootstrap-datepicker.min.js"></script>
    <script>
        var input = document.querySelector("#phone");
        window.intlTelInput(input, {
            preferredCountries: ["sa", "eg"],
            separateDialCode: true,
            utilsScript: "/assets/Landing_1/assets/libs/Inte_Tel_Code/js/utils.js",
        });
    </script>
    <script>
        // Select all the radio inputs
        const radioInputs = document.querySelectorAll('.TimeItemss input[type="radio"]');
        // Add a change event listener to the radio inputs
        radioInputs.forEach((input) => {
            input.addEventListener("change", () => {
                // Remove the 'active' class from all .hawiacoloItem elements
                const TimeItemss = document.querySelectorAll(".TimeItemss");
                TimeItemss.forEach((item) => item.classList.remove("active"));
                // Add the 'active' class to the .hawiacoloItem element that contains the checked radio input
                const checkedItem = input.closest(".TimeItemss");
                checkedItem.classList.add("active");
            });
        });
    </script>
    <script>
        $(document).ready(function () {
            // تهيئة الـ inline datepicker
            $('.bootstrap-datepicker-inline').datepicker({
                format: 'mm/dd/yyyy',
                todayHighlight: true
            });

            // وظيفة لإضافة كلاس للأيام المخصصة
            function addCustomClass(days) {
                $('.bootstrap-datepicker-inline .day').each(function () {
                    var day = parseInt($(this).text(), 10);
                    if (days.includes(day) && !$(this).hasClass('old') && !$(this).hasClass('new')) {
                        $(this).addClass('active');
                    }
                });
            }

            // وظيفة لإضافة كلاس لتاريخ اليوم
            function highlightToday() {
                var today = new Date();
                var day = today.getDate();

                $('.bootstrap-datepicker-inline .day').each(function () {
                    if ($(this).text() == day && !$(this).hasClass('old') && !$(this).hasClass('new')) {
                        $(this).addClass('today');
                    }
                });
            }

            // تحديد الأيام المخصصة
            var customDays = [5, 10]; // مثال للأيام المخصصة

            // إضافة الكلاسات عند عرض التاريخ
            $('.bootstrap-datepicker-inline').on('changeDate', function (e) {
                // طباعة اليوم الذي تم اختياره
                var selectedDate = e.date;
                console.log("اليوم الذي تم اختياره: " + selectedDate);

                // تمييز اليوم الذي تم اختياره
                highlightToday();
            });

            // تحديث التاريخ لليوم الحالي وتطبيق الكلاسات عند التحميل
            $('.bootstrap-datepicker-inline').datepicker('update', new Date());
            highlightToday();
        });
    </script>
    <!-- My Ccripts ---->
        <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/js/bootstrap-datepicker.min.js"></script>

        <script>
            const availableDates = @json($available_slots->pluck('date')->unique()->values());

            $(document).ready(function () {
                $('#availableDatesCalendar').datepicker({
                    format: 'yyyy-mm-dd',
                    todayHighlight: true,
                    autoclose: true,
                    beforeShowDay: function(date) {
                        const dateString = date.toISOString().split('T')[0];
                        if (availableDates.includes(dateString)) {
                            return [true, 'has-slot', 'Available slot'];
                        }
                        return [true, '', ''];
                    }
                });
            });
        </script>
        <script>
            $(document).ready(function () {
                // Hide all time slots initially
                $('.TimeItemss').hide();

                // When date is selected
                $('#availableDatesCalendar').datepicker().on('changeDate', function (e) {
                    let selectedDate = e.format('yyyy-mm-dd');

                    // Set hidden input for form
                    $('#booking_date').val(selectedDate);

                    // Hide all, then show only matching
                    $('.TimeItemss').hide();
                    $('.TimeItemss').each(function () {
                        if ($(this).data('date') === selectedDate) {
                            $(this).show();
                        }
                    });
                });
            });
        </script>


    @endpush

