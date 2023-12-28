@extends('layouts.diningPage.diningPageLayout')

@section('content')
<div class="">
    <div class="flex justify-center">
        <div class="bg-white rounded-xl shadow-lg mt-10">
            <div class="p-4 pb-10">
                <form action="{{ url('reserve-table') }}" method="GET">
                    @csrf
                <div class="mt-10 mx-20">
                    <h1 class="font-bold text-xl ">Reservation at {{$diningFacility}}</h1>
                    <input type="hidden" value="{{$diningFacility}}" name="dining_facility">
                    <div class="mt-4 flex">
                        <div class="mt-4">
                            <label for="">Select People</label>
                            <select id="countries" name="no_people" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-[15vh] p-2.5 ">
                                <option value="2 People">2 People</option>
                                <option value="3 People">3 People</option>
                                <option value="4 People">4 People</option>
                                <option value="5 People">5 People</option>
                                <option value="6 People">6 People</option>
                                <option value="7 People">7 People</option>
                                <option value="8 People">8 People</option>
                                <option value="9 People">9 People</option>
                                <option value="10 People">10 People</option>
                                <option value="11 People">11 People</option>
                                <option value="12 People">12 People</option>
                                <option value="13 People">13 People</option>
                                <option value="14 People">14 People</option>
                                <option value="15 People">15 People</option>
                                <option value="16 People">16 People</option>
                                <option value="17 People">17 People</option>
                                <option value="18 People">18 People</option>
                                <option value="19 People">19 People</option>
                                <option value="20 People">20 People</option>
                            </select>
                        </div>
                        <div class="relative max-w-sm mt-4 ml-2">
                            <label for="">Select Date</label>
                            <div class="absolute tinset-y-0 start-0 flex items-center ps-3.5 pointer-events-none">
                                <svg class="w-4 h-6 text-gray-500 dark:text-gray-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                                    <path d="M20 4a2 2 0 0 0-2-2h-2V1a1 1 0 0 0-2 0v1h-3V1a1 1 0 0 0-2 0v1H6V1a1 1 0 0 0-2 0v1H2a2 2 0 0 0-2 2v2h20V4ZM0 18a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2V8H0v10Zm5-8h10a1 1 0 0 1 0 2H5a1 1 0 0 1 0-2Z" />
                                </svg>
                            </div>
                            <input datepicker type="text" name="date" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full ps-10 p-2.5 " placeholder="Select date">
                        </div>
                        <div class="mt-4 ml-2">
                            <label for="">Select Time</label>
                            <select id="countries" name="time" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-[15vh] p-2.5 ">
                                <option value="10:30 am">10:30 am</option>
                                <option value="11:00 am">11:00 am</option>
                                <option value="11:30 am">11:30 am</option>
                                <option value="12:00 pm">12:00 pm</option>
                                <option value="12:30 pm">12:30 pm</option>
                                <option value="1:00 pm">1:00 pm</option>
                                <option value="1:30 pm">1:30 pm</option>
                                <option value="2:00 pm">2:00 pm</option>
                                <option value="2:30 pm">2:30 pm</option>
                                <option value="3:30 pm">3:30 pm</option>
                                <option value="4:30 pm">4:30 pm</option>
                                <option value="5:00 pm">5:00 pm</option>
                                <option value="5:30 pm">5:30 pm</option>
                                <option value="6:00 pm">6:00 pm</option>
                                <option value="6:30 pm">6:30 pm</option>
                                <option value="7:00 pm">7:00 pm</option>
                                <option value="7:30 pm">7:30 pm</option>
                                <option value="8:00 pm">8:00 pm</option>
                                <option value="8:30 pm">8:30 pm</option>
                                <option value="9:00 pm">9:00 pm</option>
                                <option value="9:30 pm">9:30 pm</option>
                            </select>
                        </div>
                    </div>
                    <button type="submit" class="bg-gray-800 text-white rounded-full text-sm px-4 p-2 hover:bg-gray-900 mt-4 flex justify-end">Find a table</button>
                </div>
                </form>
            </div>
        </div>

    </div>
</div>
<div class="mt-[27vh]">
@include('layouts.bookingPage.homeFooter')
</div>

@endsection