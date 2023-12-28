<x-app-layout>
    <div class="py-32">
        <div class="relative h-20">
            <div class="absolute bottom-[8.2vh] xl:left-[48vh] 2xl:left-[29.5vh]">
                <p class="text-4xl font-semibold text-gray-700">Booked Room Lists</p>
            </div>
        </div>

        <div class="w-[86.5%] sm:ml-64 sm:px-6 lg:px-8 xl:w-[79%] 2xl:w-[86.5%]">
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
                </div>
                <div class="relative overflow-x-auto">
                    <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
                        <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                            <tr>
                                <th scope="col" class="px-6 py-3">
                                    Book Request Code
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    Bed Type
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    Accomodation Type
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    Amount
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    Guest Name
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    Guest Email
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    Member Number
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    Number of Adult
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    Number of Children
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    Rooms
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    Amount
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    Requests
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    Additional Requests
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    Date of Check in
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    Data of Check out
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    Date Created
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($bookedRooms as $room)
                            <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                                <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                    {{$room->book_request_code}}
                                </th>
                                <td class="px-6 py-4">
                                    {{$room->bed_type}}
                                </td>
                                <td class="px-6 py-4">
                                    {{$room->accomodation_type}}
                                </td>
                                <td class="px-6 py-4">
                                    {{number_format($room->amount)}}
                                </td>
                                <td class="px-6 py-4">
                                    {{$room->first_name}} {{$room->last_name}}
                                </td>
                                <td class="px-6 py-4">
                                    {{$room->email}}
                                </td>
                                <td class="px-6 py-4">
                                    @if($room->member_number == null)
                                    None
                                    @endif
                                </td>
                                <td class="px-6 py-4">
                                    {{$room->adult_no}}
                                </td>
                                <td class="px-6 py-4">
                                    {{$room->children_no}}
                                </td>
                                <td class="px-6 py-4">
                                    {{$room->rooms}}
                                </td>
                                <td class="px-6 py-4">
                                    {{number_format($room->amount)}}
                                </td>
                                <td class="px-6 py-4">
                                    <button data-popover-target="popover-right-{{ $room->id }}" data-popover-placement="right" type="button" class="text-white mb-3 me-4 bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Show Requests</button>
                                    <div data-popover id="popover-right-{{ $room->id }}" role="tooltip" class="absolute z-50 invisible inline-block w-64 text-sm text-gray-500 transition-opacity duration-300 bg-white border border-gray-200 rounded-lg shadow-sm opacity-0 dark:text-gray-400 dark:border-gray-600 dark:bg-gray-800">
                                        <div class="px-3 py-2 bg-gray-100 border-b border-gray-200 rounded-t-lg dark:border-gray-600 dark:bg-gray-700">
                                            <h3 class="font-semibold text-gray-900 dark:text-white">Guest Requests</h3>
                                        </div>
                                        @foreach(json_decode($room->requests) as $request)
                                        <div class="px-3 py-2">
                                            <li>{{$request}}</li>
                                        </div>
                                        @endforeach
                                        <div data-popper-arrow></div>
                                    </div>
                                </td>
                                <td class="px-6 py-4">
                                    @if($room->special_requests == null)
                                        <p>No Special Requests Found</p>
                                    @else
                                    <button data-popover-target="popover-right2-{{ $room->id }}" data-popover-placement="right" type="button" class="text-white mb-3 me-4 bg-green-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Show Requests</button>
                                    <div data-popover id="popover-right2-{{ $room->id }}" role="tooltip" class="absolute z-10 invisible inline-block w-64 text-sm text-gray-500 transition-opacity duration-300 bg-white border border-gray-200 rounded-lg shadow-sm opacity-0 dark:text-gray-400 dark:border-gray-600 dark:bg-gray-800">
                                        <div class="px-3 py-2 bg-gray-100 border-b border-gray-200 rounded-t-lg dark:border-gray-600 dark:bg-gray-700">
                                            <h3 class="font-semibold text-gray-900 dark:text-white">Additional Requests</h3>
                                        </div>
                                        <div class="px-3 py-2">
                                            <p>{{$room->special_requests}}</p>
                                        </div>
                                        <div data-popper-arrow></div>
                                    </div>
                                    @endif
                                </td>
                                <td class="px-6 py-4">
                                    {{\Carbon\Carbon::parse($room->check_in)->format('d-m-Y')}}
                                </td>
                                <td class="px-6 py-4">
                                    {{\Carbon\Carbon::parse($room->check_out)->format('d-m-Y')}}
                                </td>
                                <td class="px-6 py-4">
                                    {{$room->created_at}}
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>