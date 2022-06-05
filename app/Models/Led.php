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

    protected $fillable = ['user_id','city_id', 'title', 'description', 'location', 'price', 'tax', 'city'];

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

    public function subOrders()
    {
        return $this->hasMany(SubOrders::class, 'led_id');
    }

    public function setStartAndEndDate($value)
    {
        strtok($value,'*');
        $startDate=strtok('-');
        $endDate=strtok('');
        $this->attributes['startDate'] = $startDate;
        $this->attributes['endDate'] = $endDate;
        $this->attributes['noOfDays'] = Carbon::parse($startDate)->diffInDays(Carbon::parse($endDate))+1;
        
    }

}
