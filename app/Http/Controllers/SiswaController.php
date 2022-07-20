<?php

namespace App\Http\Controllers;
use App\Models\SiswaModel;
use Illuminate\Http\Request;
use App\Models\KelasModel;

class SiswaController extends Controller
{
    

    public function __construct()
    {
        $this->middleware('auth');
        $this->SiswaModel = new SiswaModel();
        $this->KelasModel = new KelasModel();
    }

    public function index()
    {
        
        $data = [
            'siswa' => $this->SiswaModel->allData(),
        ];
        return view('siswa', $data);
    }

    public function detail($id)
    {

        if(!$this->SiswaModel->detailData($id)){

            abort(404);

        }

        $data = [
            'siswa' => $this->SiswaModel->detailData($id),
        ];

        return view('detailSiswa', $data);

    }

    public function add()
    {

        $data = [
            'kelas' => $this->KelasModel->allData(),
            ];
        
        return view('addSiswa', $data);

    }

    public function insert()
    {
        
        Request()->validate([
            'nis' => 'required|unique:tbl_siswa,nis|min:4|max:16',
            'nama' => 'required',
            'kelas' => 'required',
            'foto' => 'required|mimes:jpg,jpeg,bmp,png|max:5000',
            'tgl' => 'required',
            'alamat' => 'required',
        ],[
            'nis.required' => 'NIP Wajib Diisi !!!',
            'nis.unique' => 'NIP Ini Sudah Ada !!!',
            'nis.min' => 'Minimal 4 Karakter !!!',
            'nis.max' => 'Maksimal 16 Karakter !!!',
            'nama.required' => 'Nama Wajib Diisi !!!',
            'kelas.required' => 'Kelas Wajib Diisi !!!',
            'foto.required' => 'Foto Wajib Diisi !!!',
            'foto.mimes' => 'Hanya Bisa jpg,jpeg,bmp,png !!!',
            'foto.max' => 'Ukuran File Maksimum 5000kb',
            'tgl.required' => 'Tanggal Wajib Diisi !!!',
            'alamat.required' => 'Alamat Wajib Diisi !!!',
        ]);





   //Percabangan
   //Upload foto
   $file = Request()->foto;
   $filename = Request()->nis.'.'.$file->extension();
   $file->move(public_path('source/img-siswa'), $filename);

   $data = [
       'nis' => Request()->nis,
       'nama' => Request()->nama,
       'kelas' => Request()->kelas,
       'foto' => $filename,
       'tgl' => Request()->tgl,
       'alamat' => Request()->alamat,
   ];

   $this->SiswaModel->addData($data);
   return redirect()->route('siswa')->with('Pesan', 'Data Sukses Dikirim');

    }


    public function edit($id)
    {

        if(!$this->SiswaModel->detailData($id)){

            abort(404);

        }

        $data = [
            'siswa' => $this->SiswaModel->detailData($id),
            'kelas' => $this->KelasModel->allData(),
        ];

        return view('editSiswa', $data);
        
    }


    public function update($id)
    {
        
        Request()->validate([
            'nis' => 'min:4|max:16',
            'nama' => 'required',
            'kelas' => 'required',
            'foto' => 'mimes:jpg,jpeg,bmp,png|max:5000',
            'tgl' => 'required',
            'alamat' => 'required',
        ],[
            'nis.min' => 'Minimal 4 Karakter !!!',
            'nis.max' => 'Maksimal 16 Karakter !!!',
            'nama.required' => 'Nama Wajib Diisi !!!',
            'kelas.required' => 'Kelas Wajib Diisi !!!',
            'foto.required' => 'Foto Wajib Diisi !!!',
            'foto.mimes' => 'Hanya Bisa jpg,jpeg,bmp,png !!!',
            'foto.max' => 'Ukuran File Maksimum 5000kb',
            'tgl.required' => 'Tanggal Wajib Diisi !!!',
            'alamat.required' => 'Alamat Wajib Diisi !!!',
        ]);




    if(Request()->foto <> ""){

   //Percabangan
   //Upload foto
   $file = Request()->foto;
   $filename = Request()->nis.'.'.$file->extension();
   $file->move(public_path('source/img-siswa'), $filename);

   $data = [
       'nis' => Request()->nis,
       'nama' => Request()->nama,
       'kelas' => Request()->kelas,
       'foto' => $filename,
       'tgl' => Request()->tgl,
       'alamat' => Request()->alamat,
   ];

   $this->SiswaModel->editData($id, $data);
   

    }else{

        $data = [
            'nis' => Request()->nis,
            'nama' => Request()->nama,
            'kelas' => Request()->kelas,
            'tgl' => Request()->tgl,
            'alamat' => Request()->alamat,
        ];
     
        $this->SiswaModel->editData($id, $data);
        

    }

   return redirect()->route('siswa')->with('Pesan', 'Data Sukses Diupdate');

    }


    public function delete($id){

          
        $siswa =$this->SiswaModel->detailData($id);

        if($siswa->foto <> ""){

            unlink(public_path('source/img-siswa').'/'.$siswa->foto);

        }

        $this->SiswaModel->DeleteData($id);
        return redirect('/siswa')->with('Pesan', 'Data Sukses Dihapus');
    }






}
