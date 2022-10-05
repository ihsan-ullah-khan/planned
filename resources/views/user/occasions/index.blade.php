@extends('layouts.user-home')
@section('content')
    <section class="bg-white py-8">

        <div class="container mx-auto flex items-center flex-wrap pt-4 pb-12">

            <nav id="store" class="w-full z-30 top-0 px-6 py-1">
                <div class="w-full container mx-auto flex flex-wrap items-center justify-between mt-0 px-2 py-3">

                    <div>
                        <!-- Search location -->
                        <div class="relative my-2 w-56 flex lg:inline-flex items-center bg-gray-100 rounded-3xl px-3 py-2">
                            <form method="GET" action="#">
                                <input type="text"
                                       name="search"
                                       placeholder="New York, NY, USA"
                                       class="bg-transparent placeholder-gray-400 font-semibold text-sm px-2"
                                       value="{{ request('search') }}"
                                >
                            </form>
                        </div>
                        <!-- end Search location -->
                        <!-- Gift Type -->
                        <div class="relative my-2 flex lg:inline-flex items-center bg-gray-100 rounded-xl">
                            <div x-data="{ show: false}" @click.away="show = false">
                                <button
                                    @click="show = true"
                                    class="py-2 pl-3 pr-9 text-sm font-semibold w-full text-gray-500 lg:w-28 text-left inline-flex"
                                >
                                    Gift Type

                                    <svg class="transform -rotate-90 absolute pointer-events-none" style="right: 12px;"
                                         width="22"
                                         height="22" viewBox="0 0 22 22">
                                        <g fill="none" fill-rule="evenodd">
                                            <path stroke="#000" stroke-opacity=".012" stroke-width=".5"
                                                  d="M21 1v20.16H.84V1z">
                                            </path>
                                            <path fill="#222"
                                                  d="M13.854 7.224l-3.847 3.856 3.847 3.856-1.184 1.184-5.04-5.04 5.04-5.04z"></path>
                                        </g>
                                    </svg>
                                </button>
                                <div x-show="show" class="py-2 absolute bg-gray-100 mt-2 rounded-xl mb-2 w-full z-50"
                                     style="display: none;">
                                    <a href="#"
                                       class="block text-left px-3 text-sm leading-6 text-black hover:bg-blue-500 focus:bg-blue-500 hover:text-white">Gift
                                        one</a>
                                    <a href="#"
                                       class="block text-left px-3 text-sm leading-6 text-black hover:bg-blue-500 focus:bg-blue-500 hover:text-white">Gift
                                        two</a>
                                    <a href="#"
                                       class="block text-left px-3 text-sm leading-6 text-black hover:bg-blue-500 focus:bg-blue-500 hover:text-white">Gift
                                        three</a>
                                    <a href="#"
                                       class="block text-left px-3 text-sm leading-6 text-black hover:bg-blue-500 focus:bg-blue-500 hover:text-white">Gift
                                        four</a>
                                    <a href="#"
                                       class="block text-left px-3 text-sm leading-6 text-black hover:bg-blue-500 focus:bg-blue-500 hover:text-white">Gift
                                        five</a>
                                    {{--                                @foreach($categories as $category)--}}
                                    {{--                                    <a href="/?category={{ $category->id }}"--}}
                                    {{--                                       class="block text-left px-3 text-sm leading-6 text-black hover:bg-blue-500 focus:bg-blue-500 hover:text-white"--}}
                                    {{--                                       active="{{ request()->is("$category->category_name") }}"--}}
                                    {{--                                    >{{ $category->category_name }}</a>--}}
                                    {{--                                @endforeach--}}
                                </div>
                            </div>
                        </div>
                        <!-- end gift type -->
                        <!-- price -->
                        <div class="relative my-2 flex lg:inline-flex items-center bg-gray-100 rounded-xl">
                            <div x-data="{ show: false}" @click.away="show = false">
                                <button
                                    @click="show = true"
                                    class="py-2 pl-3 pr-9 text-sm font-semibold w-full text-gray-500 lg:w-20 text-left inline-flex"
                                >
                                    Price

                                    <svg class="transform -rotate-90 absolute pointer-events-none" style="right: 12px;"
                                         width="22"
                                         height="22" viewBox="0 0 22 22">
                                        <g fill="none" fill-rule="evenodd">
                                            <path stroke="#000" stroke-opacity=".012" stroke-width=".5"
                                                  d="M21 1v20.16H.84V1z">
                                            </path>
                                            <path fill="#222"
                                                  d="M13.854 7.224l-3.847 3.856 3.847 3.856-1.184 1.184-5.04-5.04 5.04-5.04z"></path>
                                        </g>
                                    </svg>
                                </button>
                                <div x-show="show" class="py-2 absolute bg-gray-100 mt-2 rounded-xl mb-2 w-full z-50"
                                     style="display: none;">
                                    <a href="#"
                                       class="block text-left px-3 text-sm leading-6 text-black hover:bg-blue-500 focus:bg-blue-500 hover:text-white">$100</a>
                                    <a href="#"
                                       class="block text-left px-3 text-sm leading-6 text-black hover:bg-blue-500 focus:bg-blue-500 hover:text-white">$200</a>
                                    <a href="#"
                                       class="block text-left px-3 text-sm leading-6 text-black hover:bg-blue-500 focus:bg-blue-500 hover:text-white">$300</a>
                                    <a href="#"
                                       class="block text-left px-3 text-sm leading-6 text-black hover:bg-blue-500 focus:bg-blue-500 hover:text-white">$400</a>
                                    <a href="#"
                                       class="block text-left px-3 text-sm leading-6 text-black hover:bg-blue-500 focus:bg-blue-500 hover:text-white">$500</a>
                                    {{--                                @foreach($categories as $category)--}}
                                    {{--                                    <a href="/?category={{ $category->id }}"--}}
                                    {{--                                       class="block text-left px-3 text-sm leading-6 text-black hover:bg-blue-500 focus:bg-blue-500 hover:text-white"--}}
                                    {{--                                       active="{{ request()->is("$category->category_name") }}"--}}
                                    {{--                                    >{{ $category->category_name }}</a>--}}
                                    {{--                                @endforeach--}}
                                </div>
                            </div>
                        </div>
                        <!-- end price -->
                        <!-- Social Impact -->
                        <div class="relative my-2 flex lg:inline-flex items-center bg-gray-100 rounded-xl">
                            <div x-data="{ show: false}" @click.away="show = false">
                                <button
                                    @click="show = true"
                                    class="py-2 pl-3 pr-9 text-sm font-semibold w-full text-gray-500 lg:w-36 text-left inline-flex"
                                >
                                    Social impact

                                    <svg class="transform -rotate-90 absolute pointer-events-none" style="right: 12px;"
                                         width="22"
                                         height="22" viewBox="0 0 22 22">
                                        <g fill="none" fill-rule="evenodd">
                                            <path stroke="#000" stroke-opacity=".012" stroke-width=".5"
                                                  d="M21 1v20.16H.84V1z">
                                            </path>
                                            <path fill="#222"
                                                  d="M13.854 7.224l-3.847 3.856 3.847 3.856-1.184 1.184-5.04-5.04 5.04-5.04z"></path>
                                        </g>
                                    </svg>
                                </button>
                                <div x-show="show" class="py-2 absolute bg-gray-100 mt-2 rounded-xl mb-2 w-full z-50"
                                     style="display: none;">
                                    <a href="#"
                                       class="block text-left px-3 text-sm leading-6 text-black hover:bg-blue-500 focus:bg-blue-500 hover:text-white">One</a>
                                    <a href="#"
                                       class="block text-left px-3 text-sm leading-6 text-black hover:bg-blue-500 focus:bg-blue-500 hover:text-white">Two</a>
                                    <a href="#"
                                       class="block text-left px-3 text-sm leading-6 text-black hover:bg-blue-500 focus:bg-blue-500 hover:text-white">Three</a>
                                    <a href="#"
                                       class="block text-left px-3 text-sm leading-6 text-black hover:bg-blue-500 focus:bg-blue-500 hover:text-white">Four</a>
                                    {{--                                @foreach($categories as $category)--}}
                                    {{--                                    <a href="/?category={{ $category->id }}"--}}
                                    {{--                                       class="block text-left px-3 text-sm leading-6 text-black hover:bg-blue-500 focus:bg-blue-500 hover:text-white"--}}
                                    {{--                                       active="{{ request()->is("$category->category_name") }}"--}}
                                    {{--                                    >{{ $category->category_name }}</a>--}}
                                    {{--                                @endforeach--}}
                                </div>
                            </div>
                        </div>
                        <!-- end social impact -->
                    </div>


                    <div>
                        <div class="flex items-center" id="store-nav-content">
                            <button type="button"
                                    class="inline-block px-4 py-2.5 bg-gray-800 text-white font-medium text-xs leading-tight italic rounded-full shadow-md hover:bg-gray-900 hover:shadow-lg focus:bg-gray-900 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-gray-900 active:shadow-lg transition duration-150 ease-in-out">
                                clear all filters
                            </button>
                        </div>
                    </div>
                </div>
            </nav>

            <div class="w-full md:w-1/3 xl:w-1/4 p-6 flex flex-col">
                <a href="#">
                    <img class="hover:grow hover:shadow-lg h-40 w-full" src="{{ asset('assets/images/bg/bg1.jpeg') }}">
                    <div class="pt-3 flex items-center justify-between">
                        <p class="text-gray-700">Mansa Tea</p>
                        <p></p>
                    </div>
                    <div class="flex items-center justify-start mt-6">
                        <p class="pt-1 text-gray-600 text-sm hover:underline">Gift Basket</p>
{{--                        <p class="pt-1 text-gray-600 text-sm ml-2 hover:underline">Customizable items</p>--}}
                    </div>
                </a>
            </div>

            <div class="w-full md:w-1/3 xl:w-1/4 p-6 flex flex-col">
                <a href="#">
                    <img class="hover:grow hover:shadow-lg h-40 w-full" src="{{ asset('assets/images/bg/bg2.jpeg') }}">
                    <div class="pt-3">
                        <p class="text-gray-700">Societe Box</p>
                        <p class="text-xs">Gift box provider assists in customizing a gift box</p>
                    </div>
                    <div class="flex items-center justify-start">
                    <p class="pt-1 text-gray-600 text-sm hover:underline">Gift Basket</p>
                        <p class="pt-1 text-gray-600 text-sm ml-2 hover:underline">Customizable items</p>
                    </div>
                </a>
            </div>
            <div class="w-full md:w-1/3 xl:w-1/4 p-6 flex flex-col">
                <a href="#">
                    <img class="hover:grow hover:shadow-lg h-40 w-full" src="{{ asset('assets/images/bg/bg2.jpeg') }}">
                    <div class="pt-3">
                        <p class="text-gray-700">Swag by Asayo</p>
                        <p class="text-xs">Group gift service offering customizable swag boxers</p>
                    </div>
                    <div class="flex items-center justify-start">
                        <p class="pt-1 text-gray-600 text-sm hover:underline">Gift Basket</p>
{{--                        <p class="pt-1 text-gray-600 text-sm ml-2 hover:underline">Customizable items</p>--}}
                    </div>
                </a>
            </div>
            <div class="w-full md:w-1/3 xl:w-1/4 p-6 flex flex-col">
                <a href="#">
                    <img class="hover:grow hover:shadow-lg h-40 w-full" src="{{ asset('assets/images/bg/bg2.jpeg') }}">
                    <div class="pt-3">
                        <p class="text-gray-700">TinyB Chocolates</p>
                        <p class="text-xs">Brazil's authentic brigadeiros now in san Fransisco</p>
                    </div>
                    <div class="flex items-center justify-start">
                        <p class="pt-1 text-gray-600 text-sm hover:underline">Gift Basket</p>
{{--                        <p class="pt-1 text-gray-600 text-sm ml-2 hover:underline">Customizable items</p>--}}
                    </div>
                </a>
            </div>
            <div class="w-full md:w-1/3 xl:w-1/4 p-6 flex flex-col">
                <a href="#">
                    <img class="hover:grow hover:shadow-lg h-40 w-full" src="{{ asset('assets/images/bg/bg1.jpeg') }}">
                    <div class="pt-3 flex items-center justify-between">
                        <p class="text-gray-700">Mansa Tea</p>
                        <p></p>
                    </div>
                    <div class="flex items-center justify-start mt-6">
                        <p class="pt-1 text-gray-600 text-sm hover:underline">Gift Basket</p>
                        {{--                        <p class="pt-1 text-gray-600 text-sm ml-2 hover:underline">Customizable items</p>--}}
                    </div>
                </a>
            </div>

            <div class="w-full md:w-1/3 xl:w-1/4 p-6 flex flex-col">
                <a href="#">
                    <img class="hover:grow hover:shadow-lg h-40 w-full" src="{{ asset('assets/images/bg/bg2.jpeg') }}">
                    <div class="pt-3">
                        <p class="text-gray-700">Societe Box</p>
                        <p class="text-xs">Gift box provider assists in customizing a gift box</p>
                    </div>
                    <div class="flex items-center justify-start">
                        <p class="pt-1 text-gray-600 text-sm hover:underline">Gift Basket</p>
                        <p class="pt-1 text-gray-600 text-sm ml-2 hover:underline">Customizable items</p>
                    </div>
                </a>
            </div>
            <div class="w-full md:w-1/3 xl:w-1/4 p-6 flex flex-col">
                <a href="#">
                    <img class="hover:grow hover:shadow-lg h-40 w-full" src="{{ asset('assets/images/bg/bg2.jpeg') }}">
                    <div class="pt-3">
                        <p class="text-gray-700">Swag by Asayo</p>
                        <p class="text-xs">Group gift service offering customizable swag boxers</p>
                    </div>
                    <div class="flex items-center justify-start">
                        <p class="pt-1 text-gray-600 text-sm hover:underline">Gift Basket</p>
                        {{--                        <p class="pt-1 text-gray-600 text-sm ml-2 hover:underline">Customizable items</p>--}}
                    </div>
                </a>
            </div>
            <div class="w-full md:w-1/3 xl:w-1/4 p-6 flex flex-col">
                <a href="#">
                    <img class="hover:grow hover:shadow-lg h-40 w-full" src="{{ asset('assets/images/bg/bg2.jpeg') }}">
                    <div class="pt-3">
                        <p class="text-gray-700">TinyB Chocolates</p>
                        <p class="text-xs">Brazil's authentic brigadeiros now in san Fransisco</p>
                    </div>
                    <div class="flex items-center justify-start">
                        <p class="pt-1 text-gray-600 text-sm hover:underline">Gift Basket</p>
                        {{--                        <p class="pt-1 text-gray-600 text-sm ml-2 hover:underline">Customizable items</p>--}}
                    </div>
                </a>
            </div>

        </div>

    </section>
@endsection
