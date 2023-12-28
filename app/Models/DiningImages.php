<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DiningImages extends Model
{
    use HasFactory;
    protected $table = 'dining_images';
    protected $fillable = [
        'dining_id',
        'dining_images'
    ];
}

