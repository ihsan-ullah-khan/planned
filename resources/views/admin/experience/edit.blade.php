@extends('layouts.app')
@section('title', 'Update Experience')
@section('content')
    <main class="h-full overflow-y-auto">
        <div class="container px-6 mx-auto grid">
            <div class="flex items-center justify-between">
                <h2
                    class="my-6 text-2xl font-semibold text-gray-700 dark:text-gray-200"
                >
                    Edit Experience
                </h2>
                <x-link href="{{ route('experiences.index') }}">
                    Go Back
                </x-link>
            </div>
            <div class="flex overflow-hidden rounded-lg">
                <div class="w-full p-4">
                    <form method="POST" action="{{ route('experiences.update', $experience) }}" enctype="multipart/form-data">
                        @method('patch')
                        @csrf
                        <!-- Name -->
                        <div>
                            <x-label class="inline-block text-sm my-6 text-gray-700 dark:text-gray-400" for="image"
                                     :value="('Image')"/>
                            <div class="flex">
                                <div class="flex-1 mt-6">
                            <x-input id="image"
                                     class="inline-block mx-6 w-full text-black text-sm dark:border-gray-600 dark:bg-gray-700 focus:outline-none  focus:ring  focus:ring-opacity-50 @error('image') focus:border-red-400 focus:shadow-outline-red focus:ring-red-200 @else focus:border-purple-400 focus:shadow-outline-purple focus:border-indigo-300 focus:ring-indigo-200 @enderror dark:text-gray-300 dark:focus:shadow-outline-gray form-input"
                                     type="file"
                                     name="image"
                                     :value="old('image', $experience->image)"
                                     autofocus/>
                            @error('image')
                            <span class="inline-block mt-1 w-full text-sm text-red-600">{{ $message }}</span>
                            @enderror
                                </div>
                                <img src="{{ asset('/storage/images/' .$experience->image) }}" alt="" class="rounded-md ml-6 object-fit" style="width: 5rem; height: 5rem;" width="100">
                            </div>
                        </div>
                        <!-- Name -->
                        <div>
                            <x-label class="inline-block text-sm my-6 text-gray-700 dark:text-gray-400" for="title"
                                     :value="('Title')"/>

                            <x-input id="title"
                                     class="inline-block mx-6 w-full text-black text-sm dark:border-gray-600 dark:bg-gray-700 focus:outline-none  focus:ring  focus:ring-opacity-50 @error('title') focus:border-red-400 focus:shadow-outline-red focus:ring-red-200 @else focus:border-purple-400 focus:shadow-outline-purple focus:border-indigo-300 focus:ring-indigo-200 @enderror dark:text-gray-300 dark:focus:shadow-outline-gray form-input"
                                     type="text"
                                     placeholder="Enter Experience title"
                                     name="title"
                                     :value="old('title') ?? $experience->title"
                                     required autofocus/>
                            @error('title')
                            <span class="inline-block mt-1 w-full text-sm text-red-600">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="items-center justify-between m-4">
                            <x-button>
                                Update Experience
                            </x-button>
                        </div>
                    </form>
                </div>
                <div class="w-1/2"></div>
            </div>
        </div>
    </main>
@endsection
