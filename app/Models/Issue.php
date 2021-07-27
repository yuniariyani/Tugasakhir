<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class issue extends Model
{
    protected $table = "issue";
    protected $primaryKey = "id";
    protected $fillable = [
       'id','proyek_id','tgl','masalah','deskripsi','tingkat'];

    public function relasiproyek(){
    return $this->belongsTo(Proyek::class, 'proyek_id');
    }
}
