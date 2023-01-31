<?php

namespace App\Models;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class EskulModel extends Model
{
    use HasFactory;

    protected $table = 'eskul';

    protected $fillable = [
      'nama',
      'deskripsi',
      'foto',
  ];

    public function allData(){

        return DB::table('eskul')->get();
     
      }
     
      public function detailData($id){
     
         return DB::table('eskul')->where('id', $id)->first();
      
       }
     
     
       public function addData($data){
         DB::table('eskul')->insert($data);
         }
     
         public function editData($id, $data)
         {
           DB::table('eskul')
           ->where('id', $id)
           ->update($data);
           }
     
           public function DeleteData($id){
             DB::table('eskul')->where('id', $id)->delete();
           }
     


}
