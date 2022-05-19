<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LedImages extends Model
{
    use HasFactory;

    protected $table = 'led_images';
    public $timestamps = true;

    protected $fillable = ['led_id', 'name', 'path'];

    // Validation Rules
    protected array $validationRules = [
        'path' => 'required|max:255',
    ];

    /**
     * Get the Incident
     */
    public function led()
    {
        return $this->belongsTo(Led::class, 'led_id');
    }
}
