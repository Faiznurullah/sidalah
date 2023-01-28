<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class FasilitasModel extends Model
{
   
   protected $table = 'fasilitas';

    public function allData(){

        return DB::table('fasilitas')->get();
     
      }
     
      public function detailData($id){
     
         return DB::table('fasilitas')->where('id', $id)->first();
      
       }
     
     
       public function addData($data){
         DB::table('fasilitas')->insert($data);
         }
     
         public function editData($id, $data)
         {
           DB::table('fasilitas')
           ->where('id', $id)
           ->update($data);
           }
     
           public function DeleteData($id){
             DB::table('fasilitas')->where('id', $id)->delete();
           }
     






}
