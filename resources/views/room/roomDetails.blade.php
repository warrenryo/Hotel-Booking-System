@extends('layouts.roomSelectionPage.roomSelectionIndex')

@section('content')


<div class="bg-white shadow-md w-full py-10">
    <div class="pb-10">
        <a href="{{ url('room') }}" class="flex items-center mx-[20vh] text-lg font-bold">
            <i class="fa-solid fa-angle-left mr-4"></i>
            Go Back
        </a>
    </div>

    <div id="default-carousel" class="relative mx-auto w-[120vh]" data-carousel="slide">
        <!-- Carousel wrapper -->

        <div class="relative h-[65vh] overflow-hidden rounded-lg ">
            <!-- Item 1 -->
            @foreach($roomDetails->roomImages as $image)
            <div class="hidden duration-700 ease-in-out" data-carousel-item>
                <img src="{{asset($image->room_images) }}" class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
            </div>
            @endforeach
        </div>

        <!-- Slider indicators -->
        <div class="absolute z-30 flex -translate-x-1/2 bottom-5 left-1/2 space-x-3 rtl:space-x-reverse">
            <button type="button" class="w-3 h-3 rounded-full" aria-current="true" aria-label="Slide 1" data-carousel-slide-to="0"></button>
            <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 2" data-carousel-slide-to="1"></button>
            <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 3" data-carousel-slide-to="2"></button>
            <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 4" data-carousel-slide-to="3"></button>
            <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 5" data-carousel-slide-to="4"></button>
        </div>
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


    <div class="mx-[20vh] grid grid-cols-3 gap-10 pb-10 mt-20">
        <div class=" p-4 rounded-lg w-[30vh]">
            <h1 class="text-lg font-bold flex items-center"><i class="fa-solid fa-bed mr-3"></i>Bed and Beddings</h1>
            <p class="text-sm whitespace-pre-line mt-4">{{$roomDetails->bedding}}</p>
        </div>
        <div class=" p-4 rounded-lg w-[30vh]">
            <h1 class="text-lg font-bold flex items-center"><i class="fa-solid fa-door-open mr-2"></i>Room Features</h1>
            <p class="text-sm whitespace-pre-line mt-4">{{$roomDetails->room_feature}}</p>
        </div>
        <div class=" p-4 rounded-lg w-[30vh]">
            <h1 class="text-lg font-bold flex items-center"><i class="fa-solid fa-bath mr-2"></i>Bath and Bathroom Features</h1>
            <p class="text-sm whitespace-pre-line mt-4">{{$roomDetails->bathroom_features}}</p>
        </div>
    </div>
    <hr class="mx-[20vh]">
    <div class="mx-[20vh] grid grid-cols-3 gap-10 mt-10 pb-20">
        <div class=" p-4 rounded-lg w-[30vh]">
            <h1 class="text-lg font-bold flex items-center"><i class="fa-solid fa-couch mr-1"></i>Furniture and Furnishings</h1>
            <p class="text-sm whitespace-pre-line mt-4">{{$roomDetails->furnitures}}</p>
        </div>
        <div class=" p-4 rounded-lg w-[30vh]">
            <h1 class="text-lg font-bold flex items-center"><i class="fa-solid fa-kitchen-set mr-2"></i>Kitchen Features</h1>
            <p class="text-sm whitespace-pre-line mt-4">{{$roomDetails->kitchen_features}}</p>
        </div>
        <div class=" p-4 rounded-lg w-[30vh]">
            <h1 class="text-lg font-bold flex items-center"><i class="fa-solid fa-wifi mr-3"></i>Internet and Phones</h1>
            <p class="text-sm whitespace-pre-line mt-4">{{$roomDetails->internet_phones}}</p>
        </div>
    </div>
    <hr class="mx-[20vh]">
    <div class="mx-[20vh] grid grid-cols-3 gap-10 mt-10 pb-20">
        <div class=" p-4 rounded-lg w-[30vh]">
            <h1 class="text-lg font-bold flex items-center"><i class="fa-solid fa-tv mr-2"></i>Entertainment</h1>
            <p class="text-sm whitespace-pre-line mt-4">{{$roomDetails->entertainment}}</p>
        </div>
    </div>
</div>
@include('layouts.bookingPage.homeFooter')
@endsection