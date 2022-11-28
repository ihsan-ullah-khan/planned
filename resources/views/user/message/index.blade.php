@extends('layouts.user-home')
@section('title', 'Messages')
@section('content')
    <article class="container mx-auto mt-8 lg:grid space-y-6 lg:mt-20 lg:grid-cols-12 gap-x-10 py-4">
        <div class="col-span-6 bg-gray-50 rounded-xl px-4 py-4">
            <h1 class="font-bold text-3xl lg:text-4xl mb-10">
                Send Message
            </h1>
            <form method="POST" action="{{ route('messages.store') }}">
                @csrf
                <input type="hidden" name="user_id" value="{{ \Illuminate\Support\Facades\Auth::user()->id }}">
                <div>
                    <label for="event_date" class="bg-gray-100 mt-2 py-2 px-2 rounded-xl w-full">Event Date</label>
                    <input
                        name="event_date"
                        type="date"
                        placeholder="Enter your Name"
                        autofocus
                        class="w-full border border-gray-300 mt-2 focus:bg-gray-200 bg-gray-100 rounded-xl px-2 py-2 @error('event_date') focus:border-red-400 focus:shadow-outline-red focus:ring-red-200 @else focus:border-purple-400 focus:shadow-outline-purple focus:border-indigo-300 focus:ring-indigo-200 @enderror"
                    >
                    @error('event_date')
                    <span class="inline-block mt-1 w-full text-sm text-red-600">{{ $message }}</span>
                    @enderror
                </div>
                <div class="flex items-center my-4 justify-between">
                    <div class="mr-2">
                        <label for="start_time" class="bg-gray-100 mt-2 py-2 px-2 rounded-xl w-full">Start Time</label>
                        <input
                            name="start_time"
                            type="time"
                            autofocus
                            class="w-full border border-gray-300 mt-2 focus:bg-gray-200 bg-gray-100 rounded-xl px-2 py-2 @error('start_time') focus:border-red-400 focus:shadow-outline-red focus:ring-red-200 @else focus:border-purple-400 focus:shadow-outline-purple focus:border-indigo-300 focus:ring-indigo-200 @enderror"
                        >
                        @error('start_time')
                        <span class="inline-block mt-1 w-full text-sm text-red-600">{{ $message }}</span>
                        @enderror
                    </div>

                    <div>
                        <label for="end_time" class="bg-gray-100 mt-2 py-2 px-2 rounded-xl w-full">End Time</label>
                        <input
                            name="end_time"
                            type="time"
                            placeholder="+92441234567"
                            autofocus
                            class="w-full border border-gray-300 mt-2 focus:bg-gray-200 bg-gray-100 rounded-xl px-2 py-2 @error('end_time') focus:border-red-400 focus:shadow-outline-red focus:ring-red-200 @else focus:border-purple-400 focus:shadow-outline-purple focus:border-indigo-300 focus:ring-indigo-200 @enderror"
                        >
                        @error('end_time')
                        <span class="inline-block mt-1 w-full text-sm text-red-600">{{ $message }}</span>
                        @enderror
                    </div>
                </div>
                <div class="flex items-center my-4 justify-between">
                    <div class="mr-2">
                        <label for="guests" class="bg-gray-100 py-2 px-2 rounded-xl w-full">Guests</label>
                        <input
                            name="guests"
                            type="number"
                            placeholder="0"
                            autofocus
                            class="w-full border border-gray-300  focus:bg-gray-200 bg-gray-100 rounded-xl px-2 py-2 @error('guests') focus:border-red-400 focus:shadow-outline-red focus:ring-red-200 @else focus:border-purple-400 focus:shadow-outline-purple focus:border-indigo-300 focus:ring-indigo-200 @enderror"
                        >
                        @error('guests')
                        <span class="inline-block mt-1 w-full text-sm text-red-600">{{ $message }}</span>
                        @enderror
                    </div>
                    <div>
                        <label for="event_type" class="bg-gray-100 py-2 px-2 rounded-xl w-full">Event Type</label>
                        <input
                            name="event_type"
                            type="text"
                            placeholder="Enter Event type"
                            autofocus
                            class="w-full border border-gray-300  focus:bg-gray-200 bg-gray-100 rounded-xl px-2 py-2 @error('event_type') focus:border-red-400 focus:shadow-outline-red focus:ring-red-200 @else focus:border-purple-400 focus:shadow-outline-purple focus:border-indigo-300 focus:ring-indigo-200 @enderror"
                        >
                        @error('event_type')
                        <span class="inline-block mt-1 w-full text-sm text-red-600">{{ $message }}</span>
                        @enderror
                    </div>
                </div>
                <div class="px-2 py-2">
                    <label for="message" class="bg-gray-100 mt-2 py-2 px-2 rounded-xl w-full">
                        <span class="text-black">Message</span>
                        <textarea
                            id="message"
                            name="message"
                            type="text"
                            placeholder="Enter your Message"
                            autofocus
                            class="w-full border border-gray-300 h-40 mt-2 focus:bg-gray-200 bg-gray-100 rounded-xl px-2 py-2 @error('message') focus:border-red-400 focus:shadow-outline-red focus:ring-red-200 @else focus:border-purple-400 focus:shadow-outline-purple focus:border-indigo-300 focus:ring-indigo-200 @enderror"
                        ></textarea>
                    </label>
                    @error('message')
                    <span class="inline-block mt-1 w-full text-sm text-red-600">{{ $message }}</span>
                    @enderror
                </div>
                <div class="flex items-center justify-end mx-2 px-2 py-2">
                    <button type="submit"
                            class="px-4 py-3 bg-gray-800 w-full text-white font-medium text-sm leading-tight rounded-full shadow-md hover:bg-gray-900 hover:shadow-lg focus:bg-gray-900 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-gray-900 active:shadow-lg transition duration-150 ease-in-out">
                        Send Message
                    </button>
                </div>
            </form>
        </div>
        <div class="col-span-6 bg-gray-50 rounded-xl px-4 py-4">
            <h1 class="font-bold text-3xl lg:text-4xl mb-10">
                Messages
            </h1>
                <div class="col-span-9">
                    <div class="w-full overflow-x-auto">
                        @if(session()->has('flash'))
                            <x-alert>{{ session('flash')['message'] }}</x-alert>
                        @endif
                        <table class="w-full whitespace-no-wrap">
                            <thead>
                            <tr
                                class="text-xs font-semibold tracking-wide text-left text-gray-500 uppercase border-b dark:border-gray-700 bg-gray-50 dark:text-gray-400 dark:bg-gray-800"
                            >
                                <th class="px-4 py-3">Event date</th>
                                <th class="px-4 py-3">Start time</th>
                                <th class="px-4 py-3">End time</th>
                                <th class="px-4 py-3">Message</th>
                            </tr>
                            </thead>
                            <tbody
                                class="bg-white divide-y dark:divide-gray-700 dark:bg-gray-800"
                            >
                            @forelse($messages as $message)
                                <tr class="text-gray-700 dark:text-gray-400">
                                    <td class="px-4 py-3">
                                        <div class="flex items-center text-sm">
                                            <div>
                                                <p class="font-semibold">{{ $message->event_date }}</p>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="px-4 py-3">
                                        <div class="flex items-center text-sm">
                                            <div>
                                                <p class="font-semibold">{{ $message->start_time }}</p>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="px-4 py-3">
                                        <div class="flex items-center text-sm">
                                            <div>
                                                <p class="font-semibold">{{ $message->end_time }}</p>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="px-4 py-3">
                                        <div class="flex items-center text-sm">
                                            <div>
                                                <p class="font-semibold">{{ $message->message }}</p>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                            @empty
                                <tr class="text-gray-700 dark:text-gray-400 bg-orange-100 bg-red-200 rounded-xl">
                                    <td colspan="4" class="px-4 py-3">
                                        <div class="flex justify-center text-sm">
                                            <p class="font-semibold">NO Messages Available</p>
                                        </div>
                                    </td>
                                </tr>
                            @endforelse
                            </tbody>
                        </table>
                    </div>
                </div>
        </div>
    </article>
@endsection
