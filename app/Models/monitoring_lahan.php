<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

/**
 * Class monitoring_lahan
 * @package App\Models
 * @version July 15, 2021, 6:10 am UTC
 *
 * @property string $poktan
 * @property string $komoditas
 */
class monitoring_lahan extends Model
{
    use SoftDeletes;

    use HasFactory;

    public $table = 'monitoring_lahans';
    

    protected $dates = ['deleted_at'];



    public $fillable = [
        'poktan',
        'komoditas'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'poktan' => 'string',
        'komoditas' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'poktan' => 'required',
        'komoditas' => 'required'
    ];

    
}
