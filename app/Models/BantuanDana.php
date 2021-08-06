<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class BantuanDana extends Model
{
    protected $table = "bantuan_dana";
    protected $primaryKey = "id";
    protected $fillable = [
       'id','relation_group_id','kode_bantuan','kategori_bantuan','nama_bantuan','status'];


    public function relasigroup(){
    return $this->belongsTo(RelationGroup::class, 'relation_group_id');
    }

    public function detailplanning(){
    return $this->hasMany(DetailPlanning::class);
    }

    public function detailcost(){
    return $this->hasMany(CostBaseline::class);
    }

    public function aktualcost(){
    return $this->hasMany(DetailAktual::class);
    }

    public function progress(){
    return $this->hasMany(Progress::class);
    }
    public function issue(){
    return $this->hasMany(Issue::class);
    }
}
