<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BookRooms extends Model
{
    use HasFactory;
    protected $table = 'booked_rooms';
    protected $fillable = [
        'book_request_code',
        'bed_type',
        'accomodation_type',
        'amount',
        'first_name',
        'last_name',
        'email',
        'member_number',
        'adult_no',
        'children_no',
        'rooms',
        'requests',
        'check_in',
        'check_out'
    ];
}
