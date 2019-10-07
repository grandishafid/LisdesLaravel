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
<!--sweet alert-->
<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.css">
<!--sweet alert-->
</head>
<body class="hold-transition sidebar-mini">
<div class="wrapper">

  <!-- Navbar -->
  
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="#" class="brand-link">
      <img src="./././foto/logo.jpg" alt="AdminLTE Logo" "
           style="opacity: .8;width: 50px;">
      <span class="brand-text font-weight-light">PLN UIWP2B</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      
      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
               
               <li class="nav-item has-treeview menu-close"> 
            <a href="{{ url('/mappelanggan') }}" class="nav-link">
              <i class="nav-icon fa fa-home"></i><!-- icon-->
              <p>
                Dashboard
                
              </p>
            </a>
            
            </li> 
               
                <li class="nav-item has-treeview menu-close"> 
            <a href="#" class="nav-link">
              <i class="nav-icon fa fa-dashboard"></i><!-- icon-->
              <p>
                Data Pelanggan
                <i class="right fa fa-angle-left"></i>  
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{ url('/output_pelanggan') }}" class="nav-link">
                  <i class="fa fa-circle-o nav-icon"></i>
                  <p>Data Belum Survei</p>
                </a>
              </li>
              
              <li class="nav-item">
                <a href="{{ url('/output_pelanggansurvei') }}" class="nav-link">
                  <i class="fa fa-circle-o nav-icon"></i>
                  <p>Data Telah Survei</p>
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
          
              
              
          
          
          
          
          
          
          
          
          <!-- <li class="nav-item">
            <a href="./././assets/pages/widgets.html" class="nav-link">
              <i class="nav-icon fa fa-th"></i>
              <p>
                Widgets
                <span class="right badge badge-danger">New</span>
              </p>
            </a>
          </li> -->
          <!-- <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fa fa-pie-chart"></i>
              <p>
                Charts
                <i class="right fa fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="./././assets/pages/charts/chartjs.html" class="nav-link">
                  <i class="fa fa-circle-o nav-icon"></i>
                  <p>ChartJS</p>
                </a>
              </li> -->
              <!-- <li class="nav-item">
                <a href=".././././assets/pages/charts/flot.html" class="nav-link">
                  <i class="fa fa-circle-o nav-icon"></i>
                  <p>Flot</p>
                </a>
              </li>
              <li class="nav-item">
                <a href=".././././assets/pages/charts/inline.html" class="nav-link">
                  <i class="fa fa-circle-o nav-icon"></i>
                  <p>Inline</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fa fa-tree"></i>
              <p>
                UI Elements
                <i class="fa fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href=".././././assets/pages/UI/general.html" class="nav-link">
                  <i class="fa fa-circle-o nav-icon"></i>
                  <p>General</p>
                </a>
              </li>
              <li class="nav-item">
                <a href=".././././assets/pages/UI/icons.html" class="nav-link">
                  <i class="fa fa-circle-o nav-icon"></i>
                  <p>Icons</p>
                </a>
              </li>
              <li class="nav-item">
                <a href=".././././assets/pages/UI/buttons.html" class="nav-link">
                  <i class="fa fa-circle-o nav-icon"></i>
                  <p>Buttons</p>
                </a>
              </li>
              <li class="nav-item">
                <a href=".././././assets/pages/UI/sliders.html" class="nav-link">
                  <i class="fa fa-circle-o nav-icon"></i>
                  <p>Sliders</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fa fa-edit"></i>
              <p>
                Forms
                <i class="fa fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href=".././././assets/pages/forms/general.html" class="nav-link">
                  <i class="fa fa-circle-o nav-icon"></i>
                  <p>General Elements</p>
                </a>
              </li>
              <li class="nav-item">
                <a href=".././././assets/pages/forms/advanced.html" class="nav-link">
                  <i class="fa fa-circle-o nav-icon"></i>
                  <p>Advanced Elements</p>
                </a>
              </li>
              <li class="nav-item">
                <a href=".././././assets/pages/forms/editors.html" class="nav-link">
                  <i class="fa fa-circle-o nav-icon"></i>
                  <p>Editors</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fa fa-table"></i>
              <p>
                Tables
                <i class="fa fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href=".././././assets/pages/tables/simple.html" class="nav-link">
                  <i class="fa fa-circle-o nav-icon"></i>
                  <p>Simple Tables</p>
                </a>
              </li>
              <li class="nav-item">
                <a href=".././././assets/pages/tables/data.html" class="nav-link">
                  <i class="fa fa-circle-o nav-icon"></i>
                  <p>Data Tables</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-header">EXAMPLES</li>
          <li class="nav-item">
            <a href=".././././assets/pages/calendar.html" class="nav-link">
              <i class="nav-icon fa fa-calendar"></i>
              <p>
                Calendar
                <span class="badge badge-info right">2</span>
              </p>
            </a>
          </li>
          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fa fa-envelope-o"></i>
              <p>
                Mailbox
                <i class="fa fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href=".././././assets/pages/mailbox/mailbox.html" class="nav-link">
                  <i class="fa fa-circle-o nav-icon"></i>
                  <p>Inbox</p>
                </a>
              </li>
              <li class="nav-item">
                <a href=".././././assets/pages/mailbox/compose.html" class="nav-link">
                  <i class="fa fa-circle-o nav-icon"></i>
                  <p>Compose</p>
                </a>
              </li>
              <li class="nav-item">
                <a href=".././././assets/pages/mailbox/read-mail.html" class="nav-link">
                  <i class="fa fa-circle-o nav-icon"></i>
                  <p>Read</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fa fa-book"></i>
              <p>
                Pages
                <i class="fa fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href=".././././assets/pages/examples/invoice.html" class="nav-link">
                  <i class="fa fa-circle-o nav-icon"></i>
                  <p>Invoice</p>
                </a>
              </li>
              <li class="nav-item">
                <a href=".././././assets/pages/examples/profile.html" class="nav-link">
                  <i class="fa fa-circle-o nav-icon"></i>
                  <p>Profile</p>
                </a>
              </li>
              <li class="nav-item">
                <a href=".././././assets/pages/examples/login.html" class="nav-link">
                  <i class="fa fa-circle-o nav-icon"></i>
                  <p>Login</p>
                </a>
              </li>
              <li class="nav-item">
                <a href=".././././assets/pages/examples/register.html" class="nav-link">
                  <i class="fa fa-circle-o nav-icon"></i>
                  <p>Register</p>
                </a>
              </li>
              <li class="nav-item">
                <a href=".././././assets/pages/examples/lockscreen.html" class="nav-link">
                  <i class="fa fa-circle-o nav-icon"></i>
                  <p>Lockscreen</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fa fa-plus-square-o"></i>
              <p>
                Extras
                <i class="fa fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="pages/examples/404.html" class="nav-link">
                  <i class="fa fa-circle-o nav-icon"></i>
                  <p>Error 404</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="pages/examples/500.html" class="nav-link">
                  <i class="fa fa-circle-o nav-icon"></i>
                  <p>Error 500</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="pages/examples/blank.html" class="nav-link">
                  <i class="fa fa-circle-o nav-icon"></i>
                  <p>Blank Page</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="starter.html" class="nav-link">
                  <i class="fa fa-circle-o nav-icon"></i>
                  <p>Starter Page</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-header">MISCELLANEOUS</li>
          <li class="nav-item">
            <a href="https://adminlte.io/docs" class="nav-link">
              <i class="nav-icon fa fa-file"></i>
              <p>Documentation</p>
            </a>
          </li>
          <li class="nav-header">LABELS</li>
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fa fa-circle-o text-danger"></i>
              <p class="text">Important</p>
            </a>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fa fa-circle-o text-warning"></i>
              <p>Warning</p>
            </a>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fa fa-circle-o text-info"></i>
              <p>Informational</p>
            </a>
          </li>
        </ul>
      </nav> -->      <!-- /.sidebar-menu -->
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
            <h1 class="m-0 text-dark">Data Pelanggan</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><?php echo Auth::user()->email; ?></li>
              <li class="breadcrumb-item active">Administrator</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid" style="overflow:auto;">

        	<form class="form-horizontal" method="POST" enctype="multipart/form-data" action="{{ url('/import') }}" >
           {{ csrf_field() }}
           <fieldset>
           	<div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                            	<input style="margin-bottom: 10px;" type="file" class="form-control-file" name="sample_file" id="file" placeholder="" required="required">
                               
                                <button type="submit" class="btn btn-primary">
                                    Import
                                </button>
                            </div>
                        </div>
         
           	 </fieldset>
        </form>

      		 <table id="datatable1" class="table display responsive nowrap table-bordered">
		<thead>
			<tr >
				<th>NO</th>
				<th>ID Pelanggan</th>
				<th>THBL</th>
				<th>UNITUP</th>
				<th>NOMOR METER</th>
				<th>UNITUPI</th>
				<th>UNITAP</th>
				<th>DAYA</th>
				<th>TARIF</th>
				<th>KRITERIA</th>
				<th>NAMA</th>
				<th>ALAMAT</th>
				<th>KODE GARDU</th>
				<th>NO TIANG</th>
				<th>KDDK</th>
				<th>KOORDINAT X</th>
				<th>KOORDINAT Y</th>
				<th>MERK METER</th>
				<th>TAHUN BUAT METER</th>
				<th>KRN</th>
				<th>TANGGAL PASANG KWH</th>
				<th>JENIS MK</th>
				<th>JUMLAH P2TL</th>
				<th>BELI TOKEN AKHIR</th>
				<th>USER PETUGAS CT</th>
				<th>NAMA PETUGAS CT</th>
				<th>JUMLAH CT</th>
				<th>DLPD</th>
				<th>KETERANGAN</th>
				<th>PETUGAS SURVEI</th>
				<th>HAPUS</th>
				
				
			</tr >
				
				
				
		</thead>	
		<tbody>
			<?php $no=1; ?>
			@foreach($list as $pengujian)
			
			<tr>
				
				<td>{{$no}}</td>
				
				<td><a href="{{url('ubah_pelanggansurvei'.$pengujian->idpel)}}" >{{$pengujian->idpel}}</a></td>
				<td>{{$pengujian->thbl}}</td>
				<td>{{$pengujian->unitup}}</td>
				<td>{{$pengujian->nomor_meter}}</td>
				<td>{{$pengujian->unitupi}}</td>
				<td>{{$pengujian->unitap}}</td>
				<td>{{$pengujian->daya}}</td>
				<td>{{$pengujian->tarif}}</td>
				<td>{{$pengujian->kriteria}}</td>
				<td>{{$pengujian->nama}}</td>
				<td>{{$pengujian->alamat}}</td>
				<td>{{$pengujian->kode_gardu}}</td>
				<td>{{$pengujian->no_tiang}}</td>
				<td>{{$pengujian->kddk}}</td>
				<td>{{$pengujian->koordinat_x}}</td>
				<td>{{$pengujian->koordinat_y}}</td>
				<td>{{$pengujian->merek_meter}}</td>
				<td>{{$pengujian->thn_buat_meter}}</td>
				<td>{{$pengujian->krn}}</td>
				<td>{{$pengujian->tglpasang_kwh}}</td>
				<td>{{$pengujian->jenis_mk}}</td>
				<td>{{$pengujian->jml_p2tl}}</td>
				<td>{{$pengujian->beli_token_akhir}}</td>
				<td>{{$pengujian->user_petugas_ct}}</td>
				<td>{{$pengujian->nama_petugas_ct}}</td>
				<td>{{$pengujian->jml_ct}}</td>
				<td>{{$pengujian->dlpd}}</td>
				<td>{{$pengujian->keterangan}}</td>
				<td>{{$pengujian->petugas}}</td>
				<td><a href="{{url('hapus_pelanggansurvei'.$pengujian->idpel)}}" ><button class="btn btn-danger"><i class="fa fa-trash"></i></button></a></td>
				
				
		
			
			</tr>
			<?php $no=$no+1;?>
			@endforeach
		</tbody>	
	</table>
	
      	
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

<!--sweet alert-->
<script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.js"></script>
@include('sweet::alert')
<!--sweet alert-->


<!--Tabel-->
	<link href="{{asset('tabel/highlightjs/github.css')}}" rel="stylesheet">
    <link href="{{asset('tabel/datatables/jquery.dataTables.css')}}" rel="stylesheet">
    <link href="{{asset('tabel/select2/css/select2.min.css')}}" rel="stylesheet">


    <script src="{{asset('tabel/highlightjs/highlight.pack.js')}}"></script>
    <script src="{{asset('tabel/datatables/jquery.dataTables.js')}}"></script>
    <script src="{{asset('tabel/datatables-responsive/dataTables.responsive.js')}}"></script>
    <script src="{{asset('tabel/select2/js/select2.min.js')}}"></script>
 <script>
        $(function(){
            'use strict';

            $('#datatable1').DataTable({
//                scrollX: true,
                responsive: false,
                language: {
                    searchPlaceholder: 'Search...',
                    sSearch: '',
                    lengthMenu: '_MENU_ items/page',
                }
            });

            
        });
    </script>
  <!--Tabel-->



</body>
</html>
