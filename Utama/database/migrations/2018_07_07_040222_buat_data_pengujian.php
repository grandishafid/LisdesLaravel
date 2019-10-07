<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class BuatDataPengujian extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('data_pengujian', function(Blueprint $table){
    		$table->increments('id_apk');
			$table->string('nama_apk');
			$table->string('fungsi_apk');
			$table->string('pemohon');
			$table->string('status');
			$table->string('jenis');
			$table->string('penguji');
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
        Schema::drop('data_pengujian');
    }
}
