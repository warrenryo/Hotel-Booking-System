<x-app-layout>
    <div class="py-32">
        <div class="relative h-20">
            <div class="absolute bottom-[8.2vh] left-[29.5vh]">
                <p class="text-4xl font-semibold text-gray-700">Edit Accomodation Type</p>
            </div>
        </div>
        <div class="mx-[70vh] rounded-md dark:bg-gray-900 p-10">
            <form class="max-w-sm mx-auto" action="{{ url('admin/update-accomodation/'.$accomodation->id) }}" method="POST">
                @csrf
                @method('PUT')
                <div class="mb-5">
                    <label for="text" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Accomodation Type</label>
                    <input type="text" id="text" value="{{ $accomodation->accomodation_type }}" name="accomodation_type" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Enter Accomodation Type" required>
                </div>
                <!-- Modal footer -->
                <div class="flex items-center p-4 md:p-5  border-gray-200 rounded-b dark:border-gray-600">
                    <button type="submit" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Submit</button>
                    <button data-modal-hide="default-modal" type="button" class="ms-3 text-gray-500 bg-white hover:bg-gray-100 focus:ring-4 focus:outline-none focus:ring-blue-300 rounded-lg border border-gray-200 text-sm font-medium px-5 py-2.5 hover:text-gray-900 focus:z-10 dark:bg-gray-700 dark:text-gray-300 dark:border-gray-500 dark:hover:text-white dark:hover:bg-gray-600 dark:focus:ring-gray-600">Cancel</button>
                </div>
            </form>
        </div>

</x-app-layout>