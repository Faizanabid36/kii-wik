<!-- BEGIN: Main Menu-->
<div class="main-menu menu-fixed menu-dark menu-accordion menu-shadow" data-scroll-to-active="true">
    <div class="navbar-header">
        <ul class="nav navbar-nav flex-row">
            <li class="nav-item mr-auto"><a class="navbar-brand"
                                            href="{{route('homepage')}}">
                    {{-- <div class="brand-logo"></div> --}}
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
            <li class=" nav-item">
                <a href="index.html"><i class="feather icon-home"></i>
                    <span class="menu-title"
                          data-i18n="Dashboard">{{__('Dashboard')}}</span></a>

            </li>
            <li class=" navigation-header"><span>Users</span>
            </li>

            <li class=" nav-item">
                <a href="{{route('company.profile.edit')}}"><i class="feather icon-file-text"></i>
                    <span class="menu-title"
                          data-i18n="Email">My Account  </span>
                </a>
            </li>
            <li class=" nav-item">
                <a href="{{route('company.profile.view',auth()->user()->id)}}"><i class="feather icon-user"></i>
                    <span class="menu-title"
                          data-i18n="Email">My Profile</span>
                </a>
            </li>
            <li class=" nav-item">
                <a href="{{url('chat')}}"><i class="feather icon-message-square"></i>
                    <span class="menu-title"
                          data-i18n="Email">My Messages</span>
                </a>
            </li>
            <li class=" nav-item">
                <a href="{{route('user.task.my_task')}}"><i class="feather icon-message-square"></i>
                    <span class="menu-title"
                          data-i18n="Email">My Tasks</span>
                </a>
            </li>
            <li class=" nav-item">
                <a href="{{route('company.user_biddings',auth()->id())}}"><i class="feather icon-message-square"></i>
                    <span class="menu-title"
                          data-i18n="Email">My Biddings</span>
                </a>
            </li>

        </ul>
    </div>
</div>
<!-- END: Main Menu-->
