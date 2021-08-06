<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DetailAktual extends Model
{
    protected $table = "detail_aktual";
    protected $primaryKey = "id";
    protected $fillable = [
       'id','bantuan_dana_id','tgl','item','sub_item','spesifikasi','cost_day','quantity','total','foto'];
    
    public function rbantuandana(){
    return $this->belongsTo(BantuanDana::class, 'bantuan_dana_id');
    } 
}
