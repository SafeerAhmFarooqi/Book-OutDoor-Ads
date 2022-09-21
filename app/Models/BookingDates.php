<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BookingDates extends Model
{
    use HasFactory;

    protected $table = 'booking_dates';
    protected $dates = ['bookdate'];
    public $timestamps = true;

    protected $fillable = [
        'user_id',
        'led_id',
        'order_id',
        'suborder_id',
        'bookdate',
    ];

    public function order()
    {
        return $this->belongsTo(Orders::class, 'order_id');
    }
}
