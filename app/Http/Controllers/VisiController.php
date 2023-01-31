<?php

namespace App\Http\Controllers;

use App\Models\VisiModel;
use Illuminate\Http\Request;

class VisiController extends Controller
{
  
    public function __construct()
    {
        $this->middleware('auth');
        $this->VisiModel = new VisiModel();
    }

    public function index()
    {
        $data = [
            'visi' => $this->VisiModel->allData(),
        ];

        return view('visi.visi', $data);
    }
 
    public function add()
    {
        return view('visi.addVisi');
    }

    public function insert(Request $request)
    {
        
        Request()->validate(
        [
            'nama' => 'required',
        ],
        [
            'nama.required' => 'Jabatan Wajib Diisi !!!'
        ]
    );


   $data = [
       'nama' => Request()->nama
   ];

   $jum_visi = VisiModel::count();

   if($jum_visi == 0){
   $this->VisiModel->addData($data);
   return redirect()->route('visi')->with('Pesan', 'Data Sukses Dikirim');
   } else {
    return redirect()->route('visi')->with('Pesan', 'Visi Hanya Boleh Satu');
   }

    }

    public function edit($id)
    {

        if(!$this->VisiModel->detailData($id)){
            abort(404);
        }

        $data = [
            'nama' => $this->VisiModel->detailData($id),
        ];

        return view('visi.editVisi', $data);
        
    }

    public function update($id)
    {
        
        Request()->validate(
            [
                'nama' => 'required',
            ],
            [
                'nama.required' => 'Jabatan Wajib Diisi !!!'
            ]
        );


        $data = [
            'nama' => Request()->nama
        ];
     
        $this->VisiModel->editData($id, $data);
        
      return redirect()->route('visi')->with('Pesan', 'Data Sukses Diupdate');

    }

    public function delete($id){
        $this->VisiModel->DeleteData($id);
        return redirect('/visi')->with('Pesan', 'Data Sukses Dihapus');
    }



}
