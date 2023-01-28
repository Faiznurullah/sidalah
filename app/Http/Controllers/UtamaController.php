<?php

namespace App\Http\Controllers;

use App\Models\FasilitasModel;
use Illuminate\Http\Request;

class UtamaController extends Controller
{

    public function __construct()
    {
        
    }

    public function index() {

         $data = FasilitasModel::all();

        return view('utama', compact('data'));

    }


}
