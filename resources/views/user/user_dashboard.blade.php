@extends('layouts.main')


@section('content')

  <!-- BEGIN: Content-->
  <div class="app-content content">
    <div class="content-overlay"></div>
    <div class="header-navbar-shadow"></div>
    <div class="content-wrapper">
       
        <div class="content-body">
            
            <!-- Dashboard Analytics Start -->
            <section id="dashboard-analytics">
                
                <div class="row">
                  
                    <div class="col-lg-12 col-md-12 col-sm-12">
                        <div class="card bg-analytics ">
                            <div class="card-content">
                                <div class="card-body text-center" style="margin-top: 41px;">
                                    <div class="avatar avatar-xl bg-primary shadow mt-0">
                                        <div class="avatar-content">
                                            <i class="feather icon-award white font-large-1"></i>
                                        </div>
                                    </div>
                                    <img src="{{asset('theme/app-assets/images/elements/decore-right.png')}}" class="img-right" alt="card-img-right">
                                    <img src="{{asset('theme/app-assets/images/elements/decore-right.png')}}" class="img-right" alt="card-img-right">
                                    <img src="{{asset('theme/app-assets/images/elements/decore-left.png')}}" class="img-left" alt="card-img-left">
                                    <img src="{{asset('theme/app-assets/images/elements/decore-right.png')}}" class="img-right" alt="card-img-right">
                                    <div class="avatar avatar-xl bg-primary shadow mt-0">
                                        <div class="avatar-content">
                                            <i class="feather icon-award white font-large-1"></i>
                                        </div>
                                    </div>
                                    <div class="text-center" style="margin-top: 41px;">
                                        <h1 class="mb-2">Welcome to Kii-Wik {{auth()->user()->name}} {{auth()->user()->lastname}}</h1>
                                        {{-- <p class="m-auto w-75">You have done <strong>57.6%</strong> more sales today. Check your new badge in your profile.</p> --}}
                                    </div>
                                    
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </section>
            <!-- Dashboard Analytics end -->
            <div class="row">
                <div class="col-lg-4 col-sm-6 col-12">
                    <div class="card">
                        <div class="card-header d-flex align-items-start pb-0">
                            <div>
                                <h2 class="text-bold-700">{{$array[0]}}</h2>
                                <p class="mb-0">My Total Tasks</p>
                            </div>
                            <div class="avatar bg-rgba-primary p-50">
                                <div class="avatar-content">
                                    <i class="feather icon-monitor text-primary font-medium-5"></i>
                                </div>
                            </div>
                        </div>
                        <div class="card-content">
                            <div id="line-area-chart-5"></div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6 col-12">
                    <div class="card">
                        <div class="card-header d-flex align-items-start pb-0">
                            <div>
                                <h2 class="text-bold-700">{{$array[1]}}</h2>
                                <p class="mb-0">Total Biddings</p>
                            </div>
                            <div class="avatar bg-rgba-success p-50">
                                <div class="avatar-content">
                                    <i class="feather icon-user-check text-success font-medium-5"></i>
                                </div>
                            </div>
                        </div>
                        <div class="card-content">
                            <div id="line-area-chart-6"></div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6 col-12">
                    <div class="card">
                        <div class="card-header d-flex align-items-start pb-0">
                            <div>
                                <h2 class="text-bold-700">{{$array[2]}}</h2>
                                <p class="mb-0">Completed Tasks</p>
                            </div>
                            <div class="avatar bg-rgba-warning p-50">
                                <div class="avatar-content">
                                    <i class="feather icon-mail text-warning font-medium-5"></i>
                                </div>
                            </div>
                        </div>
                        <div class="card-content">
                            <div id="line-area-chart-7"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
</div>

<!-- END: Content-->

@endsection
