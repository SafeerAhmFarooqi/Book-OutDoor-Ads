<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;

class Led extends Model
{
    use HasFactory;

    protected $table = 'led';

    protected $fillable = ['user_id', 'title', 'description', 'location', 'price', 'tax', 'city'];

    protected static function booted()
    {
        static::creating(function ($led) {
            $led->user_id = Auth::user()->id;
        });
    }

    public function images()
    {
        return $this->hasMany(LedImages::class, 'led_id');
    }

}
