<?php

namespace App\Http\Controllers;

use App\Models\BedType;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class BedTypeController extends Controller
{
    public function bedtypeIndex()
    {
        $bedType = BedType::all();
        return view('admin.bedtype.bedTypeIndex', compact('bedType'));
    }

    //ADD BEDTYPE
    public function addBedType(Request $request)
    {
        $bedType = new BedType;
        $bedType->bedType = $request['bedType'];

        $bedType->save();

        Alert::success('Success!', 'Bed Type Added');
        return redirect()->back();

    }

    //EDIT BEDTYPE
    public function editBedType(int $id)
    {
        $bedType = BedType::find($id);
        return view('admin.bedtype.bedTypeEdit', compact('bedType'));

    }

    //UPDATE BEDTYPE
    public function updateBedType(Request $request, int $id)
    {
        $bedType = BedType::find($id);
        $bedType->bedType = $request['bedType'];
        $bedType->update();

        if($bedType)
        {
            Alert::success('Success!', 'Bed Type Updated');
            return redirect('admin/bedType');
        }
        else
        {
            Alert::error('Error!', 'Something Went Wrong');
            return redirect()->back();
        }
    }

    //DELETE BEDTYPE
    public function deleteBedType(Request $request)
    {
        $bedType_id = $request['delete_bedType'];
        $bedType = BedType::find($bedType_id);
        $bedType->delete();

        Alert::success('Success', 'Bed Type Deleted');
        return redirect()->back();
    }
}
