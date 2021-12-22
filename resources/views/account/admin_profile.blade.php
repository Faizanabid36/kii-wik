@extends('layouts.main')

@section('content')
<style>
    .prof{
        color:#28b6f6"
    }
</style>

 

 <!-- BEGIN: Content-->
 <div class="app-content content">
    <div class="content-overlay"></div>
    <div class="header-navbar-shadow"></div>
    <div class="content-wrapper">
        <div class="content-header row">
        </div>
        <div class="content-body">
            <!-- page users view start -->
            <section class="page-users-view">
                <div class="row">
                    <!-- account start -->
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <div class="card-title">Account</div>
                            </div>
                            <div class="card-body">
                                <div class="row">
                                    <div class="users-view-image">
                                        <img src="{{$user->avatar}}" class="users-avatar-shadow w-100 rounded mb-2 pr-2 ml-1" alt="avatar">
                                    </div>
                                    <div class="col-12 col-sm-9 col-md-6 col-lg-5">
                                        <table>
                                            <tr>
                                                <td class="font-weight-bold" style=" color:#28b6f6"> <i class="feather  icon-mail font-medium-2"></i> Username</td>
                                                <td>{{$user->username}}</td>
                                            </tr>
                                            <tr>
                                                <td class="font-weight-bold" style=" color:#28b6f6"><i class="feather  icon-mail font-medium-2"></i> Name</td>
                                                <td>{{$user->name}}</td>
                                            </tr>
                                            <tr>
                                                <td class="font-weight-bold" style=" color:#28b6f6"><i class="feather  icon-mail font-medium-2"></i> tagline</td>
                                                <td>{{$user->tag}}</td>
                                            </tr>
                                            <tr>
                                                <td class="font-weight-bold" style=" color:#28b6f6"><i class="feather  icon-mail font-medium-2"></i> Email</td>
                                                <td>{{$user->email}}</td>
                                            </tr>
                                        </table>
                                    </div>
                                    <div class="col-12 col-md-12 col-lg-5">
                                        <table class="ml-0 ml-sm-0 ml-lg-0">
                                            <tr>
                                                <td class="font-weight-bold" style=" color:#28b6f6"><i class="feather  icon-mail font-medium-2"></i> Phone Number</td>
                                                <td>{{$user->phone}}</td>
                                            </tr>
                                            <tr>
                                                <td class="font-weight-bold" style=" color:#28b6f6"><i class="feather  icon-mail font-medium-2"></i> Gender</td>
                                                <td>{{$user->gender}}</td>
                                            </tr>
                                            <tr>
                                                <td class="font-weight-bold" style=" color:#28b6f6"><i class="feather  icon-mail font-medium-2"></i> Location</td>
                                                <td>{{$user->loc}}</td>
                                            </tr>
                                            <tr>
                                                <td class="font-weight-bold" style=" color:#28b6f6"><i class="feather  icon-mail font-medium-2"></i> My Skills</td>
                                                @foreach($user->skills as $skill)

                                                <td>{{$skill->name}}</td>
                                                @endforeach
                                            </tr>
                                            <tr>
                                                <td class="font-weight-bold" style=" color:#28b6f6"><i class="feather  icon-mail font-medium-2"></i> Description</td>
                                                <td>{{$user->description}}</td>
                                            </tr>
                                           
                                        </table>
                                    </div>
                                    @if(auth()->user()->id==$user->id)
                                    <div class="col-12">

                                        <a href="{{route('company.profile.edit')}}" class="btn btn-primary mr-1"><i class="feather icon-edit-1"></i> Edit</a>
                                        <button class="btn btn-outline-danger"><i class="feather icon-trash-2"></i> Delete</button>
                                    </div>
                                    @endif
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
                <div id="user_reviews"> 
                    @include('account.user_review')
                </div>
            </section>
            <!-- page users view end -->

        </div>
    </div>
</div>
<!-- END: Content-->

@endsection
