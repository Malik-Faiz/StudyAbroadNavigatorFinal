<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class university extends Model
{
    use HasFactory;
    public function scholarships()
    {
        return $this->hasMany(Scholarship::class);
    }
    public function course()
    {
        return $this->hasMany(Coursee::class);
    }
    public function wishlistuniversity()
    {
        return $this->hasMany(wishlistuniversity::class);
    }
}
