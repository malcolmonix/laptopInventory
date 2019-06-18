<?php

namespace App\Repositories;

use App\Models\Equipment;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class EquipmentRepository
 * @package App\Repositories
 * @version June 18, 2019, 4:02 pm UTC
 *
 * @method Equipment findWithoutFail($id, $columns = ['*'])
 * @method Equipment find($id, $columns = ['*'])
 * @method Equipment first($columns = ['*'])
*/
class EquipmentRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'name',
        'model',
        'serialnumber',
        'equipment_type_id',
        'status'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return Equipment::class;
    }
}
