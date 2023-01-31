<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class GuruModel extends Model
{
   
  protected $table = "tbl_guru";

    protected $fillable = [
      'nip',
      'nama',
      'mapel',
      'wali_kelas',
      'foto',
      'tgl',
      'alamat',
      'jabatan'
  ];


 public function allData(){

   return DB::table('tbl_guru')
   ->leftJoin('daftar_jabatan', 'daftar_jabatan.id_jabatan', '=', 'tbl_guru.jabatan')
   ->get();

 }
 
 

 public function detailData($id){



    return DB::table('tbl_guru')->leftJoin('daftar_jabatan', 'daftar_jabatan.id_jabatan', '=', 'tbl_guru.jabatan')->where('id', $id)->first();

 
  }
  
  public function addData($data){
    DB::table('tbl_guru')->insert($data);
    }

    public function editData($id, $data)
    {
      DB::table('tbl_guru')
      ->where('id', $id)
      ->update($data);
      }

      public function DeleteData($id){
        DB::table('tbl_guru')->where('id', $id)->delete();
      }


}
