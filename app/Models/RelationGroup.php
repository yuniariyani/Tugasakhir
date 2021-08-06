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


    public function tesproyek(){                 //Delete Soon
    return $this->hasMany(Proyek::class);
    }
    public function monitoringlahan(){

        return $this->hasMany(monitoring::class);
        }
    public function iklim(){

        return $this->hasMany(iklim::class);
        }
    public function masalah(){

        return $this->hasMany(masalah::class);
        }
    
    //Struktur Baru
    public function rbantuandana(){            
    return $this->hasMany(BantuanDana::class);
    }
}

