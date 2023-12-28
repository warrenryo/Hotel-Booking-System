<?php

namespace App\Http\Controllers;

use App\Models\Dining;
use App\Models\DiningReservation;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class AdminDiningController extends Controller
{
    public function diningIndex()
    {
        $dining = Dining::all();
        return view('admin.dining.diningIndex', compact('dining'));
    }

    //ADD DINING
    public function addDining(Request $request)
    {
        $dining = new Dining;

        $addDining = $dining->create([
            'dining_facility' => $request['dining_facility'],
            'date_available' => $request['date_availability'],
            'description' => $request['description'],
            'time_open' => $request['time_open'],
            'time_close' => $request['time_close']
        ]);

        if($request->hasFile('dining_image'))
        {
            $uploadPath = 'uploads/dining/';

            $i = 1;
            foreach($request->file('dining_image') as $imageFile){
                $extension = $imageFile->getClientOriginalExtension();
                $fileName = time().$i++.'.'.$extension;
                $imageFile->move($uploadPath,$fileName);
                $finalImagePathName = $uploadPath.$fileName;

                $addDining->diningImages()->create([
                    'dining_id' => $addDining->id,
                    'dining_images' => $finalImagePathName
                ]);
            }
        }
        Alert::success('Success!', 'Dining Added Successfully');
        return redirect()->back();
    }
    
    public function diningReservationList()
    {
        $reservation = DiningReservation::all();
        return view('admin.dining.diningReservationList', compact('reservation'));
    }
}
