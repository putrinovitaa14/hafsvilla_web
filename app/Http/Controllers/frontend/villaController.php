<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use App\Models\Image;
use App\Models\Villa;

class villaController extends Controller
{
    public function villa()
    {
        $villas = Villa::latest()->get();
        return view('layouts.user.home', compact('villas'));
    }

    public function detailVilla($id)
    {
        $villas = Villa::findOrFail($id);
        $images = Image::where('villa_id', $id)->get();
        return view('layouts.user.detailVilla', compact('villas', 'images'));
    }
}
