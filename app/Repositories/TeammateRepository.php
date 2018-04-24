<?php

namespace App\Repositories;

use App\Models\Teammate;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class TeammateRepository
 * @package App\Repositories
 * @version April 24, 2018, 11:50 am UTC
 *
 * @method Teammate findWithoutFail($id, $columns = ['*'])
 * @method Teammate find($id, $columns = ['*'])
 * @method Teammate first($columns = ['*'])
*/
class TeammateRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'name',
        'occupation',
        'img'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return Teammate::class;
    }
}
