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
                                <th>NAME</th>
                                <th>EMAIL</th>
                                <th>TAGLINE</th>
                                <th>PHONE NUMBER</th>

                                <th>SKILLS</th>
                                <th>ACTION</th>
                            </tr>
                            </thead>
                            <tbody>
                                @foreach($users as $user)
                                <tr id="{{$user->id}}">
                                    <td></td>
                                    <td class="product-img"><img width="100" src="{{$user->avatar}}" alt=""></td>
                                    <td class="product-name">{{$user->email}}</td>
                                    <td class="product-category">{{$user->tag}}</td>
                                    <td class="product-category">{{$user->phone}}</td>

                                    <td class="product-category">
                                    @if($user->is_approved)
                                    <div id="aUser-{{$user->id}}">
                                    <div  data-id="{{$user->id}}"  class="chip chip-success approve_user">
                                        <div class="chip-body">
                                            <div class="chip-text">Approved</div>
                                        </div>
                                    </div>
                                    </div>
                                    @else
                                    <div id="aUser-{{$user->id}}">
                                    <div   data-id="{{$user->id}}" class="chip chip-danger approve_user">

                                        <div class="chip-body">
                                            <div  class="chip-text">Disapproved</div>
                                        </div>

                                    </div>
                                    </div>
                                    @endif</td>
                                    <td class="product-action">
                                        <span id="{{$user->id}}"  class="action-delete delete-toast btn btn-danger mr-1 mb-1 delete_user"><i
                                                class="feather icon-trash"></i></span>
                                       <a href="{{route('admin.profile.view',$user->id)}}"> <span onclick="" id="view-item-" class="action-delete delete-toast btn btn-primary mr-1 mb-1"><i
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
@section('footer_scripts')
    <script>
    $(document).ready(function(){

        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });

    $(document).on('click','.delete_user',function(e)
    {
        var id=this.id;
        toastr.success("<br /><br /><button type='button' id='confirmationRevertYes' class='btn clear text-white'>Yes</button>",'delete item?',
         {
      closeButton: false,
      allowHtml: true,
      onShown: function (toast) {
          $("#confirmationRevertYes").click(function(){
            $.ajax({
                type: 'POST',
                url: '{{route('admin.delete_user')}}',
                data:{id: id,"_token": "{{ csrf_token() }}"},
                success:function(data){

                    $('#'+id).slideUp();
                        toastr.success('User Deleted Successfully', 'Success', {
                            "showMethod": "fadeIn",
                            "hideMethod": "fadeOut",
                            timeOut: 2000
                        });


                },
                error: function (data) {
                    toastr.error(data.responseJSON.message, 'Some Error Occured!', { "timeOut": 5000 });
                }
            });
          });
      }
         });

    });
        $(document).on('click', '.approve_user', function (e) {
            var id = this.getAttribute('data-id');
            toastr.success("<br /><br /><button class='text-white' type='button' id='confirmationRevertYes' class='btn clear'>Yes</button>", 'Approve?',
                {
                    closeButton: false,
                    allowHtml: true,
                    onShown: function (toast) {
                        $("#confirmationRevertYes").click(function () {
                            $.ajax({
                                type: 'POST',
                                url: '{{route('admin.approve_user')}}',
                data:{id:id,"_token": "{{ csrf_token() }}"},
                success:function(data){

                        toastr.success('User approved Successfully', 'Success', {
                            "showMethod": "fadeIn",
                            "hideMethod": "fadeOut",
                            timeOut: 2000
                        });

                      $('#aUser-'+id).html(data);

                },
                error: function (data) {
                    toastr.error(data.responseJSON.message, 'Some Error Occured!', { "timeOut": 5000 });
                }
            });
          });
        }
  });

    });})
    </script>
@endsection
