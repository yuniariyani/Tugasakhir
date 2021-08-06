<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CostBaseline extends Model
{
    protected $table = "cost_baseline";
    protected $primaryKey = "id";
    protected $fillable = [
       'id','proyek_id','kode_anggaran','total_anggaran'];

    public function relasiproyek(){
    return $this->belongsTo(Proyek::class, 'proyek_id');
    }

    public function costdetail(){
    return $this->hasOne(DetailCost::class);
    }

    public function relasiaktualcost(){
    return $this->hasOne(Aktualcost::class);
    }
}
