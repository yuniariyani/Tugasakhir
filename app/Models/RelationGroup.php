<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RelationGroup extends Model
{
    protected $table = "relation_group";
    protected $primaryKey = "id";
    protected $fillable = [
       'id','nama_kelompok','alamat_lahan','total_anggota','wilayah_lahan'];

    public function tesbloklahan(){

    return $this->hasMany(BlokLahan::class);
    }

    public function tesanggota(){

    return $this->hasOne(BlokLahan::class);
    }
}
