<?php

namespace App\Repositories;

use App\Models\monitoring_lahan;
use App\Repositories\BaseRepository;

/**
 * Class monitoring_lahanRepository
 * @package App\Repositories
 * @version July 15, 2021, 6:10 am UTC
*/

class monitoring_lahanRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'poktan',
        'komoditas'
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
        return monitoring_lahan::class;
    }
}
