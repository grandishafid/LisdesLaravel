<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
// use App\data_pengujian;
// use App\data_referensi;
use App\User;
use App\data_andro;
use App\data_pelanggan;
use Alert;


class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $list = User::all();
		$list2 = data_andro::all();
		
        return view('outputpengguna', compact('list','list2'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('inputuser');
    }

	

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        
        // if($request->hasFile('foto')){
//         	
			// $file = $request->file('foto');
			// $nama=$request->name;
			// $dest=base_path().'/public/foto/';
			// $ext = $file->getClientOriginalExtension();
        	// $newName = $nama.".".$ext;
			// $file->move($dest,$newName);
		// }
//         	
			if($request->jabatan == "1"){
				$user = new User();
	        	$user->id= $request->id;
	        	$user->name = $request->name;
	        	$user->email = $request->email;
				$user->password = bcrypt($request->password);
				$user->jabatan = $request->jabatan;
				$user->unitup = $request->unitup;
				$user->save();
				return redirect('/output_pengguna')->with('sukses', 'Data Berhasil Disimpan');
				
			}elseif($request->jabatan == "2"){
				$andro = new data_andro();
	        	$andro->id= $request->id;
	        	$andro->name = $request->name;
	        	$andro->email = $request->email;
				$andro->password = $request->password;
				$andro->unitup = $request->unitup;
				$andro->jabatan = $request->jabatan;
			
				$andro->save();
				return redirect('/output_pengguna')->with('sukses', 'Data Berhasil Disimpan');
				
			}

	        
		
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
    public function edit($id)
    {
        //
        $buffer= explode(",", $id);
		$id=$buffer[0];
		$jbtn=$buffer[1];
		// echo $id."<br>";
		// echo $jbtn."\n";
		
		if($jbtn == "1"){
			
			$data = User::find($id);
			
        	
			
		}elseif($jbtn == "2"){
			
			$data = data_andro::find($id);
			
        	
			
		}
		
		return view('editpengguna', compact('data'));
		
        
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        // $user = User::find($id);
        // if($request->hasFile('foto')){
//         		
        	// unlink(base_path().'/public/foto/'.$user->foto);
// 			
// 			
			// $file = $request->file('foto');
			// $nama=$request->name;
			// $dest=base_path().'/public/foto/';
			// $ext = $file->getClientOriginalExtension();
        	// $newName = $nama.".".$ext;
			// $file->move($dest,$newName);
		// }
//         

			if($request->jabatan == "1"){
				
				$user = User::find($id);
	        	$user->id= $request->id;
	        	$user->name = $request->name;
	        	$user->email = $request->email;
				$user->password = bcrypt($request->password);
				$user->jabatan = $request->jabatan;
				$user->save();
				return redirect('/output_pengguna')->with('sukses', 'Data Berhasil Disimpan');
				
			}elseif($request->jabatan == "2"){
				
				$user = data_andro::find($id);
	        	$user->id= $request->id;
	        	$user->name = $request->name;
	        	$user->email = $request->email;
				$user->password = $request->password;
				$user->jabatan = $request->jabatan;
				$user->save();
				return redirect('/output_pengguna')->with('sukses', 'Data Berhasil Disimpan');
				
			}

        	
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
	
	
	public function hapus($id)
    {
        //
        
        $buffer= explode(",", $id);
		$id=$buffer[0];
		$jbtn=$buffer[1];
		
        
		// $pengujian=$id;
		
	  	if($jbtn == "1")
	  	{
	  		$data = User::find($id);	
	  		// echo $cari->id." ".$cari->foto."</br>";
			$data->delete();
			alert()->success('Berhasil Dihapus');	
			return redirect('/output_pengguna');
					
	  	}else{
	  		
			$posts = \DB::select('select * from tb_login where id = ?', array($id));
			foreach ($posts as $data){
				$email = $data->email;	
			}
			$posts2 = \DB::select('select * from tb_pelanggan where petugas = ? && status_survei = ?', array($email, '0'));
			foreach ($posts2 as $data2){
				$pelanggan = data_pelanggan::find($data2->idpel);
				
				$pelanggan->petugas = "-";
				$pelanggan->save();	
			}
			    //dd($posts2);
				
				
			//echo $posts->email;
			
			// $dummy = \DB::select('select * from dummy2');
			// foreach ($dummy as $dummy2) {
				// $petugas_biak[0] = $dummy2->email;
// 			
			// }
	  		$data = data_andro::find($id);
	  		$data->delete();
			alert()->success('Berhasil Dihapus');	
			return redirect('/output_pengguna');
			
	  	}
		
		
	  					
	  		
		
        //return view('editpelanggansurvei', compact('data'));
		//dd($data);
    }
	
	
}
