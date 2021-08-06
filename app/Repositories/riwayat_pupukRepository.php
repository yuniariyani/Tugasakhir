<?php

namespace App\Repositories;

use App\Models\riwayat_pupuk;
use App\Repositories\BaseRepository;

/**
 * Class riwayat_pupukRepository
 * @package App\Repositories
 * @version August 4, 2021, 1:48 pm UTC
*/

class riwayat_pupukRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'nama_kelompok',
        'blok_lahan',
        'komoditas',
        'tanggal_pupuk',
        'jenis_pupuk',
        'dosis_pupuk'
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
        return riwayat_pupuk::class;
    }
}
