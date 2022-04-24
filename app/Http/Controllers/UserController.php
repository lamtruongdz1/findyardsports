<?php

namespace App\Http\Controllers;
use App\Models\User;
use App\Models\Booking;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function manage()
    {
        $user = auth()->user();
        $booking = Booking::where('user_id', $user->id)->get();

        return view('content.payment.manage', compact('user'));
    }
}
