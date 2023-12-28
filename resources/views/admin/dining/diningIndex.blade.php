<x-app-layout>
    @include('admin.dining.diningModal')
    <div class="py-32">
        <div class="relative h-20">
            <div class="absolute bottom-[8.2vh] xl:left-[48vh] 2xl:left-[29.5vh]">
                <p class="text-4xl font-semibold text-gray-700">Dining</p>
            </div>
        </div>
        <div class="sm:ml-64 sm:px-6 lg:px-8 xl:w-[79%] 2xl:w-[86.5%]">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="flex justify-between items-center pb-4 p-6 bg-white dark:bg-gray-900">
                    <div>
                        <label for="table-search" class="sr-only">Search</label>
                        <div class="relative">
                            <div class="absolute inset-y-0 rtl:inset-r-0 start-0 flex items-center ps-3 pointer-events-none">
                                <svg class="w-4 h-4 text-gray-500 dark:text-gray-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z" />
                                </svg>
                            </div>
                            <input type="text" id="table-search" class="block pt-2 ps-10 text-sm text-gray-900 border border-gray-300 rounded-lg w-80 bg-gray-50 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Search for items">
                        </div>
                    </div>
                    <div>
                        <button data-modal-target="default-modal" data-modal-toggle="default-modal" class="text-white bg-blue-700 py-3 rounded-md px-6 hover:bg-blue-800">Add Dining Room</button>
                    </div>
                </div>
                <div class="grid xl:grid-cols-3 2xl:grid-cols-4 gap-4 p-2">
                    @foreach($dining as $dine)
                    <div class="max-w-sm bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
                        <a href="#">
                            <img class="rounded-t-lg" src="{{asset($dine->diningImages[0]->dining_images)}}" alt="" />
                        </a>
                        <div class="p-5">
                            <a href="#">
                                <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">{{$dine->dining_facility}}</h5>
                            </a>
                            <div class="flex">
                            <p class="mb-3 font-normal text-gray-700 dark:text-gray-400"><i class="fa-regular fa-calendar"></i> {{$dine->date_available}}</p>
                            
                            <p class="mb-3 font-normal text-gray-700 dark:text-gray-400 ml-4"><i class="fa-solid fa-clock"></i> <span>{{\Carbon\Carbon::parse($dine->time_open)->format('h:i A')}}</span> to <span>{{\Carbon\Carbon::parse($dine->time_close)->format('h:i A')}}</span></p>
                            </div>
                           
                            <div class="mt-4">
                                <a href="" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">Edit</a>
                                <button class="focus:outline-none text-white bg-red-700 hover:bg-red-800 focus:ring-4 focus:ring-red-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:bg-red-600 dark:hover:bg-red-700 dark:focus:ring-red-900">Delete</button>
                            </div>

                        </div>
                    </div>
                   @endforeach
                </div>
            </div>
        </div>
    </div>
</x-app-layout>