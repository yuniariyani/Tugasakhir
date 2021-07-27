<?php

namespace App\Repositories;

use App\Models\masalah;
use App\Repositories\BaseRepository;

/**
 * Class masalahRepository
 * @package App\Repositories
 * @version July 15, 2021, 9:42 am UTC
*/

class masalahRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
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
     * Return searchable fields
     *
     * @return array
     */
    public function getFieldsSearchable()
    {
        return $this->fieldSearchable;
    }

    /**
     * Configure the Model
     **/
    public function model()
    {
        return masalah::class;
    }
}
