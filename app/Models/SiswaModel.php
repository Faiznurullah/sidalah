<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;


class SiswaModel extends Model
{

  protected $table = "tbl_siswa";

  protected $primaryKey = "id";

    protected $fillable = [
      'nis',
      'nama',
      'kelas',
      'foto',
      'tgl',
      'alamat'
  ];
   
    public function allData(){

        return DB::table('tbl_siswa')->leftJoin('daftar_kelas', 'daftar_kelas.id_kelas', '=', 'tbl_siswa.kelas')->get();
     
      }

      public function detailData($id){

        return DB::table('tbl_siswa')->leftJoin('daftar_kelas', 'daftar_kelas.id_kelas', '=', 'tbl_siswa.kelas')->where('id', $id)->first();
     
      } 

      public function addData($data){
        DB::table('tbl_siswa')->insert($data);
        }

        public function editData($id, $data)
    {
      DB::table('tbl_siswa')
      ->where('id', $id)
      ->update($data);
      }

      public function DeleteData($id){
        DB::table('tbl_siswa')->where('id', $id)->delete();
      }
    



}