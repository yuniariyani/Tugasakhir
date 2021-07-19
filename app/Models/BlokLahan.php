<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BlokLahan extends Model
{
    protected $table = "blok_lahan";
    protected $primaryKey = "id";
    protected $fillable = [
       'id','anggota_id','nama_blok','luas_blok','komoditas','tanggal_tanam'];

       public function anggota(){
       return $this->belongsTo(AnggotaTani::class, 'anggota_id');
       }
}
