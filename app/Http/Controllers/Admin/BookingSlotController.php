<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\BookingSlot;
use Illuminate\Http\Request;

class BookingSlotController extends Controller
{
    public function index()
    {
        $slots = BookingSlot::orderBy('date')->orderBy('time')->paginate(20);
        return view('admin.booking_slots.index', compact('slots'));
    }

    public function create()
    {
        return view('admin.booking_slots.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'date' => 'required|date|after_or_equal:today',
            'time' => 'required|date_format:H:i',
        ]);

        BookingSlot::create([
            'date' => $request->date,
            'time' => $request->time,
            'is_booked' => false,
        ]);

        return redirect()->route('booking-slots.index')->with('success', 'Slot added successfully!');
    }

    public function edit(BookingSlot $bookingSlot)
    {
        return view('admin.booking_slots.edit', compact('bookingSlot'));
    }

    public function update(Request $request, BookingSlot $bookingSlot)
    {

        $request->validate([
            'date' => 'required|date|after_or_equal:today',
            'time' => 'required|date_format:H:i',
        ]);

        $bookingSlot->update([
            'date' => $request->date,
            'time' => $request->time,
        ]);

        return redirect()->route('booking-slots.index')->with('success', 'Slot updated successfully!');
    }

    public function destroy(BookingSlot $bookingSlot)
    {
        $bookingSlot->delete();
        return redirect()->route('booking-slots.index')->with('success', 'Slot deleted successfully!');
    }
}

