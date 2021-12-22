@extends('layouts.main')

@section('content')

<div class="app-content content">
    <div class="content-overlay"></div>
    <div class="header-navbar-shadow"></div>
    <div class="card content-wrapper">

        <div class="content-header row">
            <div class="content-header-left col-md-9 col-12 mb-2">
                <div class="row breadcrumbs-top">
                    <div class="col-12">
                        <h2 class="content-header-title float-left mb-0">Assignees List</h2>
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
                    <table class="table data-thumb-view">
                        <thead>
                        <tr>
                            <th></th>
                            <th>ASSIGNEE NAME</th>
                            <th>PHONE NUMBER</th>
                            <th>DONE AMOUNT</th>
                           
  
                            <th >ACTION</th>
                        </tr>
                        </thead>
                        <tbody>
                            @foreach($taskers as $tasker)
                            <tr >
                                <td></td>
                                <td>{{$tasker['name']}}</td>
                                <td>{{$tasker['phone']}}</td>
                                <td>{{$tasker['amount']}}</td>
                              
                            </td>
                                <!-- <td class="product-action">
                                <form action="{{route('user.task.assign_tasker')}}" method="POST">
                                @csrf
                              
                                <button type="submit" class="action-delete delete-toast btn btn-danger mr-1 mb-1 delete_user">Assign tasks</button>
                                  
                                </form>
                                </td> -->
                                <td>
                                   <a href="{{route('company.profile.view',$tasker['user_id'])}}"> <span onclick="" id="view-item-" class="action-delete delete-toast btn btn-primary mr-1 mb-1">View Profile</span></a>
                                   <a href="{{route('user.task.complete_task',[$tasker['task']->id,$tasker['user_id']])}}"> <span onclick="" id="view-item-" class="action-delete delete-toast btn btn-primary mr-1 mb-1">Complete</span></a>
                                    <a href="#" data-toggle="modal" data-target="#addReview"><span onclick="" id="view-item-" class="action-delete delete-toast btn btn-primary mr-1 mb-1">Add Review</span></a>
                                </td>
                            </tr>
                                <div class="modal fade" id="addReview" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel">Review User</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                    <div class="card-body">

                                @if(auth()->id()!=$tasker['user_id'] )
                                    <div class="row">
                                        <form style="width: 75%;margin: 0px auto" action="{{route('company.profile.review_add')}}"
                                            method="post">
                                            @csrf
                                            <input hidden name="to_user_id" value="{{$tasker['user_id']}}"/>
                                            <div class="rating">
                                                <input type="radio" name="rating" value="5" id="5"><label for="5">☆</label>
                                                <input type="radio" name="rating" value="4" id="4"><label for="4">☆</label>
                                                <input type="radio" name="rating" value="3" id="3"><label for="3">☆</label>
                                                <input type="radio" name="rating" value="2" id="2"><label for="2">☆</label>
                                                <input type="radio" name="rating" value="1" id="1"><label for="1">☆</label>
                                            </div>
                                            <fieldset class="form-label-group">
                                                    <textarea name="review" class="form-control" id="label-textarea" rows="3"
                                                            placeholder="Add Your Review..."></textarea>
                                                <label for="label-textarea">Add Review Here</label>
                                            </fieldset>
                                            <button type="submit" id="add_review"
                                                    class="btn btn-primary  mr-sm-1 mb-1 mb-sm-0 waves-effect waves-light">
                                                Add Review
                                            </button>
                                        </form>
                                    </div>
                                @endif

                                </div>
                                    
                                    </div>
                                    <div class="modal-footer">
                                    
                                    </div>
                                    
                                    </div>
                                </div>
                                </div>
                
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

@endsection