@extends('website.template.layout')

@section('page-title', 'Home')

@section('page-content')

    <section class="page-title-section bg-img cover-background" data-overlay-dark="6" data-background="/website-assets/img/bg/bg-03.jpg" style="background-image: url(/website-assets/img/bg/bg-03.jpg);">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h1>Our Packages</h1>
                </div>
                <div class="col-md-12">
                    <div class="breadcrumb">
                        <span class="left-dot"></span>
                        <span class="right-dot"></span>
                        <ul>
                            <li><a href="javascript:void(0);">Home</a></li>
                            <li><a href="javascript:void(0);">Our Packages</a></li>
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
            <div class="section-heading">
                {{--<span class="text-secondary title-font display-25 display-md-23 d-block mb-1">Our pricing plans</span>--}}
                <h2>OUR NUTRITION <span class="fw-bolder"> PACKAGES</span></h2>
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
                                <li>Personalised Nutritional Prescription (Meal plans)</li>
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
                                <li>Personalised Nutritional Prescription (Meal plans)</li>
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

@endsection

