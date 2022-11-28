@extends('layouts.app')
@section('title', 'Add Event')
@section('content')
    <main class="h-full overflow-y-auto">
        <div class="container px-6 mx-auto grid">
            <div class="flex items-center justify-between">
                <h2
                    class="my-6 text-2xl font-semibold text-gray-700 dark:text-gray-200"
                >
                    Add Event
                </h2>
                <x-link href="{{ route('events.index') }}">
                    Go Back
                </x-link>
            </div>
            <div class="flex overflow-hidden rounded-lg">
                <div class="w-full p-4">
                    <form method="POST" action="{{ route('events.store') }}">
                        @csrf
                        <!-- Title -->
                        <div>
                            <x-label class="inline-block text-sm my-6 text-gray-700 dark:text-gray-400" for="title"
                                     :value="('Title')"/>

                            <x-input id="title"
                                     class="inline-block mx-6 w-full text-black text-sm dark:border-gray-600 dark:bg-gray-700 focus:outline-none  focus:ring  focus:ring-opacity-50 @error('title') focus:border-red-400 focus:shadow-outline-red focus:ring-red-200 @else focus:border-purple-400 focus:shadow-outline-purple focus:border-indigo-300 focus:ring-indigo-200 @enderror dark:text-gray-300 dark:focus:shadow-outline-gray form-input"
                                     type="text"
                                     placeholder="Enter Event title"
                                     name="title"
                                     required autofocus/>
                            @error('title')
                            <span class="inline-block mt-1 w-full text-sm text-red-600">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="flex items-center justify-between mt-4">
                            <!-- Experience Id -->
                            <div class="mt-2 ml-2 w-full">
                                <label for="experience_id" class="block text-sm">
                                    <span class="text-gray-700 dark:text-gray-400">Experience</span>
                                    <select name="experience_id"
                                            class="block w-full mt-2 m-4 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none @error('experience_id') focus:border-red-400 focus:shadow-outline-red focus:ring-red-200 @else focus:border-purple-400 focus:shadow-outline-purple focus:border-indigo-300 focus:ring-indigo-200 @enderror focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input"
                                            id="experience_id">
                                        <option value="">Select Event Experience</option>
                                        @foreach($experiences as $experience)
                                            <option value="{{ $experience->id }}">{{ $experience->title }}</option>
                                        @endforeach
                                    </select>
                                </label>
                                @error('experience_id')
                                <span class="inline-block mt-1 w-full text-sm text-red-600">{{ $message }}</span>
                                @enderror
                            </div>
                            <!-- category id -->
                            <div class="mt-2 ml-2 w-full">
                                <label for="category_id" class="block text-sm">
                                    <span class="text-gray-700 dark:text-gray-400">Category</span>
                                    <select name="category_id"
                                            class="block w-full mt-2 m-4 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none @error('category_id') focus:border-red-400 focus:shadow-outline-red focus:ring-red-200 @else focus:border-purple-400 focus:shadow-outline-purple focus:border-indigo-300 focus:ring-indigo-200 @enderror focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input"
                                            id="category_id">
                                        <option value="">Select Event Category</option>
                                        @foreach($categories as $category)
                                            <option value="{{ $category->id }}">{{ $category->title }}</option>
                                        @endforeach
                                    </select>
                                </label>
                                @error('category_id')
                                <span class="inline-block mt-1 w-full text-sm text-red-600">{{ $message }}</span>
                                @enderror
                            </div>
                            <!-- Occasion Id -->
                            <div class="mt-2 ml-2 w-full">
                                <label for="occasion_id" class="block text-sm">
                                    <span class="text-gray-700 dark:text-gray-400">Occasion</span>
                                    <select name="occasion_id"
                                            class="block w-full mt-2 m-4 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none @error('occasion_id') focus:border-red-400 focus:shadow-outline-red focus:ring-red-200 @else focus:border-purple-400 focus:shadow-outline-purple focus:border-indigo-300 focus:ring-indigo-200 @enderror focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input"
                                            id="occasion_id">
                                        <option value="">Select Event Occasion</option>
                                        @foreach($occasions as $occasion)
                                            <option value="{{ $occasion->id }}">{{ $occasion->title }}</option>
                                        @endforeach
                                    </select>
                                </label>
                                @error('occasion_id')
                                <span class="inline-block mt-1 w-full text-sm text-red-600">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                        <!-- Description -->
                        <div>
                            <x-label class="inline-block text-sm my-6 text-gray-700 dark:text-gray-400"
                                     for="description"
                                     :value="('Descirption')"/>

                            <textarea id="description"
                                      class="inline-block mx-6 w-full text-black text-sm dark:border-gray-600 dark:bg-gray-700 focus:outline-none  focus:ring  focus:ring-opacity-50 @error('description') focus:border-red-400 focus:shadow-outline-red focus:ring-red-200 @else focus:border-purple-400 focus:shadow-outline-purple focus:border-indigo-300 focus:ring-indigo-200 @enderror dark:text-gray-300 dark:focus:shadow-outline-gray form-input"
                                      type="text"
                                      placeholder="Enter Event Description"
                                      name="description"
                                      required autofocus></textarea>
                            @error('description')
                            <span class="inline-block mt-1 w-full text-sm text-red-600">{{ $message }}</span>
                            @enderror
                        </div>
                        <!-- Location -->
                        <div>
                            <x-label class="inline-block text-sm my-6 text-gray-700 dark:text-gray-400" for="location"
                                     :value="('Location')"/>

                            <x-input id="location"
                                     class="inline-block mx-6 w-full text-black text-sm dark:border-gray-600 dark:bg-gray-700 focus:outline-none  focus:ring  focus:ring-opacity-50 @error('location') focus:border-red-400 focus:shadow-outline-red focus:ring-red-200 @else focus:border-purple-400 focus:shadow-outline-purple focus:border-indigo-300 focus:ring-indigo-200 @enderror dark:text-gray-300 dark:focus:shadow-outline-gray form-input"
                                     type="text"
                                     name="location"
                                     required autofocus/>
                            @error('location')
                            <span class="inline-block mt-1 w-full text-sm text-red-600">{{ $message }}</span>
                            @enderror
                        </div>
                        <!-- Price -->
                        <div>
                            <x-label class="inline-block text-sm my-6 text-gray-700 dark:text-gray-400" for="price"
                                     :value="('Price')"/>

                            <x-input id="price"
                                     class="inline-block mx-6 w-full text-black text-sm dark:border-gray-600 dark:bg-gray-700 focus:outline-none  focus:ring  focus:ring-opacity-50 @error('price') focus:border-red-400 focus:shadow-outline-red focus:ring-red-200 @else focus:border-purple-400 focus:shadow-outline-purple focus:border-indigo-300 focus:ring-indigo-200 @enderror dark:text-gray-300 dark:focus:shadow-outline-gray form-input"
                                     type="number"
                                     name="price"
                                     required autofocus/>
                            @error('price')
                            <span class="inline-block mt-1 w-full text-sm text-red-600">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="flex items-center justify-between px-12">
                        <!-- Time -->
                        <div class="flex flex-col">
                            <x-label class="inline-block text-sm my-6 text-gray-700 dark:text-gray-400" for="start_time"
                                     :value="('Start Time')"/>

                            <x-input id="start_time"
                                     class="inline-block mx-6 w-1/2 text-black text-sm dark:border-gray-600 dark:bg-gray-700 focus:outline-none  focus:ring  focus:ring-opacity-50 @error('start_time') focus:border-red-400 focus:shadow-outline-red focus:ring-red-200 @else focus:border-purple-400 focus:shadow-outline-purple focus:border-indigo-300 focus:ring-indigo-200 @enderror dark:text-gray-300 dark:focus:shadow-outline-gray form-input"
                                     type="time"
                                     name="start_time"
                                     required autofocus/>
                            @error('start_time')
                            <span class="inline-block mt-1 w-full text-sm text-red-600">{{ $message }}</span>
                            @enderror
                        </div>
                            <!-- end time -->
                            <div>
                                <x-label class="inline-block text-sm my-6 text-gray-700 dark:text-gray-400" for="end_time"
                                         :value="('End Time')"/>

                                <x-input id="end_time"
                                         class="inline-block mx-6 w-full text-black text-sm dark:border-gray-600 dark:bg-gray-700 focus:outline-none  focus:ring  focus:ring-opacity-50 @error('end_time') focus:border-red-400 focus:shadow-outline-red focus:ring-red-200 @else focus:border-purple-400 focus:shadow-outline-purple focus:border-indigo-300 focus:ring-indigo-200 @enderror dark:text-gray-300 dark:focus:shadow-outline-gray form-input"
                                         type="time"
                                         name="end_time"
                                         required autofocus/>
                                @error('end_time')
                                <span class="inline-block mt-1 w-full text-sm text-red-600">{{ $message }}</span>
                                @enderror
                            </div>
                            <!-- End Date -->
                            <div>
                                <x-label class="inline-block text-sm my-6 text-gray-700 dark:text-gray-400" for="date"
                                         :value="('Date')"/>

                                <x-input id="date"
                                         class="inline-block mx-6 w-full text-black text-sm dark:border-gray-600 dark:bg-gray-700 focus:outline-none  focus:ring  focus:ring-opacity-50 @error('date') focus:border-red-400 focus:shadow-outline-red focus:ring-red-200 @else focus:border-purple-400 focus:shadow-outline-purple focus:border-indigo-300 focus:ring-indigo-200 @enderror dark:text-gray-300 dark:focus:shadow-outline-gray form-input"
                                         type="date"
                                         name="date"
                                         required autofocus/>
                                @error('date')
                                <span class="inline-block mt-1 w-full text-sm text-red-600">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                        <div class="items-center justify-between m-4">
                            <x-button>
                                Add Event
                            </x-button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </main>
@endsection
