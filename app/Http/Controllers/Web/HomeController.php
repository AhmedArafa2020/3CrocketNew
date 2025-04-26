<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use App\Mixins\Installment\InstallmentPlans;
use App\Models\AdvertisingBanner;
use App\Models\Blog;
use App\Models\Bundle;
use App\Models\FeatureWebinar;
use App\Models\HeroSection;
use App\Models\HomePageStatistic;
use App\Models\HomeSection;
use App\Models\NewAboutSection;
use App\Models\Product;
use App\Models\Role;
use App\Models\Sale;
use App\Models\SpecialOffer;
use App\Models\Subscribe;
use App\Models\Ticket;
use App\Models\TrendCategory;
use App\Models\UpcomingCourse;
use App\Models\Webinar;
use App\Models\Testimonial;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    public function index()
    {

        // Get the first hero section
        $heroSection = HeroSection::first();

        // Get the first New About Section
        $newAboutSection = NewAboutSection::first(); // You can use first() or find() if you know the specific ID

        // Pass both heroSection and newAboutSection to the view
        return view('web.default.pages.homeNew', compact('heroSection', 'newAboutSection'));
    }


}
