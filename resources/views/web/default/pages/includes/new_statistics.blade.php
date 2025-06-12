{{--@if(!empty($statistics))--}}
{{--    <section class="ep-statistics section-gap">--}}
{{--        <div class="container">--}}
{{--            <div class="row">--}}
{{--                @foreach($statistics['items'] as $stat)--}}
{{--                    <div class="col-lg-3 col-md-6 col-12">--}}
{{--                        <div class="stat-card">--}}
{{--                            <div class="stat-icon ep{{ $loop->index + 1 }}-bg">--}}
{{--                                <i class="{{ $stat['icon'] }}"></i>--}}
{{--                            </div>--}}
{{--                            <div class="stat-info">--}}
{{--                                <h3 class="counter">{{ $stat['number'] }}</h3>--}}
{{--                                <p>{{ $stat['label'] }}</p>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                @endforeach--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </section>--}}
{{--@endif--}}
<section class="home-sections container">
    <h2 class="section-title">{{ trans('home.statistics') }}</h2>

    <div class="row">
        <div class="col-md-3">
            <div class="statistic-card">
                <h3>{{ $statistics['total_classes'] }}</h3>
                <p>Total Classes</p>
            </div>
        </div>
        <div class="col-md-3">
            <div class="statistic-card">
                <h3>{{ $statistics['total_students'] }}</h3>
                <p>Total Students</p>
            </div>
        </div>
        <div class="col-md-3">
            <div class="statistic-card">
                <h3>{{ $statistics['total_instructors'] }}</h3>
                <p>Total Instructors</p>
            </div>
        </div>
        <div class="col-md-3">
            <div class="statistic-card">
                <h3>{{ $statistics['total_testimonials'] }}</h3>
                <p>Total Testimonials</p>
            </div>
        </div>
    </div>
</section>
