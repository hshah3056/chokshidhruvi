@extends('website.template.layout')

@section('page-title', 'Blog Details')

@section('page-content')

    <section class="page-title-section bg-img cover-background" data-overlay-dark="6" data-background="/website-assets/img/bg/bg-03.jpg">
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
                            <li><a href="{{route('website-blog-list')}}">ARTICLES/BLOG Details</a></li>
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
                            <img src="website-assets/img/portfolio/nourishing-minds.jpeg" class="border-radius-10" alt="...">
                            <div class="blog-date"><span>29</span> july 2023</div>
                        </div>
                        <div class="card-body border-radius-10">
                            <ul class="list-unstyled mb-3">
                                <li class="d-inline-block me-3 text-capitalize"><i class="ti-user me-2 text-primary"></i><a href="#!">Dhruvi</a></li>
                                {{--<li class="d-inline-block"><i class="ti-comment me-2 text-primary align-middle"></i> 06 Comment</li>--}}
                            </ul>
                            <h1 class="mb-4"> "Get your maize on! This versatile grain is the perfect addition to any healthy meal."</h1>
                            <h4>5 ways to use maize as a nutritious ingredient:</h4>
                            <p class="w-lg-95">1. Grilled Mexican Street Corn: Brush fresh corn with olive oil, grill it until charred, then sprinkle with chili powder, lime juice, and cotija cheese for a delicious and nutritious side dish.</p>

                            <p class="w-lg-95">2. Maize and Black Bean Salad: Toss cooked maize with black beans, diced tomatoes, red onion, and cilantro for a fresh and flavorful salad that's perfect for lunch or dinner.</p>

                            <p class="w-lg-95 mb-1-9">
                                3. Maize Fritters: Mix maize flour with eggs, scallions, and spices, then fry until golden brown for a tasty and satisfying snack.
                            </p>
                            <p class="w-lg-95 mb-1-9">
                                3. Maize Fritters: Mix maize flour with eggs, scallions, and spices, then fry until golden brown for a tasty and satisfying snack.
                            </p>
                            <p class="w-lg-95 mb-1-9">
                                4. Creamy Maize and Potato Soup: Puree cooked maize and potatoes with chicken or vegetable broth, then add a splash of cream and some fresh herbs for a comforting and nutritious soup.
                            </p>

                            <p class="w-lg-95 mb-1-9">
                                5. Maize and Quinoa Stuffed Peppers: Stuff bell peppers with a mixture of cooked maize, quinoa, spinach, and feta cheese for a healthy and hearty vegetarian meal.
                            </p>

                            <h2> Maize nutrition facts: </h2>
                            <p>i. Good source of fiber, helps regulate digestion and lower cholesterol</p>
                            <p>ii. Rich in antioxidants like lutein and zeaxanthin, which protect your eyes and reduce risk of age-related eye diseases</p>
                            <p>iii. Naturally gluten-free, great option for people with celiac disease or gluten intolerance</p>
                            <p>iV. Good source of vitamin B6, important for brain function and mood/energy levels</p>
                            <p>V. Low glycemic index, won't cause rapid blood sugar spike, keeps you feeling full and satisfied for longer.</p>
                        </div>

                    </article>







                </div>
            </div>
            <!-- end blog-details left -->

            <!-- blog-details right -->
            <div class="col-lg-4">
                <div class="blog-sidebar">



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
