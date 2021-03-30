@include('backendpartials.header')
<div class="wrapper">

    @include('backendpartials.navbar')

    <!-- Main Sidebar Container -->
   @include('backendpartials.sidenav')

    <!-- Content Wrapper. Contains page content -->

@yield('content')

<!-- /.content-wrapper -->
@include('backendpartials.footer')
