<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class data_pelanggan extends Model
{
    //
    
    protected $table = 'tb_pelanggan';
	protected $primaryKey = 'idpel';
	protected $keyType = 'varchar';
	protected $fillable = ['idpel', 'idpel', 'unitup', 'nomor_meter', 
						'unitupi', 'unitap', 'daya', 'tarif', 'kriteria', 'nama', 'alamat', 'kode_gardu', 
						'no_tiang', 'kddk', 'koordinat_x' , 'koordinat_y', 'merek_meter', 'thn_buat_meter', 
						'krn', 'tglpasang_kwh', 'jenis_mk', 'jml_p2tl', 'beli_token_akhir', 'user_petugas_ct', 
						'nama_petugas_ct', 'jml_ct', 'dlpd', 'keterangan'];
	
}
