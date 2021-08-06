<?php

namespace App\Repositories;

use App\Models\pendapatan;
use App\Repositories\BaseRepository;

/**
 * Class pendapatanRepository
 * @package App\Repositories
 * @version August 5, 2021, 3:17 am UTC
*/

class pendapatanRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'nama_kelompok',
        'blok_lahan',
        'komoditas',
        'jumlah_berhasil',
        'jumlah_gagal',
        'satuan',
        'tanggal_panen',
        'pendapatan'
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
        return pendapatan::class;
    }
}
