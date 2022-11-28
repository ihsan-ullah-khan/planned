@extends('layouts.user-home')
@section('title', 'Booking')
@section('content')
    <div class="container bg-gray-100 rounded-xl px-4 py-4 my-4 mt-24">
        <h1 class="font-bold text-3xl lg:text-4xl mb-10">
            Bookings
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
                        <th class="px-4 py-3">Index</th>
                        <th class="px-4 py-3">Event Title</th>
                        <th class="px-4 py-3">Start Time</th>
                        <th class="px-4 py-3">End Time</th>
                        <th class="px-4 py-3">Price</th>
                        <th class="px-4 py-3">Payment Status</th>
                        <th class="px-4 py-3">Booking Status</th>
                        <th class="px-4 py-3">Booking</th>
                        <th class="px-4 py-3">Actions</th>
                    </tr>
                    </thead>
                    <tbody
                        class="bg-white divide-y dark:divide-gray-700 dark:bg-gray-800"
                    >
                    @forelse($bookings as $booking)
                        <tr class="text-gray-700 dark:text-gray-400">
                            <td class="px-4 py-3">
                                <div class="flex items-center text-sm">
                                    <div>
                                        <p class="font-semibold">{{ $loop->index+1 }}</p>
                                    </div>
                                </div>
                            </td>
                            <td class="px-4 py-3">
                                <div class="flex items-center text-sm">
                                    <div>
                                        <p>{{ $booking->event->title }}</p>
                                    </div>
                                </div>
                            </td>
                            <td class="px-4 py-3">
                                <div class="flex items-center text-sm">
                                    <div>
                                        <p>{{ $booking->event->start_time }}</p>
                                    </div>
                                </div>
                            </td>
                            <td class="px-4 py-3">
                                <div class="flex items-center text-sm">
                                    <div>
                                        <p>{{ $booking->event->end_time }}</p>
                                    </div>
                                </div>
                            </td>
                            <td class="px-4 py-3">
                                <div class="flex items-center text-sm">
                                    <div>
                                        <p>${{ $booking->event->price }}</p>
                                    </div>
                                </div>
                            </td>
                            <td class="px-4 py-3">
                                <div class="flex items-center text-sm">
                                    <div>
                                        @if($booking->payment_status == 'N')
                                        <p>Not Verified</p>
                                        @else
                                            <p>Verified</p>
                                        @endif
                                    </div>
                                </div>
                            </td>
                            <td class="px-4 py-3">
                                <div class="flex items-center text-sm">
                                    <div>
                                        @if($booking->booking_status == 'N')
                                            <p>Not Confirmed</p>
                                        @else
                                            <p>Confirmed</p>
                                        @endif
                                    </div>
                                </div>
                            </td>
                            <td class="px-4 py-3">
                                <div class="flex items-center text-sm">
                                    <div>
                                        @if($booking->reschedule == 'P')
                                            <p>Placed</p>
                                        @else
                                            <p>Rescheduled</p>
                                        @endif
                                    </div>
                                </div>
                            </td>
                            @if($booking->payment_status !== 'N' AND $booking->booking_status !== 'N')
                            <td class="px-4 py-3">
                                <div class="flex items-center text-sm">
                                    <div>
                                        <form action="{{ route('bookings.update', $booking)  }}" method="POST">
                                            @method('patch')
                                            @csrf
                                            <input type="hidden" value="R" name="reschedule">
                                            <button
                                                type="submit" class="inline-block px-4 py-2.5 bg-gray-800 text-white font-medium text-sm leading-tight italic rounded-full shadow-md hover:bg-gray-900 hover:shadow-lg focus:bg-gray-900 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-gray-900 active:shadow-lg transition duration-150 ease-in-out">
                                                Reschedule
                                            </button>
                                        </form>
                                    </div>
                                </div>
                            </td>
                            @elseif($booking->reschedule == 'R')
                                <td class="px-4 py-3">
                                    <div class="flex items-center text-sm">
                                        <div>
                                            <p></p>
                                        </div>
                                    </div>
                                </td>
                            @else
                                <td class="px-4 py-3">
                                    <div class="flex items-center text-sm">
                                        <div>
                                            <p class="text-xs">Please confirm your payment or wait for the confirmation</p>
                                        </div>
                                    </div>
                                </td>
                            @endif


                        </tr>
                    @empty
                        <tr class="text-gray-700 dark:text-gray-400 bg-orange-100 bg-red-200 rounded-xl">
                            <td colspan="8" class="px-4 py-3">
                                <div class="flex justify-center text-sm">
                                    <p class="font-semibold">NO Bookings Available</p>
                                </div>
                            </td>
                        </tr>
                    @endforelse
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <x-includes/>
    <x-terms/>

@endsection
