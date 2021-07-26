<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AnggotaTani extends Model
{
    protected $table = "anggota_tani";
    protected $primaryKey = "id";
    protected $fillable = [
       'id','nama_petani','nohp','jabatan','relation_group_id'];


     public function relasigroup(){
       return $this->belongsTo(RelationGroup::class, 'relation_group_id');
       }

}