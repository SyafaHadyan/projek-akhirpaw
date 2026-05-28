<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Admin;
use App\Models\Booking;

class AdminController extends Controller
{
    public function loginPage()
    {
        return view('admin.login');
    }

    public function login(Request $request)
    {
        $admin = Admin::where(
            'username',
            $request->username
        )->first();

        if(
            $admin &&
            password_verify(
                $request->password,
                $admin->password
            )
        ){

            session([
                'admin' => true
            ]);

            return redirect(
                '/admin/dashboard'
            );
        }

        return back()->with(
            'error',
            'Login gagal'
        );
    }

    public function dashboard()
    {
        $bookings = Booking::latest()->get();

        return view(
            'admin.dashboard',
            compact('bookings')
        );
    }

    public function approve($id)
    {
        $booking = Booking::find($id);

        $booking->status = 'approved';

        $booking->save();

        return back()->with(
            'success',
            'Booking berhasil ditambahkan ke jadwal'
        );
    }

    public function reject($id)
    {
        $booking = Booking::find($id);

        $booking->status = 'rejected';

        $booking->save();

        return back()->with(
            'success',
            'Booking berhasil ditolak'
        );
    }

    public function delete($id)
    {
        $booking = Booking::find($id);

        $booking->delete();

        return back()->with(
            'success',
            'Booking berhasil dihapus'
        );
    }

    public function logout()
    {
        session()->forget('admin');

        return redirect('/admin/login');
    }
}