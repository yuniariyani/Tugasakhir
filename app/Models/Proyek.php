<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Proyek extends Model
{
    protected $table = "proyek";
    protected $primaryKey = "id";
    protected $fillable = [
       'id','relation_group_id','kode_proyek','nama_proyek','start_proyek','finish_proyek'];


    public function relasigroup(){
    return $this->belongsTo(RelationGroup::class, 'relation_group_id');
    }
    
    public function detailplanning(){
    return $this->hasMany(DetailPlanning::class);
    }

    public function costplanning(){
    return $this->hasOne(CostBaseline::class);
    }

    public function progress(){
    return $this->hasMany(CostBaseline::class);
    }

    public function issue(){
    return $this->hasMany(Issue::class);
    }

    public function relasiaktualcost(){
    return $this->hasOne(Aktualcost::class);
    }

    
       
}
