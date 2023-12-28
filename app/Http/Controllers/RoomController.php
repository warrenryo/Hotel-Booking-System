<?php

namespace App\Http\Controllers;

use App\Models\Room;
use Illuminate\Http\Request;

class RoomController extends Controller
{
    public function room()
    {
        $rooms = Room::all();

        foreach ($rooms as $room) {
            $member_discount = $room->member_discount;
            $price = $room->price;
        
            $price_discount_calculation = $price * $member_discount / 100;
        
            $final_discount = $price - $price_discount_calculation;

            $room->final_discount = $final_discount;
        }
        return view('room.roomSelectionContent', compact('rooms','final_discount'));
    }

    //ROOM DETAILS 
    public function roomDetails($id)
    {   
        $roomDetails = Room::find($id);
        

        return view('room.roomDetails', compact('roomDetails'));
    }

    //PROCEED TO BOOK NOW
    public function bookNowMember($id)
    {
        if(auth()->check()){
            $user = auth()->user();

            $rooms = Room::where('id',$id)->get();
            foreach ($rooms as $room) {
                $member_discount = $room->member_discount;
                $price = $room->price;
            
                $price_discount_calculation = $price * $member_discount / 100;
            
                $final_discount = $price - $price_discount_calculation;
    
                $room->final_discount = $final_discount;
            }
            return view('room.roomBookNow', compact('user','rooms','final_discount'));
        }else{
            return redirect('login');
        }
    }
}
