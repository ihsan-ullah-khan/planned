<div class="mb-16">
<!-- navbar -->
    <nav class="navbar fixed-top">
        <div class="container sm:px-4 lg:px-8 flex flex-wrap items-center justify-between lg:flex-nowrap">

            <!-- Text Logo - Use this if you don't have a graphic logo -->
            <a class="text-gray-800 font-semibold text-3xl leading-4 no-underline page-scroll" href="/">Planned</a>

            <!-- Image Logo -->
            {{--        <a class="inline-block mr-4 py-0.5 text-xl whitespace-nowrap hover:no-underline focus:no-underline" href="index.html">--}}
            {{--            <h1 class="text-4xl font-bold">Planned <i class="text-6xl font-bold text-red-700">.</i></h1>--}}
            {{--        </a>--}}

            <button
                class="background-transparent rounded text-xl leading-none hover:no-underline focus:no-underline lg:hidden lg:text-gray-400"
                type="button" data-toggle="offcanvas">
                <span class="navbar-toggler-icon inline-block w-8 h-8 align-middle"></span>
            </button>

            <div
                class="navbar-collapse offcanvas-collapse items-center justify-between lg:flex lg:flex-grow lg:items-center lg:justify-between"
                id="navbarsExampleDefault">
                <div>
                    <ul class="pl-0 mt-3 mb-2 ml-auto flex flex-col list-none lg:mt-0 lg:mb-0 lg:flex-row">
                        <li>
                            <a class="nav-link page-scroll" href="#">Products</a>
                        </li>
                        <li>
                            <a class="nav-link page-scroll" href="#">Pricing</a>
                        </li>
                        <li>
                            <a class="nav-link page-scroll" href="#">Resources</a>
                        </li>
                        <li>
                            <a class="nav-link page-scroll" href="#">For partners</a>
                        </li>
{{--                                        <li class="dropdown">--}}
{{--                                            <a class="nav-link dropdown-toggle" href="#" id="dropdown01" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Drop</a>--}}
{{--                                            <div class="dropdown-menu" aria-labelledby="dropdown01">--}}
{{--                                                <a class="dropdown-item page-scroll" href="article.html">Article Details</a>--}}
{{--                                                <div class="dropdown-divider"></div>--}}
{{--                                                <a class="dropdown-item page-scroll" href="terms.html">Terms Conditions</a>--}}
{{--                                                <div class="dropdown-divider"></div>--}}
{{--                                                <a class="dropdown-item page-scroll" href="privacy.html">Privacy Policy</a>--}}
{{--                                            </div>--}}
{{--                                        </li>--}}
                        <li>
                            <a class="nav-link page-scroll" href="#">Marketplace</a>
                        </li>
                    </ul>
                </div>
                <div>
                    <ul class="pl-0 mt-3 mb-2 ml-auto flex flex-col list-none lg:mt-0 lg:mb-0 lg:flex-row">
                        @if(\Illuminate\Support\Facades\Auth::id())
                            <li class="dropdown">
                                <a class="nav-link" href="#" id="dropdown01" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-10 h-8">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 6a3.75 3.75 0 11-7.5 0 3.75 3.75 0 017.5 0zM4.501 20.118a7.5 7.5 0 0114.998 0A17.933 17.933 0 0112 21.75c-2.676 0-5.216-.584-7.499-1.632z" />
                                    </svg>
                                    </a>
                                <div class="dropdown-menu" aria-labelledby="dropdown01">
                                    <a class="dropdown-item page-scroll" href="article.html">{{ \Illuminate\Support\Facades\Auth::user()->name }}</a>
                                    <div class="dropdown-divider"></div>
                                    <a class="dropdown-item page-scroll" href="terms.html">Settings</a>
                                    <div class="dropdown-divider"></div>
                                    <a class="dropdown-item page-scroll" href="#"
                                       onclick="document.getElementById('formlogout').submit();"
                                    >Logout</a>
                                </div>
                                <form id="formlogout" method="Post" action="{{ route('logout') }}">@csrf</form>
                            </li>
                        @else
                        <li class="flex">
                            <a class="inline-flex items-center w-full px-2 py-1 text-sm font-semibold transition-colors duration-150 rounded-md hover:text-red-400"
                               href="{{ route('login') }}"
                            >
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                     stroke-width="1.5"
                                     stroke="currentColor" class="w-6 h-6">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                          d="M15.75 9V5.25A2.25 2.25 0 0013.5 3h-6a2.25 2.25 0 00-2.25 2.25v13.5A2.25 2.25 0 007.5 21h6a2.25 2.25 0 002.25-2.25V15m3 0l3-3m0 0l-3-3m3 3H9"/>
                                </svg>
                                <span class="ml-2">
                                    Sign in
                                </span>
                            </a>
                        </li>
                        <li class="flex">
                            <a class="inline-flex items-center w-full px-2 py-1 text-sm font-semibold transition-colors duration-150 rounded-md hover:text-red-400"
                               href="#"
                            >
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                         stroke-width="1.5"
                                         stroke="currentColor" class="w-6 h-6">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                          d="M6.75 3v2.25M17.25 3v2.25M3 18.75V7.5a2.25 2.25 0 012.25-2.25h13.5A2.25 2.25 0 0121 7.5v11.25m-18 0A2.25 2.25 0 005.25 21h13.5A2.25 2.25 0 0021 18.75m-18 0v-7.5A2.25 2.25 0 015.25 9h13.5A2.25 2.25 0 0121 11.25v7.5"/>
                                    </svg>
                                <span class="ml-2">
                                    Book a Demo
                                </span>
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('register') }}" type="button" class="inline-block px-4 py-2.5 bg-gray-800 text-white font-medium text-xs leading-tight italic rounded-full shadow-md hover:bg-gray-900 hover:shadow-lg focus:bg-gray-900 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-gray-900 active:shadow-lg transition duration-150 ease-in-out">
                                Sign up for free
                            </a>
                        </li>
                        @endif
                    </ul>
                </div>
            </div>
        </div>
    </nav>
<!-- end of navbar -->
</div>
