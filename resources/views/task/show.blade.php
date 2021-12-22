<!DOCTYPE html>
<html class="loading" lang="en" data-textdirection="ltr">
<!-- BEGIN: Head-->

<head>
    <title>{{ 'Kii-Wik' }}</title>
    <link rel="apple-touch-icon" href="../../../app-assets/images/ico/apple-icon-120.png">
    <link rel="shortcut icon" type="image/x-icon" href="../../../app-assets/images/ico/favicon.ico">
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
        href="{{ asset('theme/app-assets/css/core/menu/menu-types/vertical-menu.css') }}">
    <link rel="stylesheet" type="text/css"
        href="{{ asset('theme/app-assets/css/core/colors/palette-gradient.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('theme/app-assets/css/pages/app-email.css') }}">
    <!-- END: Page CSS-->
    <!-- BEGIN: Custom CSS-->
    <link rel="stylesheet" type="text/css" href="{{ asset('theme/assets/css/style.css') }}">

    <!-- END: Custom CSS-->
</head>

<body
    class="vertical-layout vertical-menu-modern semi-dark-layout content-left-sidebar email-application navbar-floating footer-static  "
    data-open="click" data-menu="vertical-menu-modern" data-col="content-left-sidebar" data-layout="semi-dark-layout">
    @include('layouts.navbar')
    <section id="bg-variants">
        <div class="col-12 ">
            {{-- <h4 class="text-uppercase" style="visibility: hidden;">Background variants</h4> --}}
            <div class="row" style="margin-left: 200px; margin-bottom: 22px; margin-top: 22px;">
                @if (auth()->user()->role == 'user')
                    <div class="col-md-4">
                        <button class="btn btn-success">
                            <a class="text-white" href="{{ route('user.task.completed_task') }}">
                                <b>Completed Tasks</b>
                            </a>
                        </button>
                    </div>
                    <div class="col-md-4">
                        <button class="btn btn-warning">
                            <a class="text-white" href="{{ route('user.task.assigned_task', auth()->user()->id) }}">
                                <b>Assigned Tasks</b>
                            </a>
                        </button>
                    </div>
                    <div class="col-md-4">
                        <button class="btn btn-danger">
                            <a class="text-white" href="{{ route('user.task.pending_task') }}">
                                <b>Pending Tasks</b>
                            </a>
                        </button>
                    </div>
                @endif
            </div>
        </div>
        @if (count($tasks) > 0)
            <div class="row">
                <div class="ml-2 col-lg-3 col-md-4 col-sm-4 profile-card-1">

                    <div style="overflow-y: scroll; height:500px">
                        @foreach ($tasks as $my_task)
                            <div class="card mt-1 mb-1" style="box-shadow:0px 0px 10px -4px rgb(7 7 7)!important;">
                                <div class="card-header mx-auto">
                                    <div class="avatar avatar-xl">
                                        <img class="img-fluid"
                                            src="{{ $my_task->user->avatar ?? 'https://www.pngitem.com/pimgs/m/150-1503941_user-windows-10-user-icon-png-transparent-png.png' }}"
                                            alt="img placeholder">
                                    </div>
                                </div>
                                <div class="card-content">
                                    <div class="card-body text-center">
                                        <h4><b>{{ ucfirst($my_task->title) }}</b></h4>
                                        <p class=""><i>{{ ucfirst($my_task->type) }} task</i></p>

                                        <hr class="my-2">
                                        <div class="d-flex justify-content-between">
                                            <div class="float-left ">
                                                <p>{{ \Carbon\Carbon::parse($my_task->created_at)->format('d M, Y') }}
                                                </p>
                                                <p>Posted by: {{ ucfirst($my_task->user->name) }}</p>
                                            </div>
                                            <div class="float-right">
                                                <a href="{{ route('user.task.show', $my_task->id) }}">
                                                    <i class="feather icon-eye"></i> View
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach

                    </div>
                </div>
                <div class="col-lg-8 col-md-7 col-sm-7">
                    <div class="card text-white ">
                        <div class="card-content d-flex">
                            <div class="card-body" id="map" style="height: 80vh!important;">

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        @else
            <div class="card text-white ">
                <div class="card-content d-flex">
                    <h1 style="padding:10px; text-align:center; width:100%; color:red">No tasks available</h1>
                </div>
            </div>

        @endif

        <div class="modal fade" id="verificationModal" role="dialog" style="z-index: 10000">
            <div class="modal-dialog modal-lg">

                <!-- Modal content-->
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title text-center">Guideline to hire the perfect Superhero</h4>
                    </div>
                    <div class="modal-body">
                        </p>
                        <ul>
                            <li>Once you have gotmany offers on you request, were commend you to do a check list ofthe
                                must important things and ask basic information be fore saying yes to any Company or
                                Freelancer.</li>
                            <li>Does the company/freelancer has a verified phone/e-mail</li>
                            <li>Does the Company/Freelancer has experienced(skills-diploma) on the request you need help
                                with</li>
                            <li>Doesthe Company/Freelancer accept bank payments or offers you a recipt for it services ?
                            </li>
                            <li>Check the company last reviews</li>
                            <li>Ask how does the person coming to your house looks like, wearing so youare sure that is
                                thecorrect person.</li>
                            <li>Always ask for referances you can call.</li>
                        </ul>
                        <p>If possible, have always next to you while the Company/Freelancer are working in
                            your task.<br /> <br /> <br /> All of this tips are important while choosing the correct
                            Super Hero
                            for your task.<br /> <br /> If necessary, let us know and
                            we can help you finding the correct option.<br /><br /></p>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    </div>
                </div>

            </div>
        </div>

    </section>
    <script src="{{ asset('https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js') }}"></script>
    <script src="{{ asset('theme/app-assets/vendors/js/vendors.min.js') }}"></script>
    <script src="{{ asset('theme/app-assets/vendors/js/editors/quill/katex.min.js') }}"></script>
    <script src="{{ asset('theme/app-assets/vendors/js/editors/quill/highlight.min.js') }}"></script>
    <script src="{{ asset('theme/app-assets/vendors/js/editors/quill/quill.min.js') }}"></script>
    <script src="{{ asset('theme/app-assets/js/core/app-menu.js') }}"></script>
    <script src="{{ asset('theme/app-assets/js/core/app.js') }}"></script>
    <script src="{{ asset('theme/app-assets/js/scripts/components.js') }}"></script>
    <script src="{{ asset('theme/app-assets/js/scripts/pages/app-email.js') }}"></script>
    <script
        src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBu17qERWXajr4_OudOEpuH73yHd92KYI8&callback=initMap&libraries=places&v=weekly"
        defer></script>
    <script>
        function initMap() {
            @if (count($tasks) < 1)
                console.log('Maps initiated')
            @else
                const myLatLng = {lat: {{ $tasks->first()->latitude }}, lng: {{ $tasks->first()->longitude }} };
                const map = new google.maps.Map(document.getElementById("map"), {
                zoom: 4,
                center: myLatLng,
                });
                @foreach ($tasks as $task)
                    new google.maps.Marker({
                    position: {lat: {{ $task->latitude }}, lng: {{ $task->longitude }} },
                    map,
                    title: "{{ $task->title }}",
                    })
                @endforeach
            @endif
        }

    </script>
    @if (request()->get('done'))
        <script>
            $(document).ready(function() {
                $('#verificationModal').modal('show');
            });

        </script>
    @endif
</body>

</html>
