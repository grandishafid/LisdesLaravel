<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\data_proyek;
use Alert;


class ProyekController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $list = data_proyek::all();
      
	  	//dd($list);
        return view('outputproyek', compact('list'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('inputproyek');
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
        
        $proyek = new data_proyek();
        $proyek->id_proyek= $request->id_proyek;
        $proyek->nama_proyek = $request->nama_proyek;
        $proyek->rencana_anggaran = $request->rencana_anggaran;
		$proyek->jenis_anggaran = $request->jenis_anggaran;
		$proyek->tahun_imple= $request->tahun_imple;
		$proyek->tanggal_kontrak = $request->tanggal_kontrak;
		$proyek->realisasi_biaya = $request->realisasi_biaya;
		$proyek->vendor_pelaksana = $request->vendor_pelaksana;
		$proyek->target_selesai = $request->target_selesai;
		$proyek->pic_pln = $request->pic_pln;
		$proyek->status_proyek = $request->status_proyek;
		
        $proyek->save();
		
		alert()->success('Berhasil Disimpan');	

        return redirect('/output_proyek')->with('sukses', 'Data Berhasil Disimpan');
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
    public function edit($id_proyek)
    {
        //
        $pengujian = data_proyek::find($id_proyek);
		// $pengujian=$id;
        return view('editproyek', compact('pengujian'));
		//dd($pengujian);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id_proyek)
    {
        //
        
        $proyek = data_proyek::find($id_proyek);
        $proyek->id_proyek= $request->id_proyek;
        $proyek->nama_proyek = $request->nama_proyek;
        $proyek->rencana_anggaran = $request->rencana_anggaran;
		$proyek->jenis_anggaran = $request->jenis_anggaran;
		$proyek->tahun_imple= $request->tahun_imple;
		$proyek->tanggal_kontrak = $request->tanggal_kontrak;
		$proyek->realisasi_biaya = $request->realisasi_biaya;
		$proyek->vendor_pelaksana = $request->vendor_pelaksana;
		$proyek->target_selesai = $request->target_selesai;
		$proyek->pic_pln = $request->pic_pln;
		$proyek->status_proyek = $request->status_proyek;
		
        $proyek->save();
		
		alert()->success('Berhasil Diperbarui');	
		
		return redirect('/output_proyek');
        
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
