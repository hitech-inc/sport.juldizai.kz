<?php

namespace App\Repositories;

use App\Models\Photo;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class PhotoRepository
 * @package App\Repositories
 * @version April 24, 2018, 11:19 am UTC
 *
 * @method Photo findWithoutFail($id, $columns = ['*'])
 * @method Photo find($id, $columns = ['*'])
 * @method Photo first($columns = ['*'])
*/
class PhotoRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'path',
        'alt'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return Photo::class;
    }
}
