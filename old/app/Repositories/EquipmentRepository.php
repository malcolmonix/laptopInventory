<?php

namespace App\Repositories;

use App\Models\Equipment;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class EquipmentRepository
 * @package App\Repositories
 * @version July 26, 2019, 10:44 am UTC
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
        'brand_id',
        'serialnumber',
        'equipment_type_id',
        'situation_id',
        'status',
        'user_id',
        'computer_name',
        'mac_address',
        'ip_address',
        'comment'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return Equipment::class;
    }
}
