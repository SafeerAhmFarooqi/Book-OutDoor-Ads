<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Carbon;

class Led extends Model
{
    use HasFactory;

    protected $table = 'led';

    protected $fillable = ['user_id','city_id', 'title','multimedia','multimediaquantity','bookingduration','description', 'location', 'price', 'tax', 'estviews', 'city', 'popular', 'trending'];

    protected static function booted()
    {
        static::creating(function ($led) {
            $led->user_id = Auth::user()->id;
        });
    }

    public static array $bookingDurations = [
        '1' => 'All',
        '2' => '3 Days',
        '3' => '1 Week',
        '4' => '1 Month',
        '5' => '3 Month',
        '6' => '6 Month',
    ];

    public function images()
    {
        return $this->hasMany(LedImages::class, 'led_id');
    }

    public function subOrders()
    {
        return $this->hasMany(SubOrders::class, 'led_id');
    }

    public function city()
    {
        return $this->belongsTo(City::class, 'city_id');
    }

    public function comments()
    {
        return $this->hasMany(Comments::class, 'led_id');
    }

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    public function setStartAndEndDate($value)
    {
        strtok($value,'*');
        $startDate=strtok('-');
        $endDate=strtok('*');
        $noOfDays=strtok('');
        $this->attributes['startDate'] = $startDate;
        $this->attributes['endDate'] = $endDate;
        $this->attributes['noOfDays'] = $noOfDays;
        
    }

    public function getBookingDurationAttribute() {
        return collect(self::$bookingDurations)->get($this->attributes['bookingduration']);
    }

}
