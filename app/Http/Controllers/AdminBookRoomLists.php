<?php

namespace App\Http\Controllers;

use App\Models\BookRooms;
use Illuminate\Http\Request;

class AdminBookRoomLists extends Controller
{
    public function bookedRoom()
    {
        $bookedRooms = BookRooms::all();
        return view('admin.bookedRoomLists.bookRoomIndex',compact('bookedRooms'));
    }
}
