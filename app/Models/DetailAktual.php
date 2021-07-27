<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DetailAktual extends Model
{
    protected $table = "detail_aktual";
    protected $primaryKey = "id";
    protected $fillable = [
       'id','aktual_id','tgl','item','sub_item','cost_day','quantity','total','foto'];
    
    public function aktual(){
    return $this->belongsTo(Aktualcost::class, 'aktual_id');
    } 
}
