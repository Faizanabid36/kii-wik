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
    <script
        src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBu17qERWXajr4_OudOEpuH73yHd92KYI8&callback=initMap&libraries=places&v=weekly"
        defer></script>
</head>
<body
    class="vertical-layout vertical-menu-modern semi-dark-layout content-left-sidebar email-application navbar-floating footer-static  "
    data-open="click" data-menu="vertical-menu-modern" data-col="content-left-sidebar" data-layout="semi-dark-layout">
    @include('layouts.navbar')
    <section id="bg-variants">
        <div class="col-12 " style="visibility: hidden">
            <h4 class="text-uppercase">Background variants</h4>
        </div>
        <div class="row">
            <div class="ml-2 col-lg-3 col-md-4 col-sm-4 profile-card-1">
                <div style="overflow-y: scroll; height:730px">
                    @if ($tasks)
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
                                                    <i class="feather icon-eye"></i> {{ __('View') }}
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    @endif
                </div>
            </div>
            <div class="col-lg-8 col-md-7 col-sm-7">
                <form action="">
                    <div class="row">
                        <div class="col-md-12">
                            <fieldset class="form-group position-relative input-divider-right">
                                <input name="q" type="text" class="form-control" id="iconLeft4"
                                    placeholder="Search with title">
                                <div class="form-control-position">
                                    <i class="feather icon-search"></i>
                                </div>
                            </fieldset>
                        </div>
                        <div class="col-md-3">
                            <fieldset class="form-group position-relative input-divider-right">
                                <select name="type" class="form-control">
                                    <option value="" disabled selected>{{ __('Select Type') }}</option>
                                    <option value="physical">{{ __('Physical') }}</option>
                                    <option value="online">{{ __('Online') }}</option>
                                </select>
                                <div class="form-control-position">
                                    <i class="feather icon-arrow-down"></i>
                                </div>
                            </fieldset>
                        </div>
                        <div class="col-md-4">
                            <fieldset class="form-group position-relative input-divider-right">
                                <input id="address" name="location" type="text" class="form-control" id="iconLeft4"
                                    placeholder="Location">
                                <div class="form-control-position">
                                    <i class="feather icon-map-pin"></i>
                                </div>
                            </fieldset>
                        </div>
                        <div class="col-md-4">
                            <fieldset class="form-group position-relative input-divider-right">
                                <input id="radius" name="radius" type="number" min="0" class="form-control"
                                    id="iconLeft4" placeholder="Area in KM">
                                <div class="form-control-position">
                                    <i class="feather icon-minus-square"></i>
                                </div>
                            </fieldset>
                        </div>
                        <div class="col-md-1">
                            <button type="submit" class="btn btn-danger"><i class="feather icon-search"></i></button>
                        </div>
                    </div>
                </form>
                <div class="card text-white ">
                    <div class="card-content d-flex">
                        <div class="card-body" id="map" style="height: 80vh!important;">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Background variants section end -->


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
    <!-- END: Page JS-->
    <script>
        function initMap() {
            @if (count($tasks) < 1)
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
            const input = document.getElementById("address");
            const autocomplete = new google.maps.places.Autocomplete(input);
            autocomplete.setFields(["address_components", "geometry", "icon", "name"]);
            autocomplete.addListener("place_changed", () => {
                console.log('clicked')
                const place = autocomplete.getPlace();
                if (!place.geometry) {
                    window.alert("No details available for input: '" + place.name + "'");
                    return;
                }
            });
        }

    </script>

</body>

</html>
