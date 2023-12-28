<?php

namespace App\Http\Controllers;

use App\Models\Room;
use App\Models\BedType;
use Illuminate\Http\Request;
use App\Models\AccomodationType;
use RealRashid\SweetAlert\Facades\Alert;

class AdminRoomController extends Controller
{
    public function roomIndex()
    {
        $bedType = BedType::all();
        $accomodation = AccomodationType::all();
        $room = Room::all();
        return view('admin.rooms.roomIndex', compact('bedType', 'accomodation', 'room'));
    }

    //ADD ROOM 
    public function addRoom(Request $request)
    {
        $room = new Room;
        
        $addRoom = $room->create([
            'bed_type' => $request['bed_type'],
            'accomodation_type' => $request['accomodation_type'],
            'price' => $request['price'],
            'member_discount' => $request['member_discount'],
            'bedding' => $request['bedding'],
            'room_feature' => $request['room_feature'],
            'bathroom_features' => $request['bathroom_features'],
            'furnitures' => $request['furnitures'],
            'kitchen_features' => $request['kitchen_features'],
            'internet_phones' => $request['internet_phones'],
            'entertainment' => $request['entertainment']
        ]);

        if($request->hasFile('room_image')){
            $uploadPath = 'uploads/rooms/';

            $i = 1;
            foreach($request->file('room_image') as $imageFile){
                $extension = $imageFile->getClientOriginalExtension();
                $fileName = time().$i++.'.'.$extension;
                $imageFile->move($uploadPath,$fileName);
                $finalImagePathName = $uploadPath.$fileName;

                $addRoom->roomImages()->create([
                    'room_id' => $addRoom->id,
                    'room_images' => $finalImagePathName
                ]);
            }
        }
        Alert::success('Success!', 'Room Created Successfully');
        return redirect()->back();
    }

    public function roomDetails($id)
    {
        $details = Room::find($id);
        return view('admin.rooms.roomDetails', compact('details'));
    }

}
