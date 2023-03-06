<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use App\Models\Pemesanan;
use App\Models\User;

class ProfileController extends Controller
{
    public function profile()
    {
        $user = User::where('id', auth()->user()->id)->first();
        $pemesanan = Pemesanan::where('user_id', $user->id)->get();
        return view('layouts.user.profile', compact('user', 'pemesanan'));
    }

}
