<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DiningReservation extends Model
{
    use HasFactory;
    protected $table = 'dining_reservation';
    protected $fillable = [
        'dining_facility',
        'first_name',
        'last_name',
        'phone_number',
        'email',
        'occasional',
        'special_request',
        'date',
        'time',
        'no_people'
    ];
}
