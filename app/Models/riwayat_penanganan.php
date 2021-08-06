<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

/**
 * Class riwayat_penanganan
 * @package App\Models
 * @version August 5, 2021, 4:41 am UTC
 *
 * @property string $nama_kelompok
 * @property string $blok_lahan
 * @property string $gejala
 * @property string $jenis_penanganan
 * @property string $deskripsi
 */
class riwayat_penanganan extends Model
{
    use SoftDeletes;

    use HasFactory;

    public $table = 'riwayat_penanganans';
    

    protected $dates = ['deleted_at'];



    public $fillable = [
        'nama_kelompok',
        'blok_lahan',
        'gejala',
        'jenis_penanganan',
        'deskripsi'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'nama_kelompok' => 'string',
        'blok_lahan' => 'string',
        'gejala' => 'string',
        'jenis_penanganan' => 'string',
        'deskripsi' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'nama_kelompok' => 'required',
        'blok_lahan' => 'required'
    ];

    public function poktan() {
        return $this->belongsTo(RelationGroup::class, 'nama_kelompok');
    }

    public function blok() {
        return $this->belongsTo(BlokLahan::class, 'blok_lahan');
    }
}
