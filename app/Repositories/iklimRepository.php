<?php

namespace App\Repositories;

use App\Models\iklim;
use App\Repositories\BaseRepository;

/**
 * Class iklimRepository
 * @package App\Repositories
 * @version July 15, 2021, 9:34 am UTC
*/

class iklimRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'tanggal',
        'kelompok_tani',
        'komoditas',
        'cuaca',
        'suhu'
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
        return iklim::class;
    }
}
