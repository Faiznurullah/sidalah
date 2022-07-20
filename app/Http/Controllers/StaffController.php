<?php


namespace App\Http\Controllers;

use App\Models\StaffModel;
use Illuminate\Http\Request;
use App\Models\JabatanModel;


class StaffController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
        $this->StaffModel = new StaffModel();
        $this->JabatanModel = new JabatanModel();
    }
    

    public function index()
    {
        $data = [
            'staff' => $this->StaffModel->allData(),
        ];

        return view('staff', $data);
    }

    public function detail($id)
    {


        if(!$this->StaffModel->detailData($id)){

            abort(404);

        }

        $data = [
            'staff' => $this->StaffModel->detailData($id),
        ];

        return view('detailStaff', $data);

    }


    public function add()
    {

            $data = [
            'jabatan' => $this->JabatanModel->allData(),
            ];
        
        return view('addStaff', $data);

    }


    public function insert()
    {
        
        Request()->validate([
            'nip' => 'required|unique:tbl_staff,nip|min:4|max:16',
            'nama' => 'required',
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
   $file->move(public_path('source/img-staff'), $filename);

   $data = [
       'nip' => Request()->nip,
       'nama' => Request()->nama,
       'foto' => $filename,
       'tgl' => Request()->tgl,
       'alamat' => Request()->alamat,
       'jabatan' => Request()->jabatan,
   ];

   $this->StaffModel->addData($data);
   return redirect()->route('staff')->with('Pesan', 'Data Sukses Dikirim');

    }

    public function edit($id)
    {

        if(!$this->StaffModel->detailData($id)){

            abort(404);

        }

        $data = [
            'staff' => $this->StaffModel->detailData($id),
            'jabatan' => $this->JabatanModel->allData(),
        ];

        return view('editStaff', $data);
        
    }


    public function update($id)
    {
        
        Request()->validate([
            'nip' => 'min:4|max:16',
            'nama' => 'required',
            'foto' => 'mimes:jpg,jpeg,bmp,png|max:5000',
            'tgl' => 'required',
            'alamat' => 'required',
            'jabatan' => 'required',
        ],[
            'nip.min' => 'Minimal 4 Karakter !!!',
            'nip.max' => 'Maksimal 16 Karakter !!!',
            'nama.required' => 'Nama Wajib Diisi !!!',
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
   $file->move(public_path('source/img-staff'), $filename);

   $data = [
       'nip' => Request()->nip,
       'nama' => Request()->nama,
       'foto' => $filename,
       'tgl' => Request()->tgl,
       'alamat' => Request()->alamat,
       'jabatan' => Request()->jabatan,
   ];

   $this->StaffModel->editData($id, $data);
   

    }else{

        $data = [
            'nip' => Request()->nip,
            'nama' => Request()->nama,
            'tgl' => Request()->tgl,
            'alamat' => Request()->alamat,
            'jabatan' => Request()->jabatan,
        ];
     
        $this->StaffModel->editData($id, $data);
        

    }

   return redirect()->route('staff')->with('Pesan', 'Data Sukses Diupdate');

    }


    public function delete($id){

          
        $staff =$this->StaffModel->detailData($id);

        if($staff->foto <> ""){

            unlink(public_path('source/img-staff').'/'.$staff->foto);

        }

        $this->StaffModel->DeleteData($id);
        return redirect('/staff')->with('Pesan', 'Data Sukses Dihapus');
    }




}
