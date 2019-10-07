<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class BuatTabelReferensi extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
          Schema::create('data_referensi', function(Blueprint $table){
          	$table->increments('id_referensi');
    		$table->string('referensi');	
    		$table->string('nama_apk');
			$table->string('status');
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
        Schema::drop('data_referensi');
    }
}
