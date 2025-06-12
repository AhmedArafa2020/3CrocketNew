@extends(getTemplate().'.layouts.newapp')


@section('title', 'Home | 3 School Coding')

@section('content')

    @include('web.default.pages.includes.new_hero')
    @include('web.default.pages.includes.new_about')
    @include('web.default.pages.includes.new_brands')
    @include('web.default.pages.includes.new_funfacts')
    @include('web.default.pages.includes.new_services')
    @include('web.default.pages.includes.new_students')
    @include('web.default.pages.includes.new_pricing')
    @include('web.default.pages.includes.new_childchance')
    @include('web.default.pages.includes.new_faq')
    @include('web.default.pages.includes.new_opportunity')

@endsection
