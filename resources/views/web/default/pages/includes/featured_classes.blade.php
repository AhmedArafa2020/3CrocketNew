<section class="home-sections container">
    <h2 class="section-title">{{ trans('home.featured_classes') }}</h2>
    <p class="section-hint">{{ trans('home.featured_classes_hint') }}</p>

    <div class="row">
        @foreach($classes as $class)
            <div class="col-md-4">
                <div class="featured-class-card">
                    <h3>{{ $class->title }}</h3>
                    <p>{{ $class->description }}</p>
                    <a href="#" class="btn btn-primary">View Class</a>
                </div>
            </div>
        @endforeach
    </div>
</section>
