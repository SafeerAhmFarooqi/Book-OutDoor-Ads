<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class City extends Model
{
    use HasFactory;

    protected $table = 'city';
    protected $dates = ['deleted_at'];
    protected $fillable = ['country_id','city','icon','deleted_at'];

    public function led()
    {
        return $this->hasMany(Led::class, 'city_id');
    }
}
