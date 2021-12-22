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
                        <h2 class="content-header-title float-left mb-0">Biddings List</h2>
                        <div class="breadcrumb-wrapper col-12">

                        </div>
                    </div>
                </div>
            </div>
            <div class="content-header-right text-md-right col-md-3 col-12 d-md-block d-none">
                <div class="form-group breadcrumbs-right">
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
                            <th>BIDDER NAME</th>
                            <th>TAGLINE</th>
                            <th>PHONE NUMBER</th>
                            <th>DESCRIPTION</th>
                            <th>AMOUNT</th>
                            <th colspan=2 style="
    text-align: center;
">ACTION</th>
                        </tr>
                        </thead>
                        <tbody>
                            @foreach($biddings as $bidding)
                            <tr >
                                <td class="">{{$bidding->bidder->name}}</td>
                                <td class="">{{$bidding->bidder->tag??'N/A'}}</td>
                                <td class="">{{$bidding->bidder->phone??'N/A'}}</td>
                                <td class="">{{$bidding->description}}</td>
                                <td class="">{{$bidding->bid_amount}}</td>
                                <td class="product-action">
                                    <form action="{{route('user.task.assign_tasker')}}" method="POST">
                                        @csrf
                                        <input hidden name="user_id" value="{{$bidding->user_id}}"/>
                                        <input hidden name="task_id" value="{{$bidding->task_id}}"/>
                                        <input hidden name="done_amount" value="{{$bidding->bid_amount}}"/>
                                        <button type="submit"
                                                class="action-delete delete-toast btn btn-danger mr-1 mb-1 delete_user">
                                            Assign
                                        </button>
                                        <a href="{{route('user',$bidding->user_id)}}"
                                           class="action-delete delete-toast btn btn-secondary mr-1 mb-1 delete_user">
                                            Chat
                                        </a>
                                    </form>
                                    <a href="{{route('company.profile.view',$bidding->user_id)}}">
                                        <span onclick=""
                                              id="view-item-"
                                              class="action-delete delete-toast btn btn-primary mr-1 mb-1">
                                            Profile
                                        </span>
                                    </a>
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

@endsection
