<!-- HEADER
      ================================================== -->
<header class="header-style3">

    {{--<div class="container">--}}
        {{--<div class="navbar-header navbar-header-custom row text-dark">--}}

            {{--<div class="col-lg-3">--}}
                {{--<!-- start logo -->--}}
                {{--<a href="/" class="navbar-brand logodefault">--}}
                    {{--<img id="logo" src="/website-assets/img/logos/logo.png" alt="logo">--}}
                {{--</a>--}}
                {{--<!-- end logo -->--}}
            {{--</div>--}}

            {{--<div class="col-lg-9 col-xl-8 offset-xl-1 offset-lg-0 d-none d-lg-block">--}}
                {{--<div class="row">--}}
                    {{--<div class="col-md-4">--}}
                        {{--<div class="media">--}}
                            {{--<i class="ti-location-pin header-icon text-primary display-12"></i>--}}
                            {{--<div class="media-body ms-3">--}}
                                {{--<span class="font-weight-600 d-block display-29">Our Location</span>--}}
                                {{--<span class="font-weight-500 display-29 d-block">Guild Street 51, UK</span>--}}
                            {{--</div>--}}
                        {{--</div>--}}
                    {{--</div>--}}
                    {{--<div class="col-md-4">--}}
                        {{--<div class="media">--}}
                            {{--<i class="ti-email header-icon text-primary display-14"></i>--}}
                            {{--<div class="media-body ms-3">--}}
                                {{--<span class="font-weight-600 d-block display-29">Mail Us</span>--}}
                                {{--<span class="display-29 d-block">info@youremail.com</span>--}}
                            {{--</div>--}}
                        {{--</div>--}}
                    {{--</div>--}}
                    {{--<div class="col-md-4">--}}
                        {{--<div class="media">--}}
                            {{--<i class="ti-mobile header-icon text-primary display-12"></i>--}}
                            {{--<div class="media-body ms-3">--}}
                                {{--<span class="font-weight-600 d-block display-29">Call Us</span>--}}
                                {{--<span class="display-29 d-block">+123 4567 890</span>--}}
                            {{--</div>--}}
                        {{--</div>--}}
                    {{--</div>--}}
                {{--</div>--}}
            {{--</div>--}}

        {{--</div>--}}
    {{--</div>--}}

        <div class="container d-lg-none d-block">
            <div class="navbar-header navbar-header-custom row text-dark">

                <div class="col-lg-3">
                    <!-- start logo -->
                    <a href="/" class="navbar-brand logodefault">
                        <img id="logo" src="/website-assets/img/logos/logo.png" alt="logo">
                    </a>
                    <!-- end logo -->
                </div>

                {{--<div class="col-lg-9 col-xl-8 offset-xl-1 offset-lg-0 d-none d-lg-block">--}}
                <div class="col-lg-9 col-xl-8 offset-xl-1 offset-lg-0 d-none">
                    <div class="row">
                        <div class="col-md-4">
                            <div class="media">
                                <i class="ti-location-pin header-icon text-primary display-12"></i>
                                <div class="media-body ms-3">
                                    <span class="font-weight-600 d-block display-29">Our Location</span>
                                    <span class="font-weight-500 display-29 d-block">Guild Street 51, UK</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="media">
                                <i class="ti-email header-icon text-primary display-14"></i>
                                <div class="media-body ms-3">
                                    <span class="font-weight-600 d-block display-29">Mail Us</span>
                                    <span class="display-29 d-block">info@youremail.com</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="media">
                                <i class="ti-mobile header-icon text-primary display-12"></i>
                                <div class="media-body ms-3">
                                    <span class="font-weight-600 d-block display-29">Call Us</span>
                                    <span class="display-29 d-block">+123 4567 890</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    <div class="navbar-default">

        <!-- start top search -->
        <div class="top-search custom-search bg-primary">
            <div class="container">
                <form class="search-form" action="search.html" method="GET" accept-charset="utf-8">
                    <div class="input-group">
                                <span class="input-group-addon cursor-pointer">
                                    <button class="search-form_submit fas fa-search display-28 text-white" type="submit"></button>
                                </span>
                        <input type="text" class="search-form_input form-control" name="s" autocomplete="off" placeholder="Type & hit enter...">
                        <span class="input-group-addon close-search mt-2"><i class="fas fa-times display-28"></i></span>
                    </div>
                </form>
            </div>
        </div>
        <!-- end top search -->

        <div class="menu_area alt-font bg-secondary">
            <div class="container">
                <div class="col-lg-12">
                    <nav class="navbar navbar-expand-lg navbar-light p-0">

                        <div class="navbar-toggler bg-secondary"></div>

                        <!-- start menu area -->
                        <ul class="navbar-nav me-auto" id="nav" style="display: none;">
                            <li><a href="{{route('website-home')}}">Home</a>
                                {{--<ul>--}}
                                    {{--<li><a href="index.html">Home 01</a></li>--}}
                                    {{--<li><a href="index-02.html">Home 02</a></li>--}}
                                    {{--<li><a href="index-03.html">Home 03</a></li>--}}
                                {{--</ul>--}}
                            </li>
                            <li><a href="{{route('website-about')}}">About Me</a></li>
                            <li><a href="{{route('website-packages')}}">Our Packages</a></li>
                            <li><a href="#!">Success Stories</a></li>
                            <li><a href="{{route('website-home')}}">The Nutrition Corner</a>
                                <ul>
                                    <li><a href="#!">Nutrition Resources </a></li>
                                    <li><a href="{{route('website-blog-list')}}">Blogs / Articles</a></li>
                                </ul>
                            </li>
                            {{--<li><a href="/">The Nutrition Corner</a></li>--}}
                            {{--<li><a href="/">Nutrition Packages</a>--}}
                                {{--<ul>--}}
                                    {{--<li><a href="/">Success stories</a></li>--}}
                                    {{--<li><a href="/">Nutrition Knowledge Base</a></li>--}}
                                {{--</ul>--}}
                            {{--</li>--}}
                            {{--<li><a href="#!">Pages</a>--}}
                                {{--<ul>--}}
                                    {{--<li><a href="about-us.html">About Us</a></li>--}}
                                    {{--<li><a href="our-history.html">Our History</a></li>--}}
                                    {{--<li><a href="meal-plans.html">Meal Plans</a></li>--}}
                                    {{--<li><a href="seminar-schedule.html">Seminar Schedule</a></li>--}}
                                    {{--<li><a href="success-story.html">Success Story</a></li>--}}
                                    {{--<li>--}}
                                        {{--<a href="#!">Our Team</a>--}}
                                        {{--<ul>--}}
                                            {{--<li><a href="our-team.html">Our Team</a></li>--}}
                                            {{--<li><a href="team-details.html">Team Details</a></li>--}}
                                        {{--</ul>--}}
                                    {{--</li>--}}
                                    {{--<li><a href="appointment.html">Appointment</a></li>--}}
                                    {{--<li><a href="faq.html">FAQ</a></li>--}}
                                    {{--<li><a href="#!">Others</a>--}}
                                        {{--<ul>--}}
                                            {{--<li><a href="coming-soon.html">Comingsoon</a></li>--}}
                                            {{--<li><a href="404-page.html">404 Page</a></li>--}}
                                        {{--</ul>--}}
                                    {{--</li>--}}
                                {{--</ul>--}}
                            {{--</li>--}}
                            {{--<li><a href="#!">Services</a>--}}
                                {{--<ul>--}}
                                    {{--<li><a href="our-services.html">Our Services</a></li>--}}
                                    {{--<li><a href="balance-body-mind.html">Balance Body & Mind</a></li>--}}
                                    {{--<li><a href="personalized-nutrition.html">Personalized Nutrition</a></li>--}}
                                    {{--<li><a href="fitness-performance.html">Fitness & Performance</a></li>--}}
                                    {{--<li><a href="healthy-daily-life.html">Healthy Daily Life</a></li>--}}
                                    {{--<li><a href="support-motivation.html">Support & Motivation</a></li>--}}
                                    {{--<li><a href="weight-loss-programs.html">Weight Loss Programs</a></li>--}}
                                {{--</ul>--}}
                            {{--</li>--}}
                            {{--<li><a href="#!">Portfolio</a>--}}
                                {{--<ul>--}}
                                    {{--<li><a href="portfolio-style-01.html">Portfolio Style 01</a></li>--}}
                                    {{--<li><a href="portfolio-style-02.html">Portfolio Style 02</a></li>--}}
                                    {{--<li><a href="portfolio-details.html">Portfolio Details</a></li>--}}
                                {{--</ul>--}}
                            {{--</li>--}}
                            {{--<li><a href="#!">Blog</a>--}}
                                {{--<ul>--}}
                                    {{--<li><a href="blog-grid.html">Blog Grid</a></li>--}}
                                    {{--<li><a href="blog-list.html">Blog List</a></li>--}}
                                    {{--<li><a href="blog-details.html">Blog Details</a></li>--}}
                                {{--</ul>--}}
                            {{--</li>--}}
                            {{--<li><a href="#!">Elements</a>--}}
                                {{--<ul class="row megamenu">--}}
                                    {{--<li class="col-lg-3 col-sm-12">--}}
                                        {{--<span class="mb-0 mb-lg-3 d-block py-2 p-lg-0 px-4 px-lg-0 text-uppercase sub-title font-weight-600 display-30">Elements 01</span>--}}
                                        {{--<ul>--}}
                                            {{--<li><a href="accordion.html"><i class="fas fa-sliders-h me-2"></i>Accordion</a></li>--}}
                                            {{--<li><a href="alerts.html"><i class="far fa-bell me-2"></i>Alerts</a></li>--}}
                                            {{--<li><a href="blockquotes.html"><i class="fas fa-vector-square me-2"></i>Blockquotes</a></li>--}}
                                            {{--<li><a href="buttons.html"><i class="fas fa-link me-2"></i>Buttons</a></li>--}}
                                            {{--<li><a href="call-to-action.html"><i class="far fa-square me-2"></i>Call to Action</a></li>--}}
                                            {{--<li><a href="carousel-slider.html"><i class="far fa-images me-2"></i>Carousel Slider</a></li>--}}
                                        {{--</ul>--}}
                                    {{--</li>--}}
                                    {{--<li class="col-lg-3 col-sm-12">--}}
                                        {{--<span class="mb-0 mb-lg-3 d-block py-2 p-lg-0 px-4 px-lg-0 text-uppercase sub-title font-weight-600 display-30">Elements 02</span>--}}
                                        {{--<ul>--}}
                                            {{--<li><a href="count-down.html"><i class="far fa-flag me-2"></i>Count Down</a></li>--}}
                                            {{--<li><a href="counter.html"><i class="fas fa-compress me-2"></i>Counters</a></li>--}}
                                            {{--<li><a href="dropcaps.html"><i class="far fa-closed-captioning me-2"></i>Dropcaps</a></li>--}}
                                            {{--<li><a href="forms.html"><i class="fab fa-wpforms me-2"></i>Forms</a></li>--}}
                                            {{--<li><a href="font-icons.html"><i class="far fa-check-square me-2"></i>Font Icons</a></li>--}}
                                            {{--<li><a href="google-map.html"><i class="fas fa-map-marker-alt me-2"></i>Google Map</a></li>--}}
                                        {{--</ul>--}}
                                    {{--</li>--}}
                                    {{--<li class="col-lg-3 col-sm-12">--}}
                                        {{--<span class="mb-0 mb-lg-3 d-block py-2 p-lg-0 px-4 px-lg-0 text-uppercase sub-title font-weight-600 display-30">Elements 03</span>--}}
                                        {{--<ul>--}}
                                            {{--<li><a href="grid-system.html"><i class="fas fa-th me-2"></i>Grid System</a></li>--}}
                                            {{--<li><a href="highlights.html"><i class="fas fa-highlighter me-2"></i>Highlights</a></li>--}}
                                            {{--<li><a href="icon-with-text.html"><i class="fab fa-fonticons-fi me-2"></i>Icon With Text</a></li>--}}
                                            {{--<li><a href="list-styles.html"><i class="fas fa-list-ul me-2"></i>List Styles</a></li>--}}
                                            {{--<li><a href="media-object.html"><i class="fas fa-photo-video me-2"></i>Media Object</a></li>--}}
                                            {{--<li><a href="modal.html"><i class="fas fa-expand me-2"></i>Modal</a></li>--}}
                                        {{--</ul>--}}
                                    {{--</li>--}}
                                    {{--<li class="col-lg-3 col-sm-12">--}}
                                        {{--<span class="mb-0 mb-lg-3 d-block py-2 p-lg-0 px-4 px-lg-0 text-uppercase sub-title font-weight-600 display-30">Elements 04</span>--}}
                                        {{--<ul>--}}
                                            {{--<li><a href="pagination.html"><i class="far fa-caret-square-right me-2"></i>Pagination</a></li>--}}
                                            {{--<li><a href="progress-bar.html"><i class="fas fa-tasks me-2"></i>Progress Bars</a></li>--}}
                                            {{--<li><a href="tables.html"><i class="fas fa-table me-2"></i>Tables</a></li>--}}
                                            {{--<li><a href="tabs.html"><i class="fas fa-sliders-h me-2"></i>Tabs</a></li>--}}
                                            {{--<li><a href="typography.html"><i class="fas fa-text-height me-2"></i>Typography</a></li>--}}
                                            {{--<li><a href="videos.html"><i class="fas fa-video me-2"></i>Videos</a></li>--}}
                                        {{--</ul>--}}
                                    {{--</li>--}}
                                {{--</ul>--}}
                            {{--</li>--}}
                            {{--<li><a href="">Get in Touch</a></li>--}}
                        </ul>
                        <!-- end menu area -->

                        <!-- start attribute navigation -->
                        <div class="attr-nav align-items-lg-center ms-auto">
                            <ul>
                                {{--<li class="search"><a href="#!"><i class="fas fa-search"></i></a></li>--}}
                                <li class="d-none d-xl-inline-block">
                                    <a href="{{route('website-contact')}}" class="butn white-hover sm">Get A Quote</a>
                                </li>
                            </ul>
                        </div>
                        <!-- end attribute navigation -->
                    </nav>
                </div>
            </div>
        </div>
    </div>
</header>
