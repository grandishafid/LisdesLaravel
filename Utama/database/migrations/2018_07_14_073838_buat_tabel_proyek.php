<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class BuatTabelProyek extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        
         Schema::create('data_proyek', function(Blueprint $table){
    		$table->increments('id_proyek');
			$table->string('nama_proyek');
			$table->string('rencana_anggaran');
			$table->string('jenis_anggaran');
			$table->string('tahun_imple');
			$table->string('tanggal_kontrak');
			$table->string('realisasi_biaya');
			$table->string('vendor_pelaksana');
			$table->string('target_selesai');
			$table->string('pic_pln');
			$table->string('status_proyek');
			$table->timestamps();
			
    	});
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
        Schema::drop('data_proyek');
    }
}
