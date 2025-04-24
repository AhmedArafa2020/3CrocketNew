{{--@if(!empty($services))--}}
{{--    <section class="ep-category section-gap">--}}
{{--        <div class="container">--}}
{{--            <div class="BoxxServices">--}}
{{--                <div class="row justify-content-center">--}}
{{--                    <div class="col-lg-12 col-xl-12 col-md-12 col-12">--}}
{{--                        <div class="ep-section-head text-center">--}}
{{--                            <h3 class="ep-section-head__big-title left">--}}
{{--                                {{ $services['title'] ?? '' }}--}}
{{--                            </h3>--}}
{{--                            @if(!empty($services['description']))--}}
{{--                                <p class="section-hint">{{ $services['description'] }}</p>--}}
{{--                            @endif--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}

{{--                @if(!empty($services['items']))--}}
{{--                    <div class="Serviceitemsss">--}}
{{--                        @foreach($services['items'] as $service)--}}
{{--                            <div class="ItemServ">--}}
{{--                                @if(!empty($service['icon']))--}}
{{--                                    <img src="{{ $service['icon'] }}" alt="{{ $service['title'] }}">--}}
{{--                                @endif--}}
{{--                                <p>{{ $service['title'] }}</p>--}}
{{--                            </div>--}}
{{--                        @endforeach--}}
{{--                    </div>--}}
{{--                @endif--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </section>--}}
{{--@endif--}}
<!-- Start Category Area -->
<section class="ep-category section-gap">
    <div class="container ">
        <div class="BoxxServices">
            <div class="row justify-content-center">
                <div class="col-lg-12 col-xl-12 col-md-12 col-12">
                    <div class="ep-section-head text-center">
                        <h3 class="ep-section-head__big-title  left">
                            +48 professional developers tech tools in one curriculum
                        </h3>
                    </div>
                </div>
            </div>

            <div class="Serviceitemsss">
                <div class="ItemServ">
                    <img src="assets/Landing_1/assets/images/new/serv_1.svg">
                    <p>Mobile App Development</p>
                </div>
                <div class="ItemServ">
                    <img src="assets/Landing_1/assets/images/new/serv_2.svg">
                    <p>AI & Machine Learning</p>
                </div>
                <div class="ItemServ">
                    <img src="assets/Landing_1/assets/images/new/serv_3.svg">
                    <p>3D Coding (AR, VR)</p>
                </div>
                <div class="ItemServ">
                    <img src="assets/Landing_1/assets/images/new/serv_4.svg">
                    <p>Game Development</p>
                </div>
                <div class="ItemServ">
                    <img src="assets/Landing_1/assets/images/new/serv_5.svg">
                    <p>Python & Data Science</p>
                </div>
                <div class="ItemServ">
                    <img src="assets/Landing_1/assets/images/new/serv_6.svg">
                    <p>Minecraft & <br> Roblox</p>
                </div>
                <div class="ItemServ">
                    <img src="assets/Landing_1/assets/images/new/serv_7.svg">
                    <p>Web <br> Development</p>
                </div>
                <div class="ItemServ">
                    <img src="assets/Landing_1/assets/images/new/serv_8.svg">
                    <p>User interface (UI & UX)</p>
                </div>
            </div>
        </div>

    </div>
</section>
<!-- End  Category Area -->
