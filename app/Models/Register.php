<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class Register extends Authenticatable
{
    use HasFactory, Notifiable;

    public $timestamps = false;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'first_name', 'last_name', 'email', 'phone', 'password', 'role'
    ];

    public function wishlistscholarship()
    {
        return $this->hasMany(wishlistscholarship::class);
    }
    public function wishlistuniversity()
    {
        return $this->hasMany(wishlistuniversity::class);
    }
    public function wishlistjob()
    {
        return $this->hasMany(wishlistjob::class);
    }
    public function wishlistcourse()
    {
        return $this->hasMany(wishlistcourse::class);
    }
}

