<x-app-layout>
    <div class="py-32">
        <div class="relative h-20">
            <div class="absolute bottom-[8.2vh] xl:left-[48vh] 2xl:left-[29.5vh]">
                <p class="text-4xl font-semibold text-gray-700">Dining Reservation Lists</p>
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
                                    ID
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    Dining Facility
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    Guest Name
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    Phone Number
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    Email
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    Occasional
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    Special Request
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    Date
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    Time
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    Number of People
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    Date Created
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($reservation as $reserve)
                            <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                                <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                    {{$reserve->id}}
                                </th>
                                <td class="px-6 py-4">
                                    {{$reserve->dining_facility}}
                                </td>
                                <td class="px-6 py-4">
                                    {{$reserve->first_name}} {{$reserve->last_name}}
                                </td>
                                <td class="px-6 py-4">
                                    {{$reserve->phone_number}}
                                </td>
                                <td class="px-6 py-4">
                                    {{$reserve->email}}
                                </td>
                                <td class="px-6 py-4">
                                    {{$reserve->occasional}}
                                </td>
                                <td class="px-6 py-4">
                                    {{$reserve->special_request}}
                                </td>
                                <td class="px-6 py-4">
                                    {{\Carbon\Carbon::parse($reserve->date)->format('d-m-Y')}}
                                </td>
                                <td class="px-6 py-4">
                                    {{$reserve->time}}
                                </td>
                                <td class="px-6 py-4">
                                    {{$reserve->no_people}}
                                </td>
                                <td class="px-6 py-4">
                                    {{$reserve->created_at}}
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