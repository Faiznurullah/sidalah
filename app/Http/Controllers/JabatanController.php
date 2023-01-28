<?php

namespace App\Http\Controllers;
use App\Models\JabatanModel;
use Illuminate\Http\Request;

class JabatanController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
        $this->JabatanModel = new JabatanModel();
    }


 public function index()
    {
        $data = [
            'nama_jabatan' => $this->JabatanModel->allData(),
        ];

        return view('jabatan.jabatan', $data);
    }

    public function add()
    {
       return view('jabatan.addJabatan');
    }


    public function insert()
    {
        
        Request()->validate(
        [
            'nama_jabatan' => 'required|unique:daftar_jabatan,nama_jabatan|min:4|max:16',
        ],
        [
            'nama_jabatan.required' => 'Jabatan Wajib Diisi !!!',
            'nama_jabatan.unique' => 'Jabatan Ini Sudah Ada !!!',
            'nama_jabatan.min' => 'Minimal 4 Karakter !!!',
            'nama_jabatan.max' => 'Maksimal 16 Karakter !!!',
        ]
    );


   $data = [
       'nama_jabatan' => Request()->nama_jabatan
   ];

   $this->JabatanModel->addData($data);
   return redirect()->route('jabatan')->with('Pesan', 'Data Sukses Dikirim');

    }


    public function edit($id)
    {

        if(!$this->JabatanModel->detailData($id)){

            abort(404);

        }

        $data = [
            'nama_jabatan' => $this->JabatanModel->detailData($id),
        ];

        return view('jabatan.editJabatan', $data);
        
    }



    public function update($id)
    {
        
        Request()->validate(
            [
                'nama_jabatan' => 'required|unique:daftar_jabatan,nama_jabatan|min:4|max:16',
            ],
            [
                'nama_jabatan.required' => 'Jabatan Wajib Diisi !!!',
                'nama_jabatan.unique' => 'Jabatan Ini Sudah Ada !!!',
                'nama_jabatan.min' => 'Minimal 4 Karakter !!!',
                'nama_jabatan.max' => 'Maksimal 16 Karakter !!!',
            ]
        );


        $data = [
            'nama_jabatan' => Request()->nama_jabatan
        ];
     
        $this->JabatanModel->editData($id, $data);
        
      return redirect()->route('jabatan')->with('Pesan', 'Data Sukses Diupdate');

    }
    

    public function delete($id){
        $this->JabatanModel->DeleteData($id);
        return redirect('/jabatan')->with('Pesan', 'Data Sukses Dihapus');
    }



  
}
