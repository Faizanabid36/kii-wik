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
                            <h2 class="content-header-title float-left mb-0">Tasks List</h2>
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
                        <table  class="table data-thumb-view ">
                            <thead>
                            <tr>
                              
                                <th>TITLE</th>
                                <th>DESCRIPTION</th>
                                <th>USER</th>
                               <th>CREATED</th>
                               
                                <th>ACTION</th>
                            </tr>
                            </thead>
                            <tbody>
                                @foreach($tasks as $task)
                                <tr id="{{$task->id}}" style="background-color:white;">
                                   
                                   
                                    <td class="product-name">{{$task->title}}</td>
                                    <td class="product-name">{{$task->description}}</td>
                                    <td class="product-name">{{$task->user->name}}</td>
                                    <td class="product-name">{{$task->created_at->diffForHumans()}}</td>


                                    <td class="product-action">
                                        <span id="{{$task->id}}"  class="action-delete delete-toast btn btn-danger mr-1 mb-1 " data-toggle="modal" data-target="#deleteTask"><i
                                                class="feather icon-trash"></i></span>
                                       <a href="{{route('user.task.show',$task->id)}}"> <span onclick="" id="view-item-" class="action-delete delete-toast btn btn-primary mr-1 mb-1"><i
                                                    class="feather icon-eye"></i></span></a>
<div class="modal fade" id="deleteTask" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Are You sure?</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="{{route('user.task.delete',$task->id)}}">
        @csrf
        <button type="button" class="btn btn-secondary" data-dismiss="modal">No</button>
        <button type="submit" class="btn btn-primary">Yes</button>
        </form>
      </div>
      <div class="modal-footer">
       
      </div>
     
    </div>
  </div>
</div>

                                    </td>
                                </tr>
                                <tr><td colspan=7><hr></td></tr>
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
@section('footer_scripts')
    <script>
    $(document).ready(function(){
       
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });

 

    });
    </script>
   
@endsection
