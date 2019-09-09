<?php

namespace App\Repositories;

use App\Models\Brand;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class BrandRepository
 * @package App\Repositories
 * @version July 26, 2019, 10:27 am UTC
 *
 * @method Brand findWithoutFail($id, $columns = ['*'])
 * @method Brand find($id, $columns = ['*'])
 * @method Brand first($columns = ['*'])
*/
class BrandRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'name'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return Brand::class;
    }
}
