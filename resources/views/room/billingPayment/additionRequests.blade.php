<div class="bg-white mt-10 shadow-lg rounded-xl">
    <div class="p-4 pb-10">
        <div class="mt-10 mx-20">
            <h1 class="text-xl font-bold">Room Requests and Accessibilities</h1>
            <p class="text-sm mt-4"><i class="fa-solid fa-check"></i> Guaranteed unless otherwise noted</p>

            <div>
                <h1 class="mt-6 font-bold">Room Features</h1>
                <p class="text-sm text-gray-500">Request Only</p>

                <div class="flex items-center mb-4 mt-4">
                    <input id="feather_pillows" type="checkbox" value="Extra Feather Pillows" name="requests[]" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 ">
                    <label for="feather_pillows" class="ms-2 text-sm font-medium text-gray-900 ">Extra Feather Pillows</label>
                </div>
                <div class="flex items-center mb-4 mt-4">
                    <input id="foam_pillows" type="checkbox" value="Extra Foam Pillows" name="requests[]" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 ">
                    <label for="foam_pillows" class="ms-2 text-sm font-medium text-gray-900 ">Extra Foam Pillows</label>
                </div>
                <div class="flex items-center mb-4 mt-4">
                    <input id="foam_pillows_2" type="checkbox" value="Foam Pillows" name="requests[]" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 ">
                    <label for="foam_pillows_2" class="ms-2 text-sm font-medium text-gray-900 ">Foam Pillows</label>
                </div>
                <div class="flex items-center mb-4 mt-4">
                    <input id="feather_free" type="checkbox" value="Feather Free Room" name="requests[]" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 ">
                    <label for="feather_free" class="ms-2 text-sm font-medium text-gray-900 ">Feather Free Room</label>
                </div>

                <h1 class="mt-6 font-bold">Bathroom Features</h1>
                <div class="flex items-center mb-4 mt-4">
                    <input id="extra_towel" type="checkbox" value="Extra Towels" name="requests[]" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 ">
                    <label for="extra_towel" class="ms-2 text-sm font-medium text-gray-900 ">Extra Towels</label>
                </div>
                <hr>
                <div class="mt-4">
                    <label for="message" class="block mb-2 text-sm font-medium text-gray-900">Any special requests or needs?</label>
                    <textarea id="message" name="special_request[]" rows="4" class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 " placeholder="Write your requests here..."></textarea>
                </div>
            </div>
        </div>
    </div>
</div>