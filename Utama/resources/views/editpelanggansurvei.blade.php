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
                <a href="{{ url('/home') }}" class="nav-link">
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
      <div class="container-fluid">
      <form class="form-horizontal" method="POST" action="{{url('ubah_pelanggansurvei'.$data->idpel)}}" enctype="multipart/form-data">
                        {{ csrf_field() }}

                        <div class="form-group{{ $errors->has('idpel') ? ' has-error' : '' }}">
                            <label for="idpel" class="col-md-4 control-label">ID PELANGGAN</label>

                            <div class="col-md-6">
                                <input id="idpel" readonly="readonly" type="text" class="form-control" name="idpel" value="{{$data->idpel}}" required autofocus>

                                @if ($errors->has('idpel'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('idpel') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('thbl') ? ' has-error' : '' }}">
                            <label for="thbl" class="col-md-4 control-label">THBL</label>

                            <div class="col-md-6">
                                <input id="thbl" type="text" class="form-control" name="thbl" value="{{$data->thbl}}" required>

                                @if ($errors->has('thbl'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('thbl') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        
                        <div class="form-group{{ $errors->has('unitup') ? ' has-error' : '' }}">
                            <label for="unitup" class="col-md-4 control-label">UNITUP</label>

                            <div class="col-md-6">
                                <input id="unitup" type="text" class="form-control" name="unitup" value="{{$data->unitup}}" required>

                                @if ($errors->has('unitup'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('unitup') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        
                        <div class="form-group{{ $errors->has('nomor_meter') ? ' has-error' : '' }}">
                            <label for="nomor_meter" class="col-md-4 control-label">NOMOR METER</label>

                            <div class="col-md-6">
                                <input id="nomor_meter" type="text" class="form-control" name="nomor_meter" value="{{$data->nomor_meter}}" required>

                                @if ($errors->has('nomor_meter'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('nomor_meter') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        
                        <div class="form-group{{ $errors->has('unitupi') ? ' has-error' : '' }}">
                            <label for="unitupi" class="col-md-4 control-label">UNITUPI</label>

                            <div class="col-md-6">
                                <input id="unitupi" type="text" class="form-control" name="unitupi" value="{{$data->unitupi}}" required>

                                @if ($errors->has('unitupi'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('unitupi') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        
                         <div class="form-group{{ $errors->has('unitap') ? ' has-error' : '' }}">
                            <label for="unitap" class="col-md-4 control-label">UNITAP</label>

                            <div class="col-md-6">
                                <input id="unitap" type="text" class="form-control" name="unitap" value="{{$data->unitap}}" required>

                                @if ($errors->has('unitap'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('unitap') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        
                        <div class="form-group{{ $errors->has('daya') ? ' has-error' : '' }}">
                            <label for="daya" class="col-md-4 control-label">DAYA</label>

                            <div class="col-md-6">
                                <input id="daya" type="text" class="form-control" name="daya" value="{{$data->daya}}" required>

                                @if ($errors->has('daya'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('daya') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        
                        <div class="form-group{{ $errors->has('tarif') ? ' has-error' : '' }}">
                            <label for="tarif" class="col-md-4 control-label">TARIF</label>

                            <div class="col-md-6">
                                <input id="tarif" type="text" class="form-control" name="tarif" value="{{$data->tarif}}" required>

                                @if ($errors->has('tarif'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('tarif') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        
                         <div class="form-group{{ $errors->has('kriteria') ? ' has-error' : '' }}">
                            <label for="kriteria" class="col-md-4 control-label">KRITERIA</label>

                            <div class="col-md-6">
                                <input id="kriteria" type="text" class="form-control" name="kriteria" value="{{$data->kriteria}}" required>

                                @if ($errors->has('kriteria'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('kriteria') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        
                         <div class="form-group{{ $errors->has('nama') ? ' has-error' : '' }}">
                            <label for="nama" class="col-md-4 control-label">NAMA</label>

                            <div class="col-md-6">
                                <input id="nama" type="text" class="form-control" name="nama" value="{{$data->nama}}" required>

                                @if ($errors->has('nama'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('nama') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        
                        <div class="form-group{{ $errors->has('alamat') ? ' has-error' : '' }}">
                            <label for="alamat" class="col-md-4 control-label">ALAMAT</label>

                            <div class="col-md-6">
                                <input id="alamat" type="text" class="form-control" name="alamat" value="{{$data->alamat}}" required>

                                @if ($errors->has('alamat'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('alamat') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        
                        <div class="form-group{{ $errors->has('kode_gardu') ? ' has-error' : '' }}">
                            <label for="kode_gardu" class="col-md-4 control-label">KODE GARDU</label>

                            <div class="col-md-6">
                                <input id="kode_gardu" type="text" class="form-control" name="kode_gardu" value="{{$data->kode_gardu}}" required>

                                @if ($errors->has('kode_gardu'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('kode_gardu') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        
                        <div class="form-group{{ $errors->has('no_tiang') ? ' has-error' : '' }}">
                            <label for="no_tiang" class="col-md-4 control-label">NO TIANG</label>

                            <div class="col-md-6">
                                <input id="no_tiang" type="text" class="form-control" name="no_tiang" value="{{$data->no_tiang}}" required>

                                @if ($errors->has('no_tiang'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('no_tiang') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        
                         <div class="form-group{{ $errors->has('kddk') ? ' has-error' : '' }}">
                            <label for="kddk" class="col-md-4 control-label">KDDK</label>

                            <div class="col-md-6">
                                <input id="kddk" type="text" class="form-control" name="kddk" value="{{$data->kddk}}" required>

                                @if ($errors->has('kddk'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('kddk') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        
                        <div class="form-group{{ $errors->has('koordinat_x') ? ' has-error' : '' }}">
                            <label for="koordinat_x" class="col-md-4 control-label">KOORDINAT X</label>

                            <div class="col-md-6">
                                <input id="koordinat_x" type="text" class="form-control" name="koordinat_x" value="{{$data->koordinat_x}}" required>

                                @if ($errors->has('koordinat_x'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('koordinat_x') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        
                        <div class="form-group{{ $errors->has('koordinat_y') ? ' has-error' : '' }}">
                            <label for="koordinat_y" class="col-md-4 control-label">KOORDINAT Y</label>

                            <div class="col-md-6">
                                <input id="koordinat_y" type="text" class="form-control" name="koordinat_y" value="{{$data->koordinat_y}}" required>

                                @if ($errors->has('koordinat_y'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('koordinat_y') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        
                        <div class="form-group{{ $errors->has('merek_meter') ? ' has-error' : '' }}">
                            <label for="merek_meter" class="col-md-4 control-label">MEREK METER</label>

                            <div class="col-md-6">
                                <input id="merek_meter" type="text" class="form-control" name="merek_meter" value="{{$data->merek_meter}}" required>

                                @if ($errors->has('merek_meter'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('merek_meter') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        
                        <div class="form-group{{ $errors->has('thn_buat_meter') ? ' has-error' : '' }}">
                            <label for="thn_buat_meter" class="col-md-4 control-label">TAHUN BUAT METER</label>

                            <div class="col-md-6">
                                <input id="thn_buat_meter" type="text" class="form-control" name="thn_buat_meter" value="{{$data->thn_buat_meter}}" required>

                                @if ($errors->has('thn_buat_meter'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('thn_buat_meter') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        
                        <div class="form-group{{ $errors->has('krn') ? ' has-error' : '' }}">
                            <label for="krn" class="col-md-4 control-label">KRN</label>

                            <div class="col-md-6">
                                <input id="krn" type="text" class="form-control" name="krn" value="{{$data->krn}}" required>

                                @if ($errors->has('krn'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('krn') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        
                        <div class="form-group{{ $errors->has('tglpasang_kwh') ? ' has-error' : '' }}">
                            <label for="tglpasang_kwh" class="col-md-4 control-label">TANGGAL PASANG KWH</label>

                            <div class="col-md-6">
                                <input id="tglpasang_kwh" type="date" class="form-control" name="tglpasang_kwh" value="{{substr($data->tglpasang_kwh,0,10)}}" required>

                                @if ($errors->has('tglpasang_kwh'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('tglpasang_kwh') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        
                        <div class="form-group{{ $errors->has('jenis_mk') ? ' has-error' : '' }}">
                            <label for="jenis_mk" class="col-md-4 control-label">JENIS MK</label>

                            <div class="col-md-6">
                                <input id="jenis_mk" type="text" class="form-control" name="jenis_mk" value="{{$data->jenis_mk}}" required>

                                @if ($errors->has('jenis_mk'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('jenis_mk') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        
                         <div class="form-group{{ $errors->has('jml_p2tl') ? ' has-error' : '' }}">
                            <label for="jml_p2tl" class="col-md-4 control-label">JUMLAH P2TL</label>

                            <div class="col-md-6">
                                <input id="jml_p2tl" type="text" class="form-control" name="jml_p2tl" value="{{$data->jml_p2tl}}" required>

                                @if ($errors->has('jml_p2tl'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('jml_p2tl') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        
                        <div class="form-group{{ $errors->has('beli_token_akhir') ? ' has-error' : '' }}">
                            <label for="beli_token_akhir" class="col-md-4 control-label">BELI TOKEN AKHIR</label>

                            <div class="col-md-6">
                                <input id="beli_token_akhir" type="date" class="form-control" name="beli_token_akhir" value="{{substr($data->beli_token_akhir,0,10)}}" required>

                                @if ($errors->has('beli_token_akhir'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('beli_token_akhir') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        
                        <div class="form-group{{ $errors->has('user_petugas_ct') ? ' has-error' : '' }}">
                            <label for="user_petugas_ct" class="col-md-4 control-label">USER PETUGAS CT</label>

                            <div class="col-md-6">
                                <input id="user_petugas_ct" type="text" class="form-control" name="user_petugas_ct" value="{{$data->user_petugas_ct}}" required>

                                @if ($errors->has('user_petugas_ct'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('user_petugas_ct') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        
                        <div class="form-group{{ $errors->has('nama_petugas_ct') ? ' has-error' : '' }}">
                            <label for="nama_petugas_ct" class="col-md-4 control-label">NAMA PETUGAS CT</label>

                            <div class="col-md-6">
                                <input id="nama_petugas_ct" type="text" class="form-control" name="nama_petugas_ct" value="{{$data->nama_petugas_ct}}" required>

                                @if ($errors->has('nama_petugas_ct'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('nama_petugas_ct') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        
                        <div class="form-group{{ $errors->has('jml_ct') ? ' has-error' : '' }}">
                            <label for="jml_ct" class="col-md-4 control-label">JUMLAH CT</label>

                            <div class="col-md-6">
                                <input id="jml_ct" type="text" class="form-control" name="jml_ct" value="{{$data->jml_ct}}" required>

                                @if ($errors->has('jml_ct'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('jml_ct') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        
                         <div class="form-group{{ $errors->has('dlpd') ? ' has-error' : '' }}">
                            <label for="dlpd" class="col-md-4 control-label">DLPD</label>

                            <div class="col-md-6">
                                <input id="dlpd" type="text" class="form-control" name="dlpd" value="{{$data->dlpd}}" required>

                                @if ($errors->has('dlpd'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('dlpd') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        
                        <div class="form-group{{ $errors->has('keterangan') ? ' has-error' : '' }}">
                            <label for="keterangan" class="col-md-4 control-label">KETERANGAN</label>

                            <div class="col-md-6">
                                <input id="keterangan" type="text" class="form-control" name="keterangan" value="{{$data->keterangan}}" required>

                                @if ($errors->has('keterangan'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('keterangan') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        
                        <div class="form-group{{ $errors->has('petugas') ? ' has-error' : '' }}">
                            <label for="petugas" class="col-md-4 control-label">PETUGAS SURVEI</label>

                            <div class="col-md-6">
                                <input id="petugas" type="text" class="form-control" name="petugas" value="{{$data->petugas}}" required>

                                @if ($errors->has('petugas'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('petugas') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        
                        <div class="form-group{{ $errors->has('hasil_survei') ? ' has-error' : '' }}">
                            <label for="hasil_survei" class="col-md-4 control-label">HASIL SURVEI</label>

                            <div class="col-md-6">
                                <input id="hasil_survei" type="text" class="form-control" name="hasil_survei" value="{{$data->hasil_survei}}" required>

                                @if ($errors->has('hasil_survei'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('hasil_survei') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        
                       
                                 
                                                
                        
                        
                        
                        <div class="form-group{{ $errors->has('status_survei') ? ' has-error' : '' }}">
                            <label for="status_survei" class="col-md-4 control-label">STATUS SURVEI</label>

                            <div class="col-md-6">
                                

								<select name="status_survei" class="form-control" >
									<option value="1" @if($data->status_survei=='1')
											selected='selected' @endif>
											Sudah Survei
									</option>
									
									<option value="0" @if($data->status_survei=='0')
											selected='selected' @endif>
											Belum Survei
									</option>
									
  								</select>
                                @if ($errors->has('status_survei'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('status_survei') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        
                    
                        <div class="form-group{{ $errors->has('tanggal_survei') ? ' has-error' : '' }}">
                            <label for="tanggal_survei" class="col-md-4 control-label">TANGGAL SURVEI</label>

                            <div class="col-md-6">
                                <input id="tanggal_survei" type="date" class="form-control" name="tanggal_survei" value="{{$data->tanggal_survei}}" required>

                                @if ($errors->has('tanggal_survei'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('tanggal_survei') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        
                        
                           <div class="form-group{{ $errors->has('barcode') ? ' has-error' : '' }}">
                            <label for="barcode" class="col-md-4 control-label">KODE BAR/QR</label>

                            <div class="col-md-6">
                                

								<select name="barcode" class="form-control" >
									<option value="ada" @if($data->barcode=='ada')
											selected='selected' @endif>
											Ada
									</option>
									
									<option value="tidak ada" @if($data->barcode=='tidak ada')
											selected='selected' @endif>
											Tidak Ada
									</option>
									
  								</select>
                                @if ($errors->has('barcode'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('barcode') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        
                   <div class="form-group">
                   	<label for="foto" class="col-md-4 control-label">UPLOAD FOTO</label>
                            <div class="col-md-6 col-md-offset-4">
                            	<input style="margin-bottom: 10px;" type="file" class="form-control-file" name="foto" id="foto" placeholder="" >
                               
                               
                            </div>
                        </div>
						
                        
                      

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    Perbarui
                                </button>
                            </div>
                        </div>
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
