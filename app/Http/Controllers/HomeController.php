<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

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

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {

        $guru = DB::table('tbl_guru')->get();
        $siswa = DB::table('tbl_siswa')->get();
        $staff = DB::table('tbl_staff')->get();

        return view('home',
        [
            'guru' => $guru,
            'siswa' => $siswa,
            'staff' => $staff,
        ] 
    );

        
    }


    public function profile(){

         return view('profile');

    }



    
}
