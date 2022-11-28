@extends('layouts.app')
@section('title', 'Events')
@section('content')
    <main class="h-full overflow-y-auto">
        <div class="container px-6 mx-auto grid">
            <div class="flex items-center justify-between">
                <h2
                    class="my-6 text-2xl font-semibold text-gray-700 dark:text-gray-200"
                >
                    Events List
                </h2>
                <x-link href="{{ route('events.create') }}">
                    Add Event
                </x-link>
            </div>


            <!-- New Table -->
            <div class="w-full overflow-hidden rounded-lg shadow-xs">
                <div class="w-full overflow-x-auto">
                    @if(session()->has('flash'))
                        <x-alert>{{ session('flash')['message'] }}</x-alert>
                    @endif
                    <table class="w-full whitespace-no-wrap">
                        <thead>
                        <tr
                            class="text-xs font-semibold tracking-wide text-left text-gray-500 uppercase border-b dark:border-gray-700 bg-gray-50 dark:text-gray-400 dark:bg-gray-800"
                        >
                            <th class="px-4 py-3 w-12">Index</th>
                            <th class="px-4 py-3">Image</th>
                            <th class="px-4 py-3">Title</th>
                            <th></th>
                        </tr>
                        </thead>
                        <tbody
                            class="bg-white divide-y dark:divide-gray-700 dark:bg-gray-800"
                        >
                        @forelse($events as $event)
                            <tr class="text-gray-700 dark:text-gray-400">
                                <td class="px-4 py-3 text-sm">
                                    {{ $loop->index+1 }}
                                </td>
                                <td class="px-4 py-3 h-10 ">
                                    <div class="flex items-center text-sm">
                                        <div>
                                            <p>Image</p>
{{--                                            <img class="rounded-md"--}}
{{--                                                 style="width: 5rem; height: 5rem;"--}}
{{--                                                 src="{{ asset('storage/images/' . $occasion->image) }}"--}}
{{--                                                 alt="">--}}
                                        </div>
                                    </div>
                                </td>
                                <td class="px-4 py-3">
                                    <div class="flex items-center text-sm">
                                        <div>
                                            <p>{{ $event->title }}</p>
                                        </div>
                                    </div>
                                </td>
                                <td class="px-4 py-3 w-12">
                                    <div class="flex justify-end space-x-4 text-sm">
                                        <a href="{{ route('events.show', $event) }}" class="text-blue-500 hover:underline hover:bg-gray-100 rounded-xl p-3">bookings</a>
                                        <a href="{{ route('events.edit', $event) }}"
                                           class="flex items-center justify-between px-2 py-2 text-sm font-medium leading-5 text-purple-600 rounded-lg dark:text-gray-400 focus:outline-none focus:shadow-outline-gray"
                                           aria-label="Edit"
                                        >
                                            <svg
                                                class="w-5 h-5"
                                                aria-hidden="true"
                                                fill="currentColor"
                                                viewBox="0 0 20 20">
                                                <path
                                                    d="M13.586 3.586a2 2 0 112.828 2.828l-.793.793-2.828-2.828.793-.793zM11.379 5.793L3 14.172V17h2.828l8.38-8.379-2.83-2.828z"
                                                ></path>
                                            </svg>
                                        </a>


                                        <a href="javascript:void(0);"
                                           onclick="if(window.confirm('Are you sure you want to delete this question?')){ document.getElementById('delete-{{ $event->id }}').submit();  }"
                                           class="flex items-center justify-between px-2 py-2 text-sm font-medium leading-5 text-purple-600 rounded-lg dark:text-gray-400 focus:outline-none focus:shadow-outline-gray"
                                           aria-label="Delete"
                                        >
                                            <svg
                                                class="w-5 h-5"
                                                aria-hidden="true"
                                                fill="currentColor"
                                                viewBox="0 0 20 20"
                                            >
                                                <path
                                                    fill-rule="evenodd"
                                                    d="M9 2a1 1 0 00-.894.553L7.382 4H4a1 1 0 000 2v10a2 2 0 002 2h8a2 2 0 002-2V6a1 1 0 100-2h-3.382l-.724-1.447A1 1 0 0011 2H9zM7 8a1 1 0 012 0v6a1 1 0 11-2 0V8zm5-1a1 1 0 00-1 1v6a1 1 0 102 0V8a1 1 0 00-1-1z"
                                                    clip-rule="evenodd"
                                                ></path>
                                            </svg>
                                        </a>

                                        <form method="post" id="delete-{{ $event->id }}"
                                              action="{{ route('events.destroy', $event) }}">
                                            @csrf
                                            @method('delete')
                                        </form>

                                    </div>
                                </td>
                            </tr>
                        @empty
                            <tr class="text-gray-700 dark:text-gray-400 bg-orange-100">
                                <td colspan="4" class="px-4 py-3">
                                    <div class="flex justify-center text-sm">
                                        <p class="font-semibold">No Events Available.</p>
                                    </div>
                                </td>
                            </tr>
                        @endforelse
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </main>
@endsection
