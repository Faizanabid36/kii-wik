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
                            <h2 class="content-header-title float-left mb-0">Verification List</h2>
                            <div class="breadcrumb-wrapper col-12">

                            </div>
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
                                    <a class="dropdown-item bulk-delete" href="#"><i
                                            class="feather icon-trash"></i>Delete</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- dataTable starts -->
                    <div class="table-responsive">
                        <table class="table data-thumb-view ">
                            <thead>
                                <tr>
                                    <!-- <th></th> -->
                                    <th>NAME</th>
                                    <th>Email</th>
                                    <th>Registration</th>
                                    <th>STATUS</th>
                                    <th>ACTION</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($users as $user)
                                    <tr id="{{ $user->id }}" style="background-color:white;">

                                        <!-- <td class="product-img"><img width="100" src="{{ $user->avatar }}" alt=""></td> -->
                                        <td class="product-name">{{ $user->name }}</td>
                                        <td class="product-name">{{ $user->email }}</td>
                                        <td class="product-category">{{ $user->registration_no }}</td>
                                        <td class="product-category">
                                            @if ($user->status)
                                                <div id="aUser-{{ $user->id }}">
                                                    <div data-id="{{ $user->id }}"
                                                        class="chip chip-success approve_user">
                                                        <div class="chip-body">
                                                            <div class="chip-text">Approved</div>
                                                        </div>
                                                    </div>
                                                </div>
                                            @else
                                                <div id="aUser-{{ $user->id }}">
                                                    <div data-id="{{ $user->id }}"
                                                        class="chip chip-danger approve_user">
                                                        <div class="chip-body">
                                                            <div class="chip-text">Disapproved</div>
                                                        </div>
                                                    </div>
                                                </div>
                                            @endif
                                        </td>
                                        <td class="product-action">
                                            <!-- <a href="{{ route('admin.profile.view', $user->id) }}"> <span onclick="" id="view-item-" class="action-delete delete-toast btn btn-primary mr-1 mb-1"></span></a> -->
                                            <button type="button" class="btn btn-primary"
                                                onclick="view_profile({{ $user->id }});"><i
                                                    class="feather icon-eye"></i></button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td colspan=7>
                                            <hr>
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
    <!-- Button trigger modal -->


    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document" style="margin-top:7%; max-width: 800px;">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body" id="body_modal">
                </div>
            </div>
        </div>
    </div>
    <div class="sidenav-overlay"></div>
    <div class="drag-target"></div>
@endsection
@section('footer_scripts')
    <script>
        function view_profile(user_id) {
            $.ajax({
                type: 'POST',
                url: '{{ route('admin.get_user_detial') }}',
                data: {
                    user_id: user_id,
                    "_token": "{{ csrf_token() }}"
                },
                success: function(data) {
                    // console.log(data);
                    $('#body_modal').html(data);
                    $("#exampleModal").modal('show');
                }
            });
        }
        $(document).ready(function() {
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });
            $(document).on('click', '.approve_user', function(e) {
                var id = this.getAttribute('data-id');
                $.ajax({
                    type: 'POST',
                    url: '{{ route('admin.approve_user') }}',
                    data: {
                        id: id,
                        "_token": "{{ csrf_token() }}"
                    },
                    success: function(data) {
                        $('#aUser-' + id).html(data);

                    },
                    error: function(data) {
                        toastr.error(data.responseJSON.message, 'Some Error Occured!', {
                            "timeOut": 5000
                        });
                    }
                });
            });
        })

    </script>
@endsection
