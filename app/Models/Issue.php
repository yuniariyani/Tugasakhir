<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class issue extends Model
{
    protected $table = "issue";
    protected $primaryKey = "id";
    protected $fillable = [
       'id','bantuan_dana_id','tgl','masalah','deskripsi','tingkat'];

    public function rbantuandana(){
    return $this->belongsTo(BantuanDana::class, 'bantuan_dana_id');
    }
}
