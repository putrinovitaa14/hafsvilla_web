<?php

namespace App\Models;

use App\Models\Rating;
use App\Models\Pemesanan;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Rating extends Model
{
    use HasFactory;
    public function pemesanan()
    {
        return $this->belongsTo(Pemesanan::class);
    }

    public function rating(){
        return $this->hasMany(Rating::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
