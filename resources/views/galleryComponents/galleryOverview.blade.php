@extends('layouts.gallery.galleryIndex')

@section('overview')


<div class="block w-[170vh] flex flex-col min-h-screen mx-auto">
<h1 class="text-t-subtitle font-bold mb-4 mt-4 flex justify-start">Hotel Rooms</h1>
    <div class="grid grid-cols-2 md:grid-cols-3 gap-4">
        <div>
            <img class="h-auto max-w-full " src="{{ asset('images/rooms/mnlsb-king-bathroom-8583-hor-clsc.webp') }}" alt="">
        </div>
        <div>
            <img class="h-auto max-w-full " src="{{ asset('images/rooms/mnlsb-king-executivesuite-8601-hor-clsc.webp') }}" alt="">
        </div>
        <div>
            <img class="h-auto max-w-full " src="{{ asset('images/rooms/mnlsb-king-suite-8604-hor-clsc.webp') }}" alt="">
        </div>
        <div>
            <img class="h-auto max-w-full " src="{{ asset('images/rooms/mnlsb-suite-bathroom-8587-hor-clsc.webp') }}" alt="">
        </div>
        <div>
            <img class="h-auto max-w-full " src="{{ asset('images/rooms/mnlsb-suite-bathroom-8593-hor-clsc.webp') }}" alt="">
        </div>
        <div>
            <img class="h-auto max-w-full " src="{{ asset('images/rooms/mnlsb-suite-bathroom-8600-hor-clsc.webp') }}" alt="">
        </div>
        
        <div>
            <img class="h-auto max-w-full " src="{{ asset('images/rooms/mnlsb-king-bathroom-8583-hor-clsc.webp') }}" alt="">
        </div>
        
        <div>
            <img class="h-auto max-w-full " src="{{ asset('images/rooms/halaman.webp') }}" alt="">
        </div>
        <div>
            <img class="h-auto max-w-full " src="{{ asset('images/rooms/hakdog.webp') }}" alt="">
        </div>
    </div>
</div>
<div class="block w-[170vh] flex flex-col min-h-screen mx-auto">
<h1 class="text-t-subtitle font-bold mb-4 mt-4 flex justify-start">Restaurant Dining</h1>
    <div class="grid grid-cols-2 md:grid-cols-3 gap-4">
        <div>
            <img class="h-auto max-w-full " src="{{ asset('images/dining/dingin1.webp') }}" alt="">
        </div>
        <div>
            <img class="h-auto max-w-full " src="{{ asset('images/dining/dining2.webp') }}" alt="">
        </div>
        <div>
            <img class="h-auto max-w-full " src="{{ asset('images/dining/dining3.webp') }}" alt="">
        </div>
        <div>
            <img class="h-auto max-w-full " src="{{ asset('images/dining/dining4.jpg') }}" alt="">
        </div>
        <div>
            <img class="h-auto max-w-full " src="{{ asset('images/dining/dining5.jpg') }}" alt="">
        </div>
        <div>
            <img class="h-auto max-w-full " src="{{ asset('images/dining/dining6.jpg') }}" alt="">
        </div>
        <div>
            <img class="h-auto max-w-full " src="{{ asset('images/dining/dining7.jpg') }}" alt="">
        </div>
        <div>
            <img class="h-auto max-w-full " src="{{ asset('images/dining/dining8.jpg') }}" alt="">
        </div>
    </div>
</div>



@endsection