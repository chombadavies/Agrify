<!DOCTYPE html>
<html lang="en">
@include('layouts.admin.head_scripts')
<body class="hold-transition sidebar-mini layout-fixed layout-navbar-fixed layout-footer-fixed">
<div class="wrapper">
  <!-- Navbar -->
@include('layouts.admin.header')
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  @include('layouts.admin.sidebar')

  <!-- Content Wrapper. Contains page content -->
 @yield('content')
  <!-- /.content-wrapper -->

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>

  @include('layouts.admin.rejectmodal')
  <!-- /.control-sidebar -->

  <!-- Main Footer -->
 @include('layouts.admin.footer')
</div>
<!-- ./wrapper -->

@include('layouts.admin.foot_scripts')
@stack('scripts')
</body>
</html>
