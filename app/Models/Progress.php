<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Progress extends Model
{
    protected $table = "progress";
    protected $primaryKey = "id";
    protected $fillable = [
       'id','bantuan_dana_id','tgl','progress','foto'];
    
    public function rbantuandana(){
    return $this->belongsTo(BantuanDana ::class, 'bantuan_dana_id');
    }

    
}
     