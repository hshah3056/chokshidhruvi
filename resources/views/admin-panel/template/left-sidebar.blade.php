<div class="main-menu menu-fixed menu-light menu-accordion menu-shadow " data-scroll-to-active="true" data-img="/emp-assets/images/backgrounds/03.jpg">
    <div class="navbar-header">
        <ul class="nav navbar-nav flex-row">
            <li class="nav-item mr-auto">
                <a class="navbar-brand" href="{{ route('emp-dashboard') }}">
{{--                    <img class="brand-logo" alt="{{ config('project.brand') }}" src="/emp-assets/images/company/logo.png" style="margin-top: -16px;margin-left: 25px;">--}}
                    <span style="font-size: 4rem;color:#fff;margin-left: 5rem;background-image:-webkit-gradient(linear,left top,right top,from(#514a9d),to(#24c6dc));border-radius: 20px;" class="la la-hands-helping">
                </a>
            </li>
            <li class="nav-item d-md-none"><a class="nav-link close-navbar"><i class="ft-x"></i></a></li>
        </ul>
    </div>
    <div class="main-menu-content">
        <ul class="navigation navigation-main" id="main-menu-navigation" data-menu="menu-navigation">
            <li class="nav-item">
                <a href="{{ route('emp-dashboard') }}">
                    <i class="ft-home"></i><span class="menu-title">Dashboard</span>
                </a>
            </li>

            <li class="nav-item">
                <a href="#"><i class="la la-calendar"></i><span class="menu-title">Leave</span></a>
                <ul class="menu-content">
                    <li>
                        <a class="menu-item" href="{{ route('emp-attendance-view') }}">Leave view</a>
                    </li>
                    <li>
                        <a class="menu-item" href="{{route('emp-attendance-create')}}">Leave Apply</a>
                    </li>
                </ul>
            </li>

            <li class="nav-item">
                <a href="#"><i class="la la-calendar"></i><span class="menu-title">Salary</span></a>
                <ul class="menu-content">
                    <li>
                        <a class="menu-item" href="{{ route('emp-salary-view') }}">Salary Slip</a>
                    </li>
                </ul>
            </li>
        </ul>
    </div>
    <div class="navigation-background"></div>
</div>