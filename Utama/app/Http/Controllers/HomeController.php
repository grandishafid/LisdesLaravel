<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
// use App\data_pengujian;
// use App\data_referensi;
// use App\data_proyek;
use Alert;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }
	
	
	public function logout()
    {
        Auth::logout();
		return redirect('/login');
    }
	
	

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {		
        //return view('adminLTE');
        return redirect('/dashboard');
    }
}
