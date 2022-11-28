<div class="container p-4">
    <div class="flex items-centerjustify justify-between bg-gray-100 rounded-md p-6 mx-3 px-3">
        <div>
            <p class="text-gray-700 font-semibold ml-6 px-2">If you want to create an event kindly send a message</p>
        </div>
        <div class="mr-6 px-2">
            <a href="{{ route('messages.index') }}">
            <button type="submit"
                    class="px-4 py-2.5 bg-gray-800 text-white font-medium text-xs leading-tight rounded-full shadow-md hover:bg-gray-900 hover:shadow-lg focus:bg-gray-900 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-gray-900 active:shadow-lg transition duration-150 ease-in-out">
                Send Message
            </button>
            </a>
        </div>
    </div>
</div>
