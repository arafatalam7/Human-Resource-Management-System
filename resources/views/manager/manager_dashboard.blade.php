
 @php
          $manager_id=Session::get('manager_id');
          $manager_info=DB::table('manager_tbl')
                      ->where('manager_id',$manager_id)
                      ->first(); 
@endphp 



<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>HRM</title>
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
<body class="sidebar-dark">
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
        <a class="navbar-brand brand-logo" href="{{URL::to('manager_dashboard')}}">HRM</a>


      </div>
        <!-- togglefor minimize -->
      <div class="navbar-menu-wrapper d-flex align-items-center">
        <button class="navbar-toggler navbar-toggler align-self-center mr-2" type="button" data-toggle="minimize">
          <span class="navbar-toggler-icon"></span>
        </button>


         <div class="details">
              <p class="user-name"  style="color:blue;">   WELCOME MANAGER</p>
              
            </div>
       
      
        <ul class="navbar-nav ml-lg-auto">
          <li class="nav-item dropdown">
            <a class="nav-link count-indicator" id="MailDropdown" href="#" data-toggle="dropdown">
              <!-- <i class="mdi mdi-message-outline"></i> -->
               <p class="">Action</p>
              <!-- <span class="count bg-danger">4</span> -->
            </a>
            <div class="dropdown-menu navbar-dropdown mail-notification" aria-labelledby="MailDropdown">
              <a class="dropdown-item" href="{{URL::to('/viewprofile')}}">
                <div class="sender-img">
                  <img src="http://via.placeholder.com/47x47" alt="">                
                </div>
                <div class="sender">
                  <p class="Sende-name">View Profile</p>
                </div>
              </a>
              <a class="dropdown-item" href="{{URL::to('/setting')}}">
                <div class="sender-img">
                  <img src="http://via.placeholder.com/47x47" alt="">
                
                </div>
                <div class="sender">
                  <p class="Sende-name">Setting</p>
                </div>
              </a>
              <a class="dropdown-item" href="{{URL::to('/manager_logout')}}">
                <div class="sender-img">
                  <img src="http://via.placeholder.com/47x47" alt="">               
                </div>
                <div class="sender">
                  <p class="Sende-name">Logout</p>
                </div>
              </a>
             
            
            </div>
          </li>
        </ul>
        <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-toggle="offcanvas">
          <span class="navbar-toggler-icon"></span>
        </button>
      </div>
    </nav>
    <!-- partial -->
    <div class="container-fluid page-body-wrapper">
      <div class="row row-offcanvas row-offcanvas-right">
        <!-- partial:partials/_sidebar.html -->
        <nav class="sidebar sidebar-offcanvas" id="sidebar">
          <div class="user-info">
            <div class="profile">
              <img src="{{URL::to('/image/admin.png')}}" alt="">
            </div>
            <div class="details">
              <p class="user-name"></p>
              <p class="id"></p>
            </div>
          </div>

          <ul class="nav">
            <!--main pages start-->
            <li class="nav-item nav-category">
            	  <p class="nav-link">{{strtoupper($manager_info->manager_name)}}</p>
              <span class="nav-link">Main</span>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{URL::to('/take_attendance')}}">
                <i class="mdi mdi-gauge menu-icon"></i>
                <span class="menu-title">Take Attendance</span>
              </a>
         

<li class="nav-item">
              <a class="nav-link" data-toggle="collapse" href="#layoutsSubmenu" aria-expanded="false" aria-controls="layoutsSubmenu">
                <i class="mdi mdi-arrow-expand-all menu-icon"></i>
                <span class="menu-title">View Attendance</span>
                <i class="mdi mdi-chevron-down menu-arrow"></i>
              </a>
              <div class="collapse" id="layoutsSubmenu">

                <ul class="nav flex-column sub-menu">
                     <li class="nav-item">
              <a class="nav-link" href="{{URL::to('/all_attendance')}}">
                <i class="mdi mdi-puzzle menu-icon"></i>
                <span class="menu-title">Daily Attendance</span>
              
              </a>
            </li>
                  <li class="nav-item">
                    <a class="nav-link" href= "{{URL::to('/individualAttendance')}}"><i class="mdi mdi-puzzle menu-icon"></i>ID Wise</a>
                  </li>
                </ul>
              </div>
            </li>



 <li class="nav-item">
              <a class="nav-link" data-toggle="collapse" href="#advancedSubmenu" aria-expanded="false" aria-controls="advancedSubmenu">
                <i class="mdi mdi-repeat menu-icon"></i>
                <span class="menu-title">Salary</span>
                <i class="mdi mdi-chevron-down menu-arrow"></i>
              </a>
              <div class="collapse" id="advancedSubmenu">
                <ul class="nav flex-column sub-menu">
                  <li class="nav-item">
                    <a class="nav-link" href="{{URL::to('/manage_salary')}}">create salary sheet<span class="badge badge-danger badge-pill ml-auto">New</span></a>
                    <a class="nav-link" href="{{URL::to('/month_wise_salary')}}">View salary</a>
                  </li>
                 
                </ul>
              </div>
            </li>






           



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
  <!-- End plugin js for this page-->
  <script src="{{asset('/node_modules/datatables.net/js/jquery.dataTables.js')}}"></script>
  <script src="{{asset('/node_modules/datatables.net-bs4/js/dataTables.bootstrap4.js')}}"></script>
  <script src="{{asset('/js/data-table.js')}}"></script>
  <script src="{{asset('js/form-valid.js')}}"></script>
  <!-- inject:js -->
  <script src="{{asset('/js/off-canvas.js')}}"></script>
  <script src="{{asset('/js/hoverable-collapse.js')}}"></script>
  <script src="{{asset('/js/misc.js')}}"></script>
  <script src="{{asset('/js/settings.js')}}"></script>
  <!-- endinject -->
  <!-- Custom js for this page-->
  <script src="{{asset('/js/dashboard_1.js')}}"></script>
  <script type="text/javascript" src="{{asset('https://cdnjs.cloudflare.com/ajax/libs/bootbox.js/4.4.0/bootbox.min.js')}}"></script>
  <!-- End custom js for this page-->
  <script src="{{asset('/js/custom_js/all_form_validation.js')}}"></script>
  
</body>


</html>
