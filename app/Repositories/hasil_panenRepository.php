<?php

namespace App\Repositories;

use App\Models\hasil_panen;
use App\Repositories\BaseRepository;

/**
 * Class hasil_panenRepository
 * @package App\Repositories
 * @version August 3, 2021, 5:44 pm UTC
*/

class hasil_panenRepository extends BaseRepository
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
        'tanggal_panen'
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
        return hasil_panen::class;
    }
}
