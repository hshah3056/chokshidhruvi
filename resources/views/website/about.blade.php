@extends('website.template.layout')

@section('page-title', 'Home')

@section('page-content')

    <section class="page-title-section bg-img cover-background" data-overlay-dark="6" data-background="/website-assets/img/bg/bg-03.jpg" style="background-image: url(/website-assets/img/bg/bg-03.jpg);">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h1>About Me</h1>
                </div>
                <div class="col-md-12">
                    <div class="breadcrumb">
                        <span class="left-dot"></span>
                        <span class="right-dot"></span>
                        <ul>
                            <li><a href="index.html">Home</a></li>
                            <li><a href="#!">About Me</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="bg-transparent border-width-2 border-solid border-secondary p-3 d-sm-inline-block rounded-circle position-absolute bottom-10 left-5 ani-top-bottom d-none z-index-3"></div>
        <div class="bg-secondary p-1-6 d-lg-block rounded-circle position-absolute top-25 right-25 ani-top-bottom d-none z-index-3"></div>
        <div class="bg-white p-2 d-sm-inline-block rounded-circle position-absolute top-40 left-25 ani-left-right d-none z-index-3"></div>
    </section>

    <section>
        <div class="container">
            <div class="row">
                <div class="col-lg-5 mb-2-5 mb-lg-0">
                    <div class="position-relative">
                        <div class="row">
                            <div class="col-12">
                                <img src="/website-assets/img/content/dhruvi-about.jpeg" class="border-radius-10" alt="">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-7" >
                    <div class="ps-lg-2-2 ps-xl-6">
                        <h2 class="h4 mb-1-6 font-weight-400">Welcome to my world of Nutrition! I'm DHRUVI,A PASSIONATE, QUALIFIED CLINICAL DIETITIAN AND NUTRITION COUNSELLOR.
                            {{--<span class="fw-bolder">I'm DHRUVI,</span>--}}

                        </h2>
                        <p class="display-sm-28 mb-1-9" style="text-align: justify">Like many, I struggled with my weight and felt trapped in my own body. I tried every Fad diet out there, but it wasn't until I delved into the science behind nutrition and earned my BSc, post-grad degree in Clinical Diet, and with various certifications, I discovered the truth about weight management.</p>
                        <p class="display-sm-28 mb-1-9" style="text-align: justify"> Now, as a Qualified Nutritionist I'm a firm believer that true health isn't about deprivation or obsession; it's about making lasting changes and finding a balance.</p>
                        <p class="display-sm-28 mb-1-9" style="text-align: justify"> With my expertise, I'll help you make informed choices and avoid the maze of nutri-nonsense, fads, and cons that can hinder your progress. Together, we'll develop a personalized Nutrition Framework that fits your unique needs, preferences, and lifestyle. I'll guide you through dietary advice and lifestyle modifications with an integrated approach that combines nutrition, coaching, and support.</p>
                    </div>
                </div>
                <div class="col-lg-12" style="text-align: justify">

                    <p class="display-sm-28 mb-1-9">
                        Let's break free from diet culture and discover a new way to love your body with food & feel confident in your own skin. Say goodbye to the struggle and hello to a healthier, happier you. Let's write the next chapter of your story together!
                    </p>
                </div>
                        {{--<div class="about-us mb-1-9 mt-n1-9 row border-bottom pb-1-9">--}}
                            {{--<div class="col-md-6 mt-1-9">--}}
                                {{--<div class="d-flex">--}}
                                    {{--<div class="flex-shrink-0">--}}
                                        {{--<div class="about-icon">--}}
                                            {{--<img src="/website-assets/img/icons/icon-13.png" alt="...">--}}
                                        {{--</div>--}}
                                    {{--</div>--}}
                                    {{--<div class="flex-grow-1 ms-4">--}}
                                        {{--<h4>Balance Body &amp; Mind</h4>--}}
                                        {{--<p class="mb-0 display-sm-28">Our nutrition team love the benefits of exercise and healthy food.</p>--}}
                                    {{--</div>--}}
                                {{--</div>--}}
                            {{--</div>--}}
                            {{--<div class="col-md-6 mt-1-9">--}}
                                {{--<div class="d-flex">--}}
                                    {{--<div class="flex-shrink-0">--}}
                                        {{--<div class="about-icon">--}}
                                            {{--<img src="/website-assets/img/icons/icon-14.png" alt="...">--}}
                                        {{--</div>--}}
                                    {{--</div>--}}
                                    {{--<div class="flex-grow-1 ms-4">--}}
                                        {{--<h4>Fitness &amp; Performance</h4>--}}
                                        {{--<p class="mb-0 display-sm-28">Our nutrition team love the benefits of exercise and healthy food.</p>--}}
                                    {{--</div>--}}
                                {{--</div>--}}
                            {{--</div>--}}
                        {{--</div>--}}
                        {{--<div class="d-flex align-items-center">--}}
                            {{--<div class="flex-shrink-0">--}}
                                {{--<img src="/website-assets/img/avatar/avatar-01.jpg" class="rounded w-60px" alt="...">--}}
                                {{--<i class="fas fa-phone-alt bg-secondary service-icon"></i>--}}
                            {{--</div>--}}
                            {{--<div class="flex-grow-1 ms-3">--}}
                                {{--<p class="text-secondary mb-1">We grow with love</p>--}}
                                {{--<h4 class="text-primary mb-0 title-font">Our experts give best health tips</h4>--}}
                            {{--</div>--}}
                        {{--</div>--}}
                    </div>
                </div>
            </div>
        </div>
        <div class="d-inline-block p-3 bg-secondary position-absolute rounded-circle top-20 right-5 ani-left-right"></div>
    </section>

    <section>
        <div class="container">
            <div class="section-heading">
                <span class="text-secondary title-font display-25 display-md-23 d-block mb-1">WHAT TO EXPECT? </span>
                {{--<h2>It's easy to<span class="fw-bolder"> start today!</span></h2>--}}
                {{--<p class="mb-0 w-md-80 w-lg-70 w-xl-50 mx-auto">We connect buyers and sellers of natural, organic, environmentally sound products. We find the best suppliers and makers of natural and organic products.</p>--}}
            </div>
            <div class="row process-number-counter">
                <div class="col-sm-6 col-lg-3 mt-1-9">
                    <div class="process-style1">
                        <div class="process-image">
                            <img class="rounded-circle" src="/website-assets/img/about/process-01.jpg" alt="...">
                            <div class="process-num title-font"></div>
                        </div>
                        <h4>Nutrition service</h4>
                        <p class="mb-0 w-md-95 w-lg-85 mx-auto">1:1 Nutritional Therapy and Personalized Meal plans</p>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-3 mt-1-9">
                    <div class="process-style1">
                        <div class="process-image">
                            <img class="rounded-circle" src="/website-assets/img/about/process-02.jpg" alt="...">
                            <div class="process-num title-font"></div>
                        </div>
                        <h4>Exercise Guide</h4>
                        <p class="mb-0 w-md-95 w-lg-85 mx-auto">Personalized Fitness Plans to meet your fitness goals.</p>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-3 mt-1-9">
                    <div class="process-style1">
                        <div class="process-image">
                            <img class="rounded-circle" src="/website-assets/img/about/motivation_small.png" alt="...">
                            <div class="process-num title-font"></div>
                        </div>
                        <h5>Behaviour Modification Strategies</h5>
                        <p class="mb-0 w-md-95 w-lg-85 mx-auto">Strategies to overcome unhealthy eating caused by emotions, stress, or any health condition </p>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-3 mt-1-9">
                    <div class="process-style1 last-arrow">
                        <div class="process-image">
                            <img class="rounded-circle" src="/website-assets/img/about/behaviour_small.jpg" alt="...">
                            <div class="process-num title-font"></div>
                        </div>
                        <h4>Support & Motivation</h4>
                        <p class="mb-0 w-md-95 w-lg-85 mx-auto">Regular Progress Monitoring & Follow up sessions</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
