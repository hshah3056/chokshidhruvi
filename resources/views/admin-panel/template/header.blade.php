<nav class="header-navbar navbar-expand-md navbar navbar-with-menu navbar-without-dd-arrow navbar-static-top navbar-light navbar-brand-center">
    <div class="navbar-header">
        <ul class="nav navbar-nav flex-row">
            <li class="nav-item mobile-menu d-md-none mr-auto">
                <a class="nav-link nav-menu-main menu-toggle hidden-xs" href="#">
                    <i class="ft-menu font-large-1"></i></a></li>
            <li class="nav-item d-md-none">
                <a class="nav-link open-navbar-container" data-toggle="collapse" data-target="#navbar-mobile"><i class="la la-ellipsis-v"></i></a>
            </li>
            {{--<span style="font-size: 4rem;color:#fff;margin-left: 5rem;background-image:-webkit-gradient(linear,left top,right top,from(#514a9d),to(#24c6dc));border-radius: 20px;" class="la la-hands-helping"></span>--}}
            <img src="/website-assets/img/logos/favicon.jpg" style="margin-left: 2rem;" alt="">
        </ul>
    </div>
    @php
        $admin = \Illuminate\Support\Facades\Session::get('admin');
    @endphp
    <div class="navbar-wrapper">
        <div class="navbar-container content">
            <div class="collapse navbar-collapse" id="navbar-mobile">
                <ul class="nav navbar-nav mr-auto float-left">
                    <li class="nav-item d-none d-md-block">
                        <a class="nav-link nav-link-expand" href="#"><i class="ficon ft-maximize"></i></a>
                    </li>
                    <li class="nav-item d-none d-md-block">
                        <h4 class="block" style="margin-top: 25px;margin-left: 30%">Welcome {{ $admin->name }}</h4>
                    </li>
                </ul>
                <ul class="nav navbar-nav float-right">
                    <li class="dropdown dropdown-user nav-item">
                        <a class="dropdown-toggle nav-link dropdown-user-link text-center" href="#" data-toggle="dropdown">
                            <span class="avatar avatar-online"><img src="/admin-assets/images/icons/user-tie.svg" alt="avatar"></span>
                            <small style="display: block">{{ Session::get('admin')->admin_id }}</small>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right">
                            <div class="arrow_box_right">
                                <a class="dropdown-item" href="#">
                                   <span class="text-bold-700">
                                       {{ Session::get('admin')->name }}
                                   </span>
                                </a>
                                <a class="dropdown-item header-tracking-id" href="javascript:void(0)" title="Click to copy" data-clipboard-text="{{ $admin->tracking_id }}" onclick="INGENIOUS.copyToClipboard('.header-tracking-id', 'Tracking ID has been copied to clipboard')">
                                    TID: {{ $admin->admin_id }}
                                </a>
                                <div class="dropdown-divider"></div>
                                {{--<a class="dropdown-item" href="{{route('emp-account-profile')}}"><i class="ft-user"></i> Edit Profile</a>--}}
                                <a class="dropdown-item" href="{{ route('admin-logout') }}"><i class="ft-power"></i> Logout</a>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</nav>

<div class="header-navbar navbar-expand-sm navbar bg-gradient-x-orange-yellow navbar-fixed navbar-dark navbar-without-dd-arrow navbar-shadow" role="navigation" data-menu="menu-wrapper">
    <div class="navbar-container main-menu-content" data-menu="menu-container">
        <ul class="nav navbar-nav"  data-menu="menu-navigation">
            <li class="nav-item">
                <a class="nav-link" href="{{ route('dashboard') }}">
                    <i class="ft-home"></i><span> Dashboard</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ route('contact-data') }}">
                    <i class="ft-user"></i><span>Resources</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ route('admin-client-list') }}">
                    <i class="ft-user"></i><span>Our Clients</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="javascript:void(0);">
                    <i class="ft-file-text"></i><span>Blog Manager</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="javascript:void(0);">
                    <i class="ft-image"></i><span>Home Banner</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="javascript:void(0);">
                    <i class="ft-package"></i><span>Packages</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="javascript:void(0);">
                    <i class="ft-book"></i><span>Stories</span>
                </a>
            </li>
            {{--<li class="dropdown nav-item" data-menu="dropdown"><a class="dropdown-toggle nav-link" href="javascript:void(0)" data-toggle="dropdown">--}}
                    {{--<i class="ft-box"></i><span>contacts</span></a>--}}
                {{--<ul class="dropdown-menu">--}}
                    {{--<div class="arrow_box">--}}
                        {{--<li data-menu="">--}}
                            {{--<a class="dropdown-item" href="{{ route('admin-leave-view') }}" data-toggle="dropdown">Leave view</a>--}}
                        {{--</li>--}}
                        {{--<li  data-menu="">--}}
                            {{--<a class="dropdown-item" href="{{ route('admin-leave-create') }}" data-toggle="dropdown">Leave Apply--}}
                            {{--</a>--}}
                        {{--</li>--}}
                        {{--<li  data-menu="">--}}
                            {{--<a class="dropdown-item" href="{{ route('admin-leave-balance') }}" data-toggle="dropdown">Leave Balance</a>--}}
                        {{--</li>--}}

                    {{--</div>--}}
                {{--</ul>--}}
            {{--</li>--}}

            <li class="nav-item">
                <a class="nav-link" href="{{ route('admin-logout') }}">
                    <i class="ft-log-out"></i><span> Logout</span>
                </a>
            </li>

        </ul>
    </div>
</div>
