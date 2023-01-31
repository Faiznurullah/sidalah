<?php

namespace App\Http\Controllers;

use App\Models\EskulModel;
use App\Models\FasilitasModel;
use App\Models\GuruModel;
use App\Models\MisiModel;
use App\Models\SiswaModel;
use App\Models\StaffModel;
use App\Models\VisiModel;
use Illuminate\Http\Request;

class UtamaController extends Controller
{

    public function __construct()
    {
        
    }

    public function index() {

         $data = FasilitasModel::all();
         $data1 = EskulModel::all();
         $data3 = GuruModel::count();
         $data4 = StaffModel::count();
         $data5 = SiswaModel::count();
         $data6 = VisiModel::all()->first();
         $data7 = MisiModel::all();
        return view('utama', compact('data', 'data1', 'data3', 'data4', 'data5', 'data6', 'data7'));

    }


}
