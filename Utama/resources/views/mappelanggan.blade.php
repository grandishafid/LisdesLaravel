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
  
  <!-- <style>
	#mapid{
		width: 800px;
		height: 600px;
	}
	</style>
	<link rel="stylesheet" href="https://unpkg.com/leaflet@1.3.1/dist/leaflet.css" integrity="sha512-Rksm5RenBEKSKFjgI3a41vrjkw4EVPlJ3+OiI65vTjIdo9brlAacEuKOiQ5OFh7cOI1bkDwLqdLw3Zg0cRJAAQ==" crossorigin=""/>
	<script src="https://unpkg.com/leaflet@1.3.1/dist/leaflet.js" integrity="sha512-/Nsx9X4HebavoBvEBuyp3I7od5tA0UzAxs+j83KgC8PU0kgB4XiK4Lfe4y4cgBtaRJQEIFCW+oC506aPT2L1zw==" crossorigin=""></script>
	<script src="leaflet.ajax.min.js"></script> -->

 <style>
      #map-canvas {
        width: 100%;
        height: 500px;
      }
    </style>
    <script src='assets/js/jquery-1.10.1.min.js'></script>       
    
    <script src="assets/js/bootstrap.min.js"></script>
    <!-- akhir dari Bagian js -->
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBOVfpPuuh3VHFvtoas3ZuNTt2Kp9KIkTU&callback=initMap"></script>
    
    <script>
        
    var marker;
      function initialize() {
      	
      	var propertiPeta = {
            center:new google.maps.LatLng(-3.908165, 137.039623),
            zoom:9,
            mapTypeId:google.maps.MapTypeId.ROADMAP
        };
//           
        // Variabel untuk menyimpan informasi (desc)
        var infoWindow = new google.maps.InfoWindow;
        
        //  Variabel untuk menyimpan peta Roadmap
        var mapOptions = {
        	
          	mapTypeId: google.maps.MapTypeId.ROADMAP
        } 
        
        // Pembuatan petanya
        var map = new google.maps.Map(document.getElementById('map-canvas'), mapOptions);
              
        // Variabel untuk menyimpan batas kordinat
        var bounds = new google.maps.LatLngBounds();

        // Pengambilan data dari database
        <?php
            // $query = mysqli_query($con,"select * from data_location");
            // while ($data = mysqli_fetch_array($query))
            // {
                // $nama = $data['desc'];
                // $lat = $data['lat'];
                // $lon = $data['lon'];
//                 
                // echo ("addMarker($lat, $lon, '<b>$nama</b>');\n");                        
            // }
            $belum = 0;
			foreach ($list as $list2) {
				if($list2->koordinat_x != 0){
				echo ("addMarker($list2->koordinat_x, $list2->koordinat_y, '<b><a href = detailmap$list2->idpel> $list2->idpel </a></b>');\n");
					
				}
				$belum = $belum +1;
			}
			$kelainan = 0;
	  		foreach ($survei as $list2) {
	  			if($list2->hasil_survei == "MCB Tidak Sesuai/Kelainan" || $list2->hasil_survei == "Sambung Langsung"){
	  				$kelainan = $kelainan + 1;
	  				
	  			}
				
				
				
				if($list2->koordinat_x != 0){
					if($list2->hasil_survei == "MCB Tidak Sesuai/Kelainan" || $list2->hasil_survei == "Sambung Langsung"){
						echo ("addMarker3($list2->koordinat_x, $list2->koordinat_y, '<b><a href = detailmap$list2->idpel> $list2->idpel </a></b>');\n");
						
					}else{
						echo ("addMarker2($list2->koordinat_x, $list2->koordinat_y, '<b><a href = detailmap$list2->idpel> $list2->idpel </a></b>');\n");
					}	
				
					//echo ("addMarker2($list2->koordinat_x, $list2->koordinat_y, '<b><a href = detailmap$list2->idpel> $list2->idpel </a></b>');\n");
				
				}
			}
			
			
			
			
		
          ?>
          
        // Proses membuat marker 
        function addMarker(lat, lng, info) {
            var iconBase = 'https://maps.google.com/mapfiles/kml/shapes/';
            var lokasi = new google.maps.LatLng(lat, lng);
            bounds.extend(lokasi);
            var marker = new google.maps.Marker({
                map: map,
                position: lokasi,
                icon: './././foto/marker2.png',
            });       
            map.fitBounds(bounds);
            bindInfoWindow(marker, map, infoWindow, info);
         }
         
         function addMarker2(lat, lng, info) {
            var iconBase = 'https://maps.google.com/mapfiles/kml/shapes/';
            var lokasi = new google.maps.LatLng(lat, lng);
            bounds.extend(lokasi);
            var marker = new google.maps.Marker({
                map: map,
                position: lokasi,
                icon: './././foto/marker.png',
            });       
            map.fitBounds(bounds);
            bindInfoWindow(marker, map, infoWindow, info);
         }
         
         function addMarker3(lat, lng, info) {
            var iconBase = 'https://maps.google.com/mapfiles/kml/shapes/';
            var lokasi = new google.maps.LatLng(lat, lng);
            bounds.extend(lokasi);
            var marker = new google.maps.Marker({
                map: map,
                position: lokasi,
                icon: './././foto/marker3.png',
            });       
            map.fitBounds(bounds);
            bindInfoWindow(marker, map, infoWindow, info);
         }
        
        // Menampilkan informasi pada masing-masing marker yang diklik
        function bindInfoWindow(marker, map, infoWindow, html) {
          google.maps.event.addListener(marker, 'click', function() {
            infoWindow.setContent(html);
            infoWindow.open(map, marker);
          });
        }
 
        }
      google.maps.event.addDomListener(window, 'load', initialize);
    
    </script>


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
            <a href="{{ url('/mappelanggan') }}" class="nav-link active">
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
      <div class="container-fluid" style="overflow:auto; margin-bottom: 35px;">
      	
      	 <div id="map-canvas" style="width: 100%; height: 450px;"></div>
                    </div>
                  
                    
                    	
 
               <!-- Small boxes (Stat box) -->
      <div class="row">
          <div class="col-lg-3 col-6">
            <!-- small box -->
             <div class="small-box bg-info">
              <div class="inner">
                <h3><?php 
                if($b==0){
                echo "0";	
                }else{
                echo round($b/$total *100, 2);
                }
                ?>
                <sup style="font-size: 20px">%</sup></h3>
                
                

                <p>Persentase Survei</p> 
             </div>
              <div class="icon">
                <i class="icon ion-pie-graph"></i>
              </div>
              <a href="{{url('/output_pelanggansurvei')}}" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
           <div class="small-box bg-danger">
              <div class="inner">
                <h3><?php echo $belum; ?></h3> 
                <p>Belum Survei</p>
              </div>
              <div class="icon">
                <i class="icon ion-alert-circled"></i>
              </div>
              <a href="{{url('/output_pelanggan')}}" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
            </div>
          </div> 
          <!-- ./col -->
           <div class="col-lg-3 col-6"> 
            <!-- small box -->
             <div class="small-box bg-success">
              <div class="inner">
                <h3><?php echo $b; ?></h3> 
                <p>Telah Survei</p>
              </div>
              <div class="icon">
                <i class="icon ion-checkmark"></i>
              </div>
              <a href="{{url('/output_pelanggansurvei')}}" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
            </div>
          </div> 
          <!-- ./col -->
         <div class="col-lg-3 col-6"> 
            <!-- small box -->
           <div class="small-box bg-warning">
              <div class="inner">
                <h3><?php echo $kelainan; ?></h3> 
                <p>Kelainan</p>
              </div>
              <div class="icon">
                <i class="icon ion-person-stalker"></i>
              </div>
              <a href="{{url('/kelainan')}}" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
            </div>
          </div> 
          <!-- ./col -->    
                  
                  

      	 
    
</div>


    
      	
                      
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
