<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class wishlistscholarship extends Model
{
    use HasFactory;
    protected $fillable = [
        'user_id',
        'scholarship_id',
    ];
    public function user()
    {
        return $this->belongsTo(Register::class);
    }
    public function scholarship()
    {
        return $this->belongsTo(Scholarship::class);
    }
}
