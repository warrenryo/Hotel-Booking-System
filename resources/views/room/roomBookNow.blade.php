@extends('layouts.roomSelectionPage.roomSelectionIndex')

@section('content')
<form action="{{ url('book-request') }}" method="POST">
    @csrf
    <div class="flex mx-20 justify-center mt-20">
        <div class="block w-[90vh]">

            @include('room.billingPayment.guestInformation')
            @include('room.billingPayment.payment')
            @include('room.billingPayment.additionRequests')

            <div class="mt-10">
                <p class="text-xl">Cancellation policy</p>
                <p class="mt-4">You may cancel your reservation for no charge before 11:59 PM local hotel time on November 25, 2023 (2 day[s] before arrival). Please note that we will assess a fee of 13221 PHP if you must cancel after this deadline.</p>
            </div>
            <div class="mt-4 justify-end flex">
                <button type="submit" class="text-white bg-gray-800 hover:bg-blue-800 duration-200 focus:ring-4 focus:ring-blue-300 font-medium rounded-full text-sm px-20 py-5 me-2 mb-2">Book Now</button>
            </div>
        </div>
        <div class="block px-4">
            <div class="max-w-sm bg-white border border-gray-200 rounded-lg shadow ">
                @foreach($rooms as $room)
                <img class="rounded-t-lg" src="{{asset($room->roomImages[0]->room_images)}}" alt="" />
                <div class="mx-4">
                    <div class="py-5">
                        <input type="hidden" name="bed_type" value="{{$room->bed_type}}">
                        <input type="hidden" name="accomodation_type" value="{{$room->accomodation_type}}">
                        <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 ">{{$room->bed_type}}, {{$room->accomodation_type}}</h5>
                        <a href="{{ url('room/room-details/room_id-'.$room->id) }}" class="text-sm hover:underline text-gray-500">Room Details</a>
                    </div>
                    <hr>
                    <div class="mt-4 py-4 flex justify-between">
                        <h1 class="font-bold text-lg">Subtotal</h1>
                        @if(auth()->check())
                        <input type="hidden" name="amount" value="{{$room->final_discount}}">
                        <h1><i class="fa-solid fa-peso-sign mr-2"></i> {{number_format($room->final_discount)}}</h1>
                        @else
                        <input type="hidden" name="amount" value="{{$room->price}}">
                        <h1><i class="fa-solid fa-peso-sign mr-2"></i> {{number_format($room->price)}}</h1>
                        @endif
                    </div>
                </div>


                @endforeach
            </div>
        </div>
    </div>
</form>
@endsection