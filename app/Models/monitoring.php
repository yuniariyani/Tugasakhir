<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

/**
 * Class monitoring
 * @package App\Models
 * @version July 15, 2021, 8:00 am UTC
 *
 * @property string $tanggal
 * @property string $Poktan
 * @property string $komoditas
 * @property integer $kadar_air
 * @property integer $suhu_tanah
 * @property string $ph
 * @property string $status_kesuburan
 * @property integer $kelembaban
 */
class monitoring extends Model
{
    use SoftDeletes;

    use HasFactory;

    public $table = 'monitorings';
    

    protected $dates = ['deleted_at'];



    public $fillable = [
        'tanggal',
        'komoditas',
        'kadar_air',
        'suhu_tanah',
        'ph',
        'status_kesuburan',
        'kelembaban',
        'relationgroup_id'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'tanggal' => 'date',
        'komoditas' => 'integer',
        'kadar_air' => 'integer',
        'suhu_tanah' => 'integer',
        'ph' => 'integer',
        'status_kesuburan' => 'string',
        'kelembaban' => 'integer',
        'relationgroup_id' => 'integer'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'tanggal' => 'required',
        'komoditas' => 'required',
        'kadar_air' => 'required',
        'suhu_tanah' => 'required',
        'ph' => 'required',
        'status_kesuburan' => 'required',
        'kelembaban' => 'required',
        'relationgroup_id' => 'required'
    ];

    public function kelompok(){

        return $this->belongsTo(RelationGroup::class, 'relationgroup_id');
        }
    public function jenis(){

        return $this->belongsTo(BlokLahan::class, 'komoditas');
        }
    }

