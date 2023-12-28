<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\AccomodationType;
use RealRashid\SweetAlert\Facades\Alert;

class AccomodationController extends Controller
{
    public function accomodationIndex()
    {
        $accomodation = AccomodationType::all();
        return view('admin.reservationType.reservationTypeIndex', compact('accomodation'));
    }

    //ADD ACCOMODATION
    public function addAccomodation(Request $request)
    {
        $accomodation = new AccomodationType;
        $accomodation->accomodation_type = $request['accomodation_type'];

        $accomodation->save();

        Alert::success('Success!', 'Accomodation Added');
        return redirect()->back();
    }

    //EDIT ACCOMODATION
    public function editAccomodation(int $id)
    {
        $accomodation = AccomodationType::find($id);
        return view('admin.reservationType.reservationEdit', compact('accomodation')); 
    }

    //UPDATE ACCOMODATION
    public function updateAccomodation(Request $request, int $id)
    {
        $accomodation = AccomodationType::find($id);
        $accomodation->accomodation_type = $request['accomodation_type'];
        $accomodation->update();

        if($accomodation)
        {
            Alert::success('Success!', 'Accomodation Updated');
            return redirect('admin/accomodationType');
        }else{
            Alert::error('Error!', 'Something Went Wrong');
            return redirect()->back();
        }
    }

    //DELETE ACCOMODATION
    public function deleteAccomodation(Request $request)
    {
        $accomodation_id = $request['delete_accomodation'];
        $accomodation = AccomodationType::find($accomodation_id);
        $accomodation->delete();

        Alert::success('Success!', 'Accomodation Deleted');
        return redirect()->back();
    }
}
