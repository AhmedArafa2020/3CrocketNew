<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Booking;

class BookingController extends Controller
{
    public function index()
    {
        $bookings = Booking::latest()->paginate(20); // paginate 20 per page

        return view('admin.booking.index', compact('bookings'));
    }
}
