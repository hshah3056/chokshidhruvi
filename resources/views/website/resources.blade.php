@extends('website.template.layout')

@section('page-title', 'Nutrition Resources')

@section('page-content')

    <section class="page-title-section bg-img cover-background" data-overlay-dark="6" data-background="/website-assets/img/bg/bread_crumb_bg.jpg" style="background-image: url(/website-assets/img/bg/bg-03.jpg);">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h1>Nutrition Resources</h1>
                </div>
                <div class="col-md-12">
                    <div class="breadcrumb">
                        <span class="left-dot"></span>
                        <span class="right-dot"></span>
                        <ul>
                            <li><a href="{{route('website-home')}}">Home</a></li>
                            <li><a href="{{route('website-packages')}}">Nutrition Resources</a></li>
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
                <h1 class="display-17 display-sm-11 display-md-9 display-lg-8 display-xl-4 mb-lg-3 letter-spacing-4 title-font text-green font-weight-900"><span class="fw-bolder">Coming Soon!!</span></h1>
            </div>
        </div>
    </section>

@endsection
