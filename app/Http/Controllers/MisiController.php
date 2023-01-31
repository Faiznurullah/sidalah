<?php

namespace App\Http\Controllers;

use App\Models\MisiModel;
use Illuminate\Http\Request;

class MisiController extends Controller
{
   
    public function __construct()
    {
        $this->middleware('auth');
        $this->MisiModel = new MisiModel();
    }

    public function index()
    {
        $data = [
            'misi' => $this->MisiModel->allData(),
        ];

        return view('misi.misi', $data);
    }
 
    public function add()
    {
        return view('misi.addMisi');
    }

    public function insert(Request $request)
    {
        
        Request()->validate(
        [
            'nama' => 'required',
        ],
        [
            'nama.required' => 'Misi Wajib Diisi !!!'
        ]
    );


   $data = [
       'nama' => Request()->nama
   ];


 
   $this->MisiModel->addData($data);
   return redirect()->route('misi')->with('Pesan', 'Data Sukses Dikirim');


    }

    public function edit($id)
    {

        if(!$this->MisiModel->detailData($id)){
            abort(404);
        }

        $data = [
            'nama' => $this->MisiModel->detailData($id),
        ];

        return view('misi.editMisi', $data);
        
    }

    public function update($id)
    {
        
        Request()->validate(
            [
                'nama' => 'required',
            ],
            [
                'nama.required' => 'Misi Wajib Diisi !!!'
            ]
        );


        $data = [
            'nama' => Request()->nama
        ];
     
        $this->MisiModel->editData($id, $data);
        
      return redirect()->route('misi')->with('Pesan', 'Data Sukses Diupdate');

    }

    public function delete($id){
        $this->MisiModel->DeleteData($id);
        return redirect('/misi')->with('Pesan', 'Data Sukses Dihapus');
    }


}
