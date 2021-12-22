@if(auth()->user()->role=='admin')
    @include('layouts.admin.header')
    @include('layouts.admin.admin_sidebar')
    @yield('content')
    @include('layouts.admin.footer')
@else
    @include('layouts.header')
    @include('layouts.navbar')
    @yield('content')
    @include('layouts.footer')
@endif

