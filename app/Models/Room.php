<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Room extends Model
{
    use HasFactory;

    protected $table = 'room';
    protected $fillable = [
        'bed_type',
        'accomodation_type',
        'price',
        'member_discount',
        'bedding',
        'room_feature',
        'bathroom_features',
        'furnitures',
        'kitchen_features',
        'internet_phones',
        'entertainment'
    ];

    public function roomImages()
    {
        return $this->hasMany(RoomImages::class, 'room_id', 'id');
    }
}
