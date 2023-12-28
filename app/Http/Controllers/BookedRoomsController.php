<?php

namespace App\Http\Controllers;

use App\Models\BookRooms;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class BookedRoomsController extends Controller
{
    public function bookRequestSubmit(Request $request)
    {
        $request_submit = new BookRooms;
        
        $randomNumbers = mt_rand(100000000,999999999);
        if($this->requestCode($randomNumbers))
        {
            $randomNumbers = mt_rand(100000000,999999999);
        }

        $request_submit->book_request_code = $randomNumbers;
        $request_submit->bed_type = $request['bed_type'];
        $request_submit->accomodation_type = $request['accomodation_type'];
        $request_submit->amount = $request['amount'];
        $request_submit->first_name = $request['first_name'];
        $request_submit->last_name = $request['last_name'];
        $request_submit->email = $request['email'];
        $request_submit->member_number = $request['member_number'];
        $request_submit->adult_no = $request['adult_no'];
        $request_submit->children_no = $request['children_no'];
        $request_submit->rooms = $request['rooms'];
        $request_submit->requests = json_encode($request['requests']);
        $request_submit->check_in = \Carbon\Carbon::parse($request['check_in']);
        $request_submit->check_out = \Carbon\Carbon::parse($request['check_out']);
        $request_submit->save();

        Alert::success('Booked Success!', 'Your request has been sent and will be proccess on time.');
        return redirect('/');
    }

    public function requestCode($randomNumbers)
    {
        return BookRooms::whereBookRequestCode($randomNumbers)->exists();
    }
}
