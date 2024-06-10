<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Coursee extends Model
{
    use HasFactory;
    public function university()
    {
        return $this->belongsTo(University::class);
    }
    public function wishlistcourse()
    {
        return $this->hasMany(wishlistcourse::class);
    }
}
