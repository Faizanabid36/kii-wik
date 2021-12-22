<!DOCTYPE html>
<html class="loading" lang="en" data-textdirection="ltr">
<!-- BEGIN: Head-->

<head>
    <title>Kii-Wik</title>
    <link href="https://fonts.googleapis.com/css?family=Montserrat:300,400,500,600" rel="stylesheet">

    <!-- BEGIN: Vendor CSS-->
    <link rel="stylesheet" type="text/css" href="{{ asset('theme/app-assets/vendors/css/vendors.min.css') }}">
    <link rel="stylesheet" type="text/css"
        href="{{ asset('theme/app-assets/vendors/css/editors/quill/katex.min.css') }}">
    <link rel="stylesheet" type="text/css"
        href="{{ asset('theme/app-assets/vendors/css/editors/quill/monokai-sublime.min.css') }}">
    <link rel="stylesheet" type="text/css"
        href="{{ asset('theme/app-assets/vendors/css/editors/quill/quill.snow.css') }}">
    <!-- END: Vendor CSS-->

    <!-- BEGIN: Theme CSS-->
    <link rel="stylesheet" type="text/css" href="{{ asset('theme/app-assets/css/bootstrap.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('theme/app-assets/css/bootstrap-extended.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('theme/app-assets/css/colors.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('theme/app-assets/css/components.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('theme/app-assets/css/themes/dark-layout.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('theme/app-assets/css/themes/semi-dark-layout.css') }}">

    <!-- BEGIN: Page CSS-->
    <link rel="stylesheet" type="text/css"
        href="{{ asset('/theme/app-assets/css/core/menu/menu-types/vertical-menu.css') }}">
    <link rel="stylesheet" type="text/css"
        href="{{ asset('theme/app-assets/css/core/colors/palette-gradient.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('theme/app-assets/css/pages/app-chat.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('theme/app-assets/css/pages/users.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('theme/app-assets/css/pages/app-user.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('theme/app-assets/css/pages/app-email.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('theme/app-assets/css/pages/app-todo.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('theme/app-assets/css/themes/semi-dark-layout.css') }}">
    <link rel="stylesheet" type="text/css"
        href="{{ asset('theme/app-assets/css/core/menu/menu-types/vertical-menu.css') }}">
    <link rel="stylesheet" type="text/css"
        href="{{ asset('theme/app-assets/css/core/colors/palette-gradient.css') }}">
    <link rel="stylesheet" type="text/css"
        href="{{ asset('theme/app-assets/css/plugins/file-uploaders/dropzone.css') }}">
    <link rel="stylesheet" type="text/css"
        href="{{ asset('theme/app-assets/css/plugins/file-uploaders/dropzone.css') }}">
    <!-- END: Page CSS-->


    <!-- BEGIN: Custom CSS-->
    <link rel="stylesheet" type="text/css" href="{{ asset('theme/assets/css/style.css') }}">
    <!-- END: Custom CSS-->
    <script
        src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBu17qERWXajr4_OudOEpuH73yHd92KYI8&callback=initMap&libraries=places&v=weekly"
        defer></script>


</head>
<!-- END: Head-->

<!-- BEGIN: Body-->

<body
    class="vertical-layout vertical-menu-modern semi-dark-layout content-left-sidebar email-application navbar-floating footer-static  "
    data-open="click" data-menu="vertical-menu-modern" data-col="content-left-sidebar" data-layout="semi-dark-layout">

    <!-- BEGIN: Header-->
    @include('layouts.header')
    <!-- END: Header-->


    <!-- BEGIN: Main Menu-->
    @include('layouts.navbar')
    <!-- END: Main Menu-->

    <section id="bg-variants">
        <div class="col-12" style="visibility: hidden">
            <h4 class="text-uppercase">Background variants</h4>
        </div>
        <div class="row">
            @if (!request()->get('bidding'))
                <div class="ml-2 col-lg-3 col-md-4 col-sm-4 profile-card-1" style="overflow-y: scroll; height:750px">
                    @foreach ($tasks as $my_task)
                        <div class="card">
                            <div class="card-header mx-auto">
                                <div class="avatar avatar-xl">
                                    <img class="img-fluid"
                                        src="{{ $my_task->user->avatar ?? 'https://www.pngitem.com/pimgs/m/150-1503941_user-windows-10-user-icon-png-transparent-png.png' }}"
                                        alt="img placeholder">
                                </div>
                            </div>
                            <div class="card-content">
                                <div class="card-body text-center">
                                    <h4>{{ $my_task->title }}</h4>
                                    <p class="">{{ $my_task->type }}</p>
                                    {{-- <div class="card-btns d-flex justify-content-between">
                            <button class="btn gradient-light-primary">Follow</button>
                            <button class="btn btn-outline-primary">Message</button>
                        </div> --}}
                                    <hr class="my-2">
                                    <div class="d-flex justify-content-between">

                                        <div class="float-right">
                                            <a href="{{ route('user.task.show', $my_task->id) }}">
                                                <button class="btn btn-outline-primary">View Task</button>

                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            @endif
            @if (!request()->get('bidding'))
                <div class="col-lg-8 col-md-6 col-sm-12" style="height:750px">
                @else
                <div class="col-lg-12 col-md-6 col-sm-12" style="height:750px">
            @endif
            <div class="card text-white ">
                <div class="card-content d-flex">
                    <div class="card-body" style="    color: black;">

                        <div class="row" style="margin-top: 7px;">
                            <div class="col-12">

                                <div class="card px-1">
                                    <div class="card-header  ml-75">
                                        <div
                                            class="user-details d-flex justify-content-between align-items-center flex-wrap">
                                            <div class="avatar mr-75">
                                                <img src="{{ $task->user->avatar }}" alt="avtar img holder"
                                                    width="61" height="61">
                                            </div>
                                            <div class="mail-items">
                                                <h4 class="list-group-item-heading mb-0"></h4>
                                                <div class="email-info-dropup dropdown">
                                                    <span class="dropdown-toggle font-small-3"
                                                        id="dropdownMenuButton200" data-toggle="dropdown"
                                                        aria-haspopup="true" aria-expanded="false">
                                                        {{ $task->user->name }}
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="">
                                            <div class="email-detail-header">
                                                <div class="email-header-left d-flex align-items-center mb-1">
                                                </div>
                                                @if (auth()->user())
                                                    @if (auth()->id() == $task->user->id)
                                                        <div class="email-header-right mb-1 ml-2 pl-1">
                                                            <ul class="list-inline m-0">
                                                                <li class="list-inline-item"><a
                                                                        class="list-inline-item  btn btn-primary  mr-sm-1 mb-1 mb-sm-0 waves-effect waves-light"
                                                                        href="{{ route('user.task.biddings', $task->id) }}">Biddings</a>
                                                                </li>
                                                                <li class="list-inline-item"><a
                                                                        class="list-inline-item  btn btn-primary  mr-sm-1 mb-1 mb-sm-0 waves-effect waves-light"
                                                                        href="{{ route('user.task.assignees', $task->id) }}">Assignees</a>
                                                                </li>

                                                                <li class="list-inline-item">
                                                                    <a data-toggle="modal"
                                                                        data-target="#ModalScrollable">
                                                                        <span class="action-icon">
                                                                            <i
                                                                                class="feather icon-edit font-medium-5"></i>
                                                                        </span>
                                                                    </a>
                                                                </li>
                                                                <li class="list-inline-item"><a
                                                                        href="{{ route('user.task.delete', $task->id) }}"><span
                                                                            class="action-icon"><i
                                                                                class="feather icon-trash font-medium-5"></i></span></a>
                                                                </li>


                                                            </ul>
                                                        </div>
                                                    @else
                                                        <div class="email-header-right mb-1 ml-2 pl-1">
                                                            <ul class="list-inline m-0">
                                                                <li class="list-inline-item">
                                                                    <a class="list-inline-item  btn btn-danger  mr-sm-1 mb-1 mb-sm-0 waves-effect waves-light"
                                                                        data-toggle="modal"
                                                                        data-target="#reportTask-{{ $task->id }}"
                                                                        href="">Report</a>

                                                                    <div class="modal fade" style="z-index: 1000;"
                                                                        id="reportTask-{{ $task->id }}"
                                                                        tabindex="-1" role="dialog"
                                                                        aria-labelledby="exampleModalLabel"
                                                                        aria-hidden="true">
                                                                        <div class="modal-dialog" role="document">
                                                                            <div class="modal-content">
                                                                                <div class="modal-header">
                                                                                    <h5 class="modal-title"
                                                                                        id="exampleModalLabel">
                                                                                        Report</h5>
                                                                                    <button type="button" class="close"
                                                                                        data-dismiss="modal"
                                                                                        aria-label="Close">
                                                                                        <span
                                                                                            aria-hidden="true">&times;</span>
                                                                                    </button>
                                                                                </div>
                                                                                <div class="modal-body">
                                                                                    <form method="post"
                                                                                        action="{{ route('user.report') }}">
                                                                                        @csrf
                                                                                        <input name="report_id"
                                                                                            value="{{ $task->id }}"
                                                                                            hidden />
                                                                                        <input name="type" value="task"
                                                                                            hidden />
                                                                                        <label class="col-md-12">
                                                                                            Reason:
                                                                                            <Textarea name="description"
                                                                                                class="form-control"></Textarea>
                                                                                        </label>
                                                                                    </form>
                                                                                </div>
                                                                                <div class="modal-footer">
                                                                                    <button type="button"
                                                                                        class="btn btn-secondary"
                                                                                        data-dismiss="modal">
                                                                                        Cancel
                                                                                    </button>
                                                                                    <button type="submit"
                                                                                        class="btn btn-danger">Report
                                                                                    </button>
                                                                                </div>
                                                                                </form>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    @endif
                                                @endif
                                            </div>
                                            <div class="mail-date"></div>
                                        </div>
                                    </div>
                                    <!-- Timeline Starts -->
                                    <section id="timeline-card">
                                        <div class="row">
                                            <div class="col-lg-1 col-sm-12">
                                            </div>

                                            <div class="col-lg-5 col-sm-12">
                                                <div class="card">
                                                    <div class="card-header">
                                                        <h4 class="card-title">About Task</h4>
                                                    </div>
                                                    <div class="card-content">
                                                        <div class="card-body">
                                                            <ul class="activity-timeline timeline-left list-unstyled">
                                                                <li>
                                                                    <div class="timeline-icon bg-primary">
                                                                        <i class="feather icon-globe font-medium-2"></i>
                                                                    </div>
                                                                    <div class="timeline-info">
                                                                        <p class="font-weight-bold"> Location</p>
                                                                        <span>{{ $task->type }}</span>
                                                                    </div>

                                                                </li>
                                                                <li>
                                                                    <div class="timeline-icon bg-warning">
                                                                        <i
                                                                            class="feather icon-alert-circle font-medium-2"></i>
                                                                    </div>
                                                                    <div class="timeline-info">
                                                                        <p class="font-weight-bold">Due
                                                                            Date</p>
                                                                        <span>{{ date('m/d/Y', strtotime($task->due_date)) }}</span>
                                                                    </div>

                                                                </li>
                                                                <li>
                                                                    <div class="timeline-icon bg-success">
                                                                        <i class="feather icon-check font-medium-2"></i>
                                                                    </div>
                                                                    <div class="timeline-info">
                                                                        <p class="font-weight-bold">Task
                                                                            Description</p>
                                                                        <span>{{ $task->description }}</span>

                                                                    </div>

                                                                </li>
                                                                @if (isset($task->taskAttachments->attach_url))
                                                                    <li>
                                                                        <div class="timeline-icon bg-success">
                                                                            <i
                                                                                class="feather icon-check font-medium-2"></i>
                                                                        </div>
                                                                        <div class="timeline-info">
                                                                            <p class="font-weight-bold">Task
                                                                                Attachments</p>
                                                                            <a href="{{ $task->taskAttachments->attach_url }}"
                                                                                download="">Download Attachment</a>
                                                                        </div>

                                                                    </li>
                                                                @endif

                                                                <li>
                                                                    <div class="timeline-icon bg-danger">
                                                                        <i
                                                                            class=" feather icon-map-pin font-medium-2"></i>
                                                                    </div>
                                                                    <div class="timeline-info">
                                                                        <p class="font-weight-bold">
                                                                            <a data-toggle="modal"
                                                                                data-target="#xlarge">
                                                                                View on Maps
                                                                            </a>
                                                                        </p>
                                                                    </div>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-5 col-sm-12">
                                                <div class="card-content">
                                                    <div class="card-body text-center mx-auto"
                                                        style="    border: 2px #8a75f3 solid;margin-top: 22px;">
                                                        <div class="">
                                                            <p class="font-weight-bold font-medium-2 mb-0">
                                                                TASK BUDGET ESTIMATE</p><br>
                                                        </div>
                                                        <div class="d-flex justify-content-between mt-2">
                                                            <div class="uploads">
                                                                <p class="font-weight-bold font-medium-2 mb-0"></p>
                                                                <span class=""></span>
                                                            </div>
                                                            <div class="followers">
                                                                <p class="font-weight-bold font-medium-2 mb-0">
                                                                    {{ $task->budget }}</p>
                                                                <span class="">Mexican Peso</span>
                                                            </div>
                                                            <div class="following">
                                                                <p class="font-weight-bold font-medium-2 mb-0"></p>
                                                                <span class=""></span>
                                                            </div>
                                                        </div>
                                                        <br>

                                                        @if (auth()->user() and auth()->user()->role == 'user')
                                                            <a href="{{ route('user.task.biddings', $task->id) }}"
                                                                class="btn gradient-light-primary btn-block mt-2">
                                                                Offers Received : {{ $biddings }}
                                                            </a>
                                                        @else
                                                            @if (!request()->get('bidding'))
                                                                <button
                                                                    class="btn gradient-light-primary btn-block mt-2"
                                                                data-toggle="modal" @if (isset(auth()->user()->subscription_end_date) and date('Y-m-d') < auth()->user()->subscription_end_date) data-target="#modalBid" @else
                                                                    data-target="#modalBuyPackage" @endif>
                                                                    Make An Offer
                                                                </button>
                                                            @endif
                                                        @endif
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </section>
                                    <!-- Timeline Ends -->


                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="d-flex justify-content-between">
                                            <span class="font-medium-1"><span
                                                    class="primary cursor-pointer"><strong>{{ count($task->task_comments) }}
                                                        Comments</strong></span> about this <span
                                                    class="primary  cursor-pointer"><strong>Task</strong></span></span>
                                        </div>
                                        <div class="card">
                                            <div class="card-body">
                                            </div>
                                            @foreach ($task->task_comments as $comment)
                                                <div class="d-flex justify-content-start align-items-center mb-3">
                                                    <div class="avatar mr-50">
                                                        <img src="{{ $comment->user->avatar }}" height="30"
                                                            width="30">
                                                    </div>
                                                    <div class="user-page-info">
                                                        <h6 class="mb-0">{{ $comment->user->full_name }}</h6>
                                                        <span
                                                            class="font-small-2">{{ $comment->comment_body }}</span>
                                                    </div>
                                                    @if (isset(auth()->user()->id))
                                                        @if (auth()->id() == $comment->user_id or auth()->user()->role == 'admin')
                                                            <a href="{{ route('user.comment.delete', $comment->id) }}"
                                                                class="ml-auto cursor-pointer">
                                                                Delete
                                                            </a>
                                                        @else
                                                            <a href="" data-toggle="modal"
                                                                data-target="#reportComment-{{ $comment->id }}"
                                                                class="ml-auto cursor-pointer">
                                                                Report
                                                            </a>
                                                            <div class="modal fade"
                                                                id="reportComment-{{ $comment->id }}" tabindex="-1"
                                                                role="dialog" aria-labelledby="exampleModalLabel"
                                                                aria-hidden="true">
                                                                <div class="modal-dialog" role="document">
                                                                    <div class="modal-content">
                                                                        <div class="modal-header">
                                                                            <h5 class="modal-title"
                                                                                id="exampleModalLabel">
                                                                                Report</h5>
                                                                            <button type="button" class="close"
                                                                                data-dismiss="modal" aria-label="Close">
                                                                                <span aria-hidden="true">&times;</span>
                                                                            </button>
                                                                        </div>
                                                                        <div class="modal-body">
                                                                            <form method="post"
                                                                                action="{{ route('user.report') }}">
                                                                                @csrf
                                                                                <input name="report_id"
                                                                                    value="{{ $comment->id }}"
                                                                                    hidden />
                                                                                <input name="type" value="comment"
                                                                                    hidden />
                                                                                <label class="col-md-12"> Reason:
                                                                                    <Textarea name="description"
                                                                                        class="form-control"></Textarea>
                                                                                </label>


                                                                        </div>
                                                                        <div class="modal-footer">
                                                                            <button type="button"
                                                                                class="btn btn-secondary"
                                                                                data-dismiss="modal">Cancel
                                                                            </button>
                                                                            <button type="submit"
                                                                                class="btn btn-danger">
                                                                                Report
                                                                            </button>
                                                                        </div>
                                                                        </form>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        @endif
                                                    @endif
                                                </div>
                                            @endforeach
                                            <form action="{{ route('user.comment.store') }}" method="POST">
                                                @csrf
                                                <fieldset class="form-label-group mb-50 mt-25">
                                                    <textarea class="form-control" id="label-textarea" rows="3"
                                                        name="comment_body" required
                                                        placeholder="Add Comment"></textarea>
                                                    <label for="label-textarea">Add Comment...</label>
                                                </fieldset>
                                                <input type="hidden" value="{{ $task->id }}" name="task_id">
                                                <input type="submit" class="btn btn-sm btn-primary">
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>

        </div>
    </section>

    <div class="modal fade" id="modalBuyPackage" tabindex="-1" style="z-index: 100000" role="dialog"
        aria-labelledby="exampleModalScrollableTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-scrollable" role="document">

            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Buy A Package</h4>
                </div>
                <div class="modal-body">
                    <p>Please buy a package before bid.</p>
                </div>
                <div class="modal-footer">
                    <a href="/#subscription-section" class="btn btn-default">OK</a>
                </div>
            </div>

        </div>
    </div>




    <div class="modal fade" id="ModalScrollable" tabindex="-1" role="dialog"
        aria-labelledby="exampleModalScrollableTitle" aria-hidden="true" style="z-index: 1000;">
        <div class="modal-dialog modal-dialog-scrollable" role="document">
            <div class="modal-content">
                <div class="modal-header" style="background-color: #28b6f6 !important;">
                    <h4 class="modal-title" id="myModalLabel4" style="color: white">Edit your task?</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body" style="padding: 26px;">
                    <form enctype="multipart/form-data" method="POST" action="{{ route('user.task.edit_submit') }}">
                        @csrf
                        <input name="id" hidden value="{{ $task->id }}" />
                        <div class="row">
                            <div class="col-12">
                                <div class="form-group">
                                    <div class="controls">
                                        <label for="account-username">Task
                                            title</label>
                                        <input type="text" name="title" class="form-control" id="account-username"
                                            placeholder="Username" required
                                            data-validation-required-message="This username field is required"
                                            value="{{ $task->title }}">
                                    </div>
                                </div>
                            </div>
                            <br>
                            <br>

                            <div class="col-12">
                                <div class="form-group">
                                    <label for="accountTextarea">Describe
                                        your task in more
                                        detail</label>
                                    <textarea class="form-control" name="description" id="accountTextarea" rows="3"
                                        placeholder="Description.">{{ $task->description }}</textarea>
                                </div>
                            </div>
                            <!-- limit file upload starts -->
                            <div class="row" style="display: contents;">
                                <div class="col-12">
                                    <div class="card">
                                        <div class="card-header">
                                            <h4 class="card-title">
                                                Describe your task
                                                in more detail</h4>
                                        </div>
                                        <div class="card-content col-12">
                                            <div class="card-body" id="image-list">
                                                <p class="card-text">
                                                    <img width="400"
                                                        src="{{ $task->taskAttachments->attach_url ?? '' }}">
                                                    Upload Picture
                                                </p>

                                                <input type="file" name="pic">

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-group">
                                    <label>What type of task is
                                        it?</label>
                                    <ul class="list-unstyled mb-0">
                                        <li class="d-inline-block mr-2">
                                            <fieldset>

                                                <input {{ $task->type == 'physical' ? 'checked' : '' }} type="radio"
                                                    name="type" value="physical">
                                                <i class="ficon feather icon-map-pin"></i>Physical
                                                <div class="vs-radio-con">
                                                </div>
                                            </fieldset>
                                        </li>
                                        <li class="d-inline-block mr-2">
                                            <fieldset>

                                                <input {{ $task->type == 'online' ? 'checked' : '' }} type="radio"
                                                    name="type" value="online">

                                                <i class="ficon feather icon-globe"></i>Online
                                                <div class="vs-radio-con">


                                                </div>
                                            </fieldset>
                                        </li>


                                    </ul>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-group">
                                    <div class="controls">
                                        <label for="account-username">Location</label>
                                        <input value="{{ $task->loc }}" type="text" name="loc" class="form-control"
                                            id="account-date" placeholder="Location" required
                                            data-validation-required-message="This username field is required">
                                    </div>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-group">
                                    <div class="controls">
                                        <label for="account-username">Date</label>
                                        <input value="{{ $task->due_date }}" type="date" name="due_date"
                                            class="form-control" id="account-date" placeholder="Date" required
                                            data-validation-required-message="This username field is required">
                                    </div>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-group">
                                    <div class="controls">
                                        <label for="account-username">How
                                            many people do you need for
                                            your task?</label>
                                        <input value="{{ $task->people }}" type="number" name="people"
                                            class="form-control" id="account-date" placeholder="Taskers" required
                                            data-validation-required-message="This username field is required">
                                    </div>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-group">
                                    <div class="controls">
                                        <label for="account-username">What's
                                            your budget
                                            estimate?</label>
                                        <input type="number" name="budget" class="form-control" id="account-date"
                                            placeholder="Amount" required
                                            data-validation-required-message="This username field is required"
                                            value="{{ $task->budget }}">
                                    </div>
                                </div>
                            </div>
                        </div>
                </div>

                <div class="modal-footer">
                    <button type="submit" class="btn btn-primary mr-sm-1 mb-1 mb-sm-0">
                        Update Task
                    </button>

                </div>
                </form>
            </div>

        </div>
    </div>
    <!-- Background variants section end -->

    <div class="modal fade" id="modalBid" tabindex="-1" role="dialog" aria-labelledby="exampleModalScrollableTitle"
        aria-hidden="true" style="z-index: 1000;">
        <div class="modal-dialog modal-dialog-scrollable" role="document">

            <div class="modal-content">
                <div class="modal-header" style="background-color: #28b6f6 !important;">
                    <h4 class="modal-title" id="myModalLabel4" style="color: white">Make Your Offer</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body" style="padding: 26px;">
                    <form enctype="multipart/form-data" method="POST" action="{{ route('user.task.bid_on_task') }}">
                        @csrf
                        <input name="task_id" hidden value="{{ $task->id }}" />
                        <input name="taskUser_id" hidden value="{{ $task->user_id }}" />
                        <div class="row">
                            <br>
                            <br>
                            <div class="col-12">
                                <div class="form-group">
                                    <div class="controls">
                                        <label for="account-username">Bid</label>
                                        <input type="number" name="bid_amount" class="form-control" id="bid" required
                                            data-validation-required-message="This  field is required">
                                    </div>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-group">
                                    <label for="accountTextarea">Bidding Description</label>
                                    <textarea class="form-control" name="description" id="desc" rows="3"></textarea>
                                </div>
                            </div>


                        </div>
                </div>

                <div class="modal-footer">
                    <button type="submit" class="btn btn-primary mr-sm-1 mb-1 mb-sm-0">
                        Make Quote
                    </button>

                </div>
                </form>
            </div>

        </div>
    </div>

    <div style="z-index: 99999" class="modal fade text-left" id="xlarge" tabindex="-1" role="dialog"
        aria-labelledby="myModalLabel16" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title" id="myModalLabel16">Extra Large Modal</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div style="height: 400px!important;" id="map">
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close
                    </button>
                </div>
            </div>
        </div>
    </div>


    <div class="sidenav-overlay"></div>
    <div class="drag-target"></div>
    <!-- BEGIN: Footer-->

    <!-- END: Footer-->


    <!-- BEGIN: Vendor JS-->
    <script src="{{ asset('theme/app-assets/vendors/js/vendors.min.js') }}"></script>
    <!-- BEGIN Vendor JS-->

    <!-- BEGIN: Page Vendor JS-->
    <script src="{{ asset('theme/app-assets/vendors/js/editors/quill/katex.min.js') }}"></script>
    <script src="{{ asset('theme/app-assets/vendors/js/editors/quill/highlight.min.js') }}"></script>
    <script src="{{ asset('theme/app-assets/vendors/js/editors/quill/quill.min.js') }}"></script>
    <!-- END: Page Vendor JS-->

    <!-- BEGIN: Theme JS-->
    <script src="{{ asset('theme/app-assets/js/core/app-menu.js') }}"></script>
    <script src="{{ asset('theme/app-assets/js/core/app.js') }}"></script>
    <script src="{{ asset('theme/app-assets/js/scripts/components.js') }}"></script>
    <!-- END: Theme JS-->

    <!-- BEGIN: Page JS-->
    <script src="{{ asset('theme/app-assets/js/scripts/pages/app-email.js') }}"></script>
    <script src="{{ asset('theme/app-assets/js/scripts/modal/components-modal.js') }}"></script>
    <!-- END: Page JS-->

    <script>
        function initMap() {
            const myLatlng = {
                lat: {{ $task->latitude }},
                lng: {{ $task->longitude }}
            };
            var mapOptions = {
                zoom: 6,
                center: myLatlng
            }
            var map = new google.maps.Map(document.getElementById("map"), mapOptions);
            var marker = new google.maps.Marker({
                position: myLatlng,
                title: "{{ $task->title }}"
            });
            marker.setMap(map);

        }

    </script>
</body>
<!-- END: Body-->

</html>
