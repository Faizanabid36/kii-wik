@extends('layouts.main')

@section('content')
<div class="app-content content">
        <div class="content-overlay"></div>
        <div class="header-navbar-shadow"></div>
        <div class="content-wrapper">
            <div class="content-header row">
                <div class="content-header-left col-md-9 col-12 mb-2">
                    <div class="row breadcrumbs-top">
                        <div class="col-12">
                            <h2 class="content-header-title float-left mb-0">Users List</h2>
                            <div class="breadcrumb-wrapper col-12">

                            </div>
                        </div>
                    </div>
                </div>
                <div class="content-header-right text-md-right col-md-3 col-12 d-md-block d-none">
                    <div class="form-group breadcrum-right">
                        <div class="dropdown">
                            <button class="btn-icon btn btn-primary btn-round btn-sm dropdown-toggle" type="button"
                                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i
                                    class="feather icon-settings"></i></button>
                            <div class="dropdown-menu dropdown-menu-right"><a class="dropdown-item" href="#">Chat</a><a
                                    class="dropdown-item" href="#">Email</a><a class="dropdown-item"
                                                                               href="#">Calendar</a></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="content-body">
            @if(Session::has('success'))
                                    <div class="alert alert-success">
                                        <h6 class="text-success mb-1 mt-1 font-weight-bold">
                                            <strong>{{ Session::get('success') }}</strong>
                                        </h6>
                                        </div>
                                    @endif

                <!-- Data list view starts -->
                <section id="data-thumb-view" class="data-thumb-view-header">
                    <div class=" d-none">
                        <div class="btn-dropdown mr-1 mb-1">
                            <div class="btn-group dropdown actions-dropodown">
                                <button type="button"
                                        class="btn btn-white px-1 py-1 dropdown-toggle waves-effect waves-light"
                                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    Actions
                                </button>
                                <div class="dropdown-menu dropdown-menu-right">
                                    <a class="dropdown-item bulk-delete" href="#"><i class="feather icon-trash"></i>Delete</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- dataTable starts -->
                    <div class="table-responsive">
                        <table class="table data-thumb-view">
                            <thead>
                            <tr>

                            </tr>
                            </thead>
                            <tbody>
                                @foreach($tasks as $task)
                                <tr id="{{$task->id}}">
                                   <td>
                                   <h2>{{$task->title}}</h2>
                                   <br>
                                   <h3>{{$task->loc}}</h3>
                                   <br>
                                   <h3>{{$task->people}} required  </h3>
                                   <h3>Budget: {{$task->budget}}</h3>
                                   </td>
                                    <td class="product-action">
                                        <a href="{{route('user.task.delete',$task->id)}}"><span id="{{$task->id}}"  class="action-delete delete-toast btn btn-danger mr-1 mb-1 delete_user"><i
                                                class="feather icon-trash"></i></span></a>
                                       <a href="{{route('user.task.edit',$task->id)}}"> <span onclick="" id="view-item-" class="action-delete delete-toast btn btn-primary mr-1 mb-1"><i
                                                    class="feather icon-eye"></i></span></a>

                                    </td>
                                </tr>
                         @endforeach
                            </tbody>
                        </table>
                    </div>
                    <!-- dataTable ends -->


                </section>
                <!-- Data list view end -->

            </div>
        </div>
    </div>
    <!-- END: Content-->

    <div class="sidenav-overlay"></div>
    <div class="drag-target"></div>

@endsection
