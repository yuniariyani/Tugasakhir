<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Aktualcost extends Model
{
    protected $table = "aktualcost";
    protected $primaryKey = "id";
    protected $fillable = [
       'id','proyek_id','costbaseline_id','pengeluaran'];

    public function relasiproyek(){
    return $this->belongsTo(Proyek::class, 'proyek_id');
    }

    public function relasibaseline(){
    return $this->belongsTo(CostBaseline::class, 'costbaseline_id');
    }

    public function relasiaktual(){
    return $this->hasMany(DetailAktual::class);
    }
}
