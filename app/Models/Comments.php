<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;
use Illuminate\Database\Eloquent\SoftDeletes;

class Comments extends Model
{
    use HasFactory;

    protected $table = 'comments';
    protected $dates = ['deleted_at'];

    protected $fillable = ['user_id','led_id', 'comment', 'status','deleted_at',];

    protected static function booted()
    {
        static::creating(function ($comment) {
            $comment->user_id = Auth::user()->id;
        });
    }

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    public function led()
    {
        return $this->belongsTo(Led::class, 'led_id');
    }
}
