<?php

namespace App\Http\Controllers;

use App\Models\Booking;
use Carbon\Carbon;

class HomeController extends Controller
{
    public function index()
    {
        Carbon::setLocale('id');

        $jamList = [

            '09:00',
            '10:00',
            '11:00',
            '12:00',
            '13:00',
            '14:00',
            '15:00',
            '16:00',
            '17:00'

        ];

        $bookings = Booking::where(
            'status',
            'approved'
        )->get();

        $today = Carbon::now('Asia/Jakarta')
            ->translatedFormat('l, d F Y');

        return view(
            'home',
            compact(
                'jamList',
                'bookings',
                'today'
            )
        );
    }
}