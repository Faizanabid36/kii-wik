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
                            <h2 class="content-header-title float-left mb-0">Reported {{$header}} List</h2>
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
                               
                                <th>Type</th>
                                <th>Type Detail</th>
                                <th>Description</th>
                                <th>Is Resolved</th>
                                <th>Action</th>
                            </tr>
                            </thead>
                            <tbody>
                                @foreach($reports as $report)
                                <tr style="background-color:white;">
                                    
                                    <td class="product-name">{{$report->type}}</td>
                                    @if($header==="Comments")
                                    <td class="product-category">{{$report->comment->comment_body}}</td>
                                    @elseif($header==="Users")
                                    <td class="product-category">{{$report->user->name}}</td>
                                    @else
                                    <td class="product-category">{{$report->task->title}}</td>
                                    @endif
                                    <td class="product-name">{{$report->description}}</td>
                                    <td class="product-category">
                                    @if($report->is_resolved)
                                    <div id="areport-{{$report->id}}">
                                    <div  data-id="{{$report->id}}"  class="chip chip-success resolve">
                                        <div class="chip-body">
                                            <div class="chip-text">Resolved</div>
                                        </div>
                                    </div>
                                    </div>
                                    @else
                                    <div id="areport-{{$report->id}}">
                                    <div   data-id="{{$report->id}}" class="chip chip-danger resolve">

                                        <div class="chip-body">
                                            <div  class="chip-text">Unresolved</div>
                                        </div>

                                    </div>
                                    </div>
                                    @endif</td>
                                    <td>
                                    <a href="{{$report->url}}"> <span id="view-item-" class="action-delete delete-toast btn btn-primary mr-1 mb-1"><i
                                                    class="feather icon-eye"></i></span></a>
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

    $(document).on('click','.resolve',function(e)
    {
        
        var id=$(this).attr('data-id');
        $.ajax({
                type: 'POST',
                url: '{{route('admin.report_resolve')}}',
                data:{id: id,"_token": "{{ csrf_token() }}"},
                success:function(data){
                   
                    $('#areport-'+id).html("");
                    $('#areport-'+id).html(data);
                },
                error: function (data) {
                    
                }
            });

    });
    
   })
    </script>
@endsection
