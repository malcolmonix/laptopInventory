<?php

namespace App\Repositories;

use App\Models\InventoryHistory;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class InventoryHistoryRepository
 * @package App\Repositories
 * @version June 18, 2019, 4:04 pm UTC
 *
 * @method InventoryHistory findWithoutFail($id, $columns = ['*'])
 * @method InventoryHistory find($id, $columns = ['*'])
 * @method InventoryHistory first($columns = ['*'])
*/
class InventoryHistoryRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'issue_date',
        'employee_id',
        'equipment_id',
        'project_id',
        'situation_id',
        'projectTo_id',
        'approvedby',
        'remarks',
        'user_id'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return InventoryHistory::class;
    }
}
