
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Admin Dashboard</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Tempusdominus Bbootstrap 4 -->
  <link rel="stylesheet" href="plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
  <!-- iCheck -->
  <link rel="stylesheet" href="plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- JQVMap -->
  <link rel="stylesheet" href="plugins/jqvmap/jqvmap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/adminlte.min.css">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="plugins/daterangepicker/daterangepicker.css">
  <!-- summernote -->
  <link rel="stylesheet" href="plugins/summernote/summernote-bs4.css">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
</head>
<body class="hold-transition sidebar-mini layout-fixed" >
<div class="wrapper">

  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="{{url('adminPage')}}" class="nav-link">Home</a>
      </li>
      
    </ul>

    <!-- SEARCH FORM -->
    <form class="form-inline ml-3">
      <div class="input-group input-group-sm">
        <input class="form-control form-control-navbar" type="search" placeholder="Search" aria-label="Search">
        <div class="input-group-append">
          <button class="btn btn-navbar" type="submit">
            <i class="fas fa-search"></i>
          </button>
        </div>
      </div>
    </form>

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
      
      
      <li class="nav-item">
        <a class="nav-link" data-widget="control-sidebar" data-slide="true" href="#" role="button">
          <i class="fas fa-th-large"></i>
        </a>
      </li>
    </ul>
  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="{{url('homepage')}}" class="brand-link">
      <img src="images/adminlogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
           style="opacity: .8">
      <span class="brand-text font-weight-light">PFC</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        
        <div class="info">
          <a href="{{url('/adminview')}}" class="d-block">Admin Profile</a>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item has-treeview menu-open">
            <a href="#" class="nav-link active">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Services
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">

              <li class="nav-item">
                <a href="{{url('character')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Character Certificate</p>
                </a>
              </li>

              <li class="nav-item">
                <a href="{{url('birth')}}" class="nav-link ">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Birth Certificate</p>
                </a>
              </li>

              <li class="nav-item">
                <a href="{{url('death')}}" class="nav-link ">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Death Certificate</p>
                </a>
              </li>

              <li class="nav-item">
                <a href="{{url('marriage')}}" class="nav-link ">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Marriage Certificate</p>
                </a>
              </li>

              <li class="nav-item">
                <a href="{{url('divorce')}}" class="nav-link ">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Divorce Certificate</p>
                </a>
              </li>

              <li class="nav-item">
                <a href="{{url('license')}}" class="nav-link ">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Driving Licence</p>
                </a>
              </li>

              <li class="nav-item">
                <a href="{{url('vehicle')}}" class="nav-link ">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Vehicle Verification</p>
                </a>
              </li>

              <li class="nav-item">
                <a href="{{url('loss')}}" class="nav-link ">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Loss Report</p>
                </a>
              </li>

              <li class="nav-item">
                <a href="{{url('crime')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Crime Report</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{url('affidavit')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Affidavit</p>
                </a>
              </li>
            </ul>
          </li>

          
          
          
          <li class="nav-item">
            <a href="{{url('documents')}}" class="nav-link">
              <i class="nav-icon fas fa-file"></i>
              <p>
                Verify Documents
              </p>
            </a>
          </li>


          <li class="nav-item">
            <a href="{{url('clientdata')}}" class="nav-link">
              <i class="nav-icon fas fa-file"></i>
              <p>
                Client Data
              </p>
            </a>
          </li>


          <li class="nav-item">
            <a href="{{url('lawyerdata')}}" class="nav-link">
              <i class="nav-icon fas fa-file"></i>
              <p>
                Lawyer Data
              </p>
            </a>
          </li>


          <li class="nav-item">
            <a href="{{url('stamponline')}}" class="nav-link">
              <i class="nav-icon fas fa-book"></i>
              <p>
                Stamp Data Online
              </p>
            </a>
          </li>


          <li class="nav-item">
            <a href="{{url('stamppaperdata/create')}}" class="nav-link">
              <i class="nav-icon fas fa-book"></i>
              <p>
                Stamp Data Offline
              </p>
            </a>
          </li>


          <li class="nav-item">
            <a href="{{url('feedback')}}" class="nav-link">
              <i class="nav-icon far fa-image"></i>
              <p>
                Feed Back
              </p>
            </a>
          </li>

          

          
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Dashboard</h1>
          </div><!-- /.col -->


          
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
       <button class="btn btn-danger">      <li class="breadcrumb-item"><a href="{{url('adminlogin')}}"><b>Logout</b></a></li></button> 
              
            </ol>
          </div><!-- /.col -->
        



          @yield('number1')
          @yield('number2')
          @yield('number3')
          @yield('number4')
          @yield('number5')
          @yield('number6')
          @yield('number7')
          @yield('number8')
          @yield('number9')
          @yield('number10')
           @yield('number12')
          @yield('number13')
          @yield('adminprofile')
          @yield('lawyerclient')
          @yield('lawyerdata')
          @yield('stamponline')










         
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

   
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </section>
          <!-- right col -->
        </div>
        
        <!-- /.row (main row) -->
      </div><!-- /.container-fluid -->
      
    </section>
    <!-- /.content -->
    
  </div>
  <!-- /.content-wrapper -->


  





  <footer class="main-footer">
    <strong>Copyright &copy; 2020 <a href="{{url('homepage')}}">PFC</a>.</strong>
    All rights reserved.
    
  </footer>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="plugins/jquery/jquery.min.js"></script>
<!-- jQuery UI 1.11.4 -->
<script src="plugins/jquery-ui/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button)
</script>
<!-- Bootstrap 4 -->
<script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- ChartJS -->
<script src="plugins/chart.js/Chart.min.js"></script>
<!-- Sparkline -->
<script src="plugins/sparklines/sparkline.js"></script>
<!-- JQVMap -->
<script src="plugins/jqvmap/jquery.vmap.min.js"></script>
<script src="plugins/jqvmap/maps/jquery.vmap.usa.js"></script>
<!-- jQuery Knob Chart -->
<script src="plugins/jquery-knob/jquery.knob.min.js"></script>
<!-- daterangepicker -->
<script src="plugins/moment/moment.min.js"></script>
<script src="plugins/daterangepicker/daterangepicker.js"></script>
<!-- Tempusdominus Bootstrap 4 -->
<script src="plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
<!-- Summernote -->
<script src="plugins/summernote/summernote-bs4.min.js"></script>
<!-- overlayScrollbars -->
<script src="plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/adminlte.js"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="dist/js/pages/dashboard.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="dist/js/demo.js"></script>
</body>
</html>
