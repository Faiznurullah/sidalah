<?php

namespace App\Http\Controllers;
use App\Models\FasilitasModel;
use Illuminate\Http\Request;

class FasilitasController extends Controller
{
 

    public function __construct()
    {
        $this->middleware('auth');
        $this->FasilitasModel = new FasilitasModel();
    }
    

    public function index()
    {
        $data = [
            'fasilitas' => $this->FasilitasModel->allData(),
        ];

        return view('fasilitas', $data);
    }

    public function detail($id)
    {

        if(!$this->FasilitasModel->detailData($id)){

            abort(404);

        }

        $data = [
            'fasilitas' => $this->FasilitasModel->detailData($id),
        ];

        return view('detailFasilitas', $data);

    }


    public function add()
    {
        
        return view('addFasilitas');

    }


    public function insert()
    {
        
        Request()->validate([
            'nama' => 'required|unique:fasilitas,nama|min:4|max:16',
            'deskripsi' => 'required',
            'foto' => 'required|mimes:jpg,jpeg,bmp,png|max:5000',
        ],[
            'nama.required' => 'Nama Wajib Diisi !!!',
            'nama.unique' => 'NIP Ini Sudah Ada !!!',
            'nama.min' => 'Minimal 4 Karakter !!!',
            'nama.max' => 'Maksimal 16 Karakter !!!',
            'foto.required' => 'Foto Wajib Diisi !!!',
            'foto.mimes' => 'Hanya Bisa jpg,jpeg,bmp,png !!!',
            'foto.max' => 'Ukuran File Maksimum 5000kb',
        ]);





   //Percabangan
   //Upload foto
   $file = Request()->foto;
   $filename = Request()->nama.'.'.$file->extension();
   $file->move(public_path('source/img-fasilitas'), $filename);

   $data = [
       'nama' => Request()->nama,
       'deskripsi' => Request()->deskripsi,
       'foto' => $filename,
   ];

   $this->FasilitasModel->addData($data);
   return redirect()->route('fasilitas')->with('Pesan', 'Data Sukses Dikirim');

    }

    public function edit($id)
    {

        if(!$this->FasilitasModel->detailData($id)){

            abort(404);

        }

        $data = [
            'fasilitas' => $this->FasilitasModel->detailData($id),
        ];

        return view('editFasilitas', $data);
        
    }


    public function update($id)
    {
        
        Request()->validate(
            [
            'nama' => 'min:4|max:16',
            'deskripsi' => 'required',
            'foto' => 'mimes:jpg,jpeg,bmp,png|max:5000',
        ],[
            'nama.min' => 'Minimal 4 Karakter !!!',
            'nama.max' => 'Maksimal 16 Karakter !!!',
            'nama.required' => 'Nama Wajib Diisi !!!',
            'foto.mimes' => 'Hanya Bisa jpg,jpeg,bmp,png !!!',
            'foto.max' => 'Ukuran File Maksimum 5000kb',
        ]
    );



    if(Request()->foto <> ""){

   //Percabangan
   //Upload foto
   $file = Request()->foto;
   $filename = Request()->nama.'.'.$file->extension();
   $file->move(public_path('source/img-fasilitas'), $filename);

   $data = [
       'nama' => Request()->nama,
       'deskripsi' => Request()->deskripsi,
       'foto' => $filename,
   ];

   $this->FasilitasModel->editData($id, $data);
   

    }else{

        $data = [
            'nama' => Request()->nama,
            'deskripsi' => Request()->deskripsi,
        ];
     
        $this->FasilitasModel->editData($id, $data);
        

    }

   return redirect()->route('fasilitas')->with('Pesan', 'Data Sukses Diupdate');

    }


    public function delete($id){

          
        $fasilitas = $this->FasilitasModel->detailData($id);

        if($fasilitas->foto <> ""){

            unlink(public_path('source/img-fasilitas').'/'.$fasilitas->foto);

        }

        $this->FasilitasModel->DeleteData($id);
        return redirect('/fasilitas')->with('Pesan', 'Data Sukses Dihapus');
    }



}
