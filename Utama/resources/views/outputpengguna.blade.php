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
               
               
               
         
             
             <li class="nav-item has-treeview menu-open"> 
            <a href="#" class="nav-link active">
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
                <a href="{{ url('/output_pengguna') }}" class="nav-link active">
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
            <h1 class="m-0 text-dark">Data Pengguna</h1>
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
      	
      		 <table id="datatable1" class="table display responsive nowrap table-bordered">
		<thead>
			<tr >
				<th>NO</th>
				<th>NAMA PENGGUNA</th>
				<th>EMAIL</th>
				<th>JABATAN</th>
				<th>UNITUP</th>
				<th>HAPUS</th>
				
				
		</thead>	
		<tbody>
			<?php $no=1;?>
			@foreach($list as $data)
			<tr>
				<?php 
				if($data->jabatan=="1")
				{
					$jabatan="ADMIN";
				}
				elseif($data->jabatan=="2")
				{
					$jabatan="PETUGAS";
				}
			
				
				
				
				$buffer=$data->id.",".$data->jabatan;
				?>
				<td><?php echo $no; ?></td>
				<td><a href="{{url('ubah_pengguna'.$buffer)}}" >{{$data->name}}</a></td>
				<td>{{$data->email}}</td>
				<td><?php echo $jabatan; ?></td>
				<td>{{$data->unitup}}</td>
				
				
				
				<!-- <td> 
					<a href="{{url('#')}}" class="btn btn-primary" title="Edit"><i class="fa fa-pencil"></i></a>
					
				</td> -->
				<td><a href="{{url('hapus_pengguna'.$buffer)}}" ><button class="btn btn-danger"><i class="fa fa-trash"></i></button></a?</td>
				
			</tr>
			<?php $no=$no+1; ?> 
			@endforeach
			
			@foreach($list2 as $data2)
			<tr>
				<?php 
				
					
				
			
				
				
				$buffer2=$data2->id.",".$data2->jabatan;
				
				?>
				<td><?php echo $no; ?></td>
				<td><a href="{{url('ubah_pengguna'.$buffer2)}}" >{{$data2->name}}</a></td>
				<td>{{$data2->email}}</td>
				<td><?php echo "PETUGAS"; ?></td>
				<td>{{$data2->unitup}}</td>
				
				
				
				<!-- <td> 
					<a href="{{url('#')}}" class="btn btn-primary" title="Edit"><i class="fa fa-pencil"></i></a>
					
				</td> -->
				<td><a href="{{url('hapus_pengguna'.$buffer2)}}" ><button class="btn btn-danger"><i class="fa fa-trash"></i></button></a></td>
				
			</tr>
			<?php $no=$no+1; ?> 
			@endforeach
			
		</tbody>	
	</table>
	</form>

      	
                      
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
