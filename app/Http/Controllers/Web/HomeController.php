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

        $heroSection = HeroSection::first(); // Get the first hero section
        return view('web.default.pages.homeNew',
            compact('heroSection'));
    }

    private function getHeroSectionData()
    {
        // Logic to fetch hero section data
        return [
            'title' => 'Inspiring today’s minds... to build tomorrow’s leaders!',
            'description' => 'Learning coding and AI is no longer optional — it’s a must-have skill for a future full of opportunities.',
            // Add other fields as needed
        ];
    }

    private function getHomeSections()
    {
        // Logic to fetch home sections
        return [
            // Example data structure
            (object) ['name' => 'featured_classes'],
            (object) ['name' => 'testimonials'],
            // Add more sections as needed
        ];
    }

    private function getFeaturedClasses()
    {
        // Logic to fetch featured classes
        return [
            // Example data structure for featured classes
            (object) ['title' => 'Class 1', 'description' => 'Description of class 1'],
            (object) ['title' => 'Class 2', 'description' => 'Description of class 2'],
            // Add more classes as needed
        ];
    }
    private function getAboutSectionData()
    {
        return [
            'title' => 'Why Choose 3C?',
            'description' => 'We offer your child the opportunity to build real-world coding skills and work on hands-on tech projects — all designed to prepare them for a future as a confident, professional programmer.',
            // Add more fields if needed
        ];
    }
    private function getTestimonials()
    {
        // Example of fetching testimonials, replace with your actual logic
        return [
            (object) ['user_name' => 'John Doe', 'user_avatar' => 'path/to/avatar1.jpg', 'comment' => 'This course changed my life!'],
            (object) ['user_name' => 'Jane Smith', 'user_avatar' => 'path/to/avatar2.jpg', 'comment' => 'I learned so much in such a short time.'],
            // Add more testimonials as needed
        ];
    }
    private function getStatistics()
    {
        return [
            'total_classes' => 150, // Example data, replace with actual data fetching logic
            'total_students' => 1200,
            'total_instructors' => 50,
            'total_testimonials' => 300,
        ];
    }
}
