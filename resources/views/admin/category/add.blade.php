@extends('layouts.main')

@section('title','Add New Skill')
@section('content')
    <div class="app-content content">
        <div class="content-overlay"></div>
        <div class="header-navbar-shadow"></div>
        <div class="content-wrapper">
            <div class="content-header row">
                <div class="content-header-left col-md-9 col-12 mb-2">
                    <div class="row breadcrumbs-top">
                        <div class="col-8">
                            <h2 class="content-header-title float-left mb-0">Skills</h2>
                        </div>
                        <div class="col-md-4">
                            <!-- <a href="{{route('view_skill')}}">View Skills</a> -->
                        </div>
                    </div>
                </div>
            </div>
            <div class="content-body">
                <!-- Basic Horizontal form layout section start -->

                <!-- // Basic Horizontal form layout section end -->

                <!-- Basic Vertical form layout section start -->

                <!-- // Basic multiple Column Form section start -->
                <section id="multiple-column-form">
                    <div class="row match-height">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">New Skill</h4>
                                </div>
                                <div class="card-content">
                                    <div class="card-body">
                                        @if(Session::has('errors'))
                                            <div class="alert alert-danger mb-2" role="alert">
                                                <strong>Error</strong> {{Session::get('errors')->first()}}
                                            </div>
                                        @endif
                                        @if(Session::has('created'))
                                            <div class="alert alert-primary mb-2" role="alert">
                                                <strong>Success</strong> Skill Created Successfully
                                            </div>
                                        @endif
                                        <form class="form" action="{{ route('add_skill') }}"
                                              method="POST" enctype="multipart/form-data">
                                            {{ csrf_field() }}
                                            <div class="form-body">
                                                <div class="row">
                                                    <div class="col-md-6 col-12">
                                                        <div class="form-label-group">
                                                            <input type="text" id="category-column" class="form-control"
                                                                   placeholder="Enter Skill Title"
                                                                   name="category_title">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6 col-12">
                                                        <div class="form-label-group">
                                                            <input type="file" id="category-column" class="form-control"
                                                                   placeholder="Upload Icon" name="icon">
                                                        </div>
                                                    </div>
                                                    <div class="col-12">
                                                        <button type="submit" class="btn btn-primary mr-1 mb-1">Add Skill
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                                <div class="card-content">
                                <div class="card-body">
                                <div class="table-responsive">
                        <table class="table data-thumb-view">
                            <thead>
                            <tr>
                               
                                <th>Icon</th>
                                <th>Skill</th>
                                <th>Action</th>
                              
                            </tr>
                            </thead>
                            <tbody>
                                @if(isset($skills))
                                @foreach($skills as $skill)
                                <tr style="background-color:white;">
                                    
                                   <td class="product-name"><img width="50px" height="50px" src="{{$skill->attachment_path}}"/></td>
                                   <td class="product-name">{{$skill->name}}</td>
                                    <td>
                                    <a href="{{route('deleteskill',$skill->id)}}">   <span class="action-delete delete-toast btn btn-danger mr-1 mb-1 " ><i
                                                class="feather icon-trash"></i></span></a>
                                    </td>
                                 
                                </tr>
                               
                         @endforeach
                         @endif
                            </tbody>
                        </table>
                    </div>
                                </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
        </div>
    </div>
    <!-- END: Content-->
@endsection
