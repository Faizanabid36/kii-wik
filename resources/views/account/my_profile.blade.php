@extends('layouts.main')


@section('stylesheets')
    <link rel="stylesheet" type="text/css" href="{{ asset('theme/app-assets/css/pages/users.css') }}">
    <style>
        .fa {
            font-size: 25px;
        }

        /* Three column layout */
        .side {
            float: left;
            width: 15%;
            margin-top: 10px;
        }

        .middle {
            float: left;
            width: 60%;
            margin-top: 10px;
        }

        /* Clear floats after the columns */
        .row:after {
            content: "";
            display: table;
            clear: both;
        }

        /* The bar container */
        .bar-container {
            width: 90%;
            background-color: #e0e0e0;
            text-align: center;
            color: white;
            border-radius: 50px;
            margin: 0px auto;
        }

        /* Responsive layout - make the columns stack on top of each other instead of next to each other */
        @media (max-width: 400px) {

            .side,
            .middle {
                width: 100%;
            }
        }

        .rating {
            display: flex;
            flex-direction: row-reverse;
            justify-content: center
        }

        .rating>input {
            display: none
        }

        .rating>label {
            position: relative;
            width: 1em;
            font-size: 4.5vw;
            color: #28b6f6 !important;
            cursor: pointer
        }

        .rating>label::before {
            content: "\2605";
            position: absolute;
            opacity: 0
        }

        .rating>label:hover:before,
        .rating>label:hover~label:before {
            opacity: 1 !important
        }

        .rating>input:checked~label:before {
            opacity: 1
        }

        .rating:hover>input:checked~label:before {
            opacity: 0.4
        }

        .grey-text {
            color: #BDBDBD
        }

        .green-text {
            color: #4CAF50
        }

        .profile-pic img {
            border-radius: 50%
        }

        #myImg {
            border-radius: 5px;
            cursor: pointer;
            transition: 0.3s;
        }

        #myImg:hover {
            opacity: 0.7;
        }

        /* The Modal (background) */
        .modal {
            display: none;
            /* Hidden by default */
            position: fixed;
            /* Stay in place */
            z-index: 1;
            /* Sit on top */
            padding-top: 100px;
            /* Location of the box */
            left: 0;
            top: 0;
            width: 100%;
            /* Full width */
            height: 100%;
            /* Full height */
            overflow: auto;
            /* Enable scroll if needed */
            background-color: rgb(0, 0, 0);
            /* Fallback color */
            background-color: rgba(0, 0, 0, 0.9);
            /* Black w/ opacity */
        }

        /* Modal Content (image) */
        .modal-content {
            margin: auto;
            display: block;
            width: 80%;
            max-width: 700px;
        }



        /* Add Animation */
        .modal-content,
        #caption {
            -webkit-animation-name: zoom;
            -webkit-animation-duration: 0.6s;
            animation-name: zoom;
            animation-duration: 0.6s;
        }

        @-webkit-keyframes zoom {
            from {
                -webkit-transform: scale(0)
            }

            to {
                -webkit-transform: scale(1)
            }
        }

        @keyframes zoom {
            from {
                transform: scale(0)
            }

            to {
                transform: scale(1)
            }
        }

        /* The Close Button */
        .close {
            position: absolute;
            top: 15px;
            right: 35px;
            color: #f1f1f1;
            font-size: 40px;
            font-weight: bold;
            transition: 0.3s;
        }

        .close:hover,
        .close:focus {
            color: #bbb;
            text-decoration: none;
            cursor: pointer;
        }

        /* 100% Image Width on Smaller Screens */
        @media only screen and (max-width: 700px) {
            .modal-content {
                width: 100%;
            }
        }

    </style>
    <style>
        /* Style the Image Used to Trigger the Modal */


        /* The Modal (background) */
        #image-viewer {
            display: none;
            position: fixed;
            z-index: 1;
            padding-top: 100px;
            left: 0;
            top: 0;
            width: 100%;
            height: 100%;
            overflow: auto;
            background-color: rgb(0, 0, 0);
            background-color: rgba(0, 0, 0, 0.9);
        }

        .modal-content {
            margin: auto;
            display: block;
            width: 80%;
            max-width: 700px;
        }

        .modal-content {
            animation-name: zoom;
            animation-duration: 0.6s;
        }

        @keyframes zoom {
            from {
                transform: scale(0)
            }

            to {
                transform: scale(1)
            }
        }

        #image-viewer .close {
            position: absolute;
            top: 15px;
            right: 35px;
            color: #f1f1f1;
            font-size: 40px;
            font-weight: bold;
            transition: 0.3s;
            margin-top: 6%;
        }

        #image-viewer .close:hover,
        #image-viewer .close:focus {
            color: #bbb;
            text-decoration: none;
            cursor: pointer;
        }

        @media only screen and (max-width: 700px) {
            .modal-content {
                width: 100%;
            }
        }

    </style>

@endsection
@section('content')
    <!-- BEGIN: Content-->
    <div class="app-content content">
        <div class="content-overlay"></div>
        <div class="header-navbar-shadow"></div>
        <div class="content-wrapper">
            <div class="content-header row">
            </div>
            <div class="content-body">
                <div id="user-profile">
                    <div class="row">
                        <div class="col-1"></div>
                        <div class="col-10">
                            <div class="profile-header mb-2">
                                <div class="relative">
                                    <div class="cover-container">
                                        <img class="img-fluid bg-cover rounded-0 w-100" style="height:351px"
                                            src="{{ $user->cover ?? asset('theme/app-assets/images/banner/banner-4.jpg') }}">
                                    </div>
                                    <div class="profile-img-container d-flex align-items-center justify-content-between">
                                        <img src="{{ $user->avatar }}" class="rounded-circle img-border box-shadow-1"
                                            alt="Card image">
                                        <div class="float-right">
                                            @if (Session::get('viewAsPublic') == 'true')
                                                {{ Session::put('viewAsPublic', 'false') }}
                                                <button type="button"
                                                    class="btn btn-icon btn-icon  btn-primary mr-1 waves-effect waves-light">
                                                    <a href="{{ route('company.profile.edit') }}" class="text-white">
                                                        <i class="feather icon-edit-2"></i>Exit Public View
                                                    </a>
                                                </button>
                                            @else
                                                @if (isset(auth()->user()->id) && auth()->user()->id == $user->id)
                                                    <button type="button"
                                                        class="btn btn-icon btn-icon  btn-primary mr-1 waves-effect waves-light">
                                                        <a href="{{ route('company.profile.edit') }}" class="text-white">
                                                            <i class="feather icon-edit-2"></i>Edit
                                                        </a>
                                                    </button>
                                                @else
                                                    <button type="button"
                                                        class="btn btn-icon btn-icon rounded-circle btn-danger waves-effect waves-light">
                                                        <a data-toggle="modal" data-target="#reportUser">
                                                            <i class="feather icon-info"></i>
                                                        </a>
                                                    </button>
                                                @endif
                                            @endif
                                        </div>
                                    </div>
                                </div>
                                <div class="d-flex justify-content-end align-items-center profile-header-nav">
                                    <nav class="navbar navbar-expand-sm w-100 pr-0">
                                        <button class="navbar-toggler pr-0" type="button" data-toggle="collapse"
                                            data-target="navbarSupportedContent" aria-controls="navbarSupportedContent"
                                            aria-expanded="false" aria-label="Toggle navigation">
                                            <span class="navbar-toggler-icon"><i
                                                    class="feather icon-align-justify"></i></span>
                                        </button>
                                    </nav>
                                </div>
                            </div>
                        </div>
                        <div class="col-1"></div>
                    </div>
                    <section id="profile-info" style="margin-top: 40px;">
                        <div class="row">
                            <div class="col-1"></div>
                            <div class="col-lg-3 col-12">
                                <div class="card">
                                    <div class="card-header">
                                        <h3>{{ ucfirst($user->full_name) }}</h3>
                                        @if ($user->is_approved)
                                            <div class="badge badge-pill badge-glow badge-success mr-1 mb-1"> <i
                                                    class="feather icon-check cursor-pointer" style="    top: 0px">
                                                </i><span> {{ $user->role }}</span></div>

                                        @else
                                            <div class="badge badge-pill badge-glow badge-danger mr-1 mb-1"> <span>Not
                                                    Verified</span></div>

                                        @endif

                                    </div>
                                    <hr>
                                    <div class="card-body">

                                        @if (isset(auth()->user()->id) && auth()->user()->role != 'user')
                                            <div class="mt-1">
                                                <h6 class="mb-0"><b>{{ __('Description') }}:</b></h6>
                                                @if (empty($user->description))
                                                    <p class="text-danger"><i>{{ __('No Description Added') }}</i></p>
                                                @else
                                                    <p>{{ $user->description }}</p>
                                                @endif
                                            </div>
                                        @endif
                                        <div class="mt-1">
                                            <h6 class="mb-0"><b>{{ __('Joined On') }}:</b></h6>
                                            <p>{{ \Carbon\Carbon::parse($user->created_at)->format('d M, Y') }}</p>
                                        </div>
                                        <div class="mt-1">
                                            <h6 class="mb-0">{{ __('Address') }}:</h6>
                                            @if (empty($user->loc))
                                                <p class="text-danger"><i>{{ __('No Address Added') }}</i></p>
                                            @else
                                                <p>{{ $user->loc }}</p>
                                            @endif

                                        </div>
                                        <div class="mt-1">
                                            <h6 class="mb-0"><b>{{ __('Email') }}:</b></h6>
                                            <p>{{ $user->email }}</p>
                                        </div>
                                        @if (isset(auth()->user()->id) && auth()->user()->role != 'user')
                                            <div class="mt-1">
                                                <h6 class="mb-0"><b>{{ __('Tagline') }}</b>:</h6>
                                                @if (empty($user->tag))
                                                    <p class="text-danger">{{ 'No Tagline' }}</p>
                                                @else
                                                    <p>{{ $user->tag }}</p>
                                                @endif
                                            </div>
                                            <div class="mt-1">
                                                @if (count($user->skills))
                                                    <h6 class="mb-0">{{ __('Skills') }}:</h6>
                                                    @foreach ($user->skills as $skill)
                                                        <img class="btn btn-sm mr-25 p-25 waves-effect waves-light rounded-lg"
                                                            src="{{ $skill->attachment_path }}" width="60" height="60"
                                                            title="{{ $skill->name }}" alt="{{ $skill->name }}">
                                                    @endforeach
                                                @else
                                                    <h6 class="text-danger"><i>{{ __('No Skills Added Yet') }}</i></h6>
                                                @endif
                                            </div>
                                            <h4 class="mt-4 ml-1">Verification</h4>

                                            <div class=" mb-0 badge badge-pill badge-glow badge-success mr-1 mb-1"> <i
                                                    class="feather icon-check cursor-pointer" style="    top: 0px">
                                                </i><span>Email Verified</span></div>

                                            @if ($user->is_approved)
                                                <div class=" mb-0 badge badge-pill badge-glow badge-success mr-1 mb-1"> <i
                                                        class="feather icon-check cursor-pointer" style="    top: 0px">
                                                    </i><span>Documents Verified</span></div>
                                            @else
                                                <div class=" mb-0 badge badge-pill badge-glow badge-danger mr-1 mb-1">
                                                    <span>Documents Not Verified</span>
                                                </div>
                                            @endif
                                            <h4 class="mt-4 ml-1">Qualification</h4>
                                            @if ($user->qualification)
                                                <ul class="activity-timeline timeline-left list-unstyled">
                                                    <li>
                                                        <div class="timeline-icon btn-primary">
                                                            <i class="feather icon-check font-medium-2"></i>
                                                        </div>
                                                        <div class="timeline-info">
                                                            <p class="font-weight-bold">What are
                                                                you good at?</p>
                                                            <span>{{ $user->qualification->good_at }}</span>
                                                        </div>

                                                    </li>
                                                    <li>
                                                        <div class="timeline-icon btn-primary">
                                                            <i class="feather icon-check font-medium-2"></i>
                                                        </div>
                                                        <div class="timeline-info">
                                                            <p class="font-weight-bold">How do you
                                                                get around?</p>
                                                            @foreach (json_decode($user->qualification->get_around) as $q)
                                                                <span>{{ $q }}
                                                                </span>
                                                            @endforeach
                                                        </div>

                                                    </li>
                                                    <li>
                                                        <div class="timeline-icon btn-primary">
                                                            <i class="feather icon-check font-medium-2"></i>
                                                        </div>
                                                        <div class="timeline-info">
                                                            <p class="font-weight-bold">What
                                                                languages can you speak/write?</p>
                                                            <span>{{ $user->qualification->languages }}
                                                            </span>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="timeline-icon btn-primary">
                                                            <i class="feather icon-check font-medium-2"></i>
                                                        </div>
                                                        <div class="timeline-info">
                                                            <p class="font-weight-bold">What
                                                                qualifications have you got?</p>
                                                            <span>{{ $user->qualification->qualification }}
                                                            </span>
                                                        </div>

                                                    </li>
                                                    <li>
                                                        <div class="timeline-icon btn-primary">
                                                            <i class="feather icon-check font-medium-2"></i>
                                                        </div>
                                                        <div class="timeline-info">
                                                            <p class="font-weight-bold">
                                                                What's your work experience?</p>
                                                            <span>{{ $user->qualification->work_exp }}
                                                            </span>
                                                        </div>
                                                    </li>


                                                </ul>
                                            @else
                                                <p class="text-danger"><i>{{ __('No Qualification Added') }}</i></p>
                                            @endif
                                        @endif
                                    </div>
                                </div>
                            </div>
                            @if (isset(auth()->user()->id) && auth()->user()->role != 'user')
                                <div class="col-lg-4 col-12">
                                    <div class="card">
                                        <div class="card-body">
                                            <div class="row mt-1 ml-1">
                                                <h4>{{ __('Portfolio') }}</h4>&nbsp;
                                                <div class="row">
                                                    <div class="images">
                                                        @if (isset($user->portfolio))
                                                            @foreach ($user->portfolio as $portfolio)
                                                                <div class="col-md-4 col-6">
                                                                    <img src="{{ $portfolio->attach }}"
                                                                        style="width:100%;max-width:300px">
                                                                </div>
                                                            @endforeach
                                                        @endif
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endif
                            <div
                                class="col-lg-<?php echo isset(auth()->user()->id) && auth()->user()->role != 'user' ? 3 : 7; ?> col-12">
                                <div class="card">
                                    <div class="card-header">
                                        <h4 class="card-title">Profile Reviews </h4>
                                        <a class="heading-elements-toggle"><i
                                                class="fa fa-ellipsis-v font-medium-3"></i></a>
                                    </div>
                                    <div class="card-body">
                                        <div style="display: flex">
                                            @for ($x = 0; $x < 5; $x++) <i class="mt-1 feather icon-star text-
                                                                        @if ($x <
                                                    ceil($average_rating)) warning
                                                    @else secondary @endif">
                                                </i>
                                            @endfor
                                            <p class="ml-3 mt-1"> {{ round($average_rating) ?? 0 }} based
                                                on {{ count($reviews) ?? 0 }}
                                                reviews.</p>
                                        </div>
                                        <hr style="border:2px solid #dbdbdb">
                                        <div class="row">
                                            <div class="side text-center">
                                                <div>5
                                                    <i class="mt-1 feather icon-star text-secondary"></i>
                                                </div>
                                            </div>
                                            <div class="middle">
                                                <div class="bar-container">
                                                    <div style="width: {{ (count(filterRating($reviews, 5)) / (count($reviews) == 0 ? 1 : count($reviews))) * 100 }}%;
                                                                                height: 18px;
                                                                                border-radius: 50px;
                                                                                background-color: #4CAF50;">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="side text-center">
                                                <div>{{ count(filterRating($reviews, 5)) ?? 0 }}</div>
                                            </div>
                                            <div class="side text-center">
                                                <div>4 <i class="mt-1 feather icon-star text-secondary"></i></div>
                                            </div>
                                            <div class="middle">
                                                <div class="bar-container">
                                                    <div style="width: {{ (count(filterRating($reviews, 4)) / (count($reviews) == 0 ? 1 : count($reviews))) * 100 }}%;
                                                                                height: 18px;
                                                                                border-radius: 50px;
                                                                                background-color: #2196F3;"></div>
                                                </div>
                                            </div>
                                            <div class="side text-center">
                                                <div>{{ count(filterRating($reviews, 4)) ?? 0 }}</div>
                                            </div>
                                            <div class="side text-center">
                                                <div>3 <i class="mt-1 feather icon-star text-secondary"></i></div>
                                            </div>
                                            <div class="middle">
                                                <div class="bar-container">
                                                    <div style="width: {{ (count(filterRating($reviews, 3)) / (count($reviews) == 0 ? 1 : count($reviews))) * 100 }}%;
                                                                                height: 18px;
                                                                                border-radius: 50px;
                                                                                background-color: #00bcd4;"></div>
                                                </div>
                                            </div>
                                            <div class="side text-center">
                                                <div>{{ count(filterRating($reviews, 3)) ?? 0 }}</div>
                                            </div>
                                            <div class="side text-center">
                                                <div>2 <i class="mt-1 feather icon-star text-secondary"></i></div>
                                            </div>
                                            <div class="middle">
                                                <div class="bar-container">
                                                    <div style="width: {{ (count(filterRating($reviews, 2)) / (count($reviews) == 0 ? 1 : count($reviews))) * 100 }}%;
                                                                                height: 18px;
                                                                                border-radius: 50px;
                                                                                background-color: #ff9800"></div>
                                                </div>
                                            </div>
                                            <div class="side text-center">
                                                <div>{{ count(filterRating($reviews, 2)) ?? 0 }}</div>
                                            </div>
                                            <div class="side text-center">
                                                <div>1 <i class="mt-1 feather icon-star text-secondary"></i></div>
                                            </div>
                                            <div class="middle">
                                                <div class="bar-container">
                                                    <div style="width: {{ (count(filterRating($reviews, 1)) / (count($reviews) == 0 ? 1 : count($reviews))) * 100 }}%;
                                                                                height: 18px;
                                                                                border-radius: 50px;
                                                                                background-color: #f44336"></div>
                                                </div>
                                            </div>
                                            <div class="side text-center">
                                                <div>{{ count(filterRating($reviews, 1)) ?? 0 }}</div>
                                            </div>
                                        </div>
                                        <hr style="border:2px solid #dbdbdb" class="mb-5">
                                        <div>
                                            @foreach ($reviews as $review)
                                                <div class="review px-5 m-2">
                                                    <div class="row d-flex">
                                                        <div class="avatar avatar-xl">
                                                            <img src="{{ $review['user']->avatar }}">
                                                        </div>
                                                        <div class="d-flex flex-column mt-1 ml-1">
                                                            <h4>{{ $review['user']->name ?? 'User' }}</h4>
                                                            <p class="grey-text">
                                                                <i>{{ $review['created_at']->diffForHumans() }}</i>
                                                            </p>
                                                        </div>
                                                    </div>
                                                    <div class="row" style="margin-top: 5px; margin-left: -2px">
                                                        @for ($x = 0; $x < 5; $x++) <i
                                                                class="feather icon-star text-
                                                                                    @if ($x <
                                                                $review['rating']) warning
                                                                @else secondary @endif">
                                                            </i>
                                                        @endfor
                                                    </div>
                                                    <div class="green-text">
                                                        <h5 class="mb-0 pt-2">
                                                            <i>{{ $review['review'] }}</i>
                                                        </h5>
                                                    </div>
                                                </div>
                                                @if (!$loop->last)
                                                    <hr>
                                                @endif
                                            @endforeach
                                        </div>
                                    </div>
                                </div>


                            </div>
                            <div class="col-1"></div>
                        </div>

                    </section>
                </div>
            </div>
        </div>
    </div>
    <div id="image-viewer">
        <img class="modal-content" id="full-image">
        <span class="close">X</span>
    </div>
    <!-- END: Content-->
@endsection

@section('footer_scripts')
    <script src="{{ asset('theme/app-assets/js/scripts/pages/user-profile.js') }}"></script>
    <script>
        function preview(src) {
            document.getElementById('main').src = src
        }



        $(".images img").click(function() {
            $("#full-image").attr("src", $(this).attr("src"));
            $('#image-viewer').show();
        });

        $("#image-viewer .close").click(function() {
            $('#image-viewer').hide();
        });

    </script>
@endsection
