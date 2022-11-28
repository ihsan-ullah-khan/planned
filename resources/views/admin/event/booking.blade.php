@extends('layouts.app')
@section('title', 'Events')
@section('content')
    <main class="h-full overflow-y-auto">
        <div class="container px-6 mx-auto grid">
            <div class="flex items-center justify-between">
                <h2
                    class="my-6 text-2xl font-semibold text-gray-700 dark:text-gray-200"
                >
                    Booking List
                </h2>

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
                                <th class="px-4 py-3">Index</th>
                                <th class="px-4 py-3">Event Title</th>
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
                                    @if($booking->payment_status == 'N' AND $booking->booking_status == 'N')
                                        <td class="px-4 py-3">
                                            <div class="flex items-center text-sm">
                                                <div>
                                                    <form method="post" action="{{ route('booking.confirm', $booking->id) }}">
                                                        @method('patch')
                                                        @csrf
                                                        <input type="hidden" name="payment_status" value="C">
                                                        <input type="hidden" name="booking_status" value="C">
                                                        <x-button>Confirm Booking</x-button>
                                                    </form>
                                                </div>
                                            </div>
                                        </td>
                                    @else
                                        <td class="px-4 py-3">
                                            <div class="flex items-center text-sm">
                                                <div>
                                                    <p class="text-xs">Booking confirmed</p>
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
    </main>
@endsection
