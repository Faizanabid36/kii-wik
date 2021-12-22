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
                            <h2 class="content-header-title float-left mb-0">Consultancy Requests</h2>
                            <div class="breadcrumb-wrapper col-12">

                            </div>
                        </div>
                    </div>
                </div>

            </div>
            <div class="content-body">

                    <!-- dataTable starts -->
                    <div class="table-responsive table-striped">
                        <table class="table data-thumb-view ">
                            <thead>
                            <tr>
                                <!-- <th></th> -->
                                <th>NAME</th>
                                <th>EMAIL</th>
                                <th>PHONE</th>
                                <th>JOB DESCRIPTION</th>
                                <th>MESSAGE</th>
{{--                                <th>Action</th>--}}
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($data as $row)
                                <tr>
                                    <td>{{$row['name']}}</td>
                                    <td>{{$row['email']}}</td>
                                    <td>{{$row['phone']}}</td>
                                    <td>{{$row['job_position']}}</td>
                                    <td>{{$row['message']}}</td>
{{--                                    <td><a class="btn btn-primary waves-effect waves-light"><i class="feather icon-eye"></i></a></td>--}}
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
    <!-- Button trigger modal -->


@endsection
