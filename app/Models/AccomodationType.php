<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AccomodationType extends Model
{
    use HasFactory;
    protected $table = 'accomodation_type';
    protected $fillable = [
        'accomodation_type'
    ];
}
