<?php

namespace App\Repositories;

use App\Models\monitoring;
use App\Repositories\BaseRepository;

/**
 * Class monitoringRepository
 * @package App\Repositories
 * @version July 15, 2021, 8:00 am UTC
*/

class monitoringRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'tanggal',
        'Poktan',
        'komoditas',
        'kadar_air',
        'suhu_tanah',
        'ph',
        'status_kesuburan',
        'kelembaban'
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
        return monitoring::class;
    }
}
