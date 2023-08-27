@extends('website.template.layout')

@section('page-title', 'Success Stories')

@section('page-content')

    <section class="page-title-section bg-img cover-background" data-overlay-dark="6" data-background="/website-assets/img/bg/bread_crumb_bg.jpg">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h1>Success Story</h1>
                </div>
                <div class="col-md-12">
                    <div class="breadcrumb">
                        <span class="left-dot"></span>
                        <span class="right-dot"></span>
                        <ul>
                            <li><a href="{{route('website-home')}}">Home</a></li>
                            <li><a href="{{route('website-story')}}">Success Stories</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="bg-transparent border-width-2 border-solid border-secondary p-3 d-sm-inline-block rounded-circle position-absolute bottom-10 left-5 ani-top-bottom d-none z-index-3"></div>
        <div class="bg-secondary p-1-6 d-lg-block rounded-circle position-absolute top-25 right-25 ani-top-bottom d-none z-index-3"></div>
        <div class="bg-white p-2 d-sm-inline-block rounded-circle position-absolute top-40 left-25 ani-left-right d-none z-index-3"></div>
    </section>

    <!-- SUCCESS STORY
      ================================================== -->
    <section>
        <div class="container">
            <div class="section-heading">
                <span class="text-secondary title-font display-25 display-md-23 d-block mb-1">Change your life</span>
                {{--<h2>All our<span class="fw-bolder"> success stories</span></h2>--}}
                {{--<p class="mb-0 w-md-80 w-lg-70 w-xl-50 mx-auto">We connect buyers and sellers of natural, organic, environmentally sound products. We find the best suppliers and makers of natural and organic products.</p>--}}
            </div>
            <div class="row justify-content-center g-0 mb-2-9">
                <div class="col-md-5 col-xl-4 bg-img cover-background min-height-350 border-start-md-radius-10 border-top-sm-radius-10" data-background="/website-assets/img/stories/sapna_kher.jpg"></div>
                <div class="col-md-7 col-xl-6">
                    <div class="success-content border-end-md-radius-10 border-bottom-sm-radius-10">
                        {{--<h4 class="text-center text-primary mb-4 title-font">" Great job, health is the coolest, most happening thing around! "</h4>--}}
                        <p style="text-align: justify"> Dhruvi is a very good dietitian. My experience with her was very enjoyable she is like a friend to me. She is always ready to help you at any time. Her diet has too many options. Despite of her and mine busy schedule she always give u time and answer to your questions.The best part of her diet is that she gives u options which are readily available at our home. Not too costly or different. Love u Dhruvi</p>
                        <div class="author">
                            <h4 class="display-27 font-weight-800 mb-1">SAPNA KHER</h4>
                            <span class="display-31 display-sm-30 font-weight-600 text-muted">VADODARA</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center flex-row-reverse g-0 mb-2-9">
                <div class="col-md-5 col-xl-4 bg-img cover-background min-height-350 border-end-md-radius-10 border-top-sm-radius-10" data-background="/website-assets/img/stories/achyut_joshi.jpg"></div>
                <div class="col-md-7 col-xl-6">
                    <div class="success-content border-start-md-radius-10 border-top-sm-radius-10">
                        {{--<h4 class="text-center text-primary mb-4 title-font">" Wow what great service, I love it! Best. Product. Ever! The very best. "</h4>--}}
                        <p style="text-align: justify">Dhruvi is a gem!! I have been working with her for the last few weeks and she has been very
                            helpful — we discussed my goals, she made sure to understand my preferences and
                            curated a diet plan for me. She regularly checks in on how I am feeling and is very
                            responsive to answer all my naive questions around food. I am looking forward to continue
                            working with her”.</p>
                        <div class="author">
                            <h4 class="display-27 font-weight-800 mb-1">ACHYUT JOSHI</h4>
                            <span class="display-31 display-sm-30 font-weight-600 text-muted">NEW YORK</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center g-0 mb-2-9">
                <div class="col-md-5 col-xl-4 bg-img cover-background min-height-350 border-start-md-radius-10 border-top-sm-radius-10" data-background="/website-assets/img/stories/darshana.jpg"></div>
                <div class="col-md-7 col-xl-6">
                    <div class="success-content border-end-md-radius-10 border-bottom-sm-radius-10">
                        {{--<h4 class="text-center text-primary mb-4 title-font">" It really saves me time and effort. I am completely blown away. "</h4>--}}
                        <p style="text-align: justify;">Thanks for the great service. I am really satisfied with my health. We have no regrets! No matter where you go, health is the coolest, most happening thing around! I would like to personally thank you for your outstanding Support.</p>
                        <div class="author">
                            <h4 class="display-27 font-weight-800 mb-1">DARSHANA SHAH</h4>
                            <span class="display-31 display-sm-30 font-weight-600 text-muted">VADODARA</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center flex-row-reverse g-0 mb-2-9">
                <div class="col-md-5 col-xl-4 bg-img cover-background min-height-350 border-end-md-radius-10 border-top-sm-radius-10" data-background="/website-assets/img/stories/gatha_kher.jpg"></div>
                <div class="col-md-7 col-xl-6">
                    <div class="success-content border-start-md-radius-10 border-top-sm-radius-10">
                        {{--<h4 class="text-center text-primary mb-4 title-font">" Diet was worth a fortune to my company. Diet saved my business. "</h4>--}}
                        {{--<p>I would like to personally thank you for your outstanding product. Thank you for making it painless, pleasant and most of all hassle free! Definitely worth the investment. Best. Product. Ever!</p>--}}
                        <div class="author">
                            <h4 class="display-27 font-weight-800 mb-1">GATHA KHER</h4>
                            <span class="display-31 display-sm-30 font-weight-600 text-muted">CANADA</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center g-0 mb-2-9">
                <div class="col-md-5 col-xl-4 bg-img cover-background min-height-350 border-start-md-radius-10 border-top-sm-radius-10" data-background="/website-assets/img/stories/nishtha.jpg"></div>
                <div class="col-md-7 col-xl-6">
                    <div class="success-content border-end-md-radius-10 border-bottom-sm-radius-10">

                        <p style="text-align: justify">
                            {{--Dhruvi is a very good dietitian. My experience with her was very enjoyable she is like a friend to me. She is always ready to help you at any time. Her diet has too many options. Despite of her and mine busy schedule she always give u time and answer to your questions.The best part of her diet is that she gives u options which are readily available at our home. Not too costly or different. Love u Dhruvi--}}
                        </p>
                        <div class="author">
                            <h4 class="display-27 font-weight-800 mb-1">NISHTHA RAJE</h4>
                            <span class="display-31 display-sm-30 font-weight-600 text-muted">VADODARA</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
