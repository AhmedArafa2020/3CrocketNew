<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use App\Mixins\Installment\InstallmentPlans;
use App\Models\AdvertisingBanner;
use App\Models\Blog;
use App\Models\Booking;
use App\Models\BookingSlot;
use App\Models\Bundle;
use App\Models\FeatureWebinar;
use App\Models\HeroSection;
use App\Models\HomePageStatistic;
use App\Models\HomeSection;
use App\Models\NewAboutSection;
use App\Models\NewBrandsSection;
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
        //Brands
        $accreditation = NewBrandsSection::first();
        return view('web.default.pages.homelastNew', compact('heroSection', 'newAboutSection','accreditation'));
    }
    public function startForm()
    {
        return view('web.default.pages.includes.booking'); // Blade file for the first form
    }
    public function saveBooking(Request $request)
    {
        $request->validate([
            'booking_date' => 'required|date',
            'booking_time' => 'required',
        ]);

        // Retrieve data from session (whatsapp number + grade)
        $whatsappNumber = session('whatsapp_number');
        $grade = session('grade');

        if (!$whatsappNumber || !$grade) {
            return redirect()->route('home')->with('error', 'Please fill WhatsApp number and Grade first.');
        }

        // Save booking
        $booking = Booking::create([
            'whatsapp_number' => $whatsappNumber,
            'grade' => $grade,
            'booking_date' => $request->booking_date,
            'booking_time' => $request->booking_time,
            'bigbluebutton_link' => null, // Will be generated later
        ]);

        // Optionally you can generate BigBlueButton link here
        // (we can do it automatically OR later in Admin manually)

        // Clear session after booking
        session()->forget(['whatsapp_number', 'grade']);

        return redirect()->route('home')->with('success', 'Booking completed! We will contact you soon.');
    }
    public function startSubmit(Request $request)
    {
        $validated = $request->validate([
            'whatsapp_number' => 'required|string|max:20',
            'grade' => 'required|string|max:50',
        ]);

        session([
            'booking_whatsapp_number' => $validated['whatsapp_number'],
            'booking_grade' => $validated['grade'],
        ]);

        return redirect()->route('booking.selectSlotForm');
    }

    public function selectSlotForm()
    {
        $available_slots = BookingSlot::where('is_booked', false)
            ->where('date', '>=', now()->toDateString())
            ->orderBy('date')
            ->orderBy('time')
            ->get();

        return view('web.default.pages.includes.booking', compact('available_slots'));
    }


    public function selectSlotSubmit(Request $request)
    {
//        dd($request);
        $request->validate([
            'date' => 'required|date',
            'time' => 'required',
        ]);

        $whatsappNumber = session('whatsapp_number');
        $grade = session('grade');

        if (!$whatsappNumber || !$grade) {
            return redirect()->route('home')->with('error', 'Please fill WhatsApp number and Grade first.');
        }

        Booking::create([
            'whatsapp_number' => $whatsappNumber,
            'grade' => $grade,
            'booking_date' => $request->date,
            'booking_time' => $request->time,
            'bigbluebutton_link' => null, // Optional, can be added later
        ]);

        session()->forget(['whatsapp_number', 'grade']);

        return redirect()->route('home')->with('success', 'Booking completed successfully!');
    }
}
