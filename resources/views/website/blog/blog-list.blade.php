@extends('website.template.layout')

@section('page-title', 'Home')

@section('page-content')

    <!-- PAGE TITLE
        ================================================== -->
    <section class="page-title-section bg-img cover-background" data-overlay-dark="6" data-background="/website-assets/img/bg/bread_crumb_bg.jpg">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h1>Blog</h1>
                </div>
                <div class="col-md-12">
                    <div class="breadcrumb">
                        <span class="left-dot"></span>
                        <span class="right-dot"></span>
                        <ul>
                            <li><a href="{{route('website-home')}}">Home</a></li>
                            <li><a href="{{route('website-blog-list')}}">Blogs / Articles</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="bg-transparent border-width-2 border-solid border-secondary p-3 d-sm-inline-block rounded-circle position-absolute bottom-10 left-5 ani-top-bottom d-none z-index-3"></div>
        <div class="bg-secondary p-1-6 d-lg-block rounded-circle position-absolute top-25 right-25 ani-top-bottom d-none z-index-3"></div>
        <div class="bg-white p-2 d-sm-inline-block rounded-circle position-absolute top-40 left-25 ani-left-right d-none z-index-3"></div>
    </section>

    <!-- PORTFOLIO STYLE 1
    ================================================== -->
    <section>
        <div class="container">
            {{--<div class="row">--}}
                {{--<div class="filtering col-sm-12 text-center">--}}
                    {{--<span data-filter='*' class="active">All</span>--}}
                    {{--<span data-filter='.nutritonist'>Nutritonist</span>--}}
                    {{--<span data-filter='.weightloss'>Weight Loss</span>--}}
                    {{--<span data-filter='.health'>Health</span>--}}
                    {{--<span data-filter='.fitness'>Fitness</span>--}}
                {{--</div>--}}
            {{--</div>--}}
            <div class="row portfolio-gallery-isotope mt-n2-9">
                <div class="col-md-6 col-lg-4 mt-2-9 nutritonist" data-src="website-assets/img/portfolio/nourishing-minds.jpeg" data-sub-html="<h4 class='text-white'>NOURISHING MINDS</h4><p>Nutritonist</p>">
                    <div class="portfolio-style-01">
                        <div class="position-relative">
                            <div class="position-relative">
                                <img src="website-assets/img/portfolio/nourishing-minds.jpeg" alt="...">
                                <div class="portfolio-overlay">
                                    <div class="portfolio-icon-box">
                                        <a href="#!"><i class="ti-zoom-in"></i></a>
                                    </div>
                                </div>
                            </div>
                            <div class="portfolio-content">
                                <h6 class="text-muted font-weight-500">Nervousness, Anxiety & Depression Mechanism</h6>
                                <h4 class="mb-0"><a href="{{route('website-blog-detail')}}" class="portfolio-link">Nourishing Minds</a></h4>
                            </div>
                        </div>
                    </div>
                </div>
                {{--<div class="col-md-6 col-lg-4 mt-2-9 weightloss" data-src="website-assets/img/portfolio/portfolio-02.jpg" data-sub-html="<h4 class='text-white'>Pilates Exercises #02</h4><p>Weight Loss</p>">--}}
                    {{--<div class="portfolio-style-01">--}}
                        {{--<div class="position-relative">--}}
                            {{--<div class="position-relative">--}}
                                {{--<img src="website-assets/img/portfolio/portfolio-02.jpg" alt="...">--}}
                                {{--<div class="portfolio-overlay">--}}
                                    {{--<div class="portfolio-icon-box">--}}
                                        {{--<a href="#!"><i class="ti-zoom-in"></i></a>--}}
                                    {{--</div>--}}
                                {{--</div>--}}
                            {{--</div>--}}
                            {{--<div class="portfolio-content">--}}
                                {{--<h6 class="text-muted font-weight-500">Weight Loss</h6>--}}
                                {{--<h4 class="mb-0"><a href="portfolio-details.html" class="portfolio-link">Pilates Exercises</a></h4>--}}
                            {{--</div>--}}
                        {{--</div>--}}
                    {{--</div>--}}
                {{--</div>--}}
            </div>
        </div>
    </section>

@endsection
