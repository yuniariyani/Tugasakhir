<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;


/**
 * Class masalah
 * @package App\Models
 * @version July 15, 2021, 9:42 am UTC
 *
 * @property string $komoditas
 * @property string $blok
 * @property string $tanggal
 * @property string $masalah_lahan
 * @property string $status
 */
class masalah extends Model
{
    use SoftDeletes;

    use HasFactory;

    public $table = 'masalahs';
    

    protected $dates = ['deleted_at'];



    public $fillable = [
        'komoditas',
        'tanggal',
        'masalah_lahan',
        'status',
        'nama_kelompok',
        'bloklahan_id',
        'solusi',
        'tindak_lanjut' 
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'komoditas' => 'string',
        'tanggal' => 'date',
        'masalah_lahan' => 'string',
        'status' => 'string',
        'nama_kelompok' => 'integer',
        'bloklahan_id' => 'integer',
        'solusi' => 'string',
        'tindak_lanjut' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'komoditas' => 'required',
        'tanggal' => 'required',
        'masalah_lahan' => 'required',
        'status' => 'required',
        'nama_kelompok' => 'required',
        'bloklahan_id' => 'required',
        
    ];

    public function masalah(){

        return $this->belongsTo(RelationGroup::class, 'nama_kelompok');
        }

    public function bloklahan(){

        return $this->belongsTo(BlokLahan::class, 'bloklahan_id');
        }
    }
