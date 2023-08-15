@extends('website.template.layout')

@section('page-title', 'Home')

@section('page-content')

    @section('import-css')
    <style>
        .owl-carousel.owl-drag .owl-item {
            height: 600px !important;
        }
    </style>
    @endsection

    <section class="bg-img cover-background pt-6 pb-9 pt-sm-10 pb-sm-14 py-md-16 py-lg-20 py-xxl-23" data-background="/website-assets/img/banner/home-banner.jpg" style="background-image: url(/website-assets/img/banner/home-banner.jpg);">
        <div class="container pb-40">
            <div class="row align-items-center">
                <!-- Banner text -->
                <div class="col-md-10 col-lg-7 py-5">
                    <h1 class="display-17 display-sm-11 display-md-9 display-lg-8 display-xl-4 mb-lg-3 letter-spacing-4 title-font text-green font-weight-900">Welcome to a World where Nutrition is Simple and Stress-free.</h1>
                    <p class="display-25 display-lg-22 text-green mb-md-4">Let me be your guide in decluttering the overwhelming maze of nutritional information out there.</p>
                    <a href="{{route('website-contact')}}" class="butn white-hover"><span>Get Started Now</span></a>
                </div>
                <!-- Banner text -->
            </div>
        </div>
        <img src="/website-assets/img/content/bottom-bg-shape.png" class="position-absolute bottom-0 z-index-3" alt="..." style="width: -webkit-fill-available;">
        <img src="/website-assets/img/content/animation1.png" class="position-absolute bottom-0 z-index-3 right-25 opacity4 d-none d-md-block" alt="...">
        <img src="/website-assets/img/content/animation2.png" class="position-absolute left-10 top-5 ani-top-bottom z-index-3 opacity6 d-none d-md-block" alt="...">
        <img src="/website-assets/img/content/animation3.png" class="position-absolute bottom-5 ani-left-right z-index-3 opacity1 d-none d-md-block" alt="...">
    </section>

<!-- CLIENTS
<!-- ABOUTUS
================================================== -->
<section class="pt-0">
    <div class="container">
        <div class="row align-items-xl-center border-top pt-6 pt-sm-8 pt-lg-10 pt-xl-15 border-color-extra-light-gray">
            <div class="col-lg-6 mb-1-9 mb-lg-0">
                <div class="position-relative text-end">
                    <div class="about-block d-inline-block ps-1-9 ps-sm-2-9">
                        <img src="/website-assets/img/content/about-01.jpg" class="rounded-circle z-index-1 position-relative" alt="...">
                    </div>
                    <div class="bg-primary p-6 rounded-circle position-absolute bottom-10 right-5 ani-top-bottom"></div>
                    {{--<img src="/website-assets/img/content/about-06.jpg" class="position-absolute top-10 left-n5 left-lg-n10 rounded-circle z-index-2 d-none d-sm-block" alt="...">--}}
                </div>
            </div>
            <div class="col-lg-6">
                <div class="ps-xxl-2-3">
                    <h6 class="display-20 display-sm-15 font-weight-400 mb-3">HI, I AM DHRUVI, <span class="fw-bolder">NUTRIPRENEUR, A</span> <span class="fw-bolder">QUALIFIED CLINICAL DIETITIAN</span> & <span class="fw-bolder">NUTRITION COUNSELLOR. </span></h6>
                    <p class="text-secondary lead title-font">Welcome to my world of Nutrition!</p>
                    <p>
                        I believe in <b>Rise above with balanced self-care</b>. Let's reconnect with your wellness through food, which is the information we use to communicate with our bodies. As your Personal Nutritionist, I am here to help you cut through the noise and navigate your way to genuine, healthful habits.
                    </p>
                    <div class="row border-top border-bottom py-4 mb-1-9">
                        <div class="col-sm-6 mb-3 mb-sm-0">
                            <div class="d-flex align-items-center">
                                <div class="flex-shrink-0">
                                    <img src="/website-assets/img/icons/icon-18.png" alt="...">
                                </div>
                                <div class="flex-grow-1 ms-3">
                                    <h4 class="mb-0 h5">Personalized Nutrition Plan</h4>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="d-flex align-items-center">
                                <div class="flex-shrink-0">
                                    <img src="/website-assets/img/icons/icon-19.png" alt="...">
                                </div>
                                <div class="flex-grow-1 ms-3">
                                    <h4 class="mb-0 h5">Personalized Exercise Plan</h4>
                                </div>
                            </div>
                        </div>
                    </div>
                    <a href="{{route('website-about')}}" class="butn secondary">Read More</a>
                </div>
            </div>
        </div>
    </div>
    <div class="d-inline-block p-3 bg-secondary position-absolute rounded-circle top-20 right-5 ani-left-right"></div>
</section>

<section class="bg-transparent overflow-visible pb-9">
    <div class="container">
        <div class="row mt-n1-9">
            <div class="col-md-6 col-xxl-3 mt-1-9">
                <div class="bg-white p-2-3 h-100 card-style7">
                    <div class="d-flex align-items-center justify-content-between mb-4">
                        <div>
                            <img src="/website-assets/img/icons/icon-30.png" alt="...">
                        </div>
                        <div>
                            <h3 class="title-font mb-0 font-weight-800 display-10">01</h3>
                        </div>
                    </div>
                    <h4 class="mb-0 text-primary">Body Composition Analysis</h4>
                </div>
            </div>
            <div class="col-md-6 col-xxl-3 mt-1-9">
                <div class="bg-white p-2-3 h-100 card-style7">
                    <div class="d-flex align-items-center justify-content-between mb-4">
                        <div>
                            <img src="/website-assets/img/icons/icon-27.png" alt="...">
                        </div>
                        <div>
                            <h3 class="title-font mb-0 font-weight-800 display-10">02</h3>
                        </div>
                    </div>
                    <h4 class="mb-0 text-primary">Personalized Nutrition Strategies</h4>
                </div>
            </div>
            <div class="col-md-6 col-xxl-3 mt-1-9">
                <div class="bg-white p-2-3 h-100 card-style7">
                    <div class="d-flex align-items-center justify-content-between mb-4">
                        <div>
                            <img src="/website-assets/img/icons/icon-28.png" alt="...">
                        </div>
                        <div>
                            <h3 class="title-font mb-0 font-weight-800 display-10">03</h3>
                        </div>
                    </div>
                    <h4 class="mb-0 text-primary">1:1 Support</h4>
                </div>
            </div>
            <div class="col-md-6 col-xxl-3 mt-1-9">
                <div class="bg-white p-2-3 h-100 card-style7">
                    <div class="d-flex align-items-center justify-content-between mb-4">
                        <div>
                            <img src="/website-assets/img/icons/icon-29.png" alt="...">
                        </div>
                        <div>
                            <h3 class="title-font mb-0 font-weight-800 display-10">04</h3>
                        </div>
                    </div>
                    <h4 class="mb-0 text-primary">Fitness Plans</h4>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- SERVICE
================================================== -->
<section class="bg-light">
    <div class="container">
        <div class="section-heading">
                <span class="text-secondary title-font display-25 display-md-23 d-block mb-1">
                    “We Offer Nutrition For All Lifestyles"
                </span>
            {{--<h2>Provide best<span class="fw-bolder"> services</span></h2>--}}
            {{--<p class="mb-0 w-md-80 w-lg-70 w-xl-50 mx-auto">We connect buyers and sellers of natural, organic, environmentally sound products. We find the best suppliers and makers of natural and organic products.</p>--}}
        </div>
        <div class="service-carousel owl-carousel owl-theme">
            <div class="card card-style1 border-0 border-radius-10 mx-2 mx-sm-4 my-3">
                <img class="border-top-radius-10" src="/website-assets/img/service/Weight_loss_or_gain.JPG" alt="...">
                <div class="card-body border-bottom-radius-10">
                    <div class="icon-box">
                        <img src="/website-assets/img/icons/diet.png" alt="...">
                    </div>
                    <h3 class="h4 mb-3"><a href="javascript:void(0);">WEIGHT LOSS /GAIN</a></h3>
                    <p>Achieve your desired body composition with our Weight Loss / Gain Nutrition Packages that target both muscle mass and fat loss. Get in shape and feel your best!</p>
                    {{--<a href="weight-loss-programs.html" class="link-btn">Read More</a>--}}
                </div>
            </div>
            <div class="card card-style1 border-0 border-radius-10 mx-2 mx-sm-4 my-4">
                <img class="border-top-radius-10" src="/website-assets/img/service/Clinical_conditions_or_gut_issues.jpg">
                <div class="card-body border-bottom-radius-10">
                    <div class="icon-box">
                        <img src="/website-assets/img/icons/clinical-condition.png" alt="...">
                    </div>
                    <h3 class="h4 mb-3"><a href="javascript:void(0);">CLINICAL CONDITIONS OR GUT ISSUES</a></h3>
                    <p>Our personalized Nutrition Packages cater to a variety of clinical conditions such as Diabetes, Blood Pressure , Thyroid , PCOS , Fatty Liver and Gut Issues to help improve your health and allevitae symptoms.</p>
                    {{--<a href="balance-body-mind.html" class="link-btn">Read More</a>--}}
                </div>
            </div>
            <div class="card card-style1 border-0 border-radius-10 mx-2 mx-sm-4 my-4">
                <img class="border-top-radius-10" src="/website-assets/img/service/for_hair_and_skin.png" alt="...">
                <div class="card-body border-bottom-radius-10">
                    <div class="icon-box">
                        <img src="/website-assets/img/icons/skin-care.png" alt="...">
                    </div>
                    <h3 class="h4 mb-3"><a href="javascript:void(0);">FOR SKIN AND HAIR</a></h3>
                    <p>For a glowing complexion and luscious locks, try our specialized Nutrition Packages that cater to your skin and hair needs, and boost your confidence.</p>
                    {{--<a href="personalized-nutrition.html" class="link-btn">Read More</a>--}}
                </div>
            </div>
            <div class="card card-style1 border-0 border-radius-10 mx-2 mx-sm-4 my-4">
                <img class="border-top-radius-10" src="/website-assets/img/service/Coporate_wellness.jpg" alt="...">
                <div class="card-body border-bottom-radius-10">
                    <div class="icon-box">
                        <img src="/website-assets/img/icons/coworking.png" alt="...">
                    </div>
                    <h3 class="h4 mb-3"><a href="javascript:void(0);">CORPORATE WELLNESS</a></h3>
                    <p>Improve productivity and boost morale in your workplace with our Corporate Wellness Nutrition Packages designed for working professionals and busy business people.</p>
                    {{--<a href="fitness-performance.html" class="link-btn">Read More</a>--}}
                </div>
            </div>
            <div class="card card-style1 border-0 border-radius-10 mx-2 mx-sm-4 my-4">
                <img class="border-top-radius-10" src="/website-assets/img/service/eldery_nutrition.jpg" alt="...">
                <div class="card-body border-bottom-radius-10">
                    <div class="icon-box">
                        <img src="/website-assets/img/icons/old-age.png" alt="...">
                    </div>
                    <h3 class="h4 mb-3"><a href="javascript:void(0);">HOME-MAKERS/ELDERLY/OLD AGE PEOPLE</a></h3>
                    <p>Our Tailored Nutrition Packages for Home - makers and Elderly Individuals offer delicious, nutrient-dense options that cater
                        to your unique dietary needs and preferences.</p>
                    {{--<a href="healthy-daily-life.html" class="link-btn">Read More</a>--}}
                </div>
            </div>
            <div class="card card-style1 border-0 border-radius-10 mx-2 mx-sm-4 my-4">
                <img class="border-top-radius-10" src="/website-assets/img/service/kids_nutrition.jpg" alt="...">
                <div class="card-body border-bottom-radius-10">
                    <div class="icon-box">
                        <img src="/website-assets/img/icons/baby-food.png" alt="...">
                    </div>
                    <h3 class="h4 mb-3"><a href="javascript:void(0);">INFANT/ KID’s NUTRITION</a></h3>
                    <p>Give your little ones the best start in life with our Nutrition Packages, packed with vitamins and minerals to support healthy growth and development.</p>
                    {{--<a href="support-motivation.html" class="link-btn">Read More</a>--}}
                </div>
            </div>
            <div class="card card-style1 border-0 border-radius-10 mx-2 mx-sm-4 my-4">
                <img class="border-top-radius-10" src="/website-assets/img/service/pregnancy_nutrition.jpg" alt="...">
                <div class="card-body border-bottom-radius-10">
                    <div class="icon-box">
                        <img src="/website-assets/img/icons/post_pregnancy.png" alt="...">
                    </div>
                    <h3 class="h4 mb-3"><a href="javascript:void(0);">PREGNANCY AND POST PARTUM NUTRITION</a></h3>
                    <p>Nourish your body during and after pregnancy with our Nutrition Packages, crafted to support a healthy and happy journey into motherhood.</p>
                    {{--<a href="support-motivation.html" class="link-btn">Read More</a>--}}
                </div>
            </div>
            <div class="card card-style1 border-0 border-radius-10 mx-2 mx-sm-4 my-4">
                <img class="border-top-radius-10" src="/website-assets/img/service/couple_nutrition.jpg" alt="...">
                <div class="card-body border-bottom-radius-10">
                    <div class="icon-box">
                        <img src="/website-assets/img/icons/yoga.png" alt="...">
                    </div>
                    <h3 class="h4 mb-3"><a href="javascript:void(0);">"WEDDING WELLNESS “or "COUPLE’S NUTRITION"</a></h3>
                    <p>Get ready for your big day with our Wedding/ Couple’s Nutrition Packages that will help you look and feel your best on
                        your special day.</p>
                    {{--<a href="support-motivation.html" class="link-btn">Read More</a>--}}
                </div>
            </div>
        </div>
    </div>
    <div class="bg-secondary p-2-2 rounded-circle position-absolute bottom-10 left-5 d-none d-lg-block"></div>
    <div class="bg-primary p-3 rounded-circle position-absolute bottom-10 left-5 ani-top-bottom d-none d-lg-block"></div>
    <div class="text-center">
        <a href="{{route('website-packages')}}" class="butn secondary">View Our Packages</a>
    </div>
</section>

<section class="bg-img cover-background extra-section" data-overlay-dark="7" data-background="/website-assets/img/bg/bg-02.jpg" style="background-image: url(/website-assets/img/bg/bg-02.jpg);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-6 text-center">
                <span class="d-block mb-3 text-secondary title-font display-25 display-md-23">NUTRITION IN SYNC.</span>
                {{--<h2 class="mb-1-9 mb-lg-2-3 display-20 display-sm-15 display-xl-9 display-xxl-6 font-weight-400 text-white">Healthy and tasty foods with<span class="fw-bolder"> natural ingredients</span></h2>--}}
                <a href="{{route('website-contact')}}" class="butn secondary">Contact Us</a>
            </div>
        </div>
        {{--<div class="position-absolute top-50 start-50 translate-middle">--}}
            {{--<h3 class="mb-0 title-font">Habitro</h3>--}}
        {{--</div>--}}
    </div>
</section>


<section>
    <div class="container">
        <div class="section-heading">
            {{--<span class="text-secondary title-font display-25 display-md-23 d-block mb-1">Our pricing plans</span>--}}
            <h2><span class="fw-bolder">OUR NUTRITION PACKAGES</span></h2>
            {{--<p class="mb-0 w-md-80 w-lg-70 w-xl-50 mx-auto">We connect buyers and sellers of natural, organic, environmentally sound products. We find the best suppliers and makers of natural and organic products.</p>--}}
        </div>
        <div class="row g-xl-5 mt-n1-9">
            <div class="col-md-6 col-lg-4 mt-1-9">
                <div class="card card-style2 border-radius-10">
                    <div class="card-header bg-primary">
                        <h3 class="title-font text-secondary  mb-0 h4">1 MONTH</h3>
                        <div class="d-flex align-items-start text-white justify-content-center mb-0">
                            <span class="mt-sm-2 fw-bolder display-30 display-sm-28 display-lg-26 me-1">₹</span>
                            <h4 class="display-3 mb-0 text-white font-weight-600">3000</h4>
                            <span class="align-self-end fw-bolder display-30 display-sm-28"></span>
                        </div>
                    </div>
                    <div class="card-body">
                        <ul class="list-style1">
                            <li>1:1 Nutritional Therapy Session</li>
                            <li>Behavioural Modification Strategies & Nutrition Resources</li>
                            <li>Personalised Nutritional Prescription (Meal Plans)</li>
                            <li>Exercise Guide</li>
                            <li>4 Sessions with Constant Support & Follow ups</li>
                        </ul>
                        {{--<div class="text-center">--}}
                        {{--<a class="butn secondary" href="contact.html">Choose Plan</a>--}}
                        {{--</div>--}}
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-4 mt-1-9">
                <div class="card card-style2 border-radius-10">
                    <div class="card-header bg-primary">
                        <h3 class="title-font text-secondary mb-0 h4">3 MONTH</h3>
                        <div class="d-flex align-items-start text-white justify-content-center mb-0">
                            <span class="mt-sm-2 fw-bolder display-30 display-sm-28 display-lg-26 me-1">₹</span>
                            <h4 class="display-3 mb-0 font-weight-600 text-white">8000</h4>
                            {{--<span class="align-self-end fw-bolder display-30 display-sm-28">/ month</span>--}}
                        </div>
                        {{--<span class="card-label">Best</span>--}}
                    </div>
                    <div class="card-body">
                        <ul class="list-style1">
                            <li>1:1 Nutritional Therapy Session</li>
                            <li>Behavioural Modification Strategies & Nutrition Resources</li>
                            <li>Personalised Nutritional Prescription (Meal Plans)</li>
                            <li>Exercise Guide</li>
                            <li>12 Sessions with Constant Support & Follow ups </li>
                        </ul>
                        {{--<div class="text-center">--}}
                        {{--<a class="butn" href="contact.html">Choose Plan</a>--}}
                        {{--</div>--}}
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-4 mt-1-9">
                <div class="card card-style2 border-radius-10">
                    <div class="card-header bg-primary">
                        <h3 class="title-font text-secondary mb-0 h4">6 MONTH</h3>
                        <div class="d-flex align-items-start text-white justify-content-center mb-0">
                            <span class="mt-sm-2 fw-bolder display-30 display-sm-28 display-lg-26 me-1">₹</span>
                            <h4 class="display-3 mb-0 font-weight-600 text-white">15,000</h4>
                            {{--<span class="align-self-end fw-bolder display-30 display-sm-28">/ month</span>--}}
                        </div>
                    </div>
                    <div class="card-body">
                        <ul class="list-style1">
                            <li>1:1 Nutritional Therapy Session</li>
                            <li>Behavioural Modification Strategies & Nutrition Resources</li>
                            <li>Personalised Nutritional Prescription (Meal Plans)</li>
                            <li>Exercise Guide</li>
                            <li>24 Sessions with Constant Support & Follow ups</li>
                        </ul>
                        {{--<div class="text-center">--}}
                        {{--<a class="butn secondary" href="contact.html">Choose Plan</a>--}}
                        {{--</div>--}}
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-4 mt-1-9">
                <div class="card card-style2 border-radius-10">
                    <div class="card-header bg-primary">
                        <h3 class="title-font text-secondary mb-0 h4">YEARLY PACKAGE</h3>
                        <div class="d-flex align-items-start text-white justify-content-center mb-0">
                            <span class="mt-sm-2 fw-bolder display-30 display-sm-28 display-lg-26 me-1">₹</span>
                            <h4 class="display-3 mb-0 font-weight-600 text-white">28,000</h4>
                            {{--<span class="align-self-end fw-bolder display-30 display-sm-28">/ month</span>--}}
                        </div>
                    </div>
                    <div class="card-body">
                        <ul class="list-style1">
                            <li>1:1 Nutritional Therapy Session</li>
                            <li>Behavioural Modification Strategies & Nutrition Resources</li>
                            <li>Personalised Nutritional Prescription (Meal Plans)</li>
                            <li>Exercise Guide</li>
                            <li>48 Sessions with Constant Support & Follow ups</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="bg-primary p-8 p-lg-9 rounded-circle position-absolute top-5 right-n5 ani-left-right d-none d-lg-inline-block"></div>
    <div class="bg-transparent border-width-2 border-solid border-secondary p-8 p-lg-9 d-lg-inline-block rounded-circle position-absolute top-10 right-n5 z-index-1 ani-top-bottom d-none"></div>
</section>

<!-- WHY CHOOSE US
================================================== -->
<section class="bg-img cover-background" data-overlay-dark="8" data-background="/website-assets/img/bg/bg-01.jpg">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 mb-1-9 mb-lg-0">
                <div class="pe-lg-1-6 pe-xl-6">
                    <div class="section-heading text-start mb-4 mb-md-5">
                        <span class="text-secondary title-font display-25 display-md-23 d-block mb-1">FREQUENTLY ASKED QUESTIONS</span>
                    </div>
                    <div class="row mb-1-6 mb-sm-1-9">
                        <div class="col-12 mb-1-6 mb-sm-1-9">
                            {{--<img src="/website-assets/img/content/why-us.jpg" class="rounded" alt="...">--}}
                        </div>
                        <div class="col-sm-6 mb-3 mb-sm-0">
                            <ul class="list-style6">
                                <li>Nutrition Assessment</li>
                                <li>Healthy Lifestyle Habits</li>
                                <li>Mental Wellness Support</li>
                            </ul>
                        </div>
                        <div class="col-sm-6">
                            <ul class="list-style6">
                                <li>Customized Meal Plans</li>
                                <li>Physical Activity Plans</li>
                                <li>Tasty and Nutritious Delights!</li>
                            </ul>
                        </div>
                    </div>
                    <a href="javascript:void(0);" class="butn secondary">Learn More</a>
                </div>
            </div>
            <div class="col-lg-6">
                <div>
                    <div class="accordion" id="accordion">
                        <div class="card">
                            <h2 class="card-header" id="headingOne">
                                <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">What should I expect during a nutrition consultation?</button>
                            </h2>
                            <div id="collapseOne" class="accordion-collapse collapse" aria-labelledby="headingOne" data-bs-parent="#accordion">
                                <div class="card-body">
                                    During a nutrition consultation, we will discuss your current habits and health concerns to
                                    provide personalized recommendations for improving your meal plan and meeting your
                                    health goals. We will try to make you aware of the essential nutrients to be taken, food
                                    combinations and importance of different food groups to be included in your healthy
                                    routine by making aware about the rightful knowledge in Nutrition counselling.
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <h2 class="card-header" id="headingTwo">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">What kind of support or follow-up will I receive between appointments?</button>
                            </h2>
                            <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordion">
                                <div class="card-body">
                                    We provide ongoing support and follow-up between appointments to help you stay on track
                                    and reach your goals. This may include regular check-ins via phone/messages/ video calls,
                                    access to our resources and materials, and assistance with meal planning and grocery
                                    shopping. We want to ensure that you feel supported throughout your journey towards
                                    better health and are always available to answer any questions or concerns you may have.
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <h2 class="card-header" id="headingThree">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="true" aria-controls="collapseThree">How long do i need to follow the advice?</button>
                            </h2>
                            <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordion">
                                <div class="card-body">
                                    The length of time you will need to follow the nutrition advice will depend on your individual
                                    goals and needs. We will work with you to create a plan that is tailored to your specific
                                    situation, taking into account factors such as your current health status, lifestyle, and dietary
                                    preferences. It may take 3 months, 6 months or 1 year depending on your goals but our goal
                                    is to provide you with sustainable and enjoyable eating habits that you can maintain for the
                                    long term by imparting knowledge to you about holistic wellness.
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <h2 class="card-header" id="headingFour">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="true" aria-controls="collapseFour">Is each month same?</button>
                            </h2>
                            <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour" data-bs-parent="#accordion">
                                <div class="card-body">
                                    No, each month brings you new challenges, improvisation & opportunities to progress. With
                                    a constantly updated meal plan, changes in your exercise routine and emphasis on growth
                                    and maintenance, every weeks and months would be more mindful and exciting about your
                                    health journey.
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="d-none d-xl-block p-3 bg-secondary position-absolute rounded-circle top-20 right-5 ani-top-bottom z-index-3"></div>
</section>

@endsection
