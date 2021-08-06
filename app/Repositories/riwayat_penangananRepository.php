<?php

namespace App\Repositories;

use App\Models\riwayat_penanganan;
use App\Repositories\BaseRepository;

/**
 * Class riwayat_penangananRepository
 * @package App\Repositories
 * @version August 5, 2021, 4:41 am UTC
*/

class riwayat_penangananRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'nama_kelompok',
        'blok_lahan',
        'gejala',
        'jenis_penanganan',
        'deskripsi'
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
        return riwayat_penanganan::class;
    }
}
