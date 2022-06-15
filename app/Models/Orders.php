<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Auth;
use App\Models\SubOrders;

class Orders extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $table = 'orders';
    protected $dates = ['deleted_at'];
    public $timestamps = true;

    protected $fillable = [
        'user_id',
        'total_price',
        'total_tax',
        'payment_status',
        'complete_status',
        'cancel_status',
        'cancel_detail',
        'payment_id',
    ];

    protected static function booted()
    {
        static::creating(function ($order) {
            $order->user_id = Auth::user()->id;
        });
    }

    public function subOrders()
    {
        return $this->hasMany(SubOrders::class, 'order_id');
    }

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }


}
