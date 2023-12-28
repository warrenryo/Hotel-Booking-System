<x-app-layout>
<div class="py-32">
@include('admin.reservationType.reservationModal')
    <div class="relative h-20">
        <div class="absolute bottom-[8.2vh] xl:left-[48vh] 2xl:left-[29.5vh]">
            <p class="text-4xl font-semibold text-gray-700">Accomodation Type</p>
        </div>
    </div>

    <div class=" sm:ml-64 sm:px-6 lg:px-8 xl:w-[80%] 2xl:w-[86.5%]">
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
                        <button data-modal-target="default-modal" data-modal-toggle="default-modal" class="text-white bg-blue-700 py-3 rounded-md px-6 hover:bg-blue-800">Add Accomodation</button>
                    </div>
         
                
                </div>
                <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
                    <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                        <tr>
                            <th scope="col" class="px-6 py-3">
                                Accomodation Types
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Action
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($accomodation as $acc)
                        <tr class="bg-white dark:bg-gray-800 hover:bg-gray-50 dark:hover:bg-gray-600">
                            <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                {{$acc->accomodation_type}}
                            </th>
                            <td class="px-6 py-4">
                                <a href="{{ url('admin/edit-accomodation/'.$acc->id) }}" class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Edit</a>
                                <button data-modal-target="popup-modal" data-modal-toggle="popup-modal" value="{{$acc->id}}" onclick="deleteAccomodation(this)" class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Delete</button>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
</div>
</x-app-layout>