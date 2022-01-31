<?php

namespace App\Http\Controllers\admin;
use App\Models\Booking;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class checkBookingsController extends Controller
{
    public function allBookings()
    {
        // here for time complexity we only load the email and titlw of the message as that is all we need, so we dont spend any more time loading the resst of the infos we dont need on this page
        $inbox = Booking::get(['subject','email']);
        return view('adminDashboard.bookings.allBookings', compact('inbox'));
    }

    public function readMessage(Booking $bookings)
    {
        return view('adminDashboard.bookings.message', compact('bookings'));
    }
}
