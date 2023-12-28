<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\Dining;
use Illuminate\Http\Request;
use App\Models\DiningReservation;
use RealRashid\SweetAlert\Facades\Alert;

class DiningController extends Controller
{
    public function diningIndex()
    {
        $time = Carbon::now()->format('H:i:s');
        $dining = Dining::all();
        return view('diningPage.diningPage', compact('dining','time'));
    }

    public function bookATable(Request $request)
    {
        $diningFacility = $request->input('dining_facility');
        return view('diningPage.bookATable', compact('diningFacility'));
    }

    public function reserveTable(Request $request)
    {
        $diningFacility = $request['dining_facility'];
        $no_people = $request['no_people'];
        $date = $request['date'];
        $time = $request['time'];

        return view('diningPage.reserveTable', compact('diningFacility','no_people','date','time'));
    }

    public function confirmReservation(Request $request)
    {
        $reserve = new DiningReservation;
        $reserve->create([
            'dining_facility' => $request['dining_facility'],
            'first_name' => $request['first_name'],
            'last_name' => $request['last_name'],
            'phone_number' => $request['phone_number'],
            'email' => $request['email'],
            'occasional' => $request['occasional'],
            'special_request' => $request['special_request'],
            'date' => Carbon::parse($request['date']),
            'time' => $request['time'],
            'no_people' => $request['no_people']
        ]);

        if($reserve)
        {
            Alert::success('Success!', 'Your Reservation request has been submitted');
            return redirect('/');
        }

        
    }
}
