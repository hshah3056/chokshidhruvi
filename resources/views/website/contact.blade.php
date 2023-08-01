@extends('website.template.layout')

@section('page-title', 'Home')

@section('page-content')
    <section class="page-title-section bg-img cover-background" data-overlay-dark="6" data-background="/website-assets/img/bg/bread_crumb_bg.jpg" style="background-image: url(/website-assets/img/bg/bg-03.jpg);">
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

    <section>
        <div class="container">
        <div class="row g-0">
            <div class="col-lg-7">
                @if(session('error'))
                    <div class="alert alert-danger">{{ session('error') }}</div>
                @elseif(session('errors'))
                    <div class="alert alert-danger">{{ session('errors')->first() }}</div>
                @endif

                @if(session('success'))
                    <div class="alert alert-success">{{ session('success') }}</div>
                @endif
                <div class="p-2-2 p-lg-2-9 box-shadow-style1 h-100">
                    <h2 class="mb-4">GET A QUOTE</h2>
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
                                            <input class="form-control" id="email" type="text" name="email" placeholder="Your email here" required>
                                        </div>
                                    </div>
                                </div>
                                <!-- End Text input element -->

                                <!-- Begin Text input element -->
                                <div class="col-md-6">
                                    <div class="quform-element form-group quform-select-replaced">
                                        <label for="subject">Your concerns <span class="quform-required">*</span></label>
                                        <div class="quform-input">
                                            <input class="form-control" id="subject" type="text" name="subject" placeholder="Your subject here" required>
                                        </div>
                                    </div>
                                </div>
                                <!-- End Text input element -->

                                <!-- Begin Text input element -->
                                <div class="col-md-6">
                                    <div class="quform-element form-group">
                                        <label for="phone">Contact Number</label>
                                        <div class="quform-input">
                                            <input class="form-control" id="phone" type="text" name="contact_number" placeholder="Your phone here" required>
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
            <div class="col-lg-5 bg-img cover-background theme-overlay" data-overlay-dark="9" data-background="website-assets/img/content/contact-image.jpg" style="background-image: url(website-assets/img/content/contact-image.jpg);">
                <div class="p-1-9 p-lg-2-9 position-relative z-index-1 h-100">
                    <h2 class="mb-3 text-white">Our Contact Detail</h2>
                    <p class="mb-2-2 text-white display-sm-28">Need any consultations contact with us</p>
                    <div class="d-flex mb-4 pb-3 border-bottom border-color-light-white">
                        <div class="flex-shrink-0 mt-2">
                            <i class="fas fa-phone-alt text-secondary fs-2"></i>
                        </div>
                        <div class="flex-grow-1 ms-4">
                            <h3 class="h5 text-white">Phone Number</h3>
                            <span class="text-white d-block mb-1">(+91) 87992 82366</span>
                            {{--<span class="text-white">(+44)123 456 789</span>--}}
                        </div>
                    </div>
                    <div class="d-flex mb-4 pb-3 border-bottom border-color-light-white">
                        <div class="flex-shrink-0 mt-2">
                            <i class="far fa-envelope-open text-secondary fs-2"></i>
                        </div>
                        <div class="flex-grow-1 ms-4">
                            <h3 class="h5 text-white">Email Address</h3>
                            <span class="text-white d-block mb-1">chokshidhruviconsultations@gmail.com</span>
                            {{--<span class="text-white">contact@example.com</span>--}}
                        </div>
                    </div>
                    {{--<div class="d-flex mb-4 pb-3 border-bottom border-color-light-white">--}}
                        {{--<div class="flex-shrink-0 mt-2">--}}
                            {{--<i class="fas fa-map-marker-alt text-secondary fs-2"></i>--}}
                        {{--</div>--}}
                        {{--<div class="flex-grow-1 ms-4">--}}
                            {{--<h3 class="h5 text-white">Loaction</h3>--}}
                            {{--<address class="text-white d-block mb-0 w-md-80 w-xl-70">Guild Street 51, North Town, London-06192, UK</address>--}}
                        {{--</div>--}}
                    {{--</div>--}}
                    <ul class="contact-social-icons">
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
                        {{--<li>--}}
                            {{--<a href="#!"><i class="fab fa-facebook-f"></i></a>--}}
                        {{--</li>--}}
                        {{--<li>--}}
                            {{--<a href="#!"><i class="fab fa-twitter"></i></a>--}}
                        {{--</li>--}}
                        <li>
                            <a href="https://www.facebook.com/Dhruvi.NutritionCoach?mibextid=LQQJ4d" target="_blank">
                                <i class="fab fa-facebook-f"></i>
                            </a>
                        </li>
                        {{--<li>--}}
                            {{--<a href="#!"><i class="fab fa-linkedin-in"></i></a>--}}
                        {{--</li>--}}
                    </ul>
                </div>
            </div>
        </div>
    </div>
    </section>

@endsection
