<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

/**
 * Class riwayat_pupuk
 * @package App\Models
 * @version August 4, 2021, 1:48 pm UTC
 *
 * @property string $nama_kelompok
 * @property string $blok_lahan
 * @property string $komoditas
 * @property string $tanggal_pupuk
 * @property string $jenis_pupuk
 * @property integer $dosis_pupuk
 */
class riwayat_pupuk extends Model
{
    use SoftDeletes;

    use HasFactory;

    public $table = 'riwayat_pupuks';
    

    protected $dates = ['deleted_at'];



    public $fillable = [
        'nama_kelompok',
        'blok_lahan',
        'komoditas',
        'tanggal_pupuk',
        'jenis_pupuk',
        'dosis_pupuk'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'nama_kelompok' => 'string',
        'blok_lahan' => 'string',
        'komoditas' => 'string',
        'tanggal_pupuk' => 'date',
        'jenis_pupuk' => 'string',
        'dosis_pupuk' => 'integer'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'nama_kelompok' => 'required',
        'blok_lahan' => 'required',
        'komoditas' => 'required'
    ];

    public function poktan() {
        return $this->belongsTo(RelationGroup::class, 'nama_kelompok');
    }

    public function blok() {
        return $this->belongsTo(BlokLahan::class, 'blok_lahan');
    }
}
