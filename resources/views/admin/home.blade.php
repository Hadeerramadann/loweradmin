<!DOCTYPE html>
{{-- <html lang="ar" dir="rtl"> --}}
  <html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Admain double system</title>
  <!-- plugins:css -->
  <link rel="stylesheet" href="{{URL::to('/')}}/vendors/feather/feather.css">
  <link rel="stylesheet" href="{{ URL::to('/') }}/vendors/ti-icons/css/themify-icons.css">
  <link rel="stylesheet" href="{{ URL::to('/') }}/vendors/css/vendor.bundle.base.css">
  <!-- endinject -->
  <!-- Plugin css for this page -->
  <link rel="stylesheet" href="{{ URL::to('/') }}/vendors/datatables.net-bs4/dataTables.bootstrap4.css">
  <link rel="stylesheet" href="{{ URL::to('/') }}/vendors/ti-icons/css/themify-icons.css">
  <link rel="stylesheet" type="text/css" href="{{ URL::to('/') }}/js/select.dataTables.min.css">
  <!-- End plugin css for this page -->
  <!-- inject:css -->
  <link rel="stylesheet" href="{{ URL::to('/') }}/css/vertical-layout-light/style.css">
  <!-- endinject -->
  <link rel="shortcut icon" href="{{ URL::to('/') }}/images/favicon.png" />
</head>
<body>
  <div class="container-scroller" >
    <!-- partial:partials/_navbar.html -->
            <!-- Nav Bar Start -->
            @include('admin.include.nav')
            <!-- Nav Bar End -->
    <!-- partial -->
    <div class="container-fluid page-body-wrapper">
      <!-- partial:partials/_settings-panel.html -->
      <div class="theme-setting-wrapper">
        <div id="settings-trigger"><i class="ti-settings"></i></div>
        <div id="theme-settings" class="settings-panel">
          <i class="settings-close ti-close"></i>
          <p class="settings-heading">SIDEBAR SKINS</p>
          <div class="sidebar-bg-options selected" id="sidebar-light-theme"><div class="img-ss rounded-circle bg-light border mr-3"></div>Light</div>
          <div class="sidebar-bg-options" id="sidebar-dark-theme"><div class="img-ss rounded-circle bg-dark border mr-3"></div>Dark</div>
          <p class="settings-heading mt-2">HEADER SKINS</p>
          <div class="color-tiles mx-0 px-4">
            <div class="tiles success"></div>
            <div class="tiles warning"></div>
            <div class="tiles danger"></div>
            <div class="tiles info"></div>
            <div class="tiles dark"></div>
            <div class="tiles default"></div>
          </div>
        </div>
      </div>
    <!-- ********* -->
    @include('admin.include.rightsidbar')
    <!-- ********* -->
      <!-- partial -->
      <!-- partial:partials/_sidebar.html -->
      @include('admin.include.sidbar')
      <!-- partial -->
      <div class="main-panel">
        <div class="content-wrapper">
            @yield('content')
         
         
          
          {{--  --}}
         
          
        </div>
        <!-- content-wrapper ends -->
        <!-- partial:partials/_footer.html -->
        <footer class="footer">
          <div class="d-sm-flex justify-content-center justify-content-sm-between">
            <span class="text-muted text-center text-sm-left d-block d-sm-inline-block">Copyright © 2022.  Double systems . All rights reserved.</span>
            <span class="float-none float-sm-right d-block mt-1 mt-sm-0 text-center">Hand-crafted & made with <i class="ti-heart text-danger ml-1"></i></span>
          </div>
        </footer>
        <!-- partial -->
      </div>
      <!-- main-panel ends -->
    </div>
    <!-- page-body-wrapper ends -->
  </div>
  <!-- container-scroller -->

  <!-- plugins:js -->
  <script src="{{ URL::to('/') }}/vendors/js/vendor.bundle.base.js"></script>
  <!-- endinject -->
  <!-- Plugin js for this page -->
  <script src="{{ URL::to('/') }}/vendors/chart.js/Chart.min.js"></script>
  <script src="{{ URL::to('/') }}/vendors/datatables.net/jquery.dataTables.js"></script>
  <script src="{{ URL::to('/') }}/vendors/datatables.net-bs4/dataTables.bootstrap4.js"></script>
  <script src="{{ URL::to('/') }}/js/dataTables.select.min.js"></script>

  <!-- End plugin js for this page -->
  <!-- inject:js -->
  <script src="{{ URL::to('/') }}/js/off-canvas.js"></script>
  <script src="{{ URL::to('/') }}/js/hoverable-collapse.js"></script>
  <script src="{{ URL::to('/') }}/js/template.js"></script>
  <script src="{{ URL::to('/') }}/js/settings.js"></script>
  <script src="{{ URL::to('/') }}/js/todolist.js"></script>
  <!-- endinject -->
  <!-- Custom js for this page-->
  <script src="{{ URL::to('/') }}/js/dashboard.js"></script>
  <script src="{{ URL::to('/') }}/js/Chart.roundedBarCharts.js"></script>
  <!-- End custom js for this page-->
</body>

</html>

