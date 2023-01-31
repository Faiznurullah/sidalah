<?php

namespace App\Models;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class VisiModel extends Model
{
    use HasFactory;

    protected $table = 'visi';

    protected $fillable = [
      'nama',
  ];

  public function allData()
  {
    return DB::table('visi')->get();
  }

  public function addData($data)
    {
    DB::table('visi')->insert($data);
    }

    public function editData($id, $data)
    {
      DB::table('visi')
      ->where('id', $id)
      ->update($data);
    } 

    public function DeleteData($id)
    {
      DB::table('visi')->where('id', $id)->delete();
    }
    public function detailData($id){

      return DB::table('visi')->where('id', $id)->first();
    
    }


}
