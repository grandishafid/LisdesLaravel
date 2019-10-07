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
	

<!--popup-->
 <script src="https://code.jquery.com/jquery-3.1.1.min.js"></script>
		 <script type="text/javascript">
		 
    $(document).ready(function(){
        $('#myModal').on('show.bs.modal', function (e) {
            var rowid = $(e.relatedTarget).data('id');
            //menggunakan fungsi ajax untuk pengambilan data
            $.ajax({
                type : 'post',
                url : "{{'detail'}}",
                data :  'rowid='+ rowid,
                success : function(data){
                $('.fetched-data').html(data);//menampilkan data ke dalam modal
                }
            });
         });
    });
  </script>
  
<!--popup-->

<!--sweet alert-->
<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.css">
<!--sweet alert-->
</head>
<body class="hold-transition sidebar-mini">
	<!--popup-->
	<div class="modal fade" id="myModal" role="dialog">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <!-- <button type="button" class="close" data-dismiss="modal">&times;</button> -->
                    <h4 class="modal-title">Unggah Dokumen</h4>
                </div>
                <div class="modal-body">
                    <div class="fetched-data">
                    <form class="form-horizontal" method="POST" action="{{ url('/unggah_rekomendasi') }}" enctype="multipart/form-data">
                    	{{ csrf_field() }}
                    	<table style="width: 100%;">
                    		
							<tr>
								<td>Nama Aplikasi</td>
								<td>:</td>
								<td><input class="form-control" type="" name="nama_apk" value="" id="nama_apk" autofocus readonly /></td>
							</tr>
							<tr>
								<td  colspan="2">Pilih File(PDF)</td>
								<td><input type="file" name="pdf"  required="required"/></td>
								
							</tr>
							<tr>
								<td colspan="3"></td>
								
							</tr> 
							<tr>
								<td colspan="3"><input type="hidden" name="status_apk" value="" id="stawal"  /></td>
							</tr>
							<tr>
								<td colspan="3"><input type="hidden" name="id_apk" value="" id="id_apk"  /></td>
							</tr>
							
							<tr>
								<td colspan="3"><input type="hidden" name="status_tujuan" value="" id="sttujuan"  /></td>
							</tr>
							
							                 		
                    	</table>
                    </div>
                </div>
                <div class="modal-footer">
                	<button type="submit" class="btn btn-primary">Unggah</button>
                    <button type="button" class="btn btn-default" data-dismiss="modal">Batal</button>
                </div>
                </form>
            </div>
        </div>
    </div>
    <!--popup-->
	
<div class="wrapper">

  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand bg-white navbar-light border-bottom">
    
          <div class="dropdown-divider"></div>
          
          <div class="dropdown-divider"></div>
          
      </li>
    
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
               
          <li class="nav-item has-treeview menu-open"> <!-- untuk buka tutup menu-->
            <a href="{{url('/home')}}" class="nav-link"><!-- untuk warn aktif-->
              <i class="nav-icon fa fa-dashboard"></i><!-- icon-->
              <p>
                Dashboard
                <!-- <i class="right fa fa-angle-left"></i>  --> 
              </p>
            </a>
          </li>
               
               
               
          <li class="nav-item has-treeview menu-open"> 
            <a href="{{ url('/home') }}" class="nav-link active">
              <i class="nav-icon fa fa-book"></i><!-- icon-->
              <p>
                Data Pengujian
                <i class="right fa fa-angle-left"></i>  
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
                <a href="{{ url('/output_pengujian') }}" class="nav-link active">
                  <i class="fa fa-circle-o nav-icon"></i>
                  <p>Data Pengujian</p>
                </a>
              </li>
              
            </ul> 
          </li>
          
          
           <li class="nav-item has-treeview menu-clos"> 
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
              <li class="breadcrumb-item active">Data Pengujian</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid" style="overflow-x: scroll; height: 550px;">
      	<form class="form-horizontal" method="POST" action="{{ url('/hapus') }}" >
           {{ csrf_field() }}
      		 <table id="datatable1" class="table display responsive nowrap table-bordered" >
      		 	
		<thead style="text-align: center;">
			<tr>
				<th>No</th>
				<th style="max-width: 200px;">Nama Pengujian</th>
				
				<th style="max-width: 200px;">Pemohon</th>
				
				
				<th style="max-width: 200px;">Evidence</th>
				<th style="min-width: 100px;">Status</th>
				<th style="max-width: 200px;">
					<button type="submit" class="btn btn-danger"><i class="fa fa-trash"></i></button></th>
				
				
				
		</thead>	
		<tbody>
			<?php $no=1;?>
			@foreach($list as $pengujian)
			<tr>
				<?php 
				if($pengujian->status=="1")
				{
					$status="Permintaan";
				}
				elseif($pengujian->status=="2")
				{
					$status="Sudah Dilakukan Pengujian";
				}
				elseif($pengujian->status=="3")
				{
					$status="Rekomendasi Belum Ditindaklanjuti";
				}
				elseif($pengujian->status=="4")
				{
					$status="Rekomendasi Sudah Ditindaklanjuti";
				}
				elseif($pengujian->status=="5")
				{
					$status="Rekomendasi Sudah Ditindaklanjuti";
				}
				
				
				if($pengujian->jenis=="1")
				{
					$jenis="Website";
				}
				elseif($pengujian->jenis=="2")
				{
					$jenis="Mobile";
				}
				elseif($pengujian->jenis=="3")
				{
					$jenis="Jaringan";
				}
				elseif($pengujian->jenis=="4")
				{
					$jenis="SCADA";
				}
				
				foreach ($list3 as $user) {
					if($user->id==$pengujian->penguji){
						$nama=$user->name;
					}
					
				}
				
				
				
				
				?>
				<td><?php echo $no; ?></td>
				<td style="max-width: 200px; word-wrap:break-word;"><a href="{{url('ubah_pengujian'.$pengujian->id_apk)}}">
					{{$pengujian->nama_apk}}</a> <br />
					Jenis : {{$jenis}} <br />
					{{$pengujian->fungsi_apk}}	</td>
				
				<td style="max-width: 200px; word-wrap:break-word;">{{$pengujian->pemohon}}<br />
					<h6>Diuji oleh {{$nama}}</h6>   	</td>
				<td style="max-width:1000px; word-wrap:break-word;"><?php  
						foreach($list2 as $data){
							if($data->nama_apk == $pengujian->nama_apk  ){
								
								echo  "<h7>".substr($data->created_at, 0, 10)."</h7>"." ".
								"<a href='../public/referensi/$data->referensi' target='_blank'><h7 style='color:black;'>$data->referensi</h7></a>" ."</br>" ;
								
								
							}
							
	
						}
					
					
					?></td>
				
						
      			
				<td style="max-width: 160px; word-wrap:break-word;">
				
					<form>
						
					<?php 
						if($pengujian->status=="1"){
							$a="disabled";
							$b="";
							$c="disabled";
							$d="disabled";
							$e="disabled";
						}elseif($pengujian->status=="2"){
							$a="disabled";
							$b="disabled";
							$c="";
							$d="disabled";
							$e="disabled";
						}elseif($pengujian->status=="3"){
							$a="disabled";
							$b="disabled";
							$c="disabled";
							$d="";
							$e="disabled";
						}elseif($pengujian->status=="4"){
							$a="disabled";
							$b="disabled";
							$c="disabled";
							$d="disabled";
							$e="";
						}elseif($pengujian->status=="5"){
							$a="disabled";
							$b="disabled";
							$c="disabled";
							$d="disabled";
							$e="disabled";
						}
					
					
					 ?>
						
						<?php $z=$pengujian->status."^".$pengujian->nama_apk."^".$pengujian->id_apk; ?>
						
						<a href='#myModal' onclick="sendToModal('{{$pengujian->status}}', '{{$pengujian->nama_apk}}', '{{$pengujian->id_apk}}', '1')"  id='custId' data-toggle='modal' data-id="<?php echo $pengujian->id_apk ?>">
						<input type="radio" <?php echo $a; ?> class="form-radio" name="status" id="rd1"value="1"  <?php if($pengujian->status=='1')
	      				{ echo 'checked'; }?>></a> <label for="rd1">Permintaan</label>
	            		<br />
	            		
	            		
	            		<a href= "{{url('pengujian'.$z)}}"<?php echo $pengujian->id_apk ?>">
	            		<input type="radio" <?php echo $b; ?> class="form-radio" name="status" id="rd2"value="2" <?php if($pengujian->status=='2')
	      				{ echo 'checked'; }?>></a> <label for="rd2">Pengujian</label> 
	            		<br />
	            		
	            		<a href='#myModal' onclick="sendToModal('{{$pengujian->status}}', '{{$pengujian->nama_apk}}', '{{$pengujian->id_apk}}', '3')"  id='custId' data-toggle='modal' data-id="<?php echo $pengujian->id_apk ?>">
	            		<input type="radio" <?php echo $c; ?> class="form-radio" name="status" id="rd3" value="3" <?php if($pengujian->status=='3')
	      				{ echo 'checked'; }?>></a> <label for="rd3">Rekomendasi</label>
	            		<br />
	            		
	            		<a href= "{{url('pengujian'.$z)}}"<?php echo $pengujian->id_apk ?>">
	            		<input type="radio" <?php echo $d; ?> class="form-radio" name="status" id="rd4" value="4" <?php if($pengujian->status=='4')
	      				{ echo 'checked'; }?>></a> <label for="rd3">Pengujian Ulang</label>
	            		<br />
	            		
	            		
	            		
	            		<a href='#myModal' onclick="sendToModal('{{$pengujian->status}}', '{{$pengujian->nama_apk}}', '{{$pengujian->id_apk}}', '5' )"  id='custId' data-toggle='modal' data-id="<?php echo $pengujian->id_apk ?>">
	            		<input type="radio" <?php echo $e; ?> class="form-radio" name="status" id="rd5" value="5" <?php if($pengujian->status=='5')
	      				{ echo 'checked'; }?>></a> <label for="rd5">Tersertifikasi</label>
							
							
							
						
							
					  </form>
						
				</td>
				
				<td style="max-width: 200px; word-wrap:break-word; text-align: center;">
					<?php $cek = "cek[]"; ?>
					<input type="checkbox" name=<?php echo $cek; ?> value="{{$pengujian->id_apk}}" />
					
					
				</td>
				<!-- <td> 
					<a href="{{url('ubah_pengujian'.$pengujian->id_apk)}}" class="btn btn-primary" title="Edit"><i class="fa fa-pencil"></i></a>
					
				</td>
				<td>
					<a href="#" class="btn btn-danger" title="Delete" onclick="javascript:if(confirm('Yakin ingin hapus data?')){window.location.href='#'};"><i class="fa fa-trash"></i></a>
					
				</td> -->
			</tr>
			<input type="hidden" name="jumlahbaris" value=<?php echo $no; ?> />
			<?php $no=$no+1;?>
			@endforeach
			
			
		</tbody>
		
	</table>
	</form>	

	
                      
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

<script>
	function sendToModal(status_apk, nama_apk, id_apk, nilai){
		$('#stawal').val(status_apk);
		$('#nama_apk').val(nama_apk);
		$('#id_apk').val(id_apk);
		
		$('#sttujuan').val(nilai);
		// $('#coba').val($('.form-radio').val());
		
	}
</script>
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
