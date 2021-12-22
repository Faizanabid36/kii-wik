<div class="sidebar-menu-list">
    <div class="list-group list-group-messages font-medium-1">
        @if(Session::has('fromAction'))
            <a href="{{ Session::get('fromAction')=='earn'?route('company.earn.index'):route('user.task.my_task')}}"
               class="list-group-item list-group-item-action border-0 pt-0 active">
                <i class="font-medium-5 feather icon-mail mr-50"></i> {{ Session::get('fromAction')=='earn'?"All Tasks":"My Tasks"}}
            </a>
    @endif
    <!-- <a href="#" class="list-group-item list-group-item-action border-0"><i class="font-medium-5 fa fa-paper-plane-o mr-50"></i> Posted Tasks<span class="badge badge-warning badge-pill float-right">4</span></a>
                                    <a href="#" class="list-group-item list-group-item-action border-0"><i class="font-medium-5 feather icon-edit-2 mr-50"></i> Draft Tasks <span class="badge badge-warning badge-pill float-right">4</span> </a> -->
        <a href="#" class="list-group-item list-group-item-action border-0"><i
                class="font-medium-5 feather icon-star mr-50"></i>
            Assinged Tasks <span class="badge badge-warning badge-pill float-right">4</span></a>
        <a href="#" class="list-group-item list-group-item-action border-0"><i
                class="font-medium-5 feather icon-info mr-50"></i>
            Offers Pending<span class="badge badge-danger badge-pill float-right">3</span> </a>
        <a href="#" class="list-group-item list-group-item-action border-0"><i
                class="font-medium-5 feather icon-trash mr-50"></i>
            Task Completed <span class="badge badge-warning badge-pill float-right">4</span></a>
    </div>
    <hr>

</div>
