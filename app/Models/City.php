<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class City extends Model
{
    use HasFactory;

    protected $table = 'city';
    protected $fillable = ['city','icon'];

    public function led()
    {
        return $this->hasMany(Led::class, 'city_id');
    }
}
