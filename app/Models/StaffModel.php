<?php



namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;


class StaffModel extends Model
{


  protected $table = "tbl_staff";

  protected $primaryKey = "id";

    protected $fillable = [
      'nip',
      'nama',
      'foto',
      'tgl',
      'alamat',
      'jabatan',
  ];


public function allData(){

   return DB::table('tbl_staff')->leftJoin('daftar_jabatan', 'daftar_jabatan.id_jabatan', '=', 'tbl_staff.jabatan')->get();

 }

 public function detailData($id){

    return DB::table('tbl_staff')->leftJoin('daftar_jabatan', 'daftar_jabatan.id_jabatan', '=', 'tbl_staff.jabatan')->where('id', $id)->first();
 
  }


  public function addData($data){
    DB::table('tbl_staff')->insert($data);
    }

    public function editData($id, $data)
    {
      DB::table('tbl_staff')
      ->where('id', $id)
      ->update($data);
      }

      public function DeleteData($id){
        DB::table('tbl_staff')->where('id', $id)->delete();
      }


}