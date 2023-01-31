<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;


class JabatanModel extends Model{

  protected $table = 'eskul';

    protected $fillable = [
      'nama_jabatan',
  ];

public function allData(){

return DB::table('daftar_jabatan')->get();

}

public function detailData($id){

  return DB::table('daftar_jabatan')->where('id_jabatan', $id)->first();

}


public function addData($data){
 DB::table('daftar_jabatan')->insert($data);
 }

 public function editData($id, $data)
 {
   DB::table('daftar_jabatan')
   ->where('id_jabatan', $id)
   ->update($data);
   }

   public function DeleteData($id){
     DB::table('daftar_jabatan')->where('id_jabatan', $id)->delete();
   }



}