@extends('website.template.layout')

@section('page-title', 'Get In Touch')

@section('page-css')
    <style>
        .contact-social-icons li a:hover {
            background: #5f9359;
        }
    </style>
@endsection
@section('page-content')
    <section class="page-title-section bg-img cover-background" data-overlay-dark="6" data-background="/website-assets/img/bg/bread_crumb_bg.jpg" style="background-image: url(/website-assets/img/bg/bread_crumb_bg.jpg);">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h1>Get A Quote</h1>
                </div>
                <div class="col-md-12">
                    <div class="breadcrumb">
                        <span class="left-dot"></span>
                        <span class="right-dot"></span>
                        <ul>
                            <li><a href="{{route('website-home')}}">Home</a></li>
                            <li><a href="{{route('website-contact')}}">Get A Quote</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="bg-transparent border-width-2 border-solid border-secondary p-3 d-sm-inline-block rounded-circle position-absolute bottom-10 left-5 ani-top-bottom d-none z-index-3"></div>
        <div class="bg-secondary p-1-6 d-lg-block rounded-circle position-absolute top-25 right-25 ani-top-bottom d-none z-index-3"></div>
        <div class="bg-white p-2 d-sm-inline-block rounded-circle position-absolute top-40 left-25 ani-left-right d-none z-index-3"></div>
    </section>


    <section class="bg-light">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-5 col-xl-4 mb-1-9 mb-lg-0">
                    <div>
                        <div class="section-heading-02 mb-1-9 mb-lg-2-9">
                            <div class="sub-title mb-3">
                                <span class="text-secondary">Get A Quote</span>
                                <div class="title-img">
                                    <img src="/website-assets/img/logos/favicon.png" alt="...">
                                </div>
                            </div>
                            <h2 class="h1 fw-bolder mb-0">Need a Nutrition For Your Health? Get In Touch With Us.</h2>
                        </div>
                        <div class="p-1-9 p-sm-2-9 bg-secondary contact-form border-radius-10">
                            {{--<div class="d-flex align-items-center mb-4">--}}
                                {{--<div class="flex-shrink-0">--}}
                                    {{--<i class="fas fa-map-marker-alt contact-icon"></i>--}}
                                {{--</div>--}}
                                {{--<div class="flex-grow-1 ms-3 ms-sm-4">--}}
                                    {{--<h3 class="h5 text-white">Loaction</h3>--}}
                                    {{--<address class="text-white d-block mb-0">Guild Street 51, NT, London-06192, UK</address>--}}
                                {{--</div>--}}
                            {{--</div>--}}
                            <div class="d-flex align-items-center mb-4">
                                <div class="flex-shrink-0">
                                    <i class="fas fa-phone-alt contact-icon"></i>
                                </div>
                                <div class="flex-grow-1 ms-3 ms-sm-4">
                                    <h3 class="h5 text-white">Phone Number</h3>
                                    <span class="text-white">(+91) 87992 82366</span>
                                </div>
                            </div>
                            <div class="d-flex align-items-center">
                                <div class="flex-shrink-0">
                                    <i class="far fa-envelope-open contact-icon"></i>
                                </div>
                                <div class="flex-grow-1 ms-3 ms-sm-4">
                                    <h3 class="h5 text-white">Email Address</h3>
                                    <span class="text-white d-block">chokshidhruviconsultations@gmail.com</span>
                                </div>
                            </div>
                            <ul class="contact-social-icons mt-2">
                                <li>
                                    <a href="https://www.linkedin.com/in/dhruvi-nutritionist-40123b157" target="_blank">
                                        <i class="fab fa-linkedin-in"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="https://wa.me/message/PROLKCXIVLQPI1" target="_blank">
                                        <i class="fab fa-whatsapp"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="https://www.facebook.com/Dhruvi.NutritionCoach?mibextid=LQQJ4d" target="_blank">
                                        <i class="fab fa-facebook-f"></i>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-7">
                    <div class="bg-white shadow p-1-9 p-sm-2-9 ps-lg-7 border-radius-10">
                        @if(session('error'))
                            <div class="alert alert-danger">{{ session('error') }}</div>
                        @elseif(session('errors'))
                            <div class="alert alert-danger">{{ session('errors')->first() }}</div>
                        @endif

                        @if(session('success'))
                            <div class="alert alert-success">{{ session('success') }}</div>
                        @endif
                        <form class="contact" action="" method="post" enctype="multipart/form-data" onclick="">
                            @csrf
                            <div class="quform-elements">
                                <div class="row">

                                    <!-- Begin Text input element -->
                                    <div class="col-md-6">
                                        <div class="quform-element form-group">
                                            <label for="name">Your Name <span class="quform-required">*</span></label>
                                            <div class="quform-input">
                                                <input class="form-control" id="name" type="text" name="name" placeholder="Your name here" required>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- End Text input element -->

                                    <!-- Begin Text input element -->
                                    <div class="col-md-6">
                                        <div class="quform-element form-group">
                                            <label for="email">Your Email <span class="quform-required">*</span></label>
                                            <div class="quform-input">
                                                <input class="form-control" id="email" type="email" name="email" placeholder="Your email here" required>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- End Text input element -->

                                    <!-- Begin Text input element -->
                                    <div class="col-md-6">
                                        <div class="quform-element form-group quform-select-replaced">
                                            <label for="concern">Your concerns <span class="quform-required">*</span></label>
                                            <div class="quform-input">
                                                <input class="form-control" id="concern" type="text" name="subject" placeholder="Your Concern here" required>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- End Text input element -->

                                    <!-- Begin Text input element -->
                                    <div class="col-md-6">
                                        <div class="quform-element form-group">
                                            <label for="phone">Contact Number  <span class="quform-required">*</span></label>
                                            <div class="quform-input">
                                                <input class="form-control" id="phone" type="number" name="contact_number" placeholder="Enter Your number here" required>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- End Text input element -->

                                    <!-- Package List-->
                                    <div class="col-md-12">
                                        <div class="quform-element form-group">
                                            <label for="message">Select Package <span class="quform-required">*</span></label>
                                            <div class="quform-input">
                                                <select class="form-control" name="package" id="" required>
                                                    <option value="1">1 Month Package</option>
                                                    <option value="3">3 Month Package</option>
                                                    <option value="6">6 Month Package</option>
                                                    <option value="12">Yearly Package</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- End Package List -->

                                    <!-- Begin Textarea element -->
                                    <div class="col-md-12">
                                        <div class="quform-element form-group">
                                            <label for="message">Message <span class="quform-required">*</span></label>
                                            <div class="quform-input">
                                                <textarea class="form-control" id="message" name="message" rows="3" placeholder="Tell us a few words" required></textarea>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- End Textarea element -->

                                    <!-- Begin Submit button -->
                                    <div class="col-md-12">
                                        <div class="quform-submit-inner">
                                            <button class="butn border-0" type="submit">Submit</button>
                                        </div>
                                        <div class="quform-loading-wrap text-start"><span class="quform-loading"></span></div>
                                    </div>
                                    <!-- End Submit button -->

                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <img src="/website-assets/img/content/animation8.png" class="position-absolute bottom-0 right-5 ani-left-right d-none d-md-block" alt="...">
        <img src="/website-assets/img/content/animation10.png" class="position-absolute top-30 left d-none d-md-block" alt="...">
    </section>
@endsection
