<!-- BEGIN: Main Menu-->
<div class="main-menu menu-fixed menu-dark menu-accordion menu-shadow" data-scroll-to-active="true">
    <div class="navbar-header">
        <ul class="nav navbar-nav flex-row">
            <li class="nav-item mr-auto"><a class="navbar-brand"
                                            href="{{route('homepage')}}">
                    <div class="brand-logo"></div>
                    <h2 class="brand-text mb-0">Kii-Wik</h2>
                </a></li>
            <li class="nav-item nav-toggle"><a class="nav-link modern-nav-toggle pr-0" data-toggle="collapse"><i
                        class="feather icon-x d-block d-xl-none font-medium-4 primary toggle-icon"></i><i
                        class="toggle-icon feather icon-disc font-medium-4 d-none d-xl-block collapse-toggle-icon primary"
                        data-ticon="icon-disc"></i></a></li>
        </ul>
    </div>
    <div class="shadow-bottom"></div>
    <div class="main-menu-content">
        <ul class="navigation navigation-main" id="main-menu-navigation" data-menu="menu-navigation">
            <li class=" nav-item"><a href="{{route('dashboard')}}"><i class="feather icon-home"></i><span class="menu-title"
                                                                                              data-i18n="Dashboard">{{__('Dashboard')}}</span></a>

            </li>
            <!-- <li class=" navigation-header"><span>Users</span>
            </li> -->

            <li class=" nav-item"><a href="#"><i class="feather icon-user"></i><span class="menu-title" data-i18n="User">User List</span></a>
                    <ul class="menu-content">
                        <li><a href="{{route('admin.user_list','user')}}"><i class="feather icon-circle"></i><span class="menu-item" data-i18n="List">Users</span></a>
                        </li>
                        <li><a href="{{route('admin.user_list','freelancer')}}"><i class="feather icon-circle"></i><span class="menu-item" data-i18n="View">Freelancer</span></a>
                        </li>
                        <li><a href="{{route('admin.user_list','company')}}"><i class="feather icon-circle"></i><span class="menu-item" data-i18n="Edit">Company</span></a>
                        </li>
                    </ul>
                </li>
            <li class=" nav-item">
                <a href="{{route('admin.verification_list')}}"><i class="feather icon-user"></i>
                    <span class="menu-title"
                          data-i18n="Email">Verification List</span>
                </a>
            </li>
            <li class=" nav-item">
                <a href="{{route('admin.consultation-requests')}}"><i class="feather icon-user"></i>
                    <span class="menu-title"
                          data-i18n="Email">Consultancy Requests</span>
                </a>
            </li>
            <!-- <li class=" nav-item">
                <a href="{{route('admin.edit')}}"><i class="feather icon-user"></i>
                    <span class="menu-title"
                          data-i18n="Email">My Account  </span>
                </a>
            </li>
            -->
            <li class=" nav-item">
                <a href="{{route('skill')}}"><i class="feather icon-user"></i>
                    <span class="menu-title"
                          data-i18n="Email">Skills</span>
                </a>
            </li>


            <li class=" nav-item">
                <a href="{{route('admin.task_list')}}"><i class="feather icon-user"></i>
                    <span class="menu-title"
                          data-i18n="Email">Tasks List</span>
                </a>
            </li>

            <li class=" nav-item"><a href="#"><i class="feather icon-user"></i><span class="menu-title" data-i18n="User">Reported</span></a>
                    <ul class="menu-content">
                        <li><a href="{{route('admin.reported','task')}}"><i class="feather icon-circle"></i><span class="menu-item" data-i18n="List">Tasks</span></a>
                        </li>
                        <li><a href="{{route('admin.reported','user')}}"><i class="feather icon-circle"></i><span class="menu-item" data-i18n="View">Users</span></a>
                        </li>
                        <li><a href="{{route('admin.reported','comment')}}"><i class="feather icon-circle"></i><span class="menu-item" data-i18n="Edit">Comments</span></a>
                        </li>
                    </ul>
                </li>
        </ul>
    </div>
</div>
<!-- END: Main Menu-->
