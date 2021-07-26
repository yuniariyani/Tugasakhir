<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BlokLahan extends Model
{
    protected $table = "blok_lahan";
    protected $primaryKey = "id";
    protected $fillable = [
       'id','relation_group_id','nama_blok','luas_blok','komoditas','tanggal_tanam'];

       public function relasigroup(){
       return $this->belongsTo(RelationGroup::class, 'relation_group_id');
<<<<<<< HEAD
    }
       public function masalahLahan(){

        return $this->hasMany(masalahLahan::class);
    }
}
=======
       }
}

>>>>>>> ea8b9277b39de875075171eefe9cc75e8cd65a83
