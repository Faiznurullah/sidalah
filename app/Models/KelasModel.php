<?php 
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class KelasModel extends Model
{

public function allData(){

return DB::table('daftar_kelas')->get();

}

public function detailData($id){

  return DB::table('daftar_kelas')->where('id_kelas', $id)->first();

}


public function addData($data){
 DB::table('daftar_kelas')->insert($data);
 }

 public function editData($id, $data)
 {
   DB::table('daftar_kelas')
   ->where('id_kelas', $id)
   ->update($data);
   }

   public function DeleteData($id){
     DB::table('daftar_kelas')->where('id_kelas', $id)->delete();
   }
   



}