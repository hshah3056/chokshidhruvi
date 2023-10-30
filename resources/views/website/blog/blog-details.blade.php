@extends('website.template.layout')

@section('page-title', 'Blog Details')

@section('page-content')

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
                            <li><a href="{{route('website-blog-list')}}">Articles / Blogs</a></li>
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
            <!-- blog-details left -->
            <div class="col-lg-8 mb-5 mb-lg-0">
                <div class="pe-lg-1-6">

                    <article class="card card-style6">
                        <div class="image-box">
                            <img src="/uploads/{{json_decode($blogDetails->images)[0]}}" class="border-radius-10" alt="...">
                            <div class="blog-date"><span>{{\Carbon\Carbon::parse($blogDetails->created_at)->format('d')}}</span> {{\Carbon\Carbon::parse($blogDetails->created_at)->format('M Y')}}</div>
                        </div>
                        <div class="card-body border-radius-10">
                            <ul class="list-unstyled mb-3">
                                <li class="d-inline-block me-3 text-capitalize"><i class="ti-user me-2 text-primary"></i><a href="#!">Dhruvi</a></li>
                            </ul>
                            {{--<h1 class="mb-4"> "Nourishing Minds: Combating Nervousness, Anxiety & Depression Through Nutrition"</h1>--}}
                            {{--<p class="w-lg-95">--}}
                                {{--🌱Nervousness: Nervousness is often triggered by the body's fight-or-flight response, releasing stress hormones like adrenaline. This can lead to feelings of restlessness and unease.--}}
                            {{--</p>--}}
                            {{--<p class="w-lg-95">--}}
                                {{--🌱Anxiety: Anxiety is an exaggerated response to perceived threats. The brain's amygdala, responsible for processing emotions, becomes overactive, triggering fear and worry responses.--}}
                            {{--</p>--}}
                            {{--<p class="w-lg-95">--}}
                                {{--🌱Depression: Depression involves chemical imbalances in the brain, particularly with neurotransmitters like serotonin and dopamine. Low levels of these chemicals can contribute to feelings of sadness and hopelessness.--}}
                            {{--</p>--}}
                            {{--<h2>Nutrition and Eating Patterns: </h2>--}}
                            {{--<p>i. During these emotional challenges, eating patterns may be disturbed due to stress, emotional eating, or loss of appetite.</p>--}}
                            {{--<p>ii. Unhealthy eating habits, such as consuming excessive sugar and caffeine, can further impact mood and worsen anxiety.</p>--}}
                            {{--<p>iii. Poor nutrition can contribute to deficiencies in essential nutrients, affecting brain function and emotional well-being.</p>--}}

                            {{--<h2>Nutrition Guidelines :</h2>--}}
                            {{--<p>--}}
                                {{--<b>Hydration</b> : Stay hydrated to support cognitive function and emotional stability.</p>--}}
                            {{--<p>--}}
                                {{--<b>Whole Foods</b> : Choose nutrient-rich foods like fruits, vegetables, whole grains, and lean proteins for overall well-being.--}}
                            {{--</p>--}}
                            {{--<p>--}}
                                {{--<b>Omega-3 Fatty Acids</b>: Include sources like fatty fish, chia seeds, and walnuts to support brain health.</p>--}}
                            {{--<p>--}}
                                {{--<b>Limit Sugar & Caffeine</b>: Reduce sugary and caffeinated drinks to avoid exacerbating anxiety and mood swings.</p>--}}
                            {{--<p>--}}
                                {{--<b>Mindful Eating</b>: Practice mindful eating to be aware of emotional triggers and promote a healthy relationship with food.</p>--}}
                            {{--<p>--}}
                                {{--<b>Balanced Meals</b>: Aim for balanced meals with the right mix of carbs, proteins, and healthy fats to stabilize energy levels and mood.</p>--}}
                            {{--<p>--}}
                                 {{--<b>Regular Meals:</b><p>Eat at regular intervals to maintain stable blood sugar levels and emotional balance.</p>--}}
                            {{--</p>--}}
                            {!! $blogDetails->text !!}
                        </div>

                    </article>
                </div>
            </div>
            <!-- end blog-details left -->

            <!-- blog-details right -->
            <div class="col-lg-4">
                <div class="blog-sidebar">

                    @if(!empty($latestBlogs))

                        <div class="widget widget-post">
                            <h4 class="widget-title title-font text-secondary">Latest Posts</h4>
                            <div class="widget-body">
                                @foreach($latestBlogs as $latestBlog)
                                    <div class="d-flex align-items-center mt-2">
                                        <div class="flex-shrink-0" style="width: 80px">
                                            <img src="/uploads/{{json_decode($latestBlog->images)[0]}}" class="border-radius-5" alt="...">
                                        </div>
                                        <div class="flex-grow-1 ms-4">
                                            <span class="display-30 text-muted d-block mb-2 font-weight-500"><i class="far fa-calendar-check me-2 text-primary"></i>{{\Carbon\Carbon::parse($blogDetails->created_at)->format('M, d Y')}}</span>
                                            <h6 class="mb-0"><a href="{{route('website-blog-detail',[$latestBlog->id])}}">{{$latestBlog->name}}</a></h6>
                                            {{--<h6 class="mb-0"><a href="#!"> Coming Soon </a></h6>--}}
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    @else
                        <div class="widget widget-post">
                            <h4 class="widget-title title-font text-secondary">Latest Posts</h4>
                            <div class="widget-body">
                                <div class="d-flex align-items-center">
                                    {{--<div class="flex-shrink-0">--}}
                                    {{--<img src="website-assets/img/blog/blog-thumb-03.jpg" class="border-radius-5" alt="...">--}}
                                    {{--</div>--}}
                                    <div class="flex-grow-1 ms-4">
                                        {{--<span class="display-30 text-muted d-block mb-2 font-weight-500"><i class="far fa-calendar-check me-2 text-primary"></i>Jan 15, 2022</span>--}}
                                        {{--<h6 class="mb-0"><a href="#!"> Things about diet you have to experience it yourself.</a></h6>--}}
                                        <h6 class="mb-0"><a href="#!"> Coming Soon </a></h6>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endif




                    <div class="bg-secondary border-radius-10">
                        <div class="banner-wrapper">
                            <img src="website-assets/img/content/service-banner.jpg" class="border-top-radius-10" alt="...">
                            <div class="p-2-2 position-relative border-bottom-radius-10 bg-secondary text-center">
                                <div class="icon-boxs">
                                    <i class="ti-headphone-alt text-white"></i>
                                </div>
                                <h4 class="mb-3 text-white">How Can We Help?</h4>
                                <ul class="text-center list-unstyled mb-0">
                                    <li class="text-white mb-2"><i class="fa fa-phone small text-white me-2"></i><a href="#!" class="text-white">(+91) 87992 82366     </a></li>
                                    <li class="text-white"><i class="fa fa-envelope-open small text-white me-2"></i><a href="#!" class="text-white"> chokshidhruviconsultations@gmail.com </a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- end blog-details right -->
        </div>
    </div>
    <div class="bg-secondary p-2-2 d-sm-inline-block rounded-circle position-absolute bottom-10 right-5 d-none"></div>
    <div class="bg-primary p-3 d-sm-inline-block rounded-circle position-absolute bottom-10 right-5 ani-top-bottom d-none"></div>
</section>
@endsection
