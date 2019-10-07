<!DOCTYPE html>
<html>
<head>
	
	
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>KKI</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="../public/assets/plugins/font-awesome/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="../public/assets/dist/css/adminlte.min.css">
  <!-- iCheck -->
  <link rel="stylesheet" href="../public/assets/plugins/iCheck/flat/blue.css">
  <!-- Morris chart -->
  <link rel="stylesheet" href="../public/assets/plugins/morris/morris.css">
  <!-- jvectormap -->
  <link rel="stylesheet" href="../public/assets/plugins/jvectormap/jquery-jvectormap-1.2.2.css">
  <!-- Date Picker -->
  <link rel="stylesheet" href="../public/assets/plugins/datepicker/datepicker3.css">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="../public/assets/plugins/daterangepicker/daterangepicker-bs3.css">
  <!-- bootstrap wysihtml5 - text editor -->
  <link rel="stylesheet" href="../public/assets/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
  <style>
  	form .form-radio{display:none;}
form .form-radio + label{padding-left:35px;}
form .form-radio + label::before{
    content:""; 
    position:absolute; 
    left:0px; 
    display:inline-block; 
    width:25px; 
    height:25px; 
    background:#fff; 
    margin-right:5px; 
    border:1px solid #ddd; 
    border-radius:50%; -moz-border-radius:50%; 
    box-shadow:2px 2px 2px #bbb; -moz-box-shadow:2px 2px 2px #bbb;
    transition:0.3s; -moz-transition:0.3s; -webkit-transition:0.3s; -khtml-transition:0.3s;}
form .form-radio:checked + label::before{
    background:#34A8BF; 
    border:5px solid #fff; 
    width:17px; 
    height:17px;}
  	
  	
  	
  	
  </style>
</head>
<body class="hold-transition sidebar-mini">
<div class="wrapper">

  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand bg-white navbar-light border-bottom">
    <!-- Left navbar links -->
    <!-- <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#"><i class="fa fa-bars"></i></a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="../public/assets/index3.html" class="nav-link">Home</a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="#" class="nav-link">Contact</a>
      </li>
    </ul> -->
    <!-- SEARCH FORM -->
    <!-- <form class="form-inline ml-3">
      <div class="input-group input-group-sm">
        <input class="form-control form-control-navbar" type="search" placeholder="Search" aria-label="Search">
        <div class="input-group-append">
          <button class="btn btn-navbar" type="submit">
            <i class="fa fa-search"></i>
          </button>
        </div>
      </div>
    </form> -->

    <!-- Right navbar links -->
    <!-- <ul class="navbar-nav ml-auto">
      <!-- Messages Dropdown Menu -->
      <!-- <li class="nav-item dropdown">
        <a class="nav-link" data-toggle="dropdown" href="#">
          <i class="fa fa-comments-o"></i>
          <span class="badge badge-danger navbar-badge">3</span>
        </a> -->
        <!-- <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
          <a href="#" class="dropdown-item"> -->
            <!-- Message Start -->
            <!-- <div class="media">
              <img src="../public/assets/dist/img/user1-128x128.jpg" alt="User Avatar" class="img-size-50 mr-3 img-circle">
              <div class="media-body">
                <h3 class="dropdown-item-title">
                  Brad Diesel
                  <span class="float-right text-sm text-danger"><i class="fa fa-star"></i></span>
                </h3>
                <p class="text-sm">Call me whenever you can...</p>
                <p class="text-sm text-muted"><i class="fa fa-clock-o mr-1"></i> 4 Hours Ago</p>
              </div>
            </div> --> 
            <!-- Message End -->
          <!-- </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <!-- Message Start -->
            <!-- <div class="media">
              <img src="../public/assets/dist/img/user8-128x128.jpg" alt="User Avatar" class="img-size-50 img-circle mr-3">
              <div class="media-body">
                <h3 class="dropdown-item-title">
                  John Pierce
                  <span class="float-right text-sm text-muted"><i class="fa fa-star"></i></span>
                </h3>
                <p class="text-sm">I got your message bro</p>
                <p class="text-sm text-muted"><i class="fa fa-clock-o mr-1"></i> 4 Hours Ago</p>
              </div>
            </div> --> 
            <!-- Message End -->
          <!-- </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <!-- Message Start -->
            <!-- <div class="media">
              <img src="../public/assets/dist/img/user3-128x128.jpg" alt="User Avatar" class="img-size-50 img-circle mr-3">
              <div class="media-body">
                <h3 class="dropdown-item-title">
                  Nora Silvester
                  <span class="float-right text-sm text-warning"><i class="fa fa-star"></i></span>
                </h3>
                <p class="text-sm">The subject goes here</p>
                <p class="text-sm text-muted"><i class="fa fa-clock-o mr-1"></i> 4 Hours Ago</p>
              </div>
            </div>  -->
            <!-- Message End -->
          <!-- </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item dropdown-footer">See All Messages</a>
        </div>
      </li> -->
      <!-- Notifications Dropdown Menu -->
      <!-- <li class="nav-item dropdown"> -->
        <!-- <a class="nav-link" data-toggle="dropdown" href="#">
          <i class="fa fa-bell-o"></i>
          <span class="badge badge-warning navbar-badge">15</span>
        </a> -->
        <!-- <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
          <span class="dropdown-item dropdown-header">15 Notifications</span> -->
          <!-- <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <i class="fa fa-envelope mr-2"></i> 4 new messages
            <span class="float-right text-muted text-sm">3 mins</span>
          </a> -->
          <div class="dropdown-divider"></div>
          <!-- <a href="#" class="dropdown-item">
            <i class="fa fa-users mr-2"></i> 8 friend requests
            <span class="float-right text-muted text-sm">12 hours</span>
          </a> -->
          <div class="dropdown-divider"></div>
          <!-- <a href="#" class="dropdown-item">
            <i class="fa fa-file mr-2"></i> 3 new reports
            <span class="float-right text-muted text-sm">2 days</span>
          </a> -->
          <!-- <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item dropdown-footer">See All Notifications</a>
        </div> -->
      </li>
      <!-- <li class="nav-item">
        <a class="nav-link" data-widget="control-sidebar" data-slide="true" href="#"><i
            class="fa fa-th-large"></i></a>
      </li> -->
    </ul>
  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
   <a href="#" class="brand-link">
      <img src="../public/foto/logo.jpg" alt="AdminLTE Logo" "
           style="opacity: .8;width: 50px;">
      <span class="brand-text font-weight-light">PLN Kantor Pusat</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="../public/foto/<?php echo Auth::user()->foto; ?>" class="img-circle elevation-2" alt="User Image" style="width: 50px;">
        </div>
        <div class="info" style="padding-top: 10%;">
          <a href="../public/assets/./index.html" class="d-block"><?php echo Auth::user()->name; ?></a>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
               
          <li class="nav-item has-treeview menu"> <!-- untuk buka tutup menu-->
            <a href="{{ url('/home') }}" class="nav-link"><!-- untuk warn aktif-->
              <i class="nav-icon fa fa-dashboard"></i><!-- icon-->
              <p>
                Dashboard
                <!-- <i class="right fa fa-angle-left"></i>  --> 
              </p>
            </a>
          </li>
               
               
               
          <li class="nav-item has-treeview menu-open"> 
            <a href="#" class="nav-link active">
              <i class="nav-icon fa fa-book"></i><!-- icon-->
              <p>
                Data Pengujian
                <i class="right fa fa-angle-left"></i>  
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{ url('/input_pengujian') }}" class="nav-link active">
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
            <h1 class="m-0 text-dark">Data Pengujian</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{ url('/home') }}">Dashboard</a></li>
              <li class="breadcrumb-item active">Input Pengujian</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
      	
      		 <form  method="POST" action="{{ url('/tambah_pengujian') }}" enctype="multipart/form-data"
      		 style="
  border-radius: 5px;
  background-color: #e0e0e0;
  width:40%;
  padding: 20px;"
      		 
      		 	>
                        {{ csrf_field() }}
                        
                       
                        
				<fieldset>
                        <div class="form-group{{ $errors->has('nama_apk') ? ' has-error' : '' }}">
                            

                            <div class="col-md-12">
                                <input id="nama_apk" placeholder="Nama Pengujian" type="text" class="form-control" name="nama_apk" value="{{ old('nama_apk') }}" required autofocus>

                                @if ($errors->has('nama_apk'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('nama_apk') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('status') ? ' has-error' : '' }}">
                            

                            <div class="col-md-12">
                                <input id="fungsi_apk" placeholder="Fungsi Objek Pengujian" type="text" class="form-control" name="fungsi_apk" value="{{ old('fungsi_apk') }}" required>

                                @if ($errors->has('fungsi_apk'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('fungsi_apk') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        
                        
                        
                        <div class="form-group{{ $errors->has('pemohon') ? ' has-error' : '' }}">
                            

                            <div class="col-md-12">
                                <input id="pemohon" placeholder="Pemohon" type="text" class="form-control" name="pemohon" value="{{ old('pemohon') }}" required>

                                @if ($errors->has('pemohon'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('pemohon') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        
                        
                      
                        
                        
            
                        
                     
                        
                        
                         
                        
                        
                          <div style="margin-bottom: 20%;" class="form-group{{ $errors->has('jenis') ? ' has-error' : '' }}">
                            <label style="float: left;" for="status" class="col-md-4 control-label">Jenis Aplikasi</label>

                            <div style="float: right;" class="col-md-8">
                                <select name="jenis" class="form-control">
									
	  								<option value="1">Website</option>
	  								<option value="2">Mobile</option>
	  								<option value="3">Jaringan</option>
	  								<option value="4">SCADA</option>
	  								
	  								
								
 								 </select>

                                @if ($errors->has('jenis'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('jenis') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        
                        
                        
                        <div  class="form-group{{ $errors->has('penguji') ? ' has-error' : '' }}">
                            <label style="float: left;" for="penguji" class="col-md-4 control-label">Penguji</label>

                            <div style="float: right;" class="col-md-8">
                                <select name="penguji" class="form-control">
									
								@foreach($list as $data)
                        						
                        
	  								<option value=<?php echo $data->id; ?>><?php echo $data->name; ?></option>
	  								
	  								
	  							@endforeach
								
 								 </select>

                                @if ($errors->has('jenis'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('jenis') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        
                        
                        
                        <div style="margin-top: 35%;" class="form-group{{ $errors->has('pdf') ? ' has-error' : '' }}">
                            <label style="float: left;" for="pdf" class="col-md-4 control-label">Upload Berkas</label>

                            <div style="float: right;" class="col-md-8">
                                <input type="file" name="pdf"  required="required"/>
                        

                                
                            </div>
                        </div>
                        
                        
                        
                        
                        
                        
                         <div style="margin-top: 50%;" class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    Tambahkan
                                </button>
                            </div>
                        </div>
                        </fieldset>
                        </form>

                        <!-- <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                            <label for="password" class="col-md-4 control-label">Password</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control" name="password" required>

                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div> -->

                     
        <!-- Small boxes (Stat box) -->
        <!-- <div class="row">
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <!-- <div class="small-box bg-info">
              <div class="inner">
                <!-- <h3>150</h3>

                <p>New Orders</p> -->
              <!-- </div>
              <div class="icon">
                <i class="ion ion-bag"></i>
              </div>
              <a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
          <!-- <div class="col-lg-3 col-6">
            <!-- small box -->
           <!-- <div class="small-box bg-success">
              <div class="inner">
                <h3>53<sup style="font-size: 20px">%</sup></h3> -->
                <!-- <p>Bounce Rate</p>
              </div>
              <div class="icon">
                <i class="ion ion-stats-bars"></i>
              </div>
              <a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
            </div>
          </div> -->
          <!-- ./col -->
          <!-- <div class="col-lg-3 col-6"> -->
            <!-- small box -->
            <!-- <div class="small-box bg-warning">
              <div class="inner">
                <h3>44</h3>

                <p>User Registrations</p>
              </div>
              <div class="icon">
                <i class="ion ion-person-add"></i>
              </div>
              <a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
            </div>
          </div> -->
          <!-- ./col -->
          <!-- <div class="col-lg-3 col-6"> -->
            <!-- small box -->
            <!-- <div class="small-box bg-danger">
              <div class="inner">
                <h3>65</h3>

                <p>Unique Visitors</p>
              </div>
              <div class="icon">
                <i class="ion ion-pie-graph"></i>
              </div>
              <a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
            </div>
          </div> -->
          <!-- ./col -->
        </div>
         
       
  <!-- <footer class="main-footer" style="width: 100%;">
    <strong>Copyright &copy; 2014-2018 <a href="http://adminlte.io">AdminLTE.io</a>.</strong>
    All rights reserved.
    <div class="float-right d-none d-sm-inline-block">
      <b>Version</b> 3.0.0-alpha
    </div>
  </footer> -->
  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="../public/assets/plugins/jquery/jquery.min.js"></script>
<!-- jQuery UI 1.11.4 -->
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button)
</script>
<!-- Bootstrap 4 -->
<script src="../public/assets/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- Morris.js charts -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js"></script>
<script src="../public/assets/plugins/morris/morris.min.js"></script>
<!-- Sparkline -->
<script src="../public/assets/plugins/sparkline/jquery.sparkline.min.js"></script>
<!-- jvectormap -->
<script src="../public/assets/plugins/jvectormap/jquery-jvectormap-1.2.2.min.js"></script>
<script src="../public/assets/plugins/jvectormap/jquery-jvectormap-world-mill-en.js"></script>
<!-- jQuery Knob Chart -->
<script src="../public/assets/plugins/knob/jquery.knob.js"></script>
<!-- daterangepicker -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.10.2/moment.min.js"></script>
<script src="../public/assets/plugins/daterangepicker/daterangepicker.js"></script>
<!-- datepicker -->
<script src="../public/assets/plugins/datepicker/bootstrap-datepicker.js"></script>
<!-- Bootstrap WYSIHTML5 -->
<script src="../public/assets/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js"></script>
<!-- Slimscroll -->
<script src="../public/assets/plugins/slimScroll/jquery.slimscroll.min.js"></script>
<!-- FastClick -->
<script src="../public/assets/plugins/fastclick/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="../public/assets/dist/js/adminlte.js"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="../public/assets/dist/js/pages/dashboard.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="../public/assets/dist/js/demo.js"></script>
</body>
</html>
