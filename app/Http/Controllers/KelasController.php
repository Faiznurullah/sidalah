<?php

namespace App\Http\Controllers;
use App\Models\KelasModel;
use Illuminate\Http\Request;

class KelasController extends Controller
{



public function __construct()
    {
        $this->middleware('auth');
        $this->KelasModel = new KelasModel();
    }

    public function index()
    {
        $data = [
            'nama_kelas' => $this->KelasModel->allData(),
        ];

        return view('kelas.kelas', $data);
    }

    public function add()
    {
       return view('kelas.addKelas');
    }


    public function insert()
    {
        
        Request()->validate(
        [
            'nama_kelas' => 'required|unique:daftar_kelas,nama_kelas|min:4|max:16',
        ],
        [
            'nama_kelas.required' => 'Kelas Wajib Diisi !!!',
            'nama_kelas.unique' => 'Kelas Ini Sudah Ada !!!',
            'nama_kelas.min' => 'Minimal 4 Karakter !!!',
            'nama_kelas.max' => 'Maksimal 16 Karakter !!!',
        ]
    );


   $data = [
       'nama_kelas' => Request()->nama_kelas
   ];

   $this->KelasModel->addData($data);
   return redirect()->route('kelas')->with('Pesan', 'Data Sukses Dikirim');

    }


    public function edit($id)
    {

        if(!$this->KelasModel->detailData($id)){

            abort(404);

        }

        $data = [
            'nama_kelas' => $this->KelasModel->detailData($id),
        ];

        return view('kelas.editKelas', $data);
        
    }



    public function update($id)
    {
        
        Request()->validate(
            [
                'nama_kelas' => 'required|unique:daftar_kelas,nama_kelas|min:4|max:16',
            ],
            [
                'nama_kelas.required' => 'Kelas Wajib Diisi !!!',
                'nama_kelas.unique' => 'Kelas Ini Sudah Ada !!!',
                'nama_kelas.min' => 'Minimal 4 Karakter !!!',
                'nama_kelas.max' => 'Maksimal 16 Karakter !!!',
            ]
        );


        $data = [
            'nama_kelas' => Request()->nama_kelas
        ];
     
        $this->KelasModel->editData($id, $data);
        
      return redirect()->route('kelas')->with('Pesan', 'Data Sukses Diupdate');

    }
    

    public function delete($id){
        $this->KelasModel->DeleteData($id);
        return redirect('/kelas')->with('Pesan', 'Data Sukses Dihapus');
    }



}