@extends('layouts.diningPage.diningPageLayout')

@section('content')
<div class="">
    <div class="flex justify-center">
        <div class="bg-white rounded-xl shadow-lg mt-10">
            <div class="p-4 pb-10">
                <form action="{{ url('confirm-reservation') }}" method="POST">
                    @csrf
                    <div class="mt-10 mx-20">
                        <h1 class="font-bold text-2xl mb-4 ">Reservation at {{$diningFacility}}</h1>
                        <input type="hidden" value="{{$diningFacility}}" name="dining_facility">
                        <div class="flex justify-between">
                            <div class="block">
                                <div class="relative z-0 w-full mb-5 group mt-6">
                                    <input type="text" name="first_name" id="floating_first_name" class="block py-2.5 px-0 w-[30vh] text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none  dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer" placeholder="" required />
                                    <label for="floating_first_name" class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:start-0 rtl:peer-focus:translate-x-1/4 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">First name</label>
                                </div>
                                <div class="relative z-0 w-full mb-5 group mt-6">
                                    <input type="text" name="last_name" id="floating_last_name" class="block py-2.5 px-0 w-[30vh] text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none  dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer" placeholder="" required />
                                    <label for="floating_last_name" class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:start-0 rtl:peer-focus:translate-x-1/4 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Last name</label>
                                </div>
                                <div class="relative z-0 w-full mb-5 group mt-6">
                                    <input type="number" name="phone_number" id="p_no" class="block py-2.5 px-0 w-[30vh] text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none  dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer" placeholder="" required />
                                    <label for="p_no" class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:start-0 rtl:peer-focus:translate-x-1/4 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Phone Number</label>
                                </div>
                                <div class="relative z-0 w-full mb-5 group mt-6">
                                    <input type="email" name="email" id="email" class="block py-2.5 px-0 w-[30vh] text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none  dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer" placeholder="" required />
                                    <label for="email" class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:start-0 rtl:peer-focus:translate-x-1/4 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Email</label>
                                </div>
                                <div class="mb-5 mt-6">
                                    <label for="">Select an Occasion (Optional)</label>
                                    <select id="countries" name="occasional" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-[15vh] p-2.5 ">
                                        <option value="None">None</option>
                                        <option value="Birthday">Birthday</option>
                                        <option value="Anniversary">Anniversary</option>
                                        <option value="Date">Date</option>
                                        <option value="Special Occasion">Special Occasion</option>
                                        <option value="Business Meal">Business Meal</option>
                                    </select>
                                </div>
                                <div class="relative z-0 w-full mb-5 group mt-6">
                                    <input type="text" name="special_request" id="requests" class="block py-2.5 px-0 w-[30vh] text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none  dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer" placeholder="" required />
                                    <label for="requests" class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:start-0 rtl:peer-focus:translate-x-1/4 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Add Special Request</label>
                                </div>
                            </div>
                            <div class="ml-10 mt-6 w-[25vh]">
                                <h1 class="font-bold text-xl ">{{$diningFacility}}</h1>
                                <p class="text-sm mt-4"><i class="fa-regular fa-calendar"></i> {{$date}}</p>
                                <input type="hidden" value="{{$date}}" name="date">
                                <p class="text-sm mt-2"><i class="fa-solid fa-clock"></i> {{$time}}</p>
                                <input type="hidden" value="{{$time}}" name="time">
                                <p class="text-sm mt-2"><i class="fa-regular fa-user"></i> {{$no_people}}</p>
                                <input type="hidden" value="{{$no_people}}" name="no_people">
                                <hr class="mt-6">
                                <h1 class=" font-bold mt-4">What to know before you go</h1>
                                <p class="mt-4 font-bold text-sm">Important dining information</p>
                                <p class="text-sm">We have a 15 minute grace period. Please
                                    call us if you are running later than 15
                                    minutes after your reservation time.</p>
                            </div>
                        </div>
                        <button type="submit" class="bg-gray-800 text-white rounded-full text-sm px-4 p-2 hover:bg-gray-900 mt-4 flex justify-end">Confirm Reservation</button>
                        <p class="flex justify-center w-[60vh] mt-6 text-gray-500 text-sm">By selecting “Confirm reservation” you are agreeing to the terms and conditions of the OpenTable User Agreement and Privacy Policy. *Message & data rates may apply. You can opt out of receiving text messages at any time in your account setting or by replying STOP.</p>
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