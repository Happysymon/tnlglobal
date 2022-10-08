
@include('inc.header')
    
    <!-- @include('inc.messages') -->
    @yield('content')
    @include('sweetalert::alert')
    
@include('inc.footer')