<?php

namespace App\Repositories;

use App\Models\EquipmentType;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class EquipmentTypeRepository
 * @package App\Repositories
 * @version June 18, 2019, 4:03 pm UTC
 *
 * @method EquipmentType findWithoutFail($id, $columns = ['*'])
 * @method EquipmentType find($id, $columns = ['*'])
 * @method EquipmentType first($columns = ['*'])
*/
class EquipmentTypeRepository extends BaseRepository
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
        return EquipmentType::class;
    }
}
