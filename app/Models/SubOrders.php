<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\Models\Orders;
use App\Models\Led;
use App\Models\User;
use Auth;

class SubOrders extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $table = 'sub_orders';
    protected $dates = ['deleted_at','startDate','endDate'];
    public $timestamps = true;

    protected $fillable = [
        'user_id',
        'led_id',
        'order_id',
        'price',
        'no_of_days',
        'tax',
        'startDate',
        'endDate',
        'cancel_status',
        'cancel_detail',
    ];

    

    public function order()
    {
        return $this->belongsTo(Orders::class, 'order_id');
    }

    public function led()
    {
        return $this->belongsTo(Led::class, 'led_id');
    }

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

}
