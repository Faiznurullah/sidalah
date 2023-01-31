<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\EskulModel;

class EskulController extends Controller
{
    
    public function __construct()
    {
        $this->middleware('auth');
        $this->EskulModel = new EskulModel();
    }

    public function index()
    {
        $data = [
            'eskul' => $this->EskulModel->allData(),
        ];

        return view('eskul.eskul', $data);
    }

    public function detail($id)
    {

        if(!$this->EskulModel->detailData($id)){

            abort(404);

        }

        $data = [
            'eskul' => $this->EskulModel->detailData($id),
        ];

        return view('eskul.detailEskul', $data);

    }

    public function add()
    {
        
        return view('eskul.addEskul');

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
   $file->move(public_path('source/img-eskul'), $filename);

   $data = [
       'nama' => Request()->nama,
       'deskripsi' => Request()->deskripsi,
       'foto' => $filename,
   ];

   $this->EskulModel->addData($data);
   return redirect()->route('eskul')->with('Pesan', 'Data Sukses Dikirim');

    }

    public function edit($id)
    {

        if(!$this->EskulModel->detailData($id)){

            abort(404);

        }

        $data = [
            'eskul' => $this->EskulModel->detailData($id),
        ];

        return view('eskul.editEskul', $data);
        
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
   $file->move(public_path('source/img-eskul'), $filename);

   $data = [
       'nama' => Request()->nama,
       'deskripsi' => Request()->deskripsi,
       'foto' => $filename,
   ];

   $this->EskulModel->editData($id, $data);
   

    }else{

        $data = [
            'nama' => Request()->nama,
            'deskripsi' => Request()->deskripsi,
        ];
     
        $this->EskulModel->editData($id, $data);
        

    }

   return redirect()->route('eskul')->with('Pesan', 'Data Sukses Diupdate');

    }

    public function delete($id){

          
        $fasilitas = $this->EskulModel->detailData($id);

        if($fasilitas->foto <> ""){

            unlink(public_path('source/img-eskul').'/'.$fasilitas->foto);

        }

        $this->EskulModel->DeleteData($id);
        return redirect('/eskul')->with('Pesan', 'Data Sukses Dihapus');
    }


}
