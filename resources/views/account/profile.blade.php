@extends('layouts.main')

@section('content')
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

<div class="app-content content">
<div class="content-overlay"></div>
<div class="header-navbar-shadow"></div>
<div class="content-wrapper">
    <div class="content-header row">
        <div class="content-header-left col-md-9 col-12 mb-2">
            <div class="row breadcrumbs-top">
                <div class="col-12">
                    <h2 class="content-header-title float-left mb-0">Account Settings</h2>
                    <div class="breadcrumb-wrapper col-12">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index.html">Home</a>
                            </li>
                            <li class="breadcrumb-item"><a href="#">Pages</a>
                            </li>
                            <li class="breadcrumb-item active"> Account Settings
                            </li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>

    </div>
    <br>
    <div class="content-body">
        <!-- account setting page start -->
        <section id="page-account-settings">
            <div class="row">
                <!-- left menu section -->
                <div class="col-md-3 mb-2 mb-md-0">
                    <ul class="nav nav-pills flex-column mt-md-0 mt-1">
                        <li class="nav-item">
                            <a class="nav-link d-flex py-75 active" id="account-pill-profile" data-toggle="pill"
                                href="#account-vertical-profile" aria-expanded="true">

                                My profile
                            </a>
                        </li>
                        <!-- <li class="nav-item">
                                        <a class="nav-link d-flex py-75 " id="account-pill-general" data-toggle="pill" href="#account-vertical-general" aria-expanded="true">

                                            Update profile
                                        </a>
                                    </li> -->

                        <li class="nav-item">
                            <a class="nav-link d-flex py-75" id="account-pill-password" data-toggle="pill"
                                href="#account-vertical-password" aria-expanded="false">
                                Change Password
                            </a>
                        </li>

                        {{-- <li class="nav-item">
                        <a class="nav-link d-flex py-75" id="account-pill-connections" data-toggle="pill" href="#account-vertical-connections" aria-expanded="false">
                            <i class="feather icon-feather mr-50 font-medium-3"></i>
                            Payments Methods
                        </a>
                    </li> --}}
                        @if ($user->role == 'freelancer' or $user->role == 'company')

                            <li class="nav-item">
                                <a class="nav-link d-flex py-75" id="account-pill-qualifications" data-toggle="pill"
                                    href="#account-vertical-qualifications" aria-expanded="false">

                                    Qualifications
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link d-flex py-75" id="account-pill-portfolio" data-toggle="pill"
                                    href="#account-vertical-portfolio" aria-expanded="false">

                                    Portfolio
                                </a>
                            </li>
                        @endif
                        @if ($user->role == 'freelancer' or $user->role == 'company')
                            <li class="nav-item">
                                <a class="nav-link d-flex py-75" id="account-pill-verification" data-toggle="pill"
                                    href="#account-vertical-verification" aria-expanded="false">

                                    Verification
                                </a>
                            </li>
                        @endif
                        <li class="nav-item">
                            <a class="nav-link d-flex py-75" href="{{ route('company.profile.view_as') }}"
                                aria-expanded="false">
                                View As Public Profile
                            </a>
                        </li>
                        {{-- <li class="nav-item"> --}}
                        {{-- <a class="nav-link d-flex py-75" id="account-pill-notifications" data-toggle="pill" href="#account-vertical-notifications" aria-expanded="false"> --}}
                        {{-- <i class="feather icon-message-circle mr-50 font-medium-3"></i> --}}
                        {{-- Notifications --}}
                        {{-- </a> --}}
                        {{-- </li> --}}

                    </ul>
                </div>
                <!-- right content section -->
                <div class="col-md-9">
                    <div class="card">
                        <div class="card-content">
                            <div class="card-body">
                                <div class="tab-content">
                                    <div role="tabpanel" class="tab-pane active" id="account-vertical-profile"
                                        aria-labelledby="account-pill-profile" aria-expanded="true">
                                        <!-- BEGIN: Content-->
                                        <div class="">
                                            <div class="content-overlay"></div>
                                            <div class="header-navbar-shadow"></div>
                                            <div class="content-wrapper">
                                                <div class="content-header row">
                                                </div>
                                                <div class="content-body">
                                                    <div id="user-profile">
                                                        <div class="row">
                                                            <div class="col-12">
                                                                <div class="profile-header mb-2">
                                                                    <div class="relative">
                                                                        <div class="cover-container">
                                                                            <img class="img-fluid bg-cover rounded-0 w-100"
                                                                                style="height:351px"
                                                                                src="{{ $user->cover ?? asset('theme/app-assets/images/banner/banner-4.jpg') }}">
                                                                        </div>
                                                                        <div class="profile-img-container d-flex align-items-center justify-content-between"
                                                                            style="    margin-top: -39px;margin-right: 41px;
                                                margin-left: 70px;">
                                                                            <img src="{{ $user->avatar }}"
                                                                                width="60px" height="60px"
                                                                                class="rounded-circle img-border box-shadow-1"
                                                                                alt="Card image">
                                                                            <div class="float-right">
                                                                                @if (isset(auth()->user()->id) && auth()->user()->id == $user->id)
                                                                                    <button type="button"
                                                                                        class="btn btn-icon btn-icon rounded-circle btn-primary mr-1 waves-effect waves-light">
                                                                                        <a href="#"
                                                                                            id="update_profile"
                                                                                            data-id="account-vertical-general"
                                                                                            class="text-white">
                                                                                            <i
                                                                                                class="feather icon-edit-2"></i>
                                                                                        </a>
                                                                                    </button>
                                                                                @else
                                                                                    <button type="button"
                                                                                        class="btn btn-icon btn-icon rounded-circle btn-danger waves-effect waves-light">
                                                                                        <a data-toggle="modal"
                                                                                            data-target="#reportUser">
                                                                                            <i
                                                                                                class="feather icon-info"></i>
                                                                                        </a>
                                                                                    </button>
                                                                                @endif
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <input id="user_type" value="{{ auth()->user()->role }}"
                                                            hidden />
                                                        <section id="profile-info">
                                                            <div class="row">
                                                                <div class="col-lg-6 col-12">
                                                                    <div class="card">
                                                                        <div class="card-header">
                                                                            <h3>{{ ucfirst($user->full_name) }}
                                                                            </h3>
                                                                            @if ($user->is_approved)
                                                                                <div
                                                                                    class="badge badge-pill badge-glow badge-success mr-1 mb-1">
                                                                                    <i class="feather icon-check cursor-pointer"
                                                                                        style="    top: 0px">
                                                                                    </i><span>
                                                                                        {{ $user->role }}</span>
                                                                                </div>

                                                                            @else
                                                                            @endif

                                                                        </div>
                                                                        <hr>
                                                                        <div class="card-body">
                                                                            @if (isset(auth()->user()->id) && auth()->user()->role != 'user')
                                                                                <div class="mt-1">
                                                                                    <h6 class="mb-0">
                                                                                        <b>{{ __('Description') }}:</b>
                                                                                    </h6>
                                                                                    @if (empty($user->description))
                                                                                        <p class="text-danger">
                                                                                            <i>{{ __('No Description Added') }}</i>
                                                                                        </p>
                                                                                    @else
                                                                                        <p>{{ $user->description }}
                                                                                        </p>
                                                                                    @endif
                                                                                </div>
                                                                            @endif
                                                                            <div class="mt-1">
                                                                                <h6 class="mb-0">
                                                                                    <b>{{ __('Joined On') }}:</b>
                                                                                </h6>
                                                                                <p>{{ \Carbon\Carbon::parse($user->created_at)->format('d M, Y') }}
                                                                                </p>
                                                                            </div>
                                            <div class="mt-1">
                                                <h6 class="mb-0">
                                                    {{ __('Address') }}:</h6>
                                                @if (empty($user->loc))
                                                    <p class="text-danger">
                                                        <i>{{ __('No Address Added') }}</i>
                                                    </p>
                                                @else
                                                    <p>{{ $user->loc }}
                                                    </p>
                                                @endif

                                            </div>
                                                                            <div class="mt-1">
                                                                                <h6 class="mb-0">
                                                                                    <b>{{ __('Email') }}:</b>
                                                                                </h6>
                                                                                <p>{{ $user->email }}</p>
                                                                            </div>
                                                                            @if (isset(auth()->user()->id) && auth()->user()->role != 'user')
                                                                                <div class="mt-1">
                                                                                    <h6 class="mb-0">
                                                                                        <b>{{ __('Tagline') }}</b>:
                                                                                    </h6>
                                                                                    @if (empty($user->tag))
                                                                                        <p class="text-danger">
                                                                                            {{ 'No Tagline' }}
                                                                                        </p>
                                                                                    @else
                                                                                        <p>{{ $user->tag }}</p>
                                                                                    @endif
                                                                                </div>
                                                                                <div class="mt-1">
                                                                                    @if (count($user->skills))
                                                                                        <h6 class="mb-0">
                                                                                            {{ __('Skills') }}:
                                                                                        </h6>
                                                                                        @foreach ($user->skills as $skill)
                                                                                            <img class="btn btn-sm mr-25 p-25 waves-effect waves-light rounded-lg"
                                                                                                src="{{ $skill->attachment_path }}"
                                                                                                width="60"
                                                                                                height="60"
                                                                                                title="{{ $skill->name }}"
                                                                                                alt="{{ $skill->name }}">
                                                                                        @endforeach
                                                                                    @else
                                                                                        <h6 class="text-danger">
                                                                                            <i>{{ __('No Skills Added Yet') }}</i>
                                                                                        </h6>
                                                                                    @endif
                                                                                </div>
                                                                                <h4 class="mt-4 ml-1">Qualification
                                                                                </h4>
                                                                                @if ($user->qualification)
                                                                                    <ul
                                                                                        class="activity-timeline timeline-left list-unstyled">
                                                                                        <li>
                                                                                            <div
                                                                                                class="timeline-icon btn-primary">
                                                                                                <i
                                                                                                    class="feather icon-check font-medium-2"></i>
                                                                                            </div>
                                                                                            <div
                                                                                                class="timeline-info">
                                                                                                <p
                                                                                                    class="font-weight-bold">
                                                                                                    What are
                                                                                                    you good at?</p>
                                                                                                <span>{{ $user->qualification->good_at }}</span>
                                                                                            </div>

                                                                                        </li>
                                                                                        <li>
                                                                                            <div
                                                                                                class="timeline-icon btn-primary">
                                                                                                <i
                                                                                                    class="feather icon-check font-medium-2"></i>
                                                                                            </div>
                                                                                            <div
                                                                                                class="timeline-info">
                                                                                                <p
                                                                                                    class="font-weight-bold">
                                                                                                    How do you
                                                                                                    get around?</p>
                                                                                                @if (isset($user->qualification->get_around))
                                                                                                    @foreach (json_decode($user->qualification->get_around) as $q)
                                                                                                        <span>{{ $q }}
                                                                                                        </span>
                                                                                                    @endforeach
                                                                                                @endif
                                                                                            </div>

                                                                                        </li>
                                                                                        <li>
                                                                                            <div
                                                                                                class="timeline-icon btn-primary">
                                                                                                <i
                                                                                                    class="feather icon-check font-medium-2"></i>
                                                                                            </div>
                                                                                            <div
                                                                                                class="timeline-info">
                                                                                                <p
                                                                                                    class="font-weight-bold">
                                                                                                    What
                                                                                                    languages can
                                                                                                    you speak/write?
                                                                                                </p>
                                                                                                <span>{{ $user->qualification->languages }}
                                                                                                </span>
                                                                                            </div>
                                                                                        </li>
                                                                                        <li>
                                                                                            <div
                                                                                                class="timeline-icon btn-primary">
                                                                                                <i
                                                                                                    class="feather icon-check font-medium-2"></i>
                                                                                            </div>
                                                                                            <div
                                                                                                class="timeline-info">
                                                                                                <p
                                                                                                    class="font-weight-bold">
                                                                                                    What
                                                                                                    qualifications
                                                                                                    have you got?
                                                                                                </p>
                                                                                                <span>{{ $user->qualification->qualification }}
                                                                                                </span>
                                                                                            </div>

                                                                                        </li>
                                                                                        <li>
                                                                                            <div
                                                                                                class="timeline-icon btn-primary">
                                                                                                <i
                                                                                                    class="feather icon-check font-medium-2"></i>
                                                                                            </div>
                                                                                            <div
                                                                                                class="timeline-info">
                                                                                                <p
                                                                                                    class="font-weight-bold">
                                                                                                    What's your work
                                                                                                    experience?</p>
                                                                                                <span>{{ $user->qualification->work_exp }}
                                                                                                </span>
                                                                                            </div>
                                                                                        </li>

                                                                                    </ul>
                                                                                @endif
                                                                            @endif

                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                @if (auth()->user()->role != 'user')
                                                                    <div class="col-lg-6 col-12">
                                                                        <div class="card">
                                                                            <div class="card-body">
                                                                                <div class="row mt-1 ml-1">
                                                                                    <h4>{{ __('Portfolio') }}
                                                                                    </h4>
                                                                                    <div class="row">
                                                                                        <div class="images">
                                                                                        @if (isset($user->portfolio))
                                                                                            @foreach ($user->portfolio as $portfolio)
                                                                                                <div
                                                                                                    class="col-md-4 col-6 user-latest-img">
                                                                                                    <img onclick="preview(this.src)"
                                                                                                        src="{{ $portfolio->attach }}"
                                                                                                        class="img-fluid mb-1 rounded-lg">
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

                                                            </div>

                                                        </section>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- END: Content-->
                                    </div>


                                    <div role="tabpanel" class="tab-pane " id="account-vertical-general"
                                        aria-labelledby="account-pill-general" aria-expanded="true">

                                        <form enctype="multipart/form-data" method="POST"
                                            action="{{ route('company.profile.edit_submit') }}" novalidate>
                                            @csrf
                                            <div class="media">
                                                <a href="javascript: void(0);">
                                                    <img src="{{ $user->cover }}" class="rounded mr-75"
                                                        id="cover_image" alt="profile image" height="100"
                                                        width="125">
                                                </a>
                                                <div class="media-body mt-75 mb-3">
                                                    <div
                                                        class="col-12 px-0 d-flex flex-sm-row flex-column justify-content-start">
                                                        <label
                                                            class="btn btn-sm btn-primary ml-50 mb-50 mb-sm-0 cursor-pointer"
                                                            id="cover_upload" for="cover-upload">Upload new
                                                            Cover</label>
                                                        <input type="file" hidden name="pic2" id="cover-upload">
                                                        <input type="text" hidden
                                                            value="{{ asset('users/avatar/' . $user->cover) }}"
                                                            id="cover_path">
                                                        <button class="btn btn-sm btn-outline-warning ml-50">Reset
                                                        </button>
                                                    </div>
                                                    <p class="text-muted ml-75 mt-50"><small>Allowed JPG, GIF or
                                                            PNG.
                                                            Max
                                                            size of
                                                            800kB</small></p>
                                                </div>
                                            </div>
                                            <div class="media">
                                                <a href="javascript: void(0);">
                                                    <img src="{{ $user->avatar }}" class="rounded mr-75"
                                                        id="profile_image" alt="profile image" height="64"
                                                        width="64">
                                                </a>
                                                <div class="media-body mt-75">
                                                    <div
                                                        class="col-12 px-0 d-flex flex-sm-row flex-column justify-content-start">
                                                        <label
                                                            class="btn btn-sm btn-primary ml-50 mb-50 mb-sm-0 cursor-pointer"
                                                            id="pic_upload" for="account-upload">Upload new
                                                            photo</label>
                                                        <input type="file" hidden name="pic" id="account-upload">
                                                        <input type="text" hidden
                                                            value="{{ asset('users/avatar/' . $user->avatar) }}"
                                                            id="pic_path">
                                                        <button class="btn btn-sm btn-outline-warning ml-50">Reset
                                                        </button>
                                                    </div>
                                                    <p class="text-muted ml-75 mt-50"><small>Allowed JPG, GIF or
                                                            PNG.
                                                            Max
                                                            size of
                                                            800kB</small></p>
                                                </div>
                                            </div>
                                            <hr>
                                            <div class="row">

                                                <div class="col-12">
                                                    <div class="form-group">
                                                        <div class="controls">
                                                            <label for="account-name">Name</label>
                                                            <input type="text" name="name" class="form-control"
                                                                id="account-name" placeholder="Name"
                                                                value="{{ $user->name }}" required
                                                                data-validation-required-message="This name field is required">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-12">
                                                    <div class="form-group">
                                                        <div class="controls">
                                                            <label for="account-e-mail">E-mail</label>
                                                            <input type="email" name="email" class="form-control"
                                                                id="account-e-mail" readonly placeholder="Email"
                                                                value="{{ $user->email }}" required
                                                                data-validation-required-message="This email field is required">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-12">
                                                    <div class="form-group">
                                                        <div class="controls">
                                                            <label for="account-mob">Phone Number</label>
                                                            <input type="number" name="phone" class="form-control"
                                                                id="account-e-mail" placeholder="Number"
                                                                value="{{ $user->phone }}" required
                                                                data-validation-required-message="This number field is required">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-12">
                                                    <div class="form-group">
                                                        <label>Gender</label>
                                                        <ul class="list-unstyled mb-0">
                                                            <li class="d-inline-block mr-2">
                                                                <fieldset>
                                                                    <div class="vs-radio-con">
                                                                        @if ($user->gender == 'Male')
                                                                            <input type="radio" name="gender"
                                                                                checked value="Male">
                                                                        @else
                                                                            <input type="radio" name="gender"
                                                                                value="Male">
                                                                        @endif

                                                                        <span class="vs-radio">
                                                                            <span class="vs-radio--border"></span>
                                                                            <span class="vs-radio--circle"></span>
                                                                        </span>
                                                                        Male
                                                                    </div>
                                                                </fieldset>
                                                            </li>
                                                            <li class="d-inline-block mr-2">
                                                                <fieldset>
                                                                    <div class="vs-radio-con">
                                                                        @if ($user->gender == 'Female')
                                                                            <input type="radio" name="gender"
                                                                                checked value="Female">
                                                                        @else
                                                                            <input type="radio" name="gender"
                                                                                value="Female">
                                                                        @endif
                                                                        <span class="vs-radio">
                                                                            <span class="vs-radio--border"></span>
                                                                            <span class="vs-radio--circle"></span>
                                                                        </span>
                                                                        Female
                                                                    </div>
                                                                </fieldset>
                                                            </li>
                                                            <li class="d-inline-block mr-2">
                                                                <fieldset>
                                                                    <div class="vs-radio-con">
                                                                        @if ($user->gender == 'Other')
                                                                            <input type="radio" name="gender"
                                                                                checked value="Other">
                                                                        @else
                                                                            <input type="radio" name="gender"
                                                                                value="Other">
                                                                        @endif
                                                                        <span class="vs-radio">
                                                                            <span class="vs-radio--border"></span>
                                                                            <span class="vs-radio--circle"></span>
                                                                        </span>
                                                                        Other
                                                                    </div>
                                                                </fieldset>
                                                            </li>

                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="col-12">
                                                    <div class="form-group">
                                                        <div class="controls">
                                                            <label for="account-mob">Address</label>
                                                            <input type="text" name="loc" class="form-control"
                                                                id="account-e-mail" placeholder="Location"
                                                                value="{{ $user->loc }}" required
                                                                data-validation-required-message="This number field is required">
                                                        </div>
                                                    </div>
                                                </div>
                                                @if (auth()->user()->role != 'user')
                                                    <div class="col-12">
                                                        <div class="form-group">
                                                            <div class="controls">
                                                                <label for="account-mob">Tagline</label>
                                                                <input type="text" name="tag" class="form-control"
                                                                    id="account-e-mail" placeholder="Tagline"
                                                                    value="{{ $user->tag }}" required
                                                                    data-validation-required-message="This number field is required">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-12">
                                                        <div class="form-group">
                                                            <label for="accountTextarea">Description</label>
                                                            <textarea class="form-control" name="description"
                                                                id="accountTextarea" rows="3"
                                                                placeholder="Description.">{{ $user->description }}</textarea>
                                                        </div>
                                                    </div>
                                                    <div class="col-12">
                                                        <div class="form-group">
                                                            <label for="moviesselect2">My Skills</label>
                                                            <select name="skills[]" class="form-control"
                                                                id="moviesselect2" multiple="multiple">
                                                                @foreach ($skills as $skill)
                                                                    <option value="{{ $skill->id }}">
                                                                        {{ $skill->name }}</option>
                                                                @endforeach
                                                                @foreach ($user->skills as $skill)
                                                                    <option value="{{ $skill->id }}" selected>
                                                                        {{ $skill->name }}</option>
                                                                @endforeach
                                                            </select>
                                                        </div>
                                                    </div>
                                                @endif

                                                <div
                                                    class="col-12 d-flex flex-sm-row flex-column justify-content-end">
                                                    <button type="submit"
                                                        class="btn btn-primary mr-sm-1 mb-1 mb-sm-0">Save
                                                        changes</button>
                                                    <button type="reset"
                                                        class="btn btn-outline-warning">Cancel</button>
                                                </div>

                                            </div>
                                        </form>
                                    </div>

                                    <div class="tab-pane fade " id="account-vertical-password" role="tabpanel"
                                        aria-labelledby="account-pill-password" aria-expanded="false">
                                        <form method="POST"
                                            action="{{ route('company.profile.password_change') }}" novalidate>
                                            @csrf
                                            <div class="row">
                                                <div class="col-12">
                                                    <div class="form-group">
                                                        <div class="controls">
                                                            <label for="account-old-password">Old Password</label>
                                                            <input type="password" class="form-control"
                                                                name="old_password" id="account-old-password"
                                                                required placeholder="Old Password"
                                                                data-validation-required-message="This old password field is required">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-12">
                                                    <div class="form-group">
                                                        <div class="controls">
                                                            <label for="account-new-password">New Password</label>
                                                            <input type="password" name="new_password"
                                                                id="account-new-password" class="form-control"
                                                                placeholder="New Password" required
                                                                data-validation-required-message="The password field is required"
                                                                minlength="6">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-12">
                                                    <div class="form-group">
                                                        <div class="controls">
                                                            <label for="account-retype-new-password">Retype New
                                                                Password</label>
                                                            <input type="password" name="confirm_password"
                                                                class="form-control" required
                                                                id="account-retype-new-password"
                                                                data-validation-match-match="password"
                                                                placeholder="New Password"
                                                                data-validation-required-message="The Confirm password field is required"
                                                                minlength="6">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div
                                                    class="col-12 d-flex flex-sm-row flex-column justify-content-end">
                                                    <button type="submit"
                                                        class="btn btn-primary mr-sm-1 mb-1 mb-sm-0">Save
                                                        changes</button>
                                                    <button type="reset"
                                                        class="btn btn-outline-warning">Cancel</button>
                                                </div>
                                                @if (Session::has('errors'))
                                                    <h6 class="text-danger mb-1 mt-1 font-weight-bold">
                                                        <strong>{{ Session::get('errors')->first() }}</strong>
                                                    </h6>
                                                @endif
                                                @if (Session::has('success'))
                                                    <h6 class="text-success mb-1 mt-1 font-weight-bold">
                                                        <strong>{{ Session::get('success') }}</strong>
                                                    </h6>
                                                @endif
                                            </div>
                                        </form>
                                    </div>
                                    <div class="tab-pane fade" id="account-vertical-info" role="tabpanel"
                                        aria-labelledby="account-pill-info" aria-expanded="false">
                                        <form novalidate>
                                            @csrf
                                            <div class="row">
                                                <div class="col-12">
                                                    <div class="form-group">
                                                        <label for="accountTextarea">Bio</label>
                                                        <textarea class="form-control" id="accountTextarea" rows="3"
                                                            placeholder="Your Bio data here..."></textarea>
                                                    </div>
                                                </div>
                                                <div class="col-12">
                                                    <div class="form-group">
                                                        <div class="controls">
                                                            <label for="account-birth-date">Birth date</label>
                                                            <input type="text" name="dob"
                                                                class="form-control birthdate-picker" required
                                                                placeholder="Birth date" id="account-birth-date"
                                                                data-validation-required-message="This birthdate field is required">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-12">
                                                    <div class="form-group">
                                                        <label for="accountSelect">Country</label>
                                                        <select class="form-control" id="accountSelect">
                                                            <option>USA</option>
                                                            <option>India</option>
                                                            <option>Canada</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="col-12">
                                                    <div class="form-group">
                                                        <label for="languageselect2">Languages</label>
                                                        <select class="form-control" id="languageselect2"
                                                            multiple="multiple">
                                                            <option value="English" selected>English</option>
                                                            <option value="Spanish">Spanish</option>
                                                            <option value="French">French</option>
                                                            <option value="Russian">Russian</option>
                                                            <option value="German">German</option>
                                                            <option value="Arabic" selected>Arabic</option>
                                                            <option value="Sanskrit">Sanskrit</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="col-12">
                                                    <div class="form-group">
                                                        <div class="controls">
                                                            <label for="account-phone">Phone</label>
                                                            <input type="text" class="form-control"
                                                                id="account-phone" required
                                                                placeholder="Phone number" value="(+656) 254 2568"
                                                                data-validation-required-message="This phone number field is required">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-12">
                                                    <div class="form-group">
                                                        <label for="account-website">Website</label>
                                                        <input type="text" class="form-control" id="account-website"
                                                            placeholder="Website address">
                                                    </div>
                                                </div>
                                                <div class="col-12">
                                                    <div class="form-group">
                                                        <label for="musicselect2">Favourite Music</label>
                                                        <select class="form-control" id="musicselect2"
                                                            multiple="multiple">
                                                            <option value="Rock">Rock</option>
                                                            <option value="Jazz" selected>Jazz</option>
                                                            <option value="Disco">Disco</option>
                                                            <option value="Pop">Pop</option>
                                                            <option value="Techno">Techno</option>
                                                            <option value="Folk" selected>Folk</option>
                                                            <option value="Hip hop">Hip hop</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="col-12">
                                                    <div class="form-group">
                                                        <label for="moviesselect2">Favourite movies</label>
                                                        <select class="form-control" id="moviesselect2"
                                                            multiple="multiple">
                                                            <option value="The Dark Knight" selected>The Dark Knight
                                                            </option>
                                                            <option value="Harry Potter" selected>Harry Potter
                                                            </option>
                                                            <option value="Airplane!">Airplane!</option>
                                                            <option value="Perl Harbour">Perl Harbour</option>
                                                            <option value="Spider Man">Spider Man</option>
                                                            <option value="Iron Man" selected>Iron Man</option>
                                                            <option value="Avatar">Avatar</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div
                                                    class="col-12 d-flex flex-sm-row flex-column justify-content-end">
                                                    <button type="submit"
                                                        class="btn btn-primary mr-sm-1 mb-1 mb-sm-0">Save
                                                        changes</button>
                                                    <button type="reset"
                                                        class="btn btn-outline-warning">Cancel</button>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                    <div class="tab-pane fade " id="account-vertical-social" role="tabpanel"
                                        aria-labelledby="account-pill-social" aria-expanded="false">
                                        <form>
                                            <div class="row">
                                                <div class="col-12">
                                                    <div class="form-group">
                                                        <label for="account-twitter">Twitter</label>
                                                        <input type="text" id="account-twitter" class="form-control"
                                                            placeholder="Add link" value="https://www.twitter.com">
                                                    </div>
                                                </div>
                                                <div class="col-12">
                                                    <div class="form-group">
                                                        <label for="account-facebook">Facebook</label>
                                                        <input type="text" id="account-facebook"
                                                            class="form-control" placeholder="Add link">
                                                    </div>
                                                </div>
                                                <div class="col-12">
                                                    <div class="form-group">
                                                        <label for="account-google">Google+</label>
                                                        <input type="text" id="account-google" class="form-control"
                                                            placeholder="Add link">
                                                    </div>
                                                </div>
                                                <div class="col-12">
                                                    <div class="form-group">
                                                        <label for="account-linkedin">LinkedIn</label>
                                                        <input type="text" id="account-linkedin"
                                                            class="form-control" placeholder="Add link"
                                                            value="https://www.linkedin.com">
                                                    </div>
                                                </div>
                                                <div class="col-12">
                                                    <div class="form-group">
                                                        <label for="account-instagram">Instagram</label>
                                                        <input type="text" id="account-instagram"
                                                            class="form-control" placeholder="Add link">
                                                    </div>
                                                </div>
                                                <div class="col-12">
                                                    <div class="form-group">
                                                        <label for="account-quora">Quora</label>
                                                        <input type="text" id="account-quora" class="form-control"
                                                            placeholder="Add link">
                                                    </div>
                                                </div>
                                                <div
                                                    class="col-12 d-flex flex-sm-row flex-column justify-content-end">
                                                    <button type="submit"
                                                        class="btn btn-primary mr-sm-1 mb-1 mb-sm-0">Save
                                                        changes</button>
                                                    <button type="reset"
                                                        class="btn btn-outline-warning">Cancel</button>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                    <div class="tab-pane fade" id="account-vertical-connections" role="tabpanel"
                                        aria-labelledby="account-pill-connections" aria-expanded="false">
                                        <div class="row">
                                            <div class="col-12 mb-3">
                                                <a href="javascript: void(0);" class="btn btn-info">Connect to
                                                    <strong>Stripe</strong></a>
                                            </div>
                                            <div class="col-12 mb-3">
                                                <button class=" btn btn-sm btn-secondary float-right">edit</button>
                                                <h6>You are connected to Stripe.</h6>
                                                <span>Johndoe@gmail.com</span>
                                            </div>
                                            {{-- <div class="col-12 mb-3">
                                            <a href="javascript: void(0);" class="btn btn-danger">Connect to
                                                <strong>Google</strong>
                                            </a>
                                        </div> --}}
                                            {{-- <div class="col-12 mb-2">
                                            <button class=" btn btn-sm btn-secondary float-right">edit</button>
                                            <h6>You are connected to Instagram.</h6>
                                            <span>Johndoe@gmail.com</span>
                                        </div> --}}
                                            <div class="col-12 d-flex flex-sm-row flex-column justify-content-end">
                                                <button type="submit"
                                                    class="btn btn-primary mr-sm-1 mb-1 mb-sm-0">Save
                                                    changes</button>
                                                <button type="reset" class="btn btn-outline-warning">Cancel</button>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="account-vertical-notifications" role="tabpanel"
                                        aria-labelledby="account-pill-notifications" aria-expanded="false">
                                        <div class="row">
                                            <h6 class="m-1">Activity</h6>
                                            <div class="col-12 mb-1">
                                                <div class="custom-control custom-switch custom-control-inline">
                                                    <input type="checkbox" class="custom-control-input" checked
                                                        id="accountSwitch1">
                                                    <label class="custom-control-label mr-1"
                                                        for="accountSwitch1"></label>
                                                    <span class="switch-label w-100">Email me when someone comments
                                                        onmy
                                                        article</span>
                                                </div>
                                            </div>
                                            <div class="col-12 mb-1">
                                                <div class="custom-control custom-switch custom-control-inline">
                                                    <input type="checkbox" class="custom-control-input" checked
                                                        id="accountSwitch2">
                                                    <label class="custom-control-label mr-1"
                                                        for="accountSwitch2"></label>
                                                    <span class="switch-label w-100">Email me when someone answers
                                                        on
                                                        my
                                                        form</span>
                                                </div>
                                            </div>
                                            <div class="col-12 mb-1">
                                                <div class="custom-control custom-switch custom-control-inline">
                                                    <input type="checkbox" class="custom-control-input"
                                                        id="accountSwitch3">
                                                    <label class="custom-control-label mr-1"
                                                        for="accountSwitch3"></label>
                                                    <span class="switch-label w-100">Email me hen someone follows
                                                        me</span>
                                                </div>
                                            </div>
                                            <h6 class="m-1">Application</h6>
                                            <div class="col-12 mb-1">
                                                <div class="custom-control custom-switch custom-control-inline">
                                                    <input type="checkbox" class="custom-control-input" checked
                                                        id="accountSwitch4">
                                                    <label class="custom-control-label mr-1"
                                                        for="accountSwitch4"></label>
                                                    <span class="switch-label w-100">News and announcements</span>
                                                </div>
                                            </div>
                                            <div class="col-12 mb-1">
                                                <div class="custom-control custom-switch custom-control-inline">
                                                    <input type="checkbox" class="custom-control-input"
                                                        id="accountSwitch5">
                                                    <label class="custom-control-label mr-1"
                                                        for="accountSwitch5"></label>
                                                    <span class="switch-label w-100">Weekly product updates</span>
                                                </div>
                                            </div>
                                            <div class="col-12 mb-1">
                                                <div class="custom-control custom-switch custom-control-inline">
                                                    <input type="checkbox" class="custom-control-input" checked
                                                        id="accountSwitch6">
                                                    <label class="custom-control-label mr-1"
                                                        for="accountSwitch6"></label>
                                                    <span class="switch-label w-100">Weekly blog digest</span>
                                                </div>
                                            </div>
                                            <div class="col-12 d-flex flex-sm-row flex-column justify-content-end">
                                                <button type="submit"
                                                    class="btn btn-primary mr-sm-1 mb-1 mb-sm-0">Save
                                                    changes</button>
                                                <button type="reset" class="btn btn-outline-warning">Cancel</button>
                                            </div>
                                        </div>
                                    </div>

                                    {{-- <div class="col-12">
                                    <div class="form-group">
                                        <label for="accountTextarea"></label>
                                        <fieldset>
                                        <legend>Qualification</legend>
                                        <label for="">Good At: <input type="text" name="good_at" ></label>
                                <br>
                                    <label for="">Get Around : <input type="text" name="get_around" value="{{$user->qualification->get_around}}"> </label>
                                <br>
                                <label for="">Languages : <input type="text"></label>
                                <br>
                                <label for="">Qualification: <input type="text"></label>
                                <br>
                                <label for="">Work Experience: <input type="text"></label>
                                </fieldset>
                            </div>
                        </div> --}}

                                    <div role="tabpanel" class="tab-pane fade" id="account-vertical-qualifications"
                                        aria-labelledby="account-pill-qualifications" aria-expanded="false">

                                        <form enctype="multipart/form-data" method="POST"
                                            action="{{ route('company.profile.qualification', $user->id) }}"
                                            novalidate>
                                            @csrf
                                            <input name="id" hidden value="{{ $user->qualification->id }}">

                                            <div class="row">
                                                <div class="col-12">
                                                    <div class="form-group">
                                                        <div class="controls">
                                                            <label for="account-username">What are you good
                                                                at?</label>
                                                            <input type="text" name="good_at"
                                                                value="{{ $user->qualification->good_at }}"
                                                                class="form-control" id="account-username"
                                                                placeholder="Username" required
                                                                data-validation-required-message="This username field is required">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-12">
                                                    <label for="account-username">How do you get around?</label>
                                                    <ul class="list-unstyled mb-0">
                                                        <!--  <li class="d-inline-block mr-2">
                                                                <fieldset>
                                                                    <div class="vs-checkbox-con vs-checkbox-primary">
                                                                        <input type="checkbox" {{ isset($user->qualification->get_around) && in_array('Bicycle', json_decode($user->qualification->get_around)) ? 'checked' : '' }} name="get_around[]" value="Bicycle">
                                                                        <span class="vs-checkbox vs-checkbox-lg">
                                                                            <span class="vs-checkbox--check">
                                                                                <i class="vs-icon feather icon-check"></i>
                                                                            </span>
                                                                        </span>
                                                                        <span class="">Bicycle</span>
                                                                    </div>
                                                                </fieldset>
                                                            </li> -->
                                                        <!-- <li class="d-inline-block mr-2">
                                                                <fieldset>
                                                                    <div class="vs-checkbox-con vs-checkbox-primary">
                                                                        <input type="checkbox" {{ isset($user->qualification->get_around) && in_array('Car', json_decode($user->qualification->get_around)) ? 'checked' : '' }} name="get_around[]" value="Car">
                                                                        <span class="vs-checkbox vs-checkbox-lg">
                                                                            <span class="vs-checkbox--check">
                                                                                <i class="vs-icon feather icon-check"></i>
                                                                            </span>
                                                                        </span>
                                                                        <span class="">Car</span>
                                                                    </div>
                                                                </fieldset>
                                                            </li> -->
                                                        <li class="d-inline-block mr-2">
                                                            <fieldset>
                                                                <div class="vs-checkbox-con vs-checkbox-primary">
                                                                    <input type="checkbox"
                                                                        {{ isset($user->qualification->get_around) && in_array('Online', json_decode($user->qualification->get_around)) ? 'checked' : '' }}
                                                                        name="get_around[]" value="Online">
                                                                    <span class="vs-checkbox vs-checkbox-lg">
                                                                        <span class="vs-checkbox--check">
                                                                            <i
                                                                                class="vs-icon feather icon-check"></i>
                                                                        </span>
                                                                    </span>
                                                                    <span class="">Online </span>
                                                                </div>
                                                            </fieldset>
                                                        </li>
                                                        <li class="d-inline-block mr-2">
                                                            <fieldset>
                                                                <div class="vs-checkbox-con vs-checkbox-primary">
                                                                    <input type="checkbox"
                                                                        {{ isset($user->qualification->get_around) && in_array('Physical', json_decode($user->qualification->get_around)) ? 'checked' : '' }}
                                                                        name="get_around[]" value="Physical">
                                                                    <span class="vs-checkbox vs-checkbox-lg">
                                                                        <span class="vs-checkbox--check">
                                                                            <i
                                                                                class="vs-icon feather icon-check"></i>
                                                                        </span>
                                                                    </span>
                                                                    <span class="">Pysical </span>
                                                                </div>
                                                            </fieldset>
                                                        </li>
                                                        <!--  <li class="d-inline-block mr-2">
                                                                <fieldset>
                                                                    <div class="vs-checkbox-con vs-checkbox-primary">
                                                                        <input type="checkbox" {{ isset($user->qualification->get_around) && in_array('Scooter', json_decode($user->qualification->get_around)) ? 'checked' : '' }} name="get_around[]" value="Scooter">
                                                                        <span class="vs-checkbox vs-checkbox-lg">
                                                                            <span class="vs-checkbox--check">
                                                                                <i class="vs-icon feather icon-check"></i>
                                                                            </span>
                                                                        </span>
                                                                        <span class="">Scooter </span>
                                                                    </div>
                                                                </fieldset>
                                                            </li> -->
                                                        <!-- <li class="d-inline-block mr-2">
                                                                <fieldset>
                                                                    <div class="vs-checkbox-con vs-checkbox-primary">
                                                                        <input type="checkbox" {{ isset($user->qualification->get_around) && in_array('Truck', json_decode($user->qualification->get_around)) ? 'checked' : '' }} name="get_around[]" value="Truck">
                                                                        <span class="vs-checkbox vs-checkbox-lg">
                                                                            <span class="vs-checkbox--check">
                                                                                <i class="vs-icon feather icon-check"></i>
                                                                            </span>
                                                                        </span>
                                                                        <span class="">Truck</span>
                                                                    </div>
                                                                </fieldset>
                                                            </li> -->
                                                        <!-- <li class="d-inline-block mr-2">
                                                                <fieldset>
                                                                    <div class="vs-checkbox-con vs-checkbox-primary">
                                                                        <input type="checkbox" {{ isset($user->qualification->get_around) && in_array('Walk', json_decode($user->qualification->get_around)) ? 'checked' : '' }} name="get_around[]" value="Walk">
                                                                        <span class="vs-checkbox vs-checkbox-lg">
                                                                            <span class="vs-checkbox--check">
                                                                                <i class="vs-icon feather icon-check"></i>
                                                                            </span>
                                                                        </span>
                                                                        <span class="">Walk</span>
                                                                    </div>
                                                                </fieldset>
                                                            </li> -->
                                                    </ul>
                                                </div>
                                                <br>
                                                <br>

                                                <div class="col-12">
                                                    <div class="form-group">
                                                        <div class="controls">
                                                            <label for="account-name">What languages can you
                                                                speak/write?</label>
                                                            <input type="text" name="languages"
                                                                value="{{ $user->qualification->languages }}"
                                                                class="form-control" id="account-name"
                                                                placeholder="Name" required
                                                                data-validation-required-message="This name field is required">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-12">
                                                    <div class="form-group">
                                                        <div class="controls">
                                                            <label for="account-e-mail">What qualifications have you
                                                                got?</label>
                                                            <input type="email" name="qualification"
                                                                value="{{ $user->qualification->qualification }}"
                                                                class="form-control" id="account-e-mail"
                                                                placeholder="Email" required
                                                                data-validation-required-message="This email field is required">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-12">
                                                    <div class="form-group">
                                                        <div class="controls">
                                                            <label for="account-mob">What's your work
                                                                experience?</label>
                                                            <input type="number" name="work_exp"
                                                                value="{{ $user->qualification->work_exp }}"
                                                                class="form-control" id="account-e-mail"
                                                                placeholder="Number" required
                                                                data-validation-required-message="This number field is required">
                                                        </div>
                                                    </div>
                                                </div>


                                                <div
                                                    class="col-12 d-flex flex-sm-row flex-column justify-content-end">
                                                    <button type="submit"
                                                        class="btn btn-primary mr-sm-1 mb-1 mb-sm-0">Save
                                                        changes
                                                    </button>
                                                    <button type="reset" class="btn btn-outline-warning">Cancel
                                                    </button>
                                                </div>

                                            </div>
                                        </form>
                                    </div>
                                    <div role="tabpanel" class="tab-pane fade" id="account-vertical-portfolio"
                                        aria-labelledby="account-pill-portfolio" aria-expanded="false">

                                        <form enctype="multipart/form-data" method="POST"
                                            action="{{ route('company.profile.portfolio') }}" novalidate>
                                            @csrf
                                    <div class="images">
                                            @if (isset($user->portfolio))
                                                @foreach ($user->portfolio as $portfolio)
                                                    <img src="{{ $portfolio->attach }}" width="100px"
                                                        height="100px" />
                                                    <a
                                                        href="{{ route('company.profile.portfolio_delete', $portfolio->id) }}">Delete</a>
                                                @endforeach
                                            @endif
                                            </div>
                                            <div id="uploaded_portfolio">

                                            </div>
                                            <p>Select images for your portfolio:</p>
                                            <input type="file" name="attachment[]" multiple id="upload_file" />


                                            <input value="{{ $user->id }}" name="user_id" hidden />
                                            <div class="col-12 d-flex flex-sm-row flex-column justify-content-end">
                                                <button type="submit" class="btn btn-primary mr-sm-1 mb-1 mb-sm-0">
                                                    Save
                                                    changes
                                                </button>
                                                <button type="reset" class="btn btn-outline-warning">Cancel</button>
                                            </div>


                                        </form>
                                    </div>
                                    <div role="tabpanel" class="tab-pane fade" id="account-vertical-verification"
                                        aria-labelledby="account-pill-verification" aria-expanded="false">

                                        <form enctype="multipart/form-data" method="POST"
                                            action="{{ route('company.profile.verification') }}" novalidate>
                                            @csrf
                                            <p>Fill the fields for verification:</p>
                                            <p>State/Region:
                                                <!-- Phone State: -->
                                                <input type="text" required class="form-control" name="state"
                                                    value="{{ isset($verification) ? $verification->registration_no : '' }}" />
                                            </p>
                                            <p>Email:
                                                <!-- Email: -->
                                                <input type="email" required class="form-control" name="email"
                                                    value="{{ $user->email }}" />
                                            </p>
                                            <p>Phone:
                                                <!-- Phone number: -->
                                                <input type="text" required class="form-control" name="phone"
                                                    value="{{ $user->phone }}" />
                                            </p>


                                            <p>Skills/Qualifications
                                                <select name="skills[]" class="form-control" id="moviesselect3" multiple="multiple">
                                                    @foreach ($skills as $skill)
                                                        <option value="{{ $skill->id }}">{{ $skill->name }}
                                                        </option>
                                                    @endforeach
                                                    @foreach ($user->skills as $skill)
                                                        <option value="{{ $skill->id }}" selected>
                                                            {{ $skill->name }}</option>
                                                    @endforeach
                                                </select>
                                            </p>
                                            <p>Certifications</p>
                                            <ul class="list-unstyled mb-0">
                                                <li class="d-inline-block mr-2">
                                                    <fieldset>
                                                        <div class="vs-radio-con">
                                                            <?php if (isset($user->docs) and
                                                            isset($user->docs[0]) and $user->docs[0]->certifications
                                                            == 'yes') { ?>
                                                            <input type="radio" name="certifications" checked
                                                                value="yes">
                                                            <?php } else { ?>
                                                            <input type="radio" name="certifications" value="yes">
                                                            <?php } ?>

                                                            <span class="vs-radio">
                                                                <span class="vs-radio--border"></span>
                                                                <span class="vs-radio--circle"></span>
                                                            </span>
                                                            Yes
                                                        </div>
                                                    </fieldset>
                                                </li>
                                                <li class="d-inline-block mr-2">
                                                    <fieldset>
                                                        <div class="vs-radio-con">
                                                            <?php if (isset($user->docs) and
                                                            isset($user->docs[0]) and $user->docs[0]->certifications
                                                            == 'no') { ?>
                                                            <input type="radio" name="certifications" checked
                                                                value="no">
                                                            <?php } else { ?>
                                                            <input type="radio" name="certifications" value="no">
                                                            <?php } ?>
                                                            <span class="vs-radio">
                                                                <span class="vs-radio--border"></span>
                                                                <span class="vs-radio--circle"></span>
                                                            </span>
                                                            No
                                                        </div>
                                                    </fieldset>
                                                </li>

                                                <li class="d-inline-block mr-2">
                                                    <fieldset>
                                                        <input type="file" name="certifications_attach[]"
                                                            multiple />
                                                    </fieldset>
                                                    <div class="images">

                                                        <?php if (isset($user->docs)) {
                                                        foreach ($user->docs as $doc) {
                                                        if ($doc->certifications_attach) {
                                                        $c_images = json_decode($doc->certifications_attach);
                                                        foreach ($c_images as $key => $value) {
                                                        if (strpos($value, '.jpg') !== false || strpos($value,
                                                        '.png') !== false || strpos($value, '.jpeg') !== false) {
                                                        ?>
                                                        <img src="../../verification/{{ $value }}"
                                                            width="100px" height="100px" />
                                                        <?php } else { ?>
                                                        <a href="../../verification/{{ $value }}"
                                                            download>Download</a>
                                                        <?php }
                                                        }
                                                        }
                                                        break;
                                                        }
                                                        } ?>
                                                    </div>
                                                </li>
                                            </ul>


                                            <p>Registration Number:
                                                <!-- Phone number: -->
                                                <input type="text" class="form-control" name="registration_no"
                                                    value="{{ isset($verification) ? $verification->registration_no : '' }}" />
                                            </p>

                                            <p class="mt-3">
                                                <input type="checkbox" required
                                                    {{ isset($verification) ? 'checked' : '' }}>
                                                I am awarethat by filling this information I have the obligation to provide veridict information and Kii-wik can do a research based on the information. I provide to make sure all details are correct. I accept & Understand.
                                            </p>
                                            <input value="{{ $user->id }}" name="user_id" hidden />
                                            <div class="col-12 d-flex flex-sm-row flex-column justify-content-end">
                                                @if (!isset($user->docs[0]))
                                                    <button type="submit"
                                                        class="btn btn-primary mr-sm-1 mb-1 mb-sm-0">Save
                                                        changes</button>
                                                    <button type="reset"
                                                        class="btn btn-outline-warning">Cancel</button>
                                                @endif
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- account setting page end -->

    </div>
</div>
</div>
<div id="image-viewer">
<img class="modal-content" id="full-image">
<span class="close">X</span>
</div>
<script>
function delete_image(object) {
    var data_id = object.id;
    $('#' + data_id).remove();
    object.remove();
}
$(document).ready(function() {
    

    var last_valid_selection = null;
    var user = $("#user_type").val()
    var limit = 0;
    if (user == "company") {
        limit = 5
    } else {
        limit = 3
    }
    $("#moviesselect2,#moviesselect3").on('change', function() {
        if ($(this).val().length > limit) {

            $(this).val(last_valid_selection);
            alert("You can not add more than " + limit + " skills.")
        } else {
            last_valid_selection = $(this).val();
        }

    })
    $("#account-upload").on('change', function(event) {
        var path = URL.createObjectURL(event.target.files[0]);
        $("#profile_image").fadeIn("fast").attr('src', URL.createObjectURL(event.target.files[0]));
        $('#pic_path').attr('value', path);
    });
    $("#cover-upload").on('change', function(event) {
        var path = URL.createObjectURL(event.target.files[0]);
        $("#cover_image").fadeIn("fast").attr('src', URL.createObjectURL(event.target.files[0]));
        $('#cover_path').attr('value', path);
    });
    $("#upload_file").on('change', function(event) {

        var files = event.target.files;

        $("#uploaded_portfolio").html("")
        for (var i = 0; i < files.length; i++) {
            html = "<img src='" + URL.createObjectURL(files[i]) + "' data-id='" + files[i].name +
                "' id='image-" + i + "' width='100px' height='100px'/><a id='image-" + i +
                "' onClick='delete_image(this)'>Delete</a> "
            $("#uploaded_portfolio").append(html)
        }
    });
    $("#update_profile").on('click', function() {

        $('#account-vertical-profile').removeClass("active")
        $('#account-vertical-general').addClass('active')
        $('#account-pill-profile').removeClass("active")
        $('#account-pill-general').addClass('active')
    })
});

setTimeout(() => {
$('#moviesselect3').select2();
    
}, 2000);




$(".images img").click(function() {
    $("#full-image").attr("src", $(this).attr("src"));
    $('#image-viewer').show();
});

$("#image-viewer .close").click(function() {
    $('#image-viewer').hide();
});

</script>
@endsection
