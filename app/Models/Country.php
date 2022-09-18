<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Country extends Model
{
    use HasFactory;

    protected $fillable = ['country','code', 'status'];

    public function tax()
    {
        return $this->hasOne(Tax::class, 'country_id');
    }

}
