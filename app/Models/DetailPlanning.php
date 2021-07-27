<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class DetailPlanning extends Model
{
    protected $table = "detail_planning";
    protected $primaryKey = "id";
    protected $fillable = [
       'id','proyek_id','kegiatan','sub_kegiatan','durasi','start','finish'];

    public function proyek(){
    return $this->belongsTo(Proyek::class, 'proyek_id');
    }  
    
   

}


  