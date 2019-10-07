<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\data_pelanggan;
use Maatwebsite\Excel\Facades\Excel;
class FileController extends Controller {
    public function importExportExcelORCSV(){
        return view('outputpelanggan');
    }
    public function importFileIntoDB(Request $request){
        if($request->hasFile('sample_file')){
            $path = $request->file('sample_file')->getRealPath();
            $data = \Excel::load($path)->get();
            if($data->count()){
                foreach ($data as $key => $value) {
                    $arr[] =  ['idpel' => $value->idpel, 
                    		  'thbl' => $value->thbl,
                    		  'unitup' => $value->unitup,
                    		  'nomor_meter' => $value->nomor_meter,
                    		  'unitupi' => $value->unitupi,
                    		  'unitap' => $value->unitap,
                    		  'daya' => $value->daya,
                    		  'tarif' => $value->tarif,
                    		  'kriteria' => $value->kriteria,
                    		  'nama' => $value->nama,
                    		  'kode_gardu' => $value->kode_gardu,
                    		  'no_tiang' => $value->no_tiang,
                    		  'kddk' => $value->kddk,
                    		  'koordinat_x' => $value->koordinat_x,
                    		  'koordinat_y' => $value->koordinat_y,
                    		  'merek_meter' => $value->merek_meter,
                    		  'thn_buat_meter' => $value->thn_buat_meter,
                    		  'krn' => $value->krn,
                    		  'tglpasang_kwh' => $value->tglpasang_kwh,
                    		  'jenis_mk' => $value->jenis_mk,
                    		  'jml_p2tl' => $value->jml_p2tl,
                    		  'beli_token_akhir' => $value->beli_token_akhir,
                    		  'user_petugas_ct' => $value->user_petugas_ct,
                    		  'nama_petugas_ct' => $value->nama_petugas_ct,
                    		  'jml_ct' => $value->jml_ct,
                    		  'dlpd' => $value->dlpd,
                    		  'keterangan' => $value->keterangan];
					
					
                }
                if(!empty($arr)){
                    \DB::table('tb_pelanggan')->insert($arr);
                    dd('Insert Record successfully.');
                }
            }
        }
        dd('Request data does not have any files to import.');      
    } 
    public function downloadExcelFile($type){
        $products = Product::get()->toArray();
        return \Excel::create('expertphp_demo', function($excel) use ($products) {
            $excel->sheet('sheet name', function($sheet) use ($products)
            {
                $sheet->fromArray($products);
            });
        })->download($type);
    }      
}
