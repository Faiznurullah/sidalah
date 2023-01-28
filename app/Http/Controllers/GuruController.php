<?php


namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\GuruModel;
use App\Models\JabatanModel;
use Illuminate\Support\Facades\DB;

class GuruController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
        $this->GuruModel = new GuruModel();
        $this->JabatanModel = new JabatanModel();
    }
    
    public function index()
    {
        $data = [
            'guru' => $this->GuruModel->allData(),
        ];

        return view('guru.guru', $data);

    }

    public function detail($id)
    {

        if(!$this->GuruModel->detailData($id)){

            abort(404);

        }

        $data = [
            'guru' => $this->GuruModel->detailData($id),
        ];

        return view('guru.detailGuru', $data);

    }



    public function add()
    {
        $data = [
            'jabatan' => $this->JabatanModel->allData(),
            ];
        
        return view('guru.addGuru', $data);

    }

    public function insert()
    {
        
        Request()->validate([
            'nip' => 'required|unique:tbl_guru,nip|min:4|max:16',
            'nama' => 'required',
            'mapel' => 'required',
            'wali_kelas' => 'required',
            'foto' => 'required|mimes:jpg,jpeg,bmp,png|max:5000',
            'tgl' => 'required',
            'alamat' => 'required',
            'jabatan' => 'required',
        ],[
            'nip.required' => 'NIP Wajib Diisi !!!',
            'nip.unique' => 'NIP Ini Sudah Ada !!!',
            'nip.min' => 'Minimal 4 Karakter !!!',
            'nip.max' => 'Maksimal 16 Karakter !!!',
            'nama.required' => 'Nama Wajib Diisi !!!',
            'mapel.required' => 'Mapel Wajib Diisi !!!',
            'wali_kelas.required' => 'Wali Kelas Wajib Diisi !!!',
            'foto.required' => 'Foto Wajib Diisi !!!',
            'foto.mimes' => 'Hanya Bisa jpg,jpeg,bmp,png !!!',
            'foto.max' => 'Ukuran File Maksimum 5000kb',
            'tgl.required' => 'Tanggal Wajib Diisi !!!',
            'alamat.required' => 'Alamat Wajib Diisi !!!',
            'jabatan.required' => 'Jabatan Wajib Diisi !!!',
        ]);





   //Percabangan
   //Upload foto
   $file = Request()->foto;
   $filename = Request()->nip.'.'.$file->extension();
   $file->move(public_path('source/img-guru'), $filename);

   $data = [
       'nip' => Request()->nip,
       'nama' => Request()->nama,
       'mapel' => Request()->mapel,
       'wali_kelas' => Request()->wali_kelas,
       'foto' => $filename,
       'tgl' => Request()->tgl,
       'alamat' => Request()->alamat,
       'jabatan' => Request()->jabatan,
   ];

   $this->GuruModel->addData($data);
   return redirect()->route('guru')->with('Pesan', 'Data Sukses Dikirim');

    }


    public function edit($id)
    {
        if(!$this->GuruModel->detailData($id)){

            abort(404);

        }

        $data = [
            'guru' => $this->GuruModel->detailData($id),
            'jabatan' => $this->JabatanModel->allData(),
        ];

        return view('guru.editGuru', $data);
        

    }


    public function update($id)
    {
        
        Request()->validate([
            'nip' => 'min:4|max:16',
            'nama' => 'required',
            'mapel' => 'required',
            'wali_kelas' => 'required',
            'foto' => 'mimes:jpg,jpeg,bmp,png|max:5000',
            'tgl' => 'required',
            'alamat' => 'required',
            'jabatan' => 'required',
        ],[
            'nip.min' => 'Minimal 4 Karakter !!!',
            'nip.max' => 'Maksimal 16 Karakter !!!',
            'nama.required' => 'Nama Wajib Diisi !!!',
            'mapel.required' => 'Mapel Wajib Diisi !!!',
            'wali_kelas.required' => 'Wali Kelas Wajib Diisi !!!',
            'foto.mimes' => 'Hanya Bisa jpg,jpeg,bmp,png !!!',
            'foto.max' => 'Ukuran File Maksimum 5000kb',
            'tgl.required' => 'Tanggal Wajib Diisi !!!',
            'alamat.required' => 'Alamat Wajib Diisi !!!',
            'jabatan.required' => 'Jabatan Wajib Diisi !!!',
        ]);



    if(Request()->foto <> ""){

   //Percabangan
   //Upload foto
   $file = Request()->foto;
   $filename = Request()->nip.'.'.$file->extension();
   $file->move(public_path('source/img-guru'), $filename);

   $data = [
       'nip' => Request()->nip,
       'nama' => Request()->nama,
       'mapel' => Request()->mapel,
       'wali_kelas' => Request()->wali_kelas,
       'foto' => $filename,
       'tgl' => Request()->tgl,
       'alamat' => Request()->alamat,
       'jabatan' => Request()->jabatan,
   ];

   $this->GuruModel->editData($id, $data);
   

    }else{

        $data = [
            'nip' => Request()->nip,
            'nama' => Request()->nama,
            'mapel' => Request()->mapel,
            'wali_kelas' => Request()->wali_kelas,
            'tgl' => Request()->tgl,
            'alamat' => Request()->alamat,
            'jabatan' => Request()->jabatan,
        ];
     
        $this->GuruModel->editData($id, $data);
        

    }

 return redirect()->route('guru')->with('Pesan', 'Data Sukses Diupdate');

    }


    public function delete($id){

          
        $guru =$this->GuruModel->detailData($id);

        if($guru->foto <> ""){

            unlink(public_path('source/img-guru').'/'.$guru->foto);

        }

        $this->GuruModel->DeleteData($id);
        return redirect('/guru')->with('Pesan', 'Data Sukses Dihapus');
    }

    

    
}
