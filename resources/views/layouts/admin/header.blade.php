<!DOCTYPE html>
<html class="loading" lang="en" data-textdirection="ltr">
<!-- BEGIN: Head-->

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta name="description"
          content="Vuexy admin is super flexible, powerful, clean &amp; modern responsive bootstrap 4 admin template with unlimited possibilities.">
    <meta name="keywords"
          content="admin template, Vuexy admin template, dashboard template, flat admin template, responsive admin template, web app">
    <meta name="author" content="PIXINVENT">
    <title>Kii-wik</title>
    <link rel="apple-touch-icon" href="{{asset('theme/app-assets/images/ico/apple-icon-120.png')}}">
    <link rel="shortcut icon" type="image/x-icon" href="{{asset('theme/app-assets/images/ico/favicon.ico')}}">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:300,400,500,600" rel="stylesheet">

    <!-- BEGIN: Vendor CSS-->
    <link rel="stylesheet" type="text/css" href="{{asset('theme/app-assets/vendors/css/vendors.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('theme/app-assets/vendors/css/forms/select/select2.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('theme/app-assets/vendors/css/pickers/pickadate/pickadate.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('theme/app-assets/vendors/css/ui/prism.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('theme/app-assets/vendors/css/file-uploaders/dropzone.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('theme/app-assets/vendors/css/editors/quill/katex.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('theme/app-assets/vendors/css/editors/quill/monokai-sublime.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('theme/app-assets/vendors/css/editors/quill/quill.snow.css')}}">



    <!-- END: Vendor CSS-->
    <script src="{{asset('https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js')}}"></script>
    <!-- BEGIN: Theme CSS-->
    <link rel="stylesheet" type="text/css" href="{{asset('theme/app-assets/css/bootstrap.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('theme/app-assets/css/bootstrap-extended.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('theme/app-assets/css/colors.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('theme/app-assets/css/components.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('theme/app-assets/css/themes/dark-layout.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('theme/app-assets/css/themes/semi-dark-layout.css')}}">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js" integrity="sha512-VEd+nq25CkR676O+pLBnDW09R7VQX9Mdiij052gVCp5yVH3jGtH70Ho/UUv4mJDsEdTvqRCFZg0NKGiojGnUCw==" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.css" integrity="sha512-3pIirOrwegjM6erE5gPSwkUzO+3cTjpnV9lexlNZqvupR64iZBnOOTiiLPb9M36zpMScbmUNIcHUqKD47M719g==" crossorigin="anonymous" />
    <!-- BEGIN: Page CSS-->
    <link rel="stylesheet" type="text/css"
          href="{{asset('/theme/app-assets/css/core/menu/menu-types/vertical-menu.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('theme/app-assets/css/core/colors/palette-gradient.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('theme/app-assets/css/pages/app-chat.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('theme/app-assets/css/pages/users.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('theme/app-assets/css/pages/app-user.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('theme/app-assets/css/pages/app-email.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('theme/app-assets/css/pages/app-todo.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('theme/app-assets/css/themes/semi-dark-layout.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('theme/app-assets/css/core/menu/menu-types/vertical-menu.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('theme/app-assets/css/core/colors/palette-gradient.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('theme/app-assets/css/plugins/file-uploaders/dropzone.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('theme/app-assets/css/plugins/file-uploaders/dropzone.css')}}">
    @yield('stylesheets')



    <link rel="stylesheet" type="text/css" href="{{asset('theme/app-assets/css/plugins/forms/validation/form-validation.css')}}">
    <!-- END: Page CSS-->

    <!-- BEGIN: Custom CSS-->
    <link rel="stylesheet" type="text/css" href="{{asset('theme/assets/css/style.css')}}">
    <!-- END: Custom CSS-->


    <script src="https://polyfill.io/v3/polyfill.min.js?features=default"></script>
    <script
        src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBu17qERWXajr4_OudOEpuH73yHd92KYI8&callback=initMap&libraries=places&v=weekly"
        defer
    ></script>
</head>
<!-- END: Head-->

<!-- BEGIN: Body-->

<body
    class="vertical-layout vertical-menu-modern semi-dark-layout content-left-sidebar chat-application navbar-floating footer-static  "
    data-open="click" data-menu="vertical-menu-modern" data-col="content-left-sidebar" data-layout="semi-dark-layout">

<!-- BEGIN: Header-->
<nav class="header-navbar navbar-expand-lg navbar navbar-with-menu floating-nav navbar-light navbar-shadow">
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
                        <div class="modal-info mr-1 mb-1 d-inline-block">
                            <!-- Button trigger modal -->

                        </div>
                        @if(auth()->user()->role=='user' )
                        <li class="nav-item d-none d-lg-block">
                            <button type="button" class="btn btn-primary  mr-sm-1 mb-1 mb-sm-0" data-toggle="modal" data-target="#exampleModalScrollable">
                                Post task
                            </button>
                          </li>
                          @endif
                        @if(auth()->user()->role=='admin' )

                        @else
                        <li class="nav-item d-none d-lg-block">
                             <a href="{{route('company.earn.index')}}">
                                <button type="button"  class="btn  mr-sm-1 mb-1 mb-sm-0" style="border: 1px solid #28b6f6;">Earn money</button>
                            </a>
                            </li>
                        @endif
                    </ul>
                </div>
                <ul class="nav navbar-nav float-right">
                    <li class="dropdown dropdown-language nav-item">
                        <div class="dropdown-menu" aria-labelledby="dropdown-flag">
                            <a class="dropdown-item" href="#" data-language="en">
                                <i class="flag-icon flag-icon-us"></i> English</a>
                            <a class="dropdown-item" href="#" data-language="fr">
                                <i class="flag-icon flag-icon-fr"></i> French</a>
                            <a class="dropdown-item" href="#" data-language="de">
                                <i class="flag-icon flag-icon-de"></i> German</a>
                            <a class="dropdown-item" href="#" data-language="pt">
                                <i class="flag-icon flag-icon-pt"></i> Portuguese</a></div>
                    </li>

                    <li class="nav-item d-none d-lg-block"><a class="nav-link nav-link-expand"><i
                                class="ficon feather icon-maximize"></i></a></li>
                    <li class="nav-item nav-search"><a class="nav-link nav-link-search"><i
                                class="ficon feather icon-search"></i></a>
                        <div class="search-input">
                            <div class="search-input-icon"><i class="feather icon-search primary"></i></div>
                            <input class="input" type="text" placeholder="Explore Vuexy..." tabindex="-1"
                                   data-search="template-list">
                            <div class="search-input-close"><i class="feather icon-x"></i></div>
                            <ul class="search-list search-list-main"></ul>
                        </div>
                    </li>

                    <li class="dropdown dropdown-notification nav-item"><a class="nav-link nav-link-label" href="#"
                                                                           data-toggle="dropdown"><i
                                class="ficon feather icon-bell"></i><span
                                class="badge badge-pill badge-primary badge-up">{{auth()->user()->unReadNotifications()->count()}}</span></a>
                        <ul class="dropdown-menu dropdown-menu-media dropdown-menu-right">
                            <li class="dropdown-menu-header">
                                <div class="dropdown-header m-0 p-2">
                                    <h3 class="white">{{auth()->user()->unReadNotifications()->count()}} New</h3><span
                                        class="notification-title">App Notifications</span>
                                </div>
                            </li>
                            <li class="scrollable-container media-list">
                                @foreach(auth()->user()->notifications as $notification)
                                <a class="notifications-panel d-flex justify-content-between" id="notification_{{$notification->id}}" href="{{$notification->data['url']}}">
                                    <div class="media d-flex align-items-start">
                                        <div class="media-left">
                                            <i class="feather icon-plus-square font-medium-5 primary"></i></div>
                                        <div class="media-body">

                                            <h6 class="primary media-heading">{{$notification->data['heading']}}</h6><small
                                                class="notification-text"> @if(is_null($notification->read_at)) <b>{{$notification->data['body']}}</b> @else{{$notification->data['body']}} @endif </small>
                                        </div>
                                        <small>
                                            <time class="media-meta" datetime="2015-06-11T18:29:20+08:00">{{$notification->created_at->diffForHumans()}}
                                            </time>
                                        </small>
                                    </div>
                                </a>
                                @endforeach

                                {{-- <a class="d-flex justify-content-between" href="javascript:void(0)">
                                    <div class="media d-flex align-items-start">
                                        <div class="media-left"><i
                                                class="feather icon-download-cloud font-medium-5 success"></i></div>
                                        <div class="media-body">
                                            <h6 class="success media-heading red darken-1">99% Server load</h6><small
                                                class="notification-text">You got new order of goods.</small>
                                        </div>
                                        <small>
                                            <time class="media-meta" datetime="2015-06-11T18:29:20+08:00">5 hour ago
                                            </time>
                                        </small>
                                    </div>
                                </a> --}}
                                {{-- <a class="d-flex justify-content-between" href="javascript:void(0)">
                                    <div class="media d-flex align-items-start">
                                        <div class="media-left"><i
                                                class="feather icon-alert-triangle font-medium-5 danger"></i></div>
                                        <div class="media-body">
                                            <h6 class="danger media-heading yellow darken-3">Warning notifixation</h6>
                                            <small class="notification-text">Server have 99% CPU usage.</small>
                                        </div>
                                        <small>
                                            <time class="media-meta" datetime="2015-06-11T18:29:20+08:00">Today</time>
                                        </small>
                                    </div>
                                </a><a class="d-flex justify-content-between" href="javascript:void(0)">
                                    <div class="media d-flex align-items-start">
                                        <div class="media-left"><i
                                                class="feather icon-check-circle font-medium-5 info"></i></div>
                                        <div class="media-body">
                                            <h6 class="info media-heading">Complete the task</h6><small
                                                class="notification-text">Cake sesame snaps cupcake</small>
                                        </div>
                                        <small>
                                            <time class="media-meta" datetime="2015-06-11T18:29:20+08:00">Last week
                                            </time>
                                        </small>
                                    </div>
                                </a><a class="d-flex justify-content-between" href="javascript:void(0)">
                                    <div class="media d-flex align-items-start">
                                        <div class="media-left"><i class="feather icon-file font-medium-5 warning"></i>
                                        </div>
                                        <div class="media-body">
                                            <h6 class="warning media-heading">Generate monthly report</h6><small
                                                class="notification-text">Chocolate cake oat cake tiramisu
                                                marzipan</small>
                                        </div>
                                        <small>
                                            <time class="media-meta" datetime="2015-06-11T18:29:20+08:00">Last month
                                            </time>
                                        </small>
                                    </div>
                                </a> --}}
                            </li>
                            <li class="dropdown-menu-footer"><a class="dropdown-item p-1 text-center"
                                                                href="javascript:void(0)">Read all notifications</a>
                            </li>
                        </ul>
                    </li>
                    <li class="dropdown dropdown-user nav-item"><a class="dropdown-toggle nav-link dropdown-user-link"
                                                                   href="#" data-toggle="dropdown">
                            <div class="user-nav d-sm-flex d-none">
                                <span class="user-name text-bold-600">{{auth()->user()->name}}</span><span
                                    class="user-status">Available</span>
                            </div>
                            <span>
                                <img class="round"
                                     src="{{auth()->user()->avatar??"https://www.pngitem.com/pimgs/m/150-1503941_user-windows-10-user-icon-png-transparent-png.png"}}"
                                     alt="avatar" height="40" width="40"></span>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right">
                        @if(auth()->user()->role!="admin")
                        <a class="dropdown-item"
                                                                          href="{{route('company.profile.view',auth()->user()->id)}}"><i
                                    class="feather icon-user"></i> My Profile</a>
                        @endif
                                    <a class="dropdown-item"
                                                                                      href="{{url('chat')}}"><i
                                    class="feather icon-mail"></i> My Inbox</a>
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
                    </li>
                </ul>
            </div>
        </div>
    </div>
</nav>
<ul class="main-search-list-defaultlist d-none">
    <li class="d-flex align-items-center"><a class="pb-25" href="#">
            <h6 class="text-primary mb-0">Files</h6>
        </a></li>
    <li class="auto-suggestion d-flex align-items-center cursor-pointer"><a
            class="d-flex align-items-center justify-content-between w-100" href="#">
            <div class="d-flex">
                <div class="mr-50"><img src="../theme/app-assets/images/icons/xls.png" alt="png" height="32"></div>
                <div class="search-data">
                    <p class="search-data-title mb-0">Two new item submitted</p><small class="text-muted">Marketing
                        Manager</small>
                </div>
            </div>
            <small class="search-data-size mr-50 text-muted">&apos;17kb</small>
        </a></li>
    <li class="auto-suggestion d-flex align-items-center cursor-pointer"><a
            class="d-flex align-items-center justify-content-between w-100" href="#">
            <div class="d-flex">
                <div class="mr-50"><img src="../theme/app-assets/images/icons/jpg.png" alt="png" height="32"></div>
                <div class="search-data">
                    <p class="search-data-title mb-0">52 JPG file Generated</p><small class="text-muted">FontEnd
                        Developer</small>
                </div>
            </div>
            <small class="search-data-size mr-50 text-muted">&apos;11kb</small>
        </a></li>
    <li class="auto-suggestion d-flex align-items-center cursor-pointer"><a
            class="d-flex align-items-center justify-content-between w-100" href="#">
            <div class="d-flex">
                <div class="mr-50"><img src="../theme/app-assets/images/icons/pdf.png" alt="png" height="32"></div>
                <div class="search-data">
                    <p class="search-data-title mb-0">25 PDF File Uploaded</p><small class="text-muted">Digital
                        Marketing Manager</small>
                </div>
            </div>
            <small class="search-data-size mr-50 text-muted">&apos;150kb</small>
        </a></li>
    <li class="auto-suggestion d-flex align-items-center cursor-pointer"><a
            class="d-flex align-items-center justify-content-between w-100" href="#">
            <div class="d-flex">
                <div class="mr-50"><img src="../theme/app-assets/images/icons/doc.png" alt="png" height="32"></div>
                <div class="search-data">
                    <p class="search-data-title mb-0">Anna_Strong.doc</p><small class="text-muted">Web Designer</small>
                </div>
            </div>
            <small class="search-data-size mr-50 text-muted">&apos;256kb</small>
        </a></li>
    <li class="d-flex align-items-center"><a class="pb-25" href="#">
            <h6 class="text-primary mb-0">Members</h6>
        </a></li>
    <li class="auto-suggestion d-flex align-items-center cursor-pointer"><a
            class="d-flex align-items-center justify-content-between py-50 w-100" href="#">
            <div class="d-flex align-items-center">
                <div class="avatar mr-50"><img src="../theme/app-assets/images/portrait/small/avatar-s-8.jpg" alt="png"
                                               height="32"></div>
                <div class="search-data">
                    <p class="search-data-title mb-0">John Doe</p><small class="text-muted">UI designer</small>
                </div>
            </div>
        </a></li>
    <li class="auto-suggestion d-flex align-items-center cursor-pointer"><a
            class="d-flex align-items-center justify-content-between py-50 w-100" href="#">
            <div class="d-flex align-items-center">
                <div class="avatar mr-50"><img src="../theme/app-assets/images/portrait/small/avatar-s-1.jpg" alt="png"
                                               height="32"></div>
                <div class="search-data">
                    <p class="search-data-title mb-0">Michal Clark</p><small class="text-muted">FontEnd
                        Developer</small>
                </div>
            </div>
        </a></li>
    <li class="auto-suggestion d-flex align-items-center cursor-pointer"><a
            class="d-flex align-items-center justify-content-between py-50 w-100" href="#">
            <div class="d-flex align-items-center">
                <div class="avatar mr-50"><img src="../theme/app-assets/images/portrait/small/avatar-s-14.jpg" alt="png"
                                               height="32"></div>
                <div class="search-data">
                    <p class="search-data-title mb-0">Milena Gibson</p><small class="text-muted">Digital Marketing
                        Manager</small>
                </div>
            </div>
        </a></li>
    <li class="auto-suggestion d-flex align-items-center cursor-pointer"><a
            class="d-flex align-items-center justify-content-between py-50 w-100" href="#">
            <div class="d-flex align-items-center">
                <div class="avatar mr-50"><img src="../theme/app-assets/images/portrait/small/avatar-s-6.jpg" alt="png"
                                               height="32"></div>
                <div class="search-data">
                    <p class="search-data-title mb-0">Anna Strong</p><small class="text-muted">Web Designer</small>
                </div>
            </div>
        </a></li>
</ul>
<ul class="main-search-list-defaultlist-other-list d-none">
    <li class="auto-suggestion d-flex align-items-center justify-content-between cursor-pointer"><a
            class="d-flex align-items-center justify-content-between w-100 py-50">
            <div class="d-flex justify-content-start"><span class="mr-75 feather icon-alert-circle"></span><span>No results found.</span>
            </div>
        </a></li>
</ul>
<!-- END: Header-->



<script>
  $(document).ready(function(){
      $('.notifications-panel').on('click',function (event){
          const id=this.id.split('_')[1];
          console.log(id)
          window.location = window.location.origin + '/read_notification/'+id
      });
  })
</script>
