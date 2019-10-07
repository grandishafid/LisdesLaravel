<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/', function () {
    // return view('welcome');
// });

Route::get('/', 'HomeController@index')->name('home');

Route::get('/lihat', function () {
	$lihat=App\User::all();
	foreach($lihat as $data){
		echo $data->email;
	}
    
});


Auth::routes();
 Route::get('/ayo', function () {
    return view('coba');
});


Route::group(['middleware' => 'auth'], function () {
	
	Route::get('/dashboard', 'PelangganController@dashboard');
	
	Route::get('/mappelanggan', 'PelangganController@mappelanggan');
	Route::get('/kelainan', 'PelangganController@kelainan');
	
	Route::get('/home', 'HomeController@index')->name('home');
	
	Route::get('logout', '\App\Http\Controllers\Auth\LoginController@logout');
	
	Route::get('/input_pengguna', 'UserController@create')->middleware('ceklevel');
	Route::post('/tambah_pengguna', 'UserController@store')->middleware('ceklevel');
	Route::get('/output_pengguna', 'UserController@index')->middleware('ceklevel');//tabel
	Route::get('/ubah_pengguna{id}', 'UserController@edit')->middleware('ceklevel');//formedit
	Route::get('/hapus_pengguna{id}', 'UserController@hapus')->middleware('ceklevel');//formedit
	Route::post('/ubah_pengguna{id}', 'UserController@update')->middleware('ceklevel');
	
	Route::get('/output_pelanggan', 'PelangganController@index')->middleware('ceklevel');
	Route::post('/ubah_pelanggansurvei{idpel}', 'PelangganController@updatepelanggansurvei')->middleware('ceklevel');
	Route::get('/output_pelanggansurvei', 'PelangganController@pelanggansurvei')->middleware('ceklevel');//tabel
	Route::get('/ubah_pelanggansurvei{idpel}', 'PelangganController@editpelanggansurvei')->middleware('ceklevel');//formedit
	Route::get('/hapus_pelanggansurvei{idpel}', 'PelangganController@hapuspelanggansurvei')->middleware('ceklevel');//formedit
	Route::get('/input_pelanggan', 'PelangganController@hasil')->middleware('ceklevel');//tabel
	
	Route::get('/detailmap{idpel}', 'PelangganController@detailmap');//formedit
	
	Route::post('/import', 'PelangganController@import');
	
	Route::get('/uji_coba', 'PelangganController@penugasan');
	

});




Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
