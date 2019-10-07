<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\data_proyek;
use App\data_pelanggan;
use App\pelanggan;
use App\data_dummy;
use App\data_dummy2;

use App\data_andro;
use App\Imports\PelangganImportCollection;
use Alert;

use Maatwebsite\Excel\Facades\Excel;


class PelangganController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $list2 = data_pelanggan::all();
      
	  	//dd($list);
	  	$a= 0;
	  	foreach ($list2 as $data) {
	  		if($data->status_survei == "0"){
	  			$list[$a] = $data;
				$a=$a+1;		
	  			
	  		}
			
			
			
			
		}
		if($a==0){
				$list = data_dummy::all();
			
		}
        return view('outputpelanggan', compact('list'));
    }
	
	
	
	
	
	
	public function kelainan()
    {
        //
        $list2 = data_pelanggan::all();
      
	  	//dd($list);
	  	$a= 0;
	  	foreach ($list2 as $data) {
	  		if($data->hasil_survei == "MCB Tidak Sesuai/Kelainan" || $data->hasil_survei == "Sambung Langsung" ){
	  			$list[$a] = $data;
				$a=$a+1;		
	  			
	  		}
			
			
			
			
		}
		if($a==0){
				$list = data_dummy::all();
			
		}
		$inputan[0]= 0;
		$inputan[1]= 0;
        return view('outputpelanggan2', compact('list','inputan'));
	}

	
	public function dashboard()
    {
        //
        $list2 = data_pelanggan::all();
		$dummy = data_dummy::all();
      
	  	//dd($list);
	  	$a = 0;
		$b = 0;
		$total = 0; 
	   
	  	foreach ($list2 as $data) {
	  		if($data->status_survei == "0"){
	  			$list[$a] = $data;
				$a=$a+1;		
	  			
	  		}elseif($data->status_survei == "1"){
	  			$survei[$b] = $data;
				$b=$b+1;		
	  			
	  		}
			
			
			
			$total=$total+1;
			
		}
		if($a==0){
				$list = data_dummy::all();
			$total = 0;
			$a=0;
			$b=0;
			
			
		}
		if($b==0){
				$survei = data_dummy::all();
			$total = 0;
			$a=0;
			$b=0;
			
			
		}
		//dd($dummy);
        return view('dashboard', compact('list', 'dummy','survei', 'total', 'a', 'b'));
	}
	
	public function mappelanggan()
    {
        //
        $list2 = data_pelanggan::all();
		$dummy = data_dummy::all();
      
	  	//dd($list);
	  	$a = 0;
		$b = 0;
		$total = 0; 
	   
	  	foreach ($list2 as $data) {
	  		if($data->status_survei == "0"){
	  			$list[$a] = $data;
				$a=$a+1;		
	  			
	  		}elseif($data->status_survei == "1"){
	  			$survei[$b] = $data;
				$b=$b+1;		
	  			
	  		}
			
			
			
			$total=$total+1;
			
		}
		if($a==0){
				$list = data_dummy::all();
			$total = 0;
			$a=0;
			$b=0;
			
			
		}
		if($b==0){
				$survei = data_dummy::all();
			$total = 0;
			$a=0;
			$b=0;
			
			
		}
		//dd($dummy);
        return view('mappelanggan', compact('list', 'dummy','survei', 'total', 'a', 'b'));
    }
	
	
	    public function detailmap($idpel)
    {
        
		
		$list = data_pelanggan::all();
		$dummy = data_pelanggan::find($idpel);
		
		$a = 0;
		$b = 0; 
	  	foreach ($list as $data) {
	  		if($data->status_survei == "0"){
	  			$list[$a] = $data;
				$a=$a+1;		
	  			
	  		}elseif($data->status_survei == "1"){
	  			$survei[$b] = $data;
				$b=$b+1;		
	  			
	  		}
			
			
			
			
			
		}
		if($a==0){
				$list = data_dummy::all();
			$total = 0;
			$a=0;
			$b=0;
			
			
		}
		if($b==0){
				$survei = data_dummy::all();
			$total = 0;
			$a=0;
			$b=0;
			
			
		}
		
		
		
	  	//dd($list);
	  	
		//dd($survei);
        return view('mappelanggan2', compact('list', 'dummy', 'survei'));
	}
     
	public function editpelanggansurvei($idpel)
    {
        //
        $data = data_pelanggan::find($idpel);
		// $pengujian=$id;
		
        return view('editpelanggansurvei', compact('data'));
		//dd($data);
    }
	
	public function pelanggansurvei()
    {
        //
        $list2 = data_pelanggan::all();
      
	  	//dd($list);
	  	$a= 0;
	  	foreach ($list2 as $data) {
	  		if($data->status_survei == "1"){
	  			$list[$a] = $data;
				$a=$a+1;		
	  			
	  		}
			
			
			
			
		}
		if($a==0){
				$list = data_dummy::all();
			
		}
		$inputan[0]= 0;
		$inputan[1]= 0;
        return view('outputpelanggan2', compact('list','inputan'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
     
     public function hasil(Request $request)
    {
   
    	$awal=strtotime($request->tgl_awal);
		
		$akhir=strtotime($request->tgl_akhir);
		$inputan[0]= $request->tgl_awal;
		$inputan[1]= $request->tgl_akhir;
		
		
		
		$b = data_pelanggan::all();
		$a = 0;
		foreach ($b as $ref2) {
			
			$item  = substr($ref2->tanggal_survei,0,10);
			$tanggal = strtotime($item);
			
			
			
			if($tanggal>=$awal){
				if($tanggal<=$akhir){
					$list[$a]=$ref2;
					//echo $list[$a]."<br>"."<br>";
					$a=$a+1;
				
				}
			
			}
			
			
		}
	
		
		
		if($a==0){
				$list = data_dummy::all();
			
		}
		
		
		return view('outputpelanggan2', compact('list','inputan'));
		
	}
	
	
	  public function import(Request $request)
    {
      if($request->file('sample_file'))
      {
                $path = $request->file('sample_file')->getRealPath();
                $data = Excel::load($path, function($reader)
          {
                })->get();

          if(!empty($data) && $data->count())
          {
            foreach ($data->toArray() as $value)
            {
              if(!empty($value))
              {
              	if($value['jml_ct']== null){
              		$value['jml_ct'] = "-";
              	}
              	if($value['idpel']== null){
              		$value['idpel'] = "-";
              	}
				if($value['thbl']== null){
              		$value['thbl'] = "-";
              	}
				if($value['unitup']== null){
              		$value['unitup'] = "-";
              	}
				if($value['nomor_meter']== null){
              		$value['nomor_meter'] = "-";
              	}
				if($value['unitupi']== null){
              		$value['unitupi'] = "-";
              	}
				if($value['unitap']== null){
              		$value['unitap'] = "-";
              	}
				if($value['daya']== null){
              		$value['daya'] = "-";
              	}
				if($value['tarif']== null){
              		$value['tarif'] = "-";
              	}
				if($value['kriteria']== null){
              		$value['kriteria'] = "-";
              	}
				if($value['nama']== null){
              		$value['nama'] = "-";
              	}
				if($value['alamat']== null){
              		$value['alamat'] = "-";
              	}
				if($value['kode_gardu']== null){
              		$value['kode_gardu'] = "-";
              	}
				if($value['no_tiang']== null){
              		$value['no_tiang'] = "-";
              	}
				if($value['kddk']== null){
              		$value['kddk'] = "-";
              	}
				if($value['koordinat_x']== null){
              		$value['koordinat_x'] = "0";
              	}elseif(substr($value['koordinat_x'],0,1) != "-"){
              		$value['koordinat_x'] = "0";
					$value['koordinat_y'] = "0";
              	}
				
				if($value['koordinat_y']== null){
              		$value['koordinat_y'] = "0";
              	}
				if($value['merek_meter']== null){
              		$value['merek_meter'] = "-";
              	}
				if($value['thn_buat_meter']== null){
              		$value['thn_buat_meter'] = "-";
              	}
				if($value['krn']== null){
              		$value['krn'] = "-";
              	}
				if($value['tglpasang_kwh']== null){
              		$value['tglpasang_kwh'] = "-";
              	}
				if($value['jenis_mk']== null){
              		$value['jenis_mk'] = "-";
              	}
				if($value['jml_p2tl']== null){
              		$value['jml_p2tl'] = "-";
              	}
				if($value['beli_token_akhir']== null){
              		$value['beli_token_akhir'] = "-";
              	}
				if($value['user_petugas_ct']== null){
              		$value['user_petugas_ct'] = "-";
              	}
				if($value['nama_petugas_ct']== null){
              		$value['nama_petugas_ct'] = "-";
              	}
				if($value['dlpd']== null){
              		$value['dlpd'] = "-";
              	}
				if($value['keterangan']== null){
              		$value['keterangan'] = "-";
              	}
				
				$pelanggan = data_pelanggan::find($value['idpel']);
				if($pelanggan == null){
					$dataArray[] =
                		[
                   			  'idpel' => $value['idpel'], 
                    		  'thbl' => $value['thbl'],
                    		  'unitup' => $value['unitup'],
                    		  'nomor_meter' => $value['nomor_meter'],
                    		  'unitupi' => $value['unitupi'],
                    		  'unitap' => $value['unitap'],
                    		  'daya' => $value['daya'],
                    		  'tarif' => $value['tarif'],
                    		  'kriteria' => $value['kriteria'],
                    		  'nama' => $value['nama'],
                    		  'alamat' => $value['alamat'],
                    		  
                    		  'kode_gardu' => $value['kode_gardu'],
                    		  'no_tiang' => $value['no_tiang'],
                    		  'kddk' => $value['kddk'],
                    		  'koordinat_x' => $value['koordinat_x'],
                    		  'koordinat_y' => $value['koordinat_y'],
                    		  'merek_meter' => $value['merek_meter'],
                    		  'thn_buat_meter' => $value['thn_buat_meter'],
                    		  'krn' => $value['krn'],
                    		  'tglpasang_kwh' => $value['tglpasang_kwh'],
                    		  'jenis_mk' => $value['jenis_mk'],
                    		  'jml_p2tl' => $value['jml_p2tl'],
                    		  'beli_token_akhir' => $value['beli_token_akhir'],
                    		  'user_petugas_ct' => $value['user_petugas_ct'],
                    		  
                    		  'nama_petugas_ct' => $value['nama_petugas_ct'],
                    		  'jml_ct' => $value['jml_ct'],
                    		  'dlpd' => $value['dlpd'],
                    		  'keterangan' => $value['keterangan'],
                    		  'petugas' => "-",
                    		  'hasil_survei' => "-",
							  'status_survei' => "0",
							  'tanggal_survei' => "0",
							  'foto_survei' => "-",
							  'barcode' => "tidak ada"
							  
                		];
					
					
				}else{
					if($pelanggan->status_survei == "1"){
					
						$today = date ("Y-m-d");
						$tanggal = date('Y-m-d', strtotime('+90 days', strtotime($pelanggan->tanggal_survei)));
						//echo $tanggal; 
						$tgl_survei = strtotime($tanggal); 
						$tgl_today = strtotime($today); 
						if ($tgl_today > $tgl_survei){
							$pelanggan->status_survei = "0"; 
							$pelanggan->save();
							
						}	
					}
					
					
					
					
					
				}
				
				
		
		 
		 
		 
	 
	
				
				
				
				
               
				
              }
          }


		   
		   

				
          if(!empty($dataArray))
          {
             data_pelanggan::insert($dataArray);
			 
			 
			     			$posts = \DB::select('select * from tb_login where unitup = ?', array('42210'));
		$dummy = \DB::select('select * from dummy2');
		foreach ($dummy as $dummy2) {
			$petugas_biak[0] = $dummy2->email;
			
		}
		$jml_biak= 0;
		foreach ($posts as $post) {
			if($posts != null){
				
				$petugas_biak[$jml_biak]= $post->email;
				$jml_biak = $jml_biak + 1;		
			}
		}
		 $pel = \DB::select('select * from tb_pelanggan where unitup = ? && petugas = ?', array('42210','-'));	
		 $bufferbiak = 0;
		 foreach ($pel as $biak) {
			 if($biak != null){	
			 	$pelanggan = data_pelanggan::find($biak->idpel);
				$pelanggan->petugas = $petugas_biak[$bufferbiak];
				$pelanggan->save();
				 
				echo $petugas_biak[$bufferbiak]."<br>";
				$bufferbiak = $bufferbiak + 1;
				if($bufferbiak >= $jml_biak){
					 $bufferbiak = 0;
				} 
			}
    	}	

		$posts = \DB::select('select * from tb_login where unitup = ?', array('42230'));
		$dummy = \DB::select('select * from dummy2');
		foreach ($dummy as $dummy2) {
			$petugas_biak[0] = $dummy2->email;
			
		}
		$jml_biak= 0;
		foreach ($posts as $post) {
			if($posts != null){
				
				$petugas_biak[$jml_biak]= $post->email;
				$jml_biak = $jml_biak + 1;		
			}
		}
		 $pel = \DB::select('select * from tb_pelanggan where unitup = ? && petugas = ?', array('42230','-'));	
		 $bufferbiak = 0;
		 foreach ($pel as $biak) {
			 if($biak != null){	
			 	$pelanggan = data_pelanggan::find($biak->idpel);
				$pelanggan->petugas = $petugas_biak[$bufferbiak];
				$pelanggan->save();
				 
				echo $petugas_biak[$bufferbiak]."<br>";
				$bufferbiak = $bufferbiak + 1;
				if($bufferbiak >= $jml_biak){
					 $bufferbiak = 0;
				} 
			}
    	}
		 
		 
		 
		$posts = \DB::select('select * from tb_login where unitup = ?', array('42220'));
		$dummy = \DB::select('select * from dummy2');
		foreach ($dummy as $dummy2) {
			$petugas_biak[0] = $dummy2->email;
			
		}
		$jml_biak= 0;
		foreach ($posts as $post) {
			if($posts != null){
				
				$petugas_biak[$jml_biak]= $post->email;
				$jml_biak = $jml_biak + 1;		
			}
		}
		 $pel = \DB::select('select * from tb_pelanggan where unitup = ? && petugas = ?', array('42220','-'));	
		 $bufferbiak = 0;
		 foreach ($pel as $biak) {
			 if($biak != null){	
			 	$pelanggan = data_pelanggan::find($biak->idpel);
				$pelanggan->petugas = $petugas_biak[$bufferbiak];
				$pelanggan->save();
				 
				echo $petugas_biak[$bufferbiak]."<br>";
				$bufferbiak = $bufferbiak + 1;
				if($bufferbiak >= $jml_biak){
					 $bufferbiak = 0;
				} 
			}
    	} 
		 
		 
		$posts = \DB::select('select * from tb_login where unitup = ?', array('42240'));
		$dummy = \DB::select('select * from dummy2');
		foreach ($dummy as $dummy2) {
			$petugas_biak[0] = $dummy2->email;
			
		}
		$jml_biak= 0;
		foreach ($posts as $post) {
			if($posts != null){
				
				$petugas_biak[$jml_biak]= $post->email;
				$jml_biak = $jml_biak + 1;		
			}
		}
		 $pel = \DB::select('select * from tb_pelanggan where unitup = ? && petugas = ?', array('42240','-'));	
		 $bufferbiak = 0;
		 foreach ($pel as $biak) {
			 if($biak != null){	
			 	$pelanggan = data_pelanggan::find($biak->idpel);
				$pelanggan->petugas = $petugas_biak[$bufferbiak];
				$pelanggan->save();
				 
				echo $petugas_biak[$bufferbiak]."<br>";
				$bufferbiak = $bufferbiak + 1;
				if($bufferbiak >= $jml_biak){
					 $bufferbiak = 0;
				} 
			}
    	} 
		 
		 
		$posts = \DB::select('select * from tb_login where unitup = ?', array('42110'));
		$dummy = \DB::select('select * from dummy2');
		foreach ($dummy as $dummy2) {
			$petugas_biak[0] = $dummy2->email;
			
		}
		$jml_biak= 0;
		foreach ($posts as $post) {
			if($posts != null){
				
				$petugas_biak[$jml_biak]= $post->email;
				$jml_biak = $jml_biak + 1;		
			}
		}
		 $pel = \DB::select('select * from tb_pelanggan where unitup = ? && petugas = ?', array('42110','-'));	
		 $bufferbiak = 0;
		 foreach ($pel as $biak) {
			 if($biak != null){	
			 	$pelanggan = data_pelanggan::find($biak->idpel);
				$pelanggan->petugas = $petugas_biak[$bufferbiak];
				$pelanggan->save();
				 
				echo $petugas_biak[$bufferbiak]."<br>";
				$bufferbiak = $bufferbiak + 1;
				if($bufferbiak >= $jml_biak){
					 $bufferbiak = 0;
				} 
			}
    	}
    	
		
		$posts = \DB::select('select * from tb_login where unitup = ?', array('42120'));
		$dummy = \DB::select('select * from dummy2');
		foreach ($dummy as $dummy2) {
			$petugas_biak[0] = $dummy2->email;
			
		}
		$jml_biak= 0;
		foreach ($posts as $post) {
			if($posts != null){
				
				$petugas_biak[$jml_biak]= $post->email;
				$jml_biak = $jml_biak + 1;		
			}
		}
		 $pel = \DB::select('select * from tb_pelanggan where unitup = ? && petugas = ?', array('42120','-'));	
		 $bufferbiak = 0;
		 foreach ($pel as $biak) {
			 if($biak != null){	
			 	$pelanggan = data_pelanggan::find($biak->idpel);
				$pelanggan->petugas = $petugas_biak[$bufferbiak];
				$pelanggan->save();
				 
				echo $petugas_biak[$bufferbiak]."<br>";
				$bufferbiak = $bufferbiak + 1;
				if($bufferbiak >= $jml_biak){
					 $bufferbiak = 0;
				} 
			}
    	}
    	
		
		
		$posts = \DB::select('select * from tb_login where unitup = ?', array('42130'));
		$dummy = \DB::select('select * from dummy2');
		foreach ($dummy as $dummy2) {
			$petugas_biak[0] = $dummy2->email;
			
		}
		$jml_biak= 0;
		foreach ($posts as $post) {
			if($posts != null){
				
				$petugas_biak[$jml_biak]= $post->email;
				$jml_biak = $jml_biak + 1;		
			}
		}
		 $pel = \DB::select('select * from tb_pelanggan where unitup = ? && petugas = ?', array('42130','-'));	
		 $bufferbiak = 0;
		 foreach ($pel as $biak) {
			 if($biak != null){	
			 	$pelanggan = data_pelanggan::find($biak->idpel);
				$pelanggan->petugas = $petugas_biak[$bufferbiak];
				$pelanggan->save();
				 
				echo $petugas_biak[$bufferbiak]."<br>";
				$bufferbiak = $bufferbiak + 1;
				if($bufferbiak >= $jml_biak){
					 $bufferbiak = 0;
				} 
			}
    	} 
	
	
		$posts = \DB::select('select * from tb_login where unitup = ?', array('42140'));
		$dummy = \DB::select('select * from dummy2');
		foreach ($dummy as $dummy2) {
			$petugas_biak[0] = $dummy2->email;
			
		}
		$jml_biak= 0;
		foreach ($posts as $post) {
			if($posts != null){
				
				$petugas_biak[$jml_biak]= $post->email;
				$jml_biak = $jml_biak + 1;		
			}
		}
		 $pel = \DB::select('select * from tb_pelanggan where unitup = ? && petugas = ?', array('42140','-'));	
		 $bufferbiak = 0;
		 foreach ($pel as $biak) {
			 if($biak != null){	
			 	$pelanggan = data_pelanggan::find($biak->idpel);
				$pelanggan->petugas = $petugas_biak[$bufferbiak];
				$pelanggan->save();
				 
				echo $petugas_biak[$bufferbiak]."<br>";
				$bufferbiak = $bufferbiak + 1;
				if($bufferbiak >= $jml_biak){
					 $bufferbiak = 0;
				} 
			}
    	}
    	
		
		$posts = \DB::select('select * from tb_login where unitup = ?', array('42160'));
		$dummy = \DB::select('select * from dummy2');
		foreach ($dummy as $dummy2) {
			$petugas_biak[0] = $dummy2->email;
			
		}
		$jml_biak= 0;
		foreach ($posts as $post) {
			if($posts != null){
				
				$petugas_biak[$jml_biak]= $post->email;
				$jml_biak = $jml_biak + 1;		
			}
		}
		 $pel = \DB::select('select * from tb_pelanggan where unitup = ? && petugas = ?', array('42160','-'));	
		 $bufferbiak = 0;
		 foreach ($pel as $biak) {
			 if($biak != null){	
			 	$pelanggan = data_pelanggan::find($biak->idpel);
				$pelanggan->petugas = $petugas_biak[$bufferbiak];
				$pelanggan->save();
				 
				echo $petugas_biak[$bufferbiak]."<br>";
				$bufferbiak = $bufferbiak + 1;
				if($bufferbiak >= $jml_biak){
					 $bufferbiak = 0;
				} 
			}
    	} 
		 
		 
		 $posts = \DB::select('select * from tb_login where unitup = ?', array('42180'));
		$dummy = \DB::select('select * from dummy2');
		foreach ($dummy as $dummy2) {
			$petugas_biak[0] = $dummy2->email;
			
		}
		$jml_biak= 0;
		foreach ($posts as $post) {
			if($posts != null){
				
				$petugas_biak[$jml_biak]= $post->email;
				$jml_biak = $jml_biak + 1;		
			}
		}
		 $pel = \DB::select('select * from tb_pelanggan where unitup = ? && petugas = ?', array('42180','-'));	
		 $bufferbiak = 0;
		 foreach ($pel as $biak) {
			 if($biak != null){	
			 	$pelanggan = data_pelanggan::find($biak->idpel);
				$pelanggan->petugas = $petugas_biak[$bufferbiak];
				$pelanggan->save();
				 
				echo $petugas_biak[$bufferbiak]."<br>";
				$bufferbiak = $bufferbiak + 1;
				if($bufferbiak >= $jml_biak){
					 $bufferbiak = 0;
				} 
			}
    	}
			 
			 
			 
			 
             alert()->success('Berhasil Diimport');
             return redirect('/output_pelanggan');
			 
           }
		  else{
		  	
			    			$posts = \DB::select('select * from tb_login where unitup = ?', array('42210'));
		$dummy = \DB::select('select * from dummy2');
		foreach ($dummy as $dummy2) {
			$petugas_biak[0] = $dummy2->email;
			
		}
		$jml_biak= 0;
		foreach ($posts as $post) {
			if($posts != null){
				
				$petugas_biak[$jml_biak]= $post->email;
				$jml_biak = $jml_biak + 1;		
			}
		}
		 $pel = \DB::select('select * from tb_pelanggan where unitup = ? && petugas = ?', array('42210','-'));	
		 $bufferbiak = 0;
		 foreach ($pel as $biak) {
			 if($biak != null){	
			 	$pelanggan = data_pelanggan::find($biak->idpel);
				$pelanggan->petugas = $petugas_biak[$bufferbiak];
				$pelanggan->save();
				 
				echo $petugas_biak[$bufferbiak]."<br>";
				$bufferbiak = $bufferbiak + 1;
				if($bufferbiak >= $jml_biak){
					 $bufferbiak = 0;
				} 
			}
    	}	

		$posts = \DB::select('select * from tb_login where unitup = ?', array('42230'));
		$dummy = \DB::select('select * from dummy2');
		foreach ($dummy as $dummy2) {
			$petugas_biak[0] = $dummy2->email;
			
		}
		$jml_biak= 0;
		foreach ($posts as $post) {
			if($posts != null){
				
				$petugas_biak[$jml_biak]= $post->email;
				$jml_biak = $jml_biak + 1;		
			}
		}
		 $pel = \DB::select('select * from tb_pelanggan where unitup = ? && petugas = ?', array('42230','-'));	
		 $bufferbiak = 0;
		 foreach ($pel as $biak) {
			 if($biak != null){	
			 	$pelanggan = data_pelanggan::find($biak->idpel);
				$pelanggan->petugas = $petugas_biak[$bufferbiak];
				$pelanggan->save();
				 
				echo $petugas_biak[$bufferbiak]."<br>";
				$bufferbiak = $bufferbiak + 1;
				if($bufferbiak >= $jml_biak){
					 $bufferbiak = 0;
				} 
			}
    	}
		 
		 
		 
		$posts = \DB::select('select * from tb_login where unitup = ?', array('42220'));
		$dummy = \DB::select('select * from dummy2');
		foreach ($dummy as $dummy2) {
			$petugas_biak[0] = $dummy2->email;
			
		}
		$jml_biak= 0;
		foreach ($posts as $post) {
			if($posts != null){
				
				$petugas_biak[$jml_biak]= $post->email;
				$jml_biak = $jml_biak + 1;		
			}
		}
		 $pel = \DB::select('select * from tb_pelanggan where unitup = ? && petugas = ?', array('42220','-'));	
		 $bufferbiak = 0;
		 foreach ($pel as $biak) {
			 if($biak != null){	
			 	$pelanggan = data_pelanggan::find($biak->idpel);
				$pelanggan->petugas = $petugas_biak[$bufferbiak];
				$pelanggan->save();
				 
				echo $petugas_biak[$bufferbiak]."<br>";
				$bufferbiak = $bufferbiak + 1;
				if($bufferbiak >= $jml_biak){
					 $bufferbiak = 0;
				} 
			}
    	} 
		 
		 
		$posts = \DB::select('select * from tb_login where unitup = ?', array('42240'));
		$dummy = \DB::select('select * from dummy2');
		foreach ($dummy as $dummy2) {
			$petugas_biak[0] = $dummy2->email;
			
		}
		$jml_biak= 0;
		foreach ($posts as $post) {
			if($posts != null){
				
				$petugas_biak[$jml_biak]= $post->email;
				$jml_biak = $jml_biak + 1;		
			}
		}
		 $pel = \DB::select('select * from tb_pelanggan where unitup = ? && petugas = ?', array('42240','-'));	
		 $bufferbiak = 0;
		 foreach ($pel as $biak) {
			 if($biak != null){	
			 	$pelanggan = data_pelanggan::find($biak->idpel);
				$pelanggan->petugas = $petugas_biak[$bufferbiak];
				$pelanggan->save();
				 
				echo $petugas_biak[$bufferbiak]."<br>";
				$bufferbiak = $bufferbiak + 1;
				if($bufferbiak >= $jml_biak){
					 $bufferbiak = 0;
				} 
			}
    	} 
		 
		 
		$posts = \DB::select('select * from tb_login where unitup = ?', array('42110'));
		$dummy = \DB::select('select * from dummy2');
		foreach ($dummy as $dummy2) {
			$petugas_biak[0] = $dummy2->email;
			
		}
		$jml_biak= 0;
		foreach ($posts as $post) {
			if($posts != null){
				
				$petugas_biak[$jml_biak]= $post->email;
				$jml_biak = $jml_biak + 1;		
			}
		}
		 $pel = \DB::select('select * from tb_pelanggan where unitup = ? && petugas = ?', array('42110','-'));	
		 $bufferbiak = 0;
		 foreach ($pel as $biak) {
			 if($biak != null){	
			 	$pelanggan = data_pelanggan::find($biak->idpel);
				$pelanggan->petugas = $petugas_biak[$bufferbiak];
				$pelanggan->save();
				 
				echo $petugas_biak[$bufferbiak]."<br>";
				$bufferbiak = $bufferbiak + 1;
				if($bufferbiak >= $jml_biak){
					 $bufferbiak = 0;
				} 
			}
    	}
    	
		
		$posts = \DB::select('select * from tb_login where unitup = ?', array('42120'));
		$dummy = \DB::select('select * from dummy2');
		foreach ($dummy as $dummy2) {
			$petugas_biak[0] = $dummy2->email;
			
		}
		$jml_biak= 0;
		foreach ($posts as $post) {
			if($posts != null){
				
				$petugas_biak[$jml_biak]= $post->email;
				$jml_biak = $jml_biak + 1;		
			}
		}
		 $pel = \DB::select('select * from tb_pelanggan where unitup = ? && petugas = ?', array('42120','-'));	
		 $bufferbiak = 0;
		 foreach ($pel as $biak) {
			 if($biak != null){	
			 	$pelanggan = data_pelanggan::find($biak->idpel);
				$pelanggan->petugas = $petugas_biak[$bufferbiak];
				$pelanggan->save();
				 
				echo $petugas_biak[$bufferbiak]."<br>";
				$bufferbiak = $bufferbiak + 1;
				if($bufferbiak >= $jml_biak){
					 $bufferbiak = 0;
				} 
			}
    	}
    	
		
		
		$posts = \DB::select('select * from tb_login where unitup = ?', array('42130'));
		$dummy = \DB::select('select * from dummy2');
		foreach ($dummy as $dummy2) {
			$petugas_biak[0] = $dummy2->email;
			
		}
		$jml_biak= 0;
		foreach ($posts as $post) {
			if($posts != null){
				
				$petugas_biak[$jml_biak]= $post->email;
				$jml_biak = $jml_biak + 1;		
			}
		}
		 $pel = \DB::select('select * from tb_pelanggan where unitup = ? && petugas = ?', array('42130','-'));	
		 $bufferbiak = 0;
		 foreach ($pel as $biak) {
			 if($biak != null){	
			 	$pelanggan = data_pelanggan::find($biak->idpel);
				$pelanggan->petugas = $petugas_biak[$bufferbiak];
				$pelanggan->save();
				 
				echo $petugas_biak[$bufferbiak]."<br>";
				$bufferbiak = $bufferbiak + 1;
				if($bufferbiak >= $jml_biak){
					 $bufferbiak = 0;
				} 
			}
    	} 
	
	
		$posts = \DB::select('select * from tb_login where unitup = ?', array('42140'));
		$dummy = \DB::select('select * from dummy2');
		foreach ($dummy as $dummy2) {
			$petugas_biak[0] = $dummy2->email;
			
		}
		$jml_biak= 0;
		foreach ($posts as $post) {
			if($posts != null){
				
				$petugas_biak[$jml_biak]= $post->email;
				$jml_biak = $jml_biak + 1;		
			}
		}
		 $pel = \DB::select('select * from tb_pelanggan where unitup = ? && petugas = ?', array('42140','-'));	
		 $bufferbiak = 0;
		 foreach ($pel as $biak) {
			 if($biak != null){	
			 	$pelanggan = data_pelanggan::find($biak->idpel);
				$pelanggan->petugas = $petugas_biak[$bufferbiak];
				$pelanggan->save();
				 
				echo $petugas_biak[$bufferbiak]."<br>";
				$bufferbiak = $bufferbiak + 1;
				if($bufferbiak >= $jml_biak){
					 $bufferbiak = 0;
				} 
			}
    	}
    	
		
		$posts = \DB::select('select * from tb_login where unitup = ?', array('42160'));
		$dummy = \DB::select('select * from dummy2');
		foreach ($dummy as $dummy2) {
			$petugas_biak[0] = $dummy2->email;
			
		}
		$jml_biak= 0;
		foreach ($posts as $post) {
			if($posts != null){
				
				$petugas_biak[$jml_biak]= $post->email;
				$jml_biak = $jml_biak + 1;		
			}
		}
		 $pel = \DB::select('select * from tb_pelanggan where unitup = ? && petugas = ?', array('42160','-'));	
		 $bufferbiak = 0;
		 foreach ($pel as $biak) {
			 if($biak != null){	
			 	$pelanggan = data_pelanggan::find($biak->idpel);
				$pelanggan->petugas = $petugas_biak[$bufferbiak];
				$pelanggan->save();
				 
				echo $petugas_biak[$bufferbiak]."<br>";
				$bufferbiak = $bufferbiak + 1;
				if($bufferbiak >= $jml_biak){
					 $bufferbiak = 0;
				} 
			}
    	} 
		 
		 
		 $posts = \DB::select('select * from tb_login where unitup = ?', array('42180'));
		$dummy = \DB::select('select * from dummy2');
		foreach ($dummy as $dummy2) {
			$petugas_biak[0] = $dummy2->email;
			
		}
		$jml_biak= 0;
		foreach ($posts as $post) {
			if($posts != null){
				
				$petugas_biak[$jml_biak]= $post->email;
				$jml_biak = $jml_biak + 1;		
			}
		}
		 $pel = \DB::select('select * from tb_pelanggan where unitup = ? && petugas = ?', array('42180','-'));	
		 $bufferbiak = 0;
		 foreach ($pel as $biak) {
			 if($biak != null){	
			 	$pelanggan = data_pelanggan::find($biak->idpel);
				$pelanggan->petugas = $petugas_biak[$bufferbiak];
				$pelanggan->save();
				 
				echo $petugas_biak[$bufferbiak]."<br>";
				$bufferbiak = $bufferbiak + 1;
				if($bufferbiak >= $jml_biak){
					 $bufferbiak = 0;
				} 
			}
    	}
			
		  	alert()->success('Berhasil Diimport');	
		  	return redirect('/output_pelanggan');
			
		  }
         }
       }
    }


 	

	
	
    public function create()
    {
        //
        return view('outputpelanggan1');
    }
	
	

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    // public function store(Request $request)
    // {
        // //
//         
        // $proyek = new data_proyek();
        // $proyek->id_proyek= $request->id_proyek;
        // $proyek->nama_proyek = $request->nama_proyek;
        // $proyek->rencana_anggaran = $request->rencana_anggaran;
		// $proyek->jenis_anggaran = $request->jenis_anggaran;
		// $proyek->tahun_imple= $request->tahun_imple;
		// $proyek->tanggal_kontrak = $request->tanggal_kontrak;
		// $proyek->realisasi_biaya = $request->realisasi_biaya;
		// $proyek->vendor_pelaksana = $request->vendor_pelaksana;
		// $proyek->target_selesai = $request->target_selesai;
		// $proyek->pic_pln = $request->pic_pln;
		// $proyek->status_proyek = $request->status_proyek;
// 		
        // $proyek->save();
// 		
		// alert()->success('Berhasil Disimpan');	
// 
        // return redirect('/output_proyek')->with('sukses', 'Data Berhasil Disimpan');
    // }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
     
     
   
     
  
     
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
 
     
    
	public function hapuspelanggansurvei($idpel)
    {
        //
        $data = data_pelanggan::find($idpel);
		// $pengujian=$id;
		
	  	if($data->foto_survei != "-")
	  	{
	  		// echo $cari->id." ".$cari->foto."</br>";
	  		$dest=base_path().'../../../belajarandro/Foto/'.$data->foto_survei;
			unlink($dest);
			$data->delete();
			alert()->success('Berhasil Dihapus');	
			return redirect('/output_pelanggansurvei');
					
	  	}else{
	  		$data->delete();
			alert()->success('Berhasil Dihapus');	
			return redirect('/output_pelanggan');
			
	  	}
		
		
	  					
	  		
		
        //return view('editpelanggansurvei', compact('data'));
		//dd($data);
    }
	

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function updatepelanggansurvei(Request $request, $idpel)
    {
       $pelanggan = data_pelanggan::find($idpel);
       $pelanggan->idpel = $request->idpel; 
       $pelanggan->thbl = $request->thbl;
       $pelanggan->unitup = $request->unitup;
       $pelanggan->nomor_meter = $request->nomor_meter;
       $pelanggan->unitupi = $request->unitupi;
       $pelanggan->unitap = $request->unitap;
       $pelanggan->daya = $request->daya;
       $pelanggan->tarif = $request->tarif;
       $pelanggan->kriteria = $request->kriteria;
       $pelanggan->nama = $request->nama;
       $pelanggan->alamat = $request->alamat;
                    		  
       $pelanggan->kode_gardu = $request->kode_gardu;
       $pelanggan->no_tiang = $request->no_tiang;
       $pelanggan->kddk = $request->kddk;
       $pelanggan->koordinat_x = $request->koordinat_x;
       $pelanggan->koordinat_y = $request->koordinat_y;
       $pelanggan->merek_meter = $request->merek_meter;
       $pelanggan->thn_buat_meter = $request->thn_buat_meter;
       $pelanggan->krn = $request->krn;
       $pelanggan->tglpasang_kwh = $request->tglpasang_kwh;
       $pelanggan->jenis_mk = $request->jenis_mk;
       $pelanggan->jml_p2tl = $request->jml_p2tl;
       $pelanggan->beli_token_akhir = $request->beli_token_akhir;
       $pelanggan->user_petugas_ct = $request->user_petugas_ct;
                    		  
       $pelanggan->nama_petugas_ct = $request->nama_petugas_ct;
       $pelanggan->jml_ct = $request->jml_ct;
       $pelanggan->dlpd = $request->dlpd;
       $pelanggan->keterangan = $request->keterangan;
       $pelanggan->petugas = $request->petugas;
       $pelanggan->hasil_survei = $request->hasil_survei;
	   $pelanggan->status_survei = $request->status_survei;
	   $pelanggan->tanggal_survei = $request->tanggal_survei;
	   $pelanggan->barcode = $request->barcode;
	   $pelanggan->foto_survei = "-";
	   
	   
	   $file2 = $request->file('foto');
		
		$dest2=base_path().'../../../belajarandro/Foto';
		if($file2!=null){
			//$nama2=$x[2];
			//unlink(base_path().'../belajarandro/Foto/'.$request->idpel.".jpeg");  
			$ext2 = $file2->getClientOriginalExtension();
	        $newName2 = $request->idpel.".jpeg";
			$file2->move($dest2,$newName2);
			$pelanggan->foto_survei = $request->idpel.".jpeg";
		}
        
        
		
        $pelanggan->save();
		
		alert()->success('Berhasil Diperbarui');	
		
		return redirect('/output_pelanggansurvei');
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
     
     
    
     
     
     public function penugasan()
    {
    			$posts = \DB::select('select * from tb_login where unitup = ?', array('42210'));
		$dummy = \DB::select('select * from dummy2');
		foreach ($dummy as $dummy2) {
			$petugas_biak[0] = $dummy2->email;
			
		}
		$jml_biak= 0;
		foreach ($posts as $post) {
			if($posts != null){
				
				$petugas_biak[$jml_biak]= $post->email;
				$jml_biak = $jml_biak + 1;		
			}
		}
		 $pel = \DB::select('select * from tb_pelanggan where unitup = ? && petugas = ?', array('42210','-'));	
		 $bufferbiak = 0;
		 foreach ($pel as $biak) {
			 if($biak != null){	
			 	$pelanggan = data_pelanggan::find($biak->idpel);
				$pelanggan->petugas = $petugas_biak[$bufferbiak];
				$pelanggan->save();
				 
				echo $petugas_biak[$bufferbiak]."<br>";
				$bufferbiak = $bufferbiak + 1;
				if($bufferbiak >= $jml_biak){
					 $bufferbiak = 0;
				} 
			}
    	}	

		$posts = \DB::select('select * from tb_login where unitup = ?', array('42230'));
		$dummy = \DB::select('select * from dummy2');
		foreach ($dummy as $dummy2) {
			$petugas_biak[0] = $dummy2->email;
			
		}
		$jml_biak= 0;
		foreach ($posts as $post) {
			if($posts != null){
				
				$petugas_biak[$jml_biak]= $post->email;
				$jml_biak = $jml_biak + 1;		
			}
		}
		 $pel = \DB::select('select * from tb_pelanggan where unitup = ? && petugas = ?', array('42230','-'));	
		 $bufferbiak = 0;
		 foreach ($pel as $biak) {
			 if($biak != null){	
			 	$pelanggan = data_pelanggan::find($biak->idpel);
				$pelanggan->petugas = $petugas_biak[$bufferbiak];
				$pelanggan->save();
				 
				echo $petugas_biak[$bufferbiak]."<br>";
				$bufferbiak = $bufferbiak + 1;
				if($bufferbiak >= $jml_biak){
					 $bufferbiak = 0;
				} 
			}
    	}
		 
		 
		 
		$posts = \DB::select('select * from tb_login where unitup = ?', array('42220'));
		$dummy = \DB::select('select * from dummy2');
		foreach ($dummy as $dummy2) {
			$petugas_biak[0] = $dummy2->email;
			
		}
		$jml_biak= 0;
		foreach ($posts as $post) {
			if($posts != null){
				
				$petugas_biak[$jml_biak]= $post->email;
				$jml_biak = $jml_biak + 1;		
			}
		}
		 $pel = \DB::select('select * from tb_pelanggan where unitup = ? && petugas = ?', array('42220','-'));	
		 $bufferbiak = 0;
		 foreach ($pel as $biak) {
			 if($biak != null){	
			 	$pelanggan = data_pelanggan::find($biak->idpel);
				$pelanggan->petugas = $petugas_biak[$bufferbiak];
				$pelanggan->save();
				 
				echo $petugas_biak[$bufferbiak]."<br>";
				$bufferbiak = $bufferbiak + 1;
				if($bufferbiak >= $jml_biak){
					 $bufferbiak = 0;
				} 
			}
    	} 
		 
		 
		$posts = \DB::select('select * from tb_login where unitup = ?', array('42240'));
		$dummy = \DB::select('select * from dummy2');
		foreach ($dummy as $dummy2) {
			$petugas_biak[0] = $dummy2->email;
			
		}
		$jml_biak= 0;
		foreach ($posts as $post) {
			if($posts != null){
				
				$petugas_biak[$jml_biak]= $post->email;
				$jml_biak = $jml_biak + 1;		
			}
		}
		 $pel = \DB::select('select * from tb_pelanggan where unitup = ? && petugas = ?', array('42240','-'));	
		 $bufferbiak = 0;
		 foreach ($pel as $biak) {
			 if($biak != null){	
			 	$pelanggan = data_pelanggan::find($biak->idpel);
				$pelanggan->petugas = $petugas_biak[$bufferbiak];
				$pelanggan->save();
				 
				echo $petugas_biak[$bufferbiak]."<br>";
				$bufferbiak = $bufferbiak + 1;
				if($bufferbiak >= $jml_biak){
					 $bufferbiak = 0;
				} 
			}
    	} 
		 
		 
		$posts = \DB::select('select * from tb_login where unitup = ?', array('42110'));
		$dummy = \DB::select('select * from dummy2');
		foreach ($dummy as $dummy2) {
			$petugas_biak[0] = $dummy2->email;
			
		}
		$jml_biak= 0;
		foreach ($posts as $post) {
			if($posts != null){
				
				$petugas_biak[$jml_biak]= $post->email;
				$jml_biak = $jml_biak + 1;		
			}
		}
		 $pel = \DB::select('select * from tb_pelanggan where unitup = ? && petugas = ?', array('42110','-'));	
		 $bufferbiak = 0;
		 foreach ($pel as $biak) {
			 if($biak != null){	
			 	$pelanggan = data_pelanggan::find($biak->idpel);
				$pelanggan->petugas = $petugas_biak[$bufferbiak];
				$pelanggan->save();
				 
				echo $petugas_biak[$bufferbiak]."<br>";
				$bufferbiak = $bufferbiak + 1;
				if($bufferbiak >= $jml_biak){
					 $bufferbiak = 0;
				} 
			}
    	}
    	
		
		$posts = \DB::select('select * from tb_login where unitup = ?', array('42120'));
		$dummy = \DB::select('select * from dummy2');
		foreach ($dummy as $dummy2) {
			$petugas_biak[0] = $dummy2->email;
			
		}
		$jml_biak= 0;
		foreach ($posts as $post) {
			if($posts != null){
				
				$petugas_biak[$jml_biak]= $post->email;
				$jml_biak = $jml_biak + 1;		
			}
		}
		 $pel = \DB::select('select * from tb_pelanggan where unitup = ? && petugas = ?', array('42120','-'));	
		 $bufferbiak = 0;
		 foreach ($pel as $biak) {
			 if($biak != null){	
			 	$pelanggan = data_pelanggan::find($biak->idpel);
				$pelanggan->petugas = $petugas_biak[$bufferbiak];
				$pelanggan->save();
				 
				echo $petugas_biak[$bufferbiak]."<br>";
				$bufferbiak = $bufferbiak + 1;
				if($bufferbiak >= $jml_biak){
					 $bufferbiak = 0;
				} 
			}
    	}
    	
		
		
		$posts = \DB::select('select * from tb_login where unitup = ?', array('42130'));
		$dummy = \DB::select('select * from dummy2');
		foreach ($dummy as $dummy2) {
			$petugas_biak[0] = $dummy2->email;
			
		}
		$jml_biak= 0;
		foreach ($posts as $post) {
			if($posts != null){
				
				$petugas_biak[$jml_biak]= $post->email;
				$jml_biak = $jml_biak + 1;		
			}
		}
		 $pel = \DB::select('select * from tb_pelanggan where unitup = ? && petugas = ?', array('42130','-'));	
		 $bufferbiak = 0;
		 foreach ($pel as $biak) {
			 if($biak != null){	
			 	$pelanggan = data_pelanggan::find($biak->idpel);
				$pelanggan->petugas = $petugas_biak[$bufferbiak];
				$pelanggan->save();
				 
				echo $petugas_biak[$bufferbiak]."<br>";
				$bufferbiak = $bufferbiak + 1;
				if($bufferbiak >= $jml_biak){
					 $bufferbiak = 0;
				} 
			}
    	} 
	
	
		$posts = \DB::select('select * from tb_login where unitup = ?', array('42140'));
		$dummy = \DB::select('select * from dummy2');
		foreach ($dummy as $dummy2) {
			$petugas_biak[0] = $dummy2->email;
			
		}
		$jml_biak= 0;
		foreach ($posts as $post) {
			if($posts != null){
				
				$petugas_biak[$jml_biak]= $post->email;
				$jml_biak = $jml_biak + 1;		
			}
		}
		 $pel = \DB::select('select * from tb_pelanggan where unitup = ? && petugas = ?', array('42140','-'));	
		 $bufferbiak = 0;
		 foreach ($pel as $biak) {
			 if($biak != null){	
			 	$pelanggan = data_pelanggan::find($biak->idpel);
				$pelanggan->petugas = $petugas_biak[$bufferbiak];
				$pelanggan->save();
				 
				echo $petugas_biak[$bufferbiak]."<br>";
				$bufferbiak = $bufferbiak + 1;
				if($bufferbiak >= $jml_biak){
					 $bufferbiak = 0;
				} 
			}
    	}
    	
		
		$posts = \DB::select('select * from tb_login where unitup = ?', array('42160'));
		$dummy = \DB::select('select * from dummy2');
		foreach ($dummy as $dummy2) {
			$petugas_biak[0] = $dummy2->email;
			
		}
		$jml_biak= 0;
		foreach ($posts as $post) {
			if($posts != null){
				
				$petugas_biak[$jml_biak]= $post->email;
				$jml_biak = $jml_biak + 1;		
			}
		}
		 $pel = \DB::select('select * from tb_pelanggan where unitup = ? && petugas = ?', array('42160','-'));	
		 $bufferbiak = 0;
		 foreach ($pel as $biak) {
			 if($biak != null){	
			 	$pelanggan = data_pelanggan::find($biak->idpel);
				$pelanggan->petugas = $petugas_biak[$bufferbiak];
				$pelanggan->save();
				 
				echo $petugas_biak[$bufferbiak]."<br>";
				$bufferbiak = $bufferbiak + 1;
				if($bufferbiak >= $jml_biak){
					 $bufferbiak = 0;
				} 
			}
    	} 
		 
		 
		 $posts = \DB::select('select * from tb_login where unitup = ?', array('42180'));
		$dummy = \DB::select('select * from dummy2');
		foreach ($dummy as $dummy2) {
			$petugas_biak[0] = $dummy2->email;
			
		}
		$jml_biak= 0;
		foreach ($posts as $post) {
			if($posts != null){
				
				$petugas_biak[$jml_biak]= $post->email;
				$jml_biak = $jml_biak + 1;		
			}
		}
		 $pel = \DB::select('select * from tb_pelanggan where unitup = ? && petugas = ?', array('42180','-'));	
		 $bufferbiak = 0;
		 foreach ($pel as $biak) {
			 if($biak != null){	
			 	$pelanggan = data_pelanggan::find($biak->idpel);
				$pelanggan->petugas = $petugas_biak[$bufferbiak];
				$pelanggan->save();
				 
				echo $petugas_biak[$bufferbiak]."<br>";
				$bufferbiak = $bufferbiak + 1;
				if($bufferbiak >= $jml_biak){
					 $bufferbiak = 0;
				} 
			}
    	}
    		
    	
        
	 
		 
		 
		 
 }
     
     
    public function destroy($id)
    {
        //
    }
	
	    public function hapus(Request $request)
    {
    	// $a=1;
		// $isi="$request->cek"."[$a]";
		
		$nomor=$request->cek;
		error_reporting(0);
	
		for($x=0;$x < count($nomor);$x++){
			// echo $nomor[$x]."</br>";
			$cari = data_proyek::find($nomor[$x]);
			// echo $cari->id." ".$cari->foto."</br>";
			// unlink(base_path().'/public/foto/'.$cari->foto);
			$cari->delete();
			
		}
	
		
		
		
			
		alert()->success('Berhasil Dihapus');	
		return redirect('/output_proyek');
		
		
    }
	
	
}
