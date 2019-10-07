<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\data_pengujian;
use App\data_referensi;
use App\User;
use Alert;

class PengujianController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
    	$list = data_pengujian::all();
		$list2 = data_referensi::all();
		$list3 = User::all();
        return view('outputpengujian', compact('list','list2','list3'));
    }
	
	
	 public function dashboard($jenis)
    {
    	$list = data_pengujian::all();
      	$a=0;
	  	//dd($list);
	  	foreach ($list as $data) {
			if($data->jenis==$jenis)
			{
    			$balikan[$a]=$data;
				$a=$a+1;
			}
			
		}
	  	
	  	$list2 = data_referensi::all();
	  	
	  	
        return view('website', compact('balikan','list2'));
		
		
        //
    }
	
	
	 
	
	
	 public function edit($id_apk)
    {
        //
       $pengujian = data_pengujian::find($id_apk);
	   
	   $a=0;
	   $ref = data_referensi::all();
	   foreach ($ref as $ref2) {
			if($ref2->nama_apk==$pengujian->nama_apk && $ref2->referensi!="Sedang Pengujian" && $ref2->referensi!="Sedang Pengujian Ulang")
			{
    			$buffer[$a]=$ref2->referensi;
				$a=$a+1;
			}
			
		}
	  
	   
	   
	   
	   $list = User::all();
		// $pengujian=$id;
		
        return view('editpengujian', compact('pengujian','list','buffer'));
		//dd($pengujian);
        //
    }
	

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $list = User::all();
        return view('inputpengujian', compact('list'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
    	
		if($request->hasFile('pdf')){
			
			// if($request->status=="1"){
				// $namastatus="(Permintaan)";
			// }else if($request->status=="2"){
				// $namastatus="(Pengujian)";
			// }else if($request->status=="3"){
				// $namastatus="(Rekomendasi)";
			// }else if($request->status=="4"){
				// $namastatus="(Ulang)";
			// }else if($request->status=="5"){
				// $namastatus="(Tersertifikasi)";
			// }
// 			
			$namastatus="(Permintaan)";
			$file = $request->file('pdf');
			$nama=$request->nama_apk.$namastatus;
			$dest=base_path().'/public/referensi/';
			$ext = $file->getClientOriginalExtension();
        	$newName = $nama.".".$ext;
			$file->move($dest,$newName);
		}
		$pengujian = new data_pengujian();
        $pengujian->id_apk= $request->id_apk;
        $pengujian->nama_apk = $request->nama_apk;
        $pengujian->fungsi_apk = $request->fungsi_apk;
		$pengujian->pemohon = $request->pemohon;
		$pengujian->status = "1";
		$pengujian->jenis = $request->jenis;
		$pengujian->penguji = $request->penguji;
		
		$ref = new data_referensi();
		$ref->id_referensi= $request->id_referensi;
		$ref->referensi= $newName;
		$ref->nama_apk= $request->nama_apk;
		$ref->status= "1";
	
        $pengujian->save();
		$ref->save();
		return redirect('/output_pengujian')->with('sukses', 'Data Berhasil Disimpan');
    }

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
   
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id_apk)
    {
        //
        // $file0 = $request->file('pdf0');
        // if($file0->isValid()){
        	// echo "ada";
        // }
        
        // if($request->hasFile('pdf0')){
        	// echo "pertama";
//         	
		// }elseif($request->hasFile('pdf1')){
        	// echo "kedua";
		// }elseif($request->hasFile('pdf2')){
        	// echo "ketiga";
		// }
	       
	       
	       
			
			// $file = $request->file('pdf');
			// $nama=$request->nama_apk.$namastatus;
			// $dest=base_path().'/public/referensi/';
			// $ext = $file->getClientOriginalExtension();
        	// $newName = $nama.".".$ext;
			// $file->move($dest,$newName);
		$evi = data_referensi::all();
		$y=0;
		foreach ($evi as $evi2){
			if($evi2->nama_apk==$request->namaawal && $evi2->referensi!="Sedang Pengujian" && $evi2->referensi!="Sedang Pengujian Ulang")
			{
				$x[$y]=$evi2->referensi;
				// echo $x[$y]."</br>";
				$y=$y+1;	
			
			}
			
		}
		
		$file0 = $request->file('pdf0');
		
		$dest0=base_path().'/public/referensi/';
		if($file0!=null){
			$nama0=$x[0];
			unlink(base_path().'/public/referensi/'.$nama0); 
			$ext0 = $file0->getClientOriginalExtension();
	        $newName0 = $nama0;
			$file0->move($dest0,$newName0);
		}
		
		$file1 = $request->file('pdf1');
		
		$dest1=base_path().'/public/referensi/';
		if($file1!=null){
			$nama1=$x[1];
			unlink(base_path().'/public/referensi/'.$nama1);  
			$ext1 = $file1->getClientOriginalExtension();
	        $newName1 = $nama1;
			$file1->move($dest1,$newName1);
		}
	
		$file2 = $request->file('pdf2');
		
		$dest2=base_path().'/public/referensi/';
		if($file2!=null){
			$nama2=$x[2];
			unlink(base_path().'/public/referensi/'.$nama2);  
			$ext2 = $file2->getClientOriginalExtension();
	        $newName2 = $nama2;
			$file2->move($dest2,$newName2);
		}
		
		$pengujian = data_pengujian::find($id_apk);
        $pengujian->id_apk= $request->id_apk;
        $pengujian->nama_apk = $request->nama_apk;
        $pengujian->fungsi_apk = $request->fungsi_apk;
		$pengujian->pemohon = $request->pemohon;
		$pengujian->penguji = $request->penguji;
		$pengujian->status = $request->status;
		$pengujian->jenis = $request->jenis;
        $pengujian->save();
		
		$ref = data_referensi::all();
		foreach ($ref as $ref2) {
			if($ref2->nama_apk==$request->namaawal){
				
				$ref2->nama_apk=$request->nama_apk;
				$ref2->save();
			}
		}
		
		return redirect('/output_pengujian')->with('sukses', 'Data Berhasil Disimpan');
		
		
       
        
        
     
    }
	
	public function unggah(Request $request)
    {
    if($request->status_apk=="1" && $request->status_tujuan=="2" ){
     	
		  if($request->hasFile('pdf')){
  			
			  $file = $request->file('pdf');
			  $nama=$request->nama_apk."(Pengujian)";
			  $dest=base_path().'/public/referensi/';
			  $ext = $file->getClientOriginalExtension();
        	  $newName = $nama.".".$ext;
			  $file->move($dest,$newName);
		  }
  		
  		
		  $ref = new data_referensi();
		  $ref->id_referensi= $request->id_referensi;
		  $ref->referensi= $newName;
		  $ref->nama_apk= $request->nama_apk;
		  $ref->status= "2";
		  $ref->save();
  		
		  $ubah = data_pengujian::find($request->id_apk);
		  $ubah->status ="2";
		  $ubah->save();
	  	  alert()->success('Berhasil Diubah', 'Perubahan Status Sukses');
		  return redirect('/output_pengujian');
		
	}else if($request->status_apk=="2" && $request->status_tujuan=="3" ){
     	
		  if($request->hasFile('pdf')){
  			
			  $file = $request->file('pdf');
			  $nama=$request->nama_apk."(Rekomendasi)";
			  $dest=base_path().'/public/referensi/';
			  $ext = $file->getClientOriginalExtension();
        	  $newName = $nama.".".$ext;
			  $file->move($dest,$newName);
		  }
  		
  		
		  $ref = new data_referensi();
		  $ref->id_referensi= $request->id_referensi;
		  $ref->referensi= $newName;
		  $ref->nama_apk= $request->nama_apk;
		  $ref->status= "3";
		  $ref->save();
  		
		  $ubah = data_pengujian::find($request->id_apk);
		  $ubah->status ="3";
		  $ubah->save();
	  	  alert()->success('Berhasil Diubah', 'Perubahan Status Sukses');
		  return redirect('/output_pengujian');
		
	}else if($request->status_apk=="3" && $request->status_tujuan=="4" ){
     	
		  if($request->hasFile('pdf')){
  			
			  $file = $request->file('pdf');
			  $nama=$request->nama_apk."(UjiUlang)";
			  $dest=base_path().'/public/referensi/';
			  $ext = $file->getClientOriginalExtension();
        	  $newName = $nama.".".$ext;
			  $file->move($dest,$newName);
		  }
  		
  		
		  $ref = new data_referensi();
		  $ref->id_referensi= $request->id_referensi;
		  $ref->referensi= $newName;
		  $ref->nama_apk= $request->nama_apk;
		  $ref->status= "4";
		  $ref->save();
  		
		  $ubah = data_pengujian::find($request->id_apk);
		  $ubah->status ="4";
		  $ubah->save();
	  	  alert()->success('Berhasil Diubah', 'Perubahan Status Sukses');
		  return redirect('/output_pengujian');
		
	}else if($request->status_apk=="4" && $request->status_tujuan=="5" ){
     	
		  if($request->hasFile('pdf')){
  			
			  $file = $request->file('pdf');
			  $nama=$request->nama_apk."(Sertifikasi)";
			  $dest=base_path().'/public/referensi/';
			  $ext = $file->getClientOriginalExtension();
        	  $newName = $nama.".".$ext;
			  $file->move($dest,$newName);
		  }
  		
  		
		  $ref = new data_referensi();
		  $ref->id_referensi= $request->id_referensi;
		  $ref->referensi= $newName;
		  $ref->nama_apk= $request->nama_apk;
		  $ref->status= "5";
		  $ref->save();
  		
		  $ubah = data_pengujian::find($request->id_apk);
		  $ubah->status ="5";
		  $ubah->save();
	  	  alert()->success('Berhasil Diubah');
		  return redirect('/output_pengujian');
		
	}else{
 			
		 alert()->error('Status Aplikasi Tidak Sesuai', 'Kesalahan Masukan');
		 return redirect('/output_pengujian');
 	  	
	 }
	

    	 
		 
	 
    }
	
	
	public function pengujian($z){
		
		
		$pecah=explode("^", $z);
		$status=$pecah[0];
		$nama_apk=$pecah[1];
		$id_apk=$pecah[2];
		
		if($status=="1"){
		
		  $ref = new data_referensi();
		  
		  $ref->referensi="Sedang Pengujian";
		  $ref->nama_apk= $nama_apk;
		  $ref->status= "2";
		  $ref->save();
  		
		  $ubah = data_pengujian::find($id_apk);
		  $ubah->status ="2";
		  $ubah->save();
	  	  alert()->success('Berhasil Diubah');
		  return redirect('/output_pengujian');
		  
		}elseif($status=="3"){
		  	
		  $ref = new data_referensi();
		  
		  $ref->referensi="Sedang Pengujian Ulang";
		  $ref->nama_apk= $nama_apk;
		  $ref->status= "4";
		  $ref->save();
  		
		  $ubah = data_pengujian::find($id_apk);
		  $ubah->status ="4";
		  $ubah->save();
	  	  alert()->success('Berhasil Diubah');
		  return redirect('/output_pengujian');
			
		}
		//echo $status." ".$nama_apk." ".$id_apk;
		
	}
	
	

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function hapus(Request $request)
    {
    	// $a=1;
		// $isi="$request->cek"."[$a]";
		
		$nomor=$request->cek;
		error_reporting(0);
	
		for($x=0;$x < count($nomor);$x++){
			// echo $nomor[$x]."</br>";
			$cari = data_pengujian::find($nomor[$x]);
			// echo $cari->id_apk."</br>";
		
			
			
			$ref = data_referensi::all();
			foreach ($ref as $ref2) {
				if($ref2->nama_apk==$cari->nama_apk){
					
					echo $ref2->referensi."</br>";
					if($ref2->referensi!="Sedang Pengujian" || $ref2->referensi!="Sedang Pengujian Ulang" ){
						unlink(base_path().'/public/referensi/'.$ref2->referensi);	
					}
					 
					$hapusref = data_referensi::find($ref2->id_referensi);
					$hapusref->delete();
				
				}
			}
			$cari->delete();
			
		}
	
		
		
		
			
		alert()->success('Berhasil Dihapus');	
		return redirect('/output_pengujian');
		
		
    }
}
