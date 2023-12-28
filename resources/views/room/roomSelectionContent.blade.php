@extends('layouts.roomSelectionPage.roomSelectionIndex')

@section('content')
<div class=" min-h-screen items-center justify-center">
    <div class="overflow-hidden w-full h-[50vh]">
        <img src="{{ asset('images/rooms/mnlsb-king-suite-8604-hor-clsc.webp') }}"  class="object-cover w-full h-full">
    </div>
    <section class="px-40 bg-[#efeae4] py-10">
        <div class="mb-24 text-center">
            <h3 class="block antialiased font-sans font-semibold relative mb-5 mt-10 text-center text-2xl leading-tight tracking-normal text-black"> Feel Free to Choose what you like </h3>
            <h1 class="block antialiased font-sans relative my-5 text-center text-4xl font-bold leading-tight tracking-normal text-black md:text-5xl"> Select A Room </h1>
        </div>
    </section>
    @foreach($rooms as $rm)
    <div class="bg-white mx-[40vh] mt-10">
        <div class="flex p-4 px-4 ">
            <div class="flex bg-white shadow-lg rounded-lg w-full">
                <div id="default-carousel" class="relative w-[62vh]" data-carousel="slide">
                    <!-- Carousel wrapper -->

                    <div class="relative h-[31vh] overflow-hidden ">
                        <!-- Item 1 -->
                        @foreach($rm->roomImages as $image)
                        <div class="hidden duration-700 ease-in-out" data-carousel-item>
                            <img src="{{asset($image->room_images) }}" class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
                        </div>
                        @endforeach
                    </div>

                    <!-- Slider indicators -->

                    <!-- Slider controls -->
                    <button type="button" class="absolute top-0 start-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none" data-carousel-prev>
                        <span class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
                            <svg class="w-4 h-4 text-white dark:text-gray-800 rtl:rotate-180" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 1 1 5l4 4" />
                            </svg>
                            <span class="sr-only">Previous</span>
                        </span>
                    </button>
                    <button type="button" class="absolute top-0 end-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none" data-carousel-next>
                        <span class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
                            <svg class="w-4 h-4 text-white dark:text-gray-800 rtl:rotate-180" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 9 4-4-4-4" />
                            </svg>
                            <span class="sr-only">Next</span>
                        </span>
                    </button>
                </div>
                <div class="block xl:w-full 2xl:w-[50vh] px-4">
                    <div class="flex justify-between items-center">
                        <h1 class="block antialiased font-sans font-semibold relative py-4 text-xl leading-tight tracking-normal text-black">{{$rm->bed_type}}, {{$rm->accomodation_type}}</h1>
                        <a href="{{ url('room/room-details/room_id-'.$rm->id) }}" class="text-sm hover:underline text-gray-500">Room Details</a>
                    </div>
                    <hr>
                    @include('room.roomSelectionModal')
                    <div class="flex justify-between mx-2 py-6 items-center">
                        <p class="flex items-center ">Member Flexible Rate <i class="fa-solid fa-tag ml-2"></i></p>
                        <p><i class="fa-solid fa-peso-sign mr-2"></i>{{number_format($rm->final_discount)}}</p>
                        @if(auth()->check())
                        <a href="{{ url('book-now/room_id-'.$rm->id) }}" class="bg-gray-800 text-white rounded-full text-sm px-4 p-2 hover:bg-gray-900">Book Now</a>
                        @else
                        <button data-modal-target="crypto-modal" data-modal-toggle="crypto-modal" class="bg-gray-800 text-white rounded-full text-sm px-4 p-2 hover:bg-gray-900">Book Now</button>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
    @endforeach
    <br>
    <br>
    <br>
    @include('layouts.bookingPage.homeFooter')
</div>
@endsection