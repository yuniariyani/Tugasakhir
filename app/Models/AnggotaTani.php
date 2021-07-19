<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AnggotaTani extends Model
{
    protected $table = "anggota_tani";
    protected $primaryKey = "id";
    protected $fillable = [
       'id','nama_petani','nohp','jabatan','nama_kelompok', 'wilayah_lahan','alamat_lahan_contoh'];

       
       //public function tesLahan(){
      // return $this->belongsTo(Lahan::class, 'lahan_id');

      public function tesanggota(){

     return $this->hasMany(BlokLahan::class);
}//}
}