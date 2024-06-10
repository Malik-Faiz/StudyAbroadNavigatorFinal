<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class wishlistuniversity extends Model
{
    use HasFactory;
    protected $fillable = [
        'user_id',
        'university_id',
    ];
    public function user()
    {
        return $this->belongsTo(Register::class);
    }
    public function university()
    {
        return $this->belongsTo(university::class);
    }
}
