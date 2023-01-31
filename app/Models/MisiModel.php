<?php

namespace App\Models;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class MisiModel extends Model
{
    use HasFactory;

    protected $table = 'misi';

    protected $fillable = [
      'nama',
  ];

  public function allData()
  {
    return DB::table('misi')->get();
  }

  public function addData($data)
    {
    DB::table('misi')->insert($data);
    }

    public function editData($id, $data)
    {
      DB::table('misi')
      ->where('id', $id)
      ->update($data);
    } 

    public function DeleteData($id)
    {
      DB::table('misi')->where('id', $id)->delete();
    }
    public function detailData($id){

      return DB::table('misi')->where('id', $id)->first();
    
    }

  
}
