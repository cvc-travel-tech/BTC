@include('Frontend.head')
  <!-- Navbar -->
@include('Frontend.nav')
  
  <!-- /.navbar -->


  <!-- Content Wrapper. Contains page content -->
    <!-- Content Header (Page header) -->
       @yield('content')
    <!-- /.content -->
  <!-- /.content-wrapper -->

@include('Frontend.footer')
