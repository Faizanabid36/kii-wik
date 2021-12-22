<!DOCTYPE html>
<html lang="en">

<head>
    <title>Kii-Wik</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=Montserrat:200,300,400,500,600,700,800&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="{{asset('https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css')}}">

    <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css"> -->
 
    <link rel="stylesheet" href="{{asset('main/css/animate.css')}}">

    <link rel="stylesheet" href="{{asset('main/css/owl.carousel.min.css')}}">
    <link rel="stylesheet" href="{{asset('main/css/owl.theme.default.min.css')}}">
    <link rel="stylesheet" href="{{asset('main/css/magnific-popup.css')}}">


    <link rel="stylesheet" href="{{asset('main/css/bootstrap-datepicker.css')}}">
    <link rel="stylesheet" href="{{asset('main/css/jquery.timepicker.css')}}">

    <link rel="stylesheet" href="{{asset('main/css/flaticon.css')}}">
    <link rel="stylesheet" href="{{asset('main/css/style.css')}}">
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBu17qERWXajr4_OudOEpuH73yHd92KYI8&callback=initMap&libraries=places&v=weekly" defer></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
    <script src="{{asset('js/custom.js')}}"></script>
    <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script> -->




    <style>
        .pac-container {
            z-index: 99999999999;
        }

        .section-padding {
            padding: 60px 0;
        }

        .owl-dots {
            text-align: center;
            margin-top: 4%;
        }

        .owl-dot {
            display: inline-block;
            height: 15px !important;
            width: 15px !important;
            background-color: #878787 !important;
            opacity: 0.8;
            border-radius: 50%;
            margin: 0 5px;
        }

        .owl-dot.active {
            background-color: #000 !important;
        }
    </style>
</head>

<body>

    <div class="wrap">
        <div class="container">
            <div class="row">

                <div class="col-md-6 d-flex align-items-center">

                </div>
                <div class="col-md-6 d-flex justify-content-md-end">
                    <div class="social-media">
                        <p class="mb-0 d-flex">
                        <ul class="ftco-footer-social p-0">
                            <li class="ftco-animate fadeInUp ftco-animated"><a href="https://twitter.com/wik_kii" target="_blank" data-toggle="tooltip" data-placement="top" title="Twitter" style="color: blanchedalmond;"><span class="fa fa-twitter"></span></a></li>
                            <li class="ftco-animate fadeInUp ftco-animated"><a target="_blank" href="https://www.facebook.com/Kiiwikmex" data-toggle="tooltip" data-placement="top" title="Facebook" style="color: blanchedalmond;"><span class="fa fa-facebook"></span></a></li>
                            <li class="ftco-animate fadeInUp ftco-animated"><a target="_blank" href="https://www.instagram.com/kiiwikoficial" data-toggle="tooltip" data-placement="top" title="Instagram" style="color: blanchedalmond;"><span class="fa fa-instagram"></span></a></li>
                        </ul>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
        <div class="container">
            <a class="navbar-brand" href="{{route('home')}}"><img src="{{asset('main/images/logo.png')}}" alt=""></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="fa fa-bars"></span> Menu
            </button>
            <div class="collapse navbar-collapse" id="ftco-nav">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item"><a href="{{route('homepage')}}" class="nav-link">Home</a></li>
                    @if( isset(auth()->user()->id))
                    @if(auth()->user()->role=='user')
                    <li class="nav-item"><a href="#" data-toggle="modal" data-target="#myModal" class="nav-link">Post a task</a></li>
                    <li class="nav-item"><a href="{{route('user.task.my_task')}}" class="nav-link">My Tasks</a></li>
                    @elseif(auth()->user()->role=='company' || auth()->user()->role=='freelancer')
                    <li class="nav-item"><a href="{{route('company.earn.index')}}" class="nav-link">Earn money with us</a></li>
                    <li class="nav-item"><a href="{{route('company.user_biddings',auth()->id())}}" class="nav-link">My Tasks</a></li>
                    @endif
                    @else
                    <li class="nav-item"><a href="#" data-toggle="modal" data-target="#myModal" class="nav-link">Post a task</a></li>
                    <li class="nav-item"><a href="{{route('company.earn.index')}}" class="nav-link">Earn money with us</a></li>
                    @endif
                    {{-- <li class="nav-item"><a href="vet.html" class="nav-link">Membership</a></li> --}}
                    <!-- {{-- @if(isset(auth()->user()->id))
                    <li class="nav-item"><a href="{{route('user.task.my_task')}}" class="nav-link">My Tasks</a></li>
                    @endif --}} -->
                    @if(!isset(auth()->user()->id))
                    <li class="nav-item"><a href="{{route('login')}}" class="nav-link">Login/Signup</a></li>
                    @else


                    <li class="dropdown nav-item " data-menu="dropdown">
                        <a class="dropdown-toggle nav-link" data-toggle="dropdown">

                            <span data-i18n="Dashboard">{{auth()->user()->name}}{{auth()->user()->lastname}}</span>
                        </a>
                        <ul class="dropdown-menu">
                            @if(auth()->user()->role!="admin")
                            <li>
                                <a class="dropdown-item" href="{{route('company.profile.view',auth()->user()->id)}}" style="font-size: 14px;"> <span style="font-weight: bold">{{auth()->user()->name}}&nbsp;{{auth()->user()->lastname}} </span> <br> Public Profile</a>
                            </li>
                            @else
                            <li>
                                <a class="dropdown-item" href="{{route('dashboard')}}" style="font-size: 14px;">Dashboard</a>
                            </li>
                            @endif
                            @if(auth()->user()->role!="admin")
                            <li>
                                <a class="dropdown-item" href="{{route('company.profile.edit')}}" style="font-size: 14px;">My Account</a>
                            </li>
                            @endif
                            <li>
                                <a class="dropdown-item" href="{{url('chat')}}" style="font-size: 14px;">My Messages</a>
                            </li>



                            <li>
                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();document.getElementById('logout-form').submit();" style="font-size: 14px;">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </div>
                            </li>

                        </ul>
                    </li>
                    @endif
                </ul>
            </div>
        </div>
    </nav>
    <!-- END nav -->
    