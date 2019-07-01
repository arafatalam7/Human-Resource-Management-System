@php
          $employee_id=Session::get('employee_id');
          $employee_info=DB::table('employee_tbl')
                      ->where('employee_id',$employee_id)
                      ->first(); 
@endphp


<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>EMPLOYEE</title>
  <!-- plugins:css -->
  <link rel="stylesheet" href="{{('/node_modules/mdi/css/materialdesignicons.min.css')}}">
  <link rel="stylesheet" href="{{('/node_modules/perfect-scrollbar/dist/css/perfect-scrollbar.min.css')}}">
  <!-- endinject -->
  <!-- plugin css for this page -->
  <link rel="stylesheet" href="{{('/node_modules/rickshaw/rickshaw.min.css')}}" />
  <link rel="stylesheet" href="{{('/bower_components/chartist/dist/chartist.min.css')}}" />
  <!-- End plugin css for this page -->
  <!-- inject:css -->
  <link rel="stylesheet" href="{{('/css/style.css')}}">
  <!-- endinject -->
  <link rel="shortcut icon" href="{{('/images/favicon.html')}}" />
</head>
<body class="sidebar-dark ">
  <!-- partial:partials/_settings-panel.html -->
  <div class="settings-panel">
    <ul class="nav nav-tabs" id="setting-panel" role="tablist">
      <li class="nav-item">
        <a class="nav-link active" id="layouts-tab" data-toggle="tab" href="#layouts-section" role="tab" aria-controls="layouts-section" aria-expanded="true"><i class="mdi mdi-settings"></i></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" id="chats-tab" data-toggle="tab" href="#chats-section" role="tab" aria-controls="chats-section"><i class="mdi mdi-account"></i></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" id="close-button" href="#"><i class="mdi mdi-window-close"></i></a>
      </li>
    </ul>
 
  </div>
  <!-- partial -->
  <div class="container-scroller">
    <!-- partial:partials/_navbar.html -->
    <nav class="navbar navbar-primary col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
      <div class="text-center navbar-brand-wrapper">
        <a class="navbar-brand brand-logo" href="{{URL::to('/employee_dashboard')}}"><span class="navbar-toggler-icon"></span>HOME</a>
      </div>
     
    </nav>
    <!-- partial -->
    <div class="container-fluid page-body-wrapper">
      <div class="row row-offcanvas row-offcanvas-right">
        <!-- partial:partials/_sidebar.html -->
        <nav class="sidebar sidebar-offcanvas" id="sidebar">
          <div class="user-info">
            <div class="profile">
              <img src="{{URL::to($employee_info->employee_image)}}" height="50" width="60" alt="NOT FOUND">
            </div>
            <div class="details">
              <p class="user-name">{{strtoupper($employee_info->employee_name)}}</p>
              
            </div>
          </div>

          <ul class="nav">
            <!--main pages start-->
            <li class="nav-item nav-category">
              <span class="nav-link">Main</span>
            </li>
            <li class="nav-item">             
              <a class="nav-link" href="{{URL::to('/employee_profile')}}">
                <i class="mdi mdi-gauge menu-icon"></i>
                <span class="menu-title">Profile</span>
              </a>

              <a class="nav-link" href="{{URL::to('/leave_apply')}}">
                <i class="mdi mdi-gauge menu-icon"></i>
                <span class="menu-title">Leave Apply</span>
              </a>

               <a class="nav-link" href="{{URL::to('/employee_setting')}}">
                <i class="mdi mdi-gauge menu-icon"></i>
                <span class="menu-title">Setting</span>

              </a>
              <a class="nav-link" href="{{URL::to('/employee_logout')}}">
                <i class="mdi mdi-gauge menu-icon"></i>
                <span class="menu-title">Logout</span>
              </a>
            </li>
           
      
           
            <!--main pages end-->
            
            <!-- ui end -->
           
            <!--forms start-->
          
            
           
          </ul>
        </nav>
        <!-- partial -->
        <div class="content-wrapper">
          <div class="row">
            @yield('content')
          </div>
        </div>
        <!-- content-wrapper ends -->
        <!-- partial:partials/_footer.html -->
        <footer class="footer">
          <div class="container-fluid clearfix">
            <span class="float-right">
                <a href="#">shahin & Arafat batch of 36th from city university  &copy;  {{date('Y')}}</a>
            </span>
          </div>
        </footer>
        <!-- partial -->
      </div>
      <!-- row-offcanvas ends -->
    </div>
    <!-- page-body-wrapper ends -->
  </div>
  <!-- container-scroller -->

  <!-- plugins:js -->
  <script src="{{asset('/node_modules/jquery/dist/jquery.min.js')}}"></script>
  <script src="{{asset('/node_modules/popper.js/dist/umd/popper.min.js')}}"></script>
  <script src="{{asset('/node_modules/bootstrap/dist/js/bootstrap.min.js')}}"></script>
  <script src="{{asset('/node_modules/perfect-scrollbar/dist/js/perfect-scrollbar.jquery.min.js')}}"></script>
  <!-- endinject -->
  <!-- Plugin js for this page-->
    <script src="{{asset('/node_modules/flot/jquery.flot.js')}}"></script>
  <script src="{{asset('/node_modules/flot/jquery.flot.resize.js')}}"></script>
  <script src="{{asset('/node_modules/flot/jquery.flot.categories.js')}}"></script>
  <script src="{{asset('/node_modules/flot/jquery.flot.pie.js')}}"></script>
  <script src="{{asset('/node_modules/rickshaw/vendor/d3.v3.js')}}"></script>
  <script src="{{asset('/node_modules/rickshaw/rickshaw.min.js')}}"></script>
  <script src="{{asset('/bower_components/chartist/dist/chartist.min.js')}}"></script>
  <script src="{{asset('/node_modules/chartist-plugin-legend/chartist-plugin-legend.js')}}"></script>
  <script src="{{asset('/node_modules/chart.js/dist/Chart.min.js')}}"></script>
  <script src="{{asset('/node_modules/jquery-sparkline/jquery.sparkline.min.js')}}"></script>
   End plugin js for this page
  <script src="{{asset('/node_modules/datatables.net/js/jquery.dataTables.js')}}"></script>
  <script src="{{asset('/node_modules/datatables.net-bs4/js/dataTables.bootstrap4.js')}}"></script> 


  <script src="{{asset('/js/data-table.js')}}"></script>


  
<!-- custom js for this page-->
  <script src="{{asset('/js/custom_js/all_form_validation.js')}}"></script>
<!-- End custom js for this page-->


  <!-- inject:js -->
  <script src="{{asset('/js/off-canvas.js')}}"></script>
  <script src="{{asset('/js/hoverable-collapse.js')}}"></script>
  <script src="{{asset('/js/misc.js')}}"></script>
  <script src="{{asset('/js/settings.js')}}"></script>
  <!-- endinject -->
  <!-- Custom js for this page-->
  <script src="{{asset('/js/dashboard_1.js')}}"></script>
  
  
</body>


</html>
