@extends('layouts.main')

@section('title',$profile->name)

@section('styles')
    <link rel="stylesheet" href="{{asset('theme/app-assets/css/pages/users.css')}}">
@endsection

@section('view_profile')
    <!-- BEGIN: Content-->
    <div class="app-content content">
        <div class="content-overlay"></div>
        <div class="header-navbar-shadow"></div>
        <div class="content-wrapper">
            <div class="content-header row">
            </div>
        <div class="content-body">
            <div class="content-body">
                <div id="user-profile">
                    <div class="row">
                        <div class="col-12">
                            <div class="profile-header mb-2">
                                <div class="relative">
                                    <div class="cover-container">
                                        <img class="img-fluid bg-cover rounded-0 w-100" src="{{asset('theme/app-assets/images/profile/user-uploads/cover.jpg')}}" alt="User Profile Image">
                                    </div>
                                    <div class="profile-img-container d-flex align-items-center justify-content-between">
                                        <img src="{{asset($profile->avatar)}}" class="rounded-circle img-border box-shadow-1" alt="Card image">
                                        <div class="float-right">
                                            @if(auth()->user()->id==$profile->id)
                                                <button onclick="window.location='{{route('edit_profile')}}'" type="button" class="btn btn-icon btn-icon rounded-circle btn-primary mr-1">
                                                    <i class="feather icon-edit-2"></i>
                                                </button>
                                                <button type="button" class="btn btn-icon btn-icon rounded-circle btn-primary">
                                                    <i class="feather icon-trash"></i>
                                                </button>
                                            @else
                                                 <button type="button" class="btn btn-icon btn-icon rounded-circle btn-primary">
                                                    <i class="feather icon-message-square"></i>
                                                </button>
                                            @endif

                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <br>
            <br>
            <!-- page users view start -->

        <!-- page users view end -->
        {{-- <section id="knowledge-base-content">
            <div class="row search-content-info">
                <div class="col-md-12 col-sm-6 col-12 search-content">
                    <div class="card" style="background-image: ">
                        <div class="card-body text-center">

                                <img src="{{asset(auth()->user()->avatar)}}" class="mx-auto mb-2 round" width="180" alt="knowledge-base-image">
                                <h2><i class="feather icon-user"></i><span style="font-weight: bold">{{$profile->name}}</span> </h2>
                                <a href="app-user-edit.html" class="btn btn-primary mr-1"><i class="feather icon-edit-1"></i> Edit</a>
                                        <button class="btn btn-outline-danger"><i class="feather icon-trash-2"></i> Delete</button>

                        </div>
                    </div>
                </div>

            </div>

        </section> --}}
        {{-- <div class="col-xl-12 col-md-12 col-sm-12 profile-card-1">
            <div class="card">
                <div class="card-header mx-auto">

                        <img src="{{asset(auth()->user()->avatar)}}" class="mx-auto mb-2 round" width="180" alt="knowledge-base-image">

                </div>
                <div class="card-content">
                    <div class="card-body text-center">
                        <h4>{{$profile->name}}</h4>

                        <div class="card-btns d-flex justify-content-between">
                        </div>
                        <hr class="my-2">
                        <div class="d-flex justify-content-between">
                            <div class="float-left">
                                <button class="btn gradient-light-primary">Follow</button>
                            </div>
                            <div class="float-right">
                                <button class="btn btn-outline-primary">Message</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div> --}}
            <section class="page-users-view">
                <div class="row">
                    <!-- account start -->
                    {{-- <div class="col-12">
                        <div class="card">
                            <div class="card-header ">
                                <div class="card-title">PROFILE</div>
                            </div>
                            <div class="card-body">
                                <div class="row " >
                                    <div class="users-view-image ">
                                        <img src="{{asset(auth()->user()->avatar)}}" class="  round mb-2 pr-2 ml-1 " height="170" width="190" alt="avatar" >
                                    </div>
                                    <div class="col-12 col-sm-9 col-md-6 col-lg-5">
                                        <table>
                                            <tr>
                                                <td class="font-weight-bold "><i class="feather icon-user"></i>Username</td>
                                                <td> &nbsp; {{$profile->name}}</td>
                                            </tr>
                                            <tr>
                                                <td class="font-weight-bold">Name</td>
                                                <td>Angelo Sashington</td>
                                            </tr>
                                            <tr>
                                                <td class="font-weight-bold">Email</td>
                                                <td>angelo@sashington.com</td>
                                            </tr>
                                        </table>
                                    </div>
                                    <div class="col-12 col-md-12 col-lg-5">
                                        <table class="ml-0 ml-sm-0 ml-lg-0">
                                            <tr>
                                                <td class="font-weight-bold">Status</td>
                                                <td>active</td>
                                            </tr>
                                            <tr>
                                                <td class="font-weight-bold">Role</td>
                                                <td>admin</td>
                                            </tr>
                                            <tr>
                                                <td class="font-weight-bold">Company</td>
                                                <td>WinDon Technologies Pvt Ltd</td>
                                            </tr>
                                        </table>
                                    </div>
                                    <div class="col-12">
                                        <a href="app-user-edit.html" class="btn btn-primary mr-1"><i class="feather icon-edit-1"></i> Edit</a>
                                        <button class="btn btn-outline-danger"><i class="feather icon-trash-2"></i> Delete</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- account end --> --}}
                    <!-- information start -->


                    <!-- information start -->
                    {{-- <div class="col-md-12    col-12 ">
                        <div class="card">

                            <div class="card-body">

                            </div>
                        </div>
                    </div>
                     --}}

                </div>
            </section>
            <!-- Timeline Starts -->
            <section id="timeline-card">
                <div class="row">
                    <div class="col-lg-12 col-sm-12">
                        <div class="card">
                            <div class="card-header">
                                <h2 class="card-title" style="font-size: 33px; font-weight: bold;">PROFILE INFROMATION</h2>
                            </div>
                            <div class="card-content">
                                <div class="card-body">
                                    <ul class="activity-timeline timeline-left list-unstyled">
                                        <li>
                                            <div class="timeline-icon bg-primary">
                                                <i class="feather  icon-user font-medium-2"></i>
                                            </div>
                                            <div class="timeline-info">
                                                <p class="font-weight-bold" style=" color:#28b6f6">Name</p>
                                                <span>{{$profile->name}}</span>
                                            </div>

                                        </li>
                                        <li>
                                            <div class="timeline-icon bg-primary">
                                                <i class="feather  icon-mail font-medium-2"></i>
                                            </div>
                                            <div class="timeline-info">
                                                <p class="font-weight-bold" style=" color:#28b6f6">Email</p>
                                                <span>{{$profile->email}}</span>
                                            </div>

                                        </li>
                                        <li>
                                            <div class="timeline-icon bg-warning">
                                                <i class="feather  icon-heart font-medium-2"></i>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="timeline-icon bg-success">
                                                <i class="feather  icon-inbox font-medium-2"></i>
                                            </div>
                                            <div class="timeline-info">
                                                <p class="font-weight-bold" style=" color:#28b6f6">Branch</p>
                                                <span>{{$profile->branch}}</span>
                                            </div>

                                        </li>

                                        <li>
                                            <div class="timeline-icon bg-danger">
                                                <i class="feather  icon-phone font-medium-2"></i>
                                            </div>
                                            <div class="timeline-info">
                                                <p class="font-weight-bold" style=" color:#28b6f6">Department</p>
                                                <span>{{$profile->department}}</span>
                                            </div>

                                        </li>
{{--                                        <li>--}}
{{--                                            <div class="timeline-icon bg-primary">--}}
{{--                                                <i class="feather  icon-map-pin font-medium-2"></i>--}}
{{--                                            </div>--}}
{{--                                            <div class="timeline-info">--}}
{{--                                                <p class="font-weight-bold" style=" color:#28b6f6">Address</p>--}}
{{--                                                <span>{{$profile->address}}</span>--}}
{{--                                            </div>--}}

{{--                                        </li>--}}
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </section>
            <!-- Timeline Ends -->

            {{-- <section class="page-users-view">
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header ">
                                <div class="card-title">Family Members and Pets</div>
                            </div>
                            @foreach($profile->family_members as $member)
                                <div class="col-md-4 col-sm-12">
                                    <div class="card">
                                        <div class="card-content">
                                            <img class="card-img-top img-fluid" src="{{asset($member->member_image)}}" alt="{{$member->member_name}}">
                                            <div class="card-body">
                                                <div class="row">
                                                    <h3>{{$member->member_name}}</h3>
                                                    <p class="card-text  mb-0">{{$member->member_relation}}</p>
                                                    <!-- <div class="card-btns d-flex justify-content-between mt-2">
                                                        <a href="#" class="btn gradient-light-primary text-white">Download</a>
                                                        <a href="#" class="btn btn-outline-primary">View All</a>
                                                    </div> -->
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                        </div>
                    </div>
                </div>
            </section> --}}

            <section id="admin-video">
                <div class="row">
                    <div class="col-lg-5 col-sm-12">

                        @foreach($profile->family_members as $member)
                        <div class="card">
                            <div class="card-header">

                                <h2 class="card-title " style="color:#28b6f6 ">
                                    <ul class="activity-timeline timeline-left list-unstyled">
                                        <li>
                                            <div class="timeline-icon bg-primary">
                                                <i class="feather  icon-user font-medium-2"></i>
                                            </div>
                                            <div class="timeline-info">
                                                <p class="font-weight-bold" style=" color:#28b6f6">Member Name</p>
                                                <span> {{$member->member_name}}</span>
                                            </div>

                                        </li>


                                    </ul>


                                </h2>
                                <h2 class="card-title " style="color:#28b6f6 ">
                                    <ul class="activity-timeline timeline-left list-unstyled">
                                        <li>
                                            <div class="timeline-icon bg-danger">
                                                <i class="feather  icon-heart font-medium-2"></i>
                                            </div>
                                            <div class="timeline-info">
                                                <p class="font-weight-bold" style=" color:#28b6f6">Relation</p>
                                                <span> {{$member->member_relation}}</span>
                                            </div>

                                        </li>


                                    </ul>


                                </h2>
                                <p class=""></p>
                                {{-- <div class="heading-elements">
                                    <ul class="list-inline mb-0">
                                        <li><span><i class="feather icon-more-vertical"></i></span></li>
                                    </ul>
                                </div> --}}
                            </div>
                            <div class="card-content">
                                <div class="card-body">
                                    <img class="img-fluid" src="{{asset($member->member_image)}}" alt="img placeholder" alt="{{$member->member_name}}">

                                </div>
                            </div>

                        </div>
                        @endforeach

                    </div>


                </div>
            </section>

        </div>
        </div>
    </div>
    <!-- END: Content-->



@endsection

@section('scripts')
    <script src="{{asset('theme/app-assets/js/scripts/pages/user-profile.js')}}"></script>
@endsection
