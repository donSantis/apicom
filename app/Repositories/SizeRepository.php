<?php

namespace App\Repositories;

use App\Models\Size;
use App\Repositories\BaseRepository;

/**
 * Class SizeRepository
 * @package App\Repositories
 * @version July 27, 2022, 4:43 am UTC
*/

class SizeRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'title'
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
        return Size::class;
    }
}
