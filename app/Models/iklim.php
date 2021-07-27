<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

/**
 * Class iklim
 * @package App\Models
 * @version July 15, 2021, 9:34 am UTC
 *
 * @property string $tanggal
 * @property string $kelompok_tani
 * @property string $komoditas
 * @property string $cuaca
 * @property string $suhu
 */
class iklim extends Model
{
    use SoftDeletes;

    use HasFactory;

    public $table = 'iklims';
    

    protected $dates = ['deleted_at'];



    public $fillable = [
        'tanggal',
        'kelompok_tani',
        'komoditas',
        'cuaca',
        'suhu'
        
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'tanggal' => 'date',
        'kelompok_tani' => 'integer',
        'komoditas' => 'string',
        'cuaca' => 'string',
        'suhu' => 'string'
        
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'tanggal' => 'required',
        'kelompok_tani' => 'required',
        'komoditas' => 'required',
        'cuaca' => 'required',
        'suhu' => 'required'
    
    ];

    public function poktan(){
        return $this->belongsTo(RelationGroup::class, 'kelompok_tani');
        }
    
}
