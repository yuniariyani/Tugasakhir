<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Progress extends Model
{
    protected $table = "progress";
    protected $primaryKey = "id";
    protected $fillable = [
       'id','proyek_id','tgl','progress','foto'];
    
    public function relasiproyek(){
    return $this->belongsTo(Proyek::class, 'proyek_id');
    }

    
}
     