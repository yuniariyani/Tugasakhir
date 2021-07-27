<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DetailCost extends Model
{
    protected $table = "detail_cost";
    protected $primaryKey = "id";
    protected $fillable = [
       'id','costbaseline_id','item','sub_item','cost_day','cost_hour','quantity','total'];
    
    public function costbaseline(){
    return $this->belongsTo(CostBaseline::class, 'costbaseline_id');
    }  
}
