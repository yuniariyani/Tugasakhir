<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CostBaseline extends Model
{
    protected $table = "cost_baseline";
    protected $primaryKey = "id";
    protected $fillable = [
       'id','bantuan_dana_id','item','sub_item','spesifikasi','cost_day','quantity','total'];
    
    public function rbantuandana(){
    return $this->belongsTo(BantuanDana::class, 'bantuan_dana_id');
    }  
}