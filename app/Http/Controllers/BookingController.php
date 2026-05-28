<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Console;
use App\Models\Booking;

class BookingController extends Controller
{
    public function index()
    {
        $consoles = Console::all();

        return view(
            'booking',
            compact('consoles')
        );
    }

    public function store(Request $request)
    {
        $cek = Booking::where(
            'console_id',
            $request->console_id
        )
        ->where(
            'tanggal',
            $request->tanggal
        )
        ->where(
            'jam_mulai',
            $request->jam_mulai
        )
        ->where(
            'status',
            'approved'
        )
        ->first();

        if($cek){

            return back()->with(
                'error',
                'Jadwal sudah dibooking'
            );

        }

        Booking::create([

            'nama_mahasiswa' => $request->nama_mahasiswa,
            'nim' => $request->nim,
            'no_hp' => $request->no_hp,
            'console_id' => $request->console_id,
            'tanggal' => $request->tanggal,
            'jam_mulai' => $request->jam_mulai,
            'status' => 'pending'

        ]);

        return back()->with(
            'success',
            'Booking berhasil dikirim dan menunggu konfirmasi admin'
        );
    }
}