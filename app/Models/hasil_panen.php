<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

/**
 * Class hasil_panen
 * @package App\Models
 * @version August 3, 2021, 5:44 pm UTC
 *
 * @property string $nama_kelompok
 * @property string $blok_lahan
 * @property string $komoditas
 * @property integer $jumlah_berhasil
 * @property integer $jumlah_gagal
 * @property string $satuan
 * @property string $tanggal_panen
 */
class hasil_panen extends Model
{
    use SoftDeletes;

    use HasFactory;

    public $table = 'hasil_panens';
    

    protected $dates = ['deleted_at'];



    public $fillable = [
        'nama_kelompok',
        'blok_lahan',
        'komoditas',
        'jumlah_berhasil',
        'jumlah_gagal',
        'satuan',
        'tanggal_panen'
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
        'jumlah_berhasil' => 'integer',
        'jumlah_gagal' => 'integer',
        'satuan' => 'string',
        'tanggal_panen' => 'date'
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
