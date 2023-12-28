<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Dining extends Model
{
    use HasFactory;
    protected $table = 'dining';
    protected $fillable = [
        'dining_facility',
        'description',
        'date_available',
        'time_open',
        'time_close',
    ];

    public function diningImages()
    {
        return $this->hasMany(DiningImages::class, 'dining_id', 'id');
    }
}
