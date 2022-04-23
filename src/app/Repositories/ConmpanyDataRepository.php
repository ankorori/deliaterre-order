<?php

namespace App\Repositories;

use App\Models\ConmpanyData;
use App\Repositories\BaseRepository;

/**
 * Class ConmpanyDataRepository
 * @package App\Repositories
 * @version April 9, 2022, 10:39 pm JST
*/

class ConmpanyDataRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'name',
        'postlcode',
        'streetaddress',
        'phonenumber',
        'faxnumber'
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
        return ConmpanyData::class;
    }
}
