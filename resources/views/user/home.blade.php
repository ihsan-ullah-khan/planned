@extends('layouts.user-home')
@section('content')

    <!-- Header -->
    <x-header/>
    <!-- end of header -->
    <!-- categories -->
    <x-categories/>
    <!-- end of categories -->
    <!-- all categories -->
    <x-all-categories/>
    <!-- end of all categories -->

    <!-- Features -->
    <x-occasion/>
    <!-- end of features -->

    <!-- Includes -->
    <x-includes/>
    <!-- end includes -->

    <!-- Grid for all categories and occasion -->
{{--    <x-grid/>--}}
    <!-- end Grid for all categories and occasion -->

    <!-- cancellation and rescheduling -->
    <x-terms/>
    <!-- end cancellation and rescheduling -->
    <!-- cancellation and rescheduling -->
    <x-extras/>
    <!-- end cancellation and rescheduling -->




{{--    <!-- Details 1 -->--}}
{{--    <div id="details" class="pt-12 pb-16 lg:pt-16">--}}
{{--        <div class="container px-4 sm:px-8 lg:grid lg:grid-cols-12 lg:gap-x-12">--}}
{{--            <div class="lg:col-span-5">--}}
{{--                <div class="mb-16 lg:mb-0 xl:mt-16">--}}
{{--                    <h2 class="mb-6">Results driven ground breaking technology</h2>--}}
{{--                    <p class="mb-4">Based on our team's extensive experience in developing line of business applications and--}}
{{--                        constructive customer feedback we reached a new level of revenue.</p>--}}
{{--                    <p class="mb-4">We enjoy helping small and medium sized tech businesses take a shot at established--}}
{{--                        Fortune 500 companies</p>--}}
{{--                </div>--}}
{{--            </div> <!-- end of col -->--}}
{{--            <div class="lg:col-span-7">--}}
{{--                <div class="xl:ml-14">--}}
{{--                    <img class="inline" src="assets/images/details-1.jpg" alt="alternative"/>--}}
{{--                </div>--}}
{{--            </div> <!-- end of col -->--}}
{{--        </div> <!-- end of container -->--}}
{{--    </div>--}}
{{--    <!-- end of details 1 -->--}}


{{--    <!-- Details 2 -->--}}
{{--    <div class="py-24">--}}
{{--        <div class="container px-4 sm:px-8 lg:grid lg:grid-cols-12 lg:gap-x-12">--}}
{{--            <div class="lg:col-span-7">--}}
{{--                <div class="mb-12 lg:mb-0 xl:mr-14">--}}
{{--                    <img class="inline" src="assets/images/details-2.jpg" alt="alternative"/>--}}
{{--                </div>--}}
{{--            </div> <!-- end of col -->--}}
{{--            <div class="lg:col-span-5">--}}
{{--                <div class="xl:mt-12">--}}
{{--                    <h2 class="mb-6">Instant results for the marketing department</h2>--}}
{{--                    <ul class="list mb-7 space-y-2">--}}
{{--                        <li class="flex">--}}
{{--                            <i class="fas fa-chevron-right"></i>--}}
{{--                            <div>Features that will help you and your marketers</div>--}}
{{--                        </li>--}}
{{--                        <li class="flex">--}}
{{--                            <i class="fas fa-chevron-right"></i>--}}
{{--                            <div>Smooth learning curve due to the knowledge base</div>--}}
{{--                        </li>--}}
{{--                        <li class="flex">--}}
{{--                            <i class="fas fa-chevron-right"></i>--}}
{{--                            <div>Ready out-of-the-box with minor setup settings</div>--}}
{{--                        </li>--}}
{{--                    </ul>--}}
{{--                    <a class="btn-solid-reg popup-with-move-anim mr-1.5" href="#details-lightbox">Lightbox</a>--}}
{{--                    <a class="btn-outline-reg" href="article.html">Details</a>--}}
{{--                </div>--}}
{{--            </div> <!-- end of col -->--}}
{{--        </div> <!-- end of container -->--}}
{{--    </div>--}}
{{--    <!-- end of details 2 -->--}}


{{--    <!-- Details Lightbox -->--}}
{{--    <!-- Lightbox -->--}}
{{--    <div id="details-lightbox" class="lightbox-basic zoom-anim-dialog mfp-hide">--}}
{{--        <div class="lg:grid lg:grid-cols-12 lg:gap-x-8">--}}
{{--            <button title="Close (Esc)" type="button" class="mfp-close x-button">×</button>--}}
{{--            <div class="lg:col-span-8">--}}
{{--                <div class="mb-12 text-center lg:mb-0 lg:text-left xl:mr-6">--}}
{{--                    <img class="inline rounded-lg" src="assets/images/details-lightbox.jpg" alt="alternative"/>--}}
{{--                </div>--}}
{{--            </div> <!-- end of col -->--}}
{{--            <div class="lg:col-span-4">--}}
{{--                <h3 class="mb-2">Goals Setting</h3>--}}
{{--                <hr class="w-11 h-0.5 mt-0.5 mb-4 ml-0 border-none bg-indigo-600"/>--}}
{{--                <p>The app can easily help you track your personal development evolution if you take the time to set it--}}
{{--                    up.</p>--}}
{{--                <h4 class="mt-7 mb-2.5">User Feedback</h4>--}}
{{--                <p class="mb-4">This is a great app which can help you save time and make your live easier. And it will help--}}
{{--                    improve your productivity.</p>--}}
{{--                <ul class="list mb-6 space-y-2">--}}
{{--                    <li class="flex">--}}
{{--                        <i class="fas fa-chevron-right"></i>--}}
{{--                        <div>Splash screen panel</div>--}}
{{--                    </li>--}}
{{--                    <li class="flex">--}}
{{--                        <i class="fas fa-chevron-right"></i>--}}
{{--                        <div>Statistics graph report</div>--}}
{{--                    </li>--}}
{{--                    <li class="flex">--}}
{{--                        <i class="fas fa-chevron-right"></i>--}}
{{--                        <div>Events calendar layout</div>--}}
{{--                    </li>--}}
{{--                    <li class="flex">--}}
{{--                        <i class="fas fa-chevron-right"></i>--}}
{{--                        <div>Location details screen</div>--}}
{{--                    </li>--}}
{{--                    <li class="flex">--}}
{{--                        <i class="fas fa-chevron-right"></i>--}}
{{--                        <div>Onboarding steps interface</div>--}}
{{--                    </li>--}}
{{--                </ul>--}}
{{--                <a class="btn-solid-reg mfp-close page-scroll" href="#download">Download</a>--}}
{{--                <button class="btn-outline-reg mfp-close as-button" type="button">Back</button>--}}
{{--            </div> <!-- end of col -->--}}
{{--        </div> <!-- end of row -->--}}
{{--    </div> <!-- end of lightbox-basic -->--}}
{{--    <!-- end of lightbox -->--}}
{{--    <!-- end of details lightbox -->--}}


{{--    <!-- Details 3 -->--}}
{{--    <div class="pt-16 pb-12">--}}
{{--        <div class="container px-4 sm:px-8 lg:grid lg:grid-cols-12 lg:gap-x-12">--}}
{{--            <div class="lg:col-span-5">--}}
{{--                <div class="mb-16 lg:mb-0 xl:mt-16">--}}
{{--                    <h2 class="mb-6">Platform integration and life time free updates</h2>--}}
{{--                    <p class="mb-4">Get a glimpse of what this app can do for your marketing automation and understand why--}}
{{--                        current users are so excited when using Pavo--}}
{{--                        together with their teams.</p>--}}
{{--                    <p class="mb-4">We will promptly answer any questions and honor your requests based on the service level--}}
{{--                        agreement</p>--}}
{{--                </div>--}}
{{--            </div> <!-- end of col -->--}}
{{--            <div class="lg:col-span-7">--}}
{{--                <div class="ml-14">--}}
{{--                    <img class="inline" src="assets/images/details-3.jpg" alt="alternative"/>--}}
{{--                </div>--}}
{{--            </div> <!-- end of col -->--}}
{{--        </div> <!-- end of container -->--}}
{{--    </div>--}}
{{--    <!-- end of details 3 -->--}}


{{--    <!-- Statistics -->--}}
{{--    <div class="counter">--}}
{{--        <div class="container px-4 sm:px-8">--}}

{{--            <!-- Counter -->--}}
{{--            <div id="counter">--}}
{{--                <div class="cell">--}}
{{--                    <div class="counter-value number-count" data-count="231">1</div>--}}
{{--                    <p class="counter-info">Happy Users</p>--}}
{{--                </div>--}}
{{--                <div class="cell">--}}
{{--                    <div class="counter-value number-count" data-count="385">1</div>--}}
{{--                    <p class="counter-info">Issues Solved</p>--}}
{{--                </div>--}}
{{--                <div class="cell">--}}
{{--                    <div class="counter-value number-count" data-count="159">1</div>--}}
{{--                    <p class="counter-info">Good Reviews</p>--}}
{{--                </div>--}}
{{--                <div class="cell">--}}
{{--                    <div class="counter-value number-count" data-count="127">1</div>--}}
{{--                    <p class="counter-info">Case Studies</p>--}}
{{--                </div>--}}
{{--                <div class="cell">--}}
{{--                    <div class="counter-value number-count" data-count="211">1</div>--}}
{{--                    <p class="counter-info">Orders Received</p>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--            <!-- end of counter -->--}}

{{--        </div> <!-- end of container -->--}}
{{--    </div> <!-- end of counter -->--}}
{{--    <!-- end of statistics -->--}}


{{--    <!-- Testimonials -->--}}
{{--    <div class="slider-1 py-32 bg-gray">--}}
{{--        <div class="container px-4 sm:px-8">--}}
{{--            <h2 class="mb-12 text-center lg:max-w-xl lg:mx-auto">What do users think about Pavo</h2>--}}

{{--            <!-- Card Slider -->--}}
{{--            <div class="slider-container">--}}
{{--                <div class="swiper-container card-slider">--}}
{{--                    <div class="swiper-wrapper">--}}

{{--                        <!-- Slide -->--}}
{{--                        <div class="swiper-slide">--}}
{{--                            <div class="card">--}}
{{--                                <img class="card-image" src="assets/images/testimonial-1.jpg" alt="alternative"/>--}}
{{--                                <div class="card-body">--}}
{{--                                    <p class="italic mb-3">It's been so fun to work with Pavo, I've managed to integrate it--}}
{{--                                        properly into my business flow and it's great</p>--}}
{{--                                    <p class="testimonial-author">Jude Thorn - Designer</p>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div> <!-- end of swiper-slide -->--}}
{{--                        <!-- end of slide -->--}}

{{--                        <!-- Slide -->--}}
{{--                        <div class="swiper-slide">--}}
{{--                            <div class="card">--}}
{{--                                <img class="card-image" src="assets/images/testimonial-2.jpg" alt="alternative"/>--}}
{{--                                <div class="card-body">--}}
{{--                                    <p class="italic mb-3">We were so focused on launching as many campaigns as possible--}}
{{--                                        that we've forgotten to target our loyal customers</p>--}}
{{--                                    <p class="testimonial-author">Roy Smith - Developer</p>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div> <!-- end of swiper-slide -->--}}
{{--                        <!-- end of slide -->--}}

{{--                        <!-- Slide -->--}}
{{--                        <div class="swiper-slide">--}}
{{--                            <div class="card">--}}
{{--                                <img class="card-image" src="assets/images/testimonial-3.jpg" alt="alternative"/>--}}
{{--                                <div class="card-body">--}}
{{--                                    <p class="italic mb-3">I've been searching for a tool like Pavo for so long. I love the--}}
{{--                                        reports it generates and the amazing high accuracy</p>--}}
{{--                                    <p class="testimonial-author">Marsha Singer - Marketer</p>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div> <!-- end of swiper-slide -->--}}
{{--                        <!-- end of slide -->--}}

{{--                        <!-- Slide -->--}}
{{--                        <div class="swiper-slide">--}}
{{--                            <div class="card">--}}
{{--                                <img class="card-image" src="assets/images/testimonial-4.jpg" alt="alternative"/>--}}
{{--                                <div class="card-body">--}}
{{--                                    <p class="italic mb-3">We've been waiting for a powerful piece of software that can help--}}
{{--                                        businesses manage their marketing projects</p>--}}
{{--                                    <p class="testimonial-author">Tim Shaw - Designer</p>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div> <!-- end of swiper-slide -->--}}
{{--                        <!-- end of slide -->--}}

{{--                        <!-- Slide -->--}}
{{--                        <div class="swiper-slide">--}}
{{--                            <div class="card">--}}
{{--                                <img class="card-image" src="assets/images/testimonial-5.jpg" alt="alternative"/>--}}
{{--                                <div class="card-body">--}}
{{--                                    <p class="italic mb-3">Searching for a great prototyping and layout design app was--}}
{{--                                        difficult but thankfully I found app suite quickly</p>--}}
{{--                                    <p class="testimonial-author">Lindsay Spice - Marketer</p>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div> <!-- end of swiper-slide -->--}}
{{--                        <!-- end of slide -->--}}

{{--                        <!-- Slide -->--}}
{{--                        <div class="swiper-slide">--}}
{{--                            <div class="card">--}}
{{--                                <img class="card-image" src="assets/images/testimonial-6.jpg" alt="alternative"/>--}}
{{--                                <div class="card-body">--}}
{{--                                    <p class="italic mb-3">The app support team is amazing. They've helped me with some--}}
{{--                                        issues and I am so grateful to the entire team</p>--}}
{{--                                    <p class="testimonial-author">Ann Blake - Developer</p>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div> <!-- end of swiper-slide -->--}}
{{--                        <!-- end of slide -->--}}

{{--                    </div> <!-- end of swiper-wrapper -->--}}

{{--                    <!-- Add Arrows -->--}}
{{--                    <div class="swiper-button-next"></div>--}}
{{--                    <div class="swiper-button-prev"></div>--}}
{{--                    <!-- end of add arrows -->--}}

{{--                </div> <!-- end of swiper-container -->--}}
{{--            </div> <!-- end of slider-container -->--}}
{{--            <!-- end of card slider -->--}}

{{--        </div> <!-- end of container -->--}}
{{--    </div> <!-- end of slider-1 -->--}}
{{--    <!-- end of testimonials -->--}}


{{--    <!-- Pricing -->--}}
{{--    <div id="pricing" class="cards-2">--}}
{{--        <div class="absolute bottom-0 h-40 w-full bg-white"></div>--}}
{{--        <div class="container px-4 pb-px sm:px-8">--}}
{{--            <h2 class="mb-2.5 text-white lg:max-w-xl lg:mx-auto">Pricing options for all budgets</h2>--}}
{{--            <p class="mb-16 text-white lg:max-w-3xl lg:mx-auto"> Our pricing plans are setup in such a way that any user can--}}
{{--                start enjoying Pavo without worrying so much about costs. They are flexible and work for any type of--}}
{{--                industry </p>--}}

{{--            <!-- Card-->--}}
{{--            <div class="card">--}}
{{--                <div class="card-body">--}}
{{--                    <div class="card-title">STANDARD</div>--}}
{{--                    <div class="price"><span class="currency">$</span><span class="value">29</span></div>--}}
{{--                    <div class="frequency">monthly</div>--}}
{{--                    <p>This basic package covers the marketing needs of small startups</p>--}}
{{--                    <ul class="list mb-7 space-y-2 text-left">--}}
{{--                        <li class="flex">--}}
{{--                            <i class="fas fa-chevron-right"></i>--}}
{{--                            <div>List building and relations</div>--}}
{{--                        </li>--}}
{{--                        <li class="flex">--}}
{{--                            <i class="fas fa-chevron-right"></i>--}}
{{--                            <div>Seamless platform integration</div>--}}
{{--                        </li>--}}
{{--                        <li class="flex">--}}
{{--                            <i class="fas fa-chevron-right"></i>--}}
{{--                            <div>Great performance on devices</div>--}}
{{--                        </li>--}}
{{--                        <li class="flex">--}}
{{--                            <i class="fas fa-chevron-right"></i>--}}
{{--                            <div>Community support and videos</div>--}}
{{--                        </li>--}}
{{--                    </ul>--}}
{{--                    <div class="button-wrapper">--}}
{{--                        <a class="btn-solid-reg page-scroll" href="#download">Download</a>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div> <!-- end of card -->--}}
{{--            <!-- end of card -->--}}

{{--            <!-- Card-->--}}
{{--            <div class="card">--}}
{{--                <div class="card-body">--}}
{{--                    <div class="card-title">ADVANCED</div>--}}
{{--                    <div class="price"><span class="currency">$</span><span class="value">39</span></div>--}}
{{--                    <div class="frequency">monthly</div>--}}
{{--                    <p>This is a more advanced package suited for medium companies</p>--}}
{{--                    <ul class="list mb-7 space-y-2 text-left">--}}
{{--                        <li class="flex">--}}
{{--                            <i class="fas fa-chevron-right"></i>--}}
{{--                            <div>List building and relations</div>--}}
{{--                        </li>--}}
{{--                        <li class="flex">--}}
{{--                            <i class="fas fa-chevron-right"></i>--}}
{{--                            <div>Seamless platform integration</div>--}}
{{--                        </li>--}}
{{--                        <li class="flex">--}}
{{--                            <i class="fas fa-chevron-right"></i>--}}
{{--                            <div>Great performance on devices</div>--}}
{{--                        </li>--}}
{{--                        <li class="flex">--}}
{{--                            <i class="fas fa-chevron-right"></i>--}}
{{--                            <div>Community support and videos</div>--}}
{{--                        </li>--}}
{{--                    </ul>--}}
{{--                    <div class="button-wrapper">--}}
{{--                        <a class="btn-solid-reg page-scroll" href="#download">Download</a>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div> <!-- end of card -->--}}
{{--            <!-- end of card -->--}}

{{--            <!-- Card-->--}}
{{--            <div class="card">--}}
{{--                <div class="card-body">--}}
{{--                    <div class="card-title">COMPLETE</div>--}}
{{--                    <div class="price"><span class="currency">$</span><span class="value">49</span></div>--}}
{{--                    <div class="frequency">monthly</div>--}}
{{--                    <p>This is a comprehensive package designed for big organizations</p>--}}
{{--                    <ul class="list mb-7 text-left space-y-2">--}}
{{--                        <li class="flex">--}}
{{--                            <i class="fas fa-chevron-right"></i>--}}
{{--                            <div>List building and relations</div>--}}
{{--                        </li>--}}
{{--                        <li class="flex">--}}
{{--                            <i class="fas fa-chevron-right"></i>--}}
{{--                            <div>Seamless platform integration</div>--}}
{{--                        </li>--}}
{{--                        <li class="flex">--}}
{{--                            <i class="fas fa-chevron-right"></i>--}}
{{--                            <div>Great performance on devices</div>--}}
{{--                        </li>--}}
{{--                        <li class="flex">--}}
{{--                            <i class="fas fa-chevron-right"></i>--}}
{{--                            <div>Community support and videos</div>--}}
{{--                        </li>--}}
{{--                    </ul>--}}
{{--                    <div class="button-wrapper">--}}
{{--                        <a class="btn-solid-reg page-scroll" href="#download">Download</a>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div> <!-- end of card -->--}}
{{--            <!-- end of card -->--}}

{{--        </div> <!-- end of container -->--}}
{{--    </div> <!-- end of cards-2 -->--}}
{{--    <!-- end of pricing -->--}}


{{--    <!-- Conclusion -->--}}
{{--    <div id="download" class="basic-5">--}}
{{--        <div class="container px-4 sm:px-8 lg:grid lg:grid-cols-2">--}}
{{--            <div class="mb-16 lg:mb-0">--}}
{{--                <img src="assets/images/conclusion-smartphone.png" alt="alternative"/>--}}
{{--            </div>--}}
{{--            <div class="lg:mt-24 xl:mt-44 xl:ml-12">--}}
{{--                <p class="mb-9 text-gray-800 text-3xl leading-10">Team management mobile applications don’t get much better--}}
{{--                    than Pavo. Download it today</p>--}}
{{--                <a class="btn-solid-lg" href="#your-link"><i class="fab fa-apple"></i>Download</a>--}}
{{--                <a class="btn-solid-lg secondary" href="#your-link"><i class="fab fa-google-play"></i>Download</a>--}}
{{--            </div>--}}
{{--        </div> <!-- end of container -->--}}
{{--    </div> <!-- end of basic-5 -->--}}
{{--    <!-- end of conclusion -->--}}
    <!-- Footer -->
    <x-footer/>
    <!-- end of footer -->

@endsection
