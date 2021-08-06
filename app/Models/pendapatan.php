<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

/**
 * Class pendapatan
 * @package App\Models
 * @version August 5, 2021, 3:17 am UTC
 *
 * @property string $nama_kelompok
 * @property string $blok_lahan
 * @property string $komoditas
 * @property integer $jumlah_berhasil
 * @property integer $jumlah_gagal
 * @property string $satuan
 * @property string $tanggal_panen
 * @property integer $pendapatan
 */
class pendapatan extends Model
{
    use SoftDeletes;

    use HasFactory;

    public $table = 'hasil_panens';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];



    public $fillable = [
        'nama_kelompok',
        'blok_lahan',
        'komoditas',
        'jumlah_berhasil',
        // 'jumlah_gagal',
        'satuan',
        'tanggal_panen',
        'pendapatan'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'nama_kelompok' => 'string',
        'blok_lahan' => 'string',
        'komoditas' => 'string',
        'jumlah_berhasil' => 'integer',
        // 'jumlah_gagal' => 'integer',
        'satuan' => 'string',
        'tanggal_panen' => 'date',
        'pendapatan' => 'integer'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'nama_kelompok' => 'required|string|max:255',
        'blok_lahan' => 'required|string|max:255',
        'komoditas' => 'required|string|max:255',
        'jumlah_berhasil' => 'required|integer',
        // 'jumlah_gagal' => 'required|integer',
        'satuan' => 'required|string|max:255',
        'tanggal_panen' => 'required',
        'pendapatan' => 'required|integer',
        'created_at' => 'nullable',
        'updated_at' => 'nullable',
        'deleted_at' => 'nullable'
    ];

    // public function hasilPanen()
    // {
    //     return $this->belongsTo(hasil_panen::class, 'nama_kelompok');
    // }
    
    public function poktan() {
        return $this->belongsTo(RelationGroup::class, 'nama_kelompok');
    }

    public function blok() {
        return $this->belongsTo(BlokLahan::class, 'blok_lahan');
    }
}
