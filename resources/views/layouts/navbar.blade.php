<body class="horizontal-layout horizontal-menu 2-columns  navbar-floating footer-static  " data-open="hover"
    data-menu="horizontal-menu" data-col="2-columns">
    <!-- BEGIN: Header-->
    <nav class="header-navbar navbar-expand-lg navbar navbar-with-menu navbar-fixed navbar-shadow navbar-brand-center"
        style="background: linear-gradient(90deg, rgba(32,125,255,1) 21%, rgba(0,189,85,1) 71%);">
        <div class="navbar-wrapper">
            <div class="navbar-container content">
                <div class="navbar-collapse" id="navbar-mobile">
                    <div class="mr-auto float-left bookmark-wrapper d-flex align-items-center">
                        <ul class="nav navbar-nav">
                            <li class="nav-item mobile-menu d-xl-none mr-auto"><a
                                    class="nav-link nav-menu-main menu-toggle hidden-xs" href="#"><i
                                        class="ficon feather icon-menu"></i></a></li>
                        </ul>
                        <ul class="nav navbar-nav bookmark-icons">
                            <li class="nav-item d-none d-lg-block">
                                <a class="nav-link" href="{{ route('homepage') }}" data-toggle="tooltip"
                                    data-placement="top" title="Kii-Wik">
                                    <h2 class="brand-text text-primary text-bold-700" style="color: white !important">
                                        Kii-Wik</h2>
                                </a>
                            </li>
                        </ul>
                    </div>
                    <ul class="nav navbar-nav float-right">

                        @if (auth()->user() and auth()->user()->role == 'user')
                            <a href="#" class="" data-toggle="modal" data-target="#myModal"> <button
                                    style="    margin-top: 14px;" type="button"
                                    class="btn btn-primary mr-sm-1 mb-1 mb-sm-0">Post A Problem</button>
                            </a>
                        @endif





                        <div class="modal fade" id="myModal" role="dialog">
                            <div class="modal-dialog modal-lg">
                                <div class="modal-content">
                                    <div class="modal-header" style="    background-color: #b9deff">
                                        <h4 class="modal-title">Post a Problem</h4>
                                        <button type="button" class="close" data-dismiss="modal">&times;</button>

                                    </div>
                                    <form enctype="multipart/form-data" method="POST"
                                        action="{{ route('user.task.submit') }}">
                                        <div class="modal-body">
                                            @csrf
                                            <div class="row">
                                                <div class="col-12">
                                                    <div class="form-group">
                                                        <div class="controls">
                                                            <label for="account-username">Task title</label>
                                                            <input type="text" name="title" class="form-control"
                                                                id="account-username" placeholder="Title" required
                                                                data-validation-required-message="This title field is required">
                                                        </div>
                                                    </div>
                                                </div>
                                                <br>
                                                <br>
                                                <div class="col-12">
                                                    <div class="form-group">
                                                        <label for="accountTextarea">Describe your task in more
                                                            detail</label>
                                                        <textarea class="form-control pac-target-input"
                                                            name="description" id="accountTextarea" rows="3"
                                                            placeholder="Description."></textarea>
                                                    </div>
                                                </div>
                                                <!-- limit file upload starts -->
                                                <div class="row" style="display: contents;">
                                                    <div class="col-12">
                                                        <div class="card">
                                                            <div class="card-header" style="background-color: #b9deff">
                                                                <h4 class="card-title">Describe your task in more detail
                                                                </h4>
                                                            </div>
                                                            <div class="card-content col-12">
                                                                <div class="card-body" id="image-list">
                                                                    <p class="card-text">
                                                                        Upload Picture</p>
                                                                    <input type="file" name="pic">
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-12">
                                                    <div class="form-group">
                                                        <label>What type of task is it?</label>
                                                        <ul class="list-unstyled mb-0">
                                                            <li class="d-inline-block mr-2">
                                                                <fieldset>
                                                                    <input type="radio" checked name="type"
                                                                        value="physical">
                                                                    <i class="ficon feather icon-map-pin"></i>Physical
                                                                    <div class="vs-radio-con"></div>
                                                                </fieldset>
                                                            </li>
                                                            <li class="d-inline-block mr-2">
                                                                <fieldset>
                                                                    <input type="radio" name="type" value="online">
                                                                    <i class="ficon feather icon-globe"></i>Online
                                                                    <div class="vs-radio-con"></div>
                                                                </fieldset>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="col-12">
                                                    <div class="form-group">
                                                        <div class="controls">
                                                            <label for="account-username">Location</label>
                                                            <input type="text" name="loc"
                                                                class="form-control pac-target-input" id="address"
                                                                placeholder="Locations" required>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-12">
                                                    <div class="form-group">
                                                        <div class="controls">
                                                            <label for="account-username">Date</label>
                                                            <input type="date" name="due_date" class="form-control"
                                                                placeholder="Date" required
                                                                data-validation-required-message="This username field is required">
                                                        </div>
                                                    </div>
                                                </div>

                                                <input hidden type="number" name="people" class="form-control"
                                                    placeholder="Taskers" required value="1"
                                                    data-validation-required-message="This username field is required">

                                                <div class="col-12">
                                                    <div class="form-group">
                                                        <div class="controls">
                                                            <label for="account-username">What's your budget
                                                                estimate?</label>
                                                            <input type="number" name="budget" class="form-control"
                                                                placeholder="Amount" required
                                                                data-validation-required-message="This username field is required">
                                                            <input type="hidden" value="" name="latitude" id="latitude">
                                                            <input type="hidden" value="" name="longitude"
                                                                id="longitude">
                                                        </div>
                                                    </div>
                                                </div>

                                            </div>
                                        </div>
                                        <div class="modal-footer">
                                            <input type="submit" class="btn btn-primary mr-sm-1 mb-1 mb-sm-0"
                                                value="Get Offers">
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>





                        <li class="nav-item d-none d-lg-block"><a class="nav-link nav-link-expand"><i
                                    class="ficon feather icon-maximize" style="color: white "></i></a>
                        </li>
                        @if (auth()->user())
                            <li class="dropdown dropdown-notification nav-item">
                                <a class="nav-link nav-link-label" href="#" data-toggle="dropdown">
                                    <i class="ficon feather icon-message-square" style="color: white"></i><span
                                        class="badge badge-pill badge-primary badge-up">{{ auth()->user()->messages->where('seen', 0)->count() }}</span></a>
                                <ul class="dropdown-menu dropdown-menu-media dropdown-menu-right">
                                    <li class="dropdown-menu-header">
                                        <div class="dropdown-header m-0 p-2">
                                            <h3 class="white">
                                                {{ auth()->user()->messages->where('seen', 0)->count() }}
                                                New</h3><span class="notification-title"> Messages</span>
                                        </div>
                                    </li>
                                    <li class="scrollable-container media-list">
                                        @if (auth()->user())
                                            @foreach ($messages as $message)
                                    <li
                                        id="user-{{ $message->from_id == auth()->user()->id ? $message->to_id : $message->from_id }}">
                                        <div class="m-1 d-flex">
                                            <a
                                                href="{{ route('user', $message->from_id == auth()->user()->id ? $message->to_id : $message->from_id) }}">
                                                <?php
                                                $user = \App\User::whereId($message->from_id == auth()->user()->id ?
                                                $message->to_id : $message->from_id)->first();
                                                echo '<span class="notification-avatar">
                                                    <img class="rounded-circle" width="40" src="' .
                                                    $user->avatar .
                                                    '">
                                                </span>';

                                                echo '<div class="notification-text notification-msg-text ml-1">
                                                    <strong class="text-dark" style="font-size: 16px">
                                                        ' .
                                                        $user->name .
                                                        '
                                                    </strong>';
                                                    ?>
                                                    <p class="text-dark mt-0 mb-0">
                                                        @if ($message->from_id == auth()->user()->id)
                                                            You:
                                                        @endif
                                                        @if (!is_null($message->attachment))
                                                            @if ($message->from_id != auth()->user()->id && $message->seen == 0)
                                                                <b>Sent an attachment</b>
                                                            @else
                                                                Sent an attachment
                                                            @endif
                                                        @else
                                                            @if ($message->from_id != auth()->user()->id && $message->seen == 0)
                                                                <b>{{ strlen($message->body) > 35 ? substr($message->body, 0, 35) . '...' : $message->body }}</b>
                                                            @else
                                                                {{ strlen($message->body) > 35 ? substr($message->body, 0, 35) . '...' : $message->body }}
                                                            @endif
                                                        @endif
                                                        <span class="time-ago">
                                                            {{ $message->created_at->diffForHumans() }}
                                                        </span>
                                                    </p>
                                            </a>
                                            <hr>
                                        </div>
                                    </li>
                        @endforeach
                        @endif
                        </li>
                        @endif

                    </ul>

                    <li class="dropdown dropdown-notification nav-item">
                        <a class="nav-link nav-link-label" href="#" data-toggle="dropdown">
                            <i class="ficon feather icon-bell" style="color: white"></i><span
                                class="badge badge-pill badge-primary badge-up">{{ auth()->user()
    ? auth()->user()->unReadNotifications()->count()
    : '' }}</span></a>
                        <ul class="dropdown-menu dropdown-menu-media dropdown-menu-right">
                            <li class="dropdown-menu-header">
                                <div class="dropdown-header m-0 p-2">
                                    <h3 class="white">
                                        {{ auth()->user()
    ? auth()->user()->unReadNotifications()->count()
    : '' }}
                                        New</h3><span class="notification-title">App Notifications</span>
                                </div>
                            </li>
                            <li class="scrollable-container media-list">
                                @if (auth()->user())
                                    @foreach (auth()->user()->notifications as $notification)
                                        <a class="notifications-panel d-flex justify-content-between"
                                            id="notification_{{ $notification->id }}"
                                            href="{{ $notification->data['url'] }}">
                                            <div class="media d-flex align-items-start">
                                                <div class="media-left">
                                                    <i class="feather icon-plus-square font-medium-5 primary"></i>
                                                </div>
                                                <div class="media-body">

                                                    <h6 class="primary media-heading">
                                                        {{ $notification->data['heading'] }}</h6>
                                                    <small class="notification-text">
                                                        @if (is_null($notification->read_at))
                                                            <b>{{ $notification->data['body'] }}</b>
                                                            @else{{ $notification->data['body'] }}
                                                        @endif
                                                    </small>
                                                </div>
                                                <small>
                                                    <time class="media-meta"
                                                        datetime="2015-06-11T18:29:20+08:00">{{ $notification->created_at->diffForHumans() }}
                                                    </time>
                                                </small>
                                            </div>
                                        </a>
                                    @endforeach
                                @endif
                            </li>
                            <li class="dropdown-menu-footer"><a class="dropdown-item p-1 text-center"
                                    href="javascript:void(0)">Read all notifications</a>
                            </li>
                        </ul>

                    <li class="dropdown dropdown-user nav-item"><a class="dropdown-toggle nav-link dropdown-user-link"
                            href="#" data-toggle="dropdown">
                            <div class="user-nav d-sm-flex d-none"><span class="user-name text-bold-600"
                                    style="color: white">{{ auth()->user() ? auth()->user()->full_name : '' }}</span><span
                                    class="user-status"></span></div>
                            <span><img class="round"
                                    src="{{ auth()->user()->avatar ?? 'https://www.pngitem.com/pimgs/m/150-1503941_user-windows-10-user-icon-png-transparent-png.png' }}"
                                    alt="avatar" height="40" width="40"></span>
                        </a>
                        @if (auth()->user())
                            <div class="dropdown-menu dropdown-menu-right">
                                <a class="dropdown-item" href="{{ route('homepage') }}"> Home</a>
                                {{-- <a class="dropdown-item" href="{{route('company.profile.view',auth()->user()?auth()->user()->id:'0')}}"> Public Profile</a> --}}
                                <a class="dropdown-item" href="{{ route('company.profile.edit') }}"> My Account</a>
                                @if (auth()->user()->role == 'company' || auth()->user()->role == 'freelancer')
                                    <a href="{{ route('company.earn.index') }}" class="dropdown-item">Earn money with
                                        us</a>
                                    <a class="dropdown-item"
                                        href="{{ route('company.user_biddings', auth()->id()) }}">
                                        My Tasks</a>
                                @endif
                                @if (auth()->user()->role == 'user')
                                    <a class="dropdown-item" href="{{ route('user.task.my_task') }}"> My Tasks</a>
                                @endif
                                <a class="dropdown-item" href="{{ url('chat') }}"> My Messages</a>

                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="{{ route('logout') }}"
                                    onclick="event.preventDefault();  document.getElementById('logout-form').submit();">
                                    <i class="feather icon-power"></i>{{ __('Logout') }}
                                </a>
                                <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                    style="display: none;">
                                    @csrf
                                </form>
                            </div>
                        @else
                            <div class="dropdown-menu dropdown-menu-right">
                                <a class="dropdown-item" href="{{ route('login') }}"> Login</a>
                            </div>
                        @endif

                    </li>
                    </ul>
                </div>
            </div>
        </div>
    </nav>


    <!-- END: Header-->


    {{-- <!-- BEGIN: Main Menu-->
<div class="horizontal-menu-wrapper">
    <div
        class="header-navbar navbar-expand-sm navbar navbar-horizontal floating-nav navbar-light navbar-without-dd-arrow navbar-shadow menu-border"
        role="navigation" data-menu="menu-wrapper">
        <div class="navbar-header">
            <ul class="nav navbar-nav flex-row">
                <li class="nav-item mr-auto"><a class="navbar-brand"
                                                href="../../../html/ltr/horizontal-menu-template/index.html">
                        <div class="brand-logo"></div>
                        <h2 class="brand-text mb-0">Kii-wik </h2>
                    </a></li>
                <li class="nav-item nav-toggle"><a class="nav-link modern-nav-toggle pr-0" data-toggle="collapse"><i
                            class="feather icon-x d-block d-xl-none font-medium-4 primary toggle-icon"></i><i
                            class="toggle-icon feather icon-disc font-medium-4 d-none d-xl-block collapse-toggle-icon primary"
                            data-ticon="icon-disc"></i></a></li>
            </ul>
        </div>
        <!-- Horizontal menu content-->
        @if (auth()->user())
        <div class="navbar-container main-menu-content" data-menu="menu-container">
            <!-- include ../../../includes/mixins-->
            <ul class="nav navbar-nav" id="main-menu-navigation" data-menu="menu-navigation">
                <li class=" nav-item">
                    <a href="{{route('homepage')}}">
    <span class="menu-title" data-i18n="Email">Home</span>
    </a>
    </li>
    <li class=" nav-item">
        <a href="{{route('company.profile.view',auth()->user()->id)}}">
            <span class="menu-title" data-i18n="Email">Public Profile</span>
        </a>
    </li>
    <li class=" nav-item">
        <a href="{{route('company.profile.edit')}}">
            <span class="menu-title" data-i18n="Email">My Account </span>
        </a>
    </li>
    <li class="dropdown nav-item active" data-menu="dropdown">
        <a class="dropdown-toggle nav-link" href="index.html" data-toggle="dropdown">

            <span data-i18n="Dashboard">TASKS</span>
        </a>
        <ul class="dropdown-menu">
            <li data-menu=""><a class="dropdown-item" href="{{route('user.task.my_task')}}" data-toggle="dropdown" data-i18n="Analytics">My Tasks</a>
            </li>
            <li data-menu=""><a class="dropdown-item" href="dashboard-ecommerce.html" data-toggle="dropdown" data-i18n="eCommerce">Deleted Tasks</a>
            </li>
            <li data-menu=""><a class="dropdown-item" href="{{route('user.task.pending_task')}}" data-toggle="dropdown" data-i18n="eCommerce">Pending Tasks</a>
            </li>
        </ul>
    </li>

    <li class=" nav-item">
        <a href="{{url('chat')}}">
            <span class="menu-title" data-i18n="Email">My Messages</span>
        </a>
    </li>
    <li class=" nav-item">
        <a href="{{route('user.task.my_task')}}">
            <span class="menu-title" data-i18n="Email">My Tasks</span>
        </a>
    </li>
    <li class=" nav-item">
        <a href="{{route('company.user_biddings',auth()->id())}}">
            <span class="menu-title" data-i18n="Email">My Biddings</span>
        </a>
    </li>
    </ul>
    </div>
    @endif
    </div>
    </div>
    <!-- END: Main Menu--> --}}

    <script>
        function initMap() {
            const input = document.getElementById("address");
            const autocomplete = new google.maps.places.Autocomplete(input);
            autocomplete.setFields(["address_components", "geometry", "icon", "name"]);
            autocomplete.addListener("place_changed", () => {
                const place = autocomplete.getPlace();
                if (!place.geometry) {
                    window.alert("No details available for input: '" + place.name + "'");
                    return;
                }
                $('#latitude').val(place.geometry.location.lat())
                $('#longitude').val(place.geometry.location.lng())
                console.log([$('#longitude'), $('#latitude')])
            });
        }

    </script>
