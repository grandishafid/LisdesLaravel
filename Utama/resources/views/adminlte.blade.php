<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>DLPD</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="./././assets/plugins/font-awesome/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="./././assets/dist/css/adminlte.min.css">
  <!-- iCheck -->
  <link rel="stylesheet" href="./././assets/plugins/iCheck/flat/blue.css">
  <!-- Morris chart -->
  <link rel="stylesheet" href="./././assets/plugins/morris/morris.css">
  <!-- jvectormap -->
  <link rel="stylesheet" href="./././assets/plugins/jvectormap/jquery-jvectormap-1.2.2.css">
  <!-- Date Picker -->
  <link rel="stylesheet" href="./././assets/plugins/datepicker/datepicker3.css">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="./././assets/plugins/daterangepicker/daterangepicker-bs3.css">
  <!-- bootstrap wysihtml5 - text editor -->
  <link rel="stylesheet" href="./././assets/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
		<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
 

<script src="https://canvasjs.com/assets/script/canvasjs.min.js"></script>




</head>
<body class="hold-transition sidebar-mini">
<div class="wrapper">

  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand bg-white navbar-light border-bottom">
              <div class="dropdown-divider"></div>
          <div class="dropdown-divider"></div>
    </ul>
  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
   <a href="#" class="brand-link">
      <img src="./././foto/logo.jpg" alt="AdminLTE Logo" "
           style="opacity: .8;width: 50px;">
      <span class="brand-text font-weight-light">PLN Kantor Pusat</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="./././foto/<?php echo Auth::user()->foto; ?>" class="img-circle elevation-2" alt="User Image" style="width: 50px;">
        </div>
        <div class="info" style="padding-top: 10%;">
          <a href="./././assets/./index.html" class="d-block"><?php echo Auth::user()->name; ?></a>
        </div>
      </div>


      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
               
          <li class="nav-item has-treeview menu-open"> <!-- untuk buka tutup menu-->
            <a href="{{ url('/home') }}" class="nav-link active"><!-- untuk warn aktif-->
              <i class="nav-icon fa fa-dashboard"></i><!-- icon-->
              <p>
                Dashboard
                <!-- <i class="right fa fa-angle-left"></i>  --> 
              </p>
            </a>
          </li>
               
               
               
          <li class="nav-item has-treeview menu-close"> 
            <a href="#" class="nav-link">
              <i class="nav-icon fa fa-book"></i><!-- icon-->
              <p>
                Data Pengujian
                <i class="right fa fa-angle-left"></i>  <!--Panah ke bawah -->
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{ url('/input_pengujian') }}" class="nav-link">
                  <i class="fa fa-circle-o nav-icon"></i>
                  <p>Input Pengujian</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ url('/output_pengujian') }}" class="nav-link">
                  <i class="fa fa-circle-o nav-icon"></i>
                  <p>Data Pengujian</p>
                </a>
              </li>
            </ul> 
          </li>
          
        
          <li class="nav-item has-treeview menu-close"> 
            <a href="#" class="nav-link">
              <i class="nav-icon fa fa-bar-chart"></i><!-- icon-->
              <p>
                Data Proyek
                <i class="right fa fa-angle-left"></i>  
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{ url('/input_proyek') }}" class="nav-link">
                  <i class="fa fa-circle-o nav-icon"></i>
                  <p>Input Proyek</p>
                </a>
              </li>
              
              <li class="nav-item">
                <a href="{{ url('/output_proyek') }}" class="nav-link">
                  <i class="fa fa-circle-o nav-icon"></i>
                  <p>Data Proyek</p>
                </a>
              </li>
              </ul>
            </li>
            
             <li class="nav-item has-treeview menu-close"> 
            <a href="#" class="nav-link">
              <i class="nav-icon fa fa-group"></i><!-- icon-->
              <p>
                Data Pengguna 
                <i class="right fa fa-angle-left"></i>  
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{ url('/input_pengguna') }}" class="nav-link">
                  <i class="fa fa-circle-o nav-icon"></i>
                  <p>Input Pengguna</p>
                </a>
              </li>
              
              <li class="nav-item">
                <a href="{{ url('/output_pengguna') }}" class="nav-link">
                  <i class="fa fa-circle-o nav-icon"></i>
                  <p>Data Pengguna</p>
                </a>
              </li>
              </ul>
            </li>
            
            
            <li class="nav-item has-treeview menu-close"> 
            <a href="{{ url('/logout') }}" class="nav-link">
              <i class="nav-icon fa fa-sign-out"></i><!-- icon-->
              <p>
                Logout
                
              </p>
            </a>
            
            </li>
              
             
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
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <!-- <li class="breadcrumb-item active">Dashboard v2</li> -->
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <!-- Small boxes (Stat box) -->
        <div class="row">
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-info">
              <div class="inner">
                <h3></h3>

                <p>Website</p>
              </div>
              <div class="icon">
                <i class="ion ion-monitor"></i>
              </div>
              <a href="#" class="small-box-footer"></a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-success">
              <div class="inner">
                <!-- <h3><sup style="font-size: 20px">%</sup></h3> -->
				<h3></h3>
                <p>Mobile</p>
              </div>
              <div class="icon">
                <i class="ion ion-iphone"></i>
              </div>
              <a href="#" class="small-box-footer"></a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-warning">
              <div class="inner">
                <h3></h3>

                <p>Jaringan</p>
              </div>
              <div class="icon">
                <i class="ion ion-network"></i>
              </div>
              <a href="#" class="small-box-footer"></a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-danger">
              <div class="inner">
                <h3></h3>

                <p>SCADA</p>
              </div>
              <div class="icon">
                <i class="ion-gear-b"></i>
              </div>
              <a href="#" class="small-box-footer"></a>
            </div>
          </div>
          <!-- ./col -->
        </div>
        <!-- /.row -->
        <!-- Main row -->
        <div class="row">
          <!-- Left col -->
          <section class="col-lg-7 connectedSortable">
            <!-- Custom tabs (Charts with tabs)-->
            <div class="card">
              <div class="card-header d-flex p-0">
                <h3 class="card-title p-3">
                  <i class="fa fa-pie-chart mr-1"></i>
                  PENETRATION TESTING
                </h3>
                
                
                
    			
    			
                
                
                
                
                
             
              </div><!-- /.card-header -->
              <div class="card-body">
              	
              	<div id="pie" style="height: 370px; width: 100%;"></div>
    			
              
                
                
              </div><!-- /.card-body -->
            </div>
            <!-- /.card -->


            <!--/.direct-chat -->

            <!-- TO DO List -->

            <!-- /.card -->
          </section>
          <!-- /.Left col -->
          <!-- right col (We are only adding the ID to make the widgets sortable)-->
          <section class="col-lg-5 connectedSortable">

            <!-- Map card -->
            <div class="card bg-primary-gradient">
              <div class="card-header no-border">
                <h3 class="card-title">
                  <i class="fa fa-pie-chart mr-1"></i>
                  PROYEK
                </h3>
                <!-- card tools -->
                <div class="card-tools">
                  <!-- <button type="button"
                          class="btn btn-primary btn-sm daterange"
                          data-toggle="tooltip"
                          title="Date range">
                    <i class="fa fa-calendar"></i>
                  </button> -->
                  <button type="button"
                          class="btn btn-primary btn-sm"
                          data-widget="collapse"
                          data-toggle="tooltip"
                          title="Collapse">
                    <i class="fa fa-minus"></i>
                  </button>
                </div>
                <!-- /.card-tools -->
              </div>
              <div class="card-body">
               
               
           <div id="donut" style="height: 355px; width: 100%;"></div>
  
               
               
              </div>
              <!-- /.card-body-->
              <div class="card-footer bg-transparent">
               
              </div>
            </div>
            <!-- /.card -->

            <!-- solid sales graph -->

            <!-- /.card -->

            <!-- Calendar -->

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
  
  </footer>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="./././assets/plugins/jquery/jquery.min.js"></script>
<!-- jQuery UI 1.11.4 -->
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button)
</script>
<!-- Bootstrap 4 -->
<script src="./././assets/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- Morris.js charts -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js"></script>
<script src="./././assets/plugins/morris/morris.min.js"></script>
<!-- Sparkline -->
<script src="./././assets/plugins/sparkline/jquery.sparkline.min.js"></script>
<!-- jvectormap -->
<script src="./././assets/plugins/jvectormap/jquery-jvectormap-1.2.2.min.js"></script>
<script src="./././assets/plugins/jvectormap/jquery-jvectormap-world-mill-en.js"></script>
<!-- jQuery Knob Chart -->
<script src="./././assets/plugins/knob/jquery.knob.js"></script>
<!-- daterangepicker -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.10.2/moment.min.js"></script>
<script src="./././assets/plugins/daterangepicker/daterangepicker.js"></script>
<!-- datepicker -->
<script src="./././assets/plugins/datepicker/bootstrap-datepicker.js"></script>
<!-- Bootstrap WYSIHTML5 -->
<script src="./././assets/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js"></script>
<!-- Slimscroll -->
<script src="./././assets/plugins/slimScroll/jquery.slimscroll.min.js"></script>
<!-- FastClick -->
<script src="./././assets/plugins/fastclick/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="./././assets/dist/js/adminlte.js"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="./././assets/dist/js/pages/dashboard.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="./././assets/dist/js/demo.js"></script>
</body>
</html>
