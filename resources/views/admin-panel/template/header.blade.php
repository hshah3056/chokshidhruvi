<nav class="header-navbar navbar-expand-md navbar navbar-with-menu navbar-without-dd-arrow navbar-static-top navbar-light navbar-brand-center">
    <div class="navbar-header">
        <ul class="nav navbar-nav flex-row">
            <li class="nav-item mobile-menu d-md-none mr-auto">
                <a class="nav-link nav-menu-main menu-toggle hidden-xs" href="#">
                    <i class="ft-menu font-large-1"></i></a></li>
            <li class="nav-item d-md-none">
                <a class="nav-link open-navbar-container" data-toggle="collapse" data-target="#navbar-mobile"><i class="la la-ellipsis-v"></i></a>
            </li>
            <span style="font-size: 4rem;color:#fff;margin-left: 5rem;background-image:-webkit-gradient(linear,left top,right top,from(#514a9d),to(#24c6dc));border-radius: 20px;" class="la la-hands-helping"></span>
        </ul>
    </div>
    @php
        $employee = Session::get('employee');
    @endphp
    <div class="navbar-wrapper">
        <div class="navbar-container content">
            <div class="collapse navbar-collapse" id="navbar-mobile">
                <ul class="nav navbar-nav mr-auto float-left">
                    <li class="nav-item d-none d-md-block">
                        <a class="nav-link nav-link-expand" href="#"><i class="ficon ft-maximize"></i></a>
                    </li>
                    <li class="nav-item d-none d-md-block">
                        <h4 class="block" style="margin-top: 25px;margin-left: 30%">Welcome {{ $employee->name }}</h4>
                    </li>
                </ul>
                <ul class="nav navbar-nav float-right">
                    <li class="dropdown dropdown-user nav-item">
                        <a class="dropdown-toggle nav-link dropdown-user-link text-center" href="#" data-toggle="dropdown">
                            <span class="avatar avatar-online"><img src="/emp-assets/images/icons/user-tie.svg" alt="avatar"></span>
                            <small style="display: block">{{ Session::get('employee')->emp_id }}</small>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right">
                            <div class="arrow_box_right">
                                <a class="dropdown-item" href="#">
                                   <span class="text-bold-700">
                                       {{ Session::get('employee')->name }}
                                   </span>
                                </a>
                                <a class="dropdown-item header-tracking-id" href="javascript:void(0)" title="Click to copy" data-clipboard-text="{{ $employee->tracking_id }}" onclick="INGENIOUS.copyToClipboard('.header-tracking-id', 'Tracking ID has been copied to clipboard')">
                                    TID: {{ $employee->emp_id }}
                                </a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="{{route('emp-account-profile')}}"><i class="ft-user"></i> Edit Profile</a>
                                <a class="dropdown-item" href="{{ route('emp-logout') }}"><i class="ft-power"></i> Logout</a>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</nav>

<div class="header-navbar navbar-expand-sm navbar navbar-horizontal navbar-fixed navbar-dark navbar-without-dd-arrow navbar-shadow" role="navigation" data-menu="menu-wrapper">
    <div class="navbar-container main-menu-content" data-menu="menu-container">
        <ul class="nav navbar-nav"  data-menu="menu-navigation">
            <li class="nav-item">
                <a class="nav-link" href="{{ route('emp-dashboard') }}">
                    <i class="ft-home"></i><span> Dashboard</span>
                </a>
            </li>
            <li class="dropdown nav-item" data-menu="dropdown"><a class="dropdown-toggle nav-link" href="javascript:void(0)" data-toggle="dropdown">
                    <i class="ft-box"></i><span>Leave</span></a>
                <ul class="dropdown-menu">
                    <div class="arrow_box">
                        <li data-menu="">
                            <a class="dropdown-item" href="{{ route('emp-leave-view') }}" data-toggle="dropdown">Leave view</a>
                        </li>
                        <li  data-menu="">
                            <a class="dropdown-item" href="{{ route('emp-leave-create') }}" data-toggle="dropdown">Leave Apply
                            </a>
                        </li>
                        <li  data-menu="">
                            <a class="dropdown-item" href="{{ route('emp-leave-balance') }}" data-toggle="dropdown">Leave Balance</a>
                        </li>

                    </div>
                </ul>
            </li>


            <li class="dropdown nav-item" data-menu="dropdown"><a class="dropdown-toggle nav-link" href="javascript:void(0);" data-toggle="dropdown">
                    <i class="ft-box"></i><span>Salary</span></a>
                <ul class="dropdown-menu">
                    <div class="arrow_box">
                        <li data-menu="">
                            <a class="dropdown-item" href="{{ route('emp-salary-view') }}" data-toggle="dropdown"> Salary Slip </a>
                        </li>
                    </div>
                </ul>
            </li>

            <li class="dropdown nav-item" data-menu="dropdown"><a class="dropdown-toggle nav-link" href="javascript:void(0);" data-toggle="dropdown">
                    <i class="ft-box"></i><span>Task</span></a>
                <ul class="dropdown-menu">
                    <div class="arrow_box">
                        <li data-menu="">
                            <a class="dropdown-item" href="{{route('emp-task-lists')}}" data-toggle="dropdown"> View </a>
                        </li>
                        <li data-menu="">
                            <a class="dropdown-item" href="{{route('emp-task-create')}}" data-toggle="dropdown"> Create </a>
                        </li>
                        <li data-menu="">
                            <a class="dropdown-item" href="{{route('emp-task-history')}}" data-toggle="dropdown"> History </a>
                        </li>
                    </div>
                </ul>
            </li>

            <li class="dropdown nav-item" data-menu="dropdown"><a class="dropdown-toggle nav-link" href="javascript:void(0);" data-toggle="dropdown">
                    <i class="ft-box"></i><span>Department</span></a>
                <ul class="dropdown-menu">
                    <div class="arrow_box">
                        <li data-menu="">
                            <a class="dropdown-item" href="{{route('emp-department-view')}}" data-toggle="dropdown"> View </a>
                        </li>
                    </div>
                </ul>
            </li>

            @if(Session::get('employee')->emp_access_mode == \App\Models\Employee::ADMIN)
                <li class="dropdown nav-item" data-menu="dropdown"><a class="dropdown-toggle nav-link" href="javascript:void(0);" data-toggle="dropdown">
                        <i class="ft-box"></i><span>Employee</span></a>
                    <ul class="dropdown-menu">
                        <div class="arrow_box">
                            <li data-menu="">
                                <a class="dropdown-item" href="{{ route('emp-register') }}" data-toggle="dropdown"> Add New Employee</a>
                            </li>
                        </div>
                    </ul>
                </li>
            @endif

            <li class="nav-item">
                <a class="nav-link" href="{{ route('emp-logout') }}">
                    <i class="ft-log-out"></i><span> Logout</span>
                </a>
            </li>

        </ul>
    </div>
</div>
