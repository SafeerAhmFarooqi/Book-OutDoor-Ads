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

    protected $dates = ['startDate','endDate'];

    protected $fillable = ['user_id','city_id','country_id', 'title','multimedia','multimediaquantity','bookingduration','description', 'location', 'price', 'tax', 'estviews', 'city', 'popular', 'trending'];

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

    public function country()
    {
        return $this->belongsTo(Country::class, 'country_id');
    }

    public function bookingDates()
    {
        return $this->hasMany(BookingDates::class, 'led_id');
    }

    public function getPrice()
    {
        //dd($this->bookingduration);

        switch ($this->bookingduration) {
            case "All":
              echo $this->price;
              break;
            case "3 Days":
              echo $this->price*3;
              break;
            case "1 Week":
              echo $this->price*7;
              break;
            case "1 Month":
              echo $this->price*30;
              break;
            case "3 Month":
              echo $this->price*90;
              break;
            case "6 Month":
              echo $this->price*180;
              break;
            default:
              echo $this->price;
          }
    }

    public function getBookingDurationName()
    {
        //dd($this->bookingduration);

        switch ($this->bookingduration) {
            case "All":
              echo 'Tag';
              break;
            case "3 Days":
              echo '3 Tags';
              break;
            case "1 Week":
              echo 'Woche';
              break;
            case "1 Month":
              echo 'Monat';
              break;
            case "3 Month":
              echo '3 Monat';
              break;
            case "6 Month":
              echo '6 Monat';
              break;
            default:
              echo 'Tag';
          }
    }

    public function setStartAndEndDate($value)
    {
       $value2=$value;
        strtok($value,'*');
        if ($this->bookingduration=='All') {
            $startDate=strtok('-');
            //dd($startDate);
            $endDate=strtok('*');
            $noOfDays=strtok('');
        }
         if ($this->bookingduration=='3 Days') {
            strtok($value2,'*');
            $date=strtok('*');
            $start=strtok($date,'-');
            $end=strtok('');
            $startDate=Carbon::parse($start);
            $endDate=Carbon::parse($end);
            $noOfDays=3;      
        }

        if ($this->bookingduration=='1 Week') {
            strtok($value2,'*');
            $date=strtok('*');
            $start=strtok($date,'-');
            $end=strtok('');
            $startDate=Carbon::parse($start);
            $endDate=Carbon::parse($end);
            $noOfDays=7;   
        }

        if ($this->bookingduration=='1 Month') {
            strtok($value2,'*');
            $date=strtok('*');
            $start=strtok($date,'-');
            $end=strtok('');
            $startDate=Carbon::parse($start);
            $endDate=Carbon::parse($end);
            $noOfDays=30;   
        }

        if ($this->bookingduration=='3 Month') {
            strtok($value2,'*');
            $date=strtok('*');
            $start=strtok($date,'-');
            $end=strtok('');
            $startDate=Carbon::parse($start);
            $endDate=Carbon::parse($end);
            $noOfDays=90;   
        }

        if ($this->bookingduration=='6 Month') {
            strtok($value2,'*');
            $date=strtok('*');
            $start=strtok($date,'-');
            $end=strtok('');
            $startDate=Carbon::parse($start);
            $endDate=Carbon::parse($end);
            $noOfDays=180;   
        }
        
      // dd($startDate);
        $this->attributes['startDate'] = $startDate;
        $this->attributes['endDate'] = $endDate;
        $this->attributes['noOfDays'] = $noOfDays;
        
    }

    public function getBookingDurationAttribute() {
        return collect(self::$bookingDurations)->get($this->attributes['bookingduration']);
    }

}
