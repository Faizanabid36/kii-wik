@extends('layouts.main')
@section('title','View Categories')
@section('content')
    <div class="app-content content">
        <div class="content-overlay"></div>
        <div class="header-navbar-shadow"></div>
        <div class="content-wrapper">
            <div class="content-header row">
                <div class="content-header-left col-md-9 col-12 mb-2">
                    <div class="row breadcrumbs-top">
                        <div class="col-12">
                            <h2 class="content-header-title float-left mb-0">Skills</h2>
                        </div>
                    </div>
                </div>
            </div>
            <div class="content-body">
                <!-- Data list view starts -->
                <section id="data-thumb-view" class="data-thumb-view-header">
                    <!-- add new sidebar starts -->
                    <div class="add-new-data-sidebar">
                        <div class="overlay-bg"></div>
                        <div class="card-body">
                            @if(Session::has('deleted'))
                                <div class="alert alert-primary mb-2" role="alert">
                                    <strong>Success</strong> Skill Deleted Successfully
                                </div>
                            @endif

                            @if(Session::has('updated'))
                                <div class="alert alert-primary mb-2" role="alert">
                                    <strong>Success</strong> Skill Updated Successfully
                                </div>
                        @endif
                        <!-- Table with outer spacing -->
                            <div class="table-responsive">
                                <table class="table">
                                    <thead>
                                    <tr>
                                        <th>Logo</th>
                                        <th>Name</th>
                                        <th>Action</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach ($categories as $num)
                                        <tr>
                                            <td>
{{--                                                {{dd($num)}}--}}
                                                <img width="50" src="{{$num->attachment_path}}" alt="">
                                            </td>
                                            <td id="category-{{$num->id}}">{{$num->name}}</td>
                                            <td>
                                                <form action="{{route('deleteskill',$num->id)}}"
                                                      method="POST">
                                                    @csrf
{{--                                                    <span class="" onclick="openEdit({{$num}})">--}}
{{--                                                        <i class="feather icon-edit"></i>--}}
{{--                                                    </span>--}}
                                                    <input type="hidden" name="_method" value="DELETE">
                                                    <input type="submit" value="Delete" class="btn btn-danger"/>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    <!-- add new sidebar ends -->
                </section>
                <!-- Data list view end -->
            </div>
        </div>
    </div>
    <!-- END: Content-->



@endsection
@section('footer_scripts')
    <script>
        function openEdit(category) {
            $(".add-new-data").addClass("show");
            $(".overlay-bg").addClass("show");
            $('#category-column').val(category.name);
            $('#category-column-id').val(category.id)
        }
    </script>
@endsection
